<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Xmf[]|\Cake\Collection\CollectionInterface $xmf
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Xmf'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="xmf index large-9 medium-8 columns content">
    <h3><?= __('Xmf') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('xmf_title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('xmf_header') ?></th>
                <th scope="col"><?= $this->Paginator->sort('xmf_index') ?></th>
                <th scope="col"><?= $this->Paginator->sort('xmf_published') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($xmf as $xmf): ?>
            <tr>
                <td><?= $this->Number->format($xmf->id) ?></td>
                <td><?= h($xmf->xmf_title) ?></td>
                <td><?= h($xmf->xmf_header) ?></td>
                <td><?= $this->Number->format($xmf->xmf_index) ?></td>
                <td><?= h($xmf->xmf_published) ?></td>
                <td><?= h($xmf->created) ?></td>
                <td><?= h($xmf->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $xmf->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $xmf->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $xmf->id], ['confirm' => __('Are you sure you want to delete # {0}?', $xmf->id)]) ?>
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
