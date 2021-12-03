<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Festivals extends Migration
{
    public function up()
    {
        $this->db->disableForeignKeyChecks();
       $this->forge->addField([
           "id"=>[
               'type' => "INT",
               'constraint' => 5,
               'unsigned' => true,
               'auto_increment' => true
 
           ],
          
           "price"=>[
            'type' => "DECIMAL",
        ], 
        "email"=>[
            'type' => "VARCHAR",
            'constraint' => "255",
            

        ],
           "name"=>[
               'type' => "VARCHAR",
               'constraint' => "255",
           ],
           "date"=>[
               'type' => "datetime",
               
           ],

           "address"=>[
            'type' => "VARCHAR",
            'constraint' => "255",
        ],
        "image_url"=>[
         'type' => "VARCHAR",
         'constraint' => "255",
     ],


    
           'created_at' => [
            'type' => 'DATETIME',
            'null' => false
        ],
        'updated_at' => [
            'type' => 'DATETIME',
            'null' => true
        ],
        'deleted_at' => [
            'type' => 'DATETIME',
            'null' => true
        ],
        "Categories_id"=>[
            'type' => "INT",
            'constraint' => 5,
            'unsigned' => true,
            "null" => true,
            
        ],
       ]);
       $this->forge->addPrimaryKey("id");
       $this->forge->addForeignKey("Categories_id","Categories","id","CASCADE","SET NULL");
      
       $this->forge->createTable("Festivals");
       $this->db->disableForeignKeyChecks();
  
   }
 
   public function down()
   {
       $this->forge->dropTable("Festivals");
      
   }
}
