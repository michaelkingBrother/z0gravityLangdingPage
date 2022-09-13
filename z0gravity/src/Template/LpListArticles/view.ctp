<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LpListArticle $lpListArticle
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Lp List Article'), ['action' => 'edit', $lpListArticle->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Lp List Article'), ['action' => 'delete', $lpListArticle->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lpListArticle->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Lp List Articles'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Lp List Article'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="lpListArticles view large-9 medium-8 columns content">
    <h3><?= h($lpListArticle->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Img Url') ?></th>
            <td><?= h($lpListArticle->img_url) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($lpListArticle->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Category') ?></th>
            <td><?= h($lpListArticle->category) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Presse Url') ?></th>
            <td><?= h($lpListArticle->presse_url) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($lpListArticle->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($lpListArticle->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($lpListArticle->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($lpListArticle->description)); ?>
    </div>
</div>
