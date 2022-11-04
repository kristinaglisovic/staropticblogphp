<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminMenuSeeder extends Seeder
{
    private $name = ['Kontrolna tabla','Postovi i komentari','Korisnici','Poruke','Aktivnosti','Resetovane lozinke','Kreiranje admina','Kreiranje postova', 'Kreiranje kategorija','Početna','Odjavi se',];
    private $route = ['admin.dash','admin.comments','admin.users.registered','admin.contact','admin.activity','admin.users.forgotten','admin.create','post.create','categories.create','home','logout'];
    private $icon = ['fa-solid fa-gauge','fa-brands fa-blogger-b','fa-solid fa-users','fa-solid fa-inbox','fa-solid fa-heart-pulse','fa-solid fa-key','fa-solid fa-user-plus','fa-solid fa-circle-plus','fa-solid fa-square-plus','fa-solid fa-home','fa-solid fa-right-from-bracket'];

    public function run()
    {
        for($i=0;$i<count($this->name);$i++){
            \DB::table("admin_menus")->insert([
                'name'=>$this->name[$i],
                'route'=>$this->route[$i],
                'icon'=>$this->icon[$i],
            ]);

        }


    }
}
