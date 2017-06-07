<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="direcciones view large-9 medium-8 columns content">
    <h3><?= h($direccione->label) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Proveedores Cliente') ?></th>
            <td><?= $direccione->has('proveedores_cliente') ? $this->Html->link($direccione->proveedores_cliente->label, ['controller' => 'ProveedoresClientes', 'action' => 'view', $direccione->proveedores_cliente->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Direccion') ?></th>
            <td><?= h($direccione->direccion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telefono') ?></th>
            <td><?= h($direccione->telefono) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fax') ?></th>
            <td><?= h($direccione->fax) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Correo') ?></th>
            <td><?= h($direccione->correo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pagina Web') ?></th>
            <td><?= h($direccione->pagina_web) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Observaciones') ?></th>
            <td><?= h($direccione->observaciones) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($direccione->id) ?></td>
        </tr>
    </table>
<div class="w3-bar w3-black">

    <button class="w3-bar-item w3-button tablink" onclick="openRelated(event,'envios')"><?= __("Envios") ?></button>

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

