<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "docs".
 *
 * @property int $id_doc
 * @property int $number
 * @property string $discription
 * @property string $lvl
 * @property string $status
 * @property string $date
 */
class Docs extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'docs';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['number', 'discription', 'lvl', 'status'], 'required'],
            [['number'], 'integer'],
            [['date'], 'safe'],
            [['discription', 'lvl'], 'string', 'max' => 255],
            [['status'], 'string', 'max' => 25],
            [['number'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_doc' => 'Id Doc',
            'number' => 'Number',
            'discription' => 'Discription',
            'lvl' => 'Lvl',
            'status' => 'Status',
            'date' => 'Date',
            'rfid' => 'Rfid'
        ];
    }
}
