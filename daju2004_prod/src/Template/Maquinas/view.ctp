<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="maquinas view large-9 medium-8 columns content">
    <h3><?= h($maquina->label) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($maquina->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Referencia') ?></th>
            <td><?= h($maquina->referencia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Observaciones') ?></th>
            <td><?= h($maquina->observaciones) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($maquina->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Coste Operacion') ?></th>
            <td><?= $this->Number->format($maquina->coste_operacion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Coste Tiempo') ?></th>
            <td><?= $this->Number->format($maquina->coste_tiempo) ?></td>
        </tr>
    </table>
<div class="w3-bar w3-black">

    <button class="w3-bar-item w3-button tablink" onclick="openRelated(event,'maquinasUsadas')"><?= __("Maquinas Usadas") ?></button>

<div style="display:none" id="maquinasUsadas" class="related w3-container w3-theme-d3 w3-border">
    <h4><?= __('Related Maquinas Usadas') ?>
        <button onClick="location.href='/maquinas-usadas/add/<?= $maquina->id ?>/maquina_id'" class="w3-button w3-xlarge w3-circle w3-black">+</button>
    </h4>
        <?php if (!empty($maquinasUsadas)): ?>
	<div class="w3-responsive">
		<table class=" w3-table w3-border w3-bordered w3-hoverable w3-theme-d4">
        	<thead class="w3-border w3-black">  
                <th scope="col"><?= $this->Paginator->sort('id','id', ['model'=>'MaquinasUsadas']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('estados_de_orden_id','estados_de_orden_id', ['model'=>'MaquinasUsadas']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('operaciones','operaciones', ['model'=>'MaquinasUsadas']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('uso','uso', ['model'=>'MaquinasUsadas']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('observaciones','observaciones', ['model'=>'MaquinasUsadas']) ?></th>
			</thead>
			<tbody>
<?php foreach ($maquinasUsadas as $maquinasUsada): ?>
				<?php $my_url= $this->Url->build(['controller' => 'maquinasUsadas', 'action' => 'view',$maquinasUsada->id]) ?>
            	<tr onClick="location.href='<?= $my_url ?>'" class="w3-hover-black ">
                	<td><?= h($maquinasUsada->id) ?></td>
                	<td><?= h($maquinasUsada->estados_de_orden_id) ?></td>
                	<td><?= h($maquinasUsada->operaciones) ?></td>
                	<td><?= h($maquinasUsada->uso) ?></td>
                	<td><?= h($maquinasUsada->observaciones) ?></td>
            	</tr>
            <?php endforeach; ?>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first'), ['model'=>'MaquinasUsadas']) ?>
            <?= $this->Paginator->prev('< ' . __('previous'), ['model'=>'MaquinasUsadas']) ?>
            <?= $this->Paginator->numbers(['model'=>'MaquinasUsadas']) ?>
            <?= $this->Paginator->next(__('next') . ' >', ['model'=>'MaquinasUsadas']) ?>
            <?= $this->Paginator->last(__('last') . ' >>', ['model'=>'MaquinasUsadas']) ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')], ['model'=>'MaquinasUsadas']) ?></p>
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

