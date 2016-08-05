<?php

use yii\db\Migration;

class m160804_074043_add_role_to_user extends Migration
{
    public function up()
    {
        //为user表添加role(角色)项目
        $this->addColumn('user', 'role', $this->integer()->defaultValue(30));

    }

    public function down()
    {
        $this->dropColumn('user', 'role');
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
