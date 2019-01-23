<?php

use yii\db\Migration;

/**
 * Handles the creation of table `products`.
 */
class m190117_121440_create_products_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('products', [
            'id' => $this->primaryKey(),
            'category' => $this->string(),
            'image' => $this->string(),
            'title_am' => $this->string(),
            'title_ru' => $this->string(),
            'title_en' => $this->string(),
            'description_am' => $this->text(),
            'description_ru' => $this->text(),
            'description_en' => $this->text(),
            'price' => $this->string(),
            'calorie' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('products');
    }
}
