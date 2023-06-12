<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $hoten = "";
    public $email = "";
    public $noidung = "";

    public function __construct($ht, $em, $nd)
    {
        $this->hoten = $ht;
        $this->email = $em;
        $this->noidung = $nd;
    }
    public function build()
    {
        return $this->subject('Mail liên hệ từ khách hàng')->view('thongbao');
    }
}
