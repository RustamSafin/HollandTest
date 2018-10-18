<?php

namespace app\controllers;

use app\models\Notification;
use Yii;
use yii\data\ActiveDataProvider;
use yii\web\NotFoundHttpException;

class NotificationController extends \yii\web\Controller
{
    public function actionIndex()
    {
//        $notification=Notification::find()->where(['user_id'=> Yii::$app->user->identity->getId()])->all();
//        $notifications=Notification::find()->where(['<>','user_id',Yii::$app->user->identity->getId()]);
//        $dataProvider = new ActiveDataProvider([
//            'query' => $notifications,
//        ]);
//
//        return $this->render('index', [
//            'dataProvider' => $dataProvider,
//        ]);

    }
    public function actionView($id)
    {
        $noti = $this->findModel($id);
        $noti->active = false;
        $noti->save();
        return $this->render('view', [
            'model' => $noti,
        ]);
    }
    protected function findModel($id)
    {
        if (($model = Notification::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

}
