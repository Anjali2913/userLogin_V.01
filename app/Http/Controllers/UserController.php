<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\registration;
use Illuminate\Support\Facades\View;


class UserController extends Controller
{
    function displays(Request $req)
    {      
        //echo "from user Controller";
       
       $val=$req->session()->get('data');
      
       $users = DB::table('registration')->where('email', $val)->get();
       
       foreach($users as $user)
       {
        //echo $user->email;
       
       $pas_res = $req->password;
       $email_res=$req->email;
       

       if (($email_res==$user->email) && ($pas_res==$user->password))
            {
                
              return view('profile',['data' => $users]);
            
        }

         else
        {
            echo '<script>alert("password  not Found")</script>';
           return view('login');
           
         }

       }
     
    }
}
