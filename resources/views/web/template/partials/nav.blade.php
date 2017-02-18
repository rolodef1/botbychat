<div id="navigation" class="navbar-fixed">   
  <nav>        
    <div class="nav-wrapper white">            
      <a href="{{route('home')}}" class="brand-logo" id="logo">BotByChat</a>            
      <a data-activates="mobile-demo" class="button-collapse" id="menu-mobile">
        <i class="material-icons">menu</i>
      </a>            
      <ul class="right hide-on-med-and-down">                
        <li>
          <a href="{{route('about')}}"><i class="material-icons left">description</i>Sobre BotByChat</a>
        </li>                
        <li>
          <a href="{{route('login')}}"><i class="material-icons left">power_settings_new</i>Iniciar sesion</a>
        </li>            
      </ul>            
      <ul class="side-nav" id="mobile-demo">                
        <li>
          <a href="{{route('about')}}"><i class="material-icons left">description</i>Sobre BotByChat</a>
        </li>                
        <li>
          <a href="{{route('login')}}"><i class="material-icons left">power_settings_new</i>Iniciar sesion</a>
        </li>           
      </ul>        
    </div>    
  </nav>
</div>
@section('js')
<script type="text/javascript">
  $(document).ready(function () {
    $(".button-collapse").sideNav();
  });
</script>
@endsection