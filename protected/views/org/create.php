<?php
/* @var $this OrgController */
/* @var $model TblOrg */

$this->breadcrumbs=array(
	'Tbl Orgs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TblOrg', 'url'=>array('index')),
	array('label'=>'Manage TblOrg', 'url'=>array('admin')),
);
?>

<h1>Create TblOrg</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>