<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PressesI18n $pressesI18n
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Presses I18n'), ['action' => 'edit', $pressesI18n->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Presses I18n'), ['action' => 'delete', $pressesI18n->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pressesI18n->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Presses I18n'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Presses I18n'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="pressesI18n view large-9 medium-8 columns content">
    <h3><?= h($pressesI18n->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Locale') ?></th>
            <td><?= h($pressesI18n->locale) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Model') ?></th>
            <td><?= h($pressesI18n->model) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Field') ?></th>
            <td><?= h($pressesI18n->field) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($pressesI18n->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Foreign Key') ?></th>
            <td><?= $this->Number->format($pressesI18n->foreign_key) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Content') ?></h4>
        <?= $this->Text->autoParagraph(h($pressesI18n->content)); ?>
    </div>
</div>
