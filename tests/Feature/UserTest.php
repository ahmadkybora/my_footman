<?php

namespace Tests\Feature;

use App\Test\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    public function test_set()
    {
        $user = new User();
        $user->setName('hello');
        $name = $user->getName();
        $this->assertEquals($name, 'hello');
    }
}
