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
            'phone' => 'required|numeric|digits_between:8,15', // Numeric and between 8 and 15 digits
            'country' => 'required',
            'city' => 'required',
            'industry' => ['required', Rule::in(['Smart Cities', 'Food & Beverage', 'Manufacturing', 'Oil & Gas', 'Energy', 'Utilities', 'Metal, Mining, & Minerals'])],
            'inquiry' => ['required', Rule::in(['General Inquiries', 'Sales and Support'])],
            'content' => 'required',
        ],
        [
            'name.required' => 'Name is required.',
            'email.required' => 'Work Email is required',
            'email.email' => 'Please specify a real work email',
            'country.required' => 'Country is required.',
            'city.required' => 'City is required.',
            'Phone.required' => 'Phone is required.',
            'phone.numeric' => 'Phone Number must contain only digits.',
            'phone.digits_between' => 'Phone Number must be between :min and :max digits long.',
            'industry.required' => 'Industry is required.',
            'industry.in' => 'Invalid industry. Please select either General Inquiries or Sales and Support.',
            'inquiry.required' => 'Inquiry is required.',
            'inquiry.in' => 'Invalid inquiry. Please select either General Inquiries or Sales and Support.',
            'content.required' => 'Please enter your message.',
        ]);

        return Contact::create([
            'name' => request('name'),
            'email' => request('email'),
            'company_name' => request('company_name'),
            'phone' => request('phone'),
            'phone' => request('phone'),               
            'country' => request('country'),
            'city' => request('city'),
            'industry' => request('industry'),
            'inquiry' => request('inquiry'),
            'content' => request('content')              
        ]);
    }
}
