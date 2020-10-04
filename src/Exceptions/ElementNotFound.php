<?php

namespace UWebPro\Browsershot\Exceptions;

use Exception;

class ElementNotFound extends Exception
{
    public function __construct($selector)
    {
        parent::__construct("The given selector `{$selector} did not match any elements");
    }
}
