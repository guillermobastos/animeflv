<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class seederCategorias extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias') -> insert([
            [
                'nombreCategoria' => 'Thriller',
            ],

            [
                'nombreCategoria' => 'Policial',
            ],
            [
                'nombreCategoria' => 'Aventuras',
            ]

        ]);
    }
}
