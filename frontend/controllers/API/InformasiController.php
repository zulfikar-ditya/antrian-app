<?php

namespace frontend\controllers\API;

use yii\rest\Controller;
use Yii;

use common\models\Info;
use common\models\InfoKategori;

class InformasiController extends Controller
{
    public function actionIndex($id)
    {
        Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        $kategori = InfoKategori::findOne($id);
        if($kategori == null) {
            return [
                'success' => false, 
                'message' => 'Kategori tidak ditemukan.',
                'data' => null,
            ];
        }
        $data = Info::findOne($kategori->id);
        if ($data == null) {
            return [
                'success' => false,
                'message' => 'Data tidak ditemukan',
                'data' => null
            ];
        }
        return [
            'data' => $data,
            'message' => '',
            'success' => true,
        ];
    }
}