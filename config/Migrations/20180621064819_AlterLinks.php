<?php
use Migrations\AbstractMigration;

class AlterLinks extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('links')
            ->changeColumn('url', 'string', [
                'default' => null,
                'limit' => 150,
                'null' => true,
            ])
            ->changeColumn('options', 'text', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ]);
        $table->update();
    }
}
