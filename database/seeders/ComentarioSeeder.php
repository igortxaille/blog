<?php

namespace Database\Seeders;

use App\Models\Comentario;
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
        Comentario::factory(10)->create([
            'entrada_id' => 1
        ]);
    }
}
