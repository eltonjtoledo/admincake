<div class="categories form">
    <?php echo $this->Form->create('Category'); ?>
    <fieldset>
        <legend><?php echo __('Nova Categoria'); ?></legend>
        <div class="form-group col-md-12">
            <label>Titulo</label>
            <?= $this->Form->input('Titulo', array('class' => 'form-control', 'id' => "Title", 'label' => false, 'placeholder' => 'Digite o titulo para a Categoria')); ?>
        </div>
        <div class="form-group col-md-12">
            <label>Seção</label>
            <?= $this->Form->input('section_id', array('class' => 'form-control', 'id' => "Title", 'label' => false, 'placeholder' => 'Digite o titulo para a Categoria')); ?>
        </div>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Html->link(__('List Categories'), array('action' => 'index')); ?></li>
        <li><?php echo $this->Html->link(__('List Sections'), array('controller' => 'sections', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Section'), array('controller' => 'sections', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Posts'), array('controller' => 'posts', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Post'), array('controller' => 'posts', 'action' => 'add')); ?> </li>
    </ul>
</div>
