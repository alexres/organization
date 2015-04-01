<?php
/* @var $this OrgController */
/* @var $model TblOrg */

$this->breadcrumbs=array(
	'Tbl Orgs'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List TblOrg', 'url'=>array('index')),
	array('label'=>'Create TblOrg', 'url'=>array('create')),
	array('label'=>'Update TblOrg', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TblOrg', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TblOrg', 'url'=>array('admin')),
);
?>

<h1>View TblOrg #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'username',
		'password',
		'email',
		'phone',
		'inn',
		'kpp',
		'ogrn',
		'adress',
		'website',
		'sfera',
	),
)); ?>
