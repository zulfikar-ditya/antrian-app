<?php

namespace frontend\controllers\API;

use yii\rest\Controller;
use common\models\AntrianNow;
use common\models\AntrianPoli;
use common\models\Pasien;
use Yii;

class AntrianController extends Controller
{
    use AuthCheck;
    public function actionCreateAntrian()
    {
        if($this->checkLogin()['success']) {
            if($this->checkPasienOrNot()) {
                \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
                $antrian = new AntrianPoli();
                if (Yii::$app->request->isPost) {
                    $antrian->load(Yii::$app->request->post(), 'Antrian');
                    $antrian->pasien_id = $this->checkPasienOrNot()['data']['id'];
                    $antrian->urutan = (string)$antrian->getSetUrutanTerakhir($antrian->tgl_antrian);
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
                    'message' => 'Method not allowed.',
                ];
            } else {
                return $this->checkPasienOrNot();
            }
        } else {
            return $this->checkLogin();
        }
    }

    public function actionAntrianSaya()
    {
        Yii::$app->response->format = \yii\web\response::FORMAT_JSON;
        if (!$this->checkLogin()['success']) {
            return $this->checkLogin();
        } else {
            $pasien = $this->checkPasienOrNot();
            if ($pasien['success']) {
                $data = AntrianPoli::find()->where([
                    'pasien_id' => $pasien['data']['id'],
                    'status' => 0
                ])->all();
                return [
                    'data' => $data,
                    'success' => true,
                    'message' => 'Berhasil mendapatkan data.'
                ];
            } else {
                return $pasien;
            }
        }
    }

    public function actionRiwayatAntrian()
    {
        Yii::$app->response->format = \yii\web\response::FORMAT_JSON;
        if(!$this->checkLogin()['success']) {
            return $this->checkLogin();
        } else {
            $pasien = $this->checkPasienOrNot();
            $data = AntrianPoli::find()->where([
                'pasien_id' => $pasien['data']['id'],
                'status' => 1,
            ])->all();
            return [
                'data' => $data,
                'success' => true,
                'message' => 'Berhasil mendapatkan data.'
            ];
        }
    }

    public function actionView($id)
    {
        Yii::$app->response->format = \yii\web\response::FORMAT_JSON;
        $data = AntrianPoli::findOne($id);
        if($data != null) {
            if($this->checkAntrianSaya($data)) {
                return [
                    'success' => true,
                    'message' => '',
                    'data' => $data,
                ];
            } else {
                return [
                    'success' => false,
                    'message' => 'Data tidak ditemukan.'
                ];
            }
        } else {
            return [
                'success' => false,
                'message' => 'Data tidak ditemukan.'
            ];
        }
    }

    public function actionGetAntrianNow()
    {
        Yii::$app->response->format = \yii\web\response::FORMAT_JSON;
        if($this->checkLogin()) {
            $antrianNow = new AntrianNow();
            $data = $antrianNow->getAntrianNowUntukHariIni();
            return [
                'success' => true,
                'message' => '',
                'data' => $data,
            ];
        } else {
            return $this->checkLogin();
        }
    }

    public function actionDelete($id)
    {
        $data = AntrianPoli::findOne($id);
        if($data != null) {
            if($this->checkAntrianSaya($data)){
                $data->delete();
                return [
                    'success' => true,
                    'message' => 'Berhasil menghapus data',
                ];
            }  else {
                return [
                    'success' => false,
                    'message' => 'Data tidak ditemukan.'
                ];
            }
        } else {
            return [
                'success' => false,
                'message' => 'Data tidak ditemukan.'
            ];
        }
    }

    public function checkPasienOrNot()
    {
        if($this->checkLogin()) {
            $user_id = Yii::$app->user->identity->id;
            $pasien = Pasien::find()->where([
                'user_id' => $user_id
            ])->one();
    
            if ($pasien == null) {
                return [
                    'success' => false,
                    'message' => 'Anda tidak termasuk ke dalam Pasien',
                ];
            } else {
                return [
                    'success' => true,
                    'message' => '',
                    'data' => $pasien
                ];
            }
        } else {
            $this->checkLogin();
        }
    }

    public function checkLogin()
    {
        return $this->checkAuthStatus();
    }

    public function checkAntrianSaya($data) 
    {
        if(!$this->checkLogin()['success']) {
            return $this->checkLogin();
        } else {
            if($this->checkPasienOrNot()['success']) {
                $pasien = $this->checkPasienOrNot()['data'];
                if($data->pasien_id == $pasien->id) {
                    return true;
                } else {
                    return false;
                }
            } else {
                return $this->checkPasienOrNot();
            }
        }
    }
}