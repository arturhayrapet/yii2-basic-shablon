<?php

use yii\db\Migration;

/**
 * Handles the creation of table `partners`.
 */
class m190118_104209_create_partners_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('partners', [
            'id' => $this->primaryKey(),
            'image' => $this->string(),
            'title_am' => $this->string(),
            'title_ru' => $this->string(),
            'title_en' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('partners');
    }
}
