<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav"> 
               

                <li>

                    <a class="has-arrow waves-effect waves-default" href="#" aria-expanded="false"><i class="mdi mdi-pencil"></i><span class="hide-menu">Cadastros</span></a>
                    <ul aria-expanded="false" class="collapse">
                        
                        <li><a href="{{route('doador.index')}}">Doador</a></li>
                        <li><a href="{{route('cargos.index')}}">Cargos</a></li>
                    </ul>
                </li>

                 <li>

                    <a class="waves-effect waves-default" href="{{route('administrativo')}}" aria-expanded="false"><i class="fa fa-archive"></i><span class="hide-menu">Administrativo</span></a>                  
                </li>

                <li>

                    <a class="waves-effect waves-default" href="{{route('filiados')}}" aria-expanded="false"><i class="fa fa-child"></i><span class="hide-menu">Filiados</span></a>                 
                </li>

                <li>

                    <a class="waves-effect waves-default" href="{{route('frotas')}}" aria-expanded="false"><i class="fa fa-truck"></i><span class="hide-menu">Frotas</span></a>                 
                </li>
                
                         
             

            </ul>
        </nav>
    </div>
</aside>
