<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/** 
 * @note Create the role_module table
 * @note the structure is linked to the Role_module model (app/Role_module.php)
 * @date 22-05-2018
 * @author José Torres 
 * @copyright Gecko sas
 * @package CreateRoleModuleTable
 * @version Audara 1.0
 * 
*/

class CreateRoleModuleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     * @note Create the user table
     * @note the foreign keys:
     * @note role_id -> referenced the role table ->id
     * @note module_id -> referenced the module table ->d
     */
    public function up()
    {
        Schema::create('role_module', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('role_id')->unsigned();
            $table->integer('module_id')->unsigned();
            $table->enum('permission', array('READ','WRITE')); 
            $table->enum('status', array('ENABLED', 'DISABLED'))->default('ENABLED');

            $table->foreign('role_id')->references('id')->on('role');

            $table->foreign('module_id')->references('id')->on('module'); 


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     * @note Remove the role_module table
     */
    public function down()
    {
        Schema::dropIfExists('role_module');
    }
}
