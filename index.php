<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Devoted Nonsense</title>
  <link rel="stylesheet" href="style.css">
  <script src="https://kit.fontawesome.com/01313f670a.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
  <script src="js/planer.js"></script>
</head>
<body>
  <main>
    <section class="header-cards">
      <section class="filter card">
        <input type="search" name="entry-filter" id="">
      </section>
    </section>
    <section class="planned-entries">
      <?php
        for($i=0;$i<3;$i++) {
          include "php/entry.php";
        }
      ?>
    </section>
  </main>
  <section>
    <ul class="quick-actions">
      <li class="quick-action__button" title=""><label for="">Neues Review</label><button><i class="fa-solid fa-star"></i></button></li>
      <li class="quick-action__button" title=""><label for="">Neuer Stream</label><button><i class="fa-solid fa-play"></i></button></li>
      <li class="quick-action__button" title=""><label for="">Neuer Artikel</label><button><i class="fa-solid fa-file-lines"></i></button></li>
    </ul>
  </section>
</body>
</html>