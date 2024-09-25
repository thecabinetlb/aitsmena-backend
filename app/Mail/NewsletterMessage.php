<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class NewsletterMessage extends Mailable
{
    use Queueable, SerializesModels;
    public $newsletter;

    /**
     * Create a new message instance.
     */
    public function __construct(array $newsletter)
    {
        $this->newsletter = $newsletter;
    }
    
    public function build()
    {
        return $this->view('emails.newsletter')
            ->with('contact', $this->newsletter);
    }
}
