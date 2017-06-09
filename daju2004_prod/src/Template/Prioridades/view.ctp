<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="w3-container">
    <h3><?= h($prioridade->label) ?>
        <?php $my_url_edit=$this->Url->build(['controller' => 'prioridades','action' => 'edit',$prioridade->id])  ?>
        <button onClick="location.href='<?= $my_url_edit?>'" class="w3-button  w3-circle w3-black"> <?= __("Edit")?></button>
    </h3>
    <table class="w3-table w3-border w3-bordered w3-hoverable w3-theme-d4">
        <tr>
            <td class="w3-border"><?= __('Name') ?></td>
            <td class="w3-border"><?= h($prioridade->name) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Id') ?></td>
            <td class="w3-border"><?= $this->Number->format($prioridade->id) ?></td>
        </tr>
    </table>
<div class="w3-bar w3-black">

    <button class="w3-bar-item w3-button tablink" onclick="openRelated(event,'ordens')"><?= __("Ordens") ?></button>

    <button class="w3-bar-item w3-button tablink" onclick="openRelated(event,'pedidosProductosDetalle')"><?= __("Pedidos Productos Detalle") ?></button>

<div style="display:none" id="ordens" class="related w3-container w3-theme-d3 w3-border">
    <h4><?= __('Related Ordens') ?>
        <?php $my_url_add=$this->Url->build(['controller' => 'ordens', 'action' => 'add',$prioridade->id,'prioridade_id'])?>
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
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('centro_id','centro_id', ['model'=>'Ordens']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('proceso_id','proceso_id', ['model'=>'Ordens']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('scrap','scrap', ['model'=>'Ordens']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('coste_operario','coste_operario', ['model'=>'Ordens']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('observaciones','observaciones', ['model'=>'Ordens']) ?></th>
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
                	<td class="w3-border"><?= h($orden->centro_id) ?></td>
                	<td class="w3-border"><?= h($orden->proceso_id) ?></td>
                	<td class="w3-border"><?= h($orden->scrap) ?></td>
                	<td class="w3-border"><?= h($orden->coste_operario) ?></td>
                	<td class="w3-border"><?= h($orden->observaciones) ?></td>
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
<div style="display:none" id="pedidosProductosDetalle" class="related w3-container w3-theme-d3 w3-border">
    <h4><?= __('Related Pedidos Productos Detalle') ?>
        <?php $my_url_add=$this->Url->build(['controller' => 'pedidos-productos-detalle', 'action' => 'add',$prioridade->id,'prioridade_id'])?>
        <button onClick="location.href='<?= $my_url_add?>'" class="w3-button w3-xlarge w3-circle w3-black">+</button>
    </h4>
        <?php if (!empty($pedidosProductosDetalle)): ?>
	
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->first('<< ' . __('first'), ['model'=>'PedidosProductosDetalle']) ?>
                <?= $this->Paginator->prev('< ' . __('previous'), ['model'=>'PedidosProductosDetalle']) ?>
                <?= $this->Paginator->numbers(['model'=>'PedidosProductosDetalle','modulus' => 4,'first' => 2, 'last' => 2]) ?>
                <?= $this->Paginator->next(__('next') . ' >', ['model'=>'PedidosProductosDetalle']) ?>
                <?= $this->Paginator->last(__('last') . ' >>', ['model'=>'PedidosProductosDetalle']) ?>
            </ul>        
        </div>
    <div class="w3-responsive">
		<table class=" w3-table w3-centered w3-border w3-bordered w3-hoverable w3-theme-d4">
        	<thead class="w3-border w3-black">  
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('id','id', ['model'=>'PedidosProductosDetalle']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('pedidos_empresa_id','pedidos_empresa_id', ['model'=>'PedidosProductosDetalle']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('producto_id','producto_id', ['model'=>'PedidosProductosDetalle']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('cantidad','cantidad', ['model'=>'PedidosProductosDetalle']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('fecha','fecha', ['model'=>'PedidosProductosDetalle']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('observaciones','observaciones', ['model'=>'PedidosProductosDetalle']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('terminado','terminado', ['model'=>'PedidosProductosDetalle']) ?></th>
			</thead>
			<tbody>
<?php foreach ($pedidosProductosDetalle as $pedidosProductosDetalle): ?>
				<?php $my_url= $this->Url->build(['controller' => 'pedidosProductosDetalle', 'action' => 'view',$pedidosProductosDetalle->id]) ?>
            	<tr onClick="location.href='<?= $my_url ?>'" class="w3-hover-black ">
                	<td class="w3-border"><?= h($pedidosProductosDetalle->id) ?></td>
                	<td class="w3-border"><?= h($pedidosProductosDetalle->pedidos_empresa_id) ?></td>
                	<td class="w3-border"><?= h($pedidosProductosDetalle->producto_id) ?></td>
                	<td class="w3-border"><?= h($pedidosProductosDetalle->cantidad) ?></td>
                	<td class="w3-border"><?= h($pedidosProductosDetalle->fecha) ?></td>
                	<td class="w3-border"><?= h($pedidosProductosDetalle->observaciones) ?></td>
                	<td class="w3-border"><?= h($pedidosProductosDetalle->terminado) ?></td>
            	</tr>
            <?php endforeach; ?>
        </table>
    </div>
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->first('<< ' . __('first'), ['model'=>'PedidosProductosDetalle']) ?>
                <?= $this->Paginator->prev('< ' . __('previous'), ['model'=>'PedidosProductosDetalle']) ?>
                <?= $this->Paginator->numbers(['model'=>'PedidosProductosDetalle','modulus' => 4,'first' => 2, 'last' => 2]) ?>
                <?= $this->Paginator->next(__('next') . ' >', ['model'=>'PedidosProductosDetalle']) ?>
                <?= $this->Paginator->last(__('last') . ' >>', ['model'=>'PedidosProductosDetalle']) ?>
            </ul>
            <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total'),'model'=>'PedidosProductosDetalle']) ?></p>
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

