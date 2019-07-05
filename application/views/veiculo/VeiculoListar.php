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
            <th scope="col">*</th>
            <th scope="col">Modelo</th>
            <th scope="col">Placa</th>
            <th scope="col">Proprietario</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $i = 1;
        $query2 = $this->db->query('SELECT * FROM pessoa ');
        foreach ($data as $veiculo) { ?>
            <?php foreach ($query2->result() as $pessoa) { ?>
                <?php if ($pessoa->id_pessoa == $veiculo->id_pessoa) { ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $veiculo->modelo; ?></td>
                        <td><?php echo $veiculo->placa; ?></td>
                        <td><?php echo $pessoa->nome; ?></td>
                        <td>
                            <form method="DELETE" action="<?php echo base_url('veiculo/excluir/' . $veiculo->id_veiculo); ?>">

                                <a class="btn btn-primary" href="<?php echo base_url('veiculo/editar/' . $veiculo->id_veiculo) ?>"> Editar</a>
                                <button type="submit" class="btn btn-danger"> Excluir</button>
                            </form>
                        </td>
                    </tr>
                <?php } ?>
            <?php } ?>
            <?php $i++;
        } ?>
    </tbody>
</table>