<?php
require 'Database.php';

class OracleDB implements Database
{

    public function all()
    {
        # code...
    }

    public function create()
    {
        echo 'Adicionando com Oracle...';
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

$db = new OracleDB();
$db->create();
