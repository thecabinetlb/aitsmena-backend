<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Validation\Rule;

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
            'email' => 'required|email:rfc,dns',
            'company_name' => 'required',
            'phone' => 'required|max:15',
            'subject' => ['required', Rule::in(['General Inquiries', 'Sales and Support'])],
            'message' => 'required',
        ],
        [
            'name.required' => 'Name is required.',
            'email.required' => 'Email is required',
            'email.email' => 'Please specify a real email',
            'company_name.required' => 'Company Name is required.',
            'phone.required' => 'Phone Number is required.',
            'subject.required' => 'Subject is required.',
            'subject.in' => 'Invalid subject. Please select either General Inquiries or Sales and Support.',
            'message.required' => 'Please enter your message.',
        ]);

        return Contact::create([
            'name' => request('name'),
            'email' => request('email'),
            'company_name' => request('company_name'),
            'phone' => request('phone'),
            'subject' => request('subject'),                
            'message' => request('message'),                
        ]);
    }
}
