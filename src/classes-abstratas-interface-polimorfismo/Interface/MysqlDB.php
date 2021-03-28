<?php
require 'Database.php';

class MysqlDB implements Database
{

    public function all()
    {
        # code...
    }

    public function create()
    {
        echo 'Adicionando com MySQL...';
    }
    
    public function update()
    {
        # code...
    }

    public function destroy()
    {
        # code...
    }
}

$db = new MysqlDB();
$db->create();
