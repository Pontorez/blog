<?php

use yii\helpers\Html;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Blog';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="blog-index">

    <h1><?= Html::encode($this->title) ?>
    <?php if ($author) {echo "<h3>Author: $author</h3>";}?></h1>

    <?= ListView::widget([
        'dataProvider' => $dataProvider,
        'layout' => "<div class='text-center'>{pager}</div>\n{items}\n<hr/><div class='text-center'>{summary}\n{pager}</div>",
        'itemView' => '_list',
    ]); ?>
</div>
