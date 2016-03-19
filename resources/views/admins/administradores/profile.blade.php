@extends('plantillas.main')
@section('title', 'Cambiar foto de Perlfil')

@section('contenido')
	<div class="center align">
         <h3>Configuracion de la Cuenta</h3>
            <form class="col s12 card-panel">
              <div class="row">
                <div class="input-field col s12" >
                  <img src="images/user.png" class="responsive-img profile-chico left">
              </div>
              <div class="row ">
                <div class="file-field input-field" style="top:20px" >
                    <div class="btn">
                      <span>Subir Foto</span>
                      <input type="file">
                    </div>
                    <div class="file-path-wrapper">
                      <input type="text" class="file-path validate">
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <i class="material-icons prefix">account_box</i>
                  <input type="text" name="name_user" class="validate">
                  <label for="name_user">Nombre</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <i class="material-icons prefix">email</i>
                  <input type="email" name="email_user" class="validate">
                  <label for="email_user">Email</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <i class="material-icons prefix">phone</i>
                  <input type="tel" name="tel_user" class="validate">
                  <label for="tel_user">Telefono</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <i class="material-icons prefix">person</i>
                  <input type="text" name="account_user" class="validate">
                  <label for="account_user">Nombre de Usuario</label>
                </div>
              </div>
              <h5 class="left">Nueva Contraseña</h5>
              <div class="row">
              <div class="input-field col s12">
                <i class="material-icons prefix">vpn_key</i>
                <input type="password" name="new_pass" class="validate" required>
                <label for="new_pass">Nueva Contraseña</label>
              </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <i class="material-icons prefix">vpn_key</i>
                  <input type="password" name="confir_pass" class="validate" required>
                  <label for="confir_pass">Confirmar Contraseña</label>
                </div>
              </div>
              <button class="btn waves-effect waves-light" type="submit" name="enviar">Guardar
                <i class="material-icons left">send</i>
              </button>
            </form>
        </div>
@endsection