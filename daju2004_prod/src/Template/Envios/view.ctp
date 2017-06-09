<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="w3-container">
    <h3><?= h($envio->label) ?>
        <?php $my_url_edit=$this->Url->build(['controller' => 'envios','action' => 'edit',$envio->id])  ?>
        <button onClick="location.href='<?= $my_url_edit?>'" class="w3-button  w3-circle w3-black"> <?= __("Edit")?></button>
    </h3>
    <table class="w3-table w3-border w3-bordered w3-hoverable w3-theme-d4">
        <tr>
            <td class="w3-border"><?= __('Proveedores Cliente') ?></td>
            <td class="w3-border"><?= $envio->has('proveedores_cliente') ? $this->Html->link($envio->proveedores_cliente->label, ['controller' => 'ProveedoresClientes', 'action' => 'view', $envio->proveedores_cliente->id]) : '' ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Albaran') ?></td>
            <td class="w3-border"><?= h($envio->albaran) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Pedidos Empresa') ?></td>
            <td class="w3-border"><?= $envio->has('pedidos_empresa') ? $this->Html->link($envio->pedidos_empresa->label, ['controller' => 'PedidosEmpresas', 'action' => 'view', $envio->pedidos_empresa->id]) : '' ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Centro') ?></td>
            <td class="w3-border"><?= $envio->has('centro') ? $this->Html->link($envio->centro->label, ['controller' => 'Centros', 'action' => 'view', $envio->centro->id]) : '' ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Observaciones') ?></td>
            <td class="w3-border"><?= h($envio->observaciones) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Direccione') ?></td>
            <td class="w3-border"><?= $envio->has('direccione') ? $this->Html->link($envio->direccione->label, ['controller' => 'Direcciones', 'action' => 'view', $envio->direccione->id]) : '' ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Id') ?></td>
            <td class="w3-border"><?= $this->Number->format($envio->id) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Fecha Pedido') ?></td>
            <td class="w3-border"><?= h($envio->fecha_pedido) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Fecha Envio') ?></td>
            <td class="w3-border"><?= h($envio->fecha_envio) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Fecha Entrega') ?></td>
            <td class="w3-border"><?= h($envio->fecha_entrega) ?></td>
        </tr>
    </table>
<div class="w3-bar w3-black">

    <button class="w3-bar-item w3-button tablink" onclick="openRelated(event,'objetos')"><?= __("Objetos") ?></button>

<div style="display:none" id="objetos" class="related w3-container w3-theme-d3 w3-border">
    <h4><?= __('Related Objetos') ?>
        <?php $my_url_add=$this->Url->build(['controller' => 'objetos', 'action' => 'add',$envio->id,'envio_id'])?>
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
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('orden_id','orden_id', ['model'=>'Objetos']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('lote','lote', ['model'=>'Objetos']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('localizacione_id','localizacione_id', ['model'=>'Objetos']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('coste','coste', ['model'=>'Objetos']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('defectuosos','defectuosos', ['model'=>'Objetos']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('peso','peso', ['model'=>'Objetos']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('observaciones','observaciones', ['model'=>'Objetos']) ?></th>
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
                	<td class="w3-border"><?= h($objeto->orden_id) ?></td>
                	<td class="w3-border"><?= h($objeto->lote) ?></td>
                	<td class="w3-border"><?= h($objeto->localizacione_id) ?></td>
                	<td class="w3-border"><?= h($objeto->coste) ?></td>
                	<td class="w3-border"><?= h($objeto->defectuosos) ?></td>
                	<td class="w3-border"><?= h($objeto->peso) ?></td>
                	<td class="w3-border"><?= h($objeto->observaciones) ?></td>
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

