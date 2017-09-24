<?php

class Email 
{
    private $address;
    private $topic;
    private $maessage;
    public function setAddres($address)
    {
        $this -> address = $address;
    }
    public function setTopic($topic)
    {
        $this -> topic = $topic;
    }
    public function setMessage($message) {
        $this -> message = $message;
    }
    public function send()
    {
        return 'Письмо успешно добавленно на почту ' . $this -> address;
    }
}