<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyContentColumnInFragmentsTable extends Migration
{
    public function up()
    {
        Schema::table('fragments', function (Blueprint $table) {
            $table->longText('content')->change();
        });
    }

    public function down()
    {
        Schema::table('fragments', function (Blueprint $table) {
            $table->text('content')->change();
        });
    }
}
