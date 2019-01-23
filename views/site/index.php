<?php

/* @var $this yii\web\View */

use yii\widgets\ActiveForm;
use yii\helpers\Html;

$this->title = 'Paradis';

?>
<!--================================================================================-->
<section id="banner" style="background-image: url('images/olive_banner.png');position:relative;;">
    <div class="container">
        <div class="banner-text">
            <div class="col-xs-10 col-md-6">
                <div class="banner_description">
                    <div class="banner_title"><b>Realize</b><br>
                        the professionalism
                    </div>
                    <div class="banner_subscription">If you use this site regularly and would like to help keep the site
                        on
                        the Internet,
                        please consider donating a small sum to help pay for the hosting and bandwidth bill.
                    </div>
                    <div class="banner_button"><a>Why Cooperate With Us</a></div>
                </div>
            </div>
        </div>
    </div>
    <div class="scroll_down"><a href="#about"><img class="scroll" src="images/scroll.svg" alt=""></a></div>

</section>
<!--==============================================================-->

<section id="about">
    <div class="container p_0">
        <div class="row">
            <div class="col-md-6 col-xs-12">
                <div class="about_title"><?= Yii::t('common', 'Մեր մասին') ?></div>
                <div class="about_description">If you use this site regularly and would like to help keep the site on
                    the Internet,
                    please consider donating a small sum to help pay for the hosting and bandwidth bill.
                </div>
                <div class="about_text">Commercial relations are of great importance in ensuring economic competition in
                    the country. In these relations import and export processes are important.
                    The newly-established "Paradis" company has been established to organize high-level local brands
                    exporting products to Armenia and abroad. Our company is the official representative of the famous
                    Russian company "Nefis Biogradukt" in Armenia. The main objective of "Paradis" company is to
                    successfully promote the recognition of Armenian products in the international market and to
                    introduce high quality and high quality products for the public. In addition to the main directions,
                    Paradis also provides advisory assistance in case of any issues related to the export and import of
                    goods, from market research to shipping.
                    Experienced specialists of "Paradis" company will help you to make the right choice.
                </div>
            </div>
            <div class="col-md-6 col-xs-12 media_08">
                <div class="about_logo">
                    <img src="images/logoner.png" alt="logo">
                </div>
            </div>
        </div>
    </div>
</section>

<!--============================================================================-->

<section id="products">
    <div class="container p_0">
        <div class="row">
            <div class="products_title">Products</div>
            <div style="text-align: center; width: 100%;">
                <div class="products_description ">
                    If you use this site regularly and would like to help keep the site on the Internet,
                    please consider donating a small sum to help pay for the hosting and bandwidth bill.
                </div>
            </div>
            <div class="products_types col-md-6 col-xs-12">
                <div class=" hidden-xs ">
                    <div class="col-xs-3 prod_xs">
                        <div id="ketchup" class="prod_button  button_active">Ketchup</div>
                    </div>
                    <div class="col-xs-3 prod_xs">
                        <div id="mayones" class="prod_button ">Mayonnaises</div>
                    </div>
                    <div class="col-xs-3 prod_xs">
                        <div id="oil" class="prod_button">Oils</div>
                    </div>
                    <div class="col-xs-3 prod_xs">
                        <div id="sauces" class="prod_button">Sauces</div>
                    </div>
                </div>

                <div id="prod_types" class="visible-xs ">
                    <div class="owl-carousel owl-theme owl-loaded">
                        <div class="owl-stage-outer">
                            <div class="owl-stage">
                                <div class="owl-item">
                                    <div id="ketchup" class="prod_button  button_active">Ketchup</div>
                                </div>
                                <div class="owl-item">
                                    <div id="mayones" class="prod_button ">Mayonnaises</div>
                                </div>
                                <div class="owl-item">
                                    <div id="oil" class="prod_button">Oils</div>
                                </div>
                                <div class="owl-item">
                                    <div id="sauces" class="prod_button">Sauces</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 hidden-xs hidden-sm">
                <div class="row">
                    <div class="slider_prev customPrevBtn col-md-1 col-md-offset-9">
                        <i class="fa fa-chevron-left" aria-hidden="true"></i>
                    </div>
                    <div class="slider_next customNextBtn col-md-1 col-md-offset-1">
                        <i class="fa fa-chevron-right" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="all_sliders">
        <div class="products_slider_ketchup products_slider">
            <div class="owl-carousel owl-theme owl-loaded">
                <div class="owl-stage-outer">
                    <div class="owl-stage">
                        <div class="owl-item">
                            <img src="images/ketchup.png" alt="">
                            <div class="slider_product">
                                <div class="slider_product_title">Mr. Ricco (Organic)</div>
                                <div class="slider_product_description">
                                    If you use this site regularly and would like to help
                                    keep the site on the Internet, please consider donating.
                                </div>
                                <div class="slider_product_price">Price 500$</div>
                                <div class="slider_product_kkal">200 kkal</div>
                            </div>
                        </div>
                        <div class="owl-item">
                            <img src="images/mayones.png" alt="">
                            <div class="slider_product">
                                <div class="slider_product_title">Mr. Ricco (Organic)</div>
                                <div class="slider_product_description">
                                    If you use this site regularly and would like to help
                                    keep the site on the Internet, please consider donating.
                                </div>
                                <div class="slider_product_price">Price 500$</div>
                                <div class="slider_product_kkal">200 kkal</div>
                            </div>
                        </div>
                        <div class="owl-item">
                            <img src="images/Profood%20(1).png" alt="">
                            <div class="slider_product">
                                <div class="slider_product_title">Mr. Ricco (Organic)</div>
                                <div class="slider_product_description">
                                    If you use this site regularly and would like to help
                                    keep the site on the Internet, please consider donating.
                                </div>
                                <div class="slider_product_price">Price 500$</div>
                                <div class="slider_product_kkal">200 kkal</div>
                            </div>
                        </div>
                        <div class="owl-item">
                            <img src="images/olive_banner.png" alt="">
                            <div class="slider_product">
                                <div class="slider_product_title">Mr. Ricco (Organic)</div>
                                <div class="slider_product_description">
                                    If you use this site regularly and would like to help
                                    keep the site on the Internet, please consider donating.
                                </div>
                                <div class="slider_product_price">Price 500$</div>
                                <div class="slider_product_kkal">200 kkal</div>
                            </div>
                        </div>
                        <div class="owl-item">
                            <img src="images/ketchup.png" alt="">
                            <div class="slider_product">
                                <div class="slider_product_title">Mr. Ricco (Organic)</div>
                                <div class="slider_product_description">
                                    If you use this site regularly and would like to help
                                    keep the site on the Internet, please consider donating.
                                </div>
                                <div class="slider_product_price">Price 500$</div>
                                <div class="slider_product_kkal">200 kkal</div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="products_slider_mayones products_slider" style="display: none">
            <div class="owl-carousel owl-theme owl-loaded">
                <div class="owl-stage-outer">
                    <div class="owl-stage">
                        <div class="owl-item">
                            <img src="images/ketchup.png" alt="">
                            <div class="slider_product">
                                <div class="slider_product_title">Mr. Ricco (Organic)</div>
                                <div class="slider_product_description">
                                    If you use this site regularly and would like to help
                                    keep the site on the Internet, please consider donating.
                                </div>
                                <div class="slider_product_price">Price 500$</div>
                                <div class="slider_product_kkal">200 kkal</div>
                            </div>
                        </div>
                        <div class="owl-item">
                            <img src="images/mayones.png" alt="">
                            <div class="slider_product">
                                <div class="slider_product_title">Mr. Ricco (Organic)</div>
                                <div class="slider_product_description">
                                    If you use this site regularly and would like to help
                                    keep the site on the Internet, please consider donating.
                                </div>
                                <div class="slider_product_price">Price 500$</div>
                                <div class="slider_product_kkal">200 kkal</div>
                            </div>
                        </div>
                        <div class="owl-item">
                            <img src="images/Profood%20(1).png" alt="">
                            <div class="slider_product">
                                <div class="slider_product_title">Mr. Ricco (Organic)</div>
                                <div class="slider_product_description">
                                    If you use this site regularly and would like to help
                                    keep the site on the Internet, please consider donating.
                                </div>
                                <div class="slider_product_price">Price 500$</div>
                                <div class="slider_product_kkal">200 kkal</div>
                            </div>
                        </div>
                        <div class="owl-item">
                            <img src="images/ketchup.png" alt="">
                            <div class="slider_product">
                                <div class="slider_product_title">Mr. Ricco (Organic)</div>
                                <div class="slider_product_description">
                                    If you use this site regularly and would like to help
                                    keep the site on the Internet, please consider donating.
                                </div>
                                <div class="slider_product_price">Price 500$</div>
                                <div class="slider_product_kkal">200 kkal</div>
                            </div>
                        </div>
                        <div class="owl-item">
                            <img src="images/ketchup.png" alt="">
                            <div class="slider_product">
                                <div class="slider_product_title">Mr. Ricco (Organic)</div>
                                <div class="slider_product_description">
                                    If you use this site regularly and would like to help
                                    keep the site on the Internet, please consider donating.
                                </div>
                                <div class="slider_product_price">Price 500$</div>
                                <div class="slider_product_kkal">200 kkal</div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="products_slider_oil products_slider" style="display: none">
            <div class="owl-carousel owl-theme owl-loaded">
                <div class="owl-stage-outer">
                    <div class="owl-stage">
                        <div class="owl-item">
                            <img src="images/ketchup.png" alt="">
                            <div class="slider_product">
                                <div class="slider_product_title">Mr. Ricco (Organic)</div>
                                <div class="slider_product_description">
                                    If you use this site regularly and would like to help
                                    keep the site on the Internet, please consider donating.
                                </div>
                                <div class="slider_product_price">Price 500$</div>
                                <div class="slider_product_kkal">200 kkal</div>
                            </div>
                        </div>
                        <div class="owl-item">
                            <img src="images/mayones.png" alt="">
                            <div class="slider_product">
                                <div class="slider_product_title">Mr. Ricco (Organic)</div>
                                <div class="slider_product_description">
                                    If you use this site regularly and would like to help
                                    keep the site on the Internet, please consider donating.
                                </div>
                                <div class="slider_product_price">Price 500$</div>
                                <div class="slider_product_kkal">200 kkal</div>
                            </div>
                        </div>
                        <div class="owl-item">
                            <img src="images/Profood%20(1).png" alt="">
                            <div class="slider_product">
                                <div class="slider_product_title">Mr. Ricco (Organic)</div>
                                <div class="slider_product_description">
                                    If you use this site regularly and would like to help
                                    keep the site on the Internet, please consider donating.
                                </div>
                                <div class="slider_product_price">Price 500$</div>
                                <div class="slider_product_kkal">200 kkal</div>
                            </div>
                        </div>
                        <div class="owl-item">
                            <img src="images/olive_banner.png" alt="">
                            <div class="slider_product">
                                <div class="slider_product_title">Mr. Ricco (Organic)</div>
                                <div class="slider_product_description">
                                    If you use this site regularly and would like to help
                                    keep the site on the Internet, please consider donating.
                                </div>
                                <div class="slider_product_price">Price 500$</div>
                                <div class="slider_product_kkal">200 kkal</div>
                            </div>
                        </div>
                        <div class="owl-item">
                            <img src="images/ketchup.png" alt="">
                            <div class="slider_product">
                                <div class="slider_product_title">Mr. Ricco (Organic)</div>
                                <div class="slider_product_description">
                                    If you use this site regularly and would like to help
                                    keep the site on the Internet, please consider donating.
                                </div>
                                <div class="slider_product_price">Price 500$</div>
                                <div class="slider_product_kkal">200 kkal</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="products_slider_sauces products_slider" style="display: none">
            <div class="owl-carousel owl-theme owl-loaded">
                <div class="owl-stage-outer">
                    <div class="owl-stage">
                        <div class="owl-item">
                            <img src="images/ketchup.png" alt="">
                            <div class="slider_product">
                                <div class="slider_product_title">Mr. Ricco (Organic)</div>
                                <div class="slider_product_description">
                                    If you use this site regularly and would like to help
                                    keep the site on the Internet, please consider donating.
                                </div>
                                <div class="slider_product_price">Price 500$</div>
                                <div class="slider_product_kkal">200 kkal</div>
                            </div>
                        </div>
                        <div class="owl-item">
                            <img src="images/mayones.png" alt="">
                            <div class="slider_product">
                                <div class="slider_product_title">Mr. Ricco (Organic)</div>
                                <div class="slider_product_description">
                                    If you use this site regularly and would like to help
                                    keep the site on the Internet, please consider donating.
                                </div>
                                <div class="slider_product_price">Price 500$</div>
                                <div class="slider_product_kkal">200 kkal</div>
                            </div>
                        </div>
                        <div class="owl-item">
                            <img src="images/Profood%20(1).png" alt="">
                            <div class="slider_product">
                                <div class="slider_product_title">Mr. Ricco (Organic)</div>
                                <div class="slider_product_description">
                                    If you use this site regularly and would like to help
                                    keep the site on the Internet, please consider donating.
                                </div>
                                <div class="slider_product_price">Price 500$</div>
                                <div class="slider_product_kkal">200 kkal</div>
                            </div>
                        </div>
                        <div class="owl-item">
                            <img src="images/ketchup.png" alt="">
                            <div class="slider_product">
                                <div class="slider_product_title">Mr. Ricco (Organic)</div>
                                <div class="slider_product_description">
                                    If you use this site regularly and would like to help
                                    keep the site on the Internet, please consider donating.
                                </div>
                                <div class="slider_product_price">Price 500$</div>
                                <div class="slider_product_kkal">200 kkal</div>
                            </div>
                        </div>
                        <div class="owl-item">
                            <img src="images/ketchup.png" alt="">
                            <div class="slider_product">
                                <div class="slider_product_title">Mr. Ricco (Organic)</div>
                                <div class="slider_product_description">
                                    If you use this site regularly and would like to help
                                    keep the site on the Internet, please consider donating.
                                </div>
                                <div class="slider_product_price">Price 500$</div>
                                <div class="slider_product_kkal">200 kkal</div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--===============================================================================================-->
<section id="certificate">
    <div class="container p_0">
        <div class="row">
            <div class="col-md-8 col-md-push-4">
                <div class="certif_text">
                    <div class="cer_title">Certificate</div>
                    <div class="cer_description">If you use this site regularly and would like to help keep the site on
                        the Internet, please consider donating a small sum to help pay for the hosting and bandwidth
                        bill.
                    </div>
                    <div class="cer_text">Commercial relations are of great importance in ensuring economic competition
                        in the country. In these relations import and export processes are important. <br>
                        The newly-established "Paradis" company has been established to organize high-level local brands
                        exporting products to Armenia and abroad. Our company is the official representative of the
                        famous
                        Russian company "Nefis Biogradukt" in Armenia. The main objective of "Paradis" company is to
                        successfully promote the recognition of Armenian products in the international market and to
                        introduce
                        high quality and high quality products for the public. In addition to the main directions,
                        Paradis also
                        provides advisory assistance in case of any issues related to the export and import of goods,
                        from
                        market research to shipping. <br>
                        Experienced specialists of "Paradis" company will help you to make the right choice.
                    </div>
                </div>
            </div>
            <div class="col-xs-8 col-xs-offset-2  col-md-4 col-md-pull-8 col-md-offset-0 cer_img">
                <img src="images/Untitled-1.png" alt="u">
            </div>
        </div>
    </div>
</section>

<section id="partners">
    <div class="container p_0">
        <div class="row">
            <div class="partners_title">Partners</div>
            <div style="text-align: center; width: 100%;">
                <div class="partners_description">If you use this site regularly and would like to help keep the site on
                    the Internet, please consider donating a small sum to help pay for the hosting and bandwidth bill.
                </div>
            </div>
            <div class="partners_type_buttons">
                <div class="col-md-6 col-xs-12">
                    <div class="row">
                        <div class="col-xs-6 col-sm-3">
                            <div id="part" class="prod_button  button_active">Our Partners</div>
                        </div>
                        <div class="col-xs-6 col-sm-3">
                            <div id="brands" class="prod_button " style="font-size: 12px">Partner Brands</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 hidden-xs hidden-sm ">
                    <div class="row">
                        <div class="slider_prev col-md-1 col-md-offset-9">
                            <i class="fa fa-chevron-left" aria-hidden="true"></i>
                        </div>
                        <div class="slider_next col-md-1 col-md-offset-1">
                            <i class="fa fa-chevron-right" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="partners_slider partners_part">
            <div class="owl-carousel owl-theme owl-loaded">
                <div class="owl-stage-outer">
                    <div class="owl-stage">
                        <?php foreach ($partners as $partner): ?>
                            <div class="owl-item">
                                <div class="img_div"><img src="<?= '/web/uploads/partner/' . $partner->image ?>" alt="">
                                </div>
                                <div class="slider_product">
                                    <div class="slider_product_title"><?= $partner['title_' . Yii::$app->language] ? $partner['title_' . Yii::$app->language] : $partner['title_am'] ?></div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="partners_slider partners_brands" style="display: none;">
            <div class="owl-carousel owl-theme owl-loaded">
                <div class="owl-stage-outer">
                    <div class="owl-stage">
                        <?php foreach ($brands as $brand): ?>
                            <div class="owl-item">
                                <div class="img_div"><img src="<?= '/web/uploads/brand/' . $brand->image ?>" alt="">
                                </div>
                                <div class="slider_product">
                                    <div class="slider_product_title"><?= $brand['title_' . Yii::$app->language] ? $brand['title_' . Yii::$app->language] : $brand['title_am'] ?></div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="contact">

    <div class="container p_0" style="">
        <div class="row">
            <div class="col-xs-12 col-md-6 ">
                <div class="contact_form">
                    <div class="contact_form_title">Contacts</div>
                    <div class="contact_form_description">Fill the form and click on the "Send" button</div>
                    <div class="my_form">
                        <?php $form = ActiveForm::begin(['id' => 'contact-form', 'action' => ['site/contact'], 'options' => ['method' => 'post']]); ?>
                        <!--                        <form class="" action="">-->
                        <!--                        <input class="col-xs-12" type="email" placeholder="Email*">-->
                        <div class="col-xs-12">
                            <?= $form->field($model, 'email')->label(false) ?>
                        </div>
                        <!--                        <input class="col-xs-12" type="text" placeholder="Phone*">-->
                        <div class="col-xs-12">
                            <?= $form->field($model, 'phone')->label(false) ?>
                        </div>
                        <div class="col-xs-12">
                            <?= $form->field($model, 'body')->textarea(['rows' => 4])->label(false) ?>
                        </div>
                        <!--                        <textarea class="col-xs-12" rows="4" placeholder="Type here..."></textarea>-->
                        <div class="form-group form_button col-xs-12">
                            <?= Html::submitButton('Submit', ['class' => 'prod_button button_active', 'name' => 'contact-button']) ?>
                        </div>
                        <!--                        <a class="form_button col-xs-12">-->
                        <!--                            <input class="prod_button button_active" type="submit" value="Send"-->
                        <!--                                   style="width: 120px;">-->
                        <!--                        </a>-->
                        <!--                        </form>-->
                        <?php ActiveForm::end(); ?>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-6 ">
                <div class="cont_info_map">
                    <div class="contact_info">
                        Limited Liability Company "PARADIS" <br>
                        + 7-965-708-53-65 (WhatsApp; Viber) <br>
                        info@paradis.am
                    </div>
                    <div class="contact_map">
                        <div style="overflow:hidden;width: 100%;height: 410px;border-radius: 15px;">
                            <iframe width="100%" height="410"
                                    src="https://maps.google.com/maps?width=570&amp;height=410&amp;hl=en&amp;q=Yerevan%2CArmenia+(%D0%9D%D0%B0%D0%B7%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5)&amp;
                                    ie=UTF8&amp;t=&amp;z=10&amp;iwloc=B&amp;output=embed"
                                    frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                            </iframe>
                            <div>
                                <small><a href="https://embedgooglemaps.com/de/">embedgooglemaps DE</a></small>
                            </div>
                            <div>
                                <small><a href="https://iamsterdamcard.it">iamsterdam card.it</a></small>
                            </div>
<!--                            <style>#gmap_canvas img {max-width: none !important; background: none !important}</style>-->
                        </div>
                        <br/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

