<?php

use yii\db\Migration;

/**
 * Class m181018_170436_add_columns_to_order
 */
class m181018_170436_add_columns_to_order extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('order','description', $this->string());
        $this->addColumn('order','price', $this->integer());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('order','description');
        $this->dropColumn('order','price');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181018_170436_add_columns_to_order cannot be reverted.\n";

        return false;
    }
    */
}
