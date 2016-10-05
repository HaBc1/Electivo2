<!DOCTYPE html>
 <?php
    require_once("curso.php");
    $nuevo = new curso();
    $nuevo->NuevoCurso($_POST ['txtnombre'], $_POST ['txthoras'], $_POST ['txtcredito'])
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <fieldset>
            <legend>
                ::Formulario Curso
            </legend>
            
            <form action="index.php" method="POST">
            <table>
                <tr>
                    <td>
                        Codigo Curso
                    </td>
                    <td>
                        <input type="text" name="txtcodigo" size="10">
                    </td>
                </tr>
                <tr>
                    <td>
                        Nombre Curso
                    </td>
                    <td>
                        <input type="text" name="txtnombre" size="20">
                    </td>
                </tr>
                <tr>
                    <td>
                        Horas Curso
                    </td>
                    <td>
                        <input type="text" name="txthoras" size="10">
                    </td>
                </tr>
                <tr>
                    <td>
                        Creditos Curso
                    </td>
                    <td>
                        <input type="text" name="txtcredito" size="10">
                    </td>
                </tr>
                 <tr>
                     <td colspan="2">
                         <input type="submit" name="btnguardar" value="Guardar">
                         <input type="submit" name="btnlistar" value="Listar">
                    </td>      
                </tr>
                
                
              
            </table> 
            
        </form>
       </fieldset>
    </body>
</html>
