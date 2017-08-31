<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="w3-container">
    <h3><?= h($maquina->label) ?>
        <?php $my_url_edit=$this->Url->build(['controller' => 'maquinas','action' => 'edit',$maquina->id])  ?>
        <button onClick="location.href='<?= $my_url_edit?>'" class="w3-button  w3-circle w3-black"> <?= __("Edit")?></button>
    </h3>
    <table class="w3-table w3-border w3-bordered w3-hoverable w3-theme-d4">
        <tr>
            <td class="w3-border"><?= __('Name') ?></td>
            <td class="w3-border"><?= h($maquina->name) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Referencia') ?></td>
            <td class="w3-border"><?= h($maquina->referencia) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Observaciones') ?></td>
            <td class="w3-border"><?= h($maquina->observaciones) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Id') ?></td>
            <td class="w3-border"><?= $this->Number->format($maquina->id) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Coste Operacion') ?></td>
            <td class="w3-border"><?= $this->Number->format($maquina->coste_operacion) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Coste Tiempo') ?></td>
            <td class="w3-border"><?= $this->Number->format($maquina->coste_tiempo) ?></td>
        </tr>
    </table>
<div class="w3-bar w3-black">

    <button class="w3-bar-item w3-button tablink" onclick="openRelated(event,'maquinasUsadas')"><?= __("Maquinas Usadas") ?></button>

<div style="display:none" id="maquinasUsadas" class="related w3-container w3-theme-d3 w3-border">
    <h4><?= __('Related Maquinas Usadas') ?>
        <?php $my_url_add=$this->Url->build(['controller' => 'maquinas-usadas', 'action' => 'add',$maquina->id,'maquina_id'])?>
        <button onClick="location.href='<?= $my_url_add?>'" class="w3-button w3-xlarge w3-circle w3-black">+</button>
    </h4>
        <?php if (!empty($maquinasUsadas)): ?>
	
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->first('<< ' . __('first'), ['model'=>'MaquinasUsadas']) ?>
                <?= $this->Paginator->prev('< ' . __('previous'), ['model'=>'MaquinasUsadas']) ?>
                <?= $this->Paginator->numbers(['model'=>'MaquinasUsadas','modulus' => 4,'first' => 2, 'last' => 2]) ?>
                <?= $this->Paginator->next(__('next') . ' >', ['model'=>'MaquinasUsadas']) ?>
                <?= $this->Paginator->last(__('last') . ' >>', ['model'=>'MaquinasUsadas']) ?>
            </ul>        
        </div>
    <div class="w3-responsive">
		<table class=" w3-table w3-centered w3-border w3-bordered w3-hoverable w3-theme-d4">
        	<thead class="w3-border w3-black">  
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('id','id', ['model'=>'MaquinasUsadas']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('tarea_id','tarea_id', ['model'=>'MaquinasUsadas']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('maquina_id','maquina_id', ['model'=>'MaquinasUsadas']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('operaciones','operaciones', ['model'=>'MaquinasUsadas']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('uso','uso', ['model'=>'MaquinasUsadas']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('observaciones','observaciones', ['model'=>'MaquinasUsadas']) ?></th>
			</thead>
			<tbody>
<?php foreach ($maquinasUsadas as $maquinasUsada): ?>
				<?php $my_url= $this->Url->build(['controller' => 'maquinasUsadas', 'action' => 'view',$maquinasUsada->id]) ?>
            	<tr onClick="location.href='<?= $my_url ?>'" class="w3-hover-black ">
                                    <td class="w3-border"><?= h($maquinasUsada->id) ?></td>

                                <td class="w3-border"><?= $maquinasUsada->has('tarea') ? $this->Html->link($maquinasUsada->tarea->label, ['controller' => 'Tareas', 'action' => 'view', $maquinasUsada->tarea->id]) : '' ?></td>

                                <td class="w3-border"><?= $maquinasUsada->has('maquina') ? $this->Html->link($maquinasUsada->maquina->label, ['controller' => 'Maquinas', 'action' => 'view', $maquinasUsada->maquina->id]) : '' ?></td>
                        <td class="w3-border"><?= h($maquinasUsada->operaciones) ?></td>
                        <td class="w3-border"><?= h($maquinasUsada->uso) ?></td>
                        <td class="w3-border"><?= h($maquinasUsada->observaciones) ?></td>
            	</tr>
            <?php endforeach; ?>
        </table>
    </div>
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->first('<< ' . __('first'), ['model'=>'MaquinasUsadas']) ?>
                <?= $this->Paginator->prev('< ' . __('previous'), ['model'=>'MaquinasUsadas']) ?>
                <?= $this->Paginator->numbers(['model'=>'MaquinasUsadas','modulus' => 4,'first' => 2, 'last' => 2]) ?>
                <?= $this->Paginator->next(__('next') . ' >', ['model'=>'MaquinasUsadas']) ?>
                <?= $this->Paginator->last(__('last') . ' >>', ['model'=>'MaquinasUsadas']) ?>
            </ul>
            <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total'),'model'=>'MaquinasUsadas']) ?></p>
        </div>
    
    <?php endif; ?>
</div>
</div>
<script>
function openRelated(evt, relatedName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("related");
  for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
  }
  document.getElementById(relatedName).style.display = "block";
  evt.currentTarget.className += " w3-red";
}
</script>

