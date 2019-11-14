<?php
/* @var $this CustomernameController */
/* @var $model Customername */

$this->breadcrumbs=array(
	'Customernames'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Customername', 'url'=>array('index')),
	array('label'=>'Create Customername', 'url'=>array('create')),
	array('label'=>'View Customername', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Customername', 'url'=>array('admin')),
);
?>

<h1>Update Customer name <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>