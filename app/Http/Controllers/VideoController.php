<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
class VideoController extends Controller
{
    public function videos(){
   
        $video_token = Session::get('user');
        if(isset($_GET['page'])){
          if(!empty($_GET['page'])){
              $page = $_GET['page'];
          }else{
              $page = 1;
          }
      }else{
          $page = 1;
        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => "http://apis.livetvmobile.org/api/video/all?per_page=10&page=$page",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "GET",
          CURLOPT_HTTPHEADER => array(
            "Authorization: $video_token ",
            "Accept: application/json",
            "Content-Type: application/x-www-form-urlencoded"
          ),
        ));
        
          $response = curl_exec($curl);
           curl_close($curl);
           $data['total_videos']  = json_decode($response);
            // dd($data['total_videos']);exit;
            $total_videos = 40;
   
            $per_page = 10;
            $links = $total_videos / $per_page;

            $data['links'] = $links;
           
            return view("videos",$data);
              
     
    
           }

    }
  
}
