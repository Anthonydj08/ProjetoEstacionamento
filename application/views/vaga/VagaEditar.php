<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Inserir Veiculo na vaga <?php echo $vaga->numero; ?></h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="<?php echo base_url('inicio'); ?>"> Back</a>
        </div>
    </div>
</div>

<form method="post" action="<?php echo base_url('vaga/atualizar/'.$vaga->id_vaga); ?>">
    <?php
    if ($this->session->flashdata('errors')) {
        echo '<div class="alert alert-danger">';
        echo $this->session->flashdata('errors');
        echo "</div>";
    }
    ?>
   

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>id veiculo</strong>
                <input type="text"  value="<?php echo $vaga->id_veiculo; ?>" name="id_veiculo" class="form-control">
            </div>
        </div>

        <div class="input-group mb-3">
           
           <select class="form-control selectpicker" data-style="btn btn-link" name="id_veiculo" >
               <option selected>Escolha uma veiculo...</option>
               <?php 
               $i=1;
               $query = $this->db->get('veiculo');
               foreach ($query->result() as $veiculo) { ?>   

               <option value="<?php echo $veiculo->id_veiculo; ?>"><?php echo "Modelo: ". $veiculo->modelo. "Placa: ". $veiculo->placa; ?></option>

               <?php  } ?>
           </select>

       </div>




        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Inserir Veiculo</button>
        </div>
    </div>
</form>

