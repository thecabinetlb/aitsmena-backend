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
<<<<<<< HEAD
            'email' => 'required|email:rfc,dns',
            'phone' => 'required|max:15',
            'message' => 'required',
        ],
        [
            'name.required' => 'Name is required.',
            'email.required' => 'Email is required',
            'email.email' => 'Please specify a real email',
            'phone.required' => 'Phone Number is required.',
            'message.required' => 'Please enter your message.',
=======
            'email' => 'required',
            'phone' => 'required',
            'message' => 'required',
>>>>>>> 81eb85593c529cabed054551908bc47894094ded
        ]);

        return Contact::create([
            'name' => request('name'),
            'email' => request('email'),
<<<<<<< HEAD
            'phone' => request('phone'),
=======
            'phone' => request('phone'),            
>>>>>>> 81eb85593c529cabed054551908bc47894094ded
            'message' => request('message'),                
        ]);
    }
}
