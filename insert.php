<?php 
include('header.php');
if(isset($_POST['submit']) and !empty($_POST['submit'])){
$ret_val = $obj->createAlumno();
if($ret_val==1){
    echo '<script type="text/javascript">'; 
    echo 'alert("Record Saved Successfully");'; 
    echo 'window.location.href = "index.php";';
    echo '</script>';
}
}
?>
<div class="container-fluid bg-3 text-center">    
  <h3>CRUD Example Using PHP OOPS And PostgreSQL</h3>
  <a href="index.php" class="btn btn-primary pull-right" style='margin-top:-30px'><span class="glyphicon glyphicon-eye-open"></span> View Records</a>
  <br>
  
  <div class="panel panel-primary">
        <div class="panel-heading">CRUD  Examen</div>
            <form class="form-horizontal" method="post">
            <div class="panel-body">
             
             <div class="form-group">
               <label class="control-label col-sm-2">NOMBRE:<span style='color:red'>*</span></label>
               <div class="col-sm-5">
                  <input class="form-control" type="text" name="nombre" required>
               </div>
            </div>
             <div class="form-group">
               <label class="control-label col-sm-2">APELLIDO:<span style='color:red'>*</span></label>
               <div class="col-sm-5">
                  <input class="form-control" type="text" name="apellido" required>
               </div>
            </div>
            
             <div class="form-group">
               <label class="control-label col-sm-2">RUT:<span style='color:red'>*</span></label>
               <div class="col-sm-5">
                  <input class="form-control" type="text" name="rut" required>
               </div>
            </div>
            <div class="form-group">
               <label class="control-label col-sm-2">Curso:<span style='color:red'>*</span></label>
               <div class="col-sm-5">
                    <input class="form-control" type="text" name="curso" required>
               </div>
            </div>
             <div class="form-group">
               <label class="control-label col-sm-2">  </label>
               <div class="col-sm-5">
                  <input type="submit" class="btn btn-primary" name="submit"  value="Submit">
               </div>
            </div> 
        </div>      
</form>
</div>
</div>  
 <?php include('footer.php');?>