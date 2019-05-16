<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "office".
 *
 * @property int $id_office
 * @property int $id_user
 * @property int $number
 * @property int $number_doc
 * @property int $count_places
 */
class Office extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'office';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_user', 'number', 'number_doc', 'count_places'], 'integer'],
            [['number', 'count_places'], 'required'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_office' => 'Id Office',
            'id_user' => 'Id User',
            'id_stelag' => 'Id Stelag',
            'number' => 'Number',
            'number_doc' => 'Number Doc',
            'count_places' => 'Count Places',
        ];
    }

    public function getStelag()
    {
      return $this->hasOne(Stelag::className(), ['id_stelag' => 'id_stelag']);
    }
}
