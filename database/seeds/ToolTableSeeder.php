<?php

use Illuminate\Database\Seeder;


class ToolTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tools')->insert([
            'libelle' => 'Roues 50 mm',
            'prix' => '25',
            'categ_id' => '1'
        ]);
        DB::table('tools')->insert([
            'libelle' => 'Vis multicolores',
            'prix' => '5',
            'categ_id' => '2'
        ]);
        DB::table('tools')->insert([
            'libelle' => 'Grip Grizzly',
            'prix' => '15',
            'categ_id' => '3'
        ]);
        DB::table('tools')->insert([
            'libelle' => 'Roulements ABEC 7 chrome',
            'prix' => '25',
            'categ_id' => '4'
        ]);
    }
}
