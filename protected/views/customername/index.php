<?php
/* @var $this CustomernameController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Customernames',
);

$this->menu=array(
	array('label'=>'Create Customer name', 'url'=>array('create')),
	array('label'=>'Manage Customer name', 'url'=>array('admin')),
);
?>

<h1>Customer names</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
