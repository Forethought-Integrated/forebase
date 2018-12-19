<?php

namespace App\Http\Controllers\UserProfile;

use App\Http\Requests\UserProfileRequest;
use App\Model\UserProfile;
use App\Model\User;
use App\Http\Controllers\Controller;


class UserProfileController extends Controller
{
    public function index()
    {
        // $userprofiles = UserProfile::latest()->get();

         $users = DB::table('users')->get();

        return view('User.listUser', ['users' => $users]);

        // return response()->json($userprofiles);
    }

     public function create()
    {
        return view('User.addUser');
        //
    }

    public function store(UserProfileRequest $request)
    {
        // $userprofile = UserProfile::create($request->all());

        // return response()->json($userprofile, 201);

        User::create([
        'name' => $request['name'],
        'email' => $request['email'],
        'password' => bcrypt($request['password']),
    ]);
      return redirect('/user');
    }

    public function show($id)
    {
        // $userprofile = UserProfile::findOrFail($id);

        // return response()->json($userprofile);

        $iddd=Auth::user()->id;

        if($idd == $iddd)
        {
            $user = DB::table('users')->where('id',$idd )->first();

        // working show user profile
            return view('User.editShowUser', ['users' => $user]);
        // testing sshow user profile
      //  return view('sshowUserProfile', ['users' => $user]);
        //return view('adminDashboard');method="POST" action="/userUpload" 
        }
        else
        {

            $user = DB::table('users')->where('id',$idd )->first();

        // working show user profile
            return view('User.showUser', ['users' => $user]);            
        }

    }

     public function edit($idd)
    {

            $user = $this->get_singel_data($idd);
            
        // show the view and pass the lead to it
        return view('User.editShowUser',['user'=>$user]);

    }

    public function update(UserProfileRequest $request, $id)
    {
        // $userprofile = UserProfile::findOrFail($id);
        // $userprofile->update($request->all());

        // return response()->json($userprofile, 200);

                 DB::table('users')->where('id', $id)->update(['name' => $request->name]);

              return redirect('/user');


    }

    public function destroy($id)
    {
        // UserProfile::destroy($id);

        // return response()->json(null, 204);

           if($idd=="1")
        {
            return redirect('/user');
        }
        else
        {
            DB::table('users')->where('id','=' ,$idd)->delete();

            return redirect('/user');
        }
     

    }

    public function uploadImage(Request $request)
    {
        //$name = $request->name;

    if($request->hasFile('avatar')){
        $avatar=$request->file('avatar');
        $filename = time().'.'.$avatar->getClientOriginalExtention();
        // Image::make($avatar)->resize(300,300)->save(public_path('/uploads/avatar/'.$filename));
        Image::make($avatar)->resize(300,300)->save(public_path('/uploads/avatar/'.$filename));

        $user = Auth::user();
        $user->avatar = $filename;
        $user->save();

    }

    //return view('showUserProfile', ['users' => $user]);
    return redirect()->back();
    }



}
