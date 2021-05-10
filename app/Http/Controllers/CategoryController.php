<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Libraries\Messenger;
// use App\CheckUser;
use Auth;
use Session;
use Redirect;
use View;


class CategoryController extends Controller
{


  public function category(Messenger $messenger)
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

    /////////////////////////////////////This Method Fetches a particular category videos on a category/all page with it hard coded category_id////////////////////////////////

    $dataArr = array(
      'category_id' => "CAT-CR49"
    );

    $response = $messenger->postApi($dataArr, 'http://apis.livetvmobile.org/api/category/video?per_page=10&page=1');
    // dd($response)  ;exit;
    if ($response->status) {


      return view('category.category', ['category' => $category, 'response' => $response]);
    } else {

      return view('category.category', ['category' => $category, 'response' => []]);
    }
  }








  /////////////////////////////////////This  Method Fetches all category listed on a Single Category  page sidebar//////////////////////////////////////////////////////
  public function singleCategory(Messenger $messenger, $category_id)
  {


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




    /////////////////////////////////////This Method Fetches all category videos  with their unique category_id//////////////////////////////////////////////////////    
    $dataArr = array(
      'category_id' => $category_id
    );

    $response = $messenger->postApi($dataArr, 'http://apis.livetvmobile.org/api/category/video?per_page=10&page=1');
    // dd($response)  ;exit;
    // dd($response);
    // exit;
    if ($response->status) {

      return view('category.singleCategory', ['category' => $category, 'response' => $response]);
    } else {

      return view('category.singleCategory', ['category' => $category, 'response' => []]);
    }
  }



  /////////////////////////Recommended//////////////////////////////

  public function catchupPlayer(Messenger $messenger, $category_id)
  {


    $token = Session::get('user');
    $curl = curl_init();
    curl_setopt_array($curl, array(
      CURLOPT_URL => 'http://apis.livetvmobile.org/api/category/all?per_page=20&page=1',
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

    //dd($category);exit;


    /////////////////////////////////////This Method Fetches all category videos  with their unique category_id//////////////////////////////////////////////////////    
    $dataArr = array(
      'category_id' => $category_id
    );

    $response = $messenger->postApi($dataArr, 'http://apis.livetvmobile.org/api/category/video?per_page=10&page=1');
    // dd($response)  ;exit;
    if ($response->status) {
      //  dd($response)  ;exit;
      return view('category.catchupPlayer', ['category' => $category, 'response' => $response]);
    } else {

      return view('category.catchupPlayer', ['category' => $category, 'response' =>  []]);
    }
  }
}
