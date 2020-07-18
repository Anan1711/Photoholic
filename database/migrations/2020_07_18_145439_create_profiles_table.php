<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();

            // foreign key
            // one to one relation with User table
            $table->unsignedBigInteger('user_id');

            // added a field for title,description and url.
            // This are nullable meaning user may not fill thies fields.
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->string('url')->nullable();

            // for good measure
            // for better searchability and quicker queries.
            // you should add index for any foreign key.
            $table->index('user_id');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}
