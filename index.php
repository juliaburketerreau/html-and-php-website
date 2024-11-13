<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <title>Julia's designs'</title>

  <link rel="apple-touch-icon" sizes="180x180" href="favicons/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="favicons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="favicons/favicon-16x16.png">
  <link rel="manifest" href="favicons/site.webmanifest">
</head>

<body>
  <h1>New web page!</h1>
  <form action="handler.php" method="POST">
    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
      <input class="mdl-textfield__input" type="text" id="sample3" name="userName">
      <label class="mdl-textfield__label" for="sample3">text</label>
    </div>
    <button class="mdl-button mdl-js-button mdl-js-ripple-effect" type=submit>
      Submit
    </button>
  </form>
  <!-- Textfield with Floating Label -->
  <!-- The drawer is always open in large screens. The header is always shown,
  even in small screens. -->
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer
            mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <div class="mdl-layout-spacer"></div>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable
                  mdl-textfield--floating-label mdl-textfield--align-right">
          <label class="mdl-button mdl-js-button mdl-button--icon" for="fixed-header-drawer-exp">
            <i class="material-icons">search</i>
          </label>
          <div class="mdl-textfield__expandable-holder">
            <input class="mdl-textfield__input" type="text" name="sample" id="fixed-header-drawer-exp">
          </div>
        </div>
      </div>
    </header>
    <div class="mdl-layout__drawer">
      <span class="mdl-layout-title">Colours</span>
      <nav class="mdl-navigation">
        <a class="mdl-navigation__link" href="">Red</a>
        <a class="mdl-navigation__link" href="">Orange</a>
        <a class="mdl-navigation__link" href="">Yellow</a>
        <a class="mdl-navigation__link" href="">Green</a>
      </nav>
    </div>
    <main class="mdl-layout__content">
      <div class="page-content"><!-- Your content goes here --></div>
    </main>
  </div>
</body>

</html>
