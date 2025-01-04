<?php 

namespace app\services;
if(!defined('TRACK_PATH')){
    echo "permision denid!";
    die();
}
class email
{
    public string $to;
    public string $subject;
    public string $body;
    public string $from;
    public string $fromName;

    public function __construct(string $to, string $subject, string $body, string $from = 'no-reply@example.com', string $fromName = 'Example')
    {
        $this->to = $to;
        $this->subject = $subject;
        $this->body = $body;
        $this->from = $from;
        $this->fromName = $fromName;
    }
}