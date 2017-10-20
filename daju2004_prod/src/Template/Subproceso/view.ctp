<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="w3-container">
    <h3><?= h($subproceso->label) ?>
        <?php $my_url_edit=$this->Url->build(['controller' => 'subproceso','action' => 'edit',$subproceso->id])  ?>
        <button onClick="location.href='<?= $my_url_edit?>'" class="w3-button  w3-circle w3-black"> <?= __("Edit")?></button>
        <div class="w3-button w3-circle w3-red">
        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $subproceso->id], ['confirm' => __('Are you sure you want to delete # {0}?', $subproceso->id)]) ?>
        </div>
    </h3>
    <table class="w3-table w3-border w3-bordered w3-hoverable w3-theme-d4">
        <tr>
            <td class="w3-border"><?= __('Proceso') ?></td>
            <td class="w3-border"><?= $subproceso->has('proceso') ? $this->Html->link($subproceso->proceso->label, ['controller' => 'Proceso', 'action' => 'view', $subproceso->proceso->id]) : '' ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Name') ?></td>
            <td class="w3-border"><?= h($subproceso->name) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Descripcion') ?></td>
            <td class="w3-border"><?= h($subproceso->descripcion) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Id') ?></td>
            <td class="w3-border"><?= $this->Number->format($subproceso->id) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Segundos Inicio') ?></td>
            <td class="w3-border"><?= $this->Number->format($subproceso->segundos_inicio) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Segundos Duracion') ?></td>
            <td class="w3-border"><?= $this->Number->format($subproceso->segundos_duracion) ?></td>
        </tr>
    </table>
<div class="w3-bar w3-black">

    <button class="w3-bar-item w3-button tablink" onclick="openRelated(event,'tareas')"><?= __("Tareas") ?></button>

<div style="display:none" id="tareas" class="related w3-container w3-theme-d3 w3-border">
    <h4><?= __('Related Tareas') ?>
        <?php $my_url_add=$this->Url->build(['controller' => 'tareas', 'action' => 'add',$subproceso->id,'subproceso_id'])?>
        <button onClick="location.href='<?= $my_url_add?>'" class="w3-button w3-xlarge w3-circle w3-black">+</button>
    </h4>
        <?php if (!empty($tareas)): ?>
	
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->first('<< ' . __('first'), ['model'=>'Tareas']) ?>
                <?= $this->Paginator->prev('< ' . __('previous'), ['model'=>'Tareas']) ?>
                <?= $this->Paginator->numbers(['model'=>'Tareas','modulus' => 4,'first' => 2, 'last' => 2]) ?>
                <?= $this->Paginator->next(__('next') . ' >', ['model'=>'Tareas']) ?>
                <?= $this->Paginator->last(__('last') . ' >>', ['model'=>'Tareas']) ?>
            </ul>        
        </div>
    <div class="w3-responsive">
		<table class=" w3-table w3-centered w3-border w3-bordered w3-hoverable w3-theme-d4">
        	<thead class="w3-border w3-black">  
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('id','id', ['model'=>'Tareas']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('subproceso_id','subproceso_id', ['model'=>'Tareas']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('orden_id','orden_id', ['model'=>'Tareas']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('fecha_inicio','fecha_inicio', ['model'=>'Tareas']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('segundos_duracion','segundos_duracion', ['model'=>'Tareas']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('descripcion','descripcion', ['model'=>'Tareas']) ?></th>
			</thead>
			<tbody>
<?php foreach ($tareas as $tarea): ?>
				<?php $my_url= $this->Url->build(['controller' => 'tareas', 'action' => 'view',$tarea->id]) ?>
            	<tr onClick="location.href='<?= $my_url ?>'" class="w3-hover-black ">
                                    <td class="w3-border"><?= h($tarea->id) ?></td>

                                <td class="w3-border"><?= $tarea->has('subproceso') ? $this->Html->link($tarea->subproceso->label, ['controller' => 'Subproceso', 'action' => 'view', $tarea->subproceso->id]) : '' ?></td>

                                <td class="w3-border"><?= $tarea->has('orden') ? $this->Html->link($tarea->orden->label, ['controller' => 'Ordens', 'action' => 'view', $tarea->orden->id]) : '' ?></td>
                        <td class="w3-border"><?= h($tarea->fecha_inicio) ?></td>
                        <td class="w3-border"><?= h($tarea->segundos_duracion) ?></td>
                        <td class="w3-border"><?= h($tarea->descripcion) ?></td>
            	</tr>
            <?php endforeach; ?>
        </table>
    </div>
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->first('<< ' . __('first'), ['model'=>'Tareas']) ?>
                <?= $this->Paginator->prev('< ' . __('previous'), ['model'=>'Tareas']) ?>
                <?= $this->Paginator->numbers(['model'=>'Tareas','modulus' => 4,'first' => 2, 'last' => 2]) ?>
                <?= $this->Paginator->next(__('next') . ' >', ['model'=>'Tareas']) ?>
                <?= $this->Paginator->last(__('last') . ' >>', ['model'=>'Tareas']) ?>
            </ul>
            <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total'),'model'=>'Tareas']) ?></p>
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

