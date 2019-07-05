<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Vaga  <?php echo $vaga->numero; ?></h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="<?php echo base_url('inicio');?>"> voltar</a>
        </div>
    </div>
</div>

<div class="row">

<?php ?>

    <?php 
        $i=1;
        
        $teste = $vaga->id_veiculo;
        $query = $this->db->query("SELECT * FROM veiculo WHERE veiculo.id_veiculo = " . $teste);
        $dados = $query->result(); 
        echo $dados->modelo;
       
     ?>




    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Modelo:</strong>
            <?php echo $dados->modelo; ?>
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Matrícula:</strong>
            <?php echo $dados->placa; ?>
        </div>
    </div>
</div>