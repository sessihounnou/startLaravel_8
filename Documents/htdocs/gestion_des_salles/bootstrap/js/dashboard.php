
<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="faites des bénéfices " content="">
    <meta name="gagner de l'argent" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Dashboard </title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
  </head>

  <body>
    <header>
     <header>
       <?php  include('entete.html') ?>
      </header>
          </header>

  
         


          <h2>liste de vos filleuls </h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <tbody>
                <tr> 
                  <?php
                  $address=$_SESSION['adresse_e']; 
                mysql_connect('localhost','root', '') ;
     mysql_select_db('heber_24132742_marketing_reseau');
     $lecture1 = mysql_query("SELECT code_filleul, adresse_e FROM parrainage where adresse_e='$address' ");   
if ($lecture1) {
  while ($search = mysql_fetch_array($lecture1)) {
              $le_cde= $search['code_filleul'];
              
              
}}




     $lecture  = mysql_query("SELECT nom,prenom,pseudo,adresse_electronique FROM utilisateur where pseudo='$le_cde' and paiement='1' ORDER BY id  ");   
        
              while ($tuple = mysql_fetch_array($lecture)) {
              $nombd = $tuple['nom'];
              $prenombd = $tuple['prenom'];
              $mailbd = $tuple['adresse_electronique'];
                    ?>
                  <h5 style="display:;"> 
                  <div style="margin-left: 0em"><?php
                        echo $prenombd;
               ?> <?php
                        echo $nombd;
                 ?><div style="display: inline-block; margin-left: 30em"><?php
           
                        echo $mailbd;
                ?>
            </h5>
                        <?php
                        ?></div> 
              </div>
                        <?php 
                }   
                      ?>
                   
                  </tr>
                
              </tbody>
            </table>
                        
             
          </div>
        </main>
      </div>
    </div>
    <p> votre code de parrainage est le <?php echo $le_cde; '' ?></p>
  </body>
</html>

