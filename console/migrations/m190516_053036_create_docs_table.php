<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%docs}}`.
 */
class m190516_053036_create_docs_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%docs}}', [
            'id_doc' => $this->primaryKey(),
            'number' => $this->integer()->unique()->notNull(),
            'discription' => $this->string()->notNull(),
            'lvl' => $this->string()->notNull(),
            'status' => $this->string(25)->notNull(),
            'date' => $this->timestamp(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%docs}}');
    }
}
