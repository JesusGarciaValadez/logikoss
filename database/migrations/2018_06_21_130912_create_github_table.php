<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGithubTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('github', function (Blueprint $table) {
      $table->engine = 'InnoDB';
      $table->charset = 'utf8';
      $table->collation = 'utf8_unicode_ci';

      $table->increments('id');

      $table->timestamp('last_accesed');
      $table->json('last_ten_repositories');

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
    Schema::dropIfExists('github');
  }
}
