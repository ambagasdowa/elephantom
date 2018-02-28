<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Xmf $xmf
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Xmf'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="xmf form large-9 medium-8 columns content">
    <?= $this->Form->create($xmf) ?>
    <fieldset>
        <legend><?= __('Add Xmf') ?></legend>
        <?php
            echo $this->Form->control('xmf_title');
            echo $this->Form->control('xmf_header');
            echo $this->Form->control('xmf_index');
            echo $this->Form->control('xmf_body');
            echo $this->Form->control('xmf_published');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
