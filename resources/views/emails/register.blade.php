
<div class="row">
    <div class="col s12 m7">
        <div class="card">
           	<div class="card-image">
              <img src="http://www.ahoratabasco.com/wp-content/uploads/2015/05/login-logo.png"><br>
              <span class="card-title">Hola {{$data['name']}} </span>
            </div>
            <div class="card-content">
              <p>Felipe Guzmán C ha creado una cuenta de administrador en Plataforma 2016 que le permitirá administrar sus alumnos, maestros, calificaciones y el progreso del Instituto Tecnologico de Villahermosa en línea. Puede acceder a su cuenta con las siguientes credenciales:</p><br>
              <p><strong>Usuario: </strong>{{ $data['email'] }}</p>
              <p><strong>Contraseña: </strong> {{ $data['password'] }}</p>

            </div>
            <div class="card-action">
             <a href="{{url('http://localhost:8000')}}/auth/confirm/email/{{$data['email']}}/confirm_token/{{$data['confirm_token']}}" class="waves-effect waves-light btn btn-custom blue-grey darken-4 z-depth-5 center">Confirmar mi cuenta</a>
            </div>
            <p>Por favor no responder a este email. Este es un mensaje automático desde una dirección de correo electrónico no supervisada. Si usted tiene alguna pregunta, por favor visite nuestro sitio de ayuda en: <a href="http://plataforma.ahoratabasco.com/public_html/">plataforma.ahoratabasco.com</a>.</p>
        </div>
    </div>
</div>





