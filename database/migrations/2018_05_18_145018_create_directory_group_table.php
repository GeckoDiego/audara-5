<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/** 
 * @note Create the directory_group table
 * @note the structure is linked to the Directory_group model (app/Directory_group.php)
 * @date 18-05-2018
 * @author José Torres 
 * @copyright Gecko sas
 * @package CreateDirectoryGroupTable
 * @version Audara 1.0
 * 
*/

class CreateDirectoryGroupTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     * @note Create the directory_group table
     */
    public function up()
    {
        Schema::create('directory_group', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',50);

            $table->enum('status', array('ENABLED', 'DISABLED'))->default('ENABLED'); 

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     * @note Remove the directory_group table
     */
    public function down()
    {
        Schema::dropIfExists('directory_group');
    }
}
