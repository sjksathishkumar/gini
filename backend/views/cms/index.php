<?php

use yii\helpers\Html;
use yii\grid\GridView;
use backend\components\CommonFunctions;


/* @var $this yii\web\View */
/* @var $searchModel backend\models\CmsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Manage CMS';
?>
<div class="page-header">
    <div class="pull-left">
        <h1>Manage CMS</h1>
    </div>
</div>
<div class="breadcrumbs">
    <ul>
        <li><?php echo Html::a('Home',['/site/index']); ?><i class="icon-angle-right"></i></li>
        <li><?php echo Html::a('CMS',['/cms/index']); ?></li>
    </ul>
    <div class="close-bread"><a href="#"><i class="icon-remove"></i></a></div>
</div>
<div class="box box-color box-bordered">
    <div class="search-form" style="display:none;">
    <?php //$this->render('_search',['cmsDisplayTitle' => $searchModel->cmsDisplayTitle]); ?>
    
    </div><!-- search-form -->
    <!-- End of Setting up flash success/error message -->
</div>

<div class="row-fluid">
    <div class="span12">
        <div class="box box-color box-bordered">
            <div class="box-title">
                <h3><i class="icon-table"></i>Manage CMS</h3>
            </div>
            <div class="box-content nopadding">
                <form action="" name='cms-grid-list-form' id='cms-grid-list-form'>
                    <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        'layout' => "{summary}{items}\n{pager}", 
                        //'filterModel' => $searchModel,
                        'columns' => [
                            [
                                'class' => 'yii\grid\SerialColumn',
                                'header' => 'S.No',
                                'headerOptions' => ['style'=>'text-align:center'],
                                'contentOptions' => ['style'=>'text-align:center']
                            ],
                            /*[
                                'class' => 'yii\grid\DataColumn', // can be omitted, as it is the default
                                'value' => function ($data) {
                                    return $data->cmsPageTitle; // $data['name'] for array data, e.g. using SqlDataProvider.
                                },
                                'headerOptions' => array('style'=>'text-align:center')
                            ],*/
                            //'cmsDisplayTitle',
                            [
                                'class' => 'yii\grid\DataColumn', // can be omitted, as it is the default
                                'value' => function ($data) {
                                    return $data->cmsPageTitle; // $data['name'] for array data, e.g. using SqlDataProvider.
                                },
                                'attribute' => 'cmsPageTitle',
                                'label' => 'Page Title',
                                'headerOptions' => ['style'=>'text-align:center'],
                                //'header' => 'Page Title',
                                //'enableSorting' => 'enable',    
                                //'layout' => "{summary}\n{items}\n{pager}", 
                                //'sort' =>true
                                //'label' => 'Title'
                            ],
                            //'cmsPageTitle',
                            //'cmsSlug',
                            //'cmsContent:ntext',
                            // 'cmsMetaTitle',
                            // 'cmsMetaKeywords:ntext',
                            // 'cmsMetaDescription:ntext',
                            // 'cmsContentAvailable',
                            // 'cmsBannerAvailable',
                            // 'cmsIsPage',
                            /*[
                                'class' => 'yii\grid\DataColumn', // can be omitted, as it is the default
                                'value' => function ($data) {
                                    return $data->cmsDateModified; // $data['name'] for array data, e.g. using SqlDataProvider.
                                },
                                'label' => 'Date Modified',
                                'headerOptions' => array('style'=>'text-align:center'),
                                'contentOptions'  => array('style'=>'text-align:center')
                            ],*/
                            [
                                'class' => 'yii\grid\DataColumn', // can be omitted, as it is the default
                                'value' => function ($data) {
                                    return $data->cmsStatus; // $data['name'] for array data, e.g. using SqlDataProvider.
                                },
                                'label' => 'Status',
                                'attribute' => 'cmsStatus',
                                'headerOptions' => array('style'=>'text-align:center'),
                                'contentOptions'  => array('style'=>'text-align:center')
                            ],
                             //'cmsStatus',
                             [
                                 'class' => 'yii\grid\DataColumn', // can be omitted, as it is the default
                                 'value' => function ($data) {
                                     return $data->cmsDateModified; // $data['name'] for array data, e.g. using SqlDataProvider.
                                 },
                                 'headerOptions' => ['style'=>'text-align:center'],
                                 'label' => 'Date Modified',
                                 'attribute' => 'cmsDateModified',
                                 //'header' => 'Date Modified',
                                 'enableSorting' => 'enable',    
                                 'contentOptions'  => ['style'=>'text-align:center']
                                 //'layout' => "{summary}\n{items}\n{pager}", 
                                 //'sort' =>true
                                 //'label' => 'Title'
                             ],
                            // 'cmsDateAdded',
                               // 'cmsDateModified',
                             [
                                'class' => 'yii\grid\ActionColumn',
                                'header' => 'Action',
                                'headerOptions' => ['style'=>'text-align:center'],
                                'contentOptions' => ['style'=>'text-align:center'],
                                'template' => "{view} {update}",
                            ],
                            //['class' => 'yii\grid\ActionColumn'],
                        ],
                    ]); ?>
                    
                </form>
            </div>
        </div>
    </div>
</div>
<?php

    //Yii::$app->CommonFunction->statusName('1');
?>