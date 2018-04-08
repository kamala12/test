@include('_includes.nav.head')
<body>
@include('_includes.nav.nav')

@section('title', '| Welcome')
<div class="container is-widescreen">
    <div class="notification">
        This container is <strong>fullwidth</strong> <em>until</em> the <code>$widescreen</code> breakpoint.
    </div>
    <section class="hero is-primary">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">
                    About page
                </h1>
                <h2 class="subtitle">
                    Primary subtitle
                </h2>
            </div>
        </div>
    </section>
</div>

@include('_includes.nav.footer')
