<?php

namespace App\Http\Controllers;

use App\Bus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Booking;
use App\Company;
use Illuminate\Support\Facades\Hash;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
	public function view_seats( Request $request,$date,$cid,$bid){
        $buses = DB::table('buses')
                ->join('companies','buses.company_id','companies.id')
                ->select('companies.name','buses.fare','buses.id')
                ->where('buses.company_id','=',$cid)
                ->where('buses.id','=',$bid)
                ->first();
        $booked_seat = DB::table('bookings as b')
            ->where('b.dept_date','=',$date)
            ->where('b.bus_id',$bid)
            ->select('b.dept_date','b.bus_id', DB::raw('GROUP_CONCAT(b.my_seats SEPARATOR \',\') as seats'))
            ->groupBy('b.dept_date','b.bus_id')
            ->first();
        return view('Booking.booking-form',['buses'=>$buses,'booked_seat'=>$booked_seat,'date'=>$date]);
	}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function search(Request $request){
	    $validatedData = $request->validate([
		    'from' => 'required|alpha|max:25',
		    'to' => 'required|alpha|max:25',
		    'date' => 'required|Date|after:today'
	    ]);
	    $from = $request->input('from');
        $to = $request->input('to');
        $date = $request->input('date');
        $buses = DB::table('buses as b')
            ->leftJoin('companies','b.company_id','companies.id')
            ->leftJoin('statuses','b.id','statuses.bus_id')
            ->where('b.route_from','=',$from)
            ->where('b.route_to','=',$to)
            ->Where('b.available','=','true')
            ->select('companies.name','b.*')
            ->get();
//            ->orwhereDate('statuses.till','<',Carbon::parse($date)->format('Y-m-d'))
        $booked_seat = DB::table('bookings as b')
		             ->where('b.dept_date','=',Carbon::parse($date)->format('Y-m-d'))
		             ->select('b.dept_date','b.bus_id', DB::raw('SUM(b.booked_seats) as total_booked'))
		             ->groupBy('b.dept_date','b.bus_id')
	                 ->get();
        $companies = Company::all();
        return view("Booking.search-table",['buses'=> $buses,'booked_seat'=>$booked_seat,'dept_date'=>$date,'companies'=>$companies]);
    }
	public function myTickets(){
    	return view('Booking.my-tickets');
	}
	public function findTickets(Request $request){
		$validatedData = $request->validate([
			'phone' => 'required|regex:/(01)[0-9]{9}/|exists:bookings,cs_mobile',
            'date'  => 'Date|nullable'
		]);
		$date = $request->date;
		$tickets = DB::table('bookings')
			->join('buses','bookings.bus_id','buses.id')
			->leftJoin('companies','buses.company_id','companies.id')
			->where('bookings.cs_mobile','=',$request->input('phone'));
        if(isset($date)){
            $tickets->where('bookings.dept_date',Carbon::parse($date)->format('Y-m-d'));
        }
        $tickets = $tickets->latest('dept_date')->get();
		$name = Booking::where('cs_mobile','=',$request->input('phone'))->first();
		return  view('Booking.view-tickets',['tickets'=>$tickets,'name'=>$name]);
	}
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function process(Request $request)
    {
//        $data = $request->json()->all();
//        return response()->json(['success'=>$data]);
    }
    public function store (Request $request){
        $validatedData = $request->validate([
            'seats' => 'required|string|max:200',
            'name'  => 'required|string|max:50',
            'bus_id' => 'required|numeric',
            'date' => 'required|Date',
            'email' => 'required|string|max:200',
            'phone' => 'required|regex:/(01)[0-9]{9}/',
            'password' => 'required|string|min:6|confirmed',
        ]);
        $temp = explode(",",$request->seats);
        $total = count($temp)-1;
        $temp2 = DB::table('buses as b')
            ->select('b.id')
            ->where('b.id','=',$request->bus_id)
            ->first();
        $busID =$temp2->id;
        $booking  = new Booking;
        $booking->bus_id = $busID;
        $booking->dept_date = $request->date;
        $booking->my_seats = $request->seats;
        $booking->booked_seats = $total;
        $booking->pay_status = 'false';
        $booking->cs_name = $request->name;
        $booking->cs_mobile = $request->phone;
        $booking->cs_email = $request->phone;
        $booking->cs_pass = Hash::make($request->password);
        $booking->save();

        return redirect()->back()->with('message', 'Order successfully placed !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
