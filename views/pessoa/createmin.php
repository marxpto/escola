<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Pessoa */

$this->title = 'Inserir Nova Pessoa';
$this->params['breadcrumbs'][] = ['label' => 'Pessoas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pessoa-create">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->

    <?= $this->render('_formmin', [
        'model' => $model,
    ]) ?>

</div>
