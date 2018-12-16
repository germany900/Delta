<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;


/* @var $this yii\web\View */
/* @var $searchModel app\models\GanadoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

/*$this->title = 'Ganados';
$this->params['breadcrumbs'][] = $this->title;*/
?>
    


               <!--  <?php
                             $imagenURL = "/plantilla/images/logo.png". $row["/plantilla/images/logo.png"];
                             echo "<img  src='$imagenURL'/>   "


                            // $pdf->Cell(700,85,$pdf->Image('/web/plantilla/images/logo.jpg',30,12,160),0,0,'C');
                ?> -->
                                       
                                        <div class="">
                                           
                                      
                                                     <h2 align="right"  class="" style="text-align: top;">Sistema de admnistración de ganado</h2>
                                                <img src="/plantilla/images/logo.png" alt="" width="100" height="80"  /> 
                                             
                                             
                                        
                                            
                                        </div>
                                      
               
                
                <?php

               
                         echo "<br>"; //* Esto es un salto de linea
                         echo "<br>"; //* Esto es un salto de linea
                         echo "<br>"; //* Esto es un salto de linea
                          echo "<br>"; //* Esto es un salto de linea
                      
                        
                ?>

                 <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

   
            'registro',
            ['format'=>'raw','attribute'=>'Sex','label'=>'Sexo',
            ],
              ['format'=>'raw','attribute'=>'Nomb','label'=>'Nombre del rancho',
            ],

        ],
    ]); ?>
            </div>
            
        </div>
    </div><!-- End / page-title -->
