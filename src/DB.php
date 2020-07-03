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

    /**
     * create
     * 
     *  Insert the products into the database when given an array as an argument.
     *
     * @param  mixed $products
     * @return void
     */
    public function create(array $products): void
    {
        foreach ($products as $product) {
            if (empty($product)) {
                return;
            }
            $this->db->createRow("products", $product)->save();
        }
    }
}
