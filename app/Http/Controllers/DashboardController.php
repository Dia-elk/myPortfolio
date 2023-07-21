<?php

namespace App\Http\Controllers;

use App\Models\ContactsMe;
use Illuminate\Http\Request;
use Inertia\Inertia;

class DashboardController extends Controller
{
    //

    public function index()
    {
        return Inertia::render('Dashboard' , [
            'messages' => ContactsMe::all()->map(function ($msg){
                return [
                    'id' => $msg->id,
                    'name' => $msg->name,
                    'email' => $msg->email,
                    'created_at' => $msg->created_at->format('d-m-y'),
                ];
            })
        ]);

    }
}
