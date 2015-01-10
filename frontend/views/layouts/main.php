<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use frontend\widgets\Alert;

//use backend\models\cms;
//Yii::import('backend.models.cms') ;
/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
     <head>
        <meta charset="utf-8">
        <!--<meta http-equiv="X-UA-Compatible" content="IE=edge">-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>MVNO</title>
        <!-- Bootstrap -->
        <!--<link type="text/css" href="common/css/bootstrap.css" rel="stylesheet"/>-->
        
       
        <link type="text/less" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/frontend/web/css/bootstrap.less" rel="stylesheet"/>
        <link href='http://fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'/>
        <link href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/frontend/web/css/font-awesome.min.css" rel="stylesheet">    
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        
      
        
    </head>
    


<body>
           <!-- Navigation -->
    <nav class="navbar navbar-bg navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav pull-right">
                    <li><a href="#" class="no-bd"><i class="top_up"></i> Top Up</a></li>
                    <li><a href="#"><i class="sign_up"></i> Sign Up</a></li>
                    <li><a href="#"><i class="log_in"></i> Login</a></li>
                    <li><a href="#"><i class="search"></i> Search</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- logo and tow links Page Header -->
    <div class="header">
    <div class="container">
            <div class="row">
                <div class="col-lg-12 space_updown">
                    <nav class="top-left_btns">
                        <ul class="nav navs-pills pull-left">
                            <li class="selected" role="presentation"><a href="#">Product</a></li>
                            <li role="presentation"><a href="#">Combos</a></li>
                        </ul>
                    </nav>
                    <a href ="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>">
                    <h3 class="text-muted pull-right"><img src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/images/logo.png" alt="" /></h3></a>
                </div>
            </div>
        </div>
        
      </div>
    <div class="header_border"></div>
   <div  class="page_min_hight">
    <?php echo $content; ?>
   </div>
  <div class="row repeat_border"></div>
          <footer>
        	<div class="container">
            	<div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                    	<div class="footer_wrap">
                        	<div class="border_height"></div>
                        	<div class="left_section">
                                    <h4>Our Company</h4>
                            	    
                                    <?php  echo Nav::widget([ 'items' => app\models\Cms::getItems()]);?> 
                                    <ul>
                                        <li> <a href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/faq">Faq's</a></li>
                                        
                                    </ul>
                         </div>
                            
                            
                            <div class="right_section">
                            	<address>
                                	<i class="call"></i>
                                    <h4>Customer Support</h4>
                                    <p>Call Us +001 012 125</p>
                                    <div class="border_height"></div>
                                    <div class="social_links"><i class="fb"></i><i class="twt"></i><i class="gplus"></i></div>
                                    <h4>Follow on us:</h4>
                                    <p>we're social</p>
                                </address>
                            </div><!--right section closed-->
                            <div class="border_height"></div>
                            <div class="copy_rite">© BlueSky 2014 all rights reserved</div>
                        </div>
                    </div>
                </div>
           </div>           
          </footer> 
        
       
        
    
	<script src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/js/less.min.js"></script>
        <!-- jQuery -->
        <script src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/js/jquery.js"></script>
        
        <!-- Bootstrap Core JavaScript -->
        <script src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/js/bootstrap.min.js"></script>
 
        <script src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/js/custom.js"></script>
        
<style>
    .left_section .nav li a:hover{background: none;}
    .left_section .nav li a{padding:0px;}
    
</style>
