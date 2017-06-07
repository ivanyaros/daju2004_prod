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
        <?php if (!empty($utensilio->utensilios_usados)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Estados De Orden Id') ?></th>
                <th scope="col"><?= __('Utensilio Id') ?></th>
                <th scope="col"><?= __('Observaciones') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($utensilio->utensilios_usados as $utensiliosUsados): ?>
            <tr>
                <td><?= h($utensiliosUsados->id) ?></td>
                <td><?= h($utensiliosUsados->estados_de_orden_id) ?></td>
                <td><?= h($utensiliosUsados->utensilio_id) ?></td>
                <td><?= h($utensiliosUsados->observaciones) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'UtensiliosUsados', 'action' => 'view', $utensiliosUsados->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'UtensiliosUsados', 'action' => 'edit', $utensiliosUsados->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'UtensiliosUsados', 'action' => 'delete', $utensiliosUsados->id], ['confirm' => __('Are you sure you want to delete # {0}?', $utensiliosUsados->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
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

