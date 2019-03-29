<?php
namespace App\Http\Controllers\API\User;
use Illuminate\Http\Request; 
use App\Http\Controllers\Controller; 
use App\Model\User; 
// use Illuminate\Support\Facades\Auth; 

class UserController extends Controller 
{
  public function index()

    {
     
     $user =User::all();
     return response()->json($user); 


    }
        
      
    public function store(Request $request) 
    { 
        $user= new User;
        $user->name=$request['name'];
        $user->email=$request['email'];
        $user->email_verified_at=$request['email_verified_at'];
        $user->password=$request['password'];
        $user->avatar=$request['avatar'];
        $user->lastName=$request['lastName'];
        $user->gender=$request['gender'];
        $user->mobileNo=$request['mobileNo'];
        $user->locationCode=$request['locationCode'];
        $user->departmentCode=$request['departmentCode'];
         $user->saluationCode=$request['saluationCode'];
        $user->designationCode=$request['designationCode'];
        $user->remember_token=$request['remember_token'];
        $user->save();
         return response()->json($user); 
    }
/** 
     * details api 
     * 
     * @return \Illuminate\Http\Response 
     */ 
    public function show($id)

     {
         $user = User::find($id);
         return response()->json($user);
     }

     public function update(Request $request, $id)
     {

        $user = User::find($id);
        $user->name=$request['name'];
        $user->email=$request['email'];
        $user->email_verified_at=$request['email_verified_at'];
        $user->password=$request['password'];
        $user->avatar=$request['avatar'];
        $user->lastName=$request['lastName'];
        $user->gender=$request['gender'];
        $user->mobileNo=$request['mobileNo'];
        $user->locationCode=$request['locationCode'];
        $user->departmentCode=$request['departmentCode'];
        $user->saluationCode=$request['saluationCode'];
        $user->designationCode=$request['designationCode'];
        $user->remember_token=$request['remember_token'];
        $user->save();
         return response()->json($user); 
     }

     public function destroy($id)
     {
        $user =User::find($id);
        $user->delete();
        return response()->json('User removed successfully');
     }
}