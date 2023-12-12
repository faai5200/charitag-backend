<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Charity;

class AdminDashboardController extends Controller
{
    // Display the admin dashboard
    public function index()
    {
        return view('admin.dashboard');
    }



    public function charities(){
        $charities = Charity::all();
        return view('admin.charities.index', compact('charities'));
    }

    // Show the form for creating a new charity
    public function charity_create()
    {
        return view('admin.charities.create');
    }

    // Store a newly created charity in the database
    public function charity_store(Request $request)
    {
        // Validate the request
        $request->validate([
            'charity_name' => 'required|max:500',
            // Add other validation rules for other fields
        ]);

        // Create a new charity
        $charity = new Charity();
        $charity->fill($request->all());
        $charity->save();

        return redirect()->route('admin.charities.index')->with('success', 'Charity created successfully');
    }

    // Display the specified charity
    public function charity_show($id)
    {
        $charity = Charity::findOrFail($id);
        return view('admin.charities.show', compact('charity'));
    }

    // Show the form for editing the specified charity
    public function charity_edit($id)
    {
        $charity = Charity::findOrFail($id);
        return view('admin.charities.edit', compact('charity'));
    }

    // Update the specified charity in the database
    public function charity_update(Request $request, $id)
    {
        // Validate the request
        $request->validate([
            'charity_name' => 'required|max:500',
            // Add other validation rules for other fields
        ]);

        // Update the charity
        $charity = Charity::findOrFail($id);
        $charity->fill($request->all());
        $charity->save();

        return redirect()->route('admin.charities.index')->with('success', 'Charity updated successfully');
    }

    // Remove the specified charity from the database
    public function charity_destroy($id)
    {
        $charity = Charity::findOrFail($id);
        $charity->delete();

        return redirect()->route('admin.charities.index')->with('success', 'Charity deleted successfully');
    }
    public function campaigns(){
        return view('admin.campaigns');
    }
    public function corporations(){
        return view('admin.corporations');
    }
    public function all_users(){
        return view('admin.all_users');
    }
    public function settings(){
        return view('admin.settings');
    }
    public function logout(){
        Auth::logout();
        return redirect('/admin');
    }


}
