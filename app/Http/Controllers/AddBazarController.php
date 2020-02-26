<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\AddBazar;
use Carbon\Carbon;
use Auth;
class AddBazarController extends Controller
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
        $data['all_bazar']=User::join('add_bazars', 'add_bazars.user_id', '=', 'users.id')
            ->select('add_bazars.*','users.*')
            ->orderBy('users.id', 'DESC')
            ->with('getUserInfo')
            ->get();
        return view('bazar.allBazarList',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['user_info']=User::all();
        return view('bazar.addBazar',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        AddBazar::create([
            'user_id'=>$request->name,
            'product_name' => $request->product_name,
            'bazar_date'=>$request->bazar_date,
            'add_bazar_cost' => $request->add_bazar_cost,
          ]);
          return back()->with('status','Bazar Added Sucessfully.');
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
