<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/** 
 * @note Create the module table
 * @note the structure is linked to the role Module (app/Module.php)
 * @date 18-05-2018
 * @author José Torres 
 * @copyright Gecko sas
 * @package CreateModuleTable
 * @version Audara 1.0
 * 
*/

class CreateModuleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     * @note Create the module table
     * @note the foreign keys:
     * @note rolmodule_type_ide_id -> referenced the module_app table ->id
     * @note module_category_id -> referenced the module_category table ->id
     */
    public function up()
    {
        Schema::create('module', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',60);
            $table->text('description');            
            $table->string('alias',45);
            $table->integer('module_type_id')->unsigned();
            $table->integer('module_category_id')->unsigned();
            $table->integer('order');
            $table->enum('status', array('ENABLED', 'DISABLED'))->default('ENABLED');
            
            $table->foreign('module_type_id')->references('id')->on('module_app');
            $table->foreign('module_category_id')->references('id')->on('module_category');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     * @note Remove the module table
     */
    public function down()
    {
        Schema::dropIfExists('module');
    }
}
