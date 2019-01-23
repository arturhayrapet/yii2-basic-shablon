<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Brands */
/* @var $form yii\widgets\ActiveForm */
$img_src  = yii::getAlias("@web") . "/web/uploads/brand/" . $model->image ;
?>

<div class="brands-form">

    <?php $form = ActiveForm::begin(); ?>

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
