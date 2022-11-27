<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Devoted Nonsense</title>
  <link rel="stylesheet" href="style.css">
  <script src="https://kit.fontawesome.com/01313f670a.js" crossorigin="anonymous"></script>
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
    <?php
      include "php/quick-actions/quick-actions.php";
    ?>
  </section>
</body>
</html>