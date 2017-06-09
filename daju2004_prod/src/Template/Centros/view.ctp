<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="w3-container">
    <h3><?= h($centro->label) ?>
        <?php $my_url_edit=$this->Url->build(['controller' => 'centros','action' => 'edit',$centro->id])  ?>
        <button onClick="location.href='<?= $my_url_edit?>'" class="w3-button  w3-circle w3-black"> <?= __("Edit")?></button>
    </h3>
    <table class="w3-table w3-border w3-bordered w3-hoverable w3-theme-d4">
        <tr>
            <td class="w3-border"><?= __('Name') ?></td>
            <td class="w3-border"><?= h($centro->name) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Referencia') ?></td>
            <td class="w3-border"><?= h($centro->referencia) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Direccion') ?></td>
            <td class="w3-border"><?= h($centro->direccion) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Observaciones') ?></td>
            <td class="w3-border"><?= h($centro->observaciones) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Id') ?></td>
            <td class="w3-border"><?= $this->Number->format($centro->id) ?></td>
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
        <?php $my_url_add=$this->Url->build(['controller' => 'entradas-de-materiales', 'action' => 'add',$centro->id,'centro_id'])?>
        <button onClick="location.href='<?= $my_url_add?>'" class="w3-button w3-xlarge w3-circle w3-black">+</button>
    </h4>
        <?php if (!empty($entradasDeMateriales)): ?>
	
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->first('<< ' . __('first'), ['model'=>'EntradasDeMateriales']) ?>
                <?= $this->Paginator->prev('< ' . __('previous'), ['model'=>'EntradasDeMateriales']) ?>
                <?= $this->Paginator->numbers(['model'=>'EntradasDeMateriales','modulus' => 4,'first' => 2, 'last' => 2]) ?>
                <?= $this->Paginator->next(__('next') . ' >', ['model'=>'EntradasDeMateriales']) ?>
                <?= $this->Paginator->last(__('last') . ' >>', ['model'=>'EntradasDeMateriales']) ?>
            </ul>        
        </div>
    <div class="w3-responsive">
		<table class=" w3-table w3-centered w3-border w3-bordered w3-hoverable w3-theme-d4">
        	<thead class="w3-border w3-black">  
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('id','id', ['model'=>'EntradasDeMateriales']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('proveedores_cliente_id','proveedores_cliente_id', ['model'=>'EntradasDeMateriales']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('referencia','referencia', ['model'=>'EntradasDeMateriales']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('observaciones','observaciones', ['model'=>'EntradasDeMateriales']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('albaran','albaran', ['model'=>'EntradasDeMateriales']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('fecha_envio','fecha_envio', ['model'=>'EntradasDeMateriales']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('fecha_recepcion','fecha_recepcion', ['model'=>'EntradasDeMateriales']) ?></th>
			</thead>
			<tbody>
<?php foreach ($entradasDeMateriales as $entradasDeMateriale): ?>
				<?php $my_url= $this->Url->build(['controller' => 'entradasDeMateriales', 'action' => 'view',$entradasDeMateriale->id]) ?>
            	<tr onClick="location.href='<?= $my_url ?>'" class="w3-hover-black ">
                	<td class="w3-border"><?= h($entradasDeMateriale->id) ?></td>
                	<td class="w3-border"><?= h($entradasDeMateriale->proveedores_cliente_id) ?></td>
                	<td class="w3-border"><?= h($entradasDeMateriale->referencia) ?></td>
                	<td class="w3-border"><?= h($entradasDeMateriale->observaciones) ?></td>
                	<td class="w3-border"><?= h($entradasDeMateriale->albaran) ?></td>
                	<td class="w3-border"><?= h($entradasDeMateriale->fecha_envio) ?></td>
                	<td class="w3-border"><?= h($entradasDeMateriale->fecha_recepcion) ?></td>
            	</tr>
            <?php endforeach; ?>
        </table>
    </div>
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->first('<< ' . __('first'), ['model'=>'EntradasDeMateriales']) ?>
                <?= $this->Paginator->prev('< ' . __('previous'), ['model'=>'EntradasDeMateriales']) ?>
                <?= $this->Paginator->numbers(['model'=>'EntradasDeMateriales','modulus' => 4,'first' => 2, 'last' => 2]) ?>
                <?= $this->Paginator->next(__('next') . ' >', ['model'=>'EntradasDeMateriales']) ?>
                <?= $this->Paginator->last(__('last') . ' >>', ['model'=>'EntradasDeMateriales']) ?>
            </ul>
            <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total'),'model'=>'EntradasDeMateriales']) ?></p>
        </div>
    
    <?php endif; ?>
</div>
<div style="display:none" id="envios" class="related w3-container w3-theme-d3 w3-border">
    <h4><?= __('Related Envios') ?>
        <?php $my_url_add=$this->Url->build(['controller' => 'envios', 'action' => 'add',$centro->id,'centro_id'])?>
        <button onClick="location.href='<?= $my_url_add?>'" class="w3-button w3-xlarge w3-circle w3-black">+</button>
    </h4>
        <?php if (!empty($envios)): ?>
	
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->first('<< ' . __('first'), ['model'=>'Envios']) ?>
                <?= $this->Paginator->prev('< ' . __('previous'), ['model'=>'Envios']) ?>
                <?= $this->Paginator->numbers(['model'=>'Envios','modulus' => 4,'first' => 2, 'last' => 2]) ?>
                <?= $this->Paginator->next(__('next') . ' >', ['model'=>'Envios']) ?>
                <?= $this->Paginator->last(__('last') . ' >>', ['model'=>'Envios']) ?>
            </ul>        
        </div>
    <div class="w3-responsive">
		<table class=" w3-table w3-centered w3-border w3-bordered w3-hoverable w3-theme-d4">
        	<thead class="w3-border w3-black">  
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('id','id', ['model'=>'Envios']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('proveedores_cliente_id','proveedores_cliente_id', ['model'=>'Envios']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('fecha_pedido','fecha_pedido', ['model'=>'Envios']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('fecha_envio','fecha_envio', ['model'=>'Envios']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('albaran','albaran', ['model'=>'Envios']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('pedidos_empresa_id','pedidos_empresa_id', ['model'=>'Envios']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('fecha_entrega','fecha_entrega', ['model'=>'Envios']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('observaciones','observaciones', ['model'=>'Envios']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('direccione_id','direccione_id', ['model'=>'Envios']) ?></th>
			</thead>
			<tbody>
<?php foreach ($envios as $envio): ?>
				<?php $my_url= $this->Url->build(['controller' => 'envios', 'action' => 'view',$envio->id]) ?>
            	<tr onClick="location.href='<?= $my_url ?>'" class="w3-hover-black ">
                	<td class="w3-border"><?= h($envio->id) ?></td>
                	<td class="w3-border"><?= h($envio->proveedores_cliente_id) ?></td>
                	<td class="w3-border"><?= h($envio->fecha_pedido) ?></td>
                	<td class="w3-border"><?= h($envio->fecha_envio) ?></td>
                	<td class="w3-border"><?= h($envio->albaran) ?></td>
                	<td class="w3-border"><?= h($envio->pedidos_empresa_id) ?></td>
                	<td class="w3-border"><?= h($envio->fecha_entrega) ?></td>
                	<td class="w3-border"><?= h($envio->observaciones) ?></td>
                	<td class="w3-border"><?= h($envio->direccione_id) ?></td>
            	</tr>
            <?php endforeach; ?>
        </table>
    </div>
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->first('<< ' . __('first'), ['model'=>'Envios']) ?>
                <?= $this->Paginator->prev('< ' . __('previous'), ['model'=>'Envios']) ?>
                <?= $this->Paginator->numbers(['model'=>'Envios','modulus' => 4,'first' => 2, 'last' => 2]) ?>
                <?= $this->Paginator->next(__('next') . ' >', ['model'=>'Envios']) ?>
                <?= $this->Paginator->last(__('last') . ' >>', ['model'=>'Envios']) ?>
            </ul>
            <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total'),'model'=>'Envios']) ?></p>
        </div>
    
    <?php endif; ?>
</div>
<div style="display:none" id="localizaciones" class="related w3-container w3-theme-d3 w3-border">
    <h4><?= __('Related Localizaciones') ?>
        <?php $my_url_add=$this->Url->build(['controller' => 'localizaciones', 'action' => 'add',$centro->id,'centro_id'])?>
        <button onClick="location.href='<?= $my_url_add?>'" class="w3-button w3-xlarge w3-circle w3-black">+</button>
    </h4>
        <?php if (!empty($localizaciones)): ?>
	
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->first('<< ' . __('first'), ['model'=>'Localizaciones']) ?>
                <?= $this->Paginator->prev('< ' . __('previous'), ['model'=>'Localizaciones']) ?>
                <?= $this->Paginator->numbers(['model'=>'Localizaciones','modulus' => 4,'first' => 2, 'last' => 2]) ?>
                <?= $this->Paginator->next(__('next') . ' >', ['model'=>'Localizaciones']) ?>
                <?= $this->Paginator->last(__('last') . ' >>', ['model'=>'Localizaciones']) ?>
            </ul>        
        </div>
    <div class="w3-responsive">
		<table class=" w3-table w3-centered w3-border w3-bordered w3-hoverable w3-theme-d4">
        	<thead class="w3-border w3-black">  
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('id','id', ['model'=>'Localizaciones']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('name','name', ['model'=>'Localizaciones']) ?></th>
			</thead>
			<tbody>
<?php foreach ($localizaciones as $localizacione): ?>
				<?php $my_url= $this->Url->build(['controller' => 'localizaciones', 'action' => 'view',$localizacione->id]) ?>
            	<tr onClick="location.href='<?= $my_url ?>'" class="w3-hover-black ">
                	<td class="w3-border"><?= h($localizacione->id) ?></td>
                	<td class="w3-border"><?= h($localizacione->name) ?></td>
            	</tr>
            <?php endforeach; ?>
        </table>
    </div>
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->first('<< ' . __('first'), ['model'=>'Localizaciones']) ?>
                <?= $this->Paginator->prev('< ' . __('previous'), ['model'=>'Localizaciones']) ?>
                <?= $this->Paginator->numbers(['model'=>'Localizaciones','modulus' => 4,'first' => 2, 'last' => 2]) ?>
                <?= $this->Paginator->next(__('next') . ' >', ['model'=>'Localizaciones']) ?>
                <?= $this->Paginator->last(__('last') . ' >>', ['model'=>'Localizaciones']) ?>
            </ul>
            <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total'),'model'=>'Localizaciones']) ?></p>
        </div>
    
    <?php endif; ?>
</div>
<div style="display:none" id="ordens" class="related w3-container w3-theme-d3 w3-border">
    <h4><?= __('Related Ordens') ?>
        <?php $my_url_add=$this->Url->build(['controller' => 'ordens', 'action' => 'add',$centro->id,'centro_id'])?>
        <button onClick="location.href='<?= $my_url_add?>'" class="w3-button w3-xlarge w3-circle w3-black">+</button>
    </h4>
        <?php if (!empty($ordens)): ?>
	
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->first('<< ' . __('first'), ['model'=>'Ordens']) ?>
                <?= $this->Paginator->prev('< ' . __('previous'), ['model'=>'Ordens']) ?>
                <?= $this->Paginator->numbers(['model'=>'Ordens','modulus' => 4,'first' => 2, 'last' => 2]) ?>
                <?= $this->Paginator->next(__('next') . ' >', ['model'=>'Ordens']) ?>
                <?= $this->Paginator->last(__('last') . ' >>', ['model'=>'Ordens']) ?>
            </ul>        
        </div>
    <div class="w3-responsive">
		<table class=" w3-table w3-centered w3-border w3-bordered w3-hoverable w3-theme-d4">
        	<thead class="w3-border w3-black">  
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('id','id', ['model'=>'Ordens']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('name','name', ['model'=>'Ordens']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('referencia','referencia', ['model'=>'Ordens']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('cantidad','cantidad', ['model'=>'Ordens']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('fecha_creacion','fecha_creacion', ['model'=>'Ordens']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('fecha_terminacion','fecha_terminacion', ['model'=>'Ordens']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('estado_id','estado_id', ['model'=>'Ordens']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('proceso_id','proceso_id', ['model'=>'Ordens']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('scrap','scrap', ['model'=>'Ordens']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('coste_operario','coste_operario', ['model'=>'Ordens']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('observaciones','observaciones', ['model'=>'Ordens']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('prioridade_id','prioridade_id', ['model'=>'Ordens']) ?></th>
			</thead>
			<tbody>
<?php foreach ($ordens as $orden): ?>
				<?php $my_url= $this->Url->build(['controller' => 'ordens', 'action' => 'view',$orden->id]) ?>
            	<tr onClick="location.href='<?= $my_url ?>'" class="w3-hover-black ">
                	<td class="w3-border"><?= h($orden->id) ?></td>
                	<td class="w3-border"><?= h($orden->name) ?></td>
                	<td class="w3-border"><?= h($orden->referencia) ?></td>
                	<td class="w3-border"><?= h($orden->cantidad) ?></td>
                	<td class="w3-border"><?= h($orden->fecha_creacion) ?></td>
                	<td class="w3-border"><?= h($orden->fecha_terminacion) ?></td>
                	<td class="w3-border"><?= h($orden->estado_id) ?></td>
                	<td class="w3-border"><?= h($orden->proceso_id) ?></td>
                	<td class="w3-border"><?= h($orden->scrap) ?></td>
                	<td class="w3-border"><?= h($orden->coste_operario) ?></td>
                	<td class="w3-border"><?= h($orden->observaciones) ?></td>
                	<td class="w3-border"><?= h($orden->prioridade_id) ?></td>
            	</tr>
            <?php endforeach; ?>
        </table>
    </div>
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->first('<< ' . __('first'), ['model'=>'Ordens']) ?>
                <?= $this->Paginator->prev('< ' . __('previous'), ['model'=>'Ordens']) ?>
                <?= $this->Paginator->numbers(['model'=>'Ordens','modulus' => 4,'first' => 2, 'last' => 2]) ?>
                <?= $this->Paginator->next(__('next') . ' >', ['model'=>'Ordens']) ?>
                <?= $this->Paginator->last(__('last') . ' >>', ['model'=>'Ordens']) ?>
            </ul>
            <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total'),'model'=>'Ordens']) ?></p>
        </div>
    
    <?php endif; ?>
</div>
<div style="display:none" id="proceso" class="related w3-container w3-theme-d3 w3-border">
    <h4><?= __('Related Proceso') ?>
        <?php $my_url_add=$this->Url->build(['controller' => 'proceso', 'action' => 'add',$centro->id,'centro_id'])?>
        <button onClick="location.href='<?= $my_url_add?>'" class="w3-button w3-xlarge w3-circle w3-black">+</button>
    </h4>
        <?php if (!empty($proceso)): ?>
	
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->first('<< ' . __('first'), ['model'=>'Proceso']) ?>
                <?= $this->Paginator->prev('< ' . __('previous'), ['model'=>'Proceso']) ?>
                <?= $this->Paginator->numbers(['model'=>'Proceso','modulus' => 4,'first' => 2, 'last' => 2]) ?>
                <?= $this->Paginator->next(__('next') . ' >', ['model'=>'Proceso']) ?>
                <?= $this->Paginator->last(__('last') . ' >>', ['model'=>'Proceso']) ?>
            </ul>        
        </div>
    <div class="w3-responsive">
		<table class=" w3-table w3-centered w3-border w3-bordered w3-hoverable w3-theme-d4">
        	<thead class="w3-border w3-black">  
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('id','id', ['model'=>'Proceso']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('name','name', ['model'=>'Proceso']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('referencia','referencia', ['model'=>'Proceso']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('familia_id','familia_id', ['model'=>'Proceso']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('precio','precio', ['model'=>'Proceso']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('moneda_id','moneda_id', ['model'=>'Proceso']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('iva_id','iva_id', ['model'=>'Proceso']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('observaciones','observaciones', ['model'=>'Proceso']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('visible','visible', ['model'=>'Proceso']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('enlaces','enlaces', ['model'=>'Proceso']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('coste_tiempo','coste_tiempo', ['model'=>'Proceso']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('coste_operaciones','coste_operaciones', ['model'=>'Proceso']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('descripcion','descripcion', ['model'=>'Proceso']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('larga','larga', ['model'=>'Proceso']) ?></th>
			</thead>
			<tbody>
<?php foreach ($proceso as $proceso): ?>
				<?php $my_url= $this->Url->build(['controller' => 'proceso', 'action' => 'view',$proceso->id]) ?>
            	<tr onClick="location.href='<?= $my_url ?>'" class="w3-hover-black ">
                	<td class="w3-border"><?= h($proceso->id) ?></td>
                	<td class="w3-border"><?= h($proceso->name) ?></td>
                	<td class="w3-border"><?= h($proceso->referencia) ?></td>
                	<td class="w3-border"><?= h($proceso->familia_id) ?></td>
                	<td class="w3-border"><?= h($proceso->precio) ?></td>
                	<td class="w3-border"><?= h($proceso->moneda_id) ?></td>
                	<td class="w3-border"><?= h($proceso->iva_id) ?></td>
                	<td class="w3-border"><?= h($proceso->observaciones) ?></td>
                	<td class="w3-border"><?= h($proceso->visible) ?></td>
                	<td class="w3-border"><?= h($proceso->enlaces) ?></td>
                	<td class="w3-border"><?= h($proceso->coste_tiempo) ?></td>
                	<td class="w3-border"><?= h($proceso->coste_operaciones) ?></td>
                	<td class="w3-border"><?= h($proceso->descripcion) ?></td>
                	<td class="w3-border"><?= h($proceso->larga) ?></td>
            	</tr>
            <?php endforeach; ?>
        </table>
    </div>
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->first('<< ' . __('first'), ['model'=>'Proceso']) ?>
                <?= $this->Paginator->prev('< ' . __('previous'), ['model'=>'Proceso']) ?>
                <?= $this->Paginator->numbers(['model'=>'Proceso','modulus' => 4,'first' => 2, 'last' => 2]) ?>
                <?= $this->Paginator->next(__('next') . ' >', ['model'=>'Proceso']) ?>
                <?= $this->Paginator->last(__('last') . ' >>', ['model'=>'Proceso']) ?>
            </ul>
            <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total'),'model'=>'Proceso']) ?></p>
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

