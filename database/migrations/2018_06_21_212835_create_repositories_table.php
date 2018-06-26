<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRepositoriesTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('repositories', function (Blueprint $table) {
      $table->engine = 'InnoDB';
      $table->charset = 'utf8';
      $table->collation = 'utf8_unicode_ci';

      $table->increments('id');

      $table->string('node_id');
      $table->text("name");
      $table->text("full_name");
      $table->text("html_url");
      $table->text("url");
      $table->text("commits_url");
      $table->text("git_commits_url");
      $table->string("repo_created_at")->nullable();
      $table->string("repo_updated_at")->nullable();
      $table->string("repo_pushed_at")->nullable();
      $table->timestamp("api_last_updated_at");

      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('repositories');
  }
}
