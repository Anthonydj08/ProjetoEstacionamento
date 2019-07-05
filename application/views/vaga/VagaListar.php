<?php
//include "$_SERVER[DOCUMENT_ROOT]/application/views/Layout/cabecalho.php";

(basename($_SERVER['PHP_SELF']))

?>
        <div class="pull-left">
            <h2>Listar vagas</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="<?php echo base_url('criarvaga') ?>">Cadastrar</a>
        </div>
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Número</th>
                    <th scope="col">Veiculo na vaga</th>
                    <th scope="col">Proprietário</th>
                    </tr>
                </thead>

                <tbody>
                
                <?php 
                $i=1;
                $query = $this->db->query("SELECT * FROM vaga JOIN veiculo  ON vaga.id_veiculo = veiculo.id_veiculo JOIN pessoa ON pessoa.id_pessoa = veiculo.id_pessoa");
                foreach ($data as $vaga) { ?>   
                
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $vaga->numero ;?></td>
                    <td><?php echo $vaga->id_veiculo ;?></td>
                    <?php
                    
                    foreach ($query->result() as $pessoa) {
                        if($vaga->id_veiculo ){ 
                                    ?>
                                    <td><?php echo $pessoa->nome;?></td>
                                    
                                    <?php }else{ ?>
                                        <td><?php echo "";}?></td>
                                    <?php }?>
                    <td>
                        <form method="DELETE" action="<?php echo base_url('vaga/excluir/' . $vaga->id_vaga); ?>">
                            <a class="btn btn-primary" href="<?php echo base_url('vaga/editar/' . $vaga->id_vaga) ?>"> Editar</a>
                            <button type="submit" class="btn btn-danger"> Excluir</button>
                        </form>
                    </td>     
                </tr>                
                
                <?php $i++; }?>
            
                </tbody>
            </table>

