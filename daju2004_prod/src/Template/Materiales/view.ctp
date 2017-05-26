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
    <div class="related">
        <h4><?= __('Related Materiales Entrada') ?>
        	<li><?= $this->Html->link(__('New Materiales Entrada'), ['controller' => 'MaterialesEntrada', 'action' => 'add',$materiale->id,'materiale_id']) ?> </li>
        </h4>
        <?php if (!empty($materiale->materiales_entrada)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Objeto Id') ?></th>
                <th scope="col"><?= __('Cantidad Producida') ?></th>
                <th scope="col"><?= __('Metros Gastados') ?></th>
                <th scope="col"><?= __('Metros Utiles') ?></th>
                <th scope="col"><?= __('Scrap') ?></th>
                <th scope="col"><?= __('Observaciones') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($materiale->materiales_entrada as $materialesEntrada): ?>
            <tr>
                <td><?= h($materialesEntrada->objeto_id) ?></td>
                <td><?= h($materialesEntrada->cantidad_producida) ?></td>
                <td><?= h($materialesEntrada->metros_gastados) ?></td>
                <td><?= h($materialesEntrada->metros_utiles) ?></td>
                <td><?= h($materialesEntrada->scrap) ?></td>
                <td><?= h($materialesEntrada->observaciones) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'MaterialesEntrada', 'action' => 'view', $materialesEntrada->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'MaterialesEntrada', 'action' => 'edit', $materialesEntrada->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'MaterialesEntrada', 'action' => 'delete', $materialesEntrada->id], ['confirm' => __('Are you sure you want to delete # {0}?', $materialesEntrada->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
