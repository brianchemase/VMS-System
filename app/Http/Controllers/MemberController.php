<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberController extends Controller
{
    //

    public function store(Request $request)
    {
        // Validate inputs
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'idNo' => 'required|string|max:255',
            'dob' => 'required|date',
            'phone' => 'required|string|max:20',
            'region' => 'required|string',
            'county' => 'required|string',
            'rank' => 'required|string',
        ]);

        // Save to database
       // Member::create($request->all());

        // Redirect back with success
        return redirect()->back()->with('success', 'Member registered successfully!');
    }
}
