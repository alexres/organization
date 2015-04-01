<?php
/* @var $this OrgController */
/* @var $model TblOrg */

$this->breadcrumbs=array(
	'Tbl Orgs'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TblOrg', 'url'=>array('index')),
	array('label'=>'Create TblOrg', 'url'=>array('create')),
	array('label'=>'View TblOrg', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TblOrg', 'url'=>array('admin')),
);
?>

<h1>Update TblOrg <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>