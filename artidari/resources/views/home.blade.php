<!DOCTYPE html>
<html>
<head>
  	<meta charset="utf-8">
  	<meta name="viewport" content="initial-scale=1, width=device-width">
  	
  	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@800&display=swap" />
  	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,400;0,500;0,700;1,500&display=swap" />
  	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Radley:wght@400&display=swap" />
  	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" />
  	
  	<style>
		.book-logo {
    width: 38px;
    position: relative;
    height: 38px;
}
.artidari {
    position: relative;
    font-weight: 800;
}
.logo {
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
}
.artidaritiny {
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    gap: 14px;
    font-size: 36px;
    font-family: Inconsolata;
}
.pencarian {
    position: relative;
    font-weight: 500;
}
.icn-search-icn-xs {
    width: 16px;
    position: relative;
    height: 16px;
    overflow: hidden;
    flex-shrink: 0;
}
.search {
    width: 435px;
    border-radius: 12px;
    background-color: #fff;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: space-between;
    padding: 8px 16px;
    box-sizing: border-box;
}
.frame-child {
    width: 35px;
    position: absolute;
    margin: 0 !important;
    top: 2px;
    left: 1px;
    border-radius: 50%;
    background-color: #4997d0;
    height: 35px;
    z-index: 0;
}
.div {
    width: 17px;
    position: relative;
    display: flex;
    align-items: center;
    height: 38px;
    flex-shrink: 0;
}
.tambah {
    width: 38px;
    border-radius: 50px;
    height: 38px;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
    z-index: 1;
}
.ellipse-parent {
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    position: relative;
    gap: 10px;
    font-size: 30px;
    color: #fff;
    font-family: Radley;
}
.searchadd {
    width: 569px;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: flex-start;
    gap: 8px;
    text-align: left;
    color: #737373;
}
.button {
    border-radius: 5px;
    background-color: #4997d0;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
    padding: 8px 16px;
    cursor: pointer;
}
.upper {
    width: 1440px;
    background-color: #1e2952;
    height: 64px;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: space-between;
    padding: 0px 128px;
    box-sizing: border-box;
}
.nav-list-item {
    height: 29px;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
    padding: 10px;
    box-sizing: border-box;
}
.nav-list-item1 {
    height: 29px;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
}
.nav-list-item2 {
    height: 29px;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
    padding: 10px;
    box-sizing: border-box;
    cursor: pointer;
}
.lower {
    width: 1440px;
    background-color: #1e2952;
    height: 47px;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
    padding: 0px 0px 0px 20px;
    box-sizing: border-box;
    gap: 16px;
}
.header {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
}
.header-wrapper {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    z-index: 0;
}
.body {
    width: 1440px;
    position: relative;
    background-color: #f5ebe0;
    height: 1936px;
    margin: 0;
    line-height: normal;
    z-index: 1;
}
.book-logo1 {
    width: 73px;
    position: relative;
    height: 73px;
}
.open-book-content-books-book-parent {
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    gap: 27px;
}
.instance-wrapper {
    width: 690px;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
}
.span {
    color: #000;
}
.artidari-2024 {
    position: relative;
    font-size: 16px;
    font-family: Raleway;
    text-align: left;
}
.frame-parent {
    width: 1440px;
    background-color: #1e2952;
    height: 226px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: flex-start;
    padding: 35px 0px 16px;
    box-sizing: border-box;
    gap: 55px;
    z-index: 2;
    font-size: 70px;
    font-family: Inconsolata;
}
.fomo-wrapper {
    background-color: #1e2952;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
    padding: 3px 8px;
    mix-blend-mode: normal;
}
.populer {
    width: 845px;
    margin: 0 !important;
    position: absolute;
    top: 676px;
    left: 323px;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    align-items: flex-start;
    justify-content: flex-start;
    gap: 10px 7px;
    z-index: 3;
}
.definisi-hari-ini {
    position: relative;
}
.menyala-abangku {
    width: 501px;
    position: relative;
    font-size: 36px;
    display: inline-block;
    color: #4997d0;
}
.hari-ini {
    width: 721px;
    height: 68px;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: center;
    gap: 6px;
    mix-blend-mode: normal;
}
.bisa-diartikan-sebagai {
    margin: 0;
    font-weight: 500;
}
.orang-1-bro {
    font-weight: 500;
}
.orang-1-bro-tadi-gw-presentas {
    margin: 0;
}
.bisa-diartikan-sebagai-container {
    width: 717px;
    position: relative;
    display: inline-block;
    height: 139px;
    flex-shrink: 0;
}
.maret-2023 {
    margin: 0;
    font-weight: 500;
    color: #737373;
}
.by-dimashotwil331-12-maret-container {
    width: 150px;
    position: relative;
    font-size: 12px;
    display: inline-block;
    height: 37px;
    flex-shrink: 0;
    color: #4997d0;
    font-family: Poppins;
}
.like-1-reward-social-up-ratin-icon {
    width: 12.9px;
    position: relative;
    height: 11.4px;
    mix-blend-mode: normal;
}
.div1 {
    width: 24px;
    position: relative;
    font-weight: 500;
    display: inline-block;
    height: 14px;
    flex-shrink: 0;
}
.like-1-reward-social-up-ratin-icon1 {
    width: 12.9px;
    position: relative;
    height: 11.4px;
    object-fit: contain;
    mix-blend-mode: normal;
}
.div2 {
    width: 11px;
    position: relative;
    font-weight: 500;
    display: inline-block;
    height: 14px;
    flex-shrink: 0;
}
.like-1-reward-social-up-ratin-parent {
    display: flex;
    flex-direction: row;
    align-items: flex-end;
    justify-content: flex-start;
    gap: 8px;
    font-size: 12px;
    font-family: Poppins;
}
.definisi {
    width: 857px;
    margin: 0 !important;
    position: absolute;
    top: 198px;
    left: 319px;
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    border-radius: 4px;
    background-color: #fff;
    border: 4px solid #1e2952;
    box-sizing: border-box;
    overflow: hidden;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    align-items: flex-end;
    justify-content: flex-start;
    padding: 39px 43px;
    gap: 6px 538px;
    mix-blend-mode: normal;
    z-index: 4;
    text-align: left;
    color: #000;
}
.pencarian-populer {
    width: 169px;
    position: absolute;
    margin: 0 !important;
    top: 650px;
    left: 323px;
    color: #000;
    display: inline-block;
    z-index: 5;
}
.arti-kata-lainnya {
    position: relative;
    font-size: 16px;
    font-family: Raleway;
    text-align: center;
}
.red-flag {
    width: 235px;
    position: relative;
    font-size: 36px;
    display: inline-block;
    font-family: Raleway;
    color: #4997d0;
    height: 63px;
    flex-shrink: 0;
}
.bisa-diartikan-sebagai1 {
    width: 717px;
    position: relative;
    font-size: 16px;
    font-weight: 500;
    font-family: Raleway;
    display: inline-block;
    height: 44px;
    flex-shrink: 0;
}
.by-real-ryangosling-2-januari-container {
    width: 226px;
    position: relative;
    display: inline-block;
    height: 37px;
    flex-shrink: 0;
    color: #4997d0;
}
.like-1-reward-social-up-ratin-group {
    display: flex;
    flex-direction: row;
    align-items: flex-end;
    justify-content: flex-start;
    gap: 8px;
}
.flag-1-icon {
    width: 17px;
    position: relative;
    height: 19px;
    object-fit: cover;
}
.flag-1-parent {
    width: 45px;
    border: 0.5px solid #000;
    box-sizing: border-box;
    height: 19px;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: flex-start;
    gap: 2px;
    text-align: center;
    font-size: 9px;
}
.definisi1 {
    width: 849px;
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    border-radius: 4px;
    overflow: hidden;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    align-items: flex-end;
    justify-content: flex-start;
    padding: 39px 43px;
    box-sizing: border-box;
    gap: 6px 538px;
    mix-blend-mode: normal;
}
.definisi-wrapper {
    border-top: 1px solid #000;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
}
.secara-harfiah-spill-container {
    width: 717px;
    position: relative;
    font-size: 16px;
    display: inline-block;
    height: 126px;
    flex-shrink: 0;
    font-family: Raleway;
}
.by-imamvespamatic-6-desember-container {
    width: 200px;
    position: relative;
    display: inline-block;
    flex-shrink: 0;
    color: #4997d0;
}
.definisi-container {
    border-top: 1px solid #000;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 30px 0px 0px;
}
.ygy-adalah-singkatan-container {
    width: 717px;
    position: relative;
    font-size: 16px;
    display: inline-block;
    height: 162px;
    flex-shrink: 0;
    font-family: Raleway;
}
.by-masfaiz1212-13-maret-container {
    width: 206px;
    position: relative;
    display: inline-block;
    height: 37px;
    flex-shrink: 0;
    color: #4997d0;
}
.definisi-frame {
    border-top: 1px solid #000;
    border-bottom: 1px solid #000;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 30px 0px 0px;
}
.arti-kata-lainnya-parent {
    margin: 0 !important;
    position: absolute;
    top: 848px;
    left: 323px;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    gap: 28px;
    z-index: 6;
    text-align: left;
    font-size: 12px;
    color: #000;
    font-family: Poppins;
}
.landing-page1 {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    position: relative;
}
.landing-page {
    position: relative;
    width: 100%;
    display: flex;
    flex-direction: row;
    align-items: flex-end;
    justify-content: flex-start;
    text-align: center;
    font-size: 16px;
    color: #fff;
    font-family: Raleway;
}


	</style>
  	
</head>
<body>
  	
  	<div class="landing-page">
    		<div class="landing-page1">
      			<div class="header-wrapper">
        				<div class="header">
          					<div class="upper">
            						<div class="artidaritiny">
              							<img class="book-logo" alt="" src="{{ asset('images/logo.svg') }}">
              							
              							<div class="logo">
                								<div class="artidari">artidari</div>
              							</div>
            						</div>
            						<div class="searchadd">
              							<div class="search">
                								<div class="pencarian">Cari arti kata...</div>
                								<img class="icn-search-icn-xs" alt="" src="icn search .icn-xs.svg">
                								
              							</div>
              							<div class="ellipse-parent">
                								<div class="frame-child">
                								</div>
                								<div class="tambah">
                  									<div class="div">+</div>
                								</div>
              							</div>
            						</div>
            						<div class="button" id="buttonContainer">
              							<div class="pencarian">Login</div>
            						</div>
          					</div>
          					<div class="lower">
            						<div class="nav-list-item">
              							<div class="pencarian">Istilah Regional</div>
            						</div>
            						<div class="nav-list-item1">
              							<div class="pencarian">Budaya Internet</div>
            						</div>
            						<div class="nav-list-item2" id="navListItem2">
              							<div class="pencarian">Teknologi dan Gadget</div>
            						</div>
            						<div class="nav-list-item">
              							<div class="pencarian">Akronim</div>
            						</div>
          					</div>
        				</div>
      			</div>
      			<div class="body">
      			</div>
      			<div class="frame-parent">
        				<div class="instance-wrapper">
          					<div class="open-book-content-books-book-parent">
            						<img class="book-logo1" alt="" src="open-book--content-books-book-open.svg">
            						
            						<div class="logo">
              							<div class="artidari">artidari</div>
            						</div>
          					</div>
        				</div>
        				<div class="artidari-2024">
          					<span>©</span>
          					<span class="span"> </span>
          					<span>artidari</span>
          					<span class="span"> </span>
          					<span>2024</span>
        				</div>
      			</div>
      			<div class="populer">
        				<div class="fomo-wrapper">
          					<div class="pencarian">FOMO</div>
        				</div>
        				<div class="fomo-wrapper">
          					<div class="pencarian">Turu</div>
        				</div>
        				<div class="fomo-wrapper">
          					<div class="pencarian">Ghosting</div>
        				</div>
        				<div class="fomo-wrapper">
          					<div class="pencarian">Gamon</div>
        				</div>
        				<div class="fomo-wrapper">
          					<div class="pencarian">Baper</div>
        				</div>
        				<div class="fomo-wrapper">
          					<div class="pencarian">Sabeb</div>
        				</div>
        				<div class="fomo-wrapper">
          					<div class="pencarian">Insecure</div>
        				</div>
        				<div class="fomo-wrapper">
          					<div class="pencarian">YTTA</div>
        				</div>
        				<div class="fomo-wrapper">
          					<div class="pencarian">Kepo</div>
        				</div>
        				<div class="fomo-wrapper">
          					<div class="pencarian">Japri</div>
        				</div>
        				<div class="fomo-wrapper">
          					<div class="pencarian">YNTKTS</div>
        				</div>
        				<div class="fomo-wrapper">
          					<div class="pencarian">Salting</div>
        				</div>
        				<div class="fomo-wrapper">
          					<div class="pencarian">Gercep</div>
        				</div>
        				<div class="fomo-wrapper">
          					<div class="pencarian">Garing</div>
        				</div>
        				<div class="fomo-wrapper">
          					<div class="pencarian">Kudet</div>
        				</div>
        				<div class="fomo-wrapper">
          					<div class="pencarian">Pansos</div>
        				</div>
        				<div class="fomo-wrapper">
          					<div class="pencarian">Kelas abangku</div>
        				</div>
        				<div class="fomo-wrapper">
          					<div class="pencarian">Kasih paham</div>
        				</div>
        				<div class="fomo-wrapper">
          					<div class="pencarian">Tipis-tipis</div>
        				</div>
        				<div class="fomo-wrapper">
          					<div class="pencarian">Gemoy</div>
        				</div>
        				<div class="fomo-wrapper">
          					<div class="pencarian">Ilmu padi</div>
        				</div>
        				<div class="fomo-wrapper">
          					<div class="pencarian">Rispek capt</div>
        				</div>
        				<div class="fomo-wrapper">
          					<div class="pencarian">Kelas</div>
        				</div>
        				<div class="fomo-wrapper">
          					<div class="pencarian">OVT</div>
        				</div>
        				<div class="fomo-wrapper">
          					<div class="pencarian">Sabi</div>
        				</div>
        				<div class="fomo-wrapper">
          					<div class="pencarian">Rempong</div>
        				</div>
        				<div class="fomo-wrapper">
          					<div class="pencarian">Nethink</div>
        				</div>
        				<div class="fomo-wrapper">
          					<div class="pencarian">Bokek</div>
        				</div>
        				<div class="fomo-wrapper">
          					<div class="pencarian">Caper</div>
        				</div>
        				<div class="fomo-wrapper">
          					<div class="pencarian">Mager</div>
        				</div>
      			</div>
      			<div class="definisi">
        				<div class="hari-ini">
          					<div class="definisi-hari-ini">ARTI KATA HARI INI</div>
          					<b class="menyala-abangku">menyala abangku</b>
        				</div>
        				<div class="bisa-diartikan-sebagai-container">
          					<p class="bisa-diartikan-sebagai">Bisa diartikan sebagai ungkapan kekaguman atau pujian terhadap seseorang yang dianggap berprestasi, keren, atau menonjol dalam suatu hal. Misalnya saat seseorang menuliskan kalimat atau opini atau melakukan hal yang yang berani dan menohok. Kata 'menyala abangku' bisa digunakan sebagai bentuk pujian. </p>
          					<p class="orang-1-bro-tadi-gw-presentas">
            						<i class="orang-1-bro">orang 1: Bro tadi gw presentasi di kantor, bos langsung kasih pujian di depan semua orang</i>
          					</p>
          					<p class="orang-1-bro-tadi-gw-presentas">
            						<i class="orang-1-bro">orang 2: Wuih, menyala abangku!!</i>
          					</p>
        				</div>
        				<div class="by-dimashotwil331-12-maret-container">
          					<p class="orang-1-bro-tadi-gw-presentas">
            						<span class="orang-1-bro">
              							<span class="span">by </span>
              							<span>dimashotwil331</span>
            						</span>
          					</p>
          					<p class="maret-2023">12 MARET 2023</p>
        				</div>
        				<div class="like-1-reward-social-up-ratin-parent">
          					<img class="like-1-reward-social-up-ratin-icon" alt="" src="like-1--reward-social-up-rating-media-like-thumb-hand.svg">
          					
          					<div class="div1">150</div>
          					<img class="like-1-reward-social-up-ratin-icon1" alt="" src="like-1--reward-social-up-rating-media-like-thumb-hand.png">
          					
          					<div class="div2">3</div>
        				</div>
      			</div>
      			<div class="pencarian-populer">PENCARIAN POPULER</div>
      			<div class="arti-kata-lainnya-parent">
        				<div class="arti-kata-lainnya">ARTI KATA LAINNYA</div>
        				<div class="definisi-wrapper">
          					<div class="definisi1">
            						<b class="red-flag">red flag</b>
            						<div class="bisa-diartikan-sebagai1">Bisa diartikan sebagai “tanda bahaya” atau “peringatan”. Ini biasanya digunakan untuk menunjukkan ada sesuatu yang nggak beres atau bisa jadi masalah nantinya.</div>
            						<div class="by-real-ryangosling-2-januari-container">
              							<p class="orang-1-bro-tadi-gw-presentas">
                								<span class="orang-1-bro">
                  									<span class="span">by </span>
                  									<span>reaL_ryangosling</span>
                								</span>
              							</p>
              							<p class="maret-2023">2 JANUARI 2024</p>
            						</div>
            						<div class="like-1-reward-social-up-ratin-group">
              							<img class="like-1-reward-social-up-ratin-icon" alt="" src="like-1--reward-social-up-rating-media-like-thumb-hand.svg">
              							
              							<div class="div1">150</div>
              							<img class="like-1-reward-social-up-ratin-icon1" alt="" src="like-1--reward-social-up-rating-media-like-thumb-hand.png">
              							
              							<div class="div2">3</div>
            						</div>
            						<div class="flag-1-parent">
              							<img class="flag-1-icon" alt="" src="flag 1.png">
              							
              							<div class="pencarian">FLAG</div>
            						</div>
          					</div>
        				</div>
        				<div class="definisi-container">
          					<div class="definisi1">
            						<b class="red-flag">spill</b>
            						<div class="secara-harfiah-spill-container">
              							<p class="bisa-diartikan-sebagai">Secara harfiah, spill artinya ‘menumpahkan’, namun dalam dunia maya spill berarti menumpahkan berita atau menceritakan sebuah gosip terhangat. Selain itu, spill juga biasanya digunakan untuk bertanya sesuatu.</p>
              							<p class="bisa-diartikan-sebagai">&nbsp;</p>
              							<p class="orang-1-bro-tadi-gw-presentas">
                								<i class="orang-1-bro">“spill ceritanya dong”</i>
              							</p>
              							<p class="orang-1-bro-tadi-gw-presentas">
                								<i class="orang-1-bro">“spill sepatunya dong”</i>
              							</p>
            						</div>
            						<div class="by-imamvespamatic-6-desember-container">
              							<p class="orang-1-bro-tadi-gw-presentas">
                								<span class="orang-1-bro">
                  									<span class="span">by </span>
                  									<span>imamvespamatic</span>
                								</span>
              							</p>
              							<p class="maret-2023">6 DESEMBER 2023</p>
            						</div>
            						<div class="like-1-reward-social-up-ratin-group">
              							<img class="like-1-reward-social-up-ratin-icon" alt="" src="like-1--reward-social-up-rating-media-like-thumb-hand.svg">
              							
              							<div class="div1">150</div>
              							<img class="like-1-reward-social-up-ratin-icon1" alt="" src="like-1--reward-social-up-rating-media-like-thumb-hand.png">
              							
              							<div class="div2">3</div>
            						</div>
            						<div class="flag-1-parent">
              							<img class="flag-1-icon" alt="" src="flag 1.png">
              							
              							<div class="pencarian">FLAG</div>
            						</div>
          					</div>
        				</div>
        				<div class="definisi-frame">
          					<div class="definisi1">
            						<b class="red-flag">YGY</b>
            						<div class="ygy-adalah-singkatan-container">
              							<p class="bisa-diartikan-sebagai">YGY adalah singkatan dari "ya guys ya", atau "ya ges ya", "ya gaes ya". Artinya sama, yakni seruan yang ditujukan untuk teman-teman atau banyak orang.</p>
              							<p class="bisa-diartikan-sebagai">Penggunaan istilah ygy sangat fleksibel, bisa gunakan ketika ingin meyakinkan seseorang, atau untuk kalimat sederhana biasa.</p>
              							<p class="bisa-diartikan-sebagai">&nbsp;</p>
              							<p class="orang-1-bro-tadi-gw-presentas">
                								<i class="orang-1-bro">“Cinta enggak selamanya indah ygy”</i>
              							</p>
              							<p class="orang-1-bro-tadi-gw-presentas">
                								<i class="orang-1-bro">"Namanya juga nasib buruk ygy"</i>
              							</p>
              							<p class="orang-1-bro-tadi-gw-presentas">
                								<i class="orang-1-bro">"Aku mau makan dulu ygy"</i>
              							</p>
            						</div>
            						<div class="by-masfaiz1212-13-maret-container">
              							<p class="orang-1-bro-tadi-gw-presentas">
                								<span class="orang-1-bro">
                  									<span class="span">by </span>
                  									<span>masfaiz1212</span>
                								</span>
              							</p>
              							<p class="maret-2023">13 MARET 2020</p>
            						</div>
            						<div class="like-1-reward-social-up-ratin-group">
              							<img class="like-1-reward-social-up-ratin-icon" alt="" src="like-1--reward-social-up-rating-media-like-thumb-hand.svg">
              							
              							<div class="div1">150</div>
              							<img class="like-1-reward-social-up-ratin-icon1" alt="" src="like-1--reward-social-up-rating-media-like-thumb-hand.png">
              							
              							<div class="div2">3</div>
            						</div>
            						<div class="flag-1-parent">
              							<img class="flag-1-icon" alt="" src="flag 1.png">
              							
              							<div class="pencarian">FLAG</div>
            						</div>
          					</div>
        				</div>
      			</div>
    		</div>
  	</div>
  	
  	
  	
  	
  	<script>
    		var buttonContainer = document.getElementById("buttonContainer");
    		if(buttonContainer) {
      			buttonContainer.addEventListener("click", function (e) {
        				// Add your code here
      			});
    		}
    		
    		var navListItem2 = document.getElementById("navListItem2");
    		if(navListItem2) {
      			navListItem2.addEventListener("click", function (e) {
        				// Add your code here
      			});
    		}</script></body>
</html>