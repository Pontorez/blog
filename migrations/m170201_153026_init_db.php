<?php

use yii\db\Migration;

class m170201_153026_init_db extends Migration
{
    public function up()
    {
        $tableOptions = '';
        if (Yii::$app->db->getDriverName() == 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }
        $this->createTable('{{%blog}}', [
            'id'               => $this->primaryKey(),
            'author'           => $this->string(255)->notNull(),
            'post_subject'     => $this->string(255)->notNull(),
            'post_preview'     => $this->string(4000)->notNull(),
            'post_body'        => $this->text()->notNull(),
            'post_date'        => $this->dateTime()->notNull(),
        ], $tableOptions);

        $this->createIndex('idx_author', '{{%blog}}', 'author');
    }

    public function down()
    {
        $this->dropTable('{{%blog}}');
    }

}
