<?php
require '../modelos/conectar.php';
	$consulta=$conexion->prepare("SELECT * FROM tbl_usuario");
	$consulta->execute();
	if($consulta->rowCount()>=1){
		while($fila=$consulta->fetch()){
			echo "<tr>
					<td>".$fila['USU_CODIGO']."</td>
					<td>".$fila['ROL_CODIGO']."</td>
					<td>".$fila['USU_USUARIO']."</td>
                    <td>".$fila['USU_NOMBRES']."</td>
					<td>".$fila['USU_APELLIDOS']."</td>
					<td>".$fila['USU_ESTADO']."</td>
					<td>".$fila['USU_CORREO']."</td>
					<td>
					<a href='actualizar_mant_vista.php?USU_CODIGO=".$fila['USU_CODIGO']."' class= 'btn bg-orange btn-flat margin' id='text'  >
					<i class='fa fa-pencil'></i></a>
					<a href='mostrar_vista.php?USU_CODIGO=".$fila['USU_CODIGO']."' onclick='return confdelete();' class= 'btn bg-maroon bnt-flat margin' >
					<i class='fa fa-trash'></i></a> 
					</td>
				</tr>";
		}
	}else{
		echo "<tr>
			<td colspan='4'>No hay datos</td>
		</tr>";
  }
  ?>
  


 