<?php

use PHPUnit\Framework\TestCase;

require 'vendor/autoload.php';

class ValidatePasswordTest extends TestCase {

    public function testValidLength() {
        $valPass = new ValidatePassword();
        $this->assertFalse($valPass->validLength('1234'));
    }

}