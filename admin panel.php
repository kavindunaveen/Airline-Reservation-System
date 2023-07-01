
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel ="stylesheet" href="css/pasindu.css">
</head>
<body>
    <div class="wrapper">
        <div class="navigation">
        <ul>
            <li>
                <a href="#">
                    <span class="icon"><i class="fa fa-fighter-jet" aria-hidden="true"></i></span>
                    <span class="title"><h1>Revolt Airline</h1></span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="icon"><i class="fa fa-home" aria-hidden="true"></i></span>
                    <span class="title">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="pflight.php">
                    <span class="icon"><i class="fa fa-plane" aria-hidden="true"></i></span>
                    <span class="title">Flight Details</span>

                </a>
            </li>
            <li>
                <a href="hotel.php">
                    <span class="icon"><i class="fa fa-h-square" aria-hidden="true"></i></span>
                    <span class="title">Hotel Details</span>

                </a>
            </li>
            <li>
                <a href="emp.php">
                    <span class="icon"><i class="fa fa-users" aria-hidden="true"></i></span>
                    <span class="title">Employee Details</span>

                </a>
            </li>    
        </ul>
        </div> <!--close of navigation-->
        <div class="main">
            <div class="topbar">
                <div class="toggle" onclick="toggleMenu();"></div><!--close of toggle-->
                <div class="search">
                    <label>
                        <input type="text" placeholder="Search here">
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </label>
                </div><!--close of search-->
            </div><!--close of topbar-->
            
        
            <script>
            function toggleMenu(){
            let toggle = document.querySelector('.toggle');
            let navigation = document.querySelector('.navigation');
            let main = document.querySelector('.main');
            toggle.classList.toggle('active');
            navigation.classList.toggle('active');
            main.classList.toggle('active');
            
            }  
            </script>   
            <div class="card">
                <div class="card-image">
                    <img src="img/pro.jpeg" alt="">
                </div>
                <ul class="social-icons">
                    <li>
                        <a href="#">
                            <i class="fa fa-facebook-square" aria-hidden="true"></i>
                        </a>
                    </li>
               
                    <li>
                        <a href="#">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-telegram" aria-hidden="true"></i>
                        </a>
                    </li>
                </ul>
                <div class="details">
                    <h2>Tomas shelby</h2>  
                    <span class="job-title">Super Admin</span>
                </div>
            </div><!--close of card-->        
        </div><!--close of main-->
    </div> 

    <?php 
        if(isset($_POST['signout']))
        {
            session_destroy();
            header("admin login.php");
        }
    ?>
</body>
</html>
            
    
            
            
            
            
            
            
            
            
      
            
            
            
        

        
        
    
        
        
        
        