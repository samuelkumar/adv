<!DOCTYPE html>
<html class="no-js before-run" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="bootstrap admin template">
  <meta name="author" content="rajapandi.nr@gmail.com">

 

<title><?php echo $page_title;?></title>
      
<?php include 'includes_top.php';?>
      

    </head>


   <body class="dashboard">
  <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
	
  <div class="site-menubar">
    <div class="site-menubar-body" style="height:100%">
      <div>
        <div>
          <ul class="site-menu">
        <!-- Aside Start-->
        <?php include 'navigation.php';?>	
        <!-- Aside Ends-->
  </ul>

         
        </div>
      </div>
    </div>

    
  </div>

        <!--Main Content Start -->
     

            <!-- Header -->
            <?php include 'header.php';?>
            <!-- Header Ends -->


            <!-- Page Content Start -->
          
  <div class="page animsition" style="animation-duration: 0s; opacity: 1;">
      
          <div class="page-header">
      <h1 class="page-title"><?php echo $page_title; ?></h1>
      
    </div>
      
          
             <div class="page-content padding-20 container-fluid"> 
              <?php include 'admin/'.$page_name.'.php';?> 
         
             </div>
     
 
            </div>
            <!-- Page Content Ends -->
           

			
			
            <!-- Footer Start -->
            <?php include 'footer.php';?>	
            <!-- Footer Ends -->



     
        <!-- Main Content Ends -->
        


        <!-- js placed at the end of the document so the pages load faster -->
       
   <?php include 'includes_bottom.php';?>
    

    </body>


</html>
