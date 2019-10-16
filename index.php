<?php
      $title = 'FreeNote';
      $style = 'styleIndex.css';
?>



<?php ob_start(); ?> <!-- met tout  le contenue html qui suit dans une variable -->

<script>
  $(document).ready(function(){
    $("#button").click(function(){
      $("#hide_aside").animate({
          width: "toggle"
      });

    });
  }); // faire apparaitre disparaitre le aside avec les messages
</script>



<main>
    <div id="hide_aside">
      <aside>
         <a href="pageDiscussionView.php?id_discussion=1" id="lien_salon_1">
                <p>  Salon 1 <br>
                status :<span id="span_status_discussion">  <strong>  getDiscussionStatus(); </strong> </span> <br>
                messages :  getNbMessages();  </p>
          </a>

          <a href="pageDiscussionView.php?id_discussion=2" id="lien_salon_1">
              <p> Salon 2 <br>
              status : <span id="span_status_discussion"> <strong>   getDiscussionStatus();  </strong> </span> <br>
              messages :   getNbMessages();  </p>
          </a>

           <a href="pageDiscussionView.php?id_discussion=3" id="lien_salon_1">

              <p>  Salon 3 <br>
              status  : <span id="span_status_discussion"> <strong>  getDiscussionStatus();   </strong> </span> <br>
              messages :   getNbMessages(); </p>
          </a>

        </aside>
    </div> <!-- hide_aside -->

    <section>
      <article>
        <p>
        Bienvenue sur FreeNote un réseau social d'un nouveau genre ! <br>
        Completez les phrases des autres de manière  super drôle, super chouettos ! <br>
        Quoi, qu'entend-je ? ce texte est très gros juste pour agrandir la taille de la page ? <br>
        Oui peut être bien...
        <br><br><br>
        ouloulou des espaces
        <br><br><br>
      </p>
    </article>
  </section>


</main>


<?php $content = ob_get_clean(); ?>
<?php require('template.php')?>
