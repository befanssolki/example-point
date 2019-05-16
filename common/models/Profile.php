<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "profile".
 *
 * @property int $id_profile
 * @property int $id_user
 * @property string $familiya
 * @property string $name
 * @property string $otchestvo
 * @property string $telephone
 * @property string $date
 */
class Profile extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'profile';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_user'], 'integer'],
            [['familiya', 'name', 'otchestvo', 'telephone'], 'required'],
            [['date'], 'safe'],
            [['familiya', 'name', 'otchestvo'], 'string', 'max' => 25],
            [['telephone'], 'string', 'max' => 15],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_profile' => 'Id Profile',
            'id_user' => 'Id User',
            'familiya' => 'Familiya',
            'name' => 'Name',
            'otchestvo' => 'Otchestvo',
            'telephone' => 'Telephone',
            'date' => 'Date',
        ];
    }
}
