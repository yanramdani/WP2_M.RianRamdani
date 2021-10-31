<!DOCTYPE html>
<html>
<head>
    <title>Cara membuat Website dinamis dengan PHP dan CSS</title>
    <link rel="stylesheet" href="style.CSS">
</head>
<body>
    <section class="header">
        <li style="color: white; font-size: 25px; font-weight: bold;">Sumatra Barat</li>
        <li><a href="index.php?page=sejarah">Sejarah</a></li>
        <li><a href="index.php?page=geografi">Geografi</a></li>
        <li><a href="index.php?page=kependudukan">Kependudukan</a></li>
    </section>
    <section class="content">
        <?php
        if (isset($_GET['page'])) {
            if ($_GET['page'] == "about") {
                include "about.php";
            } elseif ($_GET['page'] == "blog") {
                include "blog.php";
            } else {
                include "beranda.php";
            }
        } else {
            include "beranda.php";
        }
        ?>
    </section>
    <section class="footer">
        
        </a>
    </section>
</body>

</html>