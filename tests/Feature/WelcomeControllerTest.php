<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;


class WelcomeControllerTest extends TestCase 
{
  public function test_home_screen_can_be_rendered()
  {
      $response = $this->get('/');
      $response->assertStatus(200);
  }
}

?>
