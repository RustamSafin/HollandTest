<?php

use yii\db\Migration;

/**
 * Class m181018_180718_add_column_to_notification
 */
class m181018_180718_add_column_to_notification extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('notification','active',$this->boolean()->defaultValue(true));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('notification','active');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181018_180718_add_column_to_notification cannot be reverted.\n";

        return false;
    }
    */
}
