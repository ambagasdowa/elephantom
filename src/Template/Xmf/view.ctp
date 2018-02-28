<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Xmf $xmf
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Xmf'), ['action' => 'edit', $xmf->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Xmf'), ['action' => 'delete', $xmf->id], ['confirm' => __('Are you sure you want to delete # {0}?', $xmf->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Xmf'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Xmf'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="xmf view large-9 medium-8 columns content">
    <h3><?= h($xmf->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Xmf Title') ?></th>
            <td><?= h($xmf->xmf_title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Xmf Header') ?></th>
            <td><?= h($xmf->xmf_header) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($xmf->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Xmf Index') ?></th>
            <td><?= $this->Number->format($xmf->xmf_index) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($xmf->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($xmf->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Xmf Published') ?></th>
            <td><?= $xmf->xmf_published ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Xmf Body') ?></h4>
        <?= $this->Text->autoParagraph(h($xmf->xmf_body)); ?>
    </div>
</div>
