<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use App\Models\TicketEnquiry;

class TicketEnquiryThankYouMail extends Mailable
{
    use Queueable, SerializesModels;
    public $ticketEnquiry;
    /**
     * Create a new message instance.
     */
    public function __construct(TicketEnquiry $ticketEnquiry)
    {
        //
        $this->ticketEnquiry = $ticketEnquiry;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Ticket Enquiry Thank You Mail',
        );
    }
    public function build()
    {
        return $this->subject('Thank You for Your Flight Enquiry')
                    ->view('emails.ticketthankyou');
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.ticketthankyou',
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