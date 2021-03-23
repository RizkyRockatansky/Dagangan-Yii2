<?php

namespace backend\controllers;

use Yii;
use common\models\produk;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * ProdukController implements the CRUD actions for produk model.
 */
class ProdukController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST','get'],
                ],
            ],
        ];
    }

    /**
     * Lists all produk models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => produk::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single produk model.
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
     * Creates a new produk model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new produk();

        if ($model->load(Yii::$app->request->post())) {
            $imageFile = UploadedFile::getInstance($model,'gambar');
            if (isset($imageFile->size)) {
                $imageFile->saveAs('upload/'.$imageFile->baseName.'.'.$imageFile->extension);
            }
            $model->gambar = $imageFile->baseName.'.'.$imageFile->extension;
            $model->save(false);
            return $this->redirect(['view', 'id' => $model->id_produk]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing produk model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {

            $imageFile = UploadedFile::getInstance($model,'gambar');
            if (isset($imageFile->size)) {
                $imageFile->saveAs('upload/'.$imageFile->baseName.'.'.$imageFile->extension);
            }
            $model->gambar = $imageFile->baseName.'.'.$imageFile->extension;
            $model->save(false);
            return $this->redirect(['view', 'id' => $model->id_produk]);
        }
        

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing produk model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the produk model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return produk the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = produk::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
