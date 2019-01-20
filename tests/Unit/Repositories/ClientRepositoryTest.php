<?php

namespace Tests\Unit\Repositories;

use Tests\Unit\UnitTestCase;

use App\Repositories\ClientRepository;

class ClientRepositoryTest extends UnitTestCase
{
    public function testCriar()
    {
        $Cliente = new ClientRepository($this->connection);
        $totalClientes = $Cliente->count();
        $clienteNome1 = 'Cliente 1';
        $clienteNome2 = 'Cliente 2';
        $cliente1 = $Cliente->criar($clienteNome1);
        $this->assertEquals($clienteNome1, $cliente1['cli_var_nome']);
        $cliente2 = $Cliente->criar($clienteNome2);
        $this->assertEquals($clienteNome2, $cliente2['cli_var_nome']);
        $newTotalclientes = $Cliente->count();
        $this->assertEquals($totalClientes+2, $newTotalclientes);
    }

    public function testListar()
    {
        $Cliente = new ClientRepository($this->connection);
        $clientes = $Cliente->listar();
        $total = $Cliente->count();
        $this->assertEquals($total, count($clientes));
    }

}
