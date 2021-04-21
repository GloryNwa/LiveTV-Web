<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Libraries\Messenger;
// use App\CheckUser;
use Auth;
use Session;
use Redirect;
use View;

class ProfileController extends Controller
{

    public function profile()
    {

        // $token = Session::get('user');
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'http://apis.livetvmobile.org/api/app/version',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
        ));

        $response = curl_exec($curl);
        // dd($response);
        curl_close($curl);
        $version = json_decode($response);


        return view('profile.profile', compact('version'));
    }





    public function category()
    {


        /////////////////////////////////////This  Method Fetches all category listed on a category page sidebar//////////////////////////////////////////////////////

        $token = Session::get('user');
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "http://apis.livetvmobile.org/api/category/all?per_page=20&page=1",
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
        $category = json_decode($response);
        return view('incude.header2', ['category' => $category]);
    }
}
