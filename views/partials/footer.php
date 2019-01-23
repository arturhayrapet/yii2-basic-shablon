<?php

use yii\helpers\Html;

$path = Yii::getAlias('@web');
?>
    <footer>
        <div class="container">
            <div class="row">
                <div class="my_footer">
                    <div class="provider col-xs-8 ">
                        powered by "demodynamics" 2019
                    </div>
                    <div class="language col-xs-4 row">
                        <div class="currant_lang inline">
                            <img class="inline" src="<?= Yii::getAlias('@web') ?> /images/flag/<?= Yii::$app->language ?>-flag.png" alt="">
                        </div>
                        <i class="fa fa-chevron-down inline" aria-hidden="true"></i>
                        <div class="choose_language" style="">
                            <ul class="language_ul" style="list-style: none;">
                                <?php if (Yii::$app->language != 'am'): ?>
                                    <li id="arm">
                                        <?= Html::a(' <img class="arm" src="' . $path . '/images/flag/am-flag.png" alt="">', array_merge(
                                            \Yii::$app->request->get(),
                                            [\Yii::$app->controller->route, 'language' => 'am']
                                        )); ?>

                                    </li>
                                <?php endif; ?>
                                <?php if (Yii::$app->language != 'ru'): ?>
                                    <li id="rus">
                                        <?= Html::a(' <img class="arm" src="' . $path . ' /images/flag/ru-flag.png" alt="">', array_merge(
                                            \Yii::$app->request->get(),
                                            [\Yii::$app->controller->route, 'language' => 'ru']
                                        )); ?>

                                    </li>
                                <?php endif; ?>
                                <?php if (Yii::$app->language != 'en'): ?>
                                    <li id="en">
                                        <?= Html::a(' <img class="arm" src="' . $path . ' /images/flag/en-flag.svg" alt="">', array_merge(
                                            \Yii::$app->request->get(),
                                            [\Yii::$app->controller->route, 'language' => 'en']
                                        )); ?>

                                    </li>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
