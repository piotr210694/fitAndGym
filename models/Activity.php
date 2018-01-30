<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "activity".
 *
 * @property integer $id
 * @property integer $name
 * @property integer $instructor_id
 * @property integer $typeActivity_id
 * @property string $describeActivtity
 *
 * @property Typeactivity $typeActivity
 * @property Instructor $instructor
 * @property Calendar[] $calendars
 * @property Takepart[] $takeparts
 */
class Activity extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'activity';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'instructor_id', 'typeActivity_id'], 'required'],
            [['instructor_id', 'typeActivity_id'], 'integer'],
            [['describeActivtity'], 'string'],
            [['typeActivity_id'], 'exist', 'skipOnError' => true, 'targetClass' => Typeactivity::className(), 'targetAttribute' => ['typeActivity_id' => 'id']],
            [['instructor_id'], 'exist', 'skipOnError' => true, 'targetClass' => Instructor::className(), 'targetAttribute' => ['instructor_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'instructor_id' => 'Instructor ID',
            'typeActivity_id' => 'Type Activity ID',
            'describeActivtity' => 'Describe Activtity',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTypeActivity()
    {
        return $this->hasOne(Typeactivity::className(), ['id' => 'typeActivity_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInstructor()
    {
        return $this->hasOne(Instructor::className(), ['id' => 'instructor_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCalendars()
    {
        return $this->hasMany(Calendar::className(), ['activity_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTakeparts()
    {
        return $this->hasMany(Takepart::className(), ['activity_id' => 'id']);
    }
}
