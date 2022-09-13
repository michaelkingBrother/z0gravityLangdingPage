<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LpContent $lpContent
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Lp Content'), ['action' => 'edit', $lpContent->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Lp Content'), ['action' => 'delete', $lpContent->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lpContent->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Lp Contents'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Lp Content'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Translate Lp Content'), ['action' => 'translate', $lpContent->id]) ?> </li>
        <hr>
        <li><?= $this->Html->link(__('List Lp Images'), ['controller' => 'LpImages', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Lp Image'), ['controller' => 'LpImages', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="lpContents view large-9 medium-8 columns content">
    <h3><?= h($lpContent->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($lpContent->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Video Url') ?></th>
            <td><?= h($lpContent->video_url) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Btn Content') ?></th>
            <td><?= h($lpContent->btn_content) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($lpContent->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($lpContent->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($lpContent->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($lpContent->description)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Lp Images') ?></h4>
        <?php if (!empty($lpContent->lp_images)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Image Url') ?></th>
                <th scope="col"><?= __('Background Color') ?></th>
                <th scope="col"><?= __('Text Color') ?></th>
                <th scope="col"><?= __('Lp Contents Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($lpContent->lp_images as $lpImage): ?>
            <tr>
                <td><?= h($lpImage->id) ?></td>
                <td><?= h($lpImage->image_url) ?></td>
                <td><?= h($lpImage->background_color) ?></td>
                <td><?= h($lpImage->text_color) ?></td>
                <td><?= h($lpImage->lp_contents_id) ?></td>
                <td><?= h($lpImage->created) ?></td>
                <td><?= h($lpImage->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'LpImages', 'action' => 'view', $lpImage->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'LpImages', 'action' => 'edit', $lpImage->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'LpImages', 'action' => 'delete', $lpImage->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lpImage->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related I18n') ?></h4>
        <?php if (!empty($lpContent->_i18n)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Locale') ?></th>
                <th scope="col"><?= __('Model') ?></th>
                <th scope="col"><?= __('Foreign Key') ?></th>
                <th scope="col"><?= __('Field') ?></th>
                <th scope="col"><?= __('Content') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($lpContent->_i18n as $i18n): ?>
            <tr>
                <td><?= h($i18n->id) ?></td>
                <td><?= h($i18n->locale) ?></td>
                <td><?= h($i18n->model) ?></td>
                <td><?= h($i18n->foreign_key) ?></td>
                <td><?= h($i18n->field) ?></td>
                <td><?= h($i18n->content) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'I18n', 'action' => 'view', $i18n->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'I18n', 'action' => 'edit', $i18n->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'I18n', 'action' => 'delete', $i18n->id], ['confirm' => __('Are you sure you want to delete # {0}?', $i18n->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
