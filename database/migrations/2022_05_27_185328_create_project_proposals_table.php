<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectProposalsTable extends Migration
{
    public function up()
    {
        Schema::create('project_proposals', function (Blueprint $table) {
            $table->id();
            $table->string('servicesSelected');
            $table->string('full_name');
            $table->string('email');
            $table->string('mobile_number');
            $table->string('ref_website');
            $table->text('details');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('project_proposals');
    }
}
