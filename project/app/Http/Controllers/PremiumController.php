<?php

namespace App\Http\Controllers;

use App\Models\Premium;
use App\Models\users;
use Illuminate\Http\Request;

class PremiumController extends Controller
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
        $temp = Premium::findOrFail($_SESSION['UserID']);
        $recurring = date('Y-m-d', strtotime(date('Y-m-d').' + 1 month'));
        $temp->update(array_merge($request->all(), ['RecurringDate' => $recurring], ['Premium' => true]));
        return $temp;
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
