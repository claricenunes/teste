<header class="site-header">
    <div class="container">
        <nav class="main-nav">
            <ul>
                <li><a href="/" class="btn-default btn-primary">Home</a></li>
                @unless(request()->is('login*'))
                    <li><a href="/login" class="btn-default btn-primary">Login</a></li>
                @endunless
                @unless(request()->is('register*'))
                    <li><a href="/register" class="btn-default btn-primary">Registrar</a></li>
                @endunless
            </ul>
        </nav>
    </div>
</header>
