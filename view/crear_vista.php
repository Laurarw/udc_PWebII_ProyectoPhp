<?php require_once 'layout/header.php'; ?> 


         
         
             <h3>Crear Cliente</h3>
             
             <?php require_once 'layout/errores.php'; ?> 
             
             <form class="form-horizontal form-group" action="procesar.php?action=create" method="POST">
                 
                 
                 
       <?php require 'view/form_vista.php'; ?>

                 <input type="submit" class="btn btn-primary" value="Enviar">
                 <a href="list.php" class="btn btn-info">Volver</a>
            
        </form> 
        
       
          
<?php require 'layout/footer.php'; ?> 

