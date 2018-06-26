<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

use App\Repository as Repository;
use GrahamCampbell\GitHub\Facades\GitHub as Github;

class StoreRepositories implements ShouldQueue
{
  use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

  /**
   * Indicates the username of the github account to retrieve info.
   *
   * @var string
   */
  private $_username = 'githubtraining';

  /**
   * Indicates the type of the github account to retrieve info.
   *
   * @var string
   */
  private $_type = 'owner';

  /**
   * Indicates how the info account will be sorted.
   *
   * @var string
   */
  private $_sort = 'name';

  /**
   * Indicates the direction of how will be sorted the info of the account.
   *
   * @var string
   */
  private $_direction = 'desc';

  /**
   * Indicates the vibility of the repositories.
   *
   * @var string
   */
  private $_visibility = 'all';

  /**
   * Indicates the affiliation of the repositories.
   *
   * @var string
   */
  private $_affiliation = null;

  /**
   * Create a new job instance.
   *
   * @return void
   */
  public function __construct()
  {
    //
  }

  /**
   * Execute the job.
   *
   * @return void
   */
  public function handle()
  {
    $repositories = GitHub::user()
                      ->repositories(
                        $this->_username,
                        $this->_type,
                        $this->_sort,
                        $this->_direction,
                        $this->_visibility,
                        $this->_affiliation
                      );

    foreach ($repositories as $data)
    {
      $repository = Repository::updateOrCreate([
        'node_id' => $data['node_id']
      ], [
        'name' => $data['name'],
        'full_name' => $data['full_name'],
        'html_url' => $data['html_url'],
        'url' => $data['url'],
        'commits_url' => $data['commits_url'],
        'git_commits_url' => $data['git_commits_url'],
        'repo_created_at' => $data['created_at'],
        'repo_updated_at' => $data['updated_at'],
        'repo_pushed_at' => $data['pushed_at'],
      ]);
    }
  }
}
