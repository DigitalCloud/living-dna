<?php


namespace DigitalCloud\LivingDna;

use DigitalCloud\LivingDna\Modules\Accounts;
use DigitalCloud\LivingDna\Modules\Authentication;
use DigitalCloud\LivingDna\Modules\Kits;
use DigitalCloud\LivingDna\Modules\Orders;

class LDNA
{
    public static function authentication()
    {
        return new Authentication();
    }

    public static function accounts()
    {
        return new Accounts();
    }

    public static function orders()
    {
        return new Orders();
    }

    public static function kits()
    {
        return new Kits();
    }
}