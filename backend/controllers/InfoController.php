<?php

namespace backend\controllers;

use Yii;
use common\models\Info;
use common\models\Query\Info as InfoSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * InfoController implements the CRUD actions for Info model.
 */
class InfoController extends Controller
{
    public function beforeAction($action) 
    {
        if (Yii::$app->user->isGuest) {
            return $this->redirect(['site/login']);
        } else {
            Yii::$app->CheckRole->trigger(
                \common\components\BackendMiddleware::CheckAdminOrNot
            );
            return true;
        }
    }
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
                        'actions' => ['index', 'create', 'view', 'update', 'delete'],
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
     * Lists all Info models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new InfoSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Info model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Info model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Info();

        if ($model->load(Yii::$app->request->post())) {
            $file = \yii\web\UploadedFile::getInstance($model, 'gambar');
            $name = Yii::$app->security->generateRandomString().'.'.$file->getExtension();
            $imagePath = '/images/info/'.$name;
            $model->gambar = $imagePath;
            $file->saveAs(Yii::getAlias('@frontend').'/web'.$imagePath);
            if($model->save()) {
                return $this->redirect(['view', 'id' => $model->getPrimaryKey()]);
            }
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Info model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $oldImage = $model->gambar;

        if ($model->load(Yii::$app->request->post())) {
            if(\yii\web\UploadedFile::getInstance($model, 'gambar')) {
                $file = \yii\web\UploadedFile::getInstance($model, 'gambar');
                $name = Yii::$app->security->generateRandomString().'.'.$file->getExtension();
                $imagePath = '/images/info/'.$name;
                $model->gambar = $imagePath;
                $file->saveAs(Yii::getAlias('@frontend').'/web'.$imagePath);
                try {
                    unlink(Yii::getAlias('@frontend').'/web'.$oldImage);
                } catch (\Exception $e) {

                }
            }
            // echo '<pre>';
            // return var_dump($model);
            if($model->save()) {
                return $this->redirect(['view', 'id' => $model->getPrimaryKey()]);
            }
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Info model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $data = $this->findModel($id);
        $oldImage = $data->gambar;
        unlink(Yii::getAlias('@frontend').'/web'.$oldImage);
        $data->delete();
        return $this->redirect(['index']);
    }

    /**
     * Finds the Info model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Info the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Info::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
