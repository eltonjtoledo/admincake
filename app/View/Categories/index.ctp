<div class="list-group-item">
    <div class="d-flex">
        <div class="mr-auto p-2">
            <h2><?php echo __('Lista de Categorias'); ?></h2>
        </div>
        <div class="p-2">
            <?= $this->Html->link('Cadastrar',array('action' => 'add'), array('class' => 'btn btn-outline-success btn-sm', 'div' => 'p-2')) ?>
        </div>
    </div>
    <div class="alert alert-success" role="alert">
        Usuário apagado com sucesso!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="table-responsive">
        <table class="table table-striped table-hover table-bordered">
            <thead>
                <tr>
                    <th><?php echo $this->Paginator->sort('id', 'ID'); ?></th>
                    <th><?php echo $this->Paginator->sort('title', 'Nome'); ?></th>
                    <th><?php echo $this->Paginator->sort('section_id', 'Seção'); ?></th>
                    <th><?php echo $this->Paginator->sort('created', 'Data de Criação'); ?></th>
                    <th><?php echo $this->Paginator->sort('modified', 'Data de Modificação'); ?></th>
                    <th class="actions"><?php echo __('Ações'); ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($categories as $category): ?>
                    <tr>
                        <td><?php echo h($category['Category']['id']); ?>&nbsp;</td>
                        <td><?php echo h($category['Category']['title']); ?>&nbsp;</td>

                        <td><?php echo $this->Html->link($category['Section']['title'], array('controller' => 'sections', 'action' => 'view', $category['Section']['id'])); ?></td>
                        <td><?php echo date('d/m/Y', strtotime($category['Category']['created'])); ?>&nbsp;</td>
                        <td><?php echo ($category['Category']['modified'] != '' ? date('d/m/Y', strtotime($category['Category']['modified'])) : 'Não modificado'); ?>&nbsp;</td>

                        <td class="text-center">
                            <span class="d-none d-md-block">                                
                                <?php
                                echo $this->Html->link(__('Visualizar'), array('action' => 'view', $category['Category']['id']), array('class' => 'btn btn-outline-primary btn-sm', 'style' => 'width: 100px'));
                                echo '<br/>';
                                echo $this->Html->link(__('Editar'), array('action' => 'edit', $category['Category']['id']), array('class' => 'btn btn-outline-warning btn-sm', 'style' => 'width: 100px'));
                                echo '<br/>';
                                echo $this->Html->link(__('Deletar'), array('action' => 'delet', $category['Category']['id']), array('class' => 'btn btn-outline-danger btn-sm', 'style' => 'width: 100px', 'data-target' => '#apagarRegistro'));
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
    </div>
</div>
<div class="modal fade" id="apagarRegistro" tabindex="-1" role="dialog" aria-labelledby="apagarRegistroLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger text-white">
                <h5 class="modal-title" id="exampleModalLabel">EXCLUIR ITEM</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Tem certeza de que deseja excluir o item selecionado?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-danger">Apagar</button>
            </div>
        </div>
    </div>
</div>