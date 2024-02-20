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
        DB::table('animes')->insert([
            [
                'categoria_id' => 1,
                'nombreAnime' => 'One punch',
                'duracion' => 55,
                'descripcion' => 'Hombre super fuerte',
                'valoracion' => 7.5,
            ],
            [
                'categoria_id' => 2,
                'nombreAnime' => 'Hunter x Hunter',
                'duracion' => 78,
                'descripcion' => 'Aventuras de un niño',
                'valoracion' => 8.9,
            ],
            [
                'categoria_id' => 3,
                'nombreAnime' => 'One Piece',
                'duracion' => 1100,
                'descripcion' => 'Hombre de goma',
                'valoracion' => 9.4,
            ]
        ]);

        DB::table('users')->insert([
                'name' => 'guillermo',
                'email' => 'asdf@gmail.com',
                'password' => 'guillermo123',
        ]);

    }
}
