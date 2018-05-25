<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/** 
 * @note Create the extension_group table
 * @note the structure is linked to the Extension_group model (app/Extension_group.php)
 * @date 18-05-2018
 * @author José Torres 
 * @copyright Gecko sas
 * @package CreateExtensionGroupTable
 * @version Audara 1.0
 * 
*/

class CreateExtensionGroupTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     * @note Create the extension_group table
     */
    public function up()
    {
        Schema::create('extension_group', function (Blueprint $table) {
            $table->increments('extension_id');
            $table->integer('group_id');
            $table->unique('group_id');


            $table->enum('status', array('ENABLED', 'DISABLED'))->default('ENABLED'); 

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     * @note Remove the extension_group table
     */
    public function down()
    {
        Schema::dropIfExists('extension_group');
    }
}
