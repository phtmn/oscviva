 

  <header class="topbar">
           <!--      <nav class="navbar top-navbar navbar-toggleable-sm navbar-light ">    
            <nav class="navbar top-navbar navbar-toggleable-sm navbar-light bg-inverse ">  --> 

        <nav class="navbar top-navbar navbar-toggleable-sm navbar-light bg-inverse ">   

                    <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar">
                    
                    <a class="navbar-brand" href="{{ route('dashboard') }}">
                        <!-- Logo icon --><b>
                            <!-- <i class="fa fa-user">OSC</i>  -->
                            
                            <!-- Light Logo icon -->
                            <img src="{{asset('imgs/logo-oscviva-versao123.png')}}" class="light-logo" alt="homepage" /></span> </a>                             <!--   <img src="{{asset('imgs/coopvidapreta-deitada_11_topo.png')}}" class="light-logo" alt="homepage" /></span> </a> -->
                        </b> 
                        <!--End Logo icon -->
                        <!-- Logo text --><span>
                         
                         <!-- Light Logo text -->    
                     
                </div>
              
                <div class="navbar-collapse">
                    
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <!-- This is  -->
                        <li class="nav-item "> <a class="nav-link nav-toggler hidden-md-up  waves-effect waves-dark  " href="javascript:void(0)"><i class="mdi mdi-menu "></i></a> </li>

                    <!--    <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up  waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li> -->
                     
                      
                    </ul>
                   
                    <ul class="navbar-nav my-lg-0">
                       
                       <li class="nav-item dropdown">
                           

                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();" class="nav-link dropdown-toggle text-muted waves-effect waves-dark"data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" ><i class="mdi mdi-power ">Sair</i></a> 
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                            </form>
                        </li> 

                        
                    </ul>
                </div>
            </nav>
        </header>