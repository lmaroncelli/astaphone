<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CreateProduttoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * */
    public function run()
    {
        DB::table('tblProduttori')->insert([
        		['nome' => 'Acer'], 
                ['nome' => 'Apple'],
                ['nome' => 'Asus'],
        		['nome' => 'BenQ'] ,
        		['nome' => 'Dell'], 
        		['nome' => 'HP'],
        		['nome' => 'HTC'],
        		['nome' => 'HUAWEI'],
        		['nome' => 'Lenovo'],
        		['nome' => 'LG'],
        		['nome' => 'Meizu'],
        		['nome' => 'Nokia'],
        		['nome' => 'Pansasonic'],
        		['nome' => 'Philips'],
        		['nome' => 'Samsung'],
        		['nome' => 'Siemens'],
        		['nome' => 'Sony'],
        		['nome' => 'Toshiba'],
        		['nome' => 'Wiko'],
        		['nome' => 'Xiaomi'],
        		['nome' => 'Microsoft'],
        	]);
    }
}
