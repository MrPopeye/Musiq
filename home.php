<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit;
}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Musiq - A place where you can relax</title>
        <meta charset="utf-8">
        <link rel="shortcut icon" href="image/favicon.png" type="image/x-icon">
        <link rel="icon" href="image/favicon.png" type="image/x-icon">
		<link href="css/style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body class="loggedin">
		<nav class="navtop">
			<div>
				<a href="home.php"><i class="fas fa-home"></i></a>
				<h1>Musiq</h1>
				<a href="profile.php"><i class="fas fa-user-circle"></i><?=$_SESSION['name']?></a>
				<a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
			</div>
		</nav>
		<div class="content">
			<h2>Home Page</h2>

			<h2>Best of Artists</h2>
                <div class="img">
					<div class="contentAlbum">
						<a href="Best of artists/JuiceWRLD.html"><img src="image/JuiceWRLD.jfif" title="Play Juice WRLD"></a>
						<p>Juice WRLD</p>
					</div>
					<div class="contentAlbum">
						<a href="Best of artists/Travis Scott.html"><img src="image/TravisScott.jfif" title="Play Travis Scott"></a>
						<p>Travis Scott</p>
					</div>
					<div class="contentAlbum">
						<a href="Best of artists/21Savage.html"><img src="image/21Savage.jfif" title="Play 21Savage"></a>
						<p>21 Savage</p>
					</div>
					<div class="contentAlbum">
                   	 	<a href="Best of artists/TheWeeknd.html"><img src="image/TheWeeknd.jfif" title="Play The Weeknd"></a>
						<p>The Weeknd</p>
					</div>
					<div class="contentAlbum">
						<a href="Best of artists/Lil Uzi Vert.html"><img src="image/LilUziVert.jfif" title="Play Lil Uzi Vert"></a>
						<p>Lil Uzi Vert</p>
					</div>
					<div class="contentAlbum">
						<a href="Best of artists/Eminem.html"><img src="image/Eminem.jfif" title="Play Eminem"></a>
						<p>Eminem</p>
					</div>
				</div>
				<div class="img">
					<div class="contentAlbum">
						<a href="Best of artists/RoddyRicch.html"><img src="image/RoddyRicch.jfif" title="Play Roddy Ricch"></a>
						<p>Roddy Ricch</p>
					</div>
					<div class="contentAlbum">
						<a href="Best of artists/LilPeep.html"><img src="image/LilPeep.jfif" title="Play Lil Peep"></a>
						<p>Lil Peep</p>
					</div>
					<div class="contentAlbum">
						<a href="Best of artists/Parazitii.html"><img src="image/Parazitii.jfif" title="Play Parazitii"></a>
						<p>Parazitii</p>
					</div>
					<div class="contentAlbum">
						<a href="Best of artists/XXXTENTACION.html"><img src="image/xt.jfif" title="Play XXXTENTACION"></a>
						<p>XXXTENTACION</p>
					</div>
					<div class="contentAlbum">
						<a href="Best of artists/PostMalone.html"><img src="image/PostMalone.jfif" title="Play Post Malone"></a>
						<p>Post Malone</p>
					</div>
					<div class="contentAlbum">
						<a href="Best of artists/Drake.html"><img src="image/Drake.jfif" title="Play Drake"></a>
						<p>Drake</p>
					</div>
				</div>

            <h2>Hip Hop Artists</h2>
				<div class="img">
					<div class="contentAlbum">
						<a href="Best of artists/Eminem.html"><img src="image/Eminem.jfif" title="Play Eminem"></a>
						<p>Eminem</p>
					</div>
					<div class="contentAlbum">
						<a href="Best of artists/Parazitii.html"><img src="image/Parazitii.jfif" title="Play Parazitii"></a>
						<p>Parazitii</p>
					</div>
					<div class="contentAlbum">
						<a href="Best of artists/Drake.html"><img src="image/Drake.jfif" title="Play Drake"></a>
						<p>Drake</p>
					</div>
					<div class="contentAlbum">
						<a href="Best of artists/21Savage.html"><img src="image/21Savage.jfif" title="Play 21Savage"></a>
						<p>21 Savage</p>
					</div>
					<div class="contentAlbum">
						<a href="Hip Hop/Deliric.html"><img src="image/Deliric.jfif" title="Play Deliric"></a>
						<p>Deliric</p>
					</div>
					<div class="contentAlbum">
						<a href="Hip Hop/Ombladon.html"><img src="image/Ombladon.jfif" title="Play Ombladon"></a>
						<p>Ombladon</p>
					</div>
				</div>

			<h2>R&B Artists</h2>
				<div class="img"> 
					<div class="contentAlbum">
						<a href="Best of artists/TheWeeknd.html"><img src="image/TheWeeknd.jfif" title="Play The Weeknd"></a>
						<p>The Weeknd</p>
					</div>
					<div class="contentAlbum">
						<a href="Best of artists/Drake.html"><img src="image/Drake.jfif" title="Play Drake"></a>
						<p>Drake</p>
					</div>
					<div class="contentAlbum">
						<a href="R&B/HER.html"><img src="image/H.E.R..jfif" title="Play H.E.R."></a>
						<p>H.E.R.</p>
					</div>
					<div class="contentAlbum">
						<a href="R&B/BrunoMars.html"><img src="image/BrunoMars.jfif" title="Play Bruno Mars"></a>
						<p>Bruno Mars</p>
					</div>
					<div class="contentAlbum">
						<a href="R&B/Usher.html"><img src="image/Usher.jfif" title="Play Usher"></a>
						<p>Usher</p>
					</div>
					<div class="contentAlbum">
						<a href="R&B/Khalid.html"><img src="image/Khalid.jfif" title="Play Khalid"></a>
						<p>Khalid</p>
					</div>
				</div>

            <h2>Pop Artists</h2>
				<div class="img"> 
					<div class="contentAlbum">
						<a href="Pop/BillieEilish.html"><img src="image/BillieEilish.jfif" title="Play Billie Eilish"></a>
						<p>Billie Eilish</p>
					</div>
					<div class="contentAlbum">
						<a href="Best of artists/Drake.html"><img src="image/Drake.jfif" title="Play Drake"></a>
						<p>Drake</p>
					</div>
					<div class="contentAlbum">
						<a href="Best of artists/PostMalone.html"><img src="image/PostMalone.jfif" title="Play Post Malone"></a>
						<p>Post Malone</p>
					</div>
					<div class="contentAlbum">
						<a href="Pop/LanaDelRey.html"><img src="image/LanaDelRey.jfif" title="Play Lana Del Rey"></a>
						<p>Lana Del Rey</p>
					</div>
					<div class="contentAlbum">
						<a href="Pop/DuaLipa.html"><img src="image/DuaLipa.jfif" title="Play Dua Lipa"></a>
						<p>Dua Lipa</p>
					</div>
					<div class="contentAlbum">
						<a href="R&B/BrunoMars.html"><img src="image/BrunoMars.jfif" title="Play Bruno Mars"></a>
						<p>Bruno Mars</p>
					</div>
				</div>

			<h2>Rock & Heavy Metal Artists</h2>
				<div class="img">
					<div class="contentAlbum">
						<a href="Rock/Slipknot.html"><img src="image/Slipknot.jfif" title="Play Slipknot"></a>
						<p>Slipknot</p>
					</div>
					<div class="contentAlbum">
						<a href="Rock/FiveFingerDeathPunch.html"><img src="image/FiveFingerDeathPunch.jfif" title="Play Five Finger Death Punch"></a>
						<p>Five Finger Death Punch</p>
					</div>
					<div class="contentAlbum">
						<a href="Rock/Metallica.html"><img src="image/Metallica.jfif" title="Play Metallica"></a>
						<p>Metallica</p>
					</div>
					<div class="contentAlbum">
						<a href="Rock/MarilynManson.html"><img src="image/MarilynManson.jfif" title="Play MarilynManson"></a>
						<p>Marilyn Manson</p>
					</div>
					<div class="contentAlbum">
						<a href="Rock/OzzyOsbourne.html"><img src="image/OzzyOsbourne.jfif" title="Play Ozzy Osbourne"></a>
						<p>Ozzy Osbourne</p>
					</div>
					<div class="contentAlbum">
						<a href="Rock/Motorhead.html"><img src="image/Motorhead.jfif" title="Play Motorhead"></a>
						<p>Motorhead</p>
					</div>
				</div>
		</div>
	</body>
</html>