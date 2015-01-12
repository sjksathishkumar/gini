<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Configurations */

$this->title = 'Update Configurations: ' . ' ' . $model->pkConfigurationID;
$this->params['breadcrumbs'][] = ['label' => 'Configurations', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->pkConfigurationID, 'url' => ['view', 'id' => $model->pkConfigurationID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="configurations-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
