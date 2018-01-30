<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "instructor".
 *
 * @property integer $id
 * @property string $firstName
 * @property string $surname
 * @property string $dateOfBirth
 *
 * @property Activity[] $activities
 */
class Instructor extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'instructor';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['firstName', 'surname'], 'required'],
            [['dateOfBirth'], 'safe'],
            [['firstName'], 'string', 'max' => 20],
            [['surname'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'firstName' => 'First Name',
            'surname' => 'Surname',
            'dateOfBirth' => 'Date Of Birth',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getActivities()
    {
        return $this->hasMany(Activity::className(), ['instructor_id' => 'id']);
    }
}
