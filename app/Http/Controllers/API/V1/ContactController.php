<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Mail\ContactMessage;
use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;
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
            'phone' => 'required|numeric|digits_between:8,15', // Numeric and between 8 and 15 digits
            'country' => 'required',
            'city' => 'required',

            'content' => 'required',
        ],
        [
            'name.required' => 'Name is required.',
            'email.required' => 'Work Email is required',
            'email.email' => 'Please specify a real work email',
            'country.required' => 'Country is required.',
            'city.required' => 'City is required.',
            'phone.required' => 'Phone is required.',
            'phone.numeric' => 'Phone Number must contain only digits.',
            'phone.digits_between' => 'Phone Number must be between :min and :max digits long.',
            'industry.required' => 'Industry is required.',
            'inquiry.required' => 'Inquiry is required.',
            'content.required' => 'Please enter your message.',
        ]);

        
        Contact::create([
            'name' => request('name'),
            'email' => request('email'),
            'phone' => request('phone'),
            'country' => request('country'),
            'city' => request('city'),
            'industry' => request('industry'),
            'inquiry' => request('inquiry'),
            'content' => request('content')              
        ]);
        
        $contact = [
            'name' => request('name'),
            'email' => request('email'),
            'phone' => request('phone'),
            'country' => request('country'),
            'city' => request('city'),
            'industry' => request('industry'),
            'inquiry' => request('inquiry'),
            'content' => request('content')   
        ];

        try {
 
            Mail::to('info@aitsmena.com')->send(new ContactMessage($contact));
            return 'Contact Form Email sent successfully.';
        } catch (\Exception $e) {
            return 'Failed to send email: ' . $e->getMessage();
        }
    }
}
