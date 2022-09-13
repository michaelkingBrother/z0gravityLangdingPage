<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LpImage[]|\Cake\Collection\CollectionInterface $lpImages
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Lp Image'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Lp Contents'), ['controller' => 'LpContents', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Lp Content'), ['controller' => 'LpContents', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="lpImages index large-9 medium-8 columns content">
    <h3><?= __('Lp Images') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('image_url') ?></th>
                <th scope="col"><?= $this->Paginator->sort('background_color') ?></th>
                <th scope="col"><?= $this->Paginator->sort('text_color') ?></th>
                <th scope="col"><?= $this->Paginator->sort('lp_contents_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($lpImages as $lpImage): ?>
            <tr>
                <td><?= $this->Number->format($lpImage->id) ?></td>
                <td><?= h($lpImage->image_url) ?></td>
                <td><?= h($lpImage->background_color) ?></td>
                <td><?= h($lpImage->text_color) ?></td>
                <td><?= $lpImage->has('lp_content') ? $this->Html->link($lpImage->lp_content->title, ['controller' => 'LpContents', 'action' => 'view', $lpImage->lp_content->id]) : '' ?></td>
                <td><?= h($lpImage->created) ?></td>
                <td><?= h($lpImage->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $lpImage->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $lpImage->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $lpImage->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lpImage->id)]) ?>
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
