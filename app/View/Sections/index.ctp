<div class="sections index list-group-item">
    <h2><?php echo __('Sections'); ?></h2>
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
            <?php foreach ($sections as $section): ?>
                <tr>
                    <td><?php echo h($section['Section']['id']); ?>&nbsp;</td>
                    <td><?php echo h($section['Section']['title']); ?>&nbsp;</td>
                    <td><?php echo h($section['Section']['created']); ?>&nbsp;</td>
                    <td><?php echo h($section['Section']['modified']); ?>&nbsp;</td>
                    <td class="text-center">
                        <span class="d-none d-md-block">
                            <?php
                            echo $this->Html->link(__('Visualizar'), array('action' => 'view', $section['Section']['id']), array('class' => 'btn btn-outline-primary btn-sm'));
                            echo '&nbsp;';
                            echo $this->Html->link(__('Editar'), array('action' => 'edit', $section['Section']['id']), array('class' => 'btn btn-outline-warning btn-sm'));
                            echo '&nbsp;';
                            echo $this->Html->link(__('Deletar'), array('action' => 'delet', $section['Section']['id']), array('class' => 'btn btn-outline-danger btn-sm', 'data-target' => '#apagarRegistro'));
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
