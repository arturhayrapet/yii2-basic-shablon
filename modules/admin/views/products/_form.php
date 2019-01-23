<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\web\UploadedFile;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Products */
/* @var $form yii\widgets\ActiveForm */

$categories = Yii::$app->params['prod_category'];
$img_src  = yii::getAlias("@web") . "/web/uploads/product/" . $model->image ;
//debug($model);die();
?>

<div class="products-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'category')->dropDownList($categories) ?>
    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'image')->fileInput(['value' => '555','id'=> 'imgInp']) ?>
        </div>
        <div class="form-image col-md-6 pull-right">
            <img id="blah" src="<?=$img_src ?>" alt="" style="height: 100px;">
        </div>
    </div>

    <?= $form->field($model, 'title_am')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title_en')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description_am')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'description_ru')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'description_en')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'price')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'calorie')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'oldLink')->hiddenInput()->label(false) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<?php
  $this->registerJs('
  function readURL(input) {

  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function(e) {
      $(\'#blah\').attr(\'src\', e.target.result);
    }
    reader.readAsDataURL(input.files[0]);
  }
   else {
      $("#blah").attr("src", " ' .$img_src. ' " );
    }
}

$("body").on("change", "#imgInp",function() {
  readURL(this);
});

  ')
?>
