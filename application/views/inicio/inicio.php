<?php
//include "$_SERVER[DOCUMENT_ROOT]/application/views/Layout/cabecalho.php";
(basename($_SERVER['PHP_SELF']))

?>

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Estacionamento</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="<?php echo base_url('VagaListar'); ?>">Adicionar veiculo a vaga</a>
        </div>
          
    </div>
</div>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Vagas</h4>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="row">
                                <?php 
                                $i=1;
                                $query = $this->db->get('vaga');
                                $query2 = $this->db->get('veiculo');
                                foreach($query->result() as $vaga){?>
                                    <?php foreach($query2->result() as $veiculo){ ?>
                                        <?php if($vaga->id_veiculo == $veiculo->id_veiculo){ ?> 
                                       
                                            <div class="col-md-2" style="height: 136px;" >
                                                <a href="<?php echo base_url('vagaEditar/' . $vaga->id_vaga) ?>">
                                                    <img class="rounded mx-auto d-block" style="height: 60px;" src="/imagens/estacionaVermelho.png" alt="Minha Figura" />
                                                    <h5 class="text-center">Veículo:<?php echo $veiculo->modelo; ?></h5>
                                                    <h5  class="text-center"><?php echo $vaga->numero;?></h5>
                                                </a>
                                            </div>
                                           
                                                    
                                                
                                        <?php }?>
                                    <?php }?>
                                    <?php if($vaga->id_veiculo == 0){ ?> 
                                    
                                        <div class="col-md-2" style="height: 136px;" >
                                        <a href="<?php echo base_url('vagaEditar/' . $vaga->id_vaga) ?>">

                                            <img class="rounded mx-auto d-block" style="height: 60px;" src="/imagens/estacionaVerde.png" alt="Minha Figura"/> <h5 class="text-center"><?php echo $vaga->numero; ?></h5>
                                        </a>
                                        </div>
                                       
                                    <?php }?>       
                                <?php }?>       
                            </div>       
                        </form>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>