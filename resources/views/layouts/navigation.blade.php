<nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
	<div class="container">
		<a class="navbar-brand" href="{{ url('/') }}">
			{{ str_replace('_', ' ',config('app.name', 'Laravel')) }}
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
			aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<!-- Left Side Of Navbar -->
			<ul class="navbar-nav mr-auto">
				@auth
				<li class="nav-item active">
					<a class="nav-link" href="{{ route('home') }}">{{ __('Home') }}
						<span class="sr-only">(current)</span></a>
				</li>
				{{-- Menu Manual do Sistema --}}
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
						data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ __('Cadastros') }}</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="#">{{ __('Órgãos') }}</a>
						<a class="dropdown-item" href="#">{{ __('Publicações') }}</a>
						<a class="dropdown-item" href="#">{{ __('Publicações / Anexos') }}</a>
						<a class="dropdown-item" href="#">{{ __('Simbologias') }}</a>
						<a class="dropdown-item" href="#">{{ __('Cargos') }}</a>
						<a class="dropdown-item" href="#">{{ __('Funções') }}</a>
						<a class="dropdown-item" href="#">{{ __('Vagas') }}</a>
						<a class="dropdown-item" href="#">{{ __('Servidor') }}</a>
						<a class="dropdown-item" href="#">{{ __('Cargo / Simbologia') }}</a>
						<a class="dropdown-item" href="#">{{ __('Migração Órgão / Servidor') }}</a>
						<a class="dropdown-item" href="#">{{ __('Lotação') }}</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">{{ __('Administradores') }}</a>
						<a class="dropdown-item" href="#">{{ __('Usuários') }}</a>
					</div>
				</li>
				{{--  --}}
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
						data-toggle="dropdown" aria-haspopup="true"
						aria-expanded="false">{{ __('Control de Vagas') }}</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item disabled" href="#" tabindex="-1"
							aria-disabled="true">{{ __('Detalhados') }}</a>
						<a class="dropdown-item" href="#">{{ __('Analítico') }}</a>
						<a class="dropdown-item" href="#">{{ __('Sintético') }}</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">{{ __('Quantitativo Sintético') }}</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">{{ __('Cargos / Vagas / Órgao') }}</a>
						<a class="dropdown-item" href="#">{{ __('Cargos / Estrutura') }}</a>
						<a class="dropdown-item" href="#">{{ __('Exoneração / Lote') }}</a>
					</div>
				</li>
				{{--  --}}
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
						data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ __('Relatórios') }}</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="#">{{ __('Órgãos') }}</a>
						<a class="dropdown-item" href="#">{{ __('Simbologias') }}</a>
						<a class="dropdown-item" href="#">{{ __('Cargos') }}</a>
						<a class="dropdown-item" href="#">{{ __('Por Vinculos') }}</a>
						<a class="dropdown-item" href="#">{{ __('Cargo e Vinculo') }}</a>
						<a class="dropdown-item" href="#">{{ __('Cargo e Simbologia') }}</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">{{ __('Ações por Período / Quantidade') }}</a>
					</div>
				</li>
				{{--  --}}
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
						data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ __('Consultas') }}</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="#">{{ __('Servidores') }}</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item disabled" href="#" tabindex="-1"
							aria-disabled="true">{{ __('Aguardando') }}</a>
						<a class="dropdown-item" href="#">{{ __('Ato') }}</a>
						<a class="dropdown-item" href="#">{{ __('Validação') }}</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">{{ __('Tornados sem Efeito') }}</a>
					</div>
				</li>
				{{--  --}}
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
						data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ __('Históricos') }}</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="#">{{ __('Servidores') }}</a>
						<a class="dropdown-item" href="#">{{ __('Publicações') }}</a>
					</div>
				</li>
				{{--
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
						data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ __('Dropdown') }}</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					<a class="dropdown-item active" href="#" aria-current="true">{{ __('Action') }}</a>
					<a class="dropdown-item" href="#">{{ __('Another action') }}</a>
					<a class="dropdown-item disabled" href="#" tabindex="-1" aria-disabled="true">Disabled link</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="#">{{ __('Something else here') }}</a>
				</div>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="#">{{ __('Link') }}</a>
				</li>

				<li class="nav-item">
					<a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">{{ __('Disabled') }}</a>
				</li>
				--}}
				@endauth
			</ul>

			<!-- Right Side Of Navbar -->
			<ul class="navbar-nav ml-auto">
				<!-- Authentication Links -->
				@guest
				<li class="nav-item">
					<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
				</li>
				@if (Route::has('register'))
				<li class="nav-item">
					<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
				</li>
				@endif
				@else
				<li class="nav-item dropdown">
					<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
						data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
						{{ Auth::user()->name }}
					</a>

					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
							{{ __('Logout') }}
						</a>

						<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
							@csrf
						</form>
					</div>
				</li>
				@endguest
			</ul>
		</div>
	</div>
</nav>

<script>
	/* When the user clicks on the button,
	 * toggle between hiding and showing the dropdown content
	 */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(e) {
  if (!e.target.matches('.dropbtn')) {
  var myDropdown = document.getElementById("myDropdown");
    if (myDropdown.classList.contains('show')) {
      myDropdown.classList.remove('show');
    }
  }
}
</script>
