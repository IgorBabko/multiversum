<?php

use Multiversum\User;

class UserTest extends TestCase
{
    protected $user;

    protected function createUser()
    {
        return factory(User::class)->make(['name' => 'niko', 'email' => 'portaciya@gmail.com']);
    }

    /** @test */
    public function a_user_is_admin()
    {
        $user = $this->createUser();
        $this->assertTrue($user->isAdmin());
    }

    /** @test */
    public function a_user_has_a_name()
    {
        $user = $this->createUser();
        $this->assertSame('niko', $user->name);
    }
}
