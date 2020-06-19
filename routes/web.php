
<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () { return view('welcome');});

//Route::get('/', function(){
	//return view('app.plantilla');
//});

//Route::get('/prueba', function(){
	//return view('app.nuevaplantilla');
//});



Route::get('/requisitos', function(){
	return view('loyout.tramites');
})->name("tramites.sitio");

Route::get('/contacto', function(){
	return view('loyout.contacto');
})->name("contacto.sitio");

Route::get('/quienes-somos', function(){
	return view('loyout.quienes');
})->name("quienes.sitio");



Route::get('/registro', function(){
	return view('loyout.registro');
})->name("registro");


Route::get('/usuario/ingresos', function(){
	return view('admin.altaingresos');
})->name("ingresos.usuario");

Route::get('/usuario/{id}', 'UserController@show')->name('perfil');

//Route::get('/dashboard', function(){return view('admin.dashboard');})->name("dashboard");

//Login
Route::post('/ingresar', 'Login@valida')->name('ingresar.sesion');

//Rutas de los PDF
Route::get('/donarPDF/{concepto?}', 'PdfdonacionController@exportPdf')->name('formato.pdf');
Route::get('/donar/excel', 'PdfdonacionController@exportExcel')->name('hoja.excel');



//Ciudadano
Route::get('/ciudadano', 'CiudadanoController@index')->name('ciudadano.index');
Route::get('/ciudadano/create', 'CiudadanoController@create')->name('ciudadano.create');
Route::post('/ciudadano', 'CiudadanoController@store')->name('ciudadano.store');


//Tipociudadano
Route::get('/tipociudadano', 'TipoCiudadanoController@index')->name("tipociudadano.index");
Route::get('/tipociudadano/create', 'TipoCiudadanoController@create')->name("tipociudadano.create");
Route::post('/tipociudadano', 'TipoCiudadanoController@store')->name("tipociudadano.store");
Route::get('/tipociudadano/{id}/edit', 'TipoCiudadanoController@edit')->name("tipociudadano.edit");
Route::patch('/tipociudadano/{id}', 'TipoCiudadanoController@update')->name("tipociudadano.update");
Route::delete('/tipociudadano/{id}', 'TipoCiudadanoController@destroy')->name("tipociudadano.delete");


//tramites
Route::get('/tipotramite/alls', 'TipotramiteController@index')->name("tramites");
Route::get('/tipotramite/create', 'TipotramiteController@create')->name("tipotramite.create");
Route::post('/tipotramite', 'TipotramiteController@store')->name("tipotramite.store");
Route::get('tipotramite/{id}', 'TipotramiteController@show')->name("tipotramite.show");
Route::get('/tipotramite/{id}/edit', 'TipotramiteController@edit')->name("tipotramite.edit");
Route::patch('/tipotramite/{id}', 'TipotramiteController@update')->name("tipotramite.update");
Route::delete('/tipotramite/{id}', 'TipotramiteController@destroy')->name("tipotramite.delete");



//Ingresos
//Route::get('/ingresos', 'IngresoController@create')->name("ingresos.create");
//y esta es donde hace el post


//Egresos
Route::get('/egresos/create', 'EgresoController@create')->name("egresos.create");
Route::post('/egresos', 'EgresoController@store')->name("egresos.store");

//Bitacora
Route::get('/bitacora/create', 'BitacoraController@create')->name("bitacora.create");


//donacion
Route::get('/donacion/all', 'PorcentajeDonadoController@index')->name('donacion');
Route::get('/donacion/create', 'PorcentajeDonadoController@create')->name("donacion.create");
Route::post('/donacion', 'PorcentajeDonadoController@store')->name("donacion.store");
Route::get('/donacion/{id}', 'PorcentajeDonadoController@show')->name('donacion.show');
Route::get('/donacion/{id}/edit', 'PorcentajeDonadoController@edit')->name("donacion.edit");
Route::patch('/donacion/{id}', 'PorcentajeDonadoController@update')->name("donacion.update");
Route::delete('/donacion/{id}','PorcentajeDonadoController@destroy')->name("donacion.delete");
//Route::get('/criterio', 'PorcentajeDonadoController@index')->name("criterio");
//Citas


//avisos
Route::get('/', 'AvisoController@index')->name('aviso.index');
Route::get('/avisos/all', 'AvisoController@detalle')->name('avisos');
Route::get('/muestra-aviso', 'AvisoController@publicado')->name('aviso.publicado');
Route::get('/', 'AvisoController@index')->name('aviso.index');
Route::get('avisos/create', 'AvisoController@create')->name("avisos.create");
Route::post('avisos', 'AvisoController@store')->name("avisos.store");
Route::get('/avisos/{id}', 'AvisoController@show')->name('avisos.show');
Route::get('/avisos/{id}/edit', 'AvisoController@edit')->name("aviso.edit");
Route::patch('/avisos/{id}', 'AvisoController@update')->name("aviso.update");
Route::delete('/avisos/{id}','AvisoController@destroy')->name("aviso.delete");


//Eventos
Route::get('/eventos/all', 'EventoController@detalle')->name('eventos');
Route::get('/noticias', 'EventoController@index')->name('eventos.index');
Route::get('eventos/create', 'EventoController@create')->name("eventos.create");
Route::post('eventos', 'EventoController@store')->name("eventos.store");
Route::get('/eventos/{id}', 'EventoController@show')->name('eventos.show');
Route::get('/eventos/{id}/edit', 'EventoController@edit')->name("eventos.edit");
Route::patch('/eventos/{id}', 'EventoController@update')->name("eventos.update");
Route::delete('/eventos/{id}','EventoController@destroy')->name("eventos.delete");



//recuperarcontraseña
Route::get('/recuperacion', function(){return view('loyout.recuperar'); })->name("recuperar");
Route::post('/recupera', 'EmailContactoController@restablecer')->name('email');
Route::get('/asunto', 'EmailContactoController@store')->name('email.store');

//citas
Route::get('/citas/info', 'CitaController@index')->name("cita.index");
Route::get('/citas/create', 'CitaController@create')->name("cita.create");
Route::post('/citas', 'CitaController@store')->name("cita.store");
Route::get('/dashboard', 'CitaController@show')->name('cita.show');

//Esta es la que muestra
Route::get('/citas/{id}/edit', 'CitaController@edit')->name("cita.edit");


Route::get('mostrar-porcentaje/{id}', 'IngresoController@show');

//cual es la URL de lo que tratamos de hacer?


//login
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('entrar');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');





//Registro
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');


Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');


Route::get('email/verify', 'Auth\VerificationController@show')->name('verification.notice');
Route::get('email/verify/{id}', 'Auth\VerificationController@verify')->name('verification.verify');
Route::get('email/resend', 'Auth\VerificationController@resend')->name('verification.resend');




Route::get('/home', 'HomeController@index')->name('home');

//Palpal-Panel
Route::get('/panel-paypal', 'PaypaltramiteController@index')->name('paypal.index');
Route::get('panel-paypal/{id}', 'PaypaltramiteController@show')->name("paypal.show");


//Paypal-funcionalidad
Route::get('panel-compra/{id}', 'PaypalcarritoController@show')->name("carrito.show");
Route::get('panel-compra', 'PaypalcarritoController@agregacarrito')->name("carrito.add");
Route::get('panel-añadir/{id}', 'PaypalcarritoController@tramiteagregado')->name("carrito.añadir");
Route::get('panel-remover/{id}', 'PaypalcarritoController@removertramitecarro')->name("carrito.remover");

# Default route when accessing the website
Route::get('/tramites', 'WebstoreController@index');

# The home route, which is used in the authentication scaffolding
# We update the closure argument to the index function of our controller
Route::get('/tramites', 'WebstoreController@index')->name('pagar.tramites');

Route::get('/checar', 'WebstoreController@checar')->name('checar');

Route::get('/checar/update/{product}', 'WebstoreController@addToCarts')->name('update');
# Adding a product to the shopping cart
Route::get('tramites/add/{product}', 'WebstoreController@addToCart')->name('add');

# Removing an product from the shopping cart
Route::get('tramites/remove/{productId}', 'WebstoreController@removeProductFromCart')->name('remove');

# Clearing all products from the shopping cart
Route::get('tramites/empty', 'WebstoreController@destroyCart')->name('empty');

# PayPal checkout
Route::get('checkout', 'PaypalController@payWithpaypal')->name('checkout');

# PayPal status callback
Route::get('status', 'PaypalController@getPaymentStatus');

Route::get('/ventas', 'WebstoreController@Ventas')->name('ventas');