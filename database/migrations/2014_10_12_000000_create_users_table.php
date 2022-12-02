<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('codigo');
            $table->string('NombreCompleto');
            $table->timestamps();
        });
        DB::table('users')->insert([
            array(
                'codigo' => '172026',
                'NombreCompleto' => 'jhonatan fernandez',
                'created_at' => new \Datetime(),
                'updated_at' => new \Datetime(),
            ),
            array(
                'codigo' => '789456',
                'NombreCompleto' => 'carlos martinez',
                'created_at' => new \Datetime(),
                'updated_at' => new \Datetime(),
            ),
            array(
                'codigo' => '258753',
                'NombreCompleto' => 'oscar zuluaga',
                'created_at' => new \Datetime(),
                'updated_at' => new \Datetime(),
            )
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
