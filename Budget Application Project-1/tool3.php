<?php
?>

<!DOCTYPE html>
<html>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/tool3.css">
     

    <title>Income Calculator</title>
    <script type="text/javascript" src="js/navb.js"></script>
        <body>
                <div id="content">
                    <span class="slide">
                        <a href="#" onclick="openSlideMenu()">
                            <i><img id="mic" src="pic/menuic.png" width="40px" height="40px"></i>
                        </a>
                    </span>
        
                    <div id="menu" class="navb">
                        <a href="#" class="close" onclick="closeSideMenu()">
                            <i><img id="mic" src="pic/closeic.png" width="30px" height="30px"></i>
                        </a>
                        <a href="mainProject.php">Home</a>
                        <a href="tool1.php">Tool1</a>
                        <a href="tool2.php">Tool2</a>
                        <a class="active" href="tool3.php">Tool3</a>
                    </div>  
                    
                    <form id="calc">
                    <h1>Annual Gross Income Calculator</h1></br></br>
                    <div class="form-group">
                            <label for="calcGroup">Enter hourly wage.</label>
                            <input type="number" class="form-control" id="hourlyWage" placeholder="$">
                    </div>
                    <div class="form-group">
                            <label for="calcGroup">Enter work hours per week.</label>
                            <input type="number" class="form-control" id="workHours" placeholder="Hours">
                    </div>
                    <div class="form-group">
                        <label for="calcGroup">Enter work weeks per year.</label>
                        <input type="number" class="form-control" id="workWeeks" placeholder="Weeks">
                    </div>

                     </div>
            <h1>Annual Gross Income Calculator</h1></br></br>

                    <button type="button" class="btn btn-primary btn-small" onclick="calculate();">Calculate</button></br></br></br>

                    <h2><output name ="calcOutput" id="calcDisplay"></output></h2></br></br>

<p><a href="mainProject.php">Back to home</a></p>
                </form>
                 </div>
                
           


            <!-- Additional Bootstrap Functionality scripts -->
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        </body>
</html>