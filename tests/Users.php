<?php

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class UsersTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testUserName()
    {
        $this->post('/users/new');

        $this->assertEquals(
            $this->app->version(),
            $this->response->getContent()
        );
    }

    public function test_asserting_an_exact_json_match()
    {
        $this->json(
            'POST',
            '/users/new',
            [
                'name' => 'Sally',
                'email' => 'plop@gmail.com',
                'pseudo' => 'Sally',
                'password' => 'password'
            ]
        )->seeStatusCode(200);
    }
}
