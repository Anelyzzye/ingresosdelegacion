@extends('app/presencia')
@section('content')
<div><h1 class="l-text2 t-center"><center>
	Trámites y requisitos </center></h1>

	<div class="shipping bgwhite p-t-62 p-b-46" style="margin-left: : 25px;">
		
			
				<p> &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
				 Estimado Ciudadano:<br>
			<p style="text-align: justify;">
				&nbsp;&nbsp; &nbsp;  &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
				Pasos para realizar una cita:<br>
				&nbsp;&nbsp; &nbsp;  &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
				Para realizar una cita es necesario crear una cuenta, dando clic en <strong>Nuevo</strong> <br>
				&nbsp;&nbsp; &nbsp;  &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
				*Sí usted ya esta registrada puede realizar su cita (clic en crear cita).
				Posteriormente deberá ingresar sus claves de acceso.
				
			</p>
		</p>
		<center>
		<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
				 <a href="{{ route('register')}}">
				<button class=" size2 bg4 tag-item hov1 m-text3 trans-0-4" target="_blank">Nuevo
				</button></a>

				<a href="{{ route('registro')}}">
				<button class=" size2 bg4 tag-item hov1 m-text3 trans-0-4" target="_blank"> Crear Cita
				</button></a>	
		</center>
		</div>
		



<section class="shipping bgwhite p-t-62 p-b-46">
		<div class="flex-w p-l-15 p-r-15">

			<div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 respon1">
				<h4 class="m-text12 t-center">
					Constancia de Domicilio 
				</h4>
				<span class="s-text11 t-center">
						<ul>
				<li><strong>INE/IFE con direccion actualizada</strong></li>
				<li>*No cuenta con el INE por ser menor de edad ó no tener direción actualizada presentar:
					
						<li>CURP</li>
						<li>Comprobante de domicilio ó IFE (Papá o Mamá)</li>
					</ul>
				</span>
			</div>

			<div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 bo2 respon2">
				<h4 class="m-text12 t-center">
					Constancia de Ingresos 
				</h4>

				<span class="s-text11 t-center">
					<ul>
				<li><strong>INE/IFE con direccion actualizada</strong></li>
				<li><strong>Información del ingreso mensual</strong></li>
				<li>*No cuenta con el INE por ser menor de edad ó no tener direción actualizada presentar:
					
						<li>CURP</li>
						<li>Comprobante de domicilio ó IFE (Papá o Mamá)</li>
					</ul>
				</span>
			</div>

			<div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 respon1">
				<h4 class="m-text12 t-center">
					Constancia de Identidad
				</h4>

				<span class="s-text11 t-center">
						<ul>
				<li><strong>INE/IFE con direccion actualizada</strong></li>
				<li><strong>CURP / Acta de Nacimiento</strong></li>
				<li><strong>Fotografia infantil (blanco y negro)</strong></li>

				<li>*No cuenta con el INE por ser menor de edad ó no tener direción actualizada presentar:
					
						<li>CURP</li>
						<li>Comprobante de domicilio ó IFE (Papá o Mamá)</li>
					</ul>
				</span>
			</div>
		</div>
	</section>

	<section class="shipping bgwhite p-t-62 p-b-46">
		<div class="flex-w p-l-15 p-r-15">
			<div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 respon1">
				<h4 class="m-text12 t-center">
					Acta informativa 
				</h4>
					<span class="s-text11 t-center">
						<ul>
				<li><strong>INE/IFE con direccion actualizada</strong></li>
				<li>*No cuenta con el INE por ser menor de edad ó no tener direción actualizada presentar:
					
						<li>CURP</li>
						<li>Comprobante de domicilio ó IFE (Papá o Mamá)</li>
					</ul>
					</span>
			</div>

			<div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 bo2 respon2">
				<h4 class="m-text12 t-center">
					Reapertura de panteón 
				</h4>

				<span class="s-text11 t-center">
					<ul>
						<li>Certificado de Defunción</li>
						<li>Registro de inhumación</li>
						<li>IFE/INE Solicitante</li>
					</ul>
				</span>
			</div>

			<div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 respon1">
				<h4 class="m-text12 t-center">
					Contrato de compra - venta
				</h4>

				<span class="s-text11 t-center">
					Para el inicio de este proceso es necesario, solicitar las medidas del terreno
				</span>
			</div>
		</div>
	</section>


@endsection