<nav class="navbar navbar-default navbar-fixed-top" style="margin-bottom:60px;">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ route('root_path') }}">Laracarte</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="{{ route('root_path') }}">Home</a></li>
                <li><a href="{{ route('about_path') }}">About</a></li>
                <li><a href="#artisans">Artisans</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Planet <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="https://laravel.com" target="_blank">Laravel.com</a></li>
                        <li><a href="https://laravel.io" target="_blank">Laravel.io</a></li>
                        <li><a href="https://laracasts.com" target="_blank">Laracasts.com</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="https://larajobs.com" target="_blank">Larajobs.com</a></li>
                        <li><a href="https://laravel-news.com" target="_blank">Laravel-news.com</a></li>
                        <li><a href="https://larachat.com" target="_blank">Larachat.co</a></li>
                    </ul>
                </li>
                <li><a href="#contact">Contact</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#login">Login</a></li>
                <li><a href="#register">Register</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>