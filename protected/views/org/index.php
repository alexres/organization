<?php
/* @var $this OrgController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tbl Orgs',
);

$this->menu=array(
	array('label'=>'Create TblOrg', 'url'=>array('create')),
	array('label'=>'Manage TblOrg', 'url'=>array('admin')),
);
?>

<h1>Tbl Orgs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
