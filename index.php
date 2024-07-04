<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WhatsApp Grupları</title>
    <style>
        /* Genel stil ayarları */
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex; /* Flexbox kullanarak içeriği hizalamak için */
            justify-content: center; /* İçeriği yatayda ortalamak için */
        }

        .container {
            display: flex; /* İçerik ve fotoğraf alanını yan yana hizalamak için */
            align-items: flex-start; /* İçeriği yatayda üstten başlatmak için */
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .content {
            flex: 1; /* İçeriğin esnek boyutlandırması */
        }

        .photo {
            flex: 0 0 200px; /* Fotoğraf alanının sabit 200px genişliği */
            margin-left: 20px; /* İçerikten sağda 20px boşluk */
            border-radius: 8px; /* Köşeleri yuvarlamak */
            overflow: hidden; /* Taşma durumlarında gizleme */
        }

        .photo img {
            width: 100%; /* Fotoğrafın tam genişlikte görünmesi */
            height: auto; /* Oranları koruyarak yükseklik ayarı */
            display: block; /* Kenar boşluklarını kaldırmak */
        }

        h1 {
            text-align: center;
            color: #333;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        ul li {
            margin-bottom: 10px;
        }

        a {
            text-decoration: none;
            color: #007bff;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="content">
            <h1>WhatsApp Grupları</h1>
            <ul>
                <li><a href="gruplar.php?grup=a">Grup A ( FERİT HOCA )</a></li>
                <li><a href="gruplar.php?grup=b">Grup B ( ÖZGÜR HOCA )</a></li>
                <li><a href="gruplar.php?grup=c">Grup C (ASIM HOCA )</a></li>
                <li><a href="gruplar.php?grup=d">Grup D ( FATİH HOCA )</a></li>
                <li><a href="gruplar.php?grup=e">Grup E ( SAİD HOCA )</a></li>
                <li><a href="gruplar.php?grup=f">Grup F ( ÖMER HOCA )</a></li>
                <li><a href="gruplar.php?grup=g">Grup G ( MERTCAN HOCA )</a></li>
                <li><a href="gruplar.php?grup=h">Grup H ( ABDULKADİR HOCA )</a></li>
            </ul>
        </div>
        <div class="photo">
            <img src="cami.jpg" alt="Description of the photo">
        </div>
    </div>
</body>
</html>
