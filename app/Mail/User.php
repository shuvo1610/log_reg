<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class User extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $mail;

    public function __construct($details)
    {
        $this->mail=$details;

    }

    public function build()
    {
        return $this->subject('Mail from spaGreen')->view('gmail.send',$this->mail);
    }


}
