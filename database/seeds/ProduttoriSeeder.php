<?php

use Illuminate\Database\Seeder;

class ProduttoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //DB::table('tblProduttori')->truncate();

      DB::table('tblProduttori')->insert([
      		['id' => 6,'nome' => 'Cose dell\'altro pane'], 
      		['id' => 7,'nome' => 'Dr. Schaer'],
      		['id' => 8,'nome' => 'Bi-Aglut'] ,
      		['id' => 9,'nome' => 'Glutafin'], 
      		['id' => 10,'nome' => 'Estrella Damm'],
      		['id' => 14,'nome' => 'Alinor'],
      		['id' => 15,'nome' => 'Cascina Belcreda'],
      		['id' => 16,'nome' => 'Pandea'],
      		['id' => 17,'nome' => 'Lima'],
      		['id' => 18,'nome' => 'Golosità  dal 1885'],
      		['id' => 19,'nome' => 'Farmo'],
      		['id' => 20,'nome' => 'Colombo'],
      		['id' => 21,'nome' => 'Primeal'],
      		['id' => 22,'nome' => 'Pasta D\'Alessio'],
      		['id' => 23,'nome' => 'Rapunzel'],
      		['id' => 24,'nome' => 'Agluten'],
      		['id' => 25,'nome' => 'Nutrifree'],
      		['id' => 26,'nome' => 'Piaceri Mediterranei'],
      		['id' => 27,'nome' => 'Probios'],
      		['id' => 28,'nome' => 'Lo Conte'],
      		['id' => 29,'nome' => 'Vital Nature'],
      		['id' => 30,'nome' => 'Venchi'],
      		['id' => 31,'nome' => 'Revolution'],
      		['id' => 32,'nome' => 'La fabbrica del panforte'],
      		['id' => 33,'nome' => 'Motta'],
      		['id' => 34,'nome' => 'Bauli'],
      		['id' => 35,'nome' => 'Celiachiamo LAB'],



      	]);
    }
}
