<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\OrgEp */

$this->title = 'Create Org Ep';
$this->params['breadcrumbs'][] = ['label' => 'Org Eps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="org-ep-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
