<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Redirect;

use App\signup_table;

use App\home_table;

use App\aboutme_table;

use App\skills_table;

use App\experience_table;

use App\hireme_table;

use App\portfoliopage_table;

use App\contact_table;

use App\hitmeup_table;

use Mail;

use \App\Mail\SendMail;


class PagesController extends Controller
{
    public function index(){
        
        $home_array=home_table::all();
        return view('pages.index',compact('home_array'));
        
        // return $home_array;

       
        // return view('pages.index');
        
        //  return view('pages.index')->with('home_array',$home_array);

    }

    public function aboutme(){

        $aboutme_array=aboutme_table::all();
        // return $aboutme_array;
        return view('pages.aboutme',compact('aboutme_array'));
      
    }

    public function contact(){

        $contact_array=contact_table::all();
        // return $aboutme_array;
        return view('pages.contact',compact('contact_array'));
    }

    public function experience(){

        $experience_array=experience_table::all();
        // return $aboutme_array;
        return view('pages.experience',compact('experience_array'));
    }

    public function hireme(){

        $hireme_array=hireme_table::all();
        // return $aboutme_array;
        return view('pages.hireme',compact('hireme_array'));
    }

    public function portfoliopage(){

        $portfoliopage_array=portfoliopage_table::all();
        // return $portfoliopage_array;
        return view('pages.portfoliopage',compact('portfoliopage_array'));
    }

    public function skills(){

        $skills_array=skills_table::all();
        // return $skills_array;
        return view('pages.skills',compact('skills_array'));
    }

    public function blog(){

        // $blog_array=blog_table::all();
        // return $blog_array;
        return view('pages.blog');
    }

    public function customize(){
        
        $home_array=home_table::all();
        $aboutme_array=aboutme_table::all();
        $contact_array=contact_table::all();
        $experience_array=experience_table::all(); 
        $hireme_array=hireme_table::all();
        $portfoliopage_array=portfoliopage_table::all();
        $skills_array=skills_table::all(); 
        $signup_array=signup_table::all();       

        // return $aboutme_array;
        return view('pages.customize',compact('home_array','aboutme_array','contact_array','experience_array','hireme_array','portfoliopage_array','skills_array','signup_array'));
    }
    

    public function getLogout(){
        session()->flush();
        return Redirect::to('/');
    }

    public function hitmeup(Request $request){

        $this->validation($request);
        hitmeup_table::create($request->all());

        $details= array(
            'your_name' => $request->your_name,
            'phone_no' => $request->phone_no,
            'email' => $request->email,
            'your_message' =>$request->your_message

        );

        \Mail::to('infinitepitechonologies@gmail.com')->send(new SendMail($details));

            

         return redirect('/contact')->with('Cstatus','Your form Has been Sent !!');
    }

    public function validation($request){

        return $this->validate($request,['your_name' => ['bail','required','regex:/^[a-zA-Z]+$/','min:1'],
                    'email' => 'bail|required|email',
                    'phone_no' => 'bail|required'

        ]);

    }



}
