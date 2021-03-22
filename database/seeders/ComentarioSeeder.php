<?php

namespace Database\Seeders;

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class ComentarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::create('comentarios', function (Blueprint $table) {
            $table->id();

            $table->string('email');
            $table->text('texto')->nullable();
            $table->dateTimeTz('fecha')->nullable();
            $table->boolean('visible')->nullable()->default(false);

            $table->timestamps();
        });
    }
}
