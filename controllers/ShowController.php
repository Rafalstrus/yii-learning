<?php

namespace app\controllers;


use Yii;
use yii\web\Controller;
use yii\data\Pagination;
use app\models\Sprawdz;
use app\models\EntryForm;




class ShowController extends Controller
{
    public function actionIndex()
    {
        $query = Sprawdz::find();

        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);

        $table = $query->orderBy('imie')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        /*return $this->render('index', [
            'table' => $table,
            'pagination' => $pagination,
        ]);*/

        return $this->render('show-rows.tpl', [
            'table' => $table,
            'pagination' => $pagination
        ]);

        // [
        //     'table' => $table,
        //     'pagination' => $pagination,
        // ]);
    }
    //pamietaj, ze nazwa funkcji to nazwa podstrony
    public function actionShowRowPhp(){
        $query = Sprawdz::find();

        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);

        $table = $query->orderBy('imie')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
        return $this->render('show-row-php', [
            'table' => $table,
            'pagination' => $pagination,
        ]);
    }
    public function actionAdd()
    {
        $model = new EntryForm();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $query = Sprawdz::find();

            $query->createCommand()->insert('sprawdz', [
                'imie' => $model->name,
                'email' => $model->email,
            ])->execute();

            return $this -> render('add-confirm',['model' => $model]);
        }else{
            return $this->render('add', ['model' => $model]);
        }
        
    }
}