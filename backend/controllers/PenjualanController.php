<?php

namespace backend\controllers;

use Yii;
use common\models\penjualan;
use common\models\PenjualanSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use mPDF;
use Mpdf\Mpdf as MpdfMpdf;

/**
 * PenjualanController implements the CRUD actions for penjualan model.
 */
class PenjualanController extends Controller
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
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all penjualan models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PenjualanSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single penjualan model.
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

    public function actionGenPdf($id)
    {
        $pdf_content = $this->renderPartial('view-pdf', [
            'model' => $this->findModel($id),
        ]);

            $mpdf = new  \Mpdf\Mpdf();
            $mpdf->writeHTML($pdf_content);
            $mpdf->Output();
            exit;
    }

    /**
     * Creates a new penjualan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new penjualan();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_penjualan]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing penjualan model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_penjualan]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing penjualan model.
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
     * Finds the penjualan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return penjualan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = penjualan::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    //export PDF
    public function actionExportPdf()
    {
     

        $searchModel = new PenjualanSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $html = $this->renderPartial('_penjualanPDF',['dataProvider'=>$dataProvider]);
        $mpdf=new \Mpdf\Mpdf(); 
        $mpdf->SetDisplayMode('fullpage');
        $mpdf->list_indent_first_level = 0;  // 1 or 0 - whether to indent the first level of a list
        $mpdf->WriteHTML($html);
        $mpdf->Output();
        exit;
    }

    public function actionExportExcel2()
    {
        $searchModel = new PenjualanSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        
        // Initalize the TBS instance
        $OpenTBS = new \hscstudio\export\OpenTBS; // new instance of TBS
        // Change with Your template kaka
		$template = Yii::getAlias('@hscstudio/export').'/templates/opentbs/data-penjualan.xlsx';
        $OpenTBS->LoadTemplate($template); // Also merge some [onload] automatic fields (depends of the type of document).
        //$OpenTBS->VarRef['modelName']= "Mahasiswa";				
        $data = [];
        $no=1;
        foreach($dataProvider->getModels() as $pnjl){
            $data[] = [
                'no'=>$no++,
                'created_at'=>$pnjl->created_at,
                'time_at'=>$pnjl->time_at,
                'nama_produk'=>$pnjl->nama_produk,
                'harga'=>$pnjl->harga,
                'bayar'=>$pnjl->bayar,
                'kembalian'=>$pnjl->kembalian,
                'metode'=>$pnjl->metode,
            ];
        }
        
      
        $OpenTBS->MergeBlock('data', $data);
      
        // Output the result as a file on the server. You can change output file
        $OpenTBS->Show(OPENTBS_DOWNLOAD, 'export_penjualan.xlsx'); // Also merges all [onshow] automatic fields.			
        exit;
    } 

    public function actionExportWord()
    {
        $searchModel = new PenjualanSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        
        // Initalize the TBS instance
        $OpenTBS = new \hscstudio\export\OpenTBS; // new instance of TBS
        // Change with Your template kaka
		$template = Yii::getAlias('@hscstudio/export').'/templates/opentbs/ms-word.docx';
        $OpenTBS->LoadTemplate($template); // Also merge some [onload] automatic fields (depends of the type of document).
        //$OpenTBS->VarRef['modelName']= "Mahasiswa";				
        $data = [];
        $no=1;
        foreach($dataProvider->getModels() as $pnjl){
            $data[] = [
                'no'=>$no++,
                'created_at'=>$pnjl->created_at,
                'time_at'=>$pnjl->time_at,
                'nama_produk'=>$pnjl->nama_produk,
                'harga'=>$pnjl->harga,
                'bayar'=>$pnjl->bayar,
                'kembalian'=>$pnjl->kembalian,
                'metode'=>$pnjl->metode,
            ];
        }
        $OpenTBS->MergeBlock('data', $data);
        // Output the result as a file on the server. You can change output file
        $OpenTBS->Show(OPENTBS_DOWNLOAD, 'Penjualan_export.docx'); // Also merges all [onshow] automatic fields.			
        exit;
    } 
    
}
