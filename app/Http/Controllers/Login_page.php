<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\registration;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;

class Login_page extends Controller
{


     function index(Request $req)//to store the input values into session variable
     {
        $val=$req->session()->put('data',$req->input('email'));
        return redirect('profile');
     }



     function show(Request $req)//to get the user details based on the email
     {      
        
         $val=$req->session()->get('data');
         
         $users = DB::table('registration')->where('email', $val)->get();

          $pas_res = $req->password;
        echo $pas_res;
         

         if (registration::where('email',  '=', $val)->exists()) 
            {
       
              return view('profile',['data' => $users]);
            }

         else
        {
            echo '<script>alert("Email Address not Found")</script>';
            return view('login');
           
         }


     }
      function edit_details(Request $req)
      {
        $val=$req->session()->get('data');
        $users = DB::table('registration')->where('email', $val)->get();
        return view('edit_form',['data' => $users]);

      }
      function update(Request $req) //to update user information
      {      
    

            $val=$req->session()->get('data');
            $email = $val;
            $search_user = registration::where('email', 'LIKE', '%'.$email.'%')->get()[0];
            $search_user->username = $req->username;
            $search_user->email = $req->email;
            $search_user->phone = $req->phone;
            $search_user->save();
            return redirect('login');
           
            // if($search_user->username && $search_user->email && $search_user->phone) 
            // {

            //           $this->validate($req,[
            //           'username' => 'required|min:5|max:50',
            //           'email' => 'required|',
            //           'phone' =>  'required|regex:/(080)[0-9]{10}/'
                     
            //      ]);
   
            //     // return redirect('login');
            //  }


     }

     
}


