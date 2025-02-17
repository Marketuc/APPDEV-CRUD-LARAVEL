<?php

namespace App\Http\Controllers;

use App\Models\Tradie; // Import the Tradie model
use Illuminate\Http\Request;

class TradieController extends Controller
{
    // Show a form to create a new Tradie
    public function create()
    {
        return view('tradies.create');
    }

    // Store a new Tradie
    public function store(Request $request)
    {
        $request->validate([
            'firstname' => 'required|string',
            'lastname' => 'required|string',
            'email' => 'required|email|unique:tradie,email',
            'phonenumber' => 'required|string',
            'job' => 'required|string',
        ]);

        Tradie::create($request->all());

        return redirect()->route('welcome');
    }

    // List all Tradies
    public function index()
    {
        $tradies = Tradie::all();
        return view('tradies.index', compact('tradies'));
    }

    public function edit($id)
{
    // Find the tradie by ID
    $tradie = Tradie::findOrFail($id);

    // Return the edit view with the tradie data
    return view('tradies.edit', compact('tradie'));
}

public function update(Request $request, $id)
{
    // Validate the incoming data
    $request->validate([
        'firstname' => 'required|string',
        'lastname' => 'required|string',
        'email' => 'required|email|unique:tradie,email,' . $id,
        'phonenumber' => 'required|string',
        'job' => 'required|string',
    ]);

    // Find the tradie and update the data
    $tradie = Tradie::findOrFail($id);
    $tradie->update($request->all());

    // Redirect back to the index page with a success message
    return redirect()->route('tradies.index')->with('success', 'Tradie updated successfully');
}

public function destroy($id)
{
    // Find the tradie by ID and delete it
    $tradie = Tradie::findOrFail($id);
    $tradie->delete();

    // Redirect back to the index page with a success message
    return redirect()->route('tradies.index')->with('success', 'Tradie deleted successfully');
}

}
