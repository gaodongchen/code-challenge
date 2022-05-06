<?php

use Codeception\PHPUnit\ResultPrinter\HTML;
use yii\grid\GridView;
use yii\helpers\Url;

/** @var yii\web\View $this */

$this->title = Yii::$app->name . ' - 肥臣';

echo GridView::widget([
    'filterModel' => $searchModel,
    'dataProvider' => $dataProvider,
    'columns' => [
        [
            'class' => yii\grid\CheckboxColumn::class,
            'checkboxOptions' => function($model, $key, $index, $column){
                return ['value' => $key];
            }
        ],
        'id' => [
            'attribute' => 'id',
            'value' => function($model){
                return $model->id;
            }
        ],
        'name',
        'code',
        't_status' => [
            'attribute' => 't_status',
            'filter' => ['ok' => 'ok', 'hold' => 'hold'],
        ],
        [
            'class' => 'yii\grid\ActionColumn',
        ]
    ],
]);
?>
<div>
    <a href="<?php echo Url::toRoute(array_merge(['site/export'], Yii::$app->request->get())); ?>">Export CSV</a>
</div>
