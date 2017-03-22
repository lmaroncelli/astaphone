<?php

use Illuminate\Database\Seeder;

class CreateHomePageSlideFooterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('tblSlide')->insert([
    	    [
    	    'id' => 4,
    	    'titolo' => 'hp_slide_footer'
    	    ],
    	 ]
    	);
    }
}
