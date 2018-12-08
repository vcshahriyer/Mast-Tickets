<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Bus;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        $id = Auth::id();
        $company = DB::table('users as u')
            ->join('companies','u.company','companies.name')
            ->select('companies.id','u.company','u.image')
            ->where('u.id','=',$id)
            ->first();
        $cid =$company->id;

        $orders = DB::table('bookings as bo')
            ->leftJoin('buses as bs','bo.bus_id','bs.id')
            ->select('bs.company_id','bs.bus_model','bs.route_from','bs.route_to','bs.dept_time'
            ,'bs.seats','bs.fare','bo.*')
            ->where('bs.company_id',$cid)
            ->latest('dept_date')
            ->get();

        $revenue = DB::table('bookings as b')
            ->leftJoin('buses as bs','b.bus_id','bs.id')
            ->where('bs.company_id',$cid)
            ->select('b.bus_id','bs.company_id','bs.fare', DB::raw('SUM(b.booked_seats) as total_booked'))
            ->groupBy('b.bus_id','bs.company_id','bs.fare')
            ->get();
//        dd($revenue);
        $buses = Bus::where('company_id',$cid)->get();
        $customers =DB::table('bookings')->leftJoin('buses','bookings.bus_id','buses.id')
            ->where('company_id',$cid)->distinct('cs_mobile')->count('cs_mobile');

        return view('dashboard.main',['user'=>$company,'orders'=>$orders,
            'revenue'=>$revenue,'buses'=>$buses,'customers'=>$customers]);
    }

    public  function busInsertForm(){
        $id = Auth::id();
        $user = User::find($id);
        return view('dashboard.register-bus',['user'=>$user]);
    }

    public  function busInsert(Request $request){
        $validatedData = $request->validate([
            'busModel' => 'required|string|max:50',
            'busType' => 'required|string|max:6',
            'source' => 'required|alpha|max:50',
            'destination' => 'required|alpha|max:150',
            'deptTime' => 'required|date_format:H:i',
            'arrTime' => 'required|date_format:H:i',
            'seats' => 'required|numeric',
            'fare' => 'required|numeric'
        ]);
        $id = Auth::id();
        $company = DB::table('users as u')
            ->join('companies','u.company','companies.name')
            ->select('companies.id')
            ->where('u.id','=',$id)
            ->first();
        $cid =$company->id;
        $bus = new Bus;
            $bus->company_id =$cid;
            $bus->bus_model = $request->busModel;
            $bus->bus_type = $request->busType;
            $bus->route_from = $request->source;
            $bus->route_to = $request->destination;
            $bus->dept_time = $request->deptTime;
            $bus->arr_time = $request->arrTime;
            $bus->seats = $request->seats;
            $bus->fare = $request->fare;
            $bus->available = 'true';
        $bus->save();
        return redirect()->back()->with('message', 'Bus successfully added !');
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
