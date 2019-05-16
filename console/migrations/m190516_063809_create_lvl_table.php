<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%lvl}}`.
 */
class m190516_063809_create_lvl_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%lvl}}', [
            'id' => $this->primaryKey(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%lvl}}');
    }
}
