<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Mail\NewsletterMessage;
use App\Models\Newsletter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class NewsletterController extends Controller
{
    public function index()
    {
        return Newsletter::all();
    }
    
    public function store()
    { 
        request()->validate([
            'email' => 'required|email:rfc,dns',
        ],
        [
            'email.required' => 'Email is required',
            'email.email' => 'Please specify a real email',
        ]);

        
        Newsletter::create([
            'email' => request('email'),           
        ]);
        
        $newsletter = [
            'email' => request('email'), 
        ];

        try {
 
            Mail::to('marketing@aitsmena.com')->send(new NewsletterMessage($newsletter));
            return 'Newsletter Email sent successfully.';
        } catch (\Exception $e) {
            return 'Failed to send email: ' . $e->getMessage();
        }
    }}
