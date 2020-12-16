<?php

namespace Tests\Unit;

use App\Mail\SendEmail;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

class MailerTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testSendingTrue()
    {
        $credential = [
            'name' => 'test',
            'email' => 'test@example.com',
            'message' => 'lorem ipsum',
        ];

        $response = $this->post(route('sendEmail'),$credential);

        $response->assertStatus(302);
    }

    public function testSendingFalse()
     {
         $credential = [
             'name' => 'test',
             'email' => 'test@example.com',
             'message' => 'lorem ipsum',
         ];

         $response = $this->post(route('sendEmail'),$credential);

         $response->assertStatus(301);
     }
}
