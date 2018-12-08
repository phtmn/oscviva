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

                    <a class="has-arrow waves-effect waves-default" href="#" aria-expanded="false"><i class="mdi mdi-pencil"></i><span class="hide-menu">Cadastros</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{route('colaborador.index')}}">Colaboraror</a></li>
                        <li><a href="{{route('doador.index')}}">Doador</a></li>
                        <li><a href="{{route('cargos.index')}}">Cargos</a></li>
                    </ul>
                </li>
                
                         
             

            </ul>
        </nav>
    </div>
</aside>
