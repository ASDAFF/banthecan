<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = \Yii::t('app', 'Users');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

<h1><?= Html::encode($this->title) ?></h1>
<?php // echo $this->render('_search', ['model' => $searchModel]); ?>

<p><?= Html::a(\Yii::t('app', 'Create User'), ['create'], ['class' => 'btn btn-success']) ?>
</p>

<?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
['class' => 'yii\grid\SerialColumn'],

            'id',
            'username:ntext',
            'password_hash:ntext',
            'password_reset_token:ntext',
            'email:ntext',
// 'auth_key:ntext',
// 'status',
// 'created_at',
// 'updated_at',
// 'password:ntext',

['class' => 'yii\grid\ActionColumn'],
],
]); ?></div>
