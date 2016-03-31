<!-- Page Layout here -->    
<div class="collection ">
    <div class="logo"><a id="logo-container" class="brand-logo">
        <a href="{{ asset('admin/profile') }}">
        <img src="{{ asset('/images/user.png') }} " class="responsive-img circle no-grande" >  
    </div>
    <p class="user-name"> {{ Session::get('name') }} </p>
    <a href="{{ asset('/grafica/panel') }}" class="collection-item"><i class="material-icons">assignment</i> Exámenes</a>
    <a href="{{ asset('/ficha/panel')}}" class="collection-item active">
        <i class="material-icons">speaker_notes</i> Tarjetas de estudio
    </a>
    <a href="javascript:void(0)" onclick="return alert('Falta programar esta parte')" class="collection-item"><i class="material-icons">chat</i> Foro</a>
</div>
