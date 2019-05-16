<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%stelag}}`.
 */
class m190516_061810_create_stelag_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%stelag}}', [
            'id_stelag' => $this->primaryKey(),
            'id_doc' => $this->integer(),
            'number_stelag' => $this->integer()->unique()->notNull(),
            'number_polka' => $this->integer()->notNull(),
            'lvl' => $this->string()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%stelag}}');
    }
}
