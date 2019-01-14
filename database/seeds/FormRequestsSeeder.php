<?php

use Illuminate\Database\Seeder;

class FormRequestsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\FormRequest::class, 50)->create();
    }
}
