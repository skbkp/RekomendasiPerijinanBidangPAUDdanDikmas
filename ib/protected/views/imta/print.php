
<hr />

<hr />
<?php
$this->widget('editable.EditableField', array(
        'type'        => 'date',
        'model'       => $model,
        'attribute'   => 'ib_imta_lbg_ijin_tgl',
        'url'         => $this->createUrl('imta/updatable'),         
        'placement'   => 'right',
        'viewformat'  => 'yyyy-mm-dd'
    ));
?>