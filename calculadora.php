<!DOCTYPE html>
<html>
<head> 
<Title> Calculadora</title>
<body>

<?php
if (count($_POST)>0{
      $n1= $_POST['iptN1']
      $op= $_POST['operacao']
      $n2= $_POST['iptN2']

if($op=='adicao'){
$res= $n1+$n2;}}

    


  <div id="calculadora">
    <form id="Resultado" method="post">
     <p><label>N1</label><input name="inptN1" value='<?php echo $n1; ?>'></input></p>
     <p><label>Operacao</label>
        <select name="operacao">
             <option id="optAdd" value="adicao">Adicao</option>
        </select>    
     </p>
     <p><label>N2</label><input name="iptN2" value='<?php echo $n2; ?>'></input></p>
     <p><label> Resultado:</label><input name="$res" value='<?php echo $res; ?>'readonly></input></p>
     <p><input type="submit" id="btnCalc" value="Calcular"></p>
     </form>
   </div>  

</body>
</html>
