<?php

class DatOrgResController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view', 'Listaestado'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new DatOrgRes;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['DatOrgRes']))
		{
			$model->attributes=$_POST['DatOrgRes'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_dat_org_res));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['DatOrgRes']))
		{
			$model->attributes=$_POST['DatOrgRes'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_dat_org_res));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('DatOrgRes');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new DatOrgRes('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['DatOrgRes']))
			$model->attributes=$_GET['DatOrgRes'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return DatOrgRes the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=DatOrgRes::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param DatOrgRes $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='dat-org-res-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
	
		public function actionListaestado()
	{		    
		$id_amb_org = $_POST['DatOrgRes']['id_amb_org'];
		//$org_res=$this->loadModel($id_amb_org);
		//$org_res=OrgRes::model()->findByPk($id_amb_org);
		$OrgRes= new OrgRes();
		$Estado=new Estado();
		
		$listaidestado = $OrgRes::model()->findAll('id_amb_org = :id_amb_org', array(':id_amb_org'=>$id_amb_org));
		$listaidestado = CHtml::listData($listaidestado,'id_estado','tx_des_estado');
				
		
		foreach ($listaidestado as $valor => $descripcion) 
		{					
			$nobreestado = $Estado::model()->findAll('id_estado = :id_estado', array(':id_estado'=>$valor));
			$nobreestado = CHtml::listData($nobreestado,'id_estado','tx_des_estado');
				
			foreach ($nobreestado as $idnomest => $descripcionest) 
			{			
				echo CHtml::tag('option',array('value'=>$idnomest),CHtml::encode($descripcionest), true);			
			}
		}
		
		//foreach ($listaidestado as $valor => $descripcion) {
			//$listaEstado=$Estado::model()->findByPk($valor);
			///echo CHtml::tag('option',array('value'=>$valor),CHtml::encode($descripcion), true);			
		//}		
				
	}		
}
