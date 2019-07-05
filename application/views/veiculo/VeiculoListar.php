<?php
//include "$_SERVER[DOCUMENT_ROOT]/application/views/Layout/cabecalho.php";
(basename($_SERVER['PHP_SELF']))

?>
        <div class="pull-left">
            <h2>Listar veiculos</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="<?php echo base_url('criarveiculo') ?>">Cadastrar</a>
        </div>
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Modelo</th>
                    <th scope="col">Placa</th>
                    </tr>
                </thead>
                <tbody>
                
                <?php 
                $i=1;
                foreach ($data as $veiculo) { ?>   
                
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $veiculo->modelo ;?></td>      
                    <td><?php echo $veiculo->placa; ?></td> 
                    <td>
                        <form method="DELETE" action="<?php echo base_url('veiculo/excluir/' . $veiculo->id_veiculo); ?>">
                           
                            <a class="btn btn-primary" href="<?php echo base_url('veiculo/editar/' . $veiculo->id_veiculo) ?>"> Editar</a>
                            <button type="submit" class="btn btn-danger"> Excluir</button>
                        </form>
                    </td>     
                </tr>                
                
                <?php $i++; } ?>
            
                </tbody>
            </table>

