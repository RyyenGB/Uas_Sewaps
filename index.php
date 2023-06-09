<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rental PSCOY</title>
  <link href="style.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Play:400,700&amp;subset=latin-ext" rel="stylesheet">
  <link rel="shortcut icon" href="Images/attachment_22860590.png" type="image/png">
  <style>
    body {
      margin: 0;
      padding: 0;
    }

    .navbar {
      background-color: transparent;
      padding: 10px 0;
      position: fixed;
      top: 0;
      right: 0;
      z-index: 999;
    }

    .nav-container {
      display: flex;
      justify-content: flex-end;
      align-items: center;
    }

    .nav-logo {
      color: #fff;
      font-size: 24px;
      text-decoration: none;
      margin-right: 30px;
    }

    .nav-menu {
      list-style: none;
      display: flex;
      gap: 20px;
    }

    .nav-item {
      padding: 10px;
    }

    .nav-link {
      color: black;
	  position: sticky;
      text-decoration: none;
      font-size: 16px;
    }

    .nav-link:hover {
      background-color: floralwhite;
    }

    /* Mobile Styles */
    @media (max-width: 820px) {
      .nav-container {
        flex-direction: column;
        align-items: flex-start;
      }

      .nav-menu {
        flex-direction: column;
        width: 100%;
        text-align: center;
        display: none;
      }

      .nav-item {
        width: 40%;
        padding: 0px 0;
      }

      .nav-menu.open {
        display: flex;
      }

      .navbar-toggler {
        background: none;
        border: none;
        cursor: pointer;
        padding: 0;
        margin-right: 5px;
        display: block; 
      }

      .navbar-toggler:focus {
        outline: none;
      }

      .navbar-toggler-icon {
        font-size: 24px;
        line-height: 1;
        display: inline-block;
        width: 20px;
        height: 3px;
        background-color: #000;
        margin-bottom: 5px;
      }
    }


    @media (min-width: 750px) {
      .navbar-toggler {
        display: none; 
      }

      .nav-container {
        justify-content: flex-end;
      }
    }
  </style>
</head>

<body>
  <nav class="navbar">
    <div class="nav-container">
      <a href="#" class="nav-logo"></a>
      <ul class="nav-menu">
        <li class="nav-item"><a href="index.php" class="nav-link"><b>Home</b></a></li>
        <li class="nav-item"><a href="sisa_sewa.php" class="nav-link"><b>Sisa Sewa</b></a></li>
        <li class="nav-item"><a href="login.php" class="nav-link"><b>login</b></a></li>
        <li class="nav-item"><a href="sewa.php" class="nav-link"><b>Sewa</b></a></li>
      </ul>
      <button class="navbar-toggler" type="button" onclick="toggleMenu()">
        <span class="navbar-toggler-icon"></span> 
      </button>
    </div>
  </nav>

	<div id="hero">
		<div id="hero">
			<a href="tel:0654415422">
				<h3>RENTAL PS TERPECAYA</h3>
			</a>
		</div>
		<div id="herocont">
			<img src="Images/ps4tv.png" alt="#">
			<div id="herotext">
				<h2>Rental Playstation Terelngkap<br> Terpecaya UNICEF</h2>
				<div id="herobtn">
					<a href="sewa.php">Klik Disini Untuk Sewa</a>
					<script>
						$("a[href='#cenovnik']").click(function () {
							$("html, body").animate({ scrollTop: 1500 }, "slow");
							return false;
						});
					</script>
				</div>
			</div>
		</div>
	</div>

	<div id="ocenama">
		<h2>Jika Anda ingin Sewa Playstation Terepcaya, 
			Kami Siap Melayani Anda
		</h2>
	<div id="igrice">
		<div id="nasligr">
			<h2>Include Game Yang Diberikan</h2>
		</div>
		<div id="igre">
			<div class="game" id="g1">
				<img src="Images/pes.jpg" alt="">
				<h2>PES2019</h2>
			</div>
			<div class="game" id="g2">
				<img src="Images/fifa.jpg" alt="">
				<h2>FIFA19</h2>
			</div>
			<div class="game" id="g3">
				<img src="Images/mkxl.jpg" alt="">
				<h2>Mortal Kombat XL</h2>
			</div>
			<div class="game" id="g4">
				<img src="Images/nba.jpg" alt="">
				<h2>NBA 2K19</h2>
			</div>
			<div class="game" id="g5">
				<img src="Images/gta.jpg" alt="">
				<h2>GTA5 POE</h2>
			</div>
			<script>
				function toggleMenu() {
      				var navMenu = document.querySelector('.nav-menu');
      				navMenu.classList.toggle('open');
    				}
				$(document).on('mouseover', '#game', function () {
					document.getElementsByClassName("gameh2").style.opacity = "1";
				})
				$(document).on('mouseleave', '#game', function () {
					$('#gameh2').removeClass('opagame')
				})
			</script>
		</div>
	</div>
</body>

</html>
