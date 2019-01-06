<?php

namespace console\controllers;

use yii\console\Controller;
 class BasicController extends Controller{
 public function actionIndex(){
  $users = \Yii::$app->db
           ->createCommand('SELECT * FROM user;')
           ->queryAll();
            print_r($user);
 }
 public function actionUser(){

   \Yii::$app->db
                // INSERT ( tablename, [ attributes => attr ] )
        \Yii::$app->db
        ->createCommand()
        ->insert('user', [
        'email' => 'test4@example.com',
        'password' => 'changeme7',
        'username' => 'Test',
        'created_at' => time(),
        'updated_at' => time(),
        'acces_token' => md5(time())
        ])
        ->execute();
 }

// var_dump($user);
 }







 