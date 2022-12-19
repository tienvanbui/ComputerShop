<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
class RegisteredUserMail extends Mailable
{
    use Queueable, SerializesModels;
    protected $userName ;
    protected $subjectMail = 'Register account successfully!';
    protected $messages = "Congratulation,your account has been successfully created!";
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($userName)
    {
        $this->userName = $userName;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.registed.user_registed_success')
            ->subject($this->subjectMail)
            ->with('messages',$this->messages)
            ->with('userName',$this->userName);
    }
}
