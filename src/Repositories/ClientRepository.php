<?php

namespace App\Repositories;

class ClientRepository extends Repository
{
    protected $tableName = 'cli_clientes';
    protected $primaryKey = 'cli_int_codigo';

    public function criar($name)
    {
        $query = "CALL cli_clientes_ins(?, @status, @msg)";
        $this->execute($query, [$name]);
        return $this->last();
    }

    public function listar()
    {
        $query = "SELECT * FROM cli_clientes";
        return $this->execute($query, []);
    }
}
