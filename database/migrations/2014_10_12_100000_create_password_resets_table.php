<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/** 
 * Create the password_resets table
 * @note For the use of key reminders to users once they have been forgotten
 * @note this table is typical of laravel, it has no model
 * @date 18-05-2018
 * @author José Torres 
 * @copyright Gecko sas
 * @package CreatePasswordResetsTable
 * @version Audara 1.0
*/

class CreatePasswordResetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     * @note Create the user table
     */
    public function up()
    {
        Schema::create('password_resets', function (Blueprint $table) {
            $table->string('email')->index();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
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
        Schema::dropIfExists('password_resets');
    }
}
