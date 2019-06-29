

 <div class="pull-right">
            <a class="btn btn-success" href="<?php echo base_url('criarpessoa') ?>">Cadastrar</a>
        </div>
        <?php
            // foreach($pessoas as $pessoa){
            //     echo 'Nome: ' . $pessoa->getNome();
            //     echo ' - telefone: ' . $pessoa->getTelefone() . '<br>';
            // }


           
        ?>

            <table class="table table-dark">
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
                foreach($data as $row)
                {

                    echo "<tr>";
                    echo "<td>".$i."</td>";
                    echo "<td>".$row->nome."</td>";
                    echo "<td>".$row->telefone."</td>";
                    echo "<td>".$row->email."</td>";
    
                    echo "<td><a href='deletedata?id=".$row->id_pessoa."'>Delete</a></td>";
                    echo "<td>  <button type='button' class='btn btn-outline-primary' href='deletedata?id=".$row->id_pessoa."'>Delete</button></td>";
                    echo "<td>  <button type='button' class='btn btn-outline-primary'>Excluir</button></td>";
                    echo "</tr>";
                    $i++; 
                ?>

                


                <?php
                }
                ?>
                
                

            
                </tbody>
            </table>

