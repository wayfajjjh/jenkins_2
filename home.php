<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css_kita/style.css">
      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
   

  </head>
  <body  id="page-top">
  
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="background-color:#f05f40; ">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php"style="color:white;">AyoKerja.Com</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li ><a href="#">Home</a></li>
            

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Kategori <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
                <li class="divider"></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
          <div class="col-sm-3 col-md-3">
              <form class="navbar-form" role="search">
              <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search" name="q">
                  <div class="input-group-btn">
                      <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                  </div>
              </div>
              </form>
          </div>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="login.php">Login</a></li>
            
          </ul>
        </div><!-- /.navbar-collapse -->
        </div>
      </nav>  



     <div class="container">
       <div class="row">

         
            
           <div class="col-md-9" style="margin-top:80px;" >
                <div class="row">
                  <?php
                  error_reporting(0);

                    $page = $_GET['page'];

                    if($page){

                      include "$page".".php";
                    }else{
                      include "halaman_awal.php";
                    }

                  ?>

                </div>
                
                <?php 
                  if($page!="home.php"){



                ?>
                <div class="row">
                   <ul class="pagination" style="float:right; margin-right:15px;">
                    <li><a href="#"> <?php echo "<" ?></a></li>
                     <?php for($i=1;$i<10;$i++){ ?>
                      
                      <li><a href="#"><?php echo $i ?></a></li>

                     
                      <?php } ?>
                     <li><a href=<?php $i+1 ?> ><?php echo ">" ?></a></li>

                     
                    </ul>

                </div>
                  
                <?php 
                  }

                ?>
                 
          
              </div>



              <div class="col-md-3" style="margin-top:80px; border-left:#f05f40 1px solid; ">
                  <div style=" border-bottom:#f05f40 1px solid; ">
                    <h3>Silahkan Login</h3>
                    <form>
                      <div class="form-group">
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Username">
                      

                      </div>
                      <div class="form-group">
                        <input type="password" class="form-control" id="formGroupExampleInput2" placeholder="Password">
                      </div>

                      <div class="form-group">
                        <button class="btn btn-success" type="submit">Login</button>
                        <input class="btn btn-danger" type="reset" value="Reset">
                      </div>
                   
                    </form> 
                  </div>

                  <div style=" border-bottom:#f05f40 1px solid; ">
                    <h3>Berita Terhangat</h3> 
                  
                     <?php 
                     for($i=0;$i<5;$i++){

                     ?>

                      <img src="img/a.jpg" alt="" style="width:50px; height:50px; float:left; margin-right:5px;">
                      <a href="">hai guys</a><p> iifjoijf onfse fesnfso fosien sfso nwand dwaund uawnda uawd audau dua udaw wnda dau ef sef sioo 
                           iifjoijf onfse fesnfso </p>
                    <?php 
                        }
                    ?>
                    


                            
                  </div>

                  <div>
                    <h3>Lowongan Terbaru</h3> 
                     <?php 
                     for($i=0;$i<5;$i++){

                     ?>

                      <img src="img/b.jpg" alt="" style="width:50px; height:50px; float:left; margin-right:5px;">
                      <a href="">hai guys</a><p> iifjoijf onfse fesnfso fosien sfso nwand dwaund uawnda uawd audau dua udaw wnda dau ef sef sioo 
                           iifjoijf onfse fesnfso </p>
                    <?php 
                        }
                    ?>            
                  </div>
            </div>

             

     </div>



   </div>

   <footer>
     <div style="width:100%; background-color:#f05f40;">
      <div class="container">
       
            
            <div class="col-md-4 col-xs-12" style="color:white;">
                <h3>AyoKerja.com</h3>
              
            </div>


            <div class="col-md-4 col-xs-6 " style="color:white;">
              
               <h3 >About Us</h3>
              <p> iifjoijf onfse fesnfso fosien sfsoef sef sioe soeif osief osi fsio fiose fioes f fipse fose foise foise fiseo fsie fsoif seoif seoif soif soi f sf sieof soef osei fseoif seoif seoif seoif seoif seoif seoif seoif seoi fseo fs fseip fose fseof seoif seoif seoif seoif esoif seoif ofi seoif seoif seoif fosef seoi fseoif seoif seoif seoif esoif esoif oif esoif </p>
              
              
            </div>


            <div class="col-md-4 col-xs-6" style="color:white;">
              
              <h3>Contact Us</h3>
              <div>
               <a href="#"><img style=" height:50px;" src="img/icon/fb.png" alt="" ></a>
               <a href="#"><img style=" height:50px;" src="img/icon/gmail.png" alt="" ></a>
               <a href="#"><img style=" height:50px;" src="img/icon/git.png" alt="" ></a>
               <a href="#"><img style=" height:50px;" src="img/icon/ig.png" alt="" ></a>
               <a href="#"><img style=" height:50px;" src="img/icon/yt.png" alt="" ></a>
               <a href="#"><img style=" height:50px;" src="img/icon/feed.png" alt="" ></a>



              </div>
              
              
            </div>
            

        </div>
      </div>

      <div style="width:100%; background-color:black;  margin-bottom:-20px; ">
         <div class="container">
            <div class="co-md-12" style="margin:0 auto;">
                <center style="color:white;"><b>copyright© 2017 Powered by Bootstrap</b></center>
            </div>
        </div>

          
      </div>



   </footer>


       
     
      
            
    


 

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

   
  </body>
</html>