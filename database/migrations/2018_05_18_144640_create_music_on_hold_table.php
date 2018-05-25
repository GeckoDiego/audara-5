<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/** 
 * @note Create the music_on_hold table
 * @note the structure is linked to the Music_on_hold model (app/Music_on_hold.php)
 * @date 18-05-2018
 * @author José Torres 
 * @copyright Gecko sas
 * @package CreateMusicOnHoldTable
 * @version Audara 1.0
 * 
*/

class CreateMusicOnHoldTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     * @note Create the user table
     */
    public function up()
    {
        Schema::create('music_on_hold', function (Blueprint $table) {
            $table->string('name',100)->primary()->default('');
            $table->string('directory',100)->default('');
            $table->string('random',10);
            $table->string('mode',45)->default('files');


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
        Schema::dropIfExists('music_on_hold');
    }
}
