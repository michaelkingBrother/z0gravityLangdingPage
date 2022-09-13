<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LpImage $lpImage
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Lp Image'), ['action' => 'edit', $lpImage->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Lp Image'), ['action' => 'delete', $lpImage->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lpImage->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Lp Images'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Lp Image'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Lp Contents'), ['controller' => 'LpContents', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Lp Content'), ['controller' => 'LpContents', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="lpImages view large-9 medium-8 columns content">
    <h3><?= h($lpImage->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Image Url') ?></th>
            <td><?= h($lpImage->image_url) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Background Color') ?></th>
            <td><?= h($lpImage->background_color) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Text Color') ?></th>
            <td><?= h($lpImage->text_color) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Lp Content') ?></th>
            <td><?= $lpImage->has('lp_content') ? $this->Html->link($lpImage->lp_content->title, ['controller' => 'LpContents', 'action' => 'view', $lpImage->lp_content->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($lpImage->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($lpImage->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($lpImage->modified) ?></td>
        </tr>
    </table>
</div>
