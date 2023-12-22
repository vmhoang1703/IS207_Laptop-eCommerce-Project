<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class UserActivationEmail extends Mailable
{
    use Queueable, SerializesModels;
    protected $user;
    protected $activation_link; // Add this property

    public function __construct($data)
    {
        $this->user = $data['user'];
        $this->activation_link = $data['activation_link'];
    }

    public function build()
    {
        return $this->view('email.user-activation')->with(['user' => $this->user, 'activation_link' => $this->activation_link]);
    }
}
