<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="w3-container">
    <h3><?= h($orden->label) ?>
        <?php $my_url_edit=$this->Url->build(['controller' => 'ordens','action' => 'edit',$orden->id])  ?>
        <button onClick="location.href='<?= $my_url_edit?>'" class="w3-button  w3-circle w3-black"> <?= __("Edit")?></button>
    </h3>
    <table class="w3-table w3-border w3-bordered w3-hoverable w3-theme-d4">
        <tr>
            <td class="w3-border"><?= __('Name') ?></td>
            <td class="w3-border"><?= h($orden->name) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Referencia') ?></td>
            <td class="w3-border"><?= h($orden->referencia) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Estado') ?></td>
            <td class="w3-border"><?= $orden->has('estado') ? $this->Html->link($orden->estado->label, ['controller' => 'Estados', 'action' => 'view', $orden->estado->id]) : '' ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Centro') ?></td>
            <td class="w3-border"><?= $orden->has('centro') ? $this->Html->link($orden->centro->label, ['controller' => 'Centros', 'action' => 'view', $orden->centro->id]) : '' ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Proceso') ?></td>
            <td class="w3-border"><?= $orden->has('proceso') ? $this->Html->link($orden->proceso->label, ['controller' => 'Proceso', 'action' => 'view', $orden->proceso->id]) : '' ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Observaciones') ?></td>
            <td class="w3-border"><?= h($orden->observaciones) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Prioridade') ?></td>
            <td class="w3-border"><?= $orden->has('prioridade') ? $this->Html->link($orden->prioridade->label, ['controller' => 'Prioridades', 'action' => 'view', $orden->prioridade->id]) : '' ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Id') ?></td>
            <td class="w3-border"><?= $this->Number->format($orden->id) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Cantidad') ?></td>
            <td class="w3-border"><?= $this->Number->format($orden->cantidad) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Scrap') ?></td>
            <td class="w3-border"><?= $this->Number->format($orden->scrap) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Coste Operario') ?></td>
            <td class="w3-border"><?= $this->Number->format($orden->coste_operario) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Fecha Creacion') ?></td>
            <td class="w3-border"><?= h($orden->fecha_creacion) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Fecha Terminacion') ?></td>
            <td class="w3-border"><?= h($orden->fecha_terminacion) ?></td>
        </tr>
    </table>
<div class="w3-bar w3-black">

    <button class="w3-bar-item w3-button tablink" onclick="openRelated(event,'estadosDeOrdens')"><?= __("Estados De Ordens") ?></button>

    <button class="w3-bar-item w3-button tablink" onclick="openRelated(event,'objetos')"><?= __("Objetos") ?></button>

<div style="display:none" id="estadosDeOrdens" class="related w3-container w3-theme-d3 w3-border">
    <h4><?= __('Related Estados De Ordens') ?>
        <?php $my_url_add=$this->Url->build(['controller' => 'estados-de-ordens', 'action' => 'add',$orden->id,'orden_id'])?>
        <button onClick="location.href='<?= $my_url_add?>'" class="w3-button w3-xlarge w3-circle w3-black">+</button>
    </h4>
        <?php if (!empty($estadosDeOrdens)): ?>
	
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->first('<< ' . __('first'), ['model'=>'EstadosDeOrdens']) ?>
                <?= $this->Paginator->prev('< ' . __('previous'), ['model'=>'EstadosDeOrdens']) ?>
                <?= $this->Paginator->numbers(['model'=>'EstadosDeOrdens','modulus' => 4,'first' => 2, 'last' => 2]) ?>
                <?= $this->Paginator->next(__('next') . ' >', ['model'=>'EstadosDeOrdens']) ?>
                <?= $this->Paginator->last(__('last') . ' >>', ['model'=>'EstadosDeOrdens']) ?>
            </ul>        
        </div>
    <div class="w3-responsive">
		<table class=" w3-table w3-centered w3-border w3-bordered w3-hoverable w3-theme-d4">
        	<thead class="w3-border w3-black">  
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('id','id', ['model'=>'EstadosDeOrdens']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('estado_id','estado_id', ['model'=>'EstadosDeOrdens']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('fecha_inicio','fecha_inicio', ['model'=>'EstadosDeOrdens']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('fecha_fin','fecha_fin', ['model'=>'EstadosDeOrdens']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('descripcion','descripcion', ['model'=>'EstadosDeOrdens']) ?></th>
			</thead>
			<tbody>
<?php foreach ($estadosDeOrdens as $estadosDeOrden): ?>
				<?php $my_url= $this->Url->build(['controller' => 'estadosDeOrdens', 'action' => 'view',$estadosDeOrden->id]) ?>
            	<tr onClick="location.href='<?= $my_url ?>'" class="w3-hover-black ">
                	<td class="w3-border"><?= h($estadosDeOrden->id) ?></td>
                	<td class="w3-border"><?= h($estadosDeOrden->estado_id) ?></td>
                	<td class="w3-border"><?= h($estadosDeOrden->fecha_inicio) ?></td>
                	<td class="w3-border"><?= h($estadosDeOrden->fecha_fin) ?></td>
                	<td class="w3-border"><?= h($estadosDeOrden->descripcion) ?></td>
            	</tr>
            <?php endforeach; ?>
        </table>
    </div>
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->first('<< ' . __('first'), ['model'=>'EstadosDeOrdens']) ?>
                <?= $this->Paginator->prev('< ' . __('previous'), ['model'=>'EstadosDeOrdens']) ?>
                <?= $this->Paginator->numbers(['model'=>'EstadosDeOrdens','modulus' => 4,'first' => 2, 'last' => 2]) ?>
                <?= $this->Paginator->next(__('next') . ' >', ['model'=>'EstadosDeOrdens']) ?>
                <?= $this->Paginator->last(__('last') . ' >>', ['model'=>'EstadosDeOrdens']) ?>
            </ul>
            <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total'),'model'=>'EstadosDeOrdens']) ?></p>
        </div>
    
    <?php endif; ?>
</div>
<div style="display:none" id="objetos" class="related w3-container w3-theme-d3 w3-border">
    <h4><?= __('Related Objetos') ?>
        <?php $my_url_add=$this->Url->build(['controller' => 'objetos', 'action' => 'add',$orden->id,'orden_id'])?>
        <button onClick="location.href='<?= $my_url_add?>'" class="w3-button w3-xlarge w3-circle w3-black">+</button>
    </h4>
        <?php if (!empty($objetos)): ?>
	
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->first('<< ' . __('first'), ['model'=>'Objetos']) ?>
                <?= $this->Paginator->prev('< ' . __('previous'), ['model'=>'Objetos']) ?>
                <?= $this->Paginator->numbers(['model'=>'Objetos','modulus' => 4,'first' => 2, 'last' => 2]) ?>
                <?= $this->Paginator->next(__('next') . ' >', ['model'=>'Objetos']) ?>
                <?= $this->Paginator->last(__('last') . ' >>', ['model'=>'Objetos']) ?>
            </ul>        
        </div>
    <div class="w3-responsive">
		<table class=" w3-table w3-centered w3-border w3-bordered w3-hoverable w3-theme-d4">
        	<thead class="w3-border w3-black">  
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('id','id', ['model'=>'Objetos']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('name','name', ['model'=>'Objetos']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('producto_id','producto_id', ['model'=>'Objetos']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('numero_serie','numero_serie', ['model'=>'Objetos']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('referencia','referencia', ['model'=>'Objetos']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('lote','lote', ['model'=>'Objetos']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('localizacione_id','localizacione_id', ['model'=>'Objetos']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('coste','coste', ['model'=>'Objetos']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('defectuosos','defectuosos', ['model'=>'Objetos']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('peso','peso', ['model'=>'Objetos']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('observaciones','observaciones', ['model'=>'Objetos']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('envio_id','envio_id', ['model'=>'Objetos']) ?></th>
			</thead>
			<tbody>
<?php foreach ($objetos as $objeto): ?>
				<?php $my_url= $this->Url->build(['controller' => 'objetos', 'action' => 'view',$objeto->id]) ?>
            	<tr onClick="location.href='<?= $my_url ?>'" class="w3-hover-black ">
                	<td class="w3-border"><?= h($objeto->id) ?></td>
                	<td class="w3-border"><?= h($objeto->name) ?></td>
                	<td class="w3-border"><?= h($objeto->producto_id) ?></td>
                	<td class="w3-border"><?= h($objeto->numero_serie) ?></td>
                	<td class="w3-border"><?= h($objeto->referencia) ?></td>
                	<td class="w3-border"><?= h($objeto->lote) ?></td>
                	<td class="w3-border"><?= h($objeto->localizacione_id) ?></td>
                	<td class="w3-border"><?= h($objeto->coste) ?></td>
                	<td class="w3-border"><?= h($objeto->defectuosos) ?></td>
                	<td class="w3-border"><?= h($objeto->peso) ?></td>
                	<td class="w3-border"><?= h($objeto->observaciones) ?></td>
                	<td class="w3-border"><?= h($objeto->envio_id) ?></td>
            	</tr>
            <?php endforeach; ?>
        </table>
    </div>
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->first('<< ' . __('first'), ['model'=>'Objetos']) ?>
                <?= $this->Paginator->prev('< ' . __('previous'), ['model'=>'Objetos']) ?>
                <?= $this->Paginator->numbers(['model'=>'Objetos','modulus' => 4,'first' => 2, 'last' => 2]) ?>
                <?= $this->Paginator->next(__('next') . ' >', ['model'=>'Objetos']) ?>
                <?= $this->Paginator->last(__('last') . ' >>', ['model'=>'Objetos']) ?>
            </ul>
            <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total'),'model'=>'Objetos']) ?></p>
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

