<?php

namespace Cliente\Controller;
use Cliente\Model\Repository\ClienteDataMapper;
use Cliente\Model\Repository\MySqlConnect;
use Cliente\Model\Repository\OracleConnect;



class ClientesProcessa extends RenderFile {
    public function requisicao() :void {
        $cliente = new ClienteDataMapper(new MySqlConnect());
        $cli = $cliente->getAll();

        $this->render('cliente', "Lista de Clientes", $cli);
    }
}