<?php
/* @var $this OrgController */
/* @var $data TblOrg */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('username')); ?>:</b>
	<?php echo CHtml::encode($data->username); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('password')); ?>:</b>
	<?php echo CHtml::encode($data->password); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('phone')); ?>:</b>
	<?php echo CHtml::encode($data->phone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('inn')); ?>:</b>
	<?php echo CHtml::encode($data->inn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kpp')); ?>:</b>
	<?php echo CHtml::encode($data->kpp); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('ogrn')); ?>:</b>
	<?php echo CHtml::encode($data->ogrn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('adress')); ?>:</b>
	<?php echo CHtml::encode($data->adress); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('website')); ?>:</b>
	<?php echo CHtml::encode($data->website); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sfera')); ?>:</b>
	<?php echo CHtml::encode($data->sfera); ?>
	<br />

	*/ ?>

</div>