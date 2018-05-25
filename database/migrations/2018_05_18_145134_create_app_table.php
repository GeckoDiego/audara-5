<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/** 
 * @note Create the app table
 * @note the structure is linked to the App model (app/App.php)
 * @date 18-05-2018
 * @author José Torres 
 * @copyright Gecko sas
 * @package CreateAppTable
 * @version Audara 1.0
 * 
*/

class CreateAppTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     * @note Create the app table
     */
    public function up()
    {
        Schema::create('app', function (Blueprint $table) {
            $table->string('name',50)->primary()->default('');
            $table->text('description');
            $table->string('advanced',3);
            $table->string('icon',100);
            $table->string('apps',150);

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
        Schema::dropIfExists('app');
    }
}
