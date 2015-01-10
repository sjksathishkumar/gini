<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\user */

$this->title = 'View User';
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="page-header">
				<div class="pull-left">
				  <h1>View User #<?php echo $model->id;?></h1>
			       </div>			
		           </div>

<div class="breadcrumbs">
	<ul>
		<li><?php echo Html::a('Home',['/site/index']); ?><i class="icon-angle-right"></i></li>
		<li><?php echo Html::a('Manage Users',['/user']); ?><i class="icon-angle-right"></i></li>
		<li><a href="#">View User </a></li>
	</ul>
	<div class="close-bread"><a href="#"><i class="icon-remove"></i></a></div>
</div>


<div class="row-fluid">
    <div class="span12">
        <div class="box box-color box-bordered">
            <div class="box-title">
                <h3>View User</h3>
                  <a class="btn pull-right" data-toggle="modal" href="<?php echo Yii::$app->urlManager->createUrl('/user');?>"><i class="icon-circle-arrow-left"></i> Back</a>
            </div>
            <div class="box-content nopadding">

                <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
           
            'first_name',
            'last_name',
            'email:email',
           
            [
                'label' => 'Birth Date',
                 'value' => $model->dob!='0000-00-00'?date("d M, Y",  strtotime($model->dob)):'',
            ],
             [
                'label' => 'Gender',
                 'value' => $model->gender=='M'?'Male':'Female',
            ],
            'delivery_address1',
            'delivery_address2',
            'suburb',
            'city',
            'post_code',
            'contact_number',
            [
                'label' => 'status',
                 'value' => $model->status!='0'?'Active':'Deactive',
            ],
            
            [
                'label' => 'created_at',
                 'value' => $model->created_at!='0000-00-00 00:00:00'?date("d M, Y h:i",  strtotime($model->created_at)):'',
            ],
             [
                'label' => 'created_at',
                 'value' => $model->updated_at!='0000-00-00 00:00:00'?date("d M, Y h:i",  strtotime($model->updated_at)):date("d M, Y h:i",  strtotime($model->created_at)),
            ],
        
        ],
    ]) ?>
            </div>

        </div>
    </div>
</div>



