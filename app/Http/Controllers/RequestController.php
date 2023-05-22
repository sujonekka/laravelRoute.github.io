<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class RequestController extends Controller
{



    function getName(Request $inputData):string{

        $name = $inputData->input('name');
        return $name;
    }


    function userAgent(Request $req ){
        $userAgent = $req->header('user-agent');

        return $userAgent;
    }


     function getPage(Request $req ){
        $page = $req->query('page');

        return $page;
    }


     function getInfo(Request $req ){
        $msg = $req->input('message');
        $name = $req->input('data.name');
        $age = $req->input('data.age');

         return array(
            'Status' => $msg,
            'Name' => $name,
            "Age"  => $age
        );
       

    }



    
  function formData(Request $req):string{

   $photo =  $req->file('avatar');
  
    $photo->move(public_path('uploads'), $photo->getClientOriginalName());

    return "File uploaded successfully";

  }

  function getCookie(Request $req):array{
    return $req->cookie();
  }


  function dataPost(Request $req){
    $email = $req->input('email');

    $jsonRespons = $req->input();
    return $jsonRespons;

 
  }
}
