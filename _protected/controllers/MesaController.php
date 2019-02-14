<?php

namespace app\controllers;

use app\models\base\MesaInvitado;
use app\models\Invitado;
use Yii;
use app\models\Mesa;
use app\models\MesaSearch;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * MesaController implements the CRUD actions for Mesa model.
 */
class MesaController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
            'access' => [
                'class' => \yii\filters\AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'actions' => ['index', 'view', 'create', 'update', 'delete', 'save-as-new', 'add-mesa-invitado','invitado_mesa'],
                        'roles' => ['@']
                    ],
                    [
                        'allow' => false
                    ]
                ]
            ]
        ];
    }

    /**
     * Lists all Mesa models.
     * @return mixed
     */
    public function actionIndex()
    {
        $id_boda = Yii::$app->user->id;
        $searchModel = new MesaSearch();
        $searchModel->id_boda = $id_boda;
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        $cant_sin_mesa =  Invitado::find()->leftJoin('mesa_invitado', 'invitado.id = mesa_invitado.id_invitado')
            ->leftJoin('mesa', 'mesa.id = mesa_invitado.id_mesa')
            ->andFilterWhere([ 'id' => $searchModel->id, 'invitado.id_boda' => $id_boda, ])
            ->andFilterWhere(['<=', 'invitado.id_confirmacion', 1])
            ->andFilterWhere(['invitado.id_boda' => $id_boda ])
            ->andWhere(['mesa_invitado.id_mesa' => null])
            ->count();

        $cant_con_mesa =  Invitado::find()->leftJoin('mesa_invitado', 'invitado.id = mesa_invitado.id_invitado')
            ->leftJoin('mesa', 'mesa.id = mesa_invitado.id_mesa')
            ->andFilterWhere([ 'id' => $searchModel->id, 'invitado.id_boda' => $id_boda, ])
            ->andFilterWhere(['<=', 'invitado.id_confirmacion', 1])
            ->andFilterWhere(['invitado.id_boda' => $id_boda ])
            ->andWhere(['not', ['mesa_invitado.id_mesa' => null]])
            ->count();

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'cant_sin_mesa' => $cant_sin_mesa,
            'cant_con_mesa' => $cant_con_mesa,
        ]);
    }

    /**
     * Lists all Mesa models.
     * @return mixed
     */
    public function actionInvitado_mesa($tipo)
    {
        $id_boda = Yii::$app->user->id;
        $searchModel = new MesaInvitado();

        $query = Invitado::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $searchModel->load(Yii::$app->request->queryParams);

        $query->leftJoin('mesa_invitado', 'invitado.id = mesa_invitado.id_invitado');
        $query->leftJoin('mesa', 'mesa.id = mesa_invitado.id_mesa');
        $query->andFilterWhere(['id' => $searchModel->id,'invitado.id_boda' => $id_boda,]);
        $query->andFilterWhere(['<=', 'invitado.id_confirmacion', 1]);
        $query->andFilterWhere(['invitado.id_boda' => $id_boda ]);
        if ($tipo == 0) {
            $query->andWhere(['mesa_invitado.id_mesa' => null]);
            $titulo = 'Invitados sin Mesa';
            $query->orderBy(['nombre' => SORT_ASC]);
        } else {
            $query->andWhere(['not', ['mesa_invitado.id_mesa' => null]]);
            $titulo = 'Invitados con Mesa';
            $query->orderBy(['id_mesa' => SORT_ASC]);
        }

        $cant_sin_mesa =  Invitado::find()->leftJoin('mesa_invitado', 'invitado.id = mesa_invitado.id_invitado')
            ->leftJoin('mesa', 'mesa.id = mesa_invitado.id_mesa')
            ->andFilterWhere([ 'id' => $searchModel->id, 'invitado.id_boda' => $id_boda, ])
            ->andFilterWhere(['<=', 'invitado.id_confirmacion', 1])
            ->andFilterWhere(['invitado.id_boda' => $id_boda ])
            ->andWhere(['mesa_invitado.id_mesa' => null])
            ->count();

        $cant_con_mesa =  Invitado::find()->leftJoin('mesa_invitado', 'invitado.id = mesa_invitado.id_invitado')
            ->leftJoin('mesa', 'mesa.id = mesa_invitado.id_mesa')
            ->andFilterWhere([ 'id' => $searchModel->id, 'invitado.id_boda' => $id_boda, ])
            ->andFilterWhere(['<=', 'invitado.id_confirmacion', 1])
            ->andFilterWhere(['invitado.id_boda' => $id_boda ])
            ->andWhere(['not', ['mesa_invitado.id_mesa' => null]])
            ->count();

        return $this->render('invitado_mesa', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'titulo' => $titulo,
            'cant_sin_mesa' => $cant_sin_mesa,
            'cant_con_mesa' => $cant_con_mesa,
        ]);
    }

    /**
     * Displays a single Mesa model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        $model = $this->findModel($id);
        $providerMesaInvitado = new \yii\data\ArrayDataProvider([
            'allModels' => $model->mesaInvitados,
        ]);
        if (Yii::$app->request->isAjax) {
            return $this->renderAjax('view', [
                'model' => $this->findModel($id),
                'providerMesaInvitado' => $providerMesaInvitado,
            ]);
        } else {
            return $this->render('view', [
                'model' => $this->findModel($id),
                'providerMesaInvitado' => $providerMesaInvitado,
            ]);
        }
    }

    /**
     * Creates a new Mesa model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Mesa();

        if ($model->loadAll(Yii::$app->request->post()) && $model->saveAll()) {
            return $this->redirect(['index']);
        } else {
            /*$id_boda = Yii::$app->user->id;
            $model->id_boda = $id_boda;
            if (sizeof(Mesa::find()->where(['id_boda' => $id_boda])->orderBy(['id' => SORT_DESC])->one()) > 0) {
                $model->id = Mesa::find()->where(['id_boda' => $id_boda])->orderBy(['id' => SORT_DESC])->one()->id + 1;
            } else {
                $model->id = 1;
            }
            if (sizeof(Mesa::find()->where(['id_boda' => $id_boda])->orderBy(['id' => SORT_DESC])->one()) > 0) {
                $model->numero = Mesa::find()->where(['id_boda' => $id_boda])->orderBy(['id' => SORT_DESC])->one()->numero + 1;
                $model->nombre = "Mesa ".$model->numero;
            } else {
                $model->numero = 1;
            }*/
            $model->id = Mesa::find()->orderBy(['id' => SORT_DESC])->one()->id + 1;
            $id_boda = Yii::$app->user->id;
            $model->id_boda = $id_boda;
            if (Yii::$app->request->isAjax) {
                return $this->renderAjax('create', [
                    'model' => $model,
                ]);
            } else {
                return $this->render('create', [
                    'model' => $model,
                ]);
            }
            }
    }

    /**
     * Updates an existing Mesa model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $id_boda = Yii::$app->user->id;
        if (Yii::$app->request->post('_asnew') == '1') {
            $model = new Mesa();
        } else {
            $model = $this->findModel($id);
        }

        if ($model->loadAll(Yii::$app->request->post()) && $model->saveAll()) {
            return $this->redirect(['index']);
        } else {
            if (Yii::$app->request->isAjax) {
                return $this->renderAjax('update', [
                    'model' => $model,
                ]);
            } else {
                return $this->render('update', [
                    'model' => $model,
                ]);
            }
        }
    }

    /**
     * Deletes an existing Mesa model.
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
     * Creates a new Mesa model by another data,
     * so user don't need to input all field from scratch.
     * If creation is successful, the browser will be redirected to the 'view' page.
     *
     * @param mixed $id
     * @return mixed
     */
    public function actionSaveAsNew($id)
    {
        $model = new Mesa();
        $id_boda = Yii::$app->user->id;

        if (Yii::$app->request->post('_asnew') != '1') {
            $model = $this->findModel($id);
        }
        if ($model->loadAll(Yii::$app->request->post()) && $model->saveAll()) {
            return $this->redirect(['view', 'id' => $model->id, 'id_boda' => $model->id_boda]);
        } else {
            if (Yii::$app->request->isAjax) {
                return $this->renderAjax('saveAsNew', [
                    'model' => $model,
                ]);
            } else {
                return $this->render('saveAsNew', [
                    'model' => $model,
                ]);
            }
        }
    }

    /**
     * Finds the Mesa model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Mesa the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Mesa::findOne(['id' => $id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    /**
     * Action to load a tabular form grid
     * for MesaInvitado
     * @author Yohanes Candrajaya <moo.tensai@gmail.com>
     * @author Jiwantoro Ndaru <jiwanndaru@gmail.com>
     *
     * @return mixed
     */
    public function actionAddMesaInvitado()
    {
        if (Yii::$app->request->isAjax) {
            $row = Yii::$app->request->post('MesaInvitado');
            if ((Yii::$app->request->post('isNewRecord') && Yii::$app->request->post('_action') == 'load' && empty($row)) || Yii::$app->request->post('_action') == 'add') {
                $row[] = [];
            }
            return $this->renderAjax('_formMesaInvitado', ['row' => $row]);
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
