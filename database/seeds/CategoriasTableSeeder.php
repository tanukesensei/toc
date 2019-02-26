<?php

use Illuminate\Database\Seeder;

class CategoriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('categoria')->delete();

      DB::table('categoria')->insert([
        ['nome' => 'Livros'],
          ['nome' => 'Revistas'],
            ['nome' => 'Mangás'],
             ['nome' => 'HQs']
           ]);
    }
}
