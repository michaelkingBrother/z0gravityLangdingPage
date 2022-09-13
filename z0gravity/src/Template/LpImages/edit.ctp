<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LpImage $lpImage
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $lpImage->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $lpImage->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Lp Images'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Lp Contents'), ['controller' => 'LpContents', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Lp Content'), ['controller' => 'LpContents', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="lpImages form large-9 medium-8 columns content">
    <?= $this->Form->create($lpImage) ?>
    <fieldset>
        <legend><?= __('Edit Lp Image') ?></legend>
        <?php
            echo $this->Form->control('image_url');
            echo $this->Form->control('background_color');
            echo $this->Form->control('text_color');
            echo $this->Form->control('lp_contents_id', ['options' => $lpContents]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
