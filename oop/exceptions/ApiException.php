<?php

class ApiException extends Exception
{
    public $message = 'Some API error';
    public $code = 500;
}
