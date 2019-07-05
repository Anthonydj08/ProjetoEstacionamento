<?php
//include "$_SERVER[DOCUMENT_ROOT]/application/views/Layout/cabecalho.php";

(basename($_SERVER['PHP_SELF']))

?>
        <div class="pull-left">
            <h2>Listar pessoas</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="<?php echo base_url('criarpessoa') ?>">Cadastrar</a>
        </div>
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Email</th>
                    </tr>
                </thead>

                <tbody>
                
                <?php 
                $i=1;
                foreach ($data as $pessoa) { ?>   
                
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $pessoa->nome ;?></td>      
                    <td><?php echo $pessoa->telefone; ?></td>  
                    <td><?php echo $pessoa->email; ?></td> 

                    <td>
                        <form method="DELETE" action="<?php echo base_url('pessoa/excluir/' . $pessoa->id_pessoa); ?>">
                           
                            <a class="btn btn-primary" href="<?php echo base_url('pessoa/editar/' . $pessoa->id_pessoa) ?>"> Editar</a>
                            <button type="submit" class="btn btn-danger"> Excluir</button>
                        </form>
                    </td>     
                </tr>                
                
                <?php $i++; }?>
            
                </tbody>
            </table>

