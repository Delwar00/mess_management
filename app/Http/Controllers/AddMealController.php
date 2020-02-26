<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\AddMeal;
use Carbon\Carbon;
use Auth;

class AddMealController extends Controller
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
        $data['all_meal']=User::join('add_meals', 'add_meals.user_id', '=', 'users.id')
            ->select('add_meals.*','users.*')
            ->orderBy('users.id', 'DESC')
            ->with('getUserInfo')
            ->get();
         return view('meal.allMeal',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['user_info']=User::all();
        return view('meal.addMeal',$data);
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
      AddMeal::create([
          'user_id' => $request->name,
          'added_by'=>$added_by_user,
          'meal_date'=>$request->meal_date,
          'meal_number'=>$request->meal_number,
        ]);
        return back()->with('status','Meal Added Sucessfully.');
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
