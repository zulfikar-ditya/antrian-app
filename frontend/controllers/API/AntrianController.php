<?php

namespace frontend\controllers\API;

use yii\rest\Controller;
use common\models\AntrianNow;
use common\models\AntrianPoli;
use Error;
use Yii;

class AntrianController extends Controller
{
    public function actionCreateAntrian()
    {
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        $antrian = new AntrianPoli();
        if (Yii::$app->request->isPost) {
            $antrian->load(Yii::$app->request->post(), 'Antrian');
            $antrian->save();
            if ($antrian->hasErrors()) {
                return [
                    'success' => false,
                    'message' => $antrian->getErrors()
                ];
            }
            return [
                'success' => true,
                'message' => 'Berhasil Menambahkan Data.',
            ];
        }
        return [
            'success' => false,
            'message' => 'Method Not allowed',
        ];
    }

    public function actionAntrianSaya()
    {

    }

    public function actionRiwayatAntrian()
    {

    }

    public function actionView($id)
    {

    }

    public function actionGetAntrianNow()
    {

    }

    public function actionDelete($id)
    {

    }
}