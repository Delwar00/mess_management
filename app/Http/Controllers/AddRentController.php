<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\AddRent;
use Carbon\Carbon;
use Auth;

class AddRentController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['all_rent']=User::join('add_rents', 'add_rents.user_id', '=', 'users.id')
            ->select('add_rents.*','users.*')
            ->orderBy('users.id', 'DESC')
            ->get();
         return view('rent.allRent',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['user_info']=User::Where('status','=',2)->get();
        return view('rent.addRent',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $added_by_user="";
      $user=User::Where('status','=',2)->pluck('id');
      foreach ($user as $added_by) {
         $added_by_user=$added_by;
      }
      AddRent::create([
          'user_id' => $request->name,
          'added_by'=>$added_by_user,
          'rent_home'=>$request->rent_home,
          'rent_electricity'=>$request->rent_electricity,
          'rent_gas'=>$request->rent_gas,
          'rent_cooker'=>$request->rent_cooker,
          'rent_extra'=>$request->rent_extra,
        ]);
        return back()->with('status','Rent Added Sucessfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['total_user']=User::count();
        $data['per_month_rent'] = AddRent::Where()->find($id);
        return view('rent.viewRent', $data);
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
