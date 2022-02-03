<!DOCTYPE html>
<html>
    <head>
        <title>
            @yield('title', $appName)
        </title>
    </head>

    <body>
    <h1> {{$appName }}</h1>

        <div class="container">
            <form class="signUp">
                <h3>Rejestracja</h3>
            <div>
                <input class="w100" type="email" placeholder="Wprowadź email" reqired autocomplete='off' />
            </div>
            <div>
                <input type="password" placeholder="Wprowadź hasło" reqired />
            </div>
                <button class="form-btn sx log-in" type="button">Zaloguj</button>
                <button class="form-btn dx" type="submit">Stwórz konto</button>
            </form>

        </div>
    </body>
</html>
