<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Libraries\Messenger;
// use App\CheckUser;
use Auth;
use Session;
use Redirect;
use View;

class LiveTvController extends Controller
{



  /////////////////////////Recommended//////////////////////////////

  public function liveTV(Messenger $messenger)
  {


    $token = Session::get('user');
    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => 'http://apis.livetvmobile.org/api/video/all?per_page=10&page=1',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'GET',
      CURLOPT_HTTPHEADER => array(
        "Authorization: $token ",
        'Accept: application/json',
        'Content-Type: application/x-www-form-urlencoded'
      ),
    ));
    $response = curl_exec($curl);
    curl_close($curl);
    $videos = json_decode($response);


    //////////////////Video Details/////////////////////////////////////////////////////////
    $dataArr = array(
      'video_id' => "RY5902"

    );
    $response = $messenger->postApi($dataArr, 'http://apis.livetvmobile.org/api/video/details');

    if ($response->status) {
      // dd($response)  ;exit;

      return view('liveTv.liveTV', ['videos' => $videos, 'response' => $response]);
    } else {
      return view('liveTv.liveTV', ['response' => []]);
    }
  }



  //////////////////////////////////     /////////////////////////////////////////////////////


  /////////////////////////Recommended//////////////////////////////

  public function liveTVPlayer(Messenger $messenger, $video_id, $cat_id)
  {


    //////////////////Video Details/////////////////////////////////////////////////////////
    $dataArr = array(
      'video_id' => $video_id,
      'category_id' => $cat_id

    );
    $response = $messenger->postApi($dataArr, 'http://apis.livetvmobile.org/api/video/details');

    $response2 = $messenger->postApi($dataArr, 'http://apis.livetvmobile.org/api/category/video?per_page=10&page=1');



    if ($response->status) {



      return view('liveTv.liveTVPlayer', ['response' => $response, 'related' => $response2]);
    } else {

      return view('liveTv.liveTVPlayer', ['response' => []]);
    }
  }



  ///////////////////////////////Stations method////////////////////////////////////////////////

  public function stations(Messenger $messenger)
  {


    $stations = $messenger->getApi('http://apis.livetvmobile.org/api/view/stations');

    return view('station.stations', ['stations' => $stations]);
  }


  ////////////////////////////////Watch Live Method////////////////////////////////////////////
  public function view_live(Messenger $messenger, $id)
  {
    $dataArr = array(
      'id' => $id
    );

    $response = $messenger->postApi($dataArr, 'http://apis.livetvmobile.org/api/station/profile');
    $response2 = $messenger->getApi('http://apis.livetvmobile.org/api/view/stations');

    if ($response->status) {

      return view('liveTv.view_live', ['response' => $response, 'related' => $response2]);
    } else {



      return view('liveTv.view_live', ['response' => []]);
    }
  }
}
