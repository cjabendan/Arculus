<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class WelcomeMail extends Mailable
{
    use Queueable, SerializesModels;

    public $user; // Declare the $user property

    /**
     * Create a new message instance.
     */
    public function __construct($user)
    {
        $this->user = $user; // Assign the $user object to the property
    }

    /**
     * Build the message.
     */
    public function build()
    {
        return $this->subject('Welcome to SplitWise!')
                    ->view('emails.welcome') // Specify the email view
                    ->with(['user' => $this->user]); // Pass the $user to the view
    }
}
