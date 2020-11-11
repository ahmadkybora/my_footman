<?php
/**
 * Created by PhpStorm.
 * User: kybora
 * Date: 8/8/2020
 * Time: 1:59 PM
 */

namespace App\Test;


class User
{
    private $name;
    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
}
