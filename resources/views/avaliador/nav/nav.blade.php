<li class="white">
    <a class="collapsible-header" href="{{route ('avaliador')}}"><i class="small material-icons">home</i>Home</a>
</li>
@can('view', $avaliacao = \App\Avaliacao::orderBy('id', 'desc')->first())
<li class="white">
    <a class="collapsible-header" href="{{route ('avaliador.projeto')}}"><i class="small material-icons">home</i>Projetos</a>
</li>
@endcan
<li class="white">
    <a class="collapsible-header" href="{{route ('avaliador.config.alterar-senha')}}"><i class="small material-icons">home</i>Conta</a>
</li>
<li class="white">
    <a class="collapsible-header" href="{{ route('logout') }}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();"> <i
                class="small material-icons">exit_to_app</i>Sair
    </a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>
</li>