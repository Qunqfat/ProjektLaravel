@extends('layout.main')

@section('title', 'Użytkownik')

@section('sidebar')
    @parent
    {{-- Sidebar z dziecka --}}
    @auth
        Informuje czy użytkownik jest zalogowany
    @endauth
@endsection

@section('content')
    <hr>
    <h3>Informacje o użytkowniku</h3>


    @guest
        niezalogowany
    @endguest

    <ul>
        <li>Id: {{ $user['id'] }}</li>
        <li>Imię: {{ $user['firstName'] }}</li>
        <li>Nazwisko: {{ $user['lastName'] }}</li>
        <li>Miasto: {{ $user['city'] }}</li>
        <li>
            Wiek: {{ $user['age'] }}
            @if ($user['age'] >= 21)
                <div>Osoba dorosła</div>
            @elseif ($user['age'] >= 16)
                <div>Prawie dorosła</div>
            @else
                <div>Nastolatek</div>
            @endif
        </li>
    </ul>
<hr/>
<div>
    @empty($nick)
        empty: true
    @else
        empty: false
    @endempty
</div>
<hr/>

<div>
    {{ $user['html'] }}
</div>

    <hr>
@endsection

