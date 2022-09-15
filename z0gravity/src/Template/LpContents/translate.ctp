<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LpContent $lpContent
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $lpContent->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $lpContent->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Lp Contents'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Lp Contents Title Translation'), ['controller' => 'LpContents_title_translation', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Lp Contents Title Translation'), ['controller' => 'LpContents_title_translation', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Lp Contents Description Translation'), ['controller' => 'LpContents_description_translation', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Lp Contents Description Translation'), ['controller' => 'LpContents_description_translation', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Lp Contents Btn Content Translation'), ['controller' => 'LpContents_btn_content_translation', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Lp Contents Btn Content Translation'), ['controller' => 'LpContents_btn_content_translation', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Lp Images'), ['controller' => 'LpImages', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Lp Image'), ['controller' => 'LpImages', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List I18n'), ['controller' => 'I18n', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New I18n'), ['controller' => 'I18n', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="lpContents form large-9 medium-8 columns content">
    <?= $this->Form->create($lpContent) ?>
    <fieldset>
        <legend><?= __('Edit Lp Content') ?></legend>
        <?php
            echo $this->Form->radio("locale",[
                ['value'=>'vi_VN','text'=>'Vietnamese'],
                ['value'=>'de_DE','text'=>'Deutsch'],
                ['value'=>'en_US','text'=>'English'],
                ['value'=>'es','text'=>'Español'],
                ['value'=>'fr_FR','text'=>'Français'],
                ['value'=>'nl_NL','text'=>'Nederlands'],
                ['value'=>'pl','text'=>'Polski'],
                ['value'=>'pt-br','text'=>'Português'],
                ['value'=>'ru','text'=>'Русский'],
                ['value'=>'no_NO','text'=>'Bokmål'],
                ['value'=>'el','text'=>'Ελληνικά'],
                ['value'=>'ja','text'=>'日本語'],
                ['value'=>'zh-cn','text'=>'繁體中文'],
                
            ]);
            echo $this->Form->control('title');
            echo $this->Form->control('description');
            echo $this->Form->control('video_url');
            echo $this->Form->control('btn_content');
            
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
