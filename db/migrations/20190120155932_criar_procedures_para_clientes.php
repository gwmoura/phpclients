<?php


use Phinx\Migration\AbstractMigration;

class CriarProceduresParaClientes extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     *
     * The following commands can be used in this method and Phinx will
     * automatically reverse them when rolling back:
     *
     *    createTable
     *    renameTable
     *    addColumn
     *    addCustomColumn
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Any other destructive changes will result in an error when trying to
     * rollback the migration.
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change()
    {
        $this->execute("DROP PROCEDURE IF EXISTS clients.cli_clientes_ins;");
        $count = $this->execute("
        CREATE PROCEDURE clients.cli_clientes_ins(IN var_nome VARCHAR(200), OUT var_status BOOLEAN, OUT var_msg VARCHAR(100))
        BEGIN
            SET var_status = true;
            SET var_msg = '';

            IF var_nome IS NULL THEN
                SET var_status = false;
                SET var_msg = 'Nome é obrigatório';
            ELSE
                INSERT INTO cli_clientes(cli_var_nome) VALUES (var_nome);
                SET var_msg = 'Cliente cadastrado com sucesso!';
            END IF;
        END
        ");
    }
}
