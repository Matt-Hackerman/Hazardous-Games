<?php
namespace App\Http\Controllers;

if(!isset($_SESSION)) 
{ 
    session_start(); 
} 

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function login(Request $request){
        $dbTest = DB::select("select * from users WHERE Email = '".$request->input("MainInput")."' OR Username = '".$request->input("MainInput")."'");

        if(isset($dbTest) AND $dbTest != NULL){
            $dbTest = json_decode(json_encode($dbTest), true);
            error_log("DBTest is set");
            if($dbTest[0]["Password"] == $request->input("Password")){
                
                $_SESSION["UserID"] = $dbTest[0]["UserID"];
                return redirect('/');
            }else{
                $_SESSION["Error"] = "Password";
                return redirect('login');
            }
        }
        $_SESSION["Error"] = "MainInput";
        return redirect('login');
    }
}
