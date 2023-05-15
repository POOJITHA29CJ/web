<body>
<form id="form1" name="form1" method="post" action="">
  <table width="237" border="1" cellpadding="20" cellspacing="20" align="center">
    <tr>
      <td colspan="2"><strong>EMPLOYEE SALARY CALCULATION SYSYTEM</strong> </td>
    <tr>
      <td width="101" height="36">Employee id </td>
      <td width="83"><input name="empid" type="text" id="empid" /></td>
    </tr>
    
    <tr>
      <td height="38">Employee name </td>
      <td><input name="empname" type="text" id="empname" /></td>
    </tr>
    <tr>
     
      <td height="35">Basic salary </td>
      <td><input name="salary" type="text" id="salary" /></td>
    </tr>
    <tr>
    
      <td height="36">&nbsp;</td>
      <td><input type="submit" name="Submit" value="Submit" /></td>
    </tr>
    
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
</form>
</body>
</html>

<?php

          if(isset($_POST['Submit']))
           {
              $salary = $_POST['salary'];
              
              if($salary > 50000)
              {
                 $tax = $salary * 10/100;
                 }
                 
                else if($salary > 30000)
                 {
                    $tax = $salary * 5/100;
                 }
                 else
                 {
                   $tax = 0;
                   }
                   
                   echo "<h2 align = 'center'> EMPLOYEE TAX:" . $tax ."</h2>";
                   
                   $nsal = $salary - $tax;
                   
                   echo "<h2 align = 'center'> EMPLOYEE NET SALARY:" . $nsal."</h2>" ;
                   
                   
                   
                   
                   
             }
             
?>