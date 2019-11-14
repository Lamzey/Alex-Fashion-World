<?php
/* @var $this CustomernameController */
/* @var $model Customername */

$this->breadcrumbs=array(
	'Customernames'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Customername', 'url'=>array('index')),
	array('label'=>'Create Customername', 'url'=>array('create')),
	array('label'=>'Update Customername', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Customername', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Customername', 'url'=>array('admin')),
);
?>

<h1>View Customer name #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'firstname',
	),
)); ?>
