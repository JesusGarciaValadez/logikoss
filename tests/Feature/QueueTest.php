<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Jobs\StoreRepositories as StoreRepositories;
use Illuminate\Support\Facades\Queue;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class QueueTest extends TestCase
{
  use RefreshDatabase, WithoutMiddleware;

  /**
   * Perform store repository test.
   *
   * @return void
   */
  public function testStoreRepositoriesIsPushedTest()
  {
    Queue::fake();

    StoreRepositories::dispatch()->onQueue('default');

    Queue::assertPushed(StoreRepositories::class);
  }

  /**
   * Assert StoreRepositories was pushed to a work queue.
   *
   * @return void
   */
  public function testStoreRepositoriesIsPushedOnWorkQueueTest()
  {
    Queue::fake();

    StoreRepositories::dispatch()->onQueue('default');

    Queue::assertPushedOn('default', StoreRepositories::class);
  }

  /**
   * Assert a job was pushed twice...
   *
   * @return void
   */
  public function testStoreRepositoriesIsPushedTwiceTest()
  {
    Queue::fake();

    StoreRepositories::dispatch()->onQueue('default');
    StoreRepositories::dispatch()->onQueue('default');

    Queue::assertPushed(StoreRepositories::class, 2);
  }

  /**
   * Assert a strange job was not pushed.
   *
   * @return void
   */
  public function testStrangeJobIsNotPushedTest()
  {
    Queue::fake();

    Queue::assertNotPushed(AnotherJob::class);
  }
}
