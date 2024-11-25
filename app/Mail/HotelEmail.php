<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use App\Models\HotelEnquiry;

class HotelEmail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    protected $hotelEnquiry;

    /**
     * Create a new message instance.
     */
    public function __construct(HotelEnquiry $hotelEnquiry)
    {
        //
        $this->hotelEnquiry = $hotelEnquiry;
    }
    public function build()
    {
        return $this->view('emails.hotelthankyou') // Adjust to the correct path
        ->with([
            'hotelEnquiry' => $this->hotelEnquiry,
        ]);
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Your Hotel Inquiry is in Good Hands – Let’s Get Started',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.hotelthankyou',
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
