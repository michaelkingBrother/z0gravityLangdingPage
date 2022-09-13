<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="users form">
<?= $this->Flash->render() ?>
<?= $this->Form->create() ?>
    <fieldset>
        <legend><?= __('Please enter your email and password') ?></legend>
        <?php
            echo $this->Form->control('user_email');
            echo $this->Form->control('user_password');
        ?>
    </fieldset>
<?= $this->Form->button(__('Register')); ?>
<?= $this->Form->end() ?>
</div>
