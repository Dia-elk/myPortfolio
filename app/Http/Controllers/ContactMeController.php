<?php

namespace App\Http\Controllers;

use App\Models\ContactsMe;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ContactMeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return Inertia::render('ContactMe/Index' , [
            'messages' => ContactsMe::orderBy('created_at', 'desc')->get()
        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email',
        ]);


        sleep(1);

        ContactsMe::create([
            'name' => $request->name,
            'email' => $validatedData['email'],
            'typeOfProject' => $request->typeOfProject,
            'budget' => $request->budget,
            'details' => $request->details,
        ]);




    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
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
