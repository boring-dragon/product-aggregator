<?php

namespace Jinas\Aggregator\Database;

use PDO;


class DB
{
    protected $db;

    public function __construct()
    {
        $this->db = new \LessQL\Database(new PDO('sqlite:db.sqlite3'));
    }
    
}
