<?php

namespace Jinas\Aggregator;

use PDO;
use LessQL\Database;


class DB 
{
    protected $db;

    public function __construct()
    {
        $this->db = new Database(new PDO('sqlite:db.sqlite3'));
    }

    public function create(array $products) : void
    {
        foreach($products as $product)
        {
            $this->db->createRow("products", $product)->save();
        }
    }
}