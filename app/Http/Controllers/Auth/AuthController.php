<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Usertype;
use App\Models\Position;
use App\Models\GenderIdentity;
use App\Models\Department;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;


class AuthController extends BaseController
{
    private $logging;
    private $show_entries;
    private $objUser;
    private $objPosition;
    private $objDepartment;
    private$objUserType;
    private $objGenderIdentity;
    private $objDocumentType;
    public function __construct()
    {
        $this->objUser= new User();
        $this->objPosition= new Position();
        $this->objDepartment= new Department();
        $this->objUserType= new UserType();
        $this->objGenderIdentity= new GenderIdentity();
        $this->objDocumentType=new DocumentType();
        $this->logging = (bool) env('BCKO_LOGGING_ON',);
        $this->show_entries = (int) env('BCKO_SHOW_ENTRIES', '100');

        $this->middleware('guest')->except('logout');

         if($this->logging==true){
//             dd("LOG ON!!!","logging", "entries");
             Log::alert("backoffice Logging enable");
         }else{
//             dd("LOG OFF",$this->logging, $this->show_entries);
             Log::warning("backoffice Logging disable");
         }


    }
    public function shoLoginForm()
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

    public function customLogin()
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
