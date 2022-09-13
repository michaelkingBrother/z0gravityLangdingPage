<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PressesI18n $pressesI18n
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Presses I18n'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="pressesI18n form large-9 medium-8 columns content">
    <?= $this->Form->create($pressesI18n) ?>
    <fieldset>
        <legend><?= __('Add Presses I18n') ?></legend>
        <?php
            echo $this->Form->control('locale');
            echo $this->Form->control('model');
            echo $this->Form->control('foreign_key');
            echo $this->Form->control('field');
            echo $this->Form->control('content');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
