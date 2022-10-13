<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="icon" type="image/png" href="{{ URL::asset('/favicon.png') }}"> -->
    <title>La boutique</title>
    @vite('resources/css/app.css')
</head>

<body>
    <header class="header">
        <div class="header-content">
            <a href="#">
                <img class="header-logo" src="{{ URL::asset('/img/logoB.png') }}" alt="la boutique logo">
            </a>
            <a class="account" href="{{ @route('register') }}">Mon compte</a>
            <a class="cart" href="#">
                <img class="cart-img" src="{{ URL::asset('/img/panierW.png') }}" alt="panier">
                <span id="cart-nb" class="cart-nb">0</span>
            </a>
            <form autocomplete="off" id="header-form" class="header-form" action="#">
                <div id="autocomplete" class="autocomplete">
                    <input id="input-product" class="input-product" type="text">
                </div>
                <button class="button-product"><i class="fa fa-search icon-search" aria-hidden="true"></i></button>
            </form>
        </div>
    </header>
    <section>
        @section ('content')
        content to show
        @show
    </section>

</body>

</html>