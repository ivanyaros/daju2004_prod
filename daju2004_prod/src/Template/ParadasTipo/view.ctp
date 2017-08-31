<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="w3-container">
    <h3><?= h($paradasTipo->label) ?>
        <?php $my_url_edit=$this->Url->build(['controller' => 'paradasTipo','action' => 'edit',$paradasTipo->id])  ?>
        <button onClick="location.href='<?= $my_url_edit?>'" class="w3-button  w3-circle w3-black"> <?= __("Edit")?></button>
    </h3>
    <table class="w3-table w3-border w3-bordered w3-hoverable w3-theme-d4">
        <tr>
            <td class="w3-border"><?= __('Name') ?></td>
            <td class="w3-border"><?= h($paradasTipo->name) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Id') ?></td>
            <td class="w3-border"><?= $this->Number->format($paradasTipo->id) ?></td>
        </tr>
    </table>
<div class="w3-bar w3-black">

    <button class="w3-bar-item w3-button tablink" onclick="openRelated(event,'paradas')"><?= __("Paradas") ?></button>

<div style="display:none" id="paradas" class="related w3-container w3-theme-d3 w3-border">
    <h4><?= __('Related Paradas') ?>
        <?php $my_url_add=$this->Url->build(['controller' => 'paradas', 'action' => 'add',$paradasTipo->id,'paradas_tipo_id'])?>
        <button onClick="location.href='<?= $my_url_add?>'" class="w3-button w3-xlarge w3-circle w3-black">+</button>
    </h4>
        <?php if (!empty($paradas)): ?>
	
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->first('<< ' . __('first'), ['model'=>'Paradas']) ?>
                <?= $this->Paginator->prev('< ' . __('previous'), ['model'=>'Paradas']) ?>
                <?= $this->Paginator->numbers(['model'=>'Paradas','modulus' => 4,'first' => 2, 'last' => 2]) ?>
                <?= $this->Paginator->next(__('next') . ' >', ['model'=>'Paradas']) ?>
                <?= $this->Paginator->last(__('last') . ' >>', ['model'=>'Paradas']) ?>
            </ul>        
        </div>
    <div class="w3-responsive">
		<table class=" w3-table w3-centered w3-border w3-bordered w3-hoverable w3-theme-d4">
        	<thead class="w3-border w3-black">  
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('id','id', ['model'=>'Paradas']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('paradas_tipo_id','paradas_tipo_id', ['model'=>'Paradas']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('orden_id','orden_id', ['model'=>'Paradas']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('fecha_inicio','fecha_inicio', ['model'=>'Paradas']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('duracion','duracion', ['model'=>'Paradas']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('comentario','comentario', ['model'=>'Paradas']) ?></th>
			</thead>
			<tbody>
<?php foreach ($paradas as $parada): ?>
				<?php $my_url= $this->Url->build(['controller' => 'paradas', 'action' => 'view',$parada->id]) ?>
            	<tr onClick="location.href='<?= $my_url ?>'" class="w3-hover-black ">
                                    <td class="w3-border"><?= h($parada->id) ?></td>

                                <td class="w3-border"><?= $parada->has('paradas_tipo') ? $this->Html->link($parada->paradas_tipo->label, ['controller' => 'ParadasTipo', 'action' => 'view', $parada->paradas_tipo->id]) : '' ?></td>

                                <td class="w3-border"><?= $parada->has('orden') ? $this->Html->link($parada->orden->label, ['controller' => 'Ordens', 'action' => 'view', $parada->orden->id]) : '' ?></td>
                        <td class="w3-border"><?= h($parada->fecha_inicio) ?></td>
                        <td class="w3-border"><?= h($parada->duracion) ?></td>
                        <td class="w3-border"><?= h($parada->comentario) ?></td>
            	</tr>
            <?php endforeach; ?>
        </table>
    </div>
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->first('<< ' . __('first'), ['model'=>'Paradas']) ?>
                <?= $this->Paginator->prev('< ' . __('previous'), ['model'=>'Paradas']) ?>
                <?= $this->Paginator->numbers(['model'=>'Paradas','modulus' => 4,'first' => 2, 'last' => 2]) ?>
                <?= $this->Paginator->next(__('next') . ' >', ['model'=>'Paradas']) ?>
                <?= $this->Paginator->last(__('last') . ' >>', ['model'=>'Paradas']) ?>
            </ul>
            <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total'),'model'=>'Paradas']) ?></p>
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

