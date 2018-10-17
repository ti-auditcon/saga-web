<p>Mensaje enviado desde la web</P>

<h4>
  Datos Generales:
</h4>

<p>Enviado por: {{$data['nombre']}}</p>
<p>Email: {{$data['email']}}</p>
<p>Telefono: {{$data['telefono']}}</p>
<p>Direccion: {{$data['direccion']}}</p>

<h4>
  Datos Empresa:
</h4>
<p>Nombre : {{$data['nombreEmpresa']}}</p>
<p>Direccion : {{$data['direccionEmpresa']}}</p>

<h4>
  Detalle
</h4>

<p>Motivo : {{$data['motivo']}}</p>
<p>Servicios :
  <br />
@foreach($data['servicios'] as $servicio)
- {{$servicio}}
<br />
@endforeach
</p>

<h4>
  Mensaje
</h4>
<p>
  {{$data['mensaje']}}
</p>
