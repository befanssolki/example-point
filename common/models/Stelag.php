<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "stelag".
 *
 * @property int $id_stelag
 * @property int $id_doc
 * @property int $number_stelag
 * @property int $number_polka
 * @property string $lvl
 */
class Stelag extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'stelag';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_doc', 'number_stelag', 'number_polka'], 'integer'],
            [['number_stelag', 'number_polka', 'lvl'], 'required'],
            [['lvl'], 'string', 'max' => 255],
            [['number_stelag'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_stelag' => 'Id Stelag',
            'id_doc' => 'Id Doc',
            'number_stelag' => 'Number Stelag',
            'number_polka' => 'Number Polka',
            'lvl' => 'Lvl',
        ];
    }
}
