<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="w3-container">
    <h3><?= h($utensilio->label) ?>
        <?php $my_url_edit=$this->Url->build(['controller' => 'utensilios','action' => 'edit',$utensilio->id])  ?>
        <button onClick="location.href='<?= $my_url_edit?>'" class="w3-button  w3-circle w3-black"> <?= __("Edit")?></button>
    </h3>
    <table class="w3-table w3-border w3-bordered w3-hoverable w3-theme-d4">
        <tr>
            <td class="w3-border"><?= __('Name') ?></td>
            <td class="w3-border"><?= h($utensilio->name) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Referencia') ?></td>
            <td class="w3-border"><?= h($utensilio->referencia) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Observaciones') ?></td>
            <td class="w3-border"><?= h($utensilio->observaciones) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Id') ?></td>
            <td class="w3-border"><?= $this->Number->format($utensilio->id) ?></td>
        </tr>
    </table>
<div class="w3-bar w3-black">

    <button class="w3-bar-item w3-button tablink" onclick="openRelated(event,'utensiliosUsados')"><?= __("Utensilios Usados") ?></button>

<div style="display:none" id="utensiliosUsados" class="related w3-container w3-theme-d3 w3-border">
    <h4><?= __('Related Utensilios Usados') ?>
        <?php $my_url_add=$this->Url->build(['controller' => 'utensilios-usados', 'action' => 'add',$utensilio->id,'utensilio_id'])?>
        <button onClick="location.href='<?= $my_url_add?>'" class="w3-button w3-xlarge w3-circle w3-black">+</button>
    </h4>
        <?php if (!empty($utensiliosUsados)): ?>
	
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->first('<< ' . __('first'), ['model'=>'UtensiliosUsados']) ?>
                <?= $this->Paginator->prev('< ' . __('previous'), ['model'=>'UtensiliosUsados']) ?>
                <?= $this->Paginator->numbers(['model'=>'UtensiliosUsados','modulus' => 4,'first' => 2, 'last' => 2]) ?>
                <?= $this->Paginator->next(__('next') . ' >', ['model'=>'UtensiliosUsados']) ?>
                <?= $this->Paginator->last(__('last') . ' >>', ['model'=>'UtensiliosUsados']) ?>
            </ul>        
        </div>
    <div class="w3-responsive">
		<table class=" w3-table w3-centered w3-border w3-bordered w3-hoverable w3-theme-d4">
        	<thead class="w3-border w3-black">  
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('id','id', ['model'=>'UtensiliosUsados']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('estados_de_orden_id','estados_de_orden_id', ['model'=>'UtensiliosUsados']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('utensilio_id','utensilio_id', ['model'=>'UtensiliosUsados']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('observaciones','observaciones', ['model'=>'UtensiliosUsados']) ?></th>
			</thead>
			<tbody>
<?php foreach ($utensiliosUsados as $utensiliosUsado): ?>
				<?php $my_url= $this->Url->build(['controller' => 'utensiliosUsados', 'action' => 'view',$utensiliosUsado->id]) ?>
            	<tr onClick="location.href='<?= $my_url ?>'" class="w3-hover-black ">
                                    <td class="w3-border"><?= h($utensiliosUsado->id) ?></td>

                                <td class="w3-border"><?= $utensiliosUsado->has('estados_de_orden') ? $this->Html->link($utensiliosUsado->estados_de_orden->label, ['controller' => 'EstadosDeOrdens', 'action' => 'view', $utensiliosUsado->estados_de_orden->id]) : '' ?></td>

                                <td class="w3-border"><?= $utensiliosUsado->has('utensilio') ? $this->Html->link($utensiliosUsado->utensilio->label, ['controller' => 'Utensilios', 'action' => 'view', $utensiliosUsado->utensilio->id]) : '' ?></td>
                        <td class="w3-border"><?= h($utensiliosUsado->observaciones) ?></td>
            	</tr>
            <?php endforeach; ?>
        </table>
    </div>
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->first('<< ' . __('first'), ['model'=>'UtensiliosUsados']) ?>
                <?= $this->Paginator->prev('< ' . __('previous'), ['model'=>'UtensiliosUsados']) ?>
                <?= $this->Paginator->numbers(['model'=>'UtensiliosUsados','modulus' => 4,'first' => 2, 'last' => 2]) ?>
                <?= $this->Paginator->next(__('next') . ' >', ['model'=>'UtensiliosUsados']) ?>
                <?= $this->Paginator->last(__('last') . ' >>', ['model'=>'UtensiliosUsados']) ?>
            </ul>
            <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total'),'model'=>'UtensiliosUsados']) ?></p>
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

