<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class seederAnimes extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('animes') -> insert([
            'nombreAnime' => 'thriller',
            'duracion' => 55,
            'descripcion' => 'thriller',
            'valoracion' => 'thriller',
        ]);
    }
}
