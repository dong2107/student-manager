<?php

class User
{
    public $name;
    public $phone;
    public $address;
    public $id;

    public function __construct($name, $phone, $address)
    {
        $this->name = $name;
        $this->phone = $phone;
        $this->address = $address;
    }
}