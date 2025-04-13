<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class GuiMail extends Mailable
{
    use Queueable, SerializesModels;

    public function build()
    {
        return $this->from('postmaster@sandboxxxxx.mailgun.org', 'Tên người gửi')
            ->to('diachi@email.com')
            ->subject('Chủ đề: Thử gửi mail với Mailgun')
            ->attach(storage_path('app/public/demo.pdf'))
            ->view('guimail');
    }
}
