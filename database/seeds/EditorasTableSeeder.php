<?php

use Illuminate\Database\Seeder;

class EditorasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('editora')->delete();

      DB::table('editora')->insert([
        ['nome' => 'Abril'],
          ['nome' => 'Arqueiro'],
            ['nome' => 'Jambô'],
             ['nome' => 'JBC'],
              ['nome' => 'Panini']
]);
    }
}
