<?php
/* @var $this CustomernameController */
/* @var $model Customername */

$this->breadcrumbs=array(
	'Customernames'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Customername', 'url'=>array('index')),
	array('label'=>'Manage Customername', 'url'=>array('admin')),
);
?>

<h1>Create Customer name</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>