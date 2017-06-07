<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="utensilios view large-9 medium-8 columns content">
    <h3><?= h($utensilio->label) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($utensilio->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Referencia') ?></th>
            <td><?= h($utensilio->referencia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Observaciones') ?></th>
            <td><?= h($utensilio->observaciones) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($utensilio->id) ?></td>
        </tr>
    </table>
<div class="w3-bar w3-black">

    <button class="w3-bar-item w3-button tablink" onclick="openRelated(event,'utensiliosUsados')"><?= __("Utensilios Usados") ?></button>

<div style="display:none" id="utensiliosUsados" class="related w3-container w3-theme-d3 w3-border">
    <h4><?= __('Related Utensilios Usados') ?></h4>
        <?php if (!empty($utensiliosUsados)): ?>
	<div class="w3-responsive">
		<table class=" w3-table w3-border w3-bordered w3-hoverable w3-theme-d4">
        	<thead class="w3-border w3-black">  
                <th scope="col"><?= $this->Paginator->sort('id','id', ['model'=>'UtensiliosUsados']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('estados_de_orden_id','estados_de_orden_id', ['model'=>'UtensiliosUsados']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('observaciones','observaciones', ['model'=>'UtensiliosUsados']) ?></th>
			</thead>
			<tbody>
<?php foreach ($utensiliosUsados as $utensiliosUsado): ?>
				<?php $my_url= $this->Url->build(['controller' => 'utensiliosUsados', 'action' => 'view',$utensiliosUsado->id]) ?>
            	<tr onClick="location.href='<?= $my_url ?>'" class="w3-hover-black ">
                	<td><?= h($utensiliosUsado->id) ?></td>
                	<td><?= h($utensiliosUsado->estados_de_orden_id) ?></td>
                	<td><?= h($utensiliosUsado->observaciones) ?></td>
            	</tr>
            <?php endforeach; ?>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first'), ['model'=>'UtensiliosUsados']) ?>
            <?= $this->Paginator->prev('< ' . __('previous'), ['model'=>'UtensiliosUsados']) ?>
            <?= $this->Paginator->numbers(['model'=>'UtensiliosUsados']) ?>
            <?= $this->Paginator->next(__('next') . ' >', ['model'=>'UtensiliosUsados']) ?>
            <?= $this->Paginator->last(__('last') . ' >>', ['model'=>'UtensiliosUsados']) ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')], ['model'=>'UtensiliosUsados']) ?></p>
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

