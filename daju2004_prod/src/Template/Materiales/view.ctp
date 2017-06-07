<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="materiales view large-9 medium-8 columns content">
    <h3><?= h($materiale->label) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Material') ?></th>
            <td><?= $materiale->has('material') ? $this->Html->link($materiale->material->label, ['controller' => 'Material', 'action' => 'view', $materiale->material->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Localizacione') ?></th>
            <td><?= $materiale->has('localizacione') ? $this->Html->link($materiale->localizacione->label, ['controller' => 'Localizaciones', 'action' => 'view', $materiale->localizacione->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Entradas De Materiale') ?></th>
            <td><?= $materiale->has('entradas_de_materiale') ? $this->Html->link($materiale->entradas_de_materiale->label, ['controller' => 'EntradasDeMateriales', 'action' => 'view', $materiale->entradas_de_materiale->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Lote') ?></th>
            <td><?= h($materiale->lote) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Taras Mediciones') ?></th>
            <td><?= h($materiale->taras_mediciones) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($materiale->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Bobinas') ?></th>
            <td><?= $this->Number->format($materiale->bobinas) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Bobinas Actual') ?></th>
            <td><?= $this->Number->format($materiale->bobinas_actual) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Numero Bobina') ?></th>
            <td><?= $this->Number->format($materiale->numero_bobina) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Taras') ?></th>
            <td><?= $this->Number->format($materiale->taras) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Taras Reales') ?></th>
            <td><?= $this->Number->format($materiale->taras_reales) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Metros Brutos') ?></th>
            <td><?= $this->Number->format($materiale->metros_brutos) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Metros Netos') ?></th>
            <td><?= $this->Number->format($materiale->metros_netos) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Metros Actuales') ?></th>
            <td><?= $this->Number->format($materiale->metros_actuales) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Metros Utiles') ?></th>
            <td><?= $this->Number->format($materiale->metros_utiles) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Scrap') ?></th>
            <td><?= $this->Number->format($materiale->scrap) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Peso Ud') ?></th>
            <td><?= $this->Number->format($materiale->peso_ud) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha Entega') ?></th>
            <td><?= h($materiale->fecha_entega) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Bobina Lote') ?></th>
            <td><?= $materiale->bobina_lote ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('En Uso') ?></th>
            <td><?= $materiale->en_uso ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Terminado') ?></th>
            <td><?= $materiale->terminado ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
<div class="w3-bar w3-black">

    <button class="w3-bar-item w3-button tablink" onclick="openRelated(event,'materialesEntrada')"><?= __("Materiales Entrada") ?></button>

<div style="display:none" id="materialesEntrada" class="related w3-container w3-theme-d3 w3-border">
    <h4><?= __('Related Materiales Entrada') ?>
        <button onClick="location.href='/materiales-entrada/add/<?= $materiale->id ?>/materiale_id'" class="w3-button w3-xlarge w3-circle w3-black">+</button>
    </h4>
        <?php if (!empty($materialesEntrada)): ?>
	<div class="w3-responsive">
		<table class=" w3-table w3-border w3-bordered w3-hoverable w3-theme-d4">
        	<thead class="w3-border w3-black">  
                <th scope="col"><?= $this->Paginator->sort('id','id', ['model'=>'MaterialesEntrada']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('objeto_id','objeto_id', ['model'=>'MaterialesEntrada']) ?></th>
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
                	<td><?= h($materialesEntrada->objeto_id) ?></td>
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

