<?php 

namespace frontend\controllers\API;

use yii\rest\Controller;
use common\models\Poli;
use Yii;

class PoliController extends Controller
{
    public function actionIndex()
    {
        Yii::$app->response->format = \yii\web\response::FORMAT_JSON;
        return [
            'data' => Poli::find()->all(),
            'success' => true,
            'message' => ''
        ];
    }
}