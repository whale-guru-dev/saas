<?php

namespace App\Mail\Auth;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class InviteEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $invitedBy;

    public $account;

    public $password;

    /**
     * Create a new message instance.
     *
     * @param $token
     */
    public function __construct($account, $invitedBy, $password)
    {
        $this->account = $account;
        $this->invitedBy = $invitedBy;
        $this->password = $password;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject(trans('saas.email_invited'))->markdown('emails.account.invited');
    }
}
