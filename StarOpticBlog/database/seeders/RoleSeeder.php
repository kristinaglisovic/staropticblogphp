<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    private $name = ['Admin','User'];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0;$i<count($this->name);$i++){
            \DB::table("roles")->insert([
                'name'=>$this->name[$i],
            ]);

        }
    }
}
