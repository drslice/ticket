<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('username')); ?>:</b>
	<?php echo CHtml::encode($data->username); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_started')); ?>:</b>
	<?php echo $data->date_started ? date('M j, Y', $data->date_started) : ''; ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_ended')); ?>:</b>
	<?php echo $data->date_ended ? date('M j, Y', $data->date_ended) : ''; ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_modified')); ?>:</b>
	<?php echo $data->date_modified ? date('M j, Y', $data->date_modified) : ''; ?>
	<br />


</div>