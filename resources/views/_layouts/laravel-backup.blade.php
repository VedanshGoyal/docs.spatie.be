<!DOCTYPE html>
<html data-viewport class="$viewport-loading {{ ends_with($pagePath, 'introduction') ? '$introduction' : '' }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0, shrink-to-fit=no">
    <meta name="description" content="@yield('pageDescription')">
    <title>@yield('title') | Docs</title>
    <link rel="stylesheet" href="https://cloud.typography.com/6194432/608542/css/fonts.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.2.0/styles/default.min.css">
    <link rel="stylesheet" href="/build/style.css">
    <script src="/build/app.js" defer></script>
</head>
<body>
    <header class="header">
        <div class="header_background" data-header-video></div>
        <div class="header_overlay"></div>
        <div class="header_content">
            <div class="grid">
                <a href="/laravel-backup/v3">
                    <h1 class="header_title">Laravel Backup <span class="header_title_version">v.3</span></h1>
                    <div>
                        <p class="header_slogan">One day you'll thank us for this</p>
                    </div>
                </a>
                <div class="header_logos">
                    <a href="https://github.com/spatie/laravel-backup" target="_external"><img class=header_logo src="/images/github.svg" alt="Github"></a>
                    <a href="https://spatie.be" target="_external"><img class=header_logo src="/images/spatie.svg" alt="spatie"></a>
                </div>
            </div>
        </div>
    </header>
    <main class="main">
        <div class="grid">
            <div class="grid_col -width-1/3">
                <div class="nav">
                    <input id="algolia-search" placeholder="Search docs" class="nav_search">
                    <nav class="nav_menu">
                    {!! navigation()->backup() !!}
                    </nav>
                </div>
                <div class="nav_switch" data-nav-switch>
                </div>
            </div>
            <div class="grid_col -width-2/3">
                <article class="article">
                @yield('content')
                </article>
            </div>
        </div>
    </main>
    <footer class="footer">
        <div class="grid">
            <div class="footer_content">
                © {{ Date('Y') }} • <a href="about-us/">About us</a>
                • <a href="https://github.com/spatie/laravel-backup">Github</a>
            </div>
        </div>
        <a href="#" data-viewport-scroll class="footer_top-link">up</a>
    </a>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/docsearch.js/1/docsearch.min.js"></script>
    <script type="text/javascript"> docsearch({
            apiKey: '7a1f56fb06bd42e657e82bdafe86cef3',
            indexName: 'spatie_be',
            inputSelector: '#algolia-search',
            algoliaOptions: {
                'hitsPerPage': 5,
                'facetFilters': ['project:laravel-backup']
        }
        });
    </script>

</body>
</html>
