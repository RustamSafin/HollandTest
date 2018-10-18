<?php

use yii\db\Migration;

/**
 * Handles the dropping of table `created_and_updated_colums_from_user`.
 */
class m181018_085418_drop_created_and_updated_colums_from_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropColumn('user','created_at');
        $this->dropColumn('user','updated_at');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->addColumn('user','created_at', $this->integer());
        $this->addColumn('user','updated_at', $this->integer());
    }
}
