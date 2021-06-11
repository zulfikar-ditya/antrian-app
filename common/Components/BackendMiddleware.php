<?php

namespace common\components;


use Yii;
use yii\base\Component;

class BackendMiddleware extends Component
{
    // Define A Event
    const CheckSuperuserOrNot = 'checkSuperuser';
    const CheckAdminOrNot = 'checkAdmin';
    const CheckOperatorOrNot = 'checkOperator';
    const CheckDokterOrNot = 'checkDokter';

    public static function AutoCheckSuperuser()
    {
        if (Yii::$app->user->identity->role_id != 1) {
            throw new \yii\web\ForbiddenHttpException('Access Denied.');
        } else {
            return true;
        }
    }

    public static function AutoCheckAdmin()
    {
        if (Yii::$app->user->identity->role_id == 1 || Yii::$app->user->identity->role_id == 2) {
            return true;
        } else {
            throw new \yii\web\ForbiddenHttpException('Access Denied.');
        }
    }

    public static function AutoCheckOperator()
    {
        if (Yii::$app->user->identity->role_id == 1 || Yii::$app->user->identity->role_id == 2 or Yii::$app->user->identity->role_id == 3) {
            return true;
        } else {
            throw new \yii\web\ForbiddenHttpException('Access Denied.');
        }
    }

    public static function AutoCheckDokter()
    {
        if (Yii::$app->user->identity->role_id == 1 || Yii::$app->user->identity->role_id == 2 or Yii::$app->user->identity->role_id == 3 or Yii::$app->user->identity->role_id == 4) {
            return true;
        } else {
            throw new \yii\web\ForbiddenHttpException('Access Denied.');
        }
    }

}

?>