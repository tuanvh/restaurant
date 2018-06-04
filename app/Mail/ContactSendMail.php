<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactSendMail extends Mailable
{
    use Queueable, SerializesModels;
    public $infor;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($arr)
    {
        $this->infor = "Infor test";
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // chúng ta có thể sử dụng biến global from trong file cấu hình config/mail.php.
        // Địa chỉ này sẽ được sử dụng nếu không chỉ định from address trong mailable class.
        // return $this->from('tuanvh99bn@gmail.com')->view('emails.contact');
        return $this->view('emails.contact')
            ->subject('test 123');
    }
}
