<?php

namespace App\Http\Controllers;


use Redirect;

use App\signup_table;

use App\home_table;

use App\aboutme_table;

use App\skills_table;

use App\experience_table;

use App\hireme_table;

use App\portfoliopage_table;

use App\contact_table;

use Illuminate\Http\Request;

class CustomizePageController extends Controller
{
    public function customizehomepageupdate(Request $request){
        
        $this->validate($request,['home_background_file' => 'image|nullable','home_download_file'=> 'mimetypes:application/pdf|nullable']);

        if($request->has('home_background_file')){

            $filenameWithExt = $request->file('home_background_file')->getClientOriginalName();

            $filename = pathinfo($filenameWithExt , PATHINFO_FILENAME);

            $extension = $request->file('home_background_file')->getClientOriginalExtension();

            $fileNameToStoreI = $filename.'_'.time().'.'.$extension;

            $path = $request->file('home_background_file')->storeAs('public/images',$fileNameToStoreI);

         }

         if($request->has('home_download_file')){

            $filenameWithExt = $request->file('home_download_file')->getClientOriginalName();

            $filename = pathinfo($filenameWithExt , PATHINFO_FILENAME);

            $extension = $request->file('home_download_file')->getClientOriginalExtension();

            $fileNameToStoreP = $filename.'_'.time().'.'.$extension;

            $path = $request->file('home_download_file')->storeAs('public/download',$fileNameToStoreP);
        }

    $home_table = home_table::find($request->get('home_id'));

    $home_table->home_message=$request->get('home_message');
    $home_table->home_name=$request->get('home_name');

    if($request->has('home_background_file')){
        $home_table->home_background='../storage/images/'.$fileNameToStoreI; 
    }

    if($request->has('home_download_file')){
        $home_table->home_download_link='../storage/download/'.$fileNameToStoreP; 
    }

    $home_table->save();

    return redirect('/customize')->with('Hostatus',"Updated Successfully");


    
}

public function customizeaboutmeupdate(Request $request){
        
    $this->validate($request,['profile_photo_file' => 'image|nullable']);

    if($request->has('profile_photo_file')){

        $filenameWithExt = $request->file('profile_photo_file')->getClientOriginalName();

        $filename = pathinfo($filenameWithExt , PATHINFO_FILENAME);

        $extension = $request->file('profile_photo_file')->getClientOriginalExtension();

        $fileNameToStoreI = $filename.'_'.time().'.'.$extension;

        $path = $request->file('profile_photo_file')->storeAs('public/images',$fileNameToStoreI);

     }


$aboutme_table = aboutme_table::find($request->get('aboutme_id1'));

$aboutme_table->titlepos=$request->get('aboutme_titlepos');
$aboutme_table->portrait_content=$request->get('aboutme_full_name');
$aboutme_table->phone_content=$request->get('aboutme_phone_number');
$aboutme_table->location_content=$request->get('aboutme_location');
$aboutme_table->email_content=$request->get('aboutme_email');
$aboutme_table->calendar_content=$request->get('aboutme_dob');
$aboutme_table->flag_content=$request->get('aboutme_nationality');

$aboutme_table->socialfb_link=$request->get('aboutme_link_fb');
$aboutme_table->socialig_link=$request->get('aboutme_link_ig');
$aboutme_table->socialtw_link=$request->get('aboutme_link_tw');
$aboutme_table->socialin_link=$request->get('aboutme_link_in');

$aboutme_table->description_content=$request->get('aboutme_content');

if($request->has('profile_photo_file')){
    $aboutme_table->profile_photo='../storage/images/'.$fileNameToStoreI; 
}

$aboutme_table->save();

return redirect('/customize')->with('Astatus',"Updated Successfully");



}


public function customizecontactupdate(Request $request){
        
$contact_table = contact_table::find($request->get('contact_id'));

$contact_table->phone_content=$request->get('phone_content');
$contact_table->location_content=$request->get('location_content');
$contact_table->email_content=$request->get('email_content');
$contact_table->whatsapp_content=$request->get('whatsapp_content');
$contact_table->skype_content=$request->get('skype_content');
$contact_table->website_content=$request->get('website_content');


$contact_table->socialfb_link=$request->get('contact_link_fb');
$contact_table->socialig_link=$request->get('contact_link_ig');
$contact_table->socialtw_link=$request->get('contact_link_tw');
$contact_table->socialin_link=$request->get('contact_link_in');


$contact_table->save();

return redirect('/customize')->with('Cstatus',"Updated Successfully");



}


public function customizeportfoliopageupdate(Request $request){

    // return $request;

    $portfoliopage_array=portfoliopage_table::all();

    // return $portfoliopage_array;

     for ($i=0; $i<count($portfoliopage_array) ; $i++) { 
  
 
  	$portfoliopage_id = "portfoliopage_id".$i;
  	$portfolio_photo_file = "portfolio_photo_file".$i;
        
    $this->validate($request,[$portfolio_photo_file => 'image|nullable']);

    if($request->has($portfolio_photo_file)){

        $filenameWithExt = $request->file($portfolio_photo_file)->getClientOriginalName();

        $filename = pathinfo($filenameWithExt , PATHINFO_FILENAME);

        $extension = $request->file($portfolio_photo_file)->getClientOriginalExtension();

        $fileNameToStoreI = $filename.'_'.time().'.'.$extension;

        $path = $request->file($portfolio_photo_file)->storeAs('public/images',$fileNameToStoreI);

     }


$portfoliopage_table = portfoliopage_table::find($request->get($portfoliopage_id));


if($request->has($portfolio_photo_file)){
    $portfoliopage_table->portfolio_image ='../storage/images/'.$fileNameToStoreI; 
}

$portfoliopage_table->save();

     }

return redirect('/customize')->with('Pstatus',"Updated Successfully");

}


public function customizeportfoliopageadd(Request $request){

    // return $request;
    
    $portfoliopage_table= new portfoliopage_table();

    $this->validate($request,['portfolio_photo_file_add' => 'image|nullable']);

    if($request->has('portfolio_photo_file_add')){

        $filenameWithExt = $request->file('portfolio_photo_file_add')->getClientOriginalName();

        $filename = pathinfo($filenameWithExt , PATHINFO_FILENAME);

        $extension = $request->file('portfolio_photo_file_add')->getClientOriginalExtension();

        $fileNameToStoreI = $filename.'_'.time().'.'.$extension;

        $path = $request->file('portfolio_photo_file_add')->storeAs('public/images',$fileNameToStoreI);

     }

     
    if($request->has('portfolio_photo_file_add')){
        $portfoliopage_table->portfolio_image ='../storage/images/'.$fileNameToStoreI; 
    }

    $portfoliopage_table->portfolio_image_type=$request->get('portfolio_image_type');

    $portfoliopage_table->username=$request->get('portfolio_username');

     $portfoliopage_table->save();

return redirect('/customize')->with('PAstatus',"Added Successfully");


}


public function customizeportfoliopagedelete(Request $request){

    // return $request;

    $portfoliopage_table = portfoliopage_table::where('portfolio_image', $request->portfolio_image_path)->first();;
    $portfoliopage_table->delete();    

return redirect('/customize')->with('PDstatus',"Deleted Successfully");


}

public function customizeexperienceupdate(Request $request){

    // return $request;

    $experiecne_array=experience_table::all();

    // return $experiecne_array;

     for ($i=0; $i<count($experiecne_array) ; $i++) { 
  
 
      $experience_id = "experience_id".$i;
      $experience_title = "experience_title".$i;
      $experience_content = "experience_content".$i;
      $experience_year = "experience_year".$i;
        
    
    $experience_table = experience_table::find($request->get($experience_id));

    $experience_table->title=$request->get($experience_title);
    $experience_table->content=$request->get($experience_content);
    $experience_table->year=$request->get($experience_year);
    $experience_table->save();

        }

    return redirect('/customize')->with('Estatus',"Updated Successfully");

}

public function customizeexperienceadd(Request $request){

    $experience_table= new experience_table();

    $experience_table->title=$request->get('experience_title');
    $experience_table->content=$request->get('experience_content');
    $experience_table->year=$request->get('experience_year');
    $experience_table->username="nags";

    $experience_table->save();

    return redirect('/customize')->with('EAstatus',"Added Successfully");

}

public function customizeexperiencedelete(Request $request){

    $experience_table = experience_table::where('title', $request->experience_title_name)->first();;
    $experience_table->delete(); 

    return redirect('/customize')->with('EDstatus',"Deleted Successfully");

}

public function customizehiremeupdate(Request $request){

    // return $request;

    $hireme_array=hireme_table::all();

    // return $hireme_array;

     for ($i=0; $i<count($hireme_array) ; $i++) { 
  
 
      $hireme_id = "hireme_id".$i;
      $hire_photo_file = "hire_photo_file".$i;
      $hire_title = "hire_title".$i;
      $hire_price = "hire_price".$i;
      $hire_service1 = "hire_service1".$i;
      $hire_service2 = "hire_service2".$i;
      $hire_service3 = "hire_service3".$i;
        
    $this->validate($request,[$hire_photo_file => 'image|nullable']);

    if($request->has($hire_photo_file)){

        $filenameWithExt = $request->file($hire_photo_file)->getClientOriginalName();

        $filename = pathinfo($filenameWithExt , PATHINFO_FILENAME);

        $extension = $request->file($hire_photo_file)->getClientOriginalExtension();

        $fileNameToStoreI = $filename.'_'.time().'.'.$extension;

        $path = $request->file($hire_photo_file)->storeAs('public/images',$fileNameToStoreI);

     }


$hireme_table = hireme_table::find($request->get($hireme_id));


if($request->has($hire_photo_file)){
    $hireme_table->cart_photo ='../storage/images/'.$fileNameToStoreI; 
}

$hireme_table->hire_title =$request->get($hire_title);
$hireme_table->hire_price =$request->get($hire_price);
$hireme_table->hire_service1 =$request->get($hire_service1);
$hireme_table->hire_service2 =$request->get($hire_service2);
$hireme_table->hire_service3 =$request->get($hire_service3);
$hireme_table->save();

     }

return redirect('/customize')->with('Hstatus',"Updated Successfully");

}


public function customizehiremeadd(Request $request){

    $hireme_table= new hireme_table();

        
    $this->validate($request,['hire_photo_file_add' => 'image|nullable']);

    if($request->has('hire_photo_file_add')){

        $filenameWithExt = $request->file('hire_photo_file_add')->getClientOriginalName();

        $filename = pathinfo($filenameWithExt , PATHINFO_FILENAME);

        $extension = $request->file('hire_photo_file_add')->getClientOriginalExtension();

        $fileNameToStoreI = $filename.'_'.time().'.'.$extension;

        $path = $request->file('hire_photo_file_add')->storeAs('public/images',$fileNameToStoreI);

     }


if($request->has('hire_photo_file_add')){
    $hireme_table->cart_photo ='../storage/images/'.$fileNameToStoreI; 
}

$hireme_table->hire_title =$request->get('hire_title');
$hireme_table->hire_price =$request->get('hire_price');
$hireme_table->hire_service1 =$request->get('hire_service1');
$hireme_table->hire_service2 =$request->get('hire_service2');
$hireme_table->hire_service3 =$request->get('hire_service3');
$hireme_table->username ="nags";


$hireme_table->save();



return redirect('/customize')->with('HAstatus',"Updated Successfully");

}

public function customizehiremedelete(Request $request){

    $hireme_table = hireme_table::where('hire_title', $request->hire_job_name)->first();
    $hireme_table->delete(); 

    return redirect('/customize')->with('EDstatus',"Deleted Successfully");

}

public function customizeuseradd(Request $request){

    $this->validation($request);
    signup_table::create($request->all());
    return redirect('/customize')->with('UAstatus',"User Added Successfully");
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

public function customizeuserdelete(Request $request){

    $signup_table = signup_table::where('username', $request->username)->first();
    
    if($signup_table->account_type!='admin'){
        
        $signup_table = signup_table::where('username', $request->username)->first();
        
        $signup_table->delete(); 

        return redirect('/customize')->with('UDstatus'," User Deleted Successfully");
          
    }
    
    else{
        return redirect('/customize')->with('UDstatus',"Trying to Delete Admin User"); 
    
    }
}

public function customizeskillsupdate(Request $request){

    // return $request;

    $skills_array=skills_table::all();

    // return $skills_array;

     for ($i=0; $i<count($skills_array) ; $i++) { 
  
 
      $skills_id = "skills_id".$i;
      $skills_photo_file = "skills_photo_file".$i;
      $skills_name = "skills_name".$i;
      $skills_percent = "skills_percent".$i;
     
        
    $this->validate($request,[$skills_photo_file => 'image|nullable']);

    if($request->has($skills_photo_file)){

        $filenameWithExt = $request->file($skills_photo_file)->getClientOriginalName();

        $filename = pathinfo($filenameWithExt , PATHINFO_FILENAME);

        $extension = $request->file($skills_photo_file)->getClientOriginalExtension();

        $fileNameToStoreI = $filename.'_'.time().'.'.$extension;

        $path = $request->file($skills_photo_file)->storeAs('public/images',$fileNameToStoreI);

     }


$skills_table = skills_table::find($request->get($skills_id));


if($request->has($skills_photo_file)){
    $skills_table->skills_photo ='../storage/images/'.$fileNameToStoreI; 
}

$skills_table->skills_name =$request->get($skills_name);
$skills_table->skills_percent =$request->get($skills_percent);
$skills_table->save();

     }

return redirect('/customize')->with('Hstatus',"Updated Successfully");

}

}