<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "partners".
 *
 * @property int $id
 * @property string $image
 * @property string $title_am
 * @property string $title_ru
 * @property string $title_en
 */
class Partners extends \yii\db\ActiveRecord
{
    public  $oldLink;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'partners';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            ['title_am', 'required'],
            [['title_am', 'title_ru', 'title_en'], 'string', 'max' => 255],
            ['image' , 'required' ,
                'when' => function($model){ return $model->oldLink == null;},
                'whenClient' => "function (attribute, value) { return $('#partners-oldlink').val() == ''; }"],
            [['oldLink'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'image' => Yii::t('app', 'Image'),
            'title_am' => Yii::t('app', 'Title Am'),
            'title_ru' => Yii::t('app', 'Title Ru'),
            'title_en' => Yii::t('app', 'Title En'),
        ];
    }
}
