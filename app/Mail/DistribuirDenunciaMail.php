<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class DistribuirDenunciaMail extends Mailable
{
    use Queueable, SerializesModels;

    private $emailDestinatario;
    private $textoDenuncia;
    private $url;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($dados)
    {
        $this->emailDestinatario = $dados["emailDestinatario"];
        $this->textoDenuncia = $dados["textoDenuncia"];
        $this->url = $dados["url"];
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: 'Distribuição de Denúncia',
            to: $this->emailDestinatario
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        
        return new Content(
            markdown: 'pages.mails.distribuir-denuncia-mail',
            with: [
                'textoDenuncia' => $this->textoDenuncia,
                'url' => $this->url,
            ],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
}
