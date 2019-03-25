<?php

namespace app\controllers;

use Yii;
use app\models\Invitado;
use app\models\InvitadoSearch;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * InvitadoController implements the CRUD actions for Invitado model.
 */
class InvitadoController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['index', 'view', 'update', 'create','delete'],
                'rules' => [
                    [
                        'actions' => ['index', 'view', 'update', 'create','delete'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Invitado models.
     * @return mixed
     */
    public function actionIndex($id_confirmacion = 3)
    {
        $id_boda = Yii::$app->user->id;
        $searchModel = new InvitadoSearch();
        $searchModel->id_boda = $id_boda;
        if ($id_confirmacion == 3) {
            $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        } else {
            $searchModel->id_confirmacion = $id_confirmacion;
            $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        }
        $sin_confirmar = Invitado::find()->where(['id_boda' => $id_boda, 'id_confirmacion' => '0'])->count();
        $confirmados = Invitado::find()->where(['id_boda' => $id_boda,'id_confirmacion' => '1'])->count();
        $no_iran = Invitado::find()->where(['id_boda' => $id_boda,'id_confirmacion' => '2'])->count();
        $todos = Invitado::find()->where(['id_boda' => $id_boda])->count();

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'confirmados' => $confirmados,
            'sin_confirmar' => $sin_confirmar,
            'no_iran' => $no_iran,
            'todos' => $todos,
            'id_boda' => $id_boda,
        ]);
    }

    /**
     * Displays a single Invitado model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        //$model = $this->findModel($id);
        return $this->renderAjax('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Invitado model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Invitado();
        $id_boda = Yii::$app->user->id;
        if ($model->loadAll(Yii::$app->request->post())) {
            $model->saveAll();
        //return $this->redirect(['index']);
        } else {
            $last_id = Invitado::find()->orderBy(['id' => SORT_DESC])->one()->id + 1;
            $model->id = $last_id;
            $model->id_boda = $id_boda;
            return $this->renderAjax('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Invitado model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->loadAll(Yii::$app->request->post()) && $model->saveAll()) {
            //return $this->redirect(['view', 'id' => $model->id]);
           // return $this->redirect(['index']);
        } else {
            return $this->renderAjax('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Invitado model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->deleteWithRelated();

        return $this->redirect(['index']);
    }


    /**
     * Finds the Invitado model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Invitado the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Invitado::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
