<?php

namespace App\Traits\User;
use App\User;



trait UserModelHelper
{
    // This method take three arguments as parameter 
    // 1st $page=numeric value tell how many paginate data
    //2nd $field= user table field name
    //3rd data= this data match with records in the fselected field
    public function getUserData($page,$field=Null,$data=Null)
    {
        if($field)
        {
            if($data)
            {
              return User::select('id',$field)->where($field,'like',$data.'%')->get();
            }
            else
            {
              return User::select($field)->paginate($page);
            }
        }
        else
        {
            return User::paginate($page)->all();
        }
    }

}
