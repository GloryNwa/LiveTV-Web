<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Libraries\Messenger;
use App\CheckUser;
use Auth;
use Session;


class HomeController extends Controller
{


  public function index()
  {

    $token = Session::get('user');
    $curl = curl_init();
    curl_setopt_array($curl, array(
      CURLOPT_URL => "http://apis.livetvmobile.org/api/section/view",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "GET",
      CURLOPT_HTTPHEADER => array(
        "Authorization:$token",
        "Content-Type: application/x-www-form-urlencoded",
        "Accept: application/json"
      ),
    ));
    $response = curl_exec($curl);
    curl_close($curl);
    $sections = json_decode($response);
    // $section = $sections->data['0'];
    //dd($sections);



    ///////////////////////////Slider Method////////////////////

    $Slidertoken = Session::get('user');
    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => 'http://apis.livetvmobile.org/api/slider/all',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'GET',
      CURLOPT_HTTPHEADER => array(
        "Authorization:$Slidertoken",
        'Accept: application/json',
        'Content-Type: application/x-www-form-urlencoded'
      ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    $slider = json_decode($response);
    // dd( $slider);exit;
    return view('index.index', ['sections' => $sections, 'slider' => $slider]);
  }
}
