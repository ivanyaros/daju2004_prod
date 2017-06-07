<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="w3 container w3-theme">
    <h3><?= __('Materiales') ?></h3>
    <div class="w3-responsive">
    <table class=" w3-table w3-border w3-bordered w3-hoverable w3-theme-d4">
        <thead class="w3-border w3-black">            
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
        </thead>
        <tbody>
            <?php foreach ($materiales as $materiale): ?>
            <?php $my_url= $this->Url->build(['controller' => 'materiales', 'action' => 'view',$materiale->id]) ?>
            <tr onClick="location.href='<?= $my_url ?>'" class="w3-hover-black ">
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
