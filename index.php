<?php 
include('header.php');
$alumnos = $obj->getAlumno();
if(isset($_POST['update'])){
    $alumno = $obj->getAlumnoId();
    $_SESSION['alumno'] = pg_fetch_object($alumno);
    header('location:edit.php');
}
if(isset($_POST['delete'])){
   $ret_val = $obj->deleteAlumno();
   if($ret_val==1){
       
      echo "<script language='javascript'>";
      echo "alert('Record Deleted Successfully'){
          window.location.reload();
      }";
      echo "</script>";
  }
}
?>
<div class="container-fluid bg-3 text-center">    
  <h3>LISTADO</h3>
  <a href="insert.php" class="btn btn-primary pull-right" style='margin-top:-30px'><span class="glyphicon glyphicon-plus-sign"></span> Add Record</a>
  <br>
  
  <div class="panel panel-primary">
        <div class="panel-heading">CRUD ORIENTADO A OBJETOS PHP INTEGRACION POSTGRESQL</div>
             
            <div class="panel-body">
            <table class="table table-bordered table-striped">
    <thead>
      <tr class="active">
            <th>No.</th>  
            <th >NOMBRE</th>       
            <th>APELLIDO</th>
            <th>RUT</th>
            <th>CURSO</th>
            <th>Action</th>
      </tr>
    </thead>
    <tbody>
    <?php $sn=1; ?>
    <?php while($alumno = pg_fetch_object($alumnos)): ?>
      <tr align="left">
        <td ><?=$sn++?></td>
        <td><?=$alumno->nombre?></td>
        <td><?=$alumno->apellido?></td>
        <td><?=$alumno->rut?></td>
        <td><?=$alumno->curso?></td>
        <td>
            <form method="post">
                <input type="submit" class="btn btn-success" name= "update" value="Update">   
                <input type="submit" onClick="return confirm('Please confirm deletion');" class="btn btn-danger" name= "delete" value="Delete">
                <input type="hidden" value="<?=$alumno->id_alumno?>" name="id_alumno">
            </form>
        </td>
      </tr>
    <?php endwhile; ?>   
    </tbody>
  </table>
</div>
</div>
</div>  
<?php include('footer.php');?>