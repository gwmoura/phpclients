<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

use PDO;

class UnitTestCase extends TestCase
{
    private static $sharedConnection;
    protected $connection;

    public function setUp()
    {
        if (self::$sharedConnection === null) {
            $user = 'root';
            $pass = 'root';
            self::$sharedConnection = new PDO('mysql:host=db;dbname=clients', $user, $pass);
        }
        $this->connection = self::$sharedConnection;
        $this->connection->beginTransaction();
    }

    public function teardown()
    {
        $this->connection->rollback();
    }
}
