<?php

use yii\db\Schema;
use yii\db\Migration;

/**
 * Handles the creation of table `status`.
 */
class m190221_014952_create_status_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
$talbeOptions=null;
if($this->db->driverName === 'mysql'){
    $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
}



        $this->createTable('status', [
            'id' => Schema::TYPE_PK,
            'message' => Schema::TYPE_TEXT,
            'permissions' => Schema::TYPE_SMALLINT,
            'created_at' => Schema::TYPE_INTEGER,
            'updated_at' => Schema::TYPE_INTEGER,
        ], $tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('status');
    }
}
