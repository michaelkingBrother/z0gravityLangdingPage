<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LpListArticle $lpListArticle
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $lpListArticle->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $lpListArticle->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Lp List Articles'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="lpListArticles form large-9 medium-8 columns content">
    <?= $this->Form->create($lpListArticle) ?>
    <fieldset>
        <legend><?= __('Edit Lp List Article') ?></legend>
        <?php
            echo $this->Form->control('img_url');
            echo $this->Form->control('title');
            echo $this->Form->control('category');
            echo $this->Form->control('description');
            echo $this->Form->control('presse_url');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
