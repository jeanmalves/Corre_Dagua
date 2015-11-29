<?php if (!isAjax()) : ?>    
    <?php $this->load->view('layout_peera/header', $data); ?>
<?php endif; ?>

<?php $this->load->view($content, $data); ?>

<?php if (!isAjax()) : ?>    
    <?php echo $data['pagination']; ?>
    <?php $this->load->view('layout_peera/footer', $data); ?>
<?php endif; ?>