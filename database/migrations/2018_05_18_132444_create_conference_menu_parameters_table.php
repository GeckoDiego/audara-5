<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/** 
 * @note Create the conference_menu_parameters table
 * @note the structure is linked to the Conference_menu_parameters model (app/Conference_menu_parameter.php)
 * @date 18-05-2018
 * @author José Torres 
 * @copyright Gecko sas
 * @package CreateConferenceMenuParametersTable
 * @version Audara 1.0
 * 
*/

class CreateConferenceMenuParametersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     * @note Create the conference_menu_parameters table
     */
    public function up()
    {
        Schema::create('conference_menu_parameters', function (Blueprint $table) {
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
     * @note Remove the conference_menu_parameters table
     */
    public function down()
    {
        Schema::dropIfExists('conference_menu_parameters');
    }
}
