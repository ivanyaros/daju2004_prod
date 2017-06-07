<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="localizaciones view large-9 medium-8 columns content">
    <h3><?= h($localizacione->label) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($localizacione->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Centro') ?></th>
            <td><?= $localizacione->has('centro') ? $this->Html->link($localizacione->centro->label, ['controller' => 'Centros', 'action' => 'view', $localizacione->centro->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($localizacione->id) ?></td>
        </tr>
    </table>
<div class="w3-bar w3-black">

    <button class="w3-bar-item w3-button tablink" onclick="openRelated(event,'materiales')"><?= __("Materiales") ?></button>

    <button class="w3-bar-item w3-button tablink" onclick="openRelated(event,'objetos')"><?= __("Objetos") ?></button>

<div style="display:none" id="materiales" class="related w3-container w3-theme-d3 w3-border">
    <h4><?= __('Related Materiales') ?></h4>
        <?php if (!empty($materiales)): ?>
	<div class="w3-responsive">
		<table class=" w3-table w3-border w3-bordered w3-hoverable w3-theme-d4">
        	<thead class="w3-border w3-black">  
                <th scope="col"><?= $this->Paginator->sort('id','id', ['model'=>'Materiales']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('material_id','material_id', ['model'=>'Materiales']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_entega','fecha_entega', ['model'=>'Materiales']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('entradas_de_materiale_id','entradas_de_materiale_id', ['model'=>'Materiales']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('bobina_lote','bobina_lote', ['model'=>'Materiales']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('bobinas','bobinas', ['model'=>'Materiales']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('bobinas_actual','bobinas_actual', ['model'=>'Materiales']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('lote','lote', ['model'=>'Materiales']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('numero_bobina','numero_bobina', ['model'=>'Materiales']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('taras','taras', ['model'=>'Materiales']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('taras_reales','taras_reales', ['model'=>'Materiales']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('taras_mediciones','taras_mediciones', ['model'=>'Materiales']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('metros_brutos','metros_brutos', ['model'=>'Materiales']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('metros_netos','metros_netos', ['model'=>'Materiales']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('metros_actuales','metros_actuales', ['model'=>'Materiales']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('metros_utiles','metros_utiles', ['model'=>'Materiales']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('scrap','scrap', ['model'=>'Materiales']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('en_uso','en_uso', ['model'=>'Materiales']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('terminado','terminado', ['model'=>'Materiales']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('peso_ud','peso_ud', ['model'=>'Materiales']) ?></th>
			</thead>
			<tbody>
<?php foreach ($materiales as $materiale): ?>
				<?php $my_url= $this->Url->build(['controller' => 'materiales', 'action' => 'view',$materiale->id]) ?>
            	<tr onClick="location.href='<?= $my_url ?>'" class="w3-hover-black ">
                	<td><?= h($materiale->id) ?></td>
                	<td><?= h($materiale->material_id) ?></td>
                	<td><?= h($materiale->fecha_entega) ?></td>
                	<td><?= h($materiale->entradas_de_materiale_id) ?></td>
                	<td><?= h($materiale->bobina_lote) ?></td>
                	<td><?= h($materiale->bobinas) ?></td>
                	<td><?= h($materiale->bobinas_actual) ?></td>
                	<td><?= h($materiale->lote) ?></td>
                	<td><?= h($materiale->numero_bobina) ?></td>
                	<td><?= h($materiale->taras) ?></td>
                	<td><?= h($materiale->taras_reales) ?></td>
                	<td><?= h($materiale->taras_mediciones) ?></td>
                	<td><?= h($materiale->metros_brutos) ?></td>
                	<td><?= h($materiale->metros_netos) ?></td>
                	<td><?= h($materiale->metros_actuales) ?></td>
                	<td><?= h($materiale->metros_utiles) ?></td>
                	<td><?= h($materiale->scrap) ?></td>
                	<td><?= h($materiale->en_uso) ?></td>
                	<td><?= h($materiale->terminado) ?></td>
                	<td><?= h($materiale->peso_ud) ?></td>
            	</tr>
            <?php endforeach; ?>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first'), ['model'=>'Materiales']) ?>
            <?= $this->Paginator->prev('< ' . __('previous'), ['model'=>'Materiales']) ?>
            <?= $this->Paginator->numbers(['model'=>'Materiales']) ?>
            <?= $this->Paginator->next(__('next') . ' >', ['model'=>'Materiales']) ?>
            <?= $this->Paginator->last(__('last') . ' >>', ['model'=>'Materiales']) ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')], ['model'=>'Materiales']) ?></p>
    </div>
    <?php endif; ?>
</div>
<div style="display:none" id="objetos" class="related w3-container w3-theme-d3 w3-border">
    <h4><?= __('Related Objetos') ?></h4>
        <?php if (!empty($objetos)): ?>
	<div class="w3-responsive">
		<table class=" w3-table w3-border w3-bordered w3-hoverable w3-theme-d4">
        	<thead class="w3-border w3-black">  
                <th scope="col"><?= $this->Paginator->sort('id','id', ['model'=>'Objetos']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('name','name', ['model'=>'Objetos']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('producto_id','producto_id', ['model'=>'Objetos']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('numero_serie','numero_serie', ['model'=>'Objetos']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('referencia','referencia', ['model'=>'Objetos']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('orden_id','orden_id', ['model'=>'Objetos']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('lote','lote', ['model'=>'Objetos']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('coste','coste', ['model'=>'Objetos']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('defectuosos','defectuosos', ['model'=>'Objetos']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('peso','peso', ['model'=>'Objetos']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('observaciones','observaciones', ['model'=>'Objetos']) ?></th>
			</thead>
			<tbody>
<?php foreach ($objetos as $objeto): ?>
				<?php $my_url= $this->Url->build(['controller' => 'objetos', 'action' => 'view',$objeto->id]) ?>
            	<tr onClick="location.href='<?= $my_url ?>'" class="w3-hover-black ">
                	<td><?= h($objeto->id) ?></td>
                	<td><?= h($objeto->name) ?></td>
                	<td><?= h($objeto->producto_id) ?></td>
                	<td><?= h($objeto->numero_serie) ?></td>
                	<td><?= h($objeto->referencia) ?></td>
                	<td><?= h($objeto->orden_id) ?></td>
                	<td><?= h($objeto->lote) ?></td>
                	<td><?= h($objeto->coste) ?></td>
                	<td><?= h($objeto->defectuosos) ?></td>
                	<td><?= h($objeto->peso) ?></td>
                	<td><?= h($objeto->observaciones) ?></td>
            	</tr>
            <?php endforeach; ?>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first'), ['model'=>'Objetos']) ?>
            <?= $this->Paginator->prev('< ' . __('previous'), ['model'=>'Objetos']) ?>
            <?= $this->Paginator->numbers(['model'=>'Objetos']) ?>
            <?= $this->Paginator->next(__('next') . ' >', ['model'=>'Objetos']) ?>
            <?= $this->Paginator->last(__('last') . ' >>', ['model'=>'Objetos']) ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')], ['model'=>'Objetos']) ?></p>
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

