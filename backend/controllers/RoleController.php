<?php

namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;

class RoleController extends Controller
{
 public function actionRole()
 {
     /*$admin = Yii::$app->authManager->createRole('admin');
     $admin->description = 'Администратор';
     Yii::$app->authManager->add($admin);*/

    /* $manager = Yii::$app->authManager->createRole('manager');
     $manager->description = 'Менеджер';
     Yii::$app->authManager->add($manager);*/

    /* $prepod = Yii::$app->authManager->createRole('prepod');
     $prepod->description = 'Преподаватель';
     Yii::$app->authManager->add($prepod);*/

     /*$permit = Yii::$app->authManager->createPermission('Adminka');
     $permit->description = 'Вход в админку';
     Yii::$app->authManager->add($permit);*/

    /* $role_a = Yii::$app->authManager->getRole('admin');
     $role_m = Yii::$app->authManager->getRole('manager');
     $permit = Yii::$app->authManager->getPermission('Adminka');
     Yii::$app->authManager->addChild($role_a, $permit);
     Yii::$app->authManager->addChild($role_m, $permit);*/

     /*$userRole = Yii::$app->authManager->getRole('admin');
     Yii::$app->authManager->assign($userRole, 1);*/

     /*$userRole = Yii::$app->authManager->getRole('manager');
     Yii::$app->authManager->assign($userRole, 2);*/

     return 123;
 }
}
