<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\signup_table;

use Auth;

class CustomAuthController extends Controller
{
    
    public function signup(Request $request){

        $Sstatus="Successfully registered!!";
        $this->validation($request);
        signup_table::create($request->all());
         return redirect('/')->with('Sstatus','Successfully registered');
    }

    public function validation($request){

        return $this->validate($request,['first_name' => ['bail','required','regex:/^[a-zA-Z]+$/','min:1'],
                    'last_name' => ['bail','required','regex:/^[a-zA-Z]+$/','min:1'],
                    'email' => 'bail|required|email',
                    'username' => 'bail|required|unique:signup_tables|min:3',
                    'password' => ['bail','required','regex:/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#\$%\^&\*]).{6,}+$/'],
                    're_password' => ['bail','required','regex:/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#\$%\^&\*]).{6,}+$/'],


        ]);

    }

    public function login(Request $request){

        // $Lusername = $request['username'];

        // $Lpassword = $request['password'];

        // $Sstatus="Successfully registered!!";
        $this->validate($request,[
        'Lusername' => 'bail|required|min:3',
        'Lpassword' => ['bail','required','regex:/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#\$%\^&\*]).{6,}+$/']
            ]);
           
        $signup_array = signup_table::where('username', $request->Lusername)->first();

        
        if(!empty($signup_array)){

            
            if(($request->Lpassword)!=($signup_array->password))
            {
                return redirect('/')->with('Lstatus','Incorrect Password');
                
            }

            else{

                session(['username' => $signup_array->username ]);
                
                if($signup_array->account_type == "admin")
                {

                    session(['acc' => "admin" ]);
                }					
                
                else {

                    session(['acc' => "nonadmin" ]);

                }

                return redirect('/')->with('Lstatus','Successfully Logged In');


            }
        }

        else{
            return redirect('/')->with('Lstatus','Username Does not Exist');
        }

                

        // return $request;    
        // if(Auth::attempt(['username'=>$request->Lusername,'password'=>$request->Lpassword]))
        // {
        //  return redirect('/')->with('Lstatus','Successfully Logged in');
            // return "logged in";
        // }

    }

}
