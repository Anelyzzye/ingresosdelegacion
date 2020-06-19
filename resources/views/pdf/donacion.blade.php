<!DOCTYPE html>
<html>
<head>
	<title></title>
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
</head>
<body>
	<div class="row">
  <div class="col-xs-3 col-md-3">
  		<table>
  			<tr>
  				<td>&nbsp; &nbsp;&nbsp;<img src="{{ asset('assets/img/brand/logo.png')}}" alt="...">&nbsp; &nbsp; &nbsp;</td>
  				<td><h4>&nbsp;&nbsp;&nbsp;DELEGACIÓN DE SAN PEDRO TOTOLTEPEC&nbsp;&nbsp;&nbsp;</h4><br>
  					
  				</td>
  				<td>&nbsp; &nbsp; &nbsp;<img src="{{ asset('assets/img/brand/favicon.jpg')}}" alt="..."></td>
  			</tr>
  		</table>
  		<h6> “2019. Año del Centésimo Aniversario Luctuoso de Emiliano Zapata Salazar, el Caudillo del Sur”</h6>
  		 <hr>
  </div>

</div>
<br>
<div class="conteiner">

  <!-- Table -->
  <table class="table">
  	<thead>
	<tr>
		<th>Concepto</th>
		<th>Porcentaje</th>
	</tr>
	</thead>
	@foreach($donacion as $dona)
	<tr>
	<td>{{ $dona->concepto }}</td>
	<td>{{ $dona->porcentaje }}</td>
	</tr>
	@endforeach
</table>
</div>
</body>
</html>