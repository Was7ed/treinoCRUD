
<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Post[]|\Cake\Collection\CollectionInterface $post
 */
?>

<!-- <nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><//?= $this->Html->link(__('New Post'), ['action' => 'add']) ?></li>
    </ul>
</nav> -->
<button class="button addFloater">
    <?= $this->Html->link(__('New Post'), ['action' => 'add']) ?>
</button>

<div class="post index large-offfset-2 medium-offset-2  large-8 medium-8 columns content">
    <h2><?= __('Início') ?></h2><br>
    <table cellpadding="0" cellspacing="0">
        <!-- <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('body') ?></th>
                <th scope="col"><?= $this->Paginator->sort('author') ?></th>
                 <th scope="col" class="actions"><//?= __('Actions') ?></th>
            </tr>
        </thead> -->
        <tbody>
            <?php foreach ($post as $post): ?>
                <tr>
                    <td><strong><h4 class="center"><?= h($post->title) ?></h3></strong></td>
                </tr>
                    <td><p><?= h($post->body) ?></p></td>
                </tr>
                <tr>
                    <td>
                        <span class="subheader a">
                            <em>Autor: <?= h($post->author) ?></em>
                            <span class="right">
                                <?= $this->Html->link(__('Editar'), ['action' => 'edit', $post->id]) ?>
                                <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $post->id], ['confirm' => __('Tem certeza que quer deletar o post {0}?', $post->nome)]) ?>
                            </span>
                        </span>
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


<style scoped>
    .addFloater{
        position: fixed;
        top: 90%;
        left: 90%;
        background-color: #a7f99f !important;
        box-shadow: 5px 5px 5px grey;
    }

    .addFloater a{
        color: black !important;
    }

</style>