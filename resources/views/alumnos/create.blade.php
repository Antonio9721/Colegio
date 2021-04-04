<h3>Formulario para registrar nuevo alumno</h3>
<br>

<form method="post" action="{{ route('alumnos.store') }}">
	@csrf
	<div>
		<label for="">Nombre:</label>
		<input placeholder="Nombre del alumno" type="text" name="Nombre" id="" maxlength="20" minlength="4">
	</div>
<br>

	<div>
		<label for="">Apellido Paterno:</label>
		<input placeholder="Primer Apellido" type="text" name="ApellidoPaterno" id="" maxlength="15" minlength="4">
	</div>
<br>

	<div>
		<label for="">Apellido Materno</label>
		<input placeholder="Segundo Apellido" type="text" name="ApellidoMaterno" id="" maxlength="15" minlength="5">
	</div>

<br>

	<div>
		<label for="">Matricula:</label>
		<input placeholder="Escriba su matricula" type="text" name="Matricula" id="" maxlength="8" minlength="">
	</div>
<br>

	<div>
		<label for="">Correo:</label>
		<input placeholder="Dirección de Correo" type="email" name="Correo" id="" maxlength="15" minlength="8">
	</div>
<br>

<div>
		<label for="">Carrera:</label>
		<input placeholder="Carrera Asignada" type="text" name="Carrera" id="" maxlength="15" minlength="8">
	</div>
<br>

	<div>
		<label for="">Grupo:</label>
		<input placeholder="Escriba su grupo" type="text" name="Grupo" id="" maxlength="12" minlength="4">
	</div>
<br>

	<div>
		<label for="">Extraescolar:</label>
		<input placeholder="Extraescolar" type="text" name="Extraescolar" id="" maxlength="12" minlength="4">
	</div>
<br>

<input type="submit" value="Guardar">
	

</form>