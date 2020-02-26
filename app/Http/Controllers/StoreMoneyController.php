<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Store_Money;
use Carbon\Carbon;
use Auth;

class StoreMoneyController extends Controller
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
         $data['store_amount']= User::join('store__money', 'store__money.user_id', '=', 'users.id')
            ->select('store__money.*','users.*')
            ->orderBy('users.id', 'DESC')
            ->with('getUserInfo')
            ->get();
          return view('store.allStoreAmount',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['user_info']=User::all();
        return view('store.addMoney',$data);
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
      Store_Money::create([
          'user_id' => $request->name,
          'added_by'=>$added_by_user,
          'add_amount'=>$request->add_amount,
        ]);
        return back()->with('status','Amount Added Sucessfully.');
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
        $data['store_update']=User::join('store__money', 'store__money.user_id', '=', 'users.id')
        ->findOrFail($id);
        return view('store.storeUpdate',$data);
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
        $add_amount=0;
        
         Store_Money::where([['user_id', $id]])->update([

            "add_amount"  => $request->add_amount,

        ]);
        return redirect()->route('store.edit', [$id])->with('status', 'Member Information Updated Successfully.');
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
