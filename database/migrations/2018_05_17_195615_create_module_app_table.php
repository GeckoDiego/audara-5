<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/** 
 * @note Create the module_app table
 * @note the structure is linked to the role Module_app (app/Module_app.php)
 * @date 18-05-2018
 * @author José Torres 
 * @copyright Gecko sas
 * @package CreateModuleAppTable
 * @version Audara 1.0
*/

class CreateModuleAppTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     * @note Create the module_app table
     */
    public function up()
    {
        Schema::create('module_app', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',60);
            $table->enum('status', array('ENABLED', 'DISABLED'))->default('ENABLED');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     * @note Remove the module_app table
     */
    public function down()
    {
        Schema::dropIfExists('module_app');
    }
}
