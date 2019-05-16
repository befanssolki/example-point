<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%profile}}`.
 */
class m190516_072331_create_profile_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%profile}}', [
            'id_profile' => $this->primaryKey(),
            'id_user' => $this->integer(),
            'familiya' => $this->string(25)->notNull(),
            'name' => $this->string(25)->notNull(),
            'otchestvo' => $this->string(25)->notNull(),
            'telephone' => $this->string(15)->notNull(),
            'date' => $this->timestamp()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%profile}}');
    }
}
