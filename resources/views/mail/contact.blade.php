<h1>Mensaje enviado desde la web</h1>
<p>
  Consulta de {{$data['tipo']}}
</p>

<h3>Datos Generales</h3>
<p>
  <b>Enviado por</b>: {{$data['nombre']}}<br>
  <b>Email</b>: {{$data['email']}}<br>
  <b>Telefono</b>: {{$data['telefono']}}<br>
  <b>Direccion</b>: {{$data['direccion']}}
</p>

@if ($data['tipo'] === 'Empresa')
<h3>Datos Empresa</h3>
<p>
  <b>Nombre</b>: {{$data['nombreEmpresa']}} <br>
  <b>Direccion</b>: {{$data['direccionEmpresa']}}
</p>
@endif

<h3>Detalle</h3>

<p><b>Motivo</b>: {{$data['motivo']}}</p>

<p><b>Servicios</b>:
  <br />
  @foreach($data['servicios'] as $servicio)
  - {{$servicio}}
  <br />
  @endforeach
</p>

<p><b>Mensaje</b>:<br>
  {{$data['mensaje']}}
</p>
