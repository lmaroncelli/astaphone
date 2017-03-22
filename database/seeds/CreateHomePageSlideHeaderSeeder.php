<?php

use Illuminate\Database\Seeder;

class CreateHomePageSlideHeaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('tblSlide')->truncate();

       DB::table('tblSlide')->insert([
           [
           'id' => 1,
           'titolo' => 'hp_slide_header'
           ],
           [
           'id' => 2,
           'titolo' => 'hp_slide_freschi'
           ],
           [
           'id' => 3,           
           'titolo' => 'hp_slide_confezionati'
           ],
        ]
       );
    }
}
