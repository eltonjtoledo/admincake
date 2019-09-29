<div class="list-group-item">
    <div class="d-flex">
        <div class="mr-auto p-2">
            <h2><?php echo __('Categoria'); ?></h2>
        </div>
        <div class="p-2">
            <span class="d-none d-md-block">
                <?php
                echo $this->Html->link(__('Listar'), array('action' => '/'), array('class' => 'btn btn-outline-info btn-sm'));
                echo '&nbsp;';
                echo $this->Html->link(__('Editar'), array('action' => 'edit', $category['Category']['id']), array('class' => 'btn btn-outline-warning btn-sm'));
                echo '&nbsp;';
                echo $this->Html->link(__('Deletar'), array('action' => 'delet', $category['Category']['id']), array('class' => 'btn btn-outline-danger btn-sm', 'data-target' => '#apagarRegistro'));
                ?>
            </span>
        </div>
    </div><hr>
    <dl class="row">
        <dt class="col-sm-3">ID</dt>
        <dd class="col-sm-9"><?php $category['Category']['id'] ?></dd>

        <dt class="col-sm-3">Nome</dt>
        <dd class="col-sm-9"><?php $category['Category']['id'] ?></dd>

        <dt class="col-sm-3">Seção</dt>
        <dd class="col-sm-9"><?php echo $this->Html->link($category['Section']['title'], array('controller' => 'sections', 'action' => 'view', $category['Section']['id'])); ?>
            &nbsp;</dd>

        <dt class="col-sm-3">Data do Cadastro</dt>
        <dd class="col-sm-9">
            <?php echo h($category['Category']['created']); ?>
            &nbsp;
        </dd>

        <dt class="col-sm-3">Ultima Modificação</dt>
        <dd class="col-sm-9">
            <?php echo h($category['Category']['modified']); ?>
            &nbsp;
        </dd>
    </dl>
</div>

<div class="related list-group-item">
    <h3><?php echo __('Postagens Relacionadas'); ?></h3>
    <?php if (!empty($category['Post'])): ?>
        <table class="table table-striped table-hover table-bordered">
            <tr>
                <th><?php echo __('Id'); ?></th>
                <th><?php echo __('Title'); ?></th>
                <th><?php echo __('Articlebody'); ?></th>
                <th><?php echo __('User Id'); ?></th>
                <th><?php echo __('Category Id'); ?></th>
                <th><?php echo __('Created'); ?></th>
                <th><?php echo __('Modified'); ?></th>
                <th class="actions cl-large"><?php echo __('Ações'); ?></th>
            </tr>
            <?php foreach ($category['Post'] as $post): ?>
                <tr>
                    <td><?php echo $post['id']; ?></td>
                    <td><?php echo $post['title']; ?></td>
                    <td><?php echo (strlen($category['Post'][0]['articlebody']) > 297 ? substr($category['Post'][0]['articlebody'], 0, 297) . '...' : $category['Post'][0]['articlebody']); ?></td>
                    <td><?php echo $post['user_id']; ?></td>
                    <td><?php echo $post['category_id']; ?></td>
                    <td><?php echo $post['created']; ?></td>
                    <td><?php echo $post['modified']; ?></td>
                    <td class="text-center">
                        <span class="d-none d-md-block">                                
                            <?php
                            echo $this->Html->link(__('Visualizar'), array('controller' => 'posts', 'action' => 'view', $post['id']), array('class' => 'btn btn-outline-primary btn-sm', 'style' => 'width: 100px'));
                            echo '<br/>';
                            echo $this->Html->link(__('Editar'), array('controller' => 'posts', 'action' => 'edit', $post['id']), array('class' => 'btn btn-outline-warning btn-sm', 'style' => 'width: 100px'));
                            echo '<br/>';
                            echo $this->Html->link(__('Deletar'), array('controller' => 'posts', 'action' => 'delet', $post['id']), array('class' => 'btn btn-outline-danger btn-sm', 'style' => 'width: 100px', 'data-target' => '#apagarRegistro'));
                            ?>
                        </span>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
        <nav aria-label="paginacao">
            <ul class="pagination pagination-sm justify-content-center">
                <?php
                echo $this->Paginator->first('Primeira', array('class' => 'page-item page-link'));
                echo $this->Paginator->prev('< ', array('class' => 'page-item page-link'));
                echo $this->Paginator->numbers(array('separator' => '', 'class' => 'page-item page-link'));
                echo $this->Paginator->next(' >', array('class' => 'page-item page-link'));
                echo $this->Paginator->last('Ultima', array('class' => 'page-item page-link'));
                ?>
            </ul>
        </nav>
    <?php endif; ?>
</div>
