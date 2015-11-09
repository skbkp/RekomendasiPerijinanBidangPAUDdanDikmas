
<hr />

<hr />
<?php
$this->widget('editable.EditableField', array(
        'type'        => 'date',
        'model'       => $model,
        'attribute'   => 'ib_kursus_lbg_ijin_tgl',
        'url'         => $this->createUrl('kursus/updatable'),         
        'placement'   => 'right',
        'viewformat'  => 'yyyy-mm-dd'
    ));
?>