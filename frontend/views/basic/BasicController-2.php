<?php

namespace frontend\controllers;
use yii\web\Controller;
use yii\db\Query;
use yii\data\ActiveDataProvider;
class BasicController extends Controller{
    public function actionIndex(){
        echo "Merhabalaaaar";
    }
    public function actionMerhaba(){
        echo "Merhaba";
    }
    public function actionUsers(){
        $query = new Query();
        $provider = new ActiveDataProvider([
        'query' => $query->from('user'),
            'sort' => new \yii\data\Sort([
                'attributes' => [
                    'email',
                    'username',
                ]
            ]),
            'pagination' => [
                'pageSize' => 20,
            ],
        ]);
        $data ["provider"]=$provider;
        
       return $this->render("users",$data);
    }
    }