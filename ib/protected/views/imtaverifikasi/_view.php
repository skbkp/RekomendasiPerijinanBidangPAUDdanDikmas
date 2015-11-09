<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('nilai_imta_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->nilai_imta_id),array('view','id'=>$data->nilai_imta_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ib_imta_id')); ?>:</b>
	<?php echo CHtml::encode($data->ib_imta_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_by')); ?>:</b>
	<?php echo CHtml::encode($data->created_by); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('upload_at')); ?>:</b>
	<?php echo CHtml::encode($data->upload_at); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('update_at')); ?>:</b>
	<?php echo CHtml::encode($data->update_at); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('update_by')); ?>:</b>
	<?php echo CHtml::encode($data->update_by); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_surat')); ?>:</b>
	<?php echo CHtml::encode($data->v_surat); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('v_reason_surat')); ?>:</b>
	<?php echo CHtml::encode($data->v_reason_surat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_kuasa')); ?>:</b>
	<?php echo CHtml::encode($data->v_kuasa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_reason_kuasa')); ?>:</b>
	<?php echo CHtml::encode($data->v_reason_kuasa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_nilek')); ?>:</b>
	<?php echo CHtml::encode($data->v_nilek); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_reason_nilek')); ?>:</b>
	<?php echo CHtml::encode($data->v_reason_nilek); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_kurikulum')); ?>:</b>
	<?php echo CHtml::encode($data->v_kurikulum); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_reason_kurikulum')); ?>:</b>
	<?php echo CHtml::encode($data->v_reason_kurikulum); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_aktanotaris')); ?>:</b>
	<?php echo CHtml::encode($data->v_aktanotaris); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_reason_aktanotaris')); ?>:</b>
	<?php echo CHtml::encode($data->v_reason_aktanotaris); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_pengesahankumham')); ?>:</b>
	<?php echo CHtml::encode($data->v_pengesahankumham); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_reason_kumham')); ?>:</b>
	<?php echo CHtml::encode($data->v_reason_kumham); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_domisili')); ?>:</b>
	<?php echo CHtml::encode($data->v_domisili); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_reason_domisili')); ?>:</b>
	<?php echo CHtml::encode($data->v_reason_domisili); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_alasan')); ?>:</b>
	<?php echo CHtml::encode($data->v_alasan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_reason_alasan')); ?>:</b>
	<?php echo CHtml::encode($data->v_reason_alasan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_biaya')); ?>:</b>
	<?php echo CHtml::encode($data->v_biaya); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_reason_biaya')); ?>:</b>
	<?php echo CHtml::encode($data->v_reason_biaya); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_jaminan')); ?>:</b>
	<?php echo CHtml::encode($data->v_jaminan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_reason_jaminan')); ?>:</b>
	<?php echo CHtml::encode($data->v_reason_jaminan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_paspor')); ?>:</b>
	<?php echo CHtml::encode($data->v_paspor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_reason_paspor')); ?>:</b>
	<?php echo CHtml::encode($data->v_reason_paspor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_cv')); ?>:</b>
	<?php echo CHtml::encode($data->v_cv); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_reason_cv')); ?>:</b>
	<?php echo CHtml::encode($data->v_reason_cv); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_foto')); ?>:</b>
	<?php echo CHtml::encode($data->v_foto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_reason_foto')); ?>:</b>
	<?php echo CHtml::encode($data->v_reason_foto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_ijazah')); ?>:</b>
	<?php echo CHtml::encode($data->v_ijazah); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_reason_ijazah')); ?>:</b>
	<?php echo CHtml::encode($data->v_reason_ijazah); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_sehat')); ?>:</b>
	<?php echo CHtml::encode($data->v_sehat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_reason_sehat')); ?>:</b>
	<?php echo CHtml::encode($data->v_reason_sehat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_pernyataan')); ?>:</b>
	<?php echo CHtml::encode($data->v_pernyataan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_reason_pernyataan')); ?>:</b>
	<?php echo CHtml::encode($data->v_reason_pernyataan); ?>
	<br />

	*/ ?>

</div>