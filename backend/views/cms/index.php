<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\CmsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'CMS';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="page-header">
    <div class="pull-left">
        <h1><?= Html::encode($this->title) ?></h1>
    </div>
</div>
<div class="breadcrumbs">
<ul>
        <li><?php echo Html::a('Home',['/dashboard']); ?> / <?= Html::encode($this->title) ?></li>
</ul>
<div class="close-bread"><a href="#"><i class="icon-remove"></i></a></div>
</div>
<div class="grid box">
<div class="row-fluid">
	<div class="span12">
		<div class="box box-color box-bordered">
			<div class="box-title">
				<h3><i class="icon-table"></i>Manage CMS</h3>
			</div>
			<div class="box-content nopadding">
				<form action="" name='cms-grid-list-form' id='cms-grid-list-form'>
                                    <?= GridView::widget([
                                        'id'=>'cms-grid',
					'itemsCssClass' => 'table table-hover table-nomargin table-bordered', 
                                        'dataProvider' => $dataProvider,
                                        'filterModel' => $searchModel,
                                        'columns' => [
                                            ['class' => 'yii\grid\SerialColumn'],

                                            //'pkCmsID',
                                            //'cmsDisplayTitle',
                                            array(
                                                'name'=>'cmsPageTitle',
                                                'htmlOptions'=>array('style'=>'text-align:center'),
                                                ),
                                            array(
                                                'name'=>'cmsDateModified',
                                                'htmlOptions'=>array('style'=>'text-align:center'),
                                                ),
                                            //'cmsPageTitle',
                                            //'cmsSlug',
                                            //'cmsContent:ntext',
                                            // 'cmsMetaTitle',
                                            // 'cmsMetaKeywords:ntext',
                                            // 'cmsMetaDescription:ntext',
                                            // 'cmsContentAvailable',
                                            // 'cmsBannerAvailable',
                                            // 'cmsIsPage',
                                            // 'cmsStatus',
                                            // 'cmsDateAdded',
                                             //'cmsDateModified',

                                            ['class' => 'yii\grid\ActionColumn'],
                                        ],
                                    ]); ?>
            			</form>
			</div>
		</div>
	</div>
</div>

    
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <div>
        <?= Html::a('Create Cms', ['create'], ['class' => 'btn btn-success']) ?>
    </div>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'pkCmsID',
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
            // 'cmsStatus',
            // 'cmsDateAdded',
             'cmsDateModified',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
