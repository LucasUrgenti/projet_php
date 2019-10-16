<!doctype html>
  <html>
    <head lang="fr">
      <meta charset="UTF-8">
      <link rel="stylesheet" href="style/styleHeaderFooter.css">
      <link rel="stylesheet" href="style/<?= $style ?>" >
      <link href="https://fonts.googleapis.com/css?family=Permanent+Marker&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Permanent+Marker|Schoolbell&display=swap" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <title> <?= $title ?> </title>
    </head>
    <body>


      <script>
        $(document).ready(function(){
          $("#login").click(function()
          {
            $("#hide_form").slideToggle();
          });
        }); // faire apparaitre disparaitre le menu login
    </script>



    <header class="header">
      <div>  </div> <!-- div pour centrer le titre-->
      <div id="div_title">
         <a href="index.php"> <img src ="image/logo.php" class="logo"></a>
      </div>
      <ul id="ul_topBar">
        <li id="li_topBar"> <a href="inscription.php" target="_blank"> Inscription </a> </li>
        <li id="li_topBar"> <a id="login" > login </a> </li>
      </ul>
    </header>

    <div id="banderole">
      <div id="hide_form">
        <form id = "form_login">
          <input type="text" name="" value="" placeholder="login" id="input_form">  <br>
          <input type="password" name="" value="" placeholder="password" id="input_form">  <br>
          <input type="submit" name="" value="submit" id="input_form">
          <a href="NewPwd.php"> mot de passe oublié ? </a>
        </form>
      </div> <!-- hide form -->

      <button id="button"> bouton </button>
      <p> incroyable Bienvenue sur free note ouais ouais ouais sisi t'endends</p>
      <div></div>
    </div> <!-- BANDEROLE -->




<!-- <main> -->
        <?= $content ?>
<!-- </main> -->


        <footer class="footer">
          <div id="div_liens_github">
            <a href="https://github.com/leo-dalloz" > Léo Dalloz </a>
            <a href="https://github.com/jeremy-pouzargues" > Jérémy Pouzargues  </a>
            <a href="https://github.com/LucasUrgenti"> Lucas Urgenti </a>
            <a href="https://github.com/laurent-vouriot" > Laurent Vouriot </a>
            <a href="https://github.com/audreywagner" > Audrey Wagner </a>
          </div>
          <div id="div_footer">
            <span id="span_footer"> projet php S3 2019 </span>
          </div>
        </footer>
      </body>
    </html>
</html>
