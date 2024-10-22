<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use App\Models\FlightEnquiry;  

class EnquiryThankYouMail extends Mailable
{
    use Queueable, SerializesModels;
    public $flightEnquiry;
    /**
     * Create a new message instance.
     */
    public function __construct(FlightEnquiry $flightEnquiry)
    {
        //
        $this->flightEnquiry = $flightEnquiry;
    }
    public function build()
    {
        return $this->subject('Thank You for Your Flight Enquiry')
                    ->view('emails.thankyou');
    }
    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: "Thanks for Contacting Us – We're Excited to Assist You",
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.thankyou',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
