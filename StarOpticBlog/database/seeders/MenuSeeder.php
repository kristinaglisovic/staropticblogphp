<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    private $name = ['Početna', 'Blog', 'Kontakt','Autor'];
    private $route = ['home', 'posts','contact','author'];

    public function run()
    {
        for($i=0;$i<count($this->name);$i++){
            \DB::table("menus")->insert([
                'name'=>$this->name[$i],
                'route'=>$this->route[$i]
            ]);

        }

    }
}
