<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Cadastrar nova vaga</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="<?php echo base_url('VagaListar'); ?>"> Back</a>
        </div>
    </div>
</div>

<form method="post" action="<?php echo base_url('vagaCriar'); ?>">
    <?php
    if ($this->session->flashdata('errors')) {
        echo '<div class="alert alert-danger">';
        echo $this->session->flashdata('errors');
        echo "</div>";
    }
    ?>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Número</strong>
                <input type="number" name="numero" class="form-control">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </div>
    </div>
</form>

