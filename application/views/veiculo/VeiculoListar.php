

 <div class="pull-right">
            <a class="btn btn-success" href="<?php echo base_url('criarVeiculo') ?>">Cadastrar</a>
        </div>

            <table class="table table-dark">
                <thead>
                    <tr>
                    <th scope="col">id</th>
                    <th scope="col">Modelo</th>
                    <th scope="col">Placa</th>
                    </tr>
                </thead>
                <tbody>
                <?php

                $i=1;
                foreach($data as $row)
                {
                echo "<tr>";
                echo "<td>".$i."</td>";
                echo "<td>".$row->modelo."</td>";
                echo "<td>".$row->placa."</td>";
                echo "</tr>";
                $i++;
                }
            ?>
                </tbody>
            </table>

