<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/** 
 * @note Create the module_category table
 * @note the structure is linked to the role Module_category (app/Module_category.php)
 * @date 22-05-2018
 * @author José Torres 
 * @copyright Gecko sas
 * @package CreateModule_categoryTable
 * @version Audara 1.0
 * 
*/

class CreateModuleCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     * @note Create the module_category table
     */
    public function up()
    {
        Schema::create('module_category', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',60);
            $table->integer('order');
            $table->enum('status', array('ENABLED', 'DISABLED'))->default('ENABLED');
            

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     * @note Remove the module_category table
     */
    public function down()
    {
        Schema::dropIfExists('module_category');
    }
}
