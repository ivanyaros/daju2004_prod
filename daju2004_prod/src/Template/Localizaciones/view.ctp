<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="localizaciones view large-9 medium-8 columns content">
    <h3><?= h($localizacione->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Centro') ?></th>
            <td><?= $localizacione->has('centro') ? $this->Html->link($localizacione->centro->id, ['controller' => 'Centros', 'action' => 'view', $localizacione->centro->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($localizacione->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($localizacione->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Materiales') ?></h4>
        <?php if (!empty($localizacione->materiales)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Material Id') ?></th>
                <th scope="col"><?= __('Fecha Entega') ?></th>
                <th scope="col"><?= __('Localizacione Id') ?></th>
                <th scope="col"><?= __('Entradas Material Id') ?></th>
                <th scope="col"><?= __('Bobina Lote') ?></th>
                <th scope="col"><?= __('Bobinas') ?></th>
                <th scope="col"><?= __('Bobinas Actual') ?></th>
                <th scope="col"><?= __('Lote') ?></th>
                <th scope="col"><?= __('Numero Bobina') ?></th>
                <th scope="col"><?= __('Taras') ?></th>
                <th scope="col"><?= __('Taras Reales') ?></th>
                <th scope="col"><?= __('Taras Mediciones') ?></th>
                <th scope="col"><?= __('Metros Brutos') ?></th>
                <th scope="col"><?= __('Metros Netos') ?></th>
                <th scope="col"><?= __('Metros Actuales') ?></th>
                <th scope="col"><?= __('Metros Utiles') ?></th>
                <th scope="col"><?= __('Scrap') ?></th>
                <th scope="col"><?= __('En Uso') ?></th>
                <th scope="col"><?= __('Terminado') ?></th>
                <th scope="col"><?= __('Peso Ud') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($localizacione->materiales as $materiales): ?>
            <tr>
                <td><?= h($materiales->id) ?></td>
                <td><?= h($materiales->material_id) ?></td>
                <td><?= h($materiales->fecha_entega) ?></td>
                <td><?= h($materiales->localizacione_id) ?></td>
                <td><?= h($materiales->entradas_material_id) ?></td>
                <td><?= h($materiales->bobina_lote) ?></td>
                <td><?= h($materiales->bobinas) ?></td>
                <td><?= h($materiales->bobinas_actual) ?></td>
                <td><?= h($materiales->lote) ?></td>
                <td><?= h($materiales->numero_bobina) ?></td>
                <td><?= h($materiales->taras) ?></td>
                <td><?= h($materiales->taras_reales) ?></td>
                <td><?= h($materiales->taras_mediciones) ?></td>
                <td><?= h($materiales->metros_brutos) ?></td>
                <td><?= h($materiales->metros_netos) ?></td>
                <td><?= h($materiales->metros_actuales) ?></td>
                <td><?= h($materiales->metros_utiles) ?></td>
                <td><?= h($materiales->scrap) ?></td>
                <td><?= h($materiales->en_uso) ?></td>
                <td><?= h($materiales->terminado) ?></td>
                <td><?= h($materiales->peso_ud) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Materiales', 'action' => 'view', $materiales->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Materiales', 'action' => 'edit', $materiales->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Materiales', 'action' => 'delete', $materiales->id], ['confirm' => __('Are you sure you want to delete # {0}?', $materiales->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Objetos') ?></h4>
        <?php if (!empty($localizacione->objetos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Producto Id') ?></th>
                <th scope="col"><?= __('Numero Serie') ?></th>
                <th scope="col"><?= __('Referencia') ?></th>
                <th scope="col"><?= __('Orden Id') ?></th>
                <th scope="col"><?= __('Lote') ?></th>
                <th scope="col"><?= __('Localizacione Id') ?></th>
                <th scope="col"><?= __('Coste') ?></th>
                <th scope="col"><?= __('Defectuosos') ?></th>
                <th scope="col"><?= __('Peso') ?></th>
                <th scope="col"><?= __('Observaciones') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($localizacione->objetos as $objetos): ?>
            <tr>
                <td><?= h($objetos->id) ?></td>
                <td><?= h($objetos->producto_id) ?></td>
                <td><?= h($objetos->numero_serie) ?></td>
                <td><?= h($objetos->referencia) ?></td>
                <td><?= h($objetos->orden_id) ?></td>
                <td><?= h($objetos->lote) ?></td>
                <td><?= h($objetos->localizacione_id) ?></td>
                <td><?= h($objetos->coste) ?></td>
                <td><?= h($objetos->defectuosos) ?></td>
                <td><?= h($objetos->peso) ?></td>
                <td><?= h($objetos->observaciones) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Objetos', 'action' => 'view', $objetos->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Objetos', 'action' => 'edit', $objetos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Objetos', 'action' => 'delete', $objetos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $objetos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
