<?php

namespace Tests\Browser;

use App\Repository;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class SearchTest extends DuskTestCase
{
  use DatabaseMigrations;

  /**
   * Perform search of Grovvy repository test.
   *
   * @return void
   */
  public function testExample()
  {
    $user = factory(Repository::class)->create([
      'node_id' => 'MDEwOlJlcG9zaXRvcnkxNDE4ODIwNg==',
      'name' => 'example-groovy',
      'full_name' => 'githubtraining/example-groovy',
      'html_url' => 'https://github.com/githubtraining/example-groovy',
      'url' => 'https://api.github.com/repos/githubtraining/example-groovy',
      'commits_url' => 'https://api.github.com/repos/githubtraining/example-groovy/commits{/sha}',
      'git_commits_url' => 'https://api.github.com/repos/githubtraining/example-groovy/git/commits{/sha}',
      'repo_created_at' => '2017-04-03T14:51:26Z',
      'repo_updated_at' => '2018-04-27T00:55:12Z',
      'repo_pushed_at' => '2018-04-03T14:11:51Z',
    ]);

    $this->browse(function (Browser $browser) {
      $browser->visit('/repositories')
              ->type('name', 'Groovy')
              ->click('@search')
              ->waitForLocation('/repositories')
              ->assertSee('example-groovy');
    });
  }
}
