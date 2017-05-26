<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="entradasDeMateriales view large-9 medium-8 columns content">
    <h3><?= h($entradasDeMateriale->label) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Proveedores Cliente') ?></th>
            <td><?= $entradasDeMateriale->has('proveedores_cliente') ? $this->Html->link($entradasDeMateriale->proveedores_cliente->label, ['controller' => 'ProveedoresClientes', 'action' => 'view', $entradasDeMateriale->proveedores_cliente->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Referencia') ?></th>
            <td><?= h($entradasDeMateriale->referencia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Observaciones') ?></th>
            <td><?= h($entradasDeMateriale->observaciones) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Albaran') ?></th>
            <td><?= h($entradasDeMateriale->albaran) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Centro') ?></th>
            <td><?= $entradasDeMateriale->has('centro') ? $this->Html->link($entradasDeMateriale->centro->label, ['controller' => 'Centros', 'action' => 'view', $entradasDeMateriale->centro->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($entradasDeMateriale->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha Envio') ?></th>
            <td><?= h($entradasDeMateriale->fecha_envio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha Recepcion') ?></th>
            <td><?= h($entradasDeMateriale->fecha_recepcion) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Materiales') ?>
        	<li><?= $this->Html->link(__('New Materiale'), ['controller' => 'Materiales', 'action' => 'add',$entradasDeMateriale->id,'entradas_de_materiale_id']) ?> </li>
        </h4>
        <?php if (!empty($entradasDeMateriale->materiales)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Material Id') ?></th>
                <th scope="col"><?= __('Fecha Entega') ?></th>
                <th scope="col"><?= __('Localizacione Id') ?></th>
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
            <?php foreach ($entradasDeMateriale->materiales as $materiales): ?>
            <tr>
                <td><?= h($materiales->material_id) ?></td>
                <td><?= h($materiales->fecha_entega) ?></td>
                <td><?= h($materiales->localizacione_id) ?></td>
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
</div>
