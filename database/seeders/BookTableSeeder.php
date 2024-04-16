<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class BookTableSeeder extends Seeder
{
    /**

     * @return void
     */
    public function run()
    {

        Book::factory()
            ->count(20)
            ->create();
    }
}