
<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<title> @yield('title', $appName)</title>

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<style>
	#container
	{
		width: 1000px;
		margin-left: auto;
		margin-right: auto;
	}
	#logo
	{
		background-color: black;
		color: white;
		text-align: center;
		padding: 15px;
	}
	#nav
	{
		float: left;
		background-color: lightgray;
		width: 120px;
		min-height: 620px;
		padding: 10px;
	}
	#content
	{
		float: left;
		padding: 20px;
		width: 680px;
	}
	#ad
	{
		float: left;
		width: 120px;
		min-height: 620px;
		padding: 10px;
		background-color: lightgray;
	}
	#footer
	{
		clear: both;
		background-color: black;
		color: white;
		text-align: center;
		padding: 20px;
	}
	</style>

</head>

<body>

	<div id="container">

		<div id="logo">
			<h1><a href="/equipment">{{$appName }}</a></h1>
		</div>

		<div id="nav">
            Życie: 123<br /><br />
            Energia: 3123<br /><br />
            Doświadczenie: 12/100 <br /><br />
            Złoto: 1.000.000 <br /><br />
		</div>


		<div id="content">
            @yield('content')

		</div>


        @section('ad')
		<div id="ad">
            <a href="master">Teściki</a> <br/>
			<h3>Postać</h3>
                <a href="equipment">Ekwipunek</a> <br/>
                <a href="stats">Statystyki</a> <br/>
                <a href="rest">Odpoczynek</a> <br/>
            <h3>Pojedynki</h3>
                <a href="monsters">Potwory</a> <br />
                <a href="characters">Postacie</a> <br />
                <a href="fights">Pojedynki</a><br />
                <a href="animals">Hodowla</a> <br />
            <h3>Rynek</h3>
            <a href="shop">Miejski Rynek</a> <br />
            <a href="privateHandel">Prywatny Handel</a> <br />
            <a href="playerShop">Stragany Graczy</a> <br />
            <h3>Miasto</h3>
            <a href="news">Wieści</a> <br />
            <a href="king">Król</a> <br />
            <a href="jobs">Praca</a> <br />
            <h3>Gildia</h3>
            <a href="guilds">Lista Gidlii</a> <br />
		</div>
        @show

		<div id="footer">
			<h2> {{ $appName }} &copy; Wszelkie prawa zastrzeżone</h2>
		</div>

	</div>

</body>
</html>





