<!-- gruplar.php -->
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grup Davet Linkleri</title>
    <style>
        /* Genel stil ayarları */
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .grup-container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .grup-link {
            display: block;
            padding: 10px;
            margin-bottom: 10px;
            background-color: #007bff;
            color: #fff;
            text-align: center;
            border-radius: 5px;
        }

        .grup-link:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Grup Davet Linkleri</h1>
        
        <?php
        // Grup adını alalım
        $grup = $_GET['grup'] ?? '';

        // Burada, $grup değerine göre davet linklerini gösterebilirsiniz
        switch ($grup) {
            case 'a':
                echo '<a class="grup-link" href="https://chat.whatsapp.com/Lh9tAeIOTTxIkYoMTlBk7g">WHATSAPP GRUBUNA KATILMAK İÇİN TIKLAYIN</a>';
                break;
            case 'b':
                echo '<a class="grup-link" href="https://chat.whatsapp.com/HpMXuepgxF003tppCCIQ6D">WHATSAPP GRUBUNA KATILMAK İÇİN TIKLAYIN</a>';
                break;
            case 'c':
                echo '<a class="grup-link" href="#">WHATSAPP GRUBUNA KATILMAK İÇİN TIKLAYIN</a>';
                break;
            case 'd':
                echo '<a class="grup-link" href="https://chat.whatsapp.com/JvJTUMCp5MJLGYwniGlo5d">WHATSAPP GRUBUNA KATILMAK İÇİN TIKLAYIN</a>';
                break;
            case 'e':
                echo '<a class="grup-link" href="https://chat.whatsapp.com/EItF5u5LUsCAN0x0fnKnXq">WHATSAPP GRUBUNA KATILMAK İÇİN TIKLAYIN</a>';
                break;
            case 'f':
                echo '<a class="grup-link" href="https://chat.whatsapp.com/LesSuZTJCjj7ILbhCYRXnA">WHATSAPP GRUBUNA KATILMAK İÇİN TIKLAYIN</a>';
                break;
            case 'g':
                echo '<a class="grup-link" href="https://chat.whatsapp.com/EFdc0N9Xdfh1GE5cw78KBn">WHATSAPP GRUBUNA KATILMAK İÇİN TIKLAYIN</a>';
                break;
            case 'h':
                echo '<a class="grup-link" href="https://chat.whatsapp.com/EAxcphBML2LDcDBGAU0tSt">WHATSAPP GRUBUNA KATILMAK İÇİN TIKLAYIN</a>';
                break;
            default:
                echo '<p>Geçersiz grup seçimi</p>';
        }
        ?>

       <center><p><a href="index.php">Ana sayfaya dön</a></p></center> 
    </div>
</body>
</html>
