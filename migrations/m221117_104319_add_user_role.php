<?php

use yii\db\Migration;

/**
 * Class m221117_104319_add_user_role
 */
class m221117_104319_add_user_role extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->execute('ALTER TABLE  `user` ADD `role` INT(11) NOT NULL DEFAULT "10" AFTER `updated_at`');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->execute('ALTER TABLE  `user` DROP COLUMN `role`');
        echo "m221117_104319_add_user_role reverted.\n";

        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m221117_104319_add_user_role cannot be reverted.\n";

        return false;
    }
    */
}
