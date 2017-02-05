<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TurmaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Turmas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="turma-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Turma', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_turma',
            'id_curso',
            'id_periodo_letivo',
            'id_disciplina',
            'id_nivel',
            // 'nome',
            // 'data_inicio',
            // 'data_fim',
            // 'data_inclusao',
            // 'usuario_inclusao',
            // 'data_alteracao',
            // 'usuario_alteracao',
            // 'id_modelo_avaliacao',
            // 'id_curriculo',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
