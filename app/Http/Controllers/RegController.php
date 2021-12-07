<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\registration;


class RegController extends Controller  // to register user data
{
    
    function RegData(Request $req)
    {

      $reg=new registration;
      $reg->username=$req->username;
      $reg->email=$req->email;
      $reg->confirm_email=$req->confirm_email;
      $reg->phone=$req->phone;
      
      
      //$reg->save();

      if ( $reg->username && $reg->email && $reg->phone && $reg->confirm_email ) {

         $this->validate($req,[
         'username' => 'required|min:5|max:50',
         'phone' =>  'required|regex:/(080)[0-9]{10}/',
         'email' => 'required|required_with:confirm_email|same:confirm_email',
          'confirm_email' => 'required',

        ]);
          $reg->save();
      

       return redirect('login');
        
      }

     
    }

    





}
