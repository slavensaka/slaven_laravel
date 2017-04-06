@include('header')

<body>
    <header class="header">
        <div class="container">
            @include('partials.navBar')
            <!--/.navbar-->
        </div>
        <!--/.container-->
    </header>
    <!--/.header-->
    @include('partials.homeSlider')

	@include('partials.sections')

	@include('footer')
</body>
</html>
