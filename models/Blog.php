<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "blog".
 *
 * @property integer $id
 * @property string $author
 * @property string $post_subject
 * @property string $post_preview
 * @property string $post_body
 * @property string $post_date
 */
class Blog extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'blog';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['author', 'post_subject', 'post_preview', 'post_body', 'post_date'], 'required'],
            [['post_body'], 'string'],
            [['post_date'], 'safe'],
            [['author', 'post_subject'], 'string', 'max' => 255],
            [['post_preview'], 'string', 'max' => 4000],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'author' => 'Author',
            'post_subject' => 'Subject',
            'post_preview' => 'Post Preview',
            'post_body' => 'Post Body',
            'post_date' => 'Date',
        ];
    }
}
