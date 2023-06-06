<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AuthController extends BaseController
{
    private $logging;
    private $show_entries;
    public function __construct()
    {
        $this->logging = (bool) env('BCKO_LOGGING_ON', true);
        $this->show_entries = (int) env('BCKO_SHOW_ENTRIES', '100');

         if($this->logging){
             dd("LOG ON",$this->logging, $this->show_entries);
             Log::info("backoffice Logging enable");
         }else{
             dd("LOG OFF",$this->logging, $this->show_entries);
             Log::warning("backoffice Logging disable");
         }


    }
    public function showloginForm()
    {
//        echo "<h1>Formulário de Login</h1>";
        Log::debug('show Login form');
        $result =[
            'status'=> 'OK',
            'blade' => 'Login form',
            'http_status' => 200,
        ];

         $response=$this->sendResponse($result, 'Show Login form',200);
         return $response;
    }

    public function postLogin()
    {
//        echo "<h1>POST Formulário de Login</h1>";
        Log::debug('Post Login form');
        $result =[
            'status'=> 'OK POST',
            'blade' => 'Post Login form',
            'http_status' => 204,
        ];
        $response=$this->sendResponse($result, 'POST Login form',201);
        return $response;
    }
}
