<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LpListArticle[]|\Cake\Collection\CollectionInterface $lpListArticles
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Lp List Article'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="lpListArticles index large-9 medium-8 columns content">
    <h3><?= __('Lp List Articles') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('img_url') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('category') ?></th>
                <th scope="col"><?= $this->Paginator->sort('presse_url') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($lpListArticles as $lpListArticle): ?>
            <tr>
                <td><?= $this->Number->format($lpListArticle->id) ?></td>
                <td><?= h($lpListArticle->img_url) ?></td>
                <td><?= h($lpListArticle->title) ?></td>
                <td><?= h($lpListArticle->category) ?></td>
                <td><?= h($lpListArticle->presse_url) ?></td>
                <td><?= h($lpListArticle->created) ?></td>
                <td><?= h($lpListArticle->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $lpListArticle->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $lpListArticle->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $lpListArticle->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lpListArticle->id)]) ?>
                    <?= $this->Html->link(__('Translate'), ['action' => 'translate', $lpListArticle->id]) ?>

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
