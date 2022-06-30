<?php

use App\Enums\CenterStatus;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCentersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('centers', function (Blueprint $table) {
            $table->id();
            $table->string('branch_name');
            $table->string('owner_name');
            $table->string('fathers_name');
            $table->string('mothers_name');
            $table->unsignedTinyInteger('religion');
            $table->unsignedTinyInteger('gender');
            $table->string('nationality');
            $table->unsignedInteger('division');
            $table->unsignedInteger('district');
            $table->unsignedInteger('upazilla');
            $table->string('post_office');
            $table->string('postal_code');
            $table->string('facebook_url')->nullable();
            $table->unsignedInteger('no_of_computers');
            $table->string('institute_age');
            $table->string('address');
            $table->string('mobile');
            $table->string('email');
            $table->string('photo');
            $table->string('authority_signature');
            $table->string('nid_photo');
            $table->string('tread_license');
            $table->unsignedTinyInteger('status')->default(CenterStatus::Pending);
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
        Schema::dropIfExists('centers');
    }
}
