<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="w3-container">
    <h3><?= h($entradasDeMateriale->label) ?>
        <?php $my_url_edit=$this->Url->build(['controller' => 'entradasDeMateriales','action' => 'edit',$entradasDeMateriale->id])  ?>
        <button onClick="location.href='<?= $my_url_edit?>'" class="w3-button  w3-circle w3-black"> <?= __("Edit")?></button>
    </h3>
    <table class="w3-table w3-border w3-bordered w3-hoverable w3-theme-d4">
        <tr>
            <td class="w3-border"><?= __('Proveedores Cliente') ?></td>
            <td class="w3-border"><?= $entradasDeMateriale->has('proveedores_cliente') ? $this->Html->link($entradasDeMateriale->proveedores_cliente->label, ['controller' => 'ProveedoresClientes', 'action' => 'view', $entradasDeMateriale->proveedores_cliente->id]) : '' ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Referencia') ?></td>
            <td class="w3-border"><?= h($entradasDeMateriale->referencia) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Observaciones') ?></td>
            <td class="w3-border"><?= h($entradasDeMateriale->observaciones) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Albaran') ?></td>
            <td class="w3-border"><?= h($entradasDeMateriale->albaran) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Centro') ?></td>
            <td class="w3-border"><?= $entradasDeMateriale->has('centro') ? $this->Html->link($entradasDeMateriale->centro->label, ['controller' => 'Centros', 'action' => 'view', $entradasDeMateriale->centro->id]) : '' ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Id') ?></td>
            <td class="w3-border"><?= $this->Number->format($entradasDeMateriale->id) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Fecha Envio') ?></td>
            <td class="w3-border"><?= h($entradasDeMateriale->fecha_envio) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Fecha Recepcion') ?></td>
            <td class="w3-border"><?= h($entradasDeMateriale->fecha_recepcion) ?></td>
        </tr>
    </table>
<div class="w3-bar w3-black">

    <button class="w3-bar-item w3-button tablink" onclick="openRelated(event,'materiales')"><?= __("Materiales") ?></button>

<div style="display:none" id="materiales" class="related w3-container w3-theme-d3 w3-border">
    <h4><?= __('Related Materiales') ?>
        <?php $my_url_add=$this->Url->build(['controller' => 'materiales', 'action' => 'add',$entradasDeMateriale->id,'entradas_de_materiale_id'])?>
        <button onClick="location.href='<?= $my_url_add?>'" class="w3-button w3-xlarge w3-circle w3-black">+</button>
    </h4>
        <?php if (!empty($materiales)): ?>
	
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->first('<< ' . __('first'), ['model'=>'Materiales']) ?>
                <?= $this->Paginator->prev('< ' . __('previous'), ['model'=>'Materiales']) ?>
                <?= $this->Paginator->numbers(['model'=>'Materiales','modulus' => 4,'first' => 2, 'last' => 2]) ?>
                <?= $this->Paginator->next(__('next') . ' >', ['model'=>'Materiales']) ?>
                <?= $this->Paginator->last(__('last') . ' >>', ['model'=>'Materiales']) ?>
            </ul>        
        </div>
    <div class="w3-responsive">
		<table class=" w3-table w3-centered w3-border w3-bordered w3-hoverable w3-theme-d4">
        	<thead class="w3-border w3-black">  
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('id','id', ['model'=>'Materiales']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('material_id','material_id', ['model'=>'Materiales']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('fecha_entega','fecha_entega', ['model'=>'Materiales']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('localizacione_id','localizacione_id', ['model'=>'Materiales']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('entradas_de_materiale_id','entradas_de_materiale_id', ['model'=>'Materiales']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('bobina','bobina', ['model'=>'Materiales']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('bobinas','bobinas', ['model'=>'Materiales']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('bobinas_actual','bobinas_actual', ['model'=>'Materiales']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('lote','lote', ['model'=>'Materiales']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('numero_bobina','numero_bobina', ['model'=>'Materiales']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('taras','taras', ['model'=>'Materiales']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('taras_reales','taras_reales', ['model'=>'Materiales']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('taras_mediciones','taras_mediciones', ['model'=>'Materiales']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('metros_brutos','metros_brutos', ['model'=>'Materiales']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('metros_netos','metros_netos', ['model'=>'Materiales']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('metros_actuales','metros_actuales', ['model'=>'Materiales']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('metros_utiles','metros_utiles', ['model'=>'Materiales']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('scrap','scrap', ['model'=>'Materiales']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('en_uso','en_uso', ['model'=>'Materiales']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('terminado','terminado', ['model'=>'Materiales']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('peso_ud','peso_ud', ['model'=>'Materiales']) ?></th>
			</thead>
			<tbody>
<?php foreach ($materiales as $materiale): ?>
				<?php $my_url= $this->Url->build(['controller' => 'materiales', 'action' => 'view',$materiale->id]) ?>
            	<tr onClick="location.href='<?= $my_url ?>'" class="w3-hover-black ">
                                    <td class="w3-border"><?= h($materiale->id) ?></td>

                                <td class="w3-border"><?= $materiale->has('material') ? $this->Html->link($materiale->material->label, ['controller' => 'Material', 'action' => 'view', $materiale->material->id]) : '' ?></td>
                        <td class="w3-border"><?= h($materiale->fecha_entrega) ?></td>

                                <td class="w3-border"><?= $materiale->has('localizacione') ? $this->Html->link($materiale->localizacione->label, ['controller' => 'Localizaciones', 'action' => 'view', $materiale->localizacione->id]) : '' ?></td>

                                <td class="w3-border"><?= $materiale->has('entradas_de_materiale') ? $this->Html->link($materiale->entradas_de_materiale->label, ['controller' => 'EntradasDeMateriales', 'action' => 'view', $materiale->entradas_de_materiale->id]) : '' ?></td>
                        <td class="w3-border"><?= h($materiale->bobina) ?></td>
                        <td class="w3-border"><?= h($materiale->bobinas) ?></td>
                        <td class="w3-border"><?= h($materiale->bobinas_actual) ?></td>
                        <td class="w3-border"><?= h($materiale->lote) ?></td>
                        <td class="w3-border"><?= h($materiale->numero_bobina) ?></td>
                        <td class="w3-border"><?= h($materiale->taras) ?></td>
                        <td class="w3-border"><?= h($materiale->taras_reales) ?></td>
                        <td class="w3-border"><?= h($materiale->taras_mediciones) ?></td>
                        <td class="w3-border"><?= h($materiale->metros_brutos) ?></td>
                        <td class="w3-border"><?= h($materiale->metros_netos) ?></td>
                        <td class="w3-border"><?= h($materiale->metros_actuales) ?></td>
                        <td class="w3-border"><?= h($materiale->metros_utiles) ?></td>
                        <td class="w3-border"><?= h($materiale->scrap) ?></td>
                        <td class="w3-border"><?= h($materiale->en_uso) ?></td>
                        <td class="w3-border"><?= h($materiale->terminado) ?></td>
                        <td class="w3-border"><?= h($materiale->peso_ud) ?></td>
            	</tr>
            <?php endforeach; ?>
        </table>
    </div>
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->first('<< ' . __('first'), ['model'=>'Materiales']) ?>
                <?= $this->Paginator->prev('< ' . __('previous'), ['model'=>'Materiales']) ?>
                <?= $this->Paginator->numbers(['model'=>'Materiales','modulus' => 4,'first' => 2, 'last' => 2]) ?>
                <?= $this->Paginator->next(__('next') . ' >', ['model'=>'Materiales']) ?>
                <?= $this->Paginator->last(__('last') . ' >>', ['model'=>'Materiales']) ?>
            </ul>
            <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total'),'model'=>'Materiales']) ?></p>
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

