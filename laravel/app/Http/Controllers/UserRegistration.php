<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class UserRegistration extends Controller
{
    public function postRegister(Request $request){
        //Retrieve the name input field
        $firstname = $request->input('firstname');
        echo 'FName: '.$firstname;
        echo '<br>';

        //Retrieve the username input field
        $lastname = $request->lastname;
        echo 'Lname: '.$lastname;
        echo '<br>';
        
        $email = $request->new_email;
        echo 'Email: '.$email;
        echo '<br>';
        //Retrieve the password input field
        $gender = $request->gender;
        echo 'Gender: '.$gender;
        echo '<br>';
        $password = $request->password;
        echo 'Password: '.$password;
    }
}
