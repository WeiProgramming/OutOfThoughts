
 <nav class = "navbar navbar-inverse navig-bar" role="navigation">
        <div class = "container-fluid">
            <div class = "navbar-header">
                <button type="button" class = "navbar-toggle" data-toggle = "collapse" data-target = "#uniNavbar" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class = "icon-bar"></span>
                    <span class = "icon-bar"></span>
                    <span class = "icon-bar"></span>
                </button>
                <a class = "navbar-brand" href = "{{route('welcome')}}">Zen Thoughts</a>
            </div> <!--End navbar-header--> 
            <div class = "collapse navbar-collapse" id = "uniNavbar">
                <ul class = "nav navbar-nav">
                    <li class = "active"><a href="{{route('welcome')}}">Home</a></li>
                    <li class = ""><a href="{{route('landingtwo')}}">LandingTwo</a></li>
                    <li><a href="{{route('about')}}">About</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
                <ul class = "nav navbar-nav navbar-right">
                    <li><a href="{{route('register')}}">Sign Up</a></li>
                    <li><a href="{{route('login')}}">Login</a></li>
                </ul>
            </div> {{-- end of navbar collapse --}}
        </div>
    </nav>