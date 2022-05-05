<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Handles the creation of table `{{%supplier}}`.
 */
class m220505_144225_create_supplier_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%supplier}}', [
            'id' => Schema::TYPE_UPK,
            'name' => $this->string(50)->notNull()->defaultValue(''),
            'code' => $this->char(3)->defaultValue(NULL)->unique(),
            't_status' => "enum('ok','hold') CHARACTER SET ascii NOT NULL DEFAULT 'ok'",
        ], 'ENGINE=InnoDB DEFAULT CHARSET=utf8mb4');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%supplier}}');
    }
}
