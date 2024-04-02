<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return Contact::all();
    }
    
    public function store()
    {
        request()->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'message' => 'required',
        ]);

        return Contact::create([
            'name' => request('name'),
            'email' => request('email'),
            'phone' => request('phone'),            
            'message' => request('message'),                
        ]);
    }
}
