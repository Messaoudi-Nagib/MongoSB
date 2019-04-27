<?php

use Illuminate\Database\Seeder;


class CategorieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'libelle' => 'Roues',
        ]);
        DB::table('categories')->insert([
            'libelle' => 'Visserie',
        ]);
        DB::table('categories')->insert([
            'libelle' => 'Grip',
        ]);
        DB::table('categories')->insert([
            'libelle' => 'Roulements',
        ]);
    }
}
