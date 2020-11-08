<?php
  session_start();

?>
<!DOCTYPE html>
<html>
  <head>
    <title>
    	firt template with strap
    </title>
    <metaname="viewport"content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="bootstrap-3.1.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/main-style.css">
    <link rel="stylesheet" type="text/css" href="css/cards.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
    <link rel="stylesheet" type="text/css" href="css/icomoon/style.css">
  
   </head>
    <body>
    
    <div id="all-content" style="background-image:url(photo/bac2.webp);background-size:cover;">
    <div id="all">
        
       <div id="menuETAutre" class="col-sm-12" > 
          <div id="menu" class="col-sm-8">
           <ul>
            <a href=""><li style="border:0;"><img src="photo/black.jpg" width="50px" height="50px" style="border-radius:30px"> </li></a>
            <a href=""><li>à proppos?</li></a>
            <a href=""><li>Faire une reservation</li></a>
            <a href=""><li>Explorer <span class="icon-angle-down"> </span> </li></a>
          </ul>  
          </div>
          <div id="menu2" class="col-sm-4">
            <ul>
       
            <a href=""><li> <span class="icon-user-circle-o"> </span> </li></a>
            <a href=""><li><span class="icon-user-plus"> </span></li></a>
          </ul>  
          </div>

       </div>
       <div id="content1" class="col-sm-6">
          <span class="Simpliferlavie"> Gagnez du temps en nous laissant vous assister </span><br>
           <span class="details">
                 
                 <span class=" icon-quote-left"> </span> Vous envisagez de créer un site vitrine, et v
                  ous vous interrogez sur les fonctionnalités 
                  indispensables, dans le but d’obtenir
                 la visibilité web que vous attendez 
                 pour votre activité. Cet article vous 
                 fournira la liste des outils essentiels, 
                 pour faire un site vitrine efficace et 
                 professionnel. L’analyse des sites internet 
                 de nos milliers d’utilisateurs, nous a conduit 
                 à définir <span class=" icon-quote-right"> </span>
                 <span></span>
       </div> 
       <div id="content2" class="col-sm-6">
        <form id="formulaire">
          <div class="form-group">
            <label for="name" id="label">User name</label>
            <input type="mail" id="name" class="form-control" placeholder="your user name " required>
          </div>
          <div class="form-group">
            <label for="name" id="label">Mail</label>
            <input type="password" id="name" class="form-control" placeholder="your mail adress " required>
          </div>
          <div class="form-group">
            <label for="name" id="label">Password</label>
            <input type="password" id="name" class="form-control" placeholder="your password " required>
          </div>
           Make sure it's at least 15 characters OR at least 8 characters including a number and a lowercase letter.<br>
          <button id="submit" class="btn btn-primary"> sign in your account</button>
        </form>
       </div>

    </div>  


    </div>
    <div id="autreDetails" class="col-sm-12" >
        <h2 style="padding-left:8%;">Get started with our Services</h2>
            <div id="getStart" style="background-image:url(photo/bac2.webp);background-size:cover;">

              <div class="col-sm-2" id="start"> <span id="new"> Start</span> </div>
              <div class="col-sm-8" id="details"> Vous envisagez de créer un site vitrine, et v
                ous vous interrogez sur les fonctionnalités 
                indispensables, dans le but d’obtenir
                 la visibilité web que vous attendez 
                 pour votre activité. Cet article vous</div>
              <div class="col-sm-2" id="try"> <button class="btn btn-success">try your self</button></div>
            </div>
            <h3 style="padding:20px 9%;font-family:;">Profitez pleinement de nos petits trucs</h3>
            <div id="otherINfos">

              <div class="col-sm-4" id="start2"> <!-- <span id="new"> Start</span> --> 

                  <div id="card-type-services">
                     <div id="card-img-1"> 
                          <img src="photo/cue.jpg" width="100%" height="100%">
                     </div>
                     <div id="card-text-1"> 
                       <h5>Prenez le control du barbecue </h5><br>
                          Vous vous interrogez sur les fonctionnalités 
                          indispensables, dans le but d’obtenir
                          la visibilité web que vous attendez 
                          pour votre activité. Cet article vous </div>
                     <div id="card-submits-1">
                        <span id="contener-submit">
                          <span id="new">Reserver</span>
                        </span>
                  </div>
                  
                </div>
              </div>  
              <div class="col-sm-4" id="details2">
                <div id="card-type-services">
                     <div id="card-img-1"> 
                          <img src="photo/rrr.jpeg" width="100%" height="100%">
                     </div>
                     <div id="card-text-1"> 
                     <h5>Du jambo au lait</h5><br>
                          Vous envisagez de créer un site vitrine, et v
                          ous vous interrogez sur les fonctionnalités 
                          indispensables, dans le but d’obtenir
                           </div>
                     <div id="card-submits-1">
                        <span id="contener-submit">
                  
                          <span id="new">Reserver</span>
                        </span>
                     </div>
                  </div>
              </div>
              <div class="col-sm-4" id="try2"><div id="card-type-services">
                     <div id="card-img-1"> 
                          <img src="photo/w.jpg" width="100%" height="100%">
                     </div>
                     <div id="card-text-1"> 
                     <h5>Faite une excursion dans le parc</h5><br>
                          Vous envisagez de créer un site vitrine, et v
                          ous vous interrogez sur les fonctionnalités 
                          indispensables, dans le but d’obtenir
                           </div>
                     <div id="card-submits-1">
                        <span id="contener-submit">
                          <span id="new">Reserver</span>
                        </span>
                  </div>
              </div>
            </div>
         <!--   <span id="more"> 

          
           <button class="btn btn-danger" id="ew"> voir plus </button class="btn btn-danger"> 
           </span> -->
            <!-- <h4 style="padding-top:90px;padding-right:30px;">
             <button class="btn btn-danger" id="new"> voir plus </button class="btn btn-danger"> 
           -->  </h4>
            <div id="voir-plus" class="col-sm-12"> 
                <div id="det" class="col-sm-9"> 
                    
                </div>
                <div id="plusDproduits" class="col-sm-3"> 
                    <!-- <a href=""> voir plus <span class="icon-arrow-circle-right"></a> -->
                 <!-- <span id="new"> voir plus</span> -->
                </div>

              </div>
        
    </div>
    </div>
      </div>
    <div id="footer" class="col-sm-12" style="background-image:url(photo/rrr.jpeg);background-size:cover;"> 
       <div  id="Subcontent_footer" class="">
   
        <div  id="div1">
            1
        </div>
        <div  id="div2">
            <span style="font-size:30px; font-weight:bold;">Newsletters </span> </br>
            abonnez vous à notre newsletter pour etre informé  à chaque nouvelle publication
            <form id="contact">
          
          <div class="form-group" id="mail">
            <label for="name" id="label">Mail</label>
            <input type="password" id="mail" class="form-control" placeholder="your mail adress " required>
          </div>
            <button id="submit" class="btn btn-primary"> Envoyer</button>
        </form>


        <div>
        <!-- <div  id="content_footer">
            3
        </div> -->
      </div>
   
    <!-- <div  id="Subcontent" class="col-sm-12">
      footer copyright
    </div> -->
    </div> 
   <!--  <div  id="Subcoten" class="col-sm-12" style="height:90px;">
      footer copyright
    </div> -->

    <script type="text/javascript">
       window.onscroll = function(){

            if(document.documentElement.scrollTop >90){
               document.getElementById("menuETAutre").style.background="#c9c9c9";
               // document.getElementById("menuETAutre").style.height="40px";
               document.getElementById("menuETAutre").style.position="fixed";
                document.getElementById("menuETAutre").style.padding="0px 8%";
                document.getElementById("menuETAutre").style.height="85px";
               document.getElementById("menuETAutre").style.transition="all 0.8s";
               document.getElementById("container_menuEtRecherche").style.visibility="hidden";
              }
            else{
                document.getElementById("menuETAutre").style.padding="30px 6%";
                document.getElementById("menuETAutre").style.height="130px";
                document.getElementById("menuETAutre").style.position="relative";
              // document.getElementById("menuETAutre").style.height="40px";
              // document.getElementById("menu").style.font-size="40px";
              }
            }

    </script>

</body>     
</html>