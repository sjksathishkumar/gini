<?php

use yii\helpers\Html;
use yii\grid\GridView;

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
        <li><?php echo Html::a('Manage CMS',['/cms/index']); ?></li>
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
                        //'filterModel' => $searchModel,
                        'columns' => [
                            [
                                'class' => 'yii\grid\SerialColumn',
                                'header' => 'S.No',
                                'headerOptions' => array('style'=>'text-align:center')
                            ],
                            /*[
                                'class' => 'yii\grid\DataColumn', // can be omitted, as it is the default
                                'value' => function ($data) {
                                    return $data->cmsPageTitle; // $data['name'] for array data, e.g. using SqlDataProvider.
                                },
                                'headerOptions' => array('style'=>'text-align:center')
                            ],*/
                            //'cmsDisplayTitle',
                            'cmsPageTitle',
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
                            /*[
                                'class' => 'yii\grid\DataColumn', // can be omitted, as it is the default
                                'value' => function ($data) {
                                    return $data->cmsStatus; // $data['name'] for array data, e.g. using SqlDataProvider.
                                },
                                'label' => 'Status',
                                'headerOptions' => array('style'=>'text-align:center'),
                                'contentOptions'  => array('style'=>'text-align:center')
                            ],*/
                             'cmsStatus',
                            // 'cmsDateAdded',
                                'cmsDateModified',

                            ['class' => 'yii\grid\ActionColumn'],
                        ],
                    ]); ?>
                    
                </form>
            </div>
        </div>
    </div>
</div>
