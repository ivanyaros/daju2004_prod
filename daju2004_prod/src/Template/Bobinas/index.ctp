<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Bobina'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="bobinas index large-9 medium-8 columns content">
    <h3><?= __('Bobinas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('lote') ?></th>
                <th scope="col"><?= $this->Paginator->sort('numero') ?></th>
                <th scope="col"><?= $this->Paginator->sort('taras') ?></th>
                <th scope="col"><?= $this->Paginator->sort('metros_brutos') ?></th>
                <th scope="col"><?= $this->Paginator->sort('metros_netos') ?></th>
                <th scope="col"><?= $this->Paginator->sort('metros_actuales') ?></th>
                <th scope="col"><?= $this->Paginator->sort('metros_utiles') ?></th>
                <th scope="col"><?= $this->Paginator->sort('scrap') ?></th>
                <th scope="col"><?= $this->Paginator->sort('en_uso') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($bobinas as $bobina): ?>
            <tr>
                <td><?= $this->Number->format($bobina->id) ?></td>
                <td><?= h($bobina->lote) ?></td>
                <td><?= $this->Number->format($bobina->numero) ?></td>
                <td><?= $this->Number->format($bobina->taras) ?></td>
                <td><?= $this->Number->format($bobina->metros_brutos) ?></td>
                <td><?= $this->Number->format($bobina->metros_netos) ?></td>
                <td><?= $this->Number->format($bobina->metros_actuales) ?></td>
                <td><?= $this->Number->format($bobina->metros_utiles) ?></td>
                <td><?= $this->Number->format($bobina->scrap) ?></td>
                <td><?= h($bobina->en_uso) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $bobina->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $bobina->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $bobina->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bobina->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
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
