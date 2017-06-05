<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="w3-sidebar w3-light-grey w3-bar-block" style="width:25%">
    <h3 class="w3-bar-item"><?= __('Actions') ?></h3>
    <a class="w3-bar-item w3-button" href="<?= $this->Url->build(['action' => 'add']) ?>"
    ><?= __('New Materiale') ?></a>
	<a class="w3-bar-item w3-button" href="<?= $this->Url->build(['controller' => 'Material', 'action' => 'index']) ?>"><?= __('List Material') ?></a>
	<a class="w3-bar-item w3-button" href="<?= $this->Url->build(['controller' => 'Material','action' => 'add']) ?>"><?= __('New Material') ?></a>
	<a class="w3-bar-item w3-button" href="<?= $this->Url->build(['controller' => 'Localizaciones', 'action' => 'index']) ?>"><?= __('List Localizaciones') ?></a>
	<a class="w3-bar-item w3-button" href="<?= $this->Url->build(['controller' => 'Localizaciones','action' => 'add']) ?>"><?= __('New Localizacione') ?></a>
	<a class="w3-bar-item w3-button" href="<?= $this->Url->build(['controller' => 'EntradasDeMateriales', 'action' => 'index']) ?>"><?= __('List Entradas De Materiales') ?></a>
	<a class="w3-bar-item w3-button" href="<?= $this->Url->build(['controller' => 'EntradasDeMateriales','action' => 'add']) ?>"><?= __('New Entradas De Materiale') ?></a>
	<a class="w3-bar-item w3-button" href="<?= $this->Url->build(['controller' => 'MaterialesEntrada', 'action' => 'index']) ?>"><?= __('List Materiales Entrada') ?></a>
	<a class="w3-bar-item w3-button" href="<?= $this->Url->build(['controller' => 'MaterialesEntrada','action' => 'add']) ?>"><?= __('New Materiales Entrada') ?></a>
    
</div>
<div style="margin-left:25%">
<div class="w3 container w3-theme">
    <h3><?= __('Materiales') ?></h3>
    <div class="w3-responsive">
    <table class=" w3-table w3-bordered w3-hoverable w3-theme">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('material_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_entega') ?></th>
                <th scope="col"><?= $this->Paginator->sort('localizacione_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('entradas_de_materiale_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('bobina_lote') ?></th>
                <th scope="col"><?= $this->Paginator->sort('bobinas') ?></th>
                <th scope="col"><?= $this->Paginator->sort('bobinas_actual') ?></th>
                <th scope="col"><?= $this->Paginator->sort('lote') ?></th>
                <th scope="col"><?= $this->Paginator->sort('numero_bobina') ?></th>
                <th scope="col"><?= $this->Paginator->sort('taras') ?></th>
                <th scope="col"><?= $this->Paginator->sort('taras_reales') ?></th>
                <th scope="col"><?= $this->Paginator->sort('taras_mediciones') ?></th>
                <th scope="col"><?= $this->Paginator->sort('metros_brutos') ?></th>
                <th scope="col"><?= $this->Paginator->sort('metros_netos') ?></th>
                <th scope="col"><?= $this->Paginator->sort('metros_actuales') ?></th>
                <th scope="col"><?= $this->Paginator->sort('metros_utiles') ?></th>
                <th scope="col"><?= $this->Paginator->sort('scrap') ?></th>
                <th scope="col"><?= $this->Paginator->sort('en_uso') ?></th>
                <th scope="col"><?= $this->Paginator->sort('terminado') ?></th>
                <th scope="col"><?= $this->Paginator->sort('peso_ud') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($materiales as $materiale): ?>
            <tr>
                <td><?= $this->Number->format($materiale->id) ?></td>
                <td><?= $materiale->has('material') ? $this->Html->link($materiale->material->label, ['controller' => 'Material', 'action' => 'view', $materiale->material->id]) : '' ?></td>
                <td><?= h($materiale->fecha_entega) ?></td>
                <td><?= $materiale->has('localizacione') ? $this->Html->link($materiale->localizacione->label, ['controller' => 'Localizaciones', 'action' => 'view', $materiale->localizacione->id]) : '' ?></td>
                <td><?= $materiale->has('entradas_de_materiale') ? $this->Html->link($materiale->entradas_de_materiale->label, ['controller' => 'EntradasDeMateriales', 'action' => 'view', $materiale->entradas_de_materiale->id]) : '' ?></td>
                <td><?= h($materiale->bobina_lote) ?></td>
                <td><?= $this->Number->format($materiale->bobinas) ?></td>
                <td><?= $this->Number->format($materiale->bobinas_actual) ?></td>
                <td><?= h($materiale->lote) ?></td>
                <td><?= $this->Number->format($materiale->numero_bobina) ?></td>
                <td><?= $this->Number->format($materiale->taras) ?></td>
                <td><?= $this->Number->format($materiale->taras_reales) ?></td>
                <td><?= h($materiale->taras_mediciones) ?></td>
                <td><?= $this->Number->format($materiale->metros_brutos) ?></td>
                <td><?= $this->Number->format($materiale->metros_netos) ?></td>
                <td><?= $this->Number->format($materiale->metros_actuales) ?></td>
                <td><?= $this->Number->format($materiale->metros_utiles) ?></td>
                <td><?= $this->Number->format($materiale->scrap) ?></td>
                <td><?= h($materiale->en_uso) ?></td>
                <td><?= h($materiale->terminado) ?></td>
                <td><?= $this->Number->format($materiale->peso_ud) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $materiale->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $materiale->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $materiale->id], ['confirm' => __('Are you sure you want to delete # {0}?', $materiale->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
