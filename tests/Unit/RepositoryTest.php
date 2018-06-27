<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

use App\Repository;

class RepositoryTest extends TestCase
{
  use RefreshDatabase;

  /**
   * The data with the repository are filled.
   *
   * @var array
   */
  private $_data = [
    'node_id' => 'MDEwOlJlcG9zaXRvcnk4NzA4NTkyMA',
    'name' => 'polygons',
    'full_name' => 'githubtraining/polygons',
    'html_url' => 'https://github.com/githubtraining/polygons',
    'url' => 'https://api.github.com/repos/githubtraining/polygons',
    'commits_url' => 'https://api.github.com/repos/githubtraining/polygons/commits{/sha}',
    'git_commits_url' => 'https://api.github.com/repos/githubtraining/polygons/git/commits{/sha}',
    'repo_created_at' => '2017-04-03T14:51:26Z',
    'repo_updated_at' => '2018-04-27T00:55:12Z',
    'repo_pushed_at' => '2018-04-03T14:11:51Z',
  ];

  /**
   * A test of database correct insert with hardcoded data.
   *
   * @return void
   */
  public function testDatabaseTest()
  {
    $repository = new Repository($this->_data);
    $repository->save();

    $this->assertDatabaseHas('repositories', $this->_data);
  }

  /**
   * A test of database correct insert with model factory.
   *
   * @return void
   */
  public function testModelFactoryTest()
  {
    $repository = factory(\App\Repository::class)->make($this->_data);
    $repository->save();

    $this->assertDatabaseHas('repositories', $this->_data);
  }
}
