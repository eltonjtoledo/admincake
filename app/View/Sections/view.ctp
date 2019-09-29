<div class="list-group-item">
    <div class="d-flex">
        <div class="mr-auto p-2">
            <h2><?php echo __('Seções'); ?></h2>
        </div>
        <div class="p-2">

            <span class="d-none d-md-block">
                <?php
                echo $this->Html->link(__('Listar'), array('action' => '/'), array('class' => 'btn btn-outline-info btn-sm'));
                echo '&nbsp;';
                echo $this->Html->link(__('Editar'), array('action' => 'edit', $section['Section']['id']), array('class' => 'btn btn-outline-warning btn-sm'));
                echo '&nbsp;';
                echo $this->Html->link(__('Deletar'), array('action' => 'delet', $section['Section']['id']), array('class' => 'btn btn-outline-danger btn-sm', 'data-target' => '#apagarRegistro'));
                ?>
            </span>
            <div class="dropdown d-block d-md-none">
                <button class="btn btn-primary dropdown-toggle btn-sm" type="button" id="acoesListar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Ações
                </button>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="acoesListar">                                    
                    <a class="dropdown-item" href="listar.html">Listar</a>
                    <a class="dropdown-item" href="editar.html">Editar</a>
                    <a class="dropdown-item" href="apagar.html" data-toggle="modal" data-target="#apagarRegistro">Apagar</a>
                </div>
            </div>
        </div>
    </div><hr>
    <dl class="row">
        <dt class="col-sm-3">ID</dt>
        <dd class="col-sm-9"><?= $section['Section']['id'] ?></dd>

        <dt class="col-sm-3">Titulo</dt>
        <dd class="col-sm-9"><?= $section['Section']['title'] ?></dd>

        <dt class="col-sm-3">Criado Em:</dt>
        <dd class="col-sm-9"><?= $section['Section']['created'] ?></dd>

        <dt class="col-sm-3 text-truncate">Ultima alteração</dt>
        <dd class="col-sm-9"><?= $section['Section']['modified'] ?></dd>
    </dl>
</div>
<div class="related list-group-item">
    <h3><?php echo __('Categorias Relacionadas'); ?></h3>
    <?php if (!empty($section['Category'])): ?>

        <table class="table table-striped table-hover table-bordered">
            <thead>
                <tr>
                    <th><?php echo $this->Paginator->sort('id'); ?></th>
                    <th><?php echo $this->Paginator->sort('Titulo'); ?></th>
                    <th><?php echo $this->Paginator->sort('Criação'); ?></th>
                    <th><?php echo $this->Paginator->sort('Modificado'); ?></th>
                    <th class="actions"><?php echo __('Açoes'); ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($section['Category'] as $category): ?>
                    <tr>
                        <td><?php echo $category['id']; ?></td>
                        <td><?php echo $category['title']; ?></td>
                        <td><?php echo $category['section_id']; ?></td>
                        <td><?php echo $category['created']; ?></td>
                        <td><?php echo $category['modified']; ?></td>
                        <td class="text-center">
                            <span class="d-none d-md-block">
                                <?php
                                echo $this->Html->link(__('Visualizar'), array('controller' => 'categories', 'action' => 'view', $category['id']), array('class' => 'btn btn-outline-primary btn-sm'));
                                echo '&nbsp;';
                                echo $this->Html->link(__('Editar'), array('controller' => 'categories', 'action' => 'edit', $category['id']), array('class' => 'btn btn-outline-warning btn-sm'));
                                echo '&nbsp;';
                                echo $this->Html->link(__('Deletar'), array('controller' => 'categories', 'action' => 'delet', $category['id']), array('class' => 'btn btn-outline-danger btn-sm', 'data-target' => '#apagarRegistro'));
                                ?>
                            </span>
                        </td>
                    </tr>
                <?php endforeach; ?> 
            </tbody>
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
