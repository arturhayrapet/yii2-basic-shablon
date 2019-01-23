<?php

use yii\db\Migration;

/**
 * Handles the creation of table `brands`.
 */
class m190118_104156_create_brands_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('brands', [
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
        $this->dropTable('brands');
    }
}
