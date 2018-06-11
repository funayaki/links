<?php
use Migrations\AbstractMigration;

class Initial extends AbstractMigration
{
    public function up()
    {

        $this->table('links')
            ->addColumn('model', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => true,
            ])
            ->addColumn('foreign_key', 'biginteger', [
                'default' => null,
                'limit' => 20,
                'null' => true,
            ])
            ->addColumn('title', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => false,
            ])
            ->addColumn('url', 'string', [
                'default' => null,
                'limit' => 150,
                'null' => false,
            ])
            ->addColumn('options', 'text', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('position', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('created', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('modified', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addIndex(
                [
                    'model',
                ]
            )
            ->addIndex(
                [
                    'foreign_key',
                ]
            )
            ->create();
    }

    public function down()
    {
        $this->dropTable('links');
    }
}
