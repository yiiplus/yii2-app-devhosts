<?php

use yii\db\Migration;

/**
 * Class m181122_065003_yp_app_devhosts
 */
class m181122_065003_yp_app_devhosts extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('yp_app_devhosts', [
            'id' => $this->primaryKey(),
            'name' => $this->string(50)->notNull(),
            'host' => $this->string(100)->notNull(),
            'type' => $this->tinyInteger(1)->defaultValue(0),
            'sort' => $this->integer()->defaultValue(0),
            'created_at' => $this->integer(11),
            'updated_at' => $this->integer(11),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m181122_065003_yp_app_devhosts cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181122_065003_yp_app_devhosts cannot be reverted.\n";

        return false;
    }
    */
}
