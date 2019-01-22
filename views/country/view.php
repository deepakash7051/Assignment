<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Country */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Countries', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="country-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->code], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->code], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
 
    <?php $logo = str_replace("1","",$model->attributes['logo']);   ?>    
    
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'code',
            'name',
            'population',
            [
                'attribute'=>'logo',
                'value'=> Yii::getAlias('@logoUrl').'/'.$logo,
                //'value'=>'http://localhost/yii/web/upload/In.jpg',
               'format'=>['image',['width'=>'80','height'=>'80']],
            ]
        ],
    ]) ?>

</div>
