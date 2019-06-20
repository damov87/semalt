<?php

use Illuminate\Database\Seeder;

class BidsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bids')->insert([

            [
                'id_event' => 1,
                'name' => 'Василий',
                'email' => 'vas@gmail.com',
                'price' => '150',
            ],
            [
                'id_event' => 1,
                'name' => 'Даша',
                'email' => 'dasha@gmail.com',
                'price' => '250',
            ],
            [
                'id_event' => 1,
                'name' => 'Милена',
                'email' => 'milena@gmail.com',
                'price' => '200',
            ],
            [
                'id_event' => 1,
                'name' => 'Петя',
                'email' => 'petr@gmail.com',
                'price' => '200',
            ],
            [
                'id_event' => 2,
                'name' => 'Дима',
                'email' => 'dima@gmail.com',
                'price' => '200',
            ],
            [
                'id_event' => 2,
                'name' => 'Тарас',
                'email' => 'Taras@gmail.com',
                'price' => '200',
            ],
            [
                'id_event' => 2,
                'name' => 'Стас',
                'email' => 'stas@gmail.com',
                'price' => '200',
            ],
            [
                'id_event' => 2,
                'name' => 'Артем',
                'email' => 'artem@gmail.com',
                'price' => '200',
            ],
            [
                'id_event' => 1,
                'name' => 'Николай',
                'email' => 'nk@gmail.com',
                'price' => '100',
            ]
        ]);
    }
}
