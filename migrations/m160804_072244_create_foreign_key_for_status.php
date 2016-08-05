<?php

use yii\db\Migration;

class m160804_072244_create_foreign_key_for_status extends Migration
{
    public function up()
    {
        //为status表增加user_id项
        $this->addColumn('status', 'author_id', $this->integer());
        //status表关联外键
        $this->addForeignKey(
            'fk-status-author_id',
            'status',
            'author_id',
            'user',
            'id',
            'CASCADE'
        );
    }

    public function down()
    {
        $this->dropColumn('status', 'author_id');
        $this->dropForeignKey(
            'fk-status-author_id',
            'author_id'
        );
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
