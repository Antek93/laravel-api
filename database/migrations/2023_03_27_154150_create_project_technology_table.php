<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_technology', function (Blueprint $table) {

            $table->unsignedBigInteger('project_id');
            $table->foreign('project_id')->references('id')->on('projects')
            ->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('technology_id');
            $table->foreign('technology_id')->references('id')->on('technologies')
            ->onDelete('cascade')->onUpdate('cascade');

            $table->primary(['project_id', 'technology_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::table('project_technology', function (Blueprint $table) {
        //     $table->dropForeign(['project_id']);
        //     $table->dropColumn('project_id');
        //     $table->dropForeign(['technology_id']);
        //     $table->dropColumn('technology_id');
        // });

        Schema::dropIfExists('project_technology');

        // Schema::table('project_technology', function (Blueprint $table) {

        //     $table->dropForeign(['project_id']);
        //     $table->dropColumn('project_id');
        //     $table->dropForeign(['technology_id']);
        //     $table->dropColumn('technology_id');
        // });
    }
};
