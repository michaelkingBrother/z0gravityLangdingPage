<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LpContent[]|\Cake\Collection\CollectionInterface $lpContents
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Lp Content'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Lp Images'), ['controller' => 'LpImages', 'action' => 'index']) ?></li>
    </ul>
</nav>
<div class="lpContents index large-9 medium-8 columns content">
    <h3><?= __('Lp Contents') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('video_url') ?></th>
                <th scope="col"><?= $this->Paginator->sort('btn_content') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($lpContents as $lpContent): ?>
            <tr>
                <td><?= $this->Number->format($lpContent->id) ?></td>
                <td><?= h($lpContent->title) ?></td>
                <td><?= h($lpContent->video_url) ?></td>
                <td><?= h($lpContent->btn_content) ?></td>
                <td><?= h($lpContent->created) ?></td>
                <td><?= h($lpContent->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $lpContent->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $lpContent->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $lpContent->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lpContent->id)]) ?>
                    <?= $this->Html->link(__('Translate'), ['action' => 'translate', $lpContent->id]) ?>
                    
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
