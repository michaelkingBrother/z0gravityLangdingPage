<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PressesTestimonial $pressesTestimonial
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $pressesTestimonial->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $pressesTestimonial->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Presses Testimonials'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="pressesTestimonials form large-9 medium-8 columns content">
    <?= $this->Form->create($pressesTestimonial) ?>
    <fieldset>
        <legend><?= __('Edit Presses Testimonial') ?></legend>
        <?php
            echo $this->Form->control('logo_url');
            echo $this->Form->control('description');
            echo $this->Form->control('author');
            echo $this->Form->control('author_position');
            echo $this->Form->control('presse_url');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

