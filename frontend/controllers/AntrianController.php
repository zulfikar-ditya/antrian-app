<?php

namespace frontend\controllers;

use Yii;
use common\models\AntrianPoli;
use common\models\Pasien;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * AntrianController implements the CRUD actions for AntrianPoli model.
 */
class AntrianController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            \yii\behaviors\TimestampBehavior::className(),
            'access' => [
                'class' => \yii\filters\AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['index', 'create', 'view', 'update',],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                // 'actions' => [
                //     'delete' => ['POST'],
                // ],
            ],
        ];
    }

    public function checkPasienOrNot()
    {
        $user = Yii::$app->user->identity->id;
        $pasien = Pasien::find()->where([
            'user_id' => $user,
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
    }

    public function checkAntrianSaya($data)
    {
        $pasien = $this->checkPasienOrNot()['data'];
        if($data->pasien_id == $pasien->id) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Lists all AntrianPoli models.
     * @return mixed
     */
    public function actionIndex()
    {
        if($this->checkPasienOrNot()['success']) {
            $pasien = $this->checkPasienOrNot();
            $dataProvider = new ActiveDataProvider([
                'query' => AntrianPoli::find()->where(['pasien_id' => $pasien['data']['id']]),
            ]);
    
            return $this->render('index', [
                'dataProvider' => $dataProvider,
            ]);
        } else {
            throw new \yii\web\ForbiddenHttpException('Anda Tidak termasuk ke dalam data pasien');
        }
    }

    /**
     * Displays a single AntrianPoli model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        if($this->checkPasienOrNot()['success']) {
            $model = $this->findModel($id);
            if($this->checkAntrianSaya($model)){
                return $this->render('view', [
                    'model' => $model,
                ]);
            } else {
                throw new \yii\web\NotFoundHttpException('Data Tidak Ditemukan');
            }
        } else {
            throw new \yii\web\ForbiddenHttpException('Anda Tidak termasuk ke dalam data pasien');
        }
    }

    /**
     * Creates a new AntrianPoli model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        if($this->checkPasienOrNot()['success']) {
            $model = new AntrianPoli();
    
            if ($model->load(Yii::$app->request->post())) {
                $model->pasien_id = $this->checkPasienOrNot()['data']['id'];
                $model->urutan = (string)$model->getSetUrutanTerakhir($model->tgl_antrian, $model->poli_id);
                // $model->status = 1;
                $model->save();
                return $this->redirect(['view', 'id' => $model->id]);
            }
    
            return $this->render('create', [
                'model' => $model,
            ]);
        } else {
            throw new \yii\web\ForbiddenHttpException('Anda Tidak termasuk ke dalam data pasien');
        }
    }

    /**
     * Updates an existing AntrianPoli model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        if($this->checkPasienOrNot()['success']) {
            $model = $this->findModel($id);
            if($this->checkAntrianSaya($model)) {
                if ($model->load(Yii::$app->request->post()) && $model->save()) {
                    return $this->redirect(['view', 'id' => $model->id]);
                }
        
                return $this->render('update', [
                    'model' => $model,
                ]);
            } else {
                throw new \yii\web\NotFoundHttpException('Data tidak ditemukan.');
            }
        } else {
            throw new \yii\web\ForbiddenHttpException('Anda Tidak termasuk ke dalam data pasien');
        }

    }

    /**
     * Deletes an existing AntrianPoli model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    // public function actionDelete($id)
    // {
    //     if($this->checkPasienOrNot()['success']) {

    //         $data = $this->findModel($id);
    //         if($this->checkAntrianSaya($data)) {
    //             $data->delete();
    //             return $this->redirect(['index']);
    //         } else {
    //             throw new \yii\web\NotFoundHttpException('Data tidak ditemukan.');
    //         }
    //     } else {
    //         throw new \yii\web\ForbiddenHttpException('Anda Tidak termasuk ke dalam data pasien');
    //     }
    // }

    /**
     * Finds the AntrianPoli model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return AntrianPoli the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = AntrianPoli::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
