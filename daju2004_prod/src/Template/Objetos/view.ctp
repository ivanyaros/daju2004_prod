<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="objetos view large-9 medium-8 columns content">
    <h3><?= h($objeto->label) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($objeto->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Producto') ?></th>
            <td><?= $objeto->has('producto') ? $this->Html->link($objeto->producto->label, ['controller' => 'Producto', 'action' => 'view', $objeto->producto->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Referencia') ?></th>
            <td><?= h($objeto->referencia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Orden') ?></th>
            <td><?= $objeto->has('orden') ? $this->Html->link($objeto->orden->label, ['controller' => 'Ordens', 'action' => 'view', $objeto->orden->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Lote') ?></th>
            <td><?= h($objeto->lote) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Localizacione') ?></th>
            <td><?= $objeto->has('localizacione') ? $this->Html->link($objeto->localizacione->label, ['controller' => 'Localizaciones', 'action' => 'view', $objeto->localizacione->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Observaciones') ?></th>
            <td><?= h($objeto->observaciones) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($objeto->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Numero Serie') ?></th>
            <td><?= $this->Number->format($objeto->numero_serie) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Coste') ?></th>
            <td><?= $this->Number->format($objeto->coste) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Defectuosos') ?></th>
            <td><?= $this->Number->format($objeto->defectuosos) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Peso') ?></th>
            <td><?= $this->Number->format($objeto->peso) ?></td>
        </tr>
    </table>
<div class="w3-bar w3-black">

    <button class="w3-bar-item w3-button tablink" onclick="openRelated(event,'materialesEntrada')"><?= __("Materiales Entrada") ?></button>

    <button class="w3-bar-item w3-button tablink" onclick="openRelated(event,'envios')"><?= __("Envios") ?></button>

<div style="display:none" id="materialesEntrada" class="related w3-container w3-theme-d3 w3-border">
    <h4><?= __('Related Materiales Entrada') ?></h4>
        <?php if (!empty($materialesEntrada)): ?>
	<div class="w3-responsive">
		<table class=" w3-table w3-border w3-bordered w3-hoverable w3-theme-d4">
        	<thead class="w3-border w3-black">  
                <th scope="col"><?= $this->Paginator->sort('id','id', ['model'=>'MaterialesEntrada']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('materiale_id','materiale_id', ['model'=>'MaterialesEntrada']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('cantidad_producida','cantidad_producida', ['model'=>'MaterialesEntrada']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('metros_gastados','metros_gastados', ['model'=>'MaterialesEntrada']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('metros_utiles','metros_utiles', ['model'=>'MaterialesEntrada']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('scrap','scrap', ['model'=>'MaterialesEntrada']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('observaciones','observaciones', ['model'=>'MaterialesEntrada']) ?></th>
			</thead>
			<tbody>
<?php foreach ($materialesEntrada as $materialesEntrada): ?>
				<?php $my_url= $this->Url->build(['controller' => 'materialesEntrada', 'action' => 'view',$materialesEntrada->id]) ?>
            	<tr onClick="location.href='<?= $my_url ?>'" class="w3-hover-black ">
                	<td><?= h($materialesEntrada->id) ?></td>
                	<td><?= h($materialesEntrada->materiale_id) ?></td>
                	<td><?= h($materialesEntrada->cantidad_producida) ?></td>
                	<td><?= h($materialesEntrada->metros_gastados) ?></td>
                	<td><?= h($materialesEntrada->metros_utiles) ?></td>
                	<td><?= h($materialesEntrada->scrap) ?></td>
                	<td><?= h($materialesEntrada->observaciones) ?></td>
            	</tr>
            <?php endforeach; ?>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first'), ['model'=>'MaterialesEntrada']) ?>
            <?= $this->Paginator->prev('< ' . __('previous'), ['model'=>'MaterialesEntrada']) ?>
            <?= $this->Paginator->numbers(['model'=>'MaterialesEntrada']) ?>
            <?= $this->Paginator->next(__('next') . ' >', ['model'=>'MaterialesEntrada']) ?>
            <?= $this->Paginator->last(__('last') . ' >>', ['model'=>'MaterialesEntrada']) ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')], ['model'=>'MaterialesEntrada']) ?></p>
    </div>
    <?php endif; ?>
</div>
<div style="display:none" id="envios" class="related w3-container w3-theme-d3 w3-border">
    <h4><?= __('Related Envios') ?></h4>
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
                <th scope="col"><?= $this->Paginator->sort('centro_id','centro_id', ['model'=>'Envios']) ?></th>
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
                	<td><?= h($envio->centro_id) ?></td>
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

