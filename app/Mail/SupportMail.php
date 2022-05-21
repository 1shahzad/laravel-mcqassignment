<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SupportMail extends Mailable
{
    use Queueable, SerializesModels;

    public $username;
    public $purpose;
    public $message;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($patient_details,$patient_answer_details)
    {
        $this->patient_details = $patient_details;
        $this->patient_answer_details = $patient_answer_details;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $patient_details = $this->patient_details;
        $patient_answer_details = $this->patient_answer_details;

        return $this->from('support@onlinedocs.us')->view('mail.support',compact('patient_details','patient_answer_details'))->subject('New Patient Enquiry');
    }
}
