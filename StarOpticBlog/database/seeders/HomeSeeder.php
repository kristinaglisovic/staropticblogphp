<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HomeSeeder extends Seeder
{
    private $slika = ['1.jpg', '2.jpg', '3.jpg'];
    private $alt = ['sunglasses', 'dioptricglasses', 'modernglasses'];
    private $text = [
        'Da li samo pratimo modne trendove ili znamo zašto su baš u ovom trenutku aktuelni određeni oblici i boje?',
        'Ako imamo problem sa vidom, bez njih ne možemo zamisliti dan',
        'Više nego ikada pre naše oči su izložene nepovoljnim uticajima kako iz prirode, tako i od tehnologije koja je svuda oko nas.'
    ];
    private $naslov = ['SUNČANE NAOČARE', 'DIOPTRIJSKE NAOČARE', 'ZAŠTITA'];
    private $podnaslov = [
        'Da li su sunčane naočare samo modni detalj?',
        'Naočare sa najviše benefita',
        'Veliki broj različitih zaštitinih slojeva'];

    public function run()
    {
        for($i=0;$i<count($this->slika);$i++){
            \DB::table("homes")->insert([
                'slika'=>$this->slika[$i],
                'alt'=>$this->alt[$i],
                'text'=>$this->text[$i],
                'naslov'=>$this->naslov[$i],
                'podnaslov'=>$this->podnaslov[$i]
            ]);

        }

    }
}
