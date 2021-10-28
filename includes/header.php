

<html>

  

  <?php include "links/links.php"; ?>

    <body>

  
    <button onclick="topFunction()" id="myBtn" title="Go to top">
      <i class="fas fa-arrow-up"></i>
    </button>
  
    <script type="text/javascript">
      window.onscroll = function()
      {
        scrollFunction()
      };

      function scrollFunction(){
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementById("myBtn").style.display = "block";
        } else {
          document.getElementById("myBtn").style.display = "none";
        }
      }

      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>





    <nav class="navbar navbar-expand-lg navbar-light " style="background-color:#b6c454; , left:100px">
      <div class="container-fluid ">
        
      <a class="navbar-brand" href="index.php" > Foodika </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"  data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

          
          
        

        <div class="collapse navbar-collapse " id="navbar" >
          <ul class="navbar-nav me-auto mb-2 mb-lg-0  ">

          <li class="nav-item"><a class="nav-link active" aria-current="page"  href="index.php">Home</a></li>
          <li class="nav-item"> <a class="nav-link active" aria-current="page" href="aboutus.php">About Us</a></li>
          <li class="nav-item"> <a class="nav-link active" aria-current="page"  href="contactus.php">Contact Us</a></li>
          </ul>

<?php
if(isset($_SESSION['login_user1'])){

?>


          <ul class="nav navbar-nav navbar-right" >
          <li class="nav-item dropdown"><a class="nav-link dropdown-toggle"  href="#"><i class="fa fa-user" aria-hidden="true"></i>&nbsp; Welcome <?php echo $_SESSION['login_user1']; ?> </a></li>
           <li class="nav-item"> <a class="nav-link active" aria-current="page" href="myrestaurant.php">MANAGER CONTROL PANEL</a></li>
            <li class="nav-item"> <a class="nav-link active" aria-current="page" href="logout_m.php"> <i class="fa fa-sign-out-alt" aria-hidden="true"></i>Log Out </a></li>
          </ul>
<?php
}
else if (isset($_SESSION['login_user2'])) {
  ?>
           <ul class="nav navbar-nav navbar-right" style="margin-right: 2.25rem !important;">
            <li class="nav-item"> <a  class="nav-link active" aria-current="page" href="#"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;</span> Welcome <?php echo $_SESSION['login_user2']; ?> </a></li>
            <li class="nav-item"> <a  class="nav-link active" aria-current="page" href="foodlist.php"> <i class="fas fa-utensils" aria-hidden="true"></i></span> Food Zone </a></li>
            <li class="nav-item"> <a class="nav-link active" aria-current="page"  href="cart.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i></span> Cart 
            (<?php
              if(isset($_SESSION["cart"])){
              $count = count($_SESSION["cart"]); 
              echo "$count"; 
            }
              else
                echo "0";
              ?>)
            </a></li>
            <li class="nav-item"><a  class="nav-link active" aria-current="page" href="logout_u.php"> <i class="fas fa-sign-out-alt" aria-hidden="true"></i>Log Out </a></li>
          </ul>
  <?php        
}
else {

  ?>

            <ul class="nav navbar-nav navbar-right navbar-nav-scroll "style="margin-right: 2.0rem !important;" >
            <li class="nav-item dropdown" > <a class="nav-link dropdown-toggle" href="#"  id="navbarDropdown" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-user" aria-hidden="true"></i> Sign Up <span class="caret"></span> </a>
            <ul class="dropdown-menu"  >
            <li> <a  class="dropdown-item" href="customersignup.php"> User Sign-up</a></li>
            <li> <a class="dropdown-item"  href="managersignup.php"> Admin-up</a></li>
          
            </ul>
            </li>

            <li class="nav-item dropdown"><a  class="nav-link dropdown-toggle" href="#"  id="navbarScrollingDropdown" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-sign-in-alt"></i>  Login <span class="caret"></span></a>
              <ul class="dropdown-menu">
              <li> <a  class="dropdown-item" href="customerlogin.php"> User Login</a></li>
              <li> <a  class="dropdown-item" href="managerlogin.php"> Admin Login</a></li>

            </ul>
            </li>
          </ul>

<?php
}
?>
        </div>

      </div>
    </nav>

    
         </body>
</html>