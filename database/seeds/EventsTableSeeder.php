<?php

use Illuminate\Database\Seeder;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->insert([

            [
                'caption' => 'Atlas Weekend 2017',
            ],
            [
                'caption' => 'Грин Грей(Green Grey)',
            ],
            [
                'caption' => 'Atlas Weekend 2019',
            ]
        ]);
    }
}
