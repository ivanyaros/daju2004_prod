<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="w3-container">
    <h3><?= h($materiale->label) ?>
        <?php $my_url_edit=$this->Url->build(['controller' => 'materiales','action' => 'edit',$materiale->id])  ?>
        <button onClick="location.href='<?= $my_url_edit?>'" class="w3-button  w3-circle w3-black"> <?= __("Edit")?></button>
    </h3>
    <table class="w3-table w3-border w3-bordered w3-hoverable w3-theme-d4">
        <tr>
            <td class="w3-border"><?= __('Material') ?></td>
            <td class="w3-border"><?= $materiale->has('material') ? $this->Html->link($materiale->material->label, ['controller' => 'Material', 'action' => 'view', $materiale->material->id]) : '' ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Localizacione') ?></td>
            <td class="w3-border"><?= $materiale->has('localizacione') ? $this->Html->link($materiale->localizacione->label, ['controller' => 'Localizaciones', 'action' => 'view', $materiale->localizacione->id]) : '' ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Entradas De Materiale') ?></td>
            <td class="w3-border"><?= $materiale->has('entradas_de_materiale') ? $this->Html->link($materiale->entradas_de_materiale->label, ['controller' => 'EntradasDeMateriales', 'action' => 'view', $materiale->entradas_de_materiale->id]) : '' ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Lote') ?></td>
            <td class="w3-border"><?= h($materiale->lote) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Taras Mediciones') ?></td>
            <td class="w3-border"><?= h($materiale->taras_mediciones) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Id') ?></td>
            <td class="w3-border"><?= $this->Number->format($materiale->id) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Bobinas') ?></td>
            <td class="w3-border"><?= $this->Number->format($materiale->bobinas) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Bobinas Actual') ?></td>
            <td class="w3-border"><?= $this->Number->format($materiale->bobinas_actual) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Numero Bobina') ?></td>
            <td class="w3-border"><?= $this->Number->format($materiale->numero_bobina) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Taras') ?></td>
            <td class="w3-border"><?= $this->Number->format($materiale->taras) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Taras Reales') ?></td>
            <td class="w3-border"><?= $this->Number->format($materiale->taras_reales) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Metros Brutos') ?></td>
            <td class="w3-border"><?= $this->Number->format($materiale->metros_brutos) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Metros Netos') ?></td>
            <td class="w3-border"><?= $this->Number->format($materiale->metros_netos) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Metros Actuales') ?></td>
            <td class="w3-border"><?= $this->Number->format($materiale->metros_actuales) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Metros Utiles') ?></td>
            <td class="w3-border"><?= $this->Number->format($materiale->metros_utiles) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Scrap') ?></td>
            <td class="w3-border"><?= $this->Number->format($materiale->scrap) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Peso Ud') ?></td>
            <td class="w3-border"><?= $this->Number->format($materiale->peso_ud) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Fecha Entega') ?></td>
            <td class="w3-border"><?= h($materiale->fecha_entega) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Bobina Lote') ?></td>
            <td class="w3-border"><?= $materiale->bobina_lote ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('En Uso') ?></td>
            <td class="w3-border"><?= $materiale->en_uso ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Terminado') ?></td>
            <td class="w3-border"><?= $materiale->terminado ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
<div class="w3-bar w3-black">

    <button class="w3-bar-item w3-button tablink" onclick="openRelated(event,'materialesEntrada')"><?= __("Materiales Entrada") ?></button>

<div style="display:none" id="materialesEntrada" class="related w3-container w3-theme-d3 w3-border">
    <h4><?= __('Related Materiales Entrada') ?>
        <?php $my_url_add=$this->Url->build(['controller' => 'materiales-entrada', 'action' => 'add',$materiale->id,'materiale_id'])?>
        <button onClick="location.href='<?= $my_url_add?>'" class="w3-button w3-xlarge w3-circle w3-black">+</button>
    </h4>
        <?php if (!empty($materialesEntrada)): ?>
	
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->first('<< ' . __('first'), ['model'=>'MaterialesEntrada']) ?>
                <?= $this->Paginator->prev('< ' . __('previous'), ['model'=>'MaterialesEntrada']) ?>
                <?= $this->Paginator->numbers(['model'=>'MaterialesEntrada','modulus' => 4,'first' => 2, 'last' => 2]) ?>
                <?= $this->Paginator->next(__('next') . ' >', ['model'=>'MaterialesEntrada']) ?>
                <?= $this->Paginator->last(__('last') . ' >>', ['model'=>'MaterialesEntrada']) ?>
            </ul>        
        </div>
    <div class="w3-responsive">
		<table class=" w3-table w3-centered w3-border w3-bordered w3-hoverable w3-theme-d4">
        	<thead class="w3-border w3-black">  
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('id','id', ['model'=>'MaterialesEntrada']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('objeto_id','objeto_id', ['model'=>'MaterialesEntrada']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('materiale_id','materiale_id', ['model'=>'MaterialesEntrada']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('cantidad_producida','cantidad_producida', ['model'=>'MaterialesEntrada']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('metros_gastados','metros_gastados', ['model'=>'MaterialesEntrada']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('metros_utiles','metros_utiles', ['model'=>'MaterialesEntrada']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('scrap','scrap', ['model'=>'MaterialesEntrada']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('observaciones','observaciones', ['model'=>'MaterialesEntrada']) ?></th>
			</thead>
			<tbody>
<?php foreach ($materialesEntrada as $materialesEntrada): ?>
				<?php $my_url= $this->Url->build(['controller' => 'materialesEntrada', 'action' => 'view',$materialesEntrada->id]) ?>
            	<tr onClick="location.href='<?= $my_url ?>'" class="w3-hover-black ">
                                    <td class="w3-border"><?= h($materialesEntrada->id) ?></td>

                                <td class="w3-border"><?= $materialesEntrada->has('objeto') ? $this->Html->link($materialesEntrada->objeto->label, ['controller' => 'Objetos', 'action' => 'view', $materialesEntrada->objeto->id]) : '' ?></td>

                                <td class="w3-border"><?= $materialesEntrada->has('materiale') ? $this->Html->link($materialesEntrada->materiale->label, ['controller' => 'Materiales', 'action' => 'view', $materialesEntrada->materiale->id]) : '' ?></td>
                        <td class="w3-border"><?= h($materialesEntrada->cantidad_producida) ?></td>
                        <td class="w3-border"><?= h($materialesEntrada->metros_gastados) ?></td>
                        <td class="w3-border"><?= h($materialesEntrada->metros_utiles) ?></td>
                        <td class="w3-border"><?= h($materialesEntrada->scrap) ?></td>
                        <td class="w3-border"><?= h($materialesEntrada->observaciones) ?></td>
            	</tr>
            <?php endforeach; ?>
        </table>
    </div>
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->first('<< ' . __('first'), ['model'=>'MaterialesEntrada']) ?>
                <?= $this->Paginator->prev('< ' . __('previous'), ['model'=>'MaterialesEntrada']) ?>
                <?= $this->Paginator->numbers(['model'=>'MaterialesEntrada','modulus' => 4,'first' => 2, 'last' => 2]) ?>
                <?= $this->Paginator->next(__('next') . ' >', ['model'=>'MaterialesEntrada']) ?>
                <?= $this->Paginator->last(__('last') . ' >>', ['model'=>'MaterialesEntrada']) ?>
            </ul>
            <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total'),'model'=>'MaterialesEntrada']) ?></p>
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

