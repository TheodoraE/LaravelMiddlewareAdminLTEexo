<?php

namespace App\Mail;

use App\Models\EmailSubject;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailSend extends Mailable
{
    use Queueable, SerializesModels;
    public $subject;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($request)
    {
        $subjectId = EmailSubject::find($request->subject_id);
        $this->email = $request->email;
        $this->contenu = $request->contenu;
        $this->subject = $subjectId->subject;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->email)->subject($this->subject)->view('template.templateEmail')->with(['emailClient' => $this->email, 'emailMessage' => $this->contenu]);
    }
}
