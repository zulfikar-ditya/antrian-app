<?php

namespace frontend\controllers\API;

use Yii;

trait AuthCheck
{
    public function checkAuthStatus()
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
                'message' => 'Anda sudah login.',
            ];
        }
    }
}