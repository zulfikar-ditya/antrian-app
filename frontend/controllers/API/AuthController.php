<?php 

namespace frontend\controllers\API;

use common\models\LoginForm;
use Yii;
use yii\rest\Controller;

class AuthController extends Controller
{
    public function actionLogin()
    {
        Yii::$app->response->format = \yii\web\response::FORMAT_JSON;
        if (!Yii::$app->user->isGuest) {
            return [
                'message' => 'Anda sudah login.',
                'success' => false
            ];
        }

        $model = new LoginForm();
        if (Yii::$app->request->isPost) {
            $model->load(Yii::$app->request->post());
            $model->login();
            if ($model->hasErrors()) {
                return [
                    'success' => false, 
                    'message' => $model->getErrors()
                ];
            } else {
                return [
                    'success' => true,
                    'message' => 'Login Success',
                ];
            }
        } else {
            return [
                'success' => false,
                'message' => 'Method Not Allowed.',
            ];
        }
    }

    public function actionCheckLogin()
    {
        Yii::$app->response->format = \yii\web\response::FORMAT_JSON;
        if(Yii::$app->user->isGuest) {
            return [
                'success' => false,
                'message' => 'Anda belum login.',
            ];
        } else {
            return [
                'success' => true,
                'message' => 'Anda Sudah login.',
            ];
        }
    }

    public function actionLogout()
    {
        if(Yii::$app->request->isPost) {
            $login_status = $this->actionCheckLogin();
            if($login_status['success'] == false) {
                return [
                    'success' => false,
                    'message' => 'Anda belum login.',
                ];
            }
            Yii::$app->user->logout();
            return [
                'success' => false,
                'message' => 'Anda berhasil logout.'
            ];
        } else {
            return [
                'success' => false,
                'message' => 'Method not allowed'
            ];
        }
    }
}