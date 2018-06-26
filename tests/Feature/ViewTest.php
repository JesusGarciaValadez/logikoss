<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ViewTest extends TestCase
{
  /**
   * Test if the response HTTP code status is 200.
   *
   * @return void
   */
  public function testResponseIs200()
  {
    $response = $this->get('/repositories');

    $response->assertStatus(200);
  }

  /**
   * Test if the response HTTP code status is 200.
   *
   * @return void
   */
  public function testSuccessfullStatusCode()
  {
    $response = $this->get('/repositories');

    $response->assertSuccessful();
  }

  /**
   * Test if the view is the correct view.
   *
   * @return void
   */
  public function testViewIs()
  {
    $response = $this->get('/repositories');

    $response->assertViewIs('repositories.index');
  }

  /**
   * Test of we are a guest user.
   *
   * @return void
   */
  public function testGuestUser()
  {
    $this->assertGuest();
  }

  /**
   * Test if we can see the H1 of the page.
   *
   * @return void
   */
  public function testSeeTitle()
  {
    $response = $this->get('/repositories');

    $response->assertSee('Repositorios de The GitHub Training Team');
  }

  /**
   * Test if we can see the description of the page.
   *
   * @return void
   */
  public function testSeeDescription()
  {
    $response = $this->get('/repositories');

    $response->assertSeeText('Teaching the world how to effectively use the GitHub collaboration platform.');
  }
}
