<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Editar veiculo</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="<?php echo base_url('VeiculoListar'); ?>"> Back</a>
        </div>
    </div>
</div>

<form method="post" action="<?php echo base_url('veiculo/atualizar/'.$veiculo->id_veiculo); ?>">
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
                <strong>Modelo</strong>
                <input type="text" name="modelo" class="form-control"  value="<?php echo $veiculo->modelo; ?>">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Placa</strong>
                <input type="text" name="placa" class="form-control"  value="<?php echo $veiculo->placa; ?>">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Atualizar</button>
        </div>
    </div>
</form>

