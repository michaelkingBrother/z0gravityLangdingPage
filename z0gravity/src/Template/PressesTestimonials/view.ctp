<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PressesTestimonial $pressesTestimonial
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Presses Testimonial'), ['action' => 'edit', $pressesTestimonial->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Presses Testimonial'), ['action' => 'delete', $pressesTestimonial->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pressesTestimonial->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Presses Testimonials'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Presses Testimonial'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="pressesTestimonials view large-9 medium-8 columns content">
    <h3><?= h($pressesTestimonial->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Logo Url') ?></th>
            <td><?= h($pressesTestimonial->logo_url) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Author') ?></th>
            <td><?= h($pressesTestimonial->author) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Author Position') ?></th>
            <td><?= h($pressesTestimonial->author_position) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Presse Url') ?></th>
            <td><?= h($pressesTestimonial->presse_url) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($pressesTestimonial->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($pressesTestimonial->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($pressesTestimonial->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($pressesTestimonial->description)); ?>
    </div>
</div>

