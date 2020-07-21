<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExperienciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('experiencias')->insert([
            'nombre' => '0 - 6 Meses',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('experiencias')->insert([
            'nombre' => '6 Meses - 1 Año',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('experiencias')->insert([
            'nombre' => '1 año - 3 años',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('experiencias')->insert([
            'nombre' => '3 años - 5 años',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('experiencias')->insert([
            'nombre' => '5 años - 7 años',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('experiencias')->insert([
            'nombre' => '7 años - 10 años',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('experiencias')->insert([
            'nombre' => '10 años - 12 años',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('experiencias')->insert([
            'nombre' => '12 años - 15 años',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
