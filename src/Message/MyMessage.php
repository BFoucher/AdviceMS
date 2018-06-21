<?php
/**
 * Created by PhpStorm.
 * User: yoda
 * Date: 21/06/18
 * Time: 10:07
 */

namespace App\Message;


use Symfony\Component\Messenger\Envelope;

class MyMessage
{
    public $content;

    public function __construct(Envelope $envelope)
    {
        $this->content = $envelope;
    }
}