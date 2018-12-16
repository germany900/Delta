<?php

namespace app\controllers;

use Yii;
use mPDF;
use app\models\Ganado;
use app\models\GanadoSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;



/**
 * GanadoController implements the CRUD actions for Ganado model.
 */
class GanadoController extends Controller
{
    /**
     * @inheritdoc
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
     * Lists all Ganado models.
     * @return mixed
     */
    public function actionGenpdf()
    {
        $searchModel = new GanadoSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        $pdf_content = $this->renderPartial('genpdf', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);

        $mPDF = new \mPDF();
        $mPDF->WriteHTML($pdf_content);
        $mPDF->Output();
        exit;
    }

    /**
     * Displays a single Ganado model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */

     /**
     * Lists all Ganado models.
     * @return mixed
     */
    public function actionUnion()
    {
        $searchModel = new GanadoSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('union', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

  
 // Aqui se crea el formato pdf que contenga los datos de registro


    //    public function actionCreateMPDF()
    // {
    //     $mpdf = new mPDF();
    //     $mpdf->WriteHTML($this->renderUnion('mpdf'));
    //     $mpdf->Output();
    //     exit;
    //     //return $this->renderPartial('mpdf');
    // }
    public function actionSamplepdf()
    {
        $mpdf = new mPDF;
        // $mpdf->WriteHTML('Sample Text');
        // $mpdf->Output();
        // exit;
    }
    // public function actionForceDownloadPdf()
    // {
    //     $mpdf = new mPDF();
    //     $mpdf->WriteHTML($this->renderUnion('mpdf'));
    //     $mpdf->Output('MyPDF.pdf', 'D');
    //     exit;
    // }
    /**
     * Displays a single Ganado model.
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
     * Creates a new Ganado model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Ganado();

        if ($model->load(Yii::$app->request->post()) && $model->save(false)) {
            return $this->redirect(['view', 'id' => $model->idGanado]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Ganado model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save(false)) {
            return $this->redirect(['view', 'id' => $model->idGanado]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Ganado model.
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
     * Finds the Ganado model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Ganado the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Ganado::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }



}
