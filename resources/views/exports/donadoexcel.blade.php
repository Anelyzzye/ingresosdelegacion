<?php
header("Content-type: application/vnd.ms-excel");
$hoy = date("Y-m-d");
header("Content-Disposition: attachment; filename=donados$hoy.xls");
?> 
<meta charset="utf-8">
<style type="text/css">
    img{
      width: 120px;
      height: 90px;
    }
    h4{
      text-align: center;
      margin-top: 17px;
      font-family: arial, century gothic;
    }
    hr{
      width: 100%;
      background-color: #562449;
      height: 6px;
      border-radius: 8px;

    }
    h6{
      text-align: center;
      margin-top: 0px;
    }
    .conteiner{
      margin: auto;
    }
    table{
      width: 100%;
      text-align: left;
      border-collapse: collapse;
    }
    th, td{
      padding: 10;

    }
    thead{
      background-color: #9D2449;
      border-bottom: solid 2px #00;
      color: white;
    }
    tr:nth-child(even){
      background-color: #D4C19C;
    }
  </style>
  <div>
    <center> 
      &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;<img src="{{ asset('assets/img/brand/i.png')}}">&nbsp; &nbsp;&nbsp;</center>
  </div>
  <br><br><br><br><br><br><br><br>
<table>
 <tr>
    
        <tr>
          <td>&nbsp; &nbsp;&nbsp;
           
          <td><h4>&nbsp;&nbsp;&nbsp;DELEGACIÓN DE SAN PEDRO TOTOLTEPEC&nbsp;&nbsp;&nbsp;</h4><br>
            
          </td>
          <td>&nbsp; &nbsp; &nbsp;
            
        </tr>
      </table>
      <h6> “2019. Año del Centésimo Aniversario Luctuoso de Emiliano Zapata Salazar, el Caudillo del Sur”</h6>
       <hr>
  </div><br><br><br>


<table>
	<thead style="background-color: red">
		<tr>
			<th>Concepto</th>
			<th>Porcentaje</th>
		</tr>
	</thead>
        <?php
        $siceVec=sizeof($dona);
                          $cont=0; 
                        foreach ($dona as $d) {
                        $cont=$cont+1;

                       if ($cont==$siceVec) {
                       break;
                        }
    
                       $elementos=explode("~",$d);
                       echo "<tr>";

                        foreach ($elementos as $elemento) {
                        echo "<td align='center'>";
                        echo $elemento;
                        echo "</td>";
                      }
                     echo"</tr>";
      
                     }
                       ?>  
</table>
