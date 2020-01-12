<?php namespace Balbos\BalbosTest;

class BalbosTest
{
    public function isOkay($param): bool
    {
        if ($param = 1) {
            return true;
        } else return false;
    }
}