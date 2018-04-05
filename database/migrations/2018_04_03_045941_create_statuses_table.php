<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Status;

class CreateStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('statuses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('status');
            $table->string('color');
            $table->timestamps();
        });

        Status::create([
            'status' => 'En Espera',
            'color' => '#d9534f'
        ]);
        Status::create([
            'status' => 'Trabajando',
            'color' => '#5cb85c'
        ]);
        Status::create([
            'status' => 'Finalizado',
            'color' => '#ccc'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('statuses');
    }
}
