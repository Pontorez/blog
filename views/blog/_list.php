<?php
use yii\helpers\Html;
?>

<h3><a href="/blog/view?id=<?= $model->id ?>"><?= Html::encode($model->post_subject) ?></a></h3>

<h6>Author: <a href="/?author=<?= $model->author ?>"><?= $model->author ?></a> (<?= date('M j, Y, H:i', strtotime($model->post_date)) ?>)</h6>

<p><?= Html::encode($model->post_preview) ?> <a href="/blog/view?id=<?= $model->id ?>"><b>Read more…</b></a></p>
