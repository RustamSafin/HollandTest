<?php

use yii\db\Migration;

/**
 * Class m181018_184829_add_pk_to_order
 */
class m181018_184829_add_pk_to_order extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('order','user_id',$this->integer()->notNull());
        $this->addForeignKey(
            'fk-order-user_id',
            'order',
            'user_id',
            'user',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('order','user_id');
        $this->dropForeignKey('fk-order-user_id','order');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181018_184829_add_pk_to_order cannot be reverted.\n";

        return false;
    }
    */
}
