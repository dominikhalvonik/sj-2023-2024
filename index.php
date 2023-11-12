<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moja stránka</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

  <?php
  include_once "parts/header.php";

  if(!isset($common)) {
      $common = new stdClass();
  }
  ?>
  <main>
    <section class="banner">
        <div class="container text-white">
            <h1>Webové stránky na mieru</h1>
        </div>
    </section>
    <section class="container">
      <div class="row">
        <div class="col-100 text-center">
            <p><strong><em>Elit culpa id mollit irure sit. Ex ut et ea esse culpa officia ea incididunt elit velit veniam qui. Mollit deserunt culpa incididunt laborum commodo in culpa.</em></strong></p>
        </div>
      </div>
    </section>
    <section class="container">
        <?php
        $content = $common->printRow(
            1,
            "Mollit cupidatat velit quis irure non eiusmod culpa cillum velit magna est aliquip.",
        "<p>Nulla dolore sit esse pariatur culpa sint nulla fugiat nulla ut. Sit adipisicing fugiat id consequat qui est. Nulla ea aliquip culpa nulla mollit do excepteur ex ullamco consequat tempor consectetur. Tempor et ea voluptate irure est magna magna reprehenderit qui non dolore. Consequat id ad cillum do qui. Proident ipsum enim eiusmod fugiat quis anim consequat ullamco mollit excepteur. Eiusmod eu ad irure anim velit laborum commodo nostrud pariatur id ea ad.</p>
          <p>Incididunt pariatur ipsum in culpa sit cillum consequat nostrud do. Esse commodo ad qui ea. Pariatur elit mollit deserunt aute do culpa eu veniam pariatur in adipisicing qui adipisicing irure. Est minim sint ipsum nulla eiusmod. Amet do officia consectetur labore. Id aute labore culpa aliquip. Adipisicing mollit excepteur Lorem quis elit ipsum irure quis occaecat qui consectetur ad irure dolor.</p>");
        echo $content;
        ?>
    </section>
  </main>
  
  <?php
  include_once "parts/footer.php";
  ?>
<script src="js/app.js"></script>
</body>
</html>