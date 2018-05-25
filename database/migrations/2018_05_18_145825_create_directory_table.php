<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/** 
 * @note Create the directory table
 * @note the structure is linked to the Directory model (app/Directory.php)
 * @date 18-05-2018
 * @author José Torres 
 * @copyright Gecko sas
 * @package CreateDirectoryTable
 * @version Audara 1.0
 * 
*/

class CreateDirectoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     * @note Create the directory table
     */
    public function up()
    {
        Schema::create('directory', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_exten',20);
            $table->integer('directory_group_id');


            $table->enum('status', array('ENABLED', 'DISABLED'))->default('ENABLED'); 

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     * @note Remove the directory table
     */
    public function down()
    {
        Schema::dropIfExists('directory');
    }
}
