<?php

namespace App\Http\Controllers\User;

// use App\Http\Requests\UserProfileRequest;
// use App\Model\UserProfile;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Traits\User\UserModelHelper;



class UserController extends Controller
{
    use UserModelHelper;

    public function getSearchUser($data=Null)
    {
       return response()->json($this->getUserData(5,$field,$data));
       // return $this->getUserData($data);
    }

    public function getSearchUserFieldLike($field,$data=Null)
    {
       return response()->json($this->getUserData(5,$field,$data));
       return response()->json($this->getUserData($data));
       // return response()->json($this->getUserFieldLikeData($field,$data));

    	// if($data==Null)
    	// {
    	// 	return 'data Null';
    	// }
    	// else
    	// {
    	// 	return ' Not data Null';

    	// }
       // return response()->json($this->getUserData($data));
       // return $this->getUserData($data);
    }

}
