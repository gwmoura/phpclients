<?php

namespace App\Repositories;

use PDO;

abstract class Repository
{
    protected $pdo;
    protected $tableName;
    protected $primaryKey;

    public function __construct($pdo = null)
    {
        $user = 'root';
        $pass = 'root';
        if(is_null($pdo)){
            $this->pdo = new PDO('mysql:host=db;dbname=clients', $user, $pass);
        }else{
            $this->pdo = $pdo;
        }
    }

    public function execute($sql, $args = [])
    {
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($args);
        return $stmt->fetchAll();
    }

    protected function getFirst($results)
    {
        $first = 0;
        return $results[$first];
    }

    public function count()
    {
        $query = "SELECT COUNT(*) AS total FROM $this->tableName";
        $results = $this->execute($query);
        $result = $this->getFirst($results);
        return $result['total'];
    }

    public function first($inverse = false)
    {
        $query = "SELECT * FROM $this->tableName ORDER BY $this->primaryKey ASC LIMIT 0, 1";

        if($inverse){
            $query = "SELECT * FROM $this->tableName ORDER BY $this->primaryKey DESC LIMIT 0, 1";
        }

        $results = $this->execute($query);
        return $this->getFirst($results);
    }

    public function last()
    {
        $inverse = true;
        return $this->first($inverse);
    }
}
