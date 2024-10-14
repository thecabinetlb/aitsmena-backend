<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactMessage extends Mailable
{
    use Queueable, SerializesModels;
    public $contact;

    /**
     * Create a new message instance.
     */
    public function __construct(array $contact)
    {
        $this->contact = $contact;
    }
    
    public function build()
    {
        return $this->subject('AITSMENA - New Contact Form Submission')  // Add the subject here
            ->view('emails.contact')
            ->with('contact', $this->contact);
    }
}