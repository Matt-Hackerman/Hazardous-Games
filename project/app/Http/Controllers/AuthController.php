<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\users;
use Dotenv\Validator;
use Exception;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use illuminate\View\Middleware\ShareErrorsFromSession;
use Illuminate\View\Middleware\ErrorBinder;

class AuthController extends Controller
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

        $request->validate([
            'FName'      => 'required',
            'LName'      => 'required',
            'Username'   => 'required | unique:users',
            'Email'      => 'required | unique:users',
            'Password'   => 'required',
        ]);
        
        // $input = $request->all();
        
        users::create([
            'FName' => $request->FName,
            'LName' => $request->LName,
            'Username' => $request->Username,
            'Email' => $request->Email,
            'Password' => $request->Password,
        ]);

        return redirect('/signup');
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
?>
