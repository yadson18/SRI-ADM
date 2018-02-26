<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Codigopai $codigopai
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Codigopais'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="codigopais form large-9 medium-8 columns content">
    <?= $this->Form->create($codigopai) ?>
    <fieldset>
        <legend><?= __('Add Codigopai') ?></legend>
        <?php
            echo $this->Form->control('xpais');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
