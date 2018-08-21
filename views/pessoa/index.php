<?php

use yii\helpers\Html;
use yii\data\Pagination;
use yii\grid\GridView;
use yii\widgets\LinkPager;
use yii\widgets\BaseListView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PessoaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Teste de Conhecimento';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pessoa-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Inclur Novo', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nome',

            ['class' => 'yii\grid\ActionColumn',
             'template' => '{view} {editar} {excluir}',
              'buttons'=>[
                    'editar' => function ($url, $model) { 
                        return Html::a('Editar', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']);
                    },
                    'excluir' => function ($url, $model) { 
                        return Html::a('Exluir', ['delete', 'id' => $model->id], [
                            'class' => 'btn btn-danger',
                            'data' => [
                                'confirm' => 'Deseja realmente excluir o registro?',
                                'method' => 'post',
                            ],
                        ]);
                    }
                ],     

            ],

        ],  
    ]); ?>
</div>

