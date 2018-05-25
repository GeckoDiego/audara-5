<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/** 
 * @note Create the group table
 * @note the structure is linked to the Group model (app/Group.php)
 * @date 18-05-2018
 * @author José Torres 
 * @copyright Gecko sas
 * @package CreateGroupTable
 * @version Audara 1.0
 * 
*/

class CreateGroupTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     * @note Create the user table
     */
    public function up()
    {
        Schema::create('group', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',60);
            $table->text('description');

            $table->enum('status', array('ENABLED', 'DISABLED'))->default('ENABLED'); 

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     * @note Remove the user table
     */
    public function down()
    {
        Schema::dropIfExists('group');
    }
}
