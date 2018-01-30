<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "calendar".
 *
 * @property integer $id
 * @property string $date
 * @property integer $activity_id
 * @property integer $room_id
 *
 * @property Activity $activity
 * @property Room $room
 */
class Calendar extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'calendar';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['date', 'activity_id', 'room_id'], 'required'],
            [['date'], 'safe'],
            [['activity_id', 'room_id'], 'integer'],
            [['activity_id'], 'exist', 'skipOnError' => true, 'targetClass' => Activity::className(), 'targetAttribute' => ['activity_id' => 'id']],
            [['room_id'], 'exist', 'skipOnError' => true, 'targetClass' => Room::className(), 'targetAttribute' => ['room_id' => 'id']],
            [['date', 'room_id'], 'unique','targetAttribute' => ['date', 'room_id'], 'targetClass' => '\app\models\Calendar', 'message' => 'Ta sala o tej godzinie jest już zajęta!']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'date' => 'Date',
            'activity_id' => 'Activity ID',
            'room_id' => 'Room ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getActivity()
    {
        return $this->hasOne(Activity::className(), ['id' => 'activity_id']);
    }

    public function getActivityName()
    {
        return $this->activity->name;
    }



    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRoom()
    {
        return $this->hasOne(Room::className(), ['id' => 'room_id']);
    }

    public function getRoomNumber()
    {
        return $this->room->number;
    }
}
