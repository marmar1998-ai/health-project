<!DOCTYPE html>
<html >
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Health - Medical Website Template')</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/tooplate-style.css') }}">
    
    <!-- Additional Styles -->
    @yield('styles')
</head>

<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">
    <div id="app">
        <!-- شريط التنقل -->
        
        
        <!-- المحتوى الرئيسي -->
        <main>
            @yield('content')
        </main>
        
        <!-- تذييل الصفحة -->
        
    </div>
    
    <!-- Scripts -->
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <script src="{{ asset('js/smoothscroll.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    
    <!-- الأقسام الإضافية -->
    @yield('scripts')
    
    <!-- Bot Script (Included once) -->
    <script>
        // Get the bot popup and button elements
        var botPopup = document.getElementById("bot-popup");
        var botButton = document.getElementById("bot-button");
        var closeButton = document.getElementById("close-btn");

        // Open the bot popup when the button is clicked
        if (botButton) {
            botButton.onclick = function () {
                if (botPopup) botPopup.style.display = "block";
            }
        }

        // Close the bot popup when the close button is clicked
        if (closeButton) {
            closeButton.onclick = function () {
                if (botPopup) botPopup.style.display = "none";
            }
        }
    </script>
</body>
</html>