<?php
use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
//echo "<pre>";
//echo Yii::$app->user->identity['username'];

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
    


     <link rel="stylesheet" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/css/plugins/jquery-ui/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/css/plugins/jquery-ui/smoothness/jquery.ui.theme.css">
    <link rel="stylesheet" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/css/plugins/jquery-ui/smoothness/jquery.ui.theme.css">
    <link rel="stylesheet" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/css/plugins/select2/select2.css">
    <link rel="stylesheet" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/css/plugins/icheck/all.csss">
  
    
<script type="text/javascript" src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/js/plugins/nicescroll/jquery.nicescroll.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/js/plugins/imagesLoaded/jquery.imagesloaded.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/js/plugins/jquery-ui/jquery.ui.core.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/js/plugins/jquery-ui/jquery.ui.widget.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/js/plugins/jquery-ui/jquery.ui.mouse.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/js/plugins/jquery-ui/jquery.ui.resizable.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/js/plugins/jquery-ui/jquery.ui.sortable.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/js/plugins/touch-punch/jquery.touch-punch.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/js/plugins/select2/select2.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/js/plugins/bootbox/jquery.bootbox.js"></script>
<script type="text/javascript" src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/js/plugins/form/jquery.form.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/js/plugins/validation/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/js/plugins/validation/additional-methods.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/js/plugins/wizard/jquery.form.wizard.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/js/plugins/mockjax/jquery.mockjax.js"></script>
<script type="text/javascript" src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/js/eakroko.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/js/application.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/js/demonstration.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/js/common.js"></script>
<script type="text/javascript" src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/js/plugins/fileupload/bootstrap-fileupload.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/js/plugins/tagsinput/jquery.tagsinput.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/js/plugins/icheck/jquery.icheck.min.js"></script>


  
   
	<script src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/js/plugins/placeholder/jquery.placeholder.min.js"></script>

	 <script>
            $(document).ready(function() {

                $('input, textarea').placeholder();
            });
        </script>
        
        

</head>

 <body <?php if (!isset(Yii::$app->user->id)) echo 'class="login"'; ?> data-layout-sidebar="fixed" data-layout-topbar="fixed" class="sidebar-left">
<?php $this->beginBody() ?>   
    <?php
        if (isset(Yii::$app->user->id))
        {
            ?>

            <!-- NAVIGATION STARTS-->
            <div id="navigation">
                <div class="container-fluid">
                <?php echo Html::a('', ['/index'], ['id' => 'brand']); ?>
                    <?php echo Html::a('<i class="icon-reorder"></i>', '#', array('class' => 'toggle-nav', 'rel' => 'tooltip', 'title' => 'Toggle navigation', 'data-placement' => 'bottom')); ?>

                    <ul class='main-nav'>
                        <?php
                        //$controllerName =Yii::app()->getController()->getId();
                        //$this->varActionName1 = Yii::app()->controller->action->id;
                        ?>
                        <li <?php if (Yii::$app->controller->getUniqueId() == 'site') echo 'class="active"'; ?>>
                            <?php echo Html::a('Dashboard', ['site/index']); ?>
                        </li>
                        
                         <li <?php if (Yii::$app->controller->getUniqueId() == 'member') echo 'class="active"'; ?>>
                            <?php echo Html::a('<span>Protal Admin</span> <span class="caret"></span>', ['member/editprofile'], ['class' => 'dropdown-toggle']); ?>
                          
                        </li>
                        

                        <li <?php if (Yii::$app->controller->getUniqueId() == 'cms' || Yii::$app->controller->getUniqueId() == 'faq') echo 'class="active"'; ?>>
                            <?php echo Html::a('<span>Protal Setup</span> <span class="caret"></span>', 'javascript:void(0);', ['data-toggle' => 'dropdown', 'class' => 'dropdown-toggle']); ?>
                            <ul class="dropdown-menu">
                                <li class='dropdown'>
                                    <?php echo Html::a('Manage CMS', ['cms/index']); ?>
                                    
                                </li>
                                <li class='dropdown'>
                                    <?php echo Html::a('Manage FAQ', ['/faq']); ?>
                                    
                                </li>
                              
                                
                            </ul>
                        </li>
                        
                           <li <?php if (Yii::$app->controller->getUniqueId() == 'mvnosetup') echo 'class="active"'; ?>>
                            <?php echo Html::a('<span>MVNO Setup</span> <span class="caret"></span>', 'javascript:void(0);', ['data-toggle' => 'dropdown', 'class' => 'dropdown-toggle']); ?>
                          
                        </li>
                        
                          <li <?php if (Yii::$app->controller->getUniqueId() == 'mvnosetup') echo 'class="active"'; ?>>
                            <?php echo Html::a('<span>Support Center</span> <span class="caret"></span>', 'javascript:void(0);', ['data-toggle' => 'dropdown', 'class' => 'dropdown-toggle']); ?>
                          
                        </li>
                        

                    </ul>
                    <div class="user">
                        <div class="dropdown">
                            <a href="javascript:void(0);" class='dropdown-toggle' data-toggle="dropdown">
                                <?php echo 'Welcome'; ?>
                                <img src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/img/demo/admin.png" alt="">
                            </a>
                            <ul class="dropdown-menu">
                                
                                <li>
                                    <?php echo Html::a('Edit Profile', ['/member/editprofile'], []); ?>
                                </li>
                                <li>
                                    <?php echo Html::a('Change Password', ['/member/changepassword'], []); ?>
                                </li>
                                
                                <li>
                                    <?php echo Html::a('Logout', ['site/logout'],['data-method' => 'post']); ?>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- NAVIGATION ENDS-->

            <div class="container-fluid" id="content" style="">
                <div id="left">
                    <!--<div class="subnav">
                        <div class="subnav-title">
                            <a href="#" class='toggle-subnav'><i class="icon-angle-down"></i><span>Quick stats</span></a>
                        </div>
                        <div class="subnav-content">
                            <ul class="quickstats">
                              
                            </ul>
                        </div>
                    </div>-->
                    <div class="subnav">
                        <div class="subnav-title">
                            <a href="#" class='toggle-subnav'><i class="icon-angle-down"></i><span>Quick Links</span></a>
                        </div>
                        <ul class="subnav-menu">
                           
                            <li>
                                <?php echo Html::a('Add Banner', ['banner/add']); ?>
                            </li>
                            <li>
                                <?php echo Html::a('Add CMS Page', ['cms/create']); ?>
                            </li>
                            
                         
                        </ul>
                    </div>
                    <div class="subnav subnav">
                        <div class="subnav-title">
                            <a href="#" class='toggle-subnav'><i class="icon-angle-right"></i><span>Global Settings</span></a>
                        </div>
                    </div>
                </div>
                <div id="main">
                    <div class="container-fluid">
                        <!--<div class="page-header">-->
                        <div class="pull-right margin_top20">
                            <ul class="stats">
                                <li class='satgreen'>
                                    <i class="icon-calendar"></i>
                                    <div class="details">
                                        <span class="big"></span>
                                        <span></span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!--</div>-->
                        <?php
                    }
                   echo $content;
                    if (isset(Yii::$app->user->id))
                    {
                        ?>
                    </div>
                </div>
            </div>
           <!-- <div id="footer">
                <p>MVNO- All Rights Reserved</p>
                <?php echo Html::a('<i class="icon-arrow-up"></i>', '#', ['class' => 'gototop']); ?>
            </div>-->
            <script type="text/javascript">
                window.onload = function(){
                    setTimeout(function () {
                        $("#breadcrumbs-msg").fadeOut('slow');
                    }, 5000);
                };
            </script>
        <?php } ?>
            
            <?php $this->endBody() ?>
    </body>
</html>

<?php $this->endPage() ?>
