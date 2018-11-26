<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li>
                    <a class="waves-effect waves-default" href="{{ route('dashboard') }}" aria-expanded="false">
                        <i class="mdi mdi mdi-gauge "></i><span class="hide-menu ">Dashboard</span>
                    </a>
                </li>
              

               
                <li>
                    <a class="waves-effect waves-default" href="#" aria-expanded="false">
                        <i class="mdi mdi-script"></i><span class="hide-menu">Projetos</span>
                    </a>
                </li>

                 <li>
                    <a class="waves-effect waves-default" href="#" aria-expanded="false">
                        <i class="mdi mdi-file-multiple"></i><span class="hide-menu">Lista de TAs</span>
                    </a>
                </li>

                <li>
                    <a class="has-arrow waves-effect waves-default" href="#" aria-expanded="false"><i class="mdi mdi-chart-bar"></i><span class="hide-menu">Cadastros</span></a>

                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{route('colaborador.index')}}">Colaboraror</a></li>
                        <li><a href="#">Doador</a></li>
                        <li><a href="#">Depósitos de Recursos</a></li>

                    </ul>

                </li>

                <li>
                    <a class="has-arrow waves-effect waves-default" href="#" aria-expanded="false"><i class="mdi mdi-chart-line"></i><span class="hide-menu">Relatórios</span></a>

                    <ul aria-expanded="false" class="collapse">
                        <li><a href="#">Financeiro</a></li>
                        <li><a href="#">Sustentabilidade</a></li>
                    </ul>

                </li>

                <li>
                    <a class="waves-effect waves-default" href="#" aria-expanded="false">
                        <i class="mdi mdi-account-multiple"></i><span class="hide-menu">Usuários</span>
                    </a>
                </li>


                <li>
                    <a class="has-arrow waves-effect waves-default" href="#" aria-expanded="false"><i class="mdi mdi-settings"></i><span class="hide-menu">Configurações</span></a>

                    <ul aria-expanded="false" class="collapse">
                        <li><a href="#">Rateio de Cotas</a></li>

                    </ul>

                </li>

            </ul>

        </nav>

    </div>

</aside>
