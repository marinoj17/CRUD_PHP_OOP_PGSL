<?php 
include('header.php');
$alumno = $_SESSION['alumno'];
if(isset($_POST['update']) and !empty($_POST['update'])){
$ret_val = $obj->updateAlumno();
if($ret_val==1){
    echo '<script type="text/javascript">'; 
    echo 'alert("Record Updated Successfully");'; 
    echo 'window.location.href = "index.php";';
    echo '</script>';
}
}
?>
<div class="container-fluid bg-3 text-center">    
  <h3>EDITAR</h3>
  <a href="index.php" class="btn btn-primary pull-right" style='margin-top:-30px'><span class="glyphicon glyphicon-step-backward"></span>Back</a>
  <br>  
  <div class="panel panel-primary">
        <div class="panel-heading">CRUD Examen</div>
            <form class="form-horizontal" method="post">
            <div class="panel-body">             
             <div class="form-group">
               <label class="control-label col-sm-2">NOMBRE:<span style='color:red'>*</span></label>
               <div class="col-sm-5">
                  <input class="form-control" value= "<?=$alumno->nombre?>"type="text" name="nombre" required>
               </div>
            </div>
             <div class="form-group">
               <label class="control-label col-sm-2">APELLIDO:<span style='color:red'>*</span></label>
               <div class="col-sm-5">
                  <input class="form-control" value= "<?=$alumno->apellido?>"type="text" name="apellido" required>
               </div>
            </div>            
             <div class="form-group">
               <label class="control-label col-sm-2">RUT:<span style='color:red'>*</span></label>
               <div class="col-sm-5">
                  <input class="form-control" value= "<?=$alumno->rut?>"type="text" name="rut" required>
               </div>
            </div>
            <div class="form-group">
               <label class="control-label col-sm-2">CURSO:<span style='color:red'>*</span></label>
               <div class="col-sm-5">
               <input class="form-control" value= "<?=$alumno->curso?>"type="text" name="curso" required>
               </div>
               <input type="hidden" value="<?=$alumno->id_alumno?>" name="id_alumno">
            </div>
             <div class="form-group">
               <label class="control-label col-sm-2">  </label>
               <div class="col-sm-5">
                 <input type="submit" class="btn btn-success" name="update" value="Update">                    
                </div>
            </div> 
        </div>      
</form>
</div>
</div>  
 <?php include('footer.php');?>