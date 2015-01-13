<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Cms */

$this->title = 'Update CMS';
?>
<div class="page-header">
	<div class="pull-left">
		<h1>Update CMS Page</h1>
	</div>
</div>
<div class="breadcrumbs">
	<ul>
		<li><?php echo Html::a('Home',['/site/index']); ?><i class="icon-angle-right"></i></li>
		<li><?php echo Html::a('CMS',['/cms/index']); ?><i class="icon-angle-right"></i></li>
		<li><a href="#">Udate CMS</a></li>
	</ul>
	<div class="close-bread"><a href="#"><i class="icon-remove"></i></a></div>
</div>

<div class="cms-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
