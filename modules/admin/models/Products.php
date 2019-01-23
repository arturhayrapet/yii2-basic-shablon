<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "products".
 *
 * @property int $id
 * @property string $category
 * @property string $image
 * @property string $title_am
 * @property string $title_ru
 * @property string $title_en
 * @property string $description_am
 * @property string $description_ru
 * @property string $description_en
 * @property string $price
 * @property string $calorie
 */
class Products extends \yii\db\ActiveRecord
{
    public  $oldLink;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'products';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['category','title_am', 'description_am', 'price' , 'calorie'], 'required'],
            [['description_am', 'description_ru', 'description_en'], 'string'],
            [['category', 'title_am', 'title_ru', 'title_en', 'price', 'calorie'], 'string', 'max' => 255],
            ['image' , 'required' ,
                'when' => function($model){ return $model->oldLink == null;},
                'whenClient' => "function (attribute, value) { return $('#products-oldLink').val() == ''; }"],
            [['oldLink'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category' => 'Category',
            'image' => 'Image',
            'title_am' => 'Title Am',
            'title_ru' => 'Title Ru',
            'title_en' => 'Title En',
            'description_am' => 'Description Am',
            'description_ru' => 'Description Ru',
            'description_en' => 'Description En',
            'price' => 'Price',
            'calorie' => 'Calorie',
        ];
    }
}
