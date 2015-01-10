<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\faq */

$this->title = 'Update Faq: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Faqs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="page-header">
	<div class="pull-left">
		 <h1> <?= Html::encode($this->title) ?></h1>
	</div>
</div>
<div class="breadcrumbs">
	<ul>
		<li><?php echo Html::a('Home',['/site/index']); ?><i class="icon-angle-right"></i></li>
		<li><?php echo Html::a('FAQ Summary',['/faq']); ?><i class="icon-angle-right"></i></li>
		<li><a href="#">Update FAQ </a></li>
	</ul>
	<div class="close-bread"><a href="#"><i class="icon-remove"></i></a></div>
</div>

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
