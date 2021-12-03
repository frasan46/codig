<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class RolesSeeder extends Seeder
{
    public function run()
    {
     $this->sb->table("roles")->where("id > ", 0 )->delete()
  
     $rolesBuilder 
    }
}
