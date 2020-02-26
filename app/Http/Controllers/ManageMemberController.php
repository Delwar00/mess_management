<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\ManageMember;
use App\User;
use Carbon\Carbon;
use Auth;
class ManageMemberController extends Controller
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
        $data['user_data']=User::paginate(10);
        return view('member.allMemberList',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('member.addMember');

  }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\ManageMember  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ManageMember $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'university'=>$request->university,
            'department'=>$request->department,
            'phone'=>$request->phone,
            'password' =>Hash::make($request->password),
          ]);
          return back()->with('status','Member Added Sucessfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
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
        $data['user_info_update'] = User::where('id', $id)->find($id);
        return view('member.memberUpdateInfo',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id )
    {
            User::where('id', $id)->update([
                "name"    => $request->name,
                "university" => $request->university,
                "department" => $request->department,
                "email" => $request->email,
                "phone" => $request->phone,
            ]);
            return redirect()->route('member.edit', [$id])->with('status', 'Member Information Updated Successfully.');

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      User::where('id','=',$id)->delete();
      return back();
    }

        /**
         * this function works as a user acts as a manager or as a member.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
    public function MemberActivity($id)
    {
      User::where('status','=',2)->update([
        'status'=>1,
      ]);
      User::where('id','=',$id)->update([
            'status'=>2,
      ]);
      return back();
    }


}
