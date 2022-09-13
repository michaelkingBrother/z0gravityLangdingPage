<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('All Header panel contetn'), ['controller' => 'LpContents', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('All Header image'), ['controller' => 'LpImages', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('All Roles'), ['controller' => 'Roles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('All user'), ['controller' => 'Users', 'action' => 'index']) ?></li>
    </ul>
</nav>
<div class="users index large-9 medium-8 columns content">
<h3><?= __('Hello ').h($user->role->role.' '.$user->user_email) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User Email') ?></th>
            <td><?= h($user->user_email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User Password') ?></th>
            <td><?= h($user->user_password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User Url') ?></th>
            <td><?= h($user->user_url) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Role') ?></th>
            <td><?= $user->has('role') ? $this->Html->link($user->role->role, ['controller' => 'Roles', 'action' => 'view', $user->role->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($user->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($user->modified) ?></td>
        </tr>
    </table>