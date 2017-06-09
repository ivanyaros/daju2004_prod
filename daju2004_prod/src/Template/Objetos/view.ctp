<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="w3-container">
    <h3><?= h($objeto->label) ?>
        <?php $my_url_edit=$this->Url->build(['controller' => 'objetos','action' => 'edit',$objeto->id])  ?>
        <button onClick="location.href='<?= $my_url_edit?>'" class="w3-button  w3-circle w3-black"> <?= __("Edit")?></button>
    </h3>
    <table class="w3-table w3-border w3-bordered w3-hoverable w3-theme-d4">
        <tr>
            <td class="w3-border"><?= __('Name') ?></td>
            <td class="w3-border"><?= h($objeto->name) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Producto') ?></td>
            <td class="w3-border"><?= $objeto->has('producto') ? $this->Html->link($objeto->producto->label, ['controller' => 'Producto', 'action' => 'view', $objeto->producto->id]) : '' ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Referencia') ?></td>
            <td class="w3-border"><?= h($objeto->referencia) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Orden') ?></td>
            <td class="w3-border"><?= $objeto->has('orden') ? $this->Html->link($objeto->orden->label, ['controller' => 'Ordens', 'action' => 'view', $objeto->orden->id]) : '' ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Lote') ?></td>
            <td class="w3-border"><?= h($objeto->lote) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Localizacione') ?></td>
            <td class="w3-border"><?= $objeto->has('localizacione') ? $this->Html->link($objeto->localizacione->label, ['controller' => 'Localizaciones', 'action' => 'view', $objeto->localizacione->id]) : '' ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Observaciones') ?></td>
            <td class="w3-border"><?= h($objeto->observaciones) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Envio') ?></td>
            <td class="w3-border"><?= $objeto->has('envio') ? $this->Html->link($objeto->envio->label, ['controller' => 'Envios', 'action' => 'view', $objeto->envio->id]) : '' ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Id') ?></td>
            <td class="w3-border"><?= $this->Number->format($objeto->id) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Numero Serie') ?></td>
            <td class="w3-border"><?= $this->Number->format($objeto->numero_serie) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Coste') ?></td>
            <td class="w3-border"><?= $this->Number->format($objeto->coste) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Defectuosos') ?></td>
            <td class="w3-border"><?= $this->Number->format($objeto->defectuosos) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Peso') ?></td>
            <td class="w3-border"><?= $this->Number->format($objeto->peso) ?></td>
        </tr>
    </table>
<div class="w3-bar w3-black">

    <button class="w3-bar-item w3-button tablink" onclick="openRelated(event,'materialesEntrada')"><?= __("Materiales Entrada") ?></button>

    <button class="w3-bar-item w3-button tablink" onclick="openRelated(event,'objetosEntrada')"><?= __("Objetos Entrada") ?></button>

<div style="display:none" id="materialesEntrada" class="related w3-container w3-theme-d3 w3-border">
    <h4><?= __('Related Materiales Entrada') ?>
        <?php $my_url_add=$this->Url->build(['controller' => 'materiales-entrada', 'action' => 'add',$objeto->id,'objeto_id'])?>
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
                	<td class="w3-border"><?= h($materialesEntrada->materiale_id) ?></td>
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
<div style="display:none" id="objetosEntrada" class="related w3-container w3-theme-d3 w3-border">
    <h4><?= __('Related Objetos Entrada') ?>
        <?php $my_url_add=$this->Url->build(['controller' => 'objetos-entrada', 'action' => 'add',$objeto->id,'objeto_id'])?>
        <button onClick="location.href='<?= $my_url_add?>'" class="w3-button w3-xlarge w3-circle w3-black">+</button>
    </h4>
        <?php if (!empty($objetosEntrada)): ?>
	
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->first('<< ' . __('first'), ['model'=>'ObjetosEntrada']) ?>
                <?= $this->Paginator->prev('< ' . __('previous'), ['model'=>'ObjetosEntrada']) ?>
                <?= $this->Paginator->numbers(['model'=>'ObjetosEntrada','modulus' => 4,'first' => 2, 'last' => 2]) ?>
                <?= $this->Paginator->next(__('next') . ' >', ['model'=>'ObjetosEntrada']) ?>
                <?= $this->Paginator->last(__('last') . ' >>', ['model'=>'ObjetosEntrada']) ?>
            </ul>        
        </div>
    <div class="w3-responsive">
		<table class=" w3-table w3-centered w3-border w3-bordered w3-hoverable w3-theme-d4">
        	<thead class="w3-border w3-black">  
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('id','id', ['model'=>'ObjetosEntrada']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('entrada_id','entrada_id', ['model'=>'ObjetosEntrada']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('cantidad_entrada','cantidad_entrada', ['model'=>'ObjetosEntrada']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('cantidad_producida','cantidad_producida', ['model'=>'ObjetosEntrada']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('observaciones','observaciones', ['model'=>'ObjetosEntrada']) ?></th>
			</thead>
			<tbody>
<?php foreach ($objetosEntrada as $objetosEntrada): ?>
				<?php $my_url= $this->Url->build(['controller' => 'objetosEntrada', 'action' => 'view',$objetosEntrada->id]) ?>
            	<tr onClick="location.href='<?= $my_url ?>'" class="w3-hover-black ">
                	<td class="w3-border"><?= h($objetosEntrada->id) ?></td>
                	<td class="w3-border"><?= h($objetosEntrada->entrada_id) ?></td>
                	<td class="w3-border"><?= h($objetosEntrada->cantidad_entrada) ?></td>
                	<td class="w3-border"><?= h($objetosEntrada->cantidad_producida) ?></td>
                	<td class="w3-border"><?= h($objetosEntrada->observaciones) ?></td>
            	</tr>
            <?php endforeach; ?>
        </table>
    </div>
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->first('<< ' . __('first'), ['model'=>'ObjetosEntrada']) ?>
                <?= $this->Paginator->prev('< ' . __('previous'), ['model'=>'ObjetosEntrada']) ?>
                <?= $this->Paginator->numbers(['model'=>'ObjetosEntrada','modulus' => 4,'first' => 2, 'last' => 2]) ?>
                <?= $this->Paginator->next(__('next') . ' >', ['model'=>'ObjetosEntrada']) ?>
                <?= $this->Paginator->last(__('last') . ' >>', ['model'=>'ObjetosEntrada']) ?>
            </ul>
            <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total'),'model'=>'ObjetosEntrada']) ?></p>
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

