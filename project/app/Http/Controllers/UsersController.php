<?php
namespace App\Http\Controllers;

use App\Models\Premium;
use App\Models\User;
use App\Models\users;
use Dotenv\Validator;
use Exception;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $dbTest = DB::select("select * from users WHERE Email = '".$request->input("Email")."' OR Username = '".$request->input("Username")."'");

        if(isset($dbTest) AND $dbTest != NULL){
            $_SESSION['Error'] = "True";
            return redirect('signup');
        }
        users::create($request->all());
        return redirect('login');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}


