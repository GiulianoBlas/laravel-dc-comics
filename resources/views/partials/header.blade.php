<header>

    <div id="header-container">

        <div id="header-title">

            <h1>

                <div id="header-logo">

                        <img src="{{ Vite::asset('resources/img/dc-logo.png')}}" alt="">

                </div>

            </h1>

        </div>
    
        <div id="nav-container">
    
            <nav>
    
                <ul>
                    <li>
    
                        <a href="/">home</a>
                        
                    </li>
    
                    <li>
    
                        <a href="{{route('comics.index')}}">manage</a>
                        
                    </li>
    
                </ul>
    
            </nav>
    
        </div>

    </div>

</header>