<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <title>İletişim Bilgileri</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
  <h2 class="mb-4">Gönderilen İletişim Bilgileri</h2>

  <ul class="list-group">
    <li class="list-group-item"><strong>Ad Soyad:</strong> <?php echo htmlspecialchars($_POST["adsoyad"]); ?></li>
    <li class="list-group-item"><strong>E-Posta:</strong> <?php echo htmlspecialchars($_POST["email"]); ?></li>
    <li class="list-group-item"><strong>Telefon:</strong> <?php echo htmlspecialchars($_POST["telefon"]); ?></li>
    <li class="list-group-item"><strong>Adres:</strong> <?php echo nl2br(htmlspecialchars($_POST["adres"])); ?></li>
    <li class="list-group-item"><strong>Cinsiyet:</strong> <?php echo isset($_POST["cinsiyet"]) ? htmlspecialchars($_POST["cinsiyet"]) : "Seçilmedi"; ?></li>
    <li class="list-group-item"><strong>Seçilen Dersler:</strong>
      <ul>
        <?php
          if (!empty($_POST["ders"])) {
            foreach ($_POST["ders"] as $ders) {
              echo "<li>" . htmlspecialchars($ders) . "</li>";
            }
          } else {
            echo "<li>Seçilmedi</li>";
          }
        ?>
      </ul>
    </li>
  </ul>

  <a href="iletisim.html" class="btn btn-secondary mt-4">Geri Dön</a>
</div>

</body>
</html>