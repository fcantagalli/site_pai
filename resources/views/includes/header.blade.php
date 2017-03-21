<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <div class="navbar-brand">
          <a href="/"><img id="website-logo" class="img-responsive logo" src="images/logo-cantagalli.png" alt="Cantagalli Seguros"/></a>
        </div>
      </div>

      <div class="navbar-collapse collapse">
        <div class="menu">
          <ul class="nav nav-tabs" role="tablist">
            <li role="presentation"><a href="{{ route('index') }}" class="active">Home</a></li>
            <li role="presentation"><a href="#">Sobre nós</a></li>
            <li role="presentation"><a href="#">Serviços</a></li>
            <li role="presentation"><a href="{{ route('contact') }}">Fale Conosco</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</nav>
