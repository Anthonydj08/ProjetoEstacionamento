<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Cadastrar Veiculo</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="<?php echo base_url('VeiculoListar'); ?>"> Back</a>
        </div>
    </div>
</div>

<form method="post" action="<?php echo base_url('veiculoCriar'); ?>">
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
                <input type="text" name="modelo" class="form-control">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group ">
                <strong>Placa</strong>
                <input type="text" name="placa" class="form-control">
            </div>
        </div>

        
        <div class="input-group mb-3">
           
            <select class="form-control selectpicker" data-style="btn btn-link" name="id_pessoa" >
                <option selected>Escolha uma pessoa...</option>
                <?php 
                $i=1;
                $query = $this->db->get('pessoa');
                foreach ($query->result() as $pessoa) { ?>   

                <option value="<?php echo $pessoa->id_pessoa; ?>"><?php echo $pessoa->nome; ?></option>

                <?php  } ?>
            </select>

        </div>
        <?php 
    

       
        
        ?>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </div>
    </div>
</form>

