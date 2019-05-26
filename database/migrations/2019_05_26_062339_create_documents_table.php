<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        // creating columns for documents table

        Schema::create('documents', function (Blueprint $table) {
            $table->increments('id'); // primary key of this table

            // let's add some more table contents

            $table->bigInteger('user_id')->unsigned()->index();
            $table->string('title', 100);
            // lenght of title must be at least 5,remember to check it
            $table->timestamps(); // adds created_at and updated_at
            // we need also deleted_at so we are adding it
            $table->softDeletes(); // deleted_at
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('documents');
    }
}
