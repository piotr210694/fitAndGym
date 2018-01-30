<?php

namespace app\controllers;

use Yii;
use app\models\Calendar;
use app\models\Takepart;
use app\models\CalendarSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

use yii\filters\AccessControl;

/**
 * CalendarUserController implements the CRUD actions for Calendar model.
 */
class CalendarUserController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'index'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                    [
                        'actions' => ['index'],
                        'allow' => false,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['index'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Calendar models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new CalendarSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        $user_id = Yii::$app->user->getId();
        // $activities = Yii::$app->takepart->getId();
        //bierzemy zajecia do ktorych zapisany jest dany user
        $activities = Takepart::find()->where(['user_id' => $user_id ])->all();


        // $calendar = Calendar::find()->all();
        //bierzemy z kalendarza wszystkie te aktywnosci
        $calendar = Calendar::find()->where(['activity_id' => $activities])->all();

        $events = array();
        foreach ($calendar as $activity)
        {
            $Event = new \yii2fullcalendar\models\Event();
            $Event->id = $activity->id;
            $Event->title = 
                "\nzajęcia: ". $activity->getActivityName() . 
                "\nsala: " . $activity->getRoomNumber();
            //$Event->start = date('Y-m-d\TH:i:s\Z');
            $Event->start = $activity->date;
            
            $events[] = $Event;
        }


        // //Testing
        // $Event = new \yii2fullcalendar\models\Event();
        // $Event->id = 1;
        // $Event->title = 'Testing';
        // $Event->start = date('Y-m-d\TH:i:s\Z');
 
        // $events[] = $Event;
      
        // $Event = new \yii2fullcalendar\models\Event();
        // $Event->id = 2;
        // $Event->title = 'Testing';
        // $Event->start = date('Y-m-d\TH:i:s\Z',strtotime('tomorrow 6am'));
        // $events[] = $Event;
      


        return $this->render('index', [
            'searchModel' => $searchModel,
            //'dataProvider' => $dataProvider,
            'events' => $events,
        ]);
    }

    /**
     * Displays a single Calendar model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Calendar model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Calendar();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Calendar model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Calendar model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Calendar model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Calendar the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Calendar::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
