<!DOCTYPE html>
<html lang="en">
<head>
    <title>Beranda</title>
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/style.css">
</head>
<body style = "background: linear-gradient(to right, red , yellow, green);">
<header class="ob">
    <div class="atas">
    <div id="logo"><img style="width: 100px;margin-left: 10px;float: left; margin-top: 15px;"
    src="<?=base_url()?>assets/se.png" alt=""></div>
    <nav>
        <ul>
            <li><a href="<?=base_url()?>index.php/welcome/utama"> Home </a></li>
            <li><a href="<?=base_url()?>index.php/welcome/event"> Event </a></li>
            <li><a href="<?=base_url()?>index.php/welcome/gallery"> Gallery </a></li>
            <li><a href="<?=base_url()?>index.php/welcome/contact"> Contact </a></li>
            <li><a href="<?=base_url()?>index.php/welcome/profil"> MyProfil </a></li>
        </ul>
    </nav>
    </div>
</header>
<h1 align="center" style="color:black;text-align: center;font-size:10.3mm; margin-top:
150px;margin-left: 12px;font-family: sans-serif;">Selamat Datang <?= $nama_lengkap?>
<br> Berperilaku seperti <?= $jenis_kelamin?></h1>

<p style="font-size: 18px;margin-left: 56px; margin-top: 39px;"> Lorem ipsum dolor sit imet,
    consectur adipiscung elit.
    Phsellus eu rhoncus nisl. Vestibulum condimentum quis turpis eget varius. Nulla faucibus
    odio at ultices suscipit.
    Integer egestas gravida aliquet</p>
<img src="<?base_url()?>assets/b.jpg" alt="">
</body>
</html>
