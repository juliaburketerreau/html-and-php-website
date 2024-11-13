<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <title>Welcome Page</title>
</head>

<body>

  <?php
  $userName = "";
  if (isset($_POST['userName'])) {
    $userName = $_POST['userName'];
  }
  echo "<h1>Welcome " . $userName . "!</h1>\n";
  ?>

  <!-- No header, and the drawer stays open on larger screens (fixed drawer). -->
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer">
    <div class="mdl-layout__drawer">
      <span class="mdl-layout-title">Welcome to Ottawa!</span>
      <nav class="mdl-navigation">
        <a class="mdl-navigation__link" href="https://ottawatourism.ca/en/ottawa-insider/top-10-things-do-ottawa">Things to do</a>
        <a class="mdl-navigation__link" href="https://ottawatourism.ca/en/ottawa-insider/guide-2024-pro-sports-ottawa">Sports teams</a>
        <a class="mdl-navigation__link" href="https://www.britannica.com/place/Ottawa">history</a>
        <a class="mdl-navigation__link" href="https://www.ranker.com/list/famous-people-from-ottawa/reference">famous people from here</a>
      </nav>
    </div>
    <main class="mdl-layout__content">
      <div class="page-content"><!-- Your content goes here --></div>
    </main>
  </div>
</body>

</html>
