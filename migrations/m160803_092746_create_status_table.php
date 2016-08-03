<?php

use yii\db\Migration;

/**
 * Handles the creation for table `status`.
 */
class m160803_092746_create_status_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('status', [
            'id' => $this->primaryKey(),
            'message' => $this->text()->notNull(),
            'permission' => $this->integer()->defaultValue(20),
            'created_at' => $this->string(),
            'updated_at' => $this->string()
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('status');
    }
}
