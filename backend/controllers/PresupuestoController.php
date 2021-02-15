<?php

namespace backend\controllers;

use Yii;
use common\models\Presupuesto;
use backend\models\PresupuestoSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use kartik\mpdf\Pdf;


/**
 * PresupuestoController implements the CRUD actions for Presupuesto model.
 */
class PresupuestoController extends Controller
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
     * Lists all Presupuesto models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PresupuestoSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Presupuesto model.
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
     * Creates a new Presupuesto model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Presupuesto();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Presupuesto model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Presupuesto model.
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
     * Finds the Presupuesto model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Presupuesto the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Presupuesto::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionImprimirpresupuesto(){  
        $searchModel = new PresupuestoSearch();
        //$dataProvider = isset(Yii::$app->session['dataProviderOT']) ? Yii::$app->session['dataProviderOT'] : '';
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        $dataProvider->pagination = false;
        
        date_default_timezone_set('America/Argentina/Buenos_Aires');
        setlocale(LC_TIME, "es_AR");
    
    // setup kartik\mpdf\Pdf component
    $pdf = new Pdf([
        // set to use core fonts only
        'mode' => Pdf::MODE_BLANK, //MODE_CORE - MODE_BLANK,
        // A4 paper format
        'format' => Pdf::FORMAT_A4, 
        // portrait orientation
        'orientation' => Pdf::ORIENT_PORTRAIT, //ORIENT_LANDSCAPE,
        'marginTop' => 25,
        // fuente por defecto
        'defaultFontSize' => 7,
        // stream to browser inline
        'destination' => Pdf::DEST_BROWSER,
        // your html content input
        'content' => $this->renderPartial('presupuesto', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]),


        // format content from your own css file if needed or use the
        // enhanced bootstrap css built by Krajee for mPDF formatting 
        //'cssFile' => '@vendor/kartik-v/yii2-mpdf/assets/kv-mpdf-bootstrap.min.css',
        // any css to be embedded if required
        //'cssInline' => '.kv-heading-1{font-size:18px}',
         // set mPDF properties on the fly
        'options' => ['title' => 'Presupuesto'],
         // call mPDF methods on the fly
        'methods' => [ 
            'SetHeader'=>['Mi aplicacion'], 
            'SetFooter'=>['Generado el {DATE d/m/Y} - Pág.{PAGENO}'],
        ]
    ]);

    // return the pdf output as per the destination setting
    return $pdf->render();
    }
}
