<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Editar pessoa</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="<?php echo base_url('PessoaListar'); ?>"> Back</a>
        </div>
    </div>
</div>

<form method="post" action="<?php echo base_url('pessoa/atualizar/'.$pessoa->id_pessoa); ?>">
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
                <strong>Nome</strong>
                <input type="text" name="nome" class="form-control"  value="<?php echo $pessoa->nome; ?>">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Telefone</strong>
                <input type="number" name="telefone" class="form-control"  value="<?php echo $pessoa->telefone; ?>">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email</strong>
                <input type="text" name="email" class="form-control"  value="<?php echo $pessoa->email; ?>">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Atualizar</button>
        </div>
    </div>
</form>

