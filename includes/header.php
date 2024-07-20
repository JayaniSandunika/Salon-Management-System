<!--navigation bar color,images -->
<section class=" w3l-header-4 header-sticky">
    <header style="padding: 20px 0px 20px;
  background: #000000;
  border-bottom: none; ">
        <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">  
         <a class="navbar-brand" href="index.php">
            <img src="assets/new_images/handsome.png" height="100" width="100" style="border-radius: 100px; -moz-border-radius: 15px;" >
        </a>
           
        
            <button class="navbar-toggler bg-gradient collapsed" type="button" data-toggle="collapse"
                data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="fa icon-expand fa-bars"></span>
        <span class="fa icon-close fa-times"></span>
            </button>
      
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link " style="font-size: 18px; font-family: 'Georgia', serif; "  href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="font-size: 18px; font-family: 'Georgia', serif;" href="about.php">About</a>
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link" style="font-size: 18px; font-family: 'Georgia', serif;" href="services.php">Services</a>
                    </li> 

                    <li class="nav-item">
                        <a class="nav-link" style="font-size: 18px; font-family: 'Georgia', serif;" href="contact.php">Contact</a>
                    </li>
                     
                     <?php if (strlen($_SESSION['msmsuid']==0)) {?>
                    <li class="nav-item">
                        <a class="nav-link" style="font-size: 18px; font-family: 'Georgia', serif;" href="admin/index.php">Admin</a>
                    </li>
                     <li class="nav-item">
                        <a class="nav-link" style="font-size: 18px; font-family: 'Georgia', serif;" href="signup.php">Signup</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="font-size: 18px; font-family: 'Georgia', serif;" href="login.php">Login</a>
                    </li><?php }?>
                    <?php if (strlen($_SESSION['msmsuid']>0)) {?>
                    <li class="nav-item">
                        <a class="nav-link" style="font-size: 18px; font-family: 'Georgia', serif;" href="book-appointment.php">Book Salon</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" style="font-size: 18px; font-family: 'Georgia', serif;" href="booking-history.php">Booking History</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="font-size: 18px; font-family: 'Georgia', serif;" href="invoice-history.php">Invoice History</a>
                    </li>
                                        <li class="nav-item">
                        <a class="nav-link" style="font-size: 18px; font-family: 'Georgia', serif;" href="profile.php">Profile</a>
                    </li>
                                        <li class="nav-item">
                        <a class="nav-link" style="font-size: 18px; font-family: 'Georgia', serif;" href="change-password.php">Setting</a>
                    </li>
                     <li class="nav-item">
                        <a class="nav-link" style="font-size: 18px; font-family: 'Georgia', serif;" href="logout.php">Logout</a>
                    </li>
                  <?php }?>
                </ul>
                
            </div>
        </div>

        </nav>
    </div>
      </header>
</section>