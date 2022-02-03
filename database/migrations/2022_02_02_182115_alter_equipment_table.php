<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterEquipmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::table('equipment', function (Blueprint $table) {
            $table->string('name', 40)->change();
            $table->dropColumn('price');
            $table->index('name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        schema::table('equipment', function (Blueprint $table) {
            $table->string('name', 50)->change();
            $table->float('price');
            $table->dropIndex('equipment_name_index');
        });
    }
}
