<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\API\BaseController;
use App\Http\Requests\postLoginRequest;
use App\Http\Requests\postregisterRequest;
use App\Models\Department;
use App\Models\DocumentType;
use App\Models\GenderIdentity;
use App\Models\Position;
use App\Models\User;
use App\Models\Usertype;
use Illuminate\Http\Request;
Use Hash;
use Illuminate\Support\Facades\Session;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class CustomAuthController extends BaseController
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
        $this->logging = (bool) env('BCKO_LOGGING_ON',);
        $this->show_entries = (int) env('BCKO_SHOW_ENTRIES', '100');
        $this->objUser= new User();
        $this->objPosition= new Position();
        $this->objDepartment= new Department();
        $this->objUserType= new UserType();
        $this->objGenderIdentity= new GenderIdentity();
        $this->objDocumentType=new DocumentType();

        if($this->logging==true){
//             dd("LOG ON!!!","logging", "entries");
            Log::alert("backoffice Logging enable");
        }else{
//             dd("LOG OFF",$this->logging, $this->show_entries);
            Log::info("backoffice Logging disable");
        }
    }

    public function Login()
    {
        return view('bckoffice.custom.auth.login');
    }

    public function customLogin(postLoginRequest $request)
    {
        $credentials = $request->only('email','password');

//        dd("NAAAAADA", $credentials, Auth::attempt($credentials));
        if(Auth::attempt($credentials))
        {
            $name= auth()->user()->aka_name;

//            dd($name);
            return redirect("v1/auth/dashboard")->withSuccess('Welcome back ['.$name.']');
        }
        return  redirect('v1/auth/login')->with('error', 'Login details are not valid');
    }

    public function Register()
    {
        $userTypes=DB::table('user_types')->get();
        $genderIdentities=DB::table('gender_identities')->get();
        $documentTypes=DB::table('document_types')->get();
        $departments=DB::table('departments')->get();
        $positions=DB::table('positions')->get();
        return view('bckoffice.custom.auth.register', compact('userTypes', 'genderIdentities', 'documentTypes','departments', 'positions'));
    }

    public function customRegister(postregisterRequest $request)
    {
        dd("GOMUGOMU NO GATLING GUN!!", $request->validated());
    }

    public function Logout()
    {

        Session::flush();
        Auth::logout();

        return Redirect('v1/auth/login');

    }

    public function Dashboard()
    {
        return view('dashboard');
    }
}
