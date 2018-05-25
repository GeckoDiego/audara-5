<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/** 
 * @note Create the role table
 * @note the structure is linked to the Role model (app/Role.php)
 * @date 18-05-2018
 * @author José Torres 
 * @copyright Gecko sas
 * @package CreateRoleTable
 * @version Audara 1.0
*/

class CreateRoleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     * 
     * @note Create the role table
     */
    public function up()
    {
        Schema::create('role', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',45);
            $table->text('description');
            $table->enum('status', array('ENABLED', 'DISABLED'))->default('ENABLED');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     * 
     * @note Remove the role table
     */
    public function down()
    {
        Schema::dropIfExists('role');
    }
}
