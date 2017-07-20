<?php

namespace backend\controllers;

use yii\rest\ActiveController;
use yii\helpers\ArrayHelper;
use yii\filters\auth\QueryParamAuth;
class GoodsController extends ActiveController
{
    public $modelClass = 'backend\models\Goods';

    public function behaviors() {
    	return ArrayHelper::merge (parent::behaviors(), [ 
                'authenticator' => [ 
                    'class' => QueryParamAuth::className(),
                	'tokenParam' => 'token',
                ] 
        ] );
    }

    
}
