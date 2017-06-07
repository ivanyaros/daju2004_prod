<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="centros view large-9 medium-8 columns content">
    <h3><?= h($centro->label) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($centro->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Referencia') ?></th>
            <td><?= h($centro->referencia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Direccion') ?></th>
            <td><?= h($centro->direccion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Observaciones') ?></th>
            <td><?= h($centro->observaciones) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($centro->id) ?></td>
        </tr>
    </table>
<div class="w3-bar w3-black">

    <button class="w3-bar-item w3-button tablink" onclick="openRelated(event,'entradasDeMateriales')"><?= __("Entradas De Materiales") ?></button>

    <button class="w3-bar-item w3-button tablink" onclick="openRelated(event,'envios')"><?= __("Envios") ?></button>

    <button class="w3-bar-item w3-button tablink" onclick="openRelated(event,'localizaciones')"><?= __("Localizaciones") ?></button>

    <button class="w3-bar-item w3-button tablink" onclick="openRelated(event,'ordens')"><?= __("Ordens") ?></button>

    <button class="w3-bar-item w3-button tablink" onclick="openRelated(event,'proceso')"><?= __("Proceso") ?></button>

<div style="display:none" id="entradasDeMateriales" class="related w3-container w3-theme-d3 w3-border">
    <h4><?= __('Related Entradas De Materiales') ?>
        <button onClick="location.href='/entradas-de-materiales/add/<?= $centro->id ?>/centro_id'" class="w3-button w3-xlarge w3-circle w3-black">+</button>
    </h4>
        <?php if (!empty($entradasDeMateriales)): ?>
	<div class="w3-responsive">
		<table class=" w3-table w3-border w3-bordered w3-hoverable w3-theme-d4">
        	<thead class="w3-border w3-black">  
                <th scope="col"><?= $this->Paginator->sort('id','id', ['model'=>'EntradasDeMateriales']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('proveedores_cliente_id','proveedores_cliente_id', ['model'=>'EntradasDeMateriales']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('referencia','referencia', ['model'=>'EntradasDeMateriales']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('observaciones','observaciones', ['model'=>'EntradasDeMateriales']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('albaran','albaran', ['model'=>'EntradasDeMateriales']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_envio','fecha_envio', ['model'=>'EntradasDeMateriales']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_recepcion','fecha_recepcion', ['model'=>'EntradasDeMateriales']) ?></th>
			</thead>
			<tbody>
<?php foreach ($entradasDeMateriales as $entradasDeMateriale): ?>
				<?php $my_url= $this->Url->build(['controller' => 'entradasDeMateriales', 'action' => 'view',$entradasDeMateriale->id]) ?>
            	<tr onClick="location.href='<?= $my_url ?>'" class="w3-hover-black ">
                	<td><?= h($entradasDeMateriale->id) ?></td>
                	<td><?= h($entradasDeMateriale->proveedores_cliente_id) ?></td>
                	<td><?= h($entradasDeMateriale->referencia) ?></td>
                	<td><?= h($entradasDeMateriale->observaciones) ?></td>
                	<td><?= h($entradasDeMateriale->albaran) ?></td>
                	<td><?= h($entradasDeMateriale->fecha_envio) ?></td>
                	<td><?= h($entradasDeMateriale->fecha_recepcion) ?></td>
            	</tr>
            <?php endforeach; ?>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first'), ['model'=>'EntradasDeMateriales']) ?>
            <?= $this->Paginator->prev('< ' . __('previous'), ['model'=>'EntradasDeMateriales']) ?>
            <?= $this->Paginator->numbers(['model'=>'EntradasDeMateriales']) ?>
            <?= $this->Paginator->next(__('next') . ' >', ['model'=>'EntradasDeMateriales']) ?>
            <?= $this->Paginator->last(__('last') . ' >>', ['model'=>'EntradasDeMateriales']) ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')], ['model'=>'EntradasDeMateriales']) ?></p>
    </div>
    <?php endif; ?>
</div>
<div style="display:none" id="envios" class="related w3-container w3-theme-d3 w3-border">
    <h4><?= __('Related Envios') ?>
        <button onClick="location.href='/envios/add/<?= $centro->id ?>/centro_id'" class="w3-button w3-xlarge w3-circle w3-black">+</button>
    </h4>
        <?php if (!empty($envios)): ?>
	<div class="w3-responsive">
		<table class=" w3-table w3-border w3-bordered w3-hoverable w3-theme-d4">
        	<thead class="w3-border w3-black">  
                <th scope="col"><?= $this->Paginator->sort('id','id', ['model'=>'Envios']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('proveedores_cliente_id','proveedores_cliente_id', ['model'=>'Envios']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_pedido','fecha_pedido', ['model'=>'Envios']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_envio','fecha_envio', ['model'=>'Envios']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('albaran','albaran', ['model'=>'Envios']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('pedidos_empresa_id','pedidos_empresa_id', ['model'=>'Envios']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_entrega','fecha_entrega', ['model'=>'Envios']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('observaciones','observaciones', ['model'=>'Envios']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('direccione_id','direccione_id', ['model'=>'Envios']) ?></th>
			</thead>
			<tbody>
<?php foreach ($envios as $envio): ?>
				<?php $my_url= $this->Url->build(['controller' => 'envios', 'action' => 'view',$envio->id]) ?>
            	<tr onClick="location.href='<?= $my_url ?>'" class="w3-hover-black ">
                	<td><?= h($envio->id) ?></td>
                	<td><?= h($envio->proveedores_cliente_id) ?></td>
                	<td><?= h($envio->fecha_pedido) ?></td>
                	<td><?= h($envio->fecha_envio) ?></td>
                	<td><?= h($envio->albaran) ?></td>
                	<td><?= h($envio->pedidos_empresa_id) ?></td>
                	<td><?= h($envio->fecha_entrega) ?></td>
                	<td><?= h($envio->observaciones) ?></td>
                	<td><?= h($envio->direccione_id) ?></td>
            	</tr>
            <?php endforeach; ?>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first'), ['model'=>'Envios']) ?>
            <?= $this->Paginator->prev('< ' . __('previous'), ['model'=>'Envios']) ?>
            <?= $this->Paginator->numbers(['model'=>'Envios']) ?>
            <?= $this->Paginator->next(__('next') . ' >', ['model'=>'Envios']) ?>
            <?= $this->Paginator->last(__('last') . ' >>', ['model'=>'Envios']) ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')], ['model'=>'Envios']) ?></p>
    </div>
    <?php endif; ?>
</div>
<div style="display:none" id="localizaciones" class="related w3-container w3-theme-d3 w3-border">
    <h4><?= __('Related Localizaciones') ?>
        <button onClick="location.href='/localizaciones/add/<?= $centro->id ?>/centro_id'" class="w3-button w3-xlarge w3-circle w3-black">+</button>
    </h4>
        <?php if (!empty($localizaciones)): ?>
	<div class="w3-responsive">
		<table class=" w3-table w3-border w3-bordered w3-hoverable w3-theme-d4">
        	<thead class="w3-border w3-black">  
                <th scope="col"><?= $this->Paginator->sort('id','id', ['model'=>'Localizaciones']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('name','name', ['model'=>'Localizaciones']) ?></th>
			</thead>
			<tbody>
<?php foreach ($localizaciones as $localizacione): ?>
				<?php $my_url= $this->Url->build(['controller' => 'localizaciones', 'action' => 'view',$localizacione->id]) ?>
            	<tr onClick="location.href='<?= $my_url ?>'" class="w3-hover-black ">
                	<td><?= h($localizacione->id) ?></td>
                	<td><?= h($localizacione->name) ?></td>
            	</tr>
            <?php endforeach; ?>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first'), ['model'=>'Localizaciones']) ?>
            <?= $this->Paginator->prev('< ' . __('previous'), ['model'=>'Localizaciones']) ?>
            <?= $this->Paginator->numbers(['model'=>'Localizaciones']) ?>
            <?= $this->Paginator->next(__('next') . ' >', ['model'=>'Localizaciones']) ?>
            <?= $this->Paginator->last(__('last') . ' >>', ['model'=>'Localizaciones']) ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')], ['model'=>'Localizaciones']) ?></p>
    </div>
    <?php endif; ?>
</div>
<div style="display:none" id="ordens" class="related w3-container w3-theme-d3 w3-border">
    <h4><?= __('Related Ordens') ?>
        <button onClick="location.href='/ordens/add/<?= $centro->id ?>/centro_id'" class="w3-button w3-xlarge w3-circle w3-black">+</button>
    </h4>
        <?php if (!empty($ordens)): ?>
	<div class="w3-responsive">
		<table class=" w3-table w3-border w3-bordered w3-hoverable w3-theme-d4">
        	<thead class="w3-border w3-black">  
                <th scope="col"><?= $this->Paginator->sort('id','id', ['model'=>'Ordens']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('name','name', ['model'=>'Ordens']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('referencia','referencia', ['model'=>'Ordens']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('cantidad','cantidad', ['model'=>'Ordens']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_creacion','fecha_creacion', ['model'=>'Ordens']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_terminacion','fecha_terminacion', ['model'=>'Ordens']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('estado_id','estado_id', ['model'=>'Ordens']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('proceso_id','proceso_id', ['model'=>'Ordens']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('scrap','scrap', ['model'=>'Ordens']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('coste_operario','coste_operario', ['model'=>'Ordens']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('observaciones','observaciones', ['model'=>'Ordens']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('prioridade_id','prioridade_id', ['model'=>'Ordens']) ?></th>
			</thead>
			<tbody>
<?php foreach ($ordens as $orden): ?>
				<?php $my_url= $this->Url->build(['controller' => 'ordens', 'action' => 'view',$orden->id]) ?>
            	<tr onClick="location.href='<?= $my_url ?>'" class="w3-hover-black ">
                	<td><?= h($orden->id) ?></td>
                	<td><?= h($orden->name) ?></td>
                	<td><?= h($orden->referencia) ?></td>
                	<td><?= h($orden->cantidad) ?></td>
                	<td><?= h($orden->fecha_creacion) ?></td>
                	<td><?= h($orden->fecha_terminacion) ?></td>
                	<td><?= h($orden->estado_id) ?></td>
                	<td><?= h($orden->proceso_id) ?></td>
                	<td><?= h($orden->scrap) ?></td>
                	<td><?= h($orden->coste_operario) ?></td>
                	<td><?= h($orden->observaciones) ?></td>
                	<td><?= h($orden->prioridade_id) ?></td>
            	</tr>
            <?php endforeach; ?>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first'), ['model'=>'Ordens']) ?>
            <?= $this->Paginator->prev('< ' . __('previous'), ['model'=>'Ordens']) ?>
            <?= $this->Paginator->numbers(['model'=>'Ordens']) ?>
            <?= $this->Paginator->next(__('next') . ' >', ['model'=>'Ordens']) ?>
            <?= $this->Paginator->last(__('last') . ' >>', ['model'=>'Ordens']) ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')], ['model'=>'Ordens']) ?></p>
    </div>
    <?php endif; ?>
</div>
<div style="display:none" id="proceso" class="related w3-container w3-theme-d3 w3-border">
    <h4><?= __('Related Proceso') ?>
        <button onClick="location.href='/proceso/add/<?= $centro->id ?>/centro_id'" class="w3-button w3-xlarge w3-circle w3-black">+</button>
    </h4>
        <?php if (!empty($proceso)): ?>
	<div class="w3-responsive">
		<table class=" w3-table w3-border w3-bordered w3-hoverable w3-theme-d4">
        	<thead class="w3-border w3-black">  
                <th scope="col"><?= $this->Paginator->sort('id','id', ['model'=>'Proceso']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('name','name', ['model'=>'Proceso']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('referencia','referencia', ['model'=>'Proceso']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('familia_id','familia_id', ['model'=>'Proceso']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('precio','precio', ['model'=>'Proceso']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('moneda_id','moneda_id', ['model'=>'Proceso']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('iva_id','iva_id', ['model'=>'Proceso']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('observaciones','observaciones', ['model'=>'Proceso']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('visible','visible', ['model'=>'Proceso']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('enlaces','enlaces', ['model'=>'Proceso']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('coste_tiempo','coste_tiempo', ['model'=>'Proceso']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('coste_operaciones','coste_operaciones', ['model'=>'Proceso']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('descripcion','descripcion', ['model'=>'Proceso']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('larga','larga', ['model'=>'Proceso']) ?></th>
			</thead>
			<tbody>
<?php foreach ($proceso as $proceso): ?>
				<?php $my_url= $this->Url->build(['controller' => 'proceso', 'action' => 'view',$proceso->id]) ?>
            	<tr onClick="location.href='<?= $my_url ?>'" class="w3-hover-black ">
                	<td><?= h($proceso->id) ?></td>
                	<td><?= h($proceso->name) ?></td>
                	<td><?= h($proceso->referencia) ?></td>
                	<td><?= h($proceso->familia_id) ?></td>
                	<td><?= h($proceso->precio) ?></td>
                	<td><?= h($proceso->moneda_id) ?></td>
                	<td><?= h($proceso->iva_id) ?></td>
                	<td><?= h($proceso->observaciones) ?></td>
                	<td><?= h($proceso->visible) ?></td>
                	<td><?= h($proceso->enlaces) ?></td>
                	<td><?= h($proceso->coste_tiempo) ?></td>
                	<td><?= h($proceso->coste_operaciones) ?></td>
                	<td><?= h($proceso->descripcion) ?></td>
                	<td><?= h($proceso->larga) ?></td>
            	</tr>
            <?php endforeach; ?>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first'), ['model'=>'Proceso']) ?>
            <?= $this->Paginator->prev('< ' . __('previous'), ['model'=>'Proceso']) ?>
            <?= $this->Paginator->numbers(['model'=>'Proceso']) ?>
            <?= $this->Paginator->next(__('next') . ' >', ['model'=>'Proceso']) ?>
            <?= $this->Paginator->last(__('last') . ' >>', ['model'=>'Proceso']) ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')], ['model'=>'Proceso']) ?></p>
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

