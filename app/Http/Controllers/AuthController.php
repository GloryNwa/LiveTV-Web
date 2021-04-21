<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Libraries\Messenger;
// use App\CheckUser;
use Auth;
use Session;

class AuthController extends Controller

{


        
  public function login(){
                    
  return view('login');

    }

  //////////////////////////////Log Method//////////////////////////////////////
  
  public function log(Request $request, messenger $messenger){
 
        $this->validate($request,[   
            'name' => 'required',
            'email' => 'required',  
            'country' => 'required'
    ]);
   
    $dataArr = array(
      'name'=>$request->name,
      'email'=>$request->email,
      'country'=>$request->country
      );
    

      $resp = $messenger->postApi($dataArr,'http://apis.livetvmobile.org/api/user/login');
        if($resp->status === true){
            $a = $resp->data->access_token;
            $name = $resp->data->user->name;
            $email = $resp->data->user->email;
            $country= $resp->data->user->country;
            // dd($a);
          
              //  session_start(),
              
              Session::put('user', $a);
              Session::put('name', $name);  
              Session::put('email',$email);  
              Session::put('country',$country);   
       
         return redirect('/index'); 
          
                
          }else{
            return redirect('/')->with('message', 'There was an error while trying to login ')->with("type","danger");
          }
 }


 ///////////////////Fetch Profile//////////////////////////////

//  public function fetchProfile()
//  {
//      $user_id = Auth::user()->id;


 ///////////////////////////////Register /////////////////////////////

   public function register(Request $request, Messenger $messenger){
   
    $this->validate($request, [
     
      'name'  => 'required',
      'email' => 'required',
      'country'  => 'required'
     
       ]);
      
      // $upload_token = Session::get('user');
     
            $dataArr = array(
              'name'=>$request->name,
              'email'=>$request->email,
              'country'=>$request->country

              
          );

          $response = $messenger->postApi($dataArr,'http://apis.livetvmobile.org/api/user/register');
     
           if($response->status === true){
                
              return redirect('/')->with('message', 'You have successfully registered, kindly login ')->with("type","success");  

            
           }else if ($response->status === false){
                    
             return redirect('/')->with('message', 'This eamil has already been taken ')->with("type","danger");

     }


  }


  //////////////////////////////Logout Method//////////////////////////////////////
   public function logout(){
    session()->flush();
    return redirect('/');      
}



} 