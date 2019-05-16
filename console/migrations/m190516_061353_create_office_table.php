<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%office}}`.
 */
class m190516_061353_create_office_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%office}}', [
            'id_office' => $this->primaryKey(),
            'id_user' => $this->integer(),
            'number' => $this->integer()->notNull(),
            'number_doc' => $this->integer(),
            'count_places' => $this->integer()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%office}}');
    }
}
