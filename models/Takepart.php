<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "takepart".
 *
 * @property integer $id
 * @property integer $user_id
 * @property integer $activity_id
 *
 * @property Users $user
 * @property Activity $activity
 */
class Takepart extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'takepart';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'activity_id'], 'required'],
            [['user_id', 'activity_id'], 'integer'],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => Users::className(), 'targetAttribute' => ['user_id' => 'id']],
            [['activity_id'], 'exist', 'skipOnError' => true, 'targetClass' => Activity::className(), 'targetAttribute' => ['activity_id' => 'id']],
            [['activity_id', 'user_id'], 'unique','targetAttribute' => ['activity_id', 'user_id'], 'targetClass' => '\app\models\Takepart', 'message' => 'Już bierzesz udział w tych zajęciach!']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'activity_id' => 'Activity ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(Users::className(), ['id' => 'user_id']);
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


    ///
    public function alertTest() {
        
            Yii::$app->session->setFlash('alert-success', 'IP адресът беше успешно блокиран.');
 
    }
}
