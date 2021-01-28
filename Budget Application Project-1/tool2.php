<?php

?>

<!DOCTYPE html>
<html>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/tool2.css">
    

    <title>Interest tool</title>
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
                    </a></br>
                    <a href="mainProject.php">Home</a>
                    <a href="tool1.php">Tool1</a>
                    <a class="active" href="tool2.php">Tool2</a>
                    <a href="tool3.php">Tool3</a>
                </div>

                
                <form id="calc">
            <h1>Enter your loan\investment and interest (A = P(1+rt))</h1>

                   

                    <div class="form-group">
                        <label for="calcGroup">Enter principal.</label>
                        <input type="number" class="form-control" id="principal" placeholder="$">
                    </div>
                    <div class="form-group">
                        <label for="calcGroup2">Enter interest rate.</label>
                        <input type="number" class="form-control" id="interest" placeholder="%">
                    </div>
                    <div class="form-group">
                        <label for="calcGroup3">Enter time variable.</label>
                        <input type="number" class="form-control" id="timeVariable" placeholder="1">
                    </div>

                    <div class="form-group">
                        <label for="calcGroup4">Select time interval.</label>
                        <select multiple class="form-control" id="timeInterval">
                            <option value="d">Days</option>
                            <option value="w">Weeks</option>
                            <option value="m">Months</option>
                            <option value="q">Quarters</option>
                            <option value="y">Years</option>
                        </select>
                    </div>
                    </br>
                    <div class="form-group row">
                    <label for="example-date-input" class="col-2 col-form-label">Date</label>
                        <div class="col-10">
                            <input class="form-control" type="date" value="2011-08-19" id="example-date-input">
                        </div>
                    </div>

                    <button type="button" class="btn btn-primary btn-small" onclick="calculate();">Calculate</button></br></br>

                    <h2><output name ="calcOutput" id="calcDisplay"></output></h2>

                    <p><a href="mainProject.php">Back to home</a></p>
            </form>
            </div>


            



            <!-- Additional Bootstrap Functionality scripts -->
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        </body>
</html>