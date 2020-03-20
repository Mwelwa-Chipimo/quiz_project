<?php

//Link to quiz arrays.
require 'quiz_array.php';
?>


<!DOCTYPE html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="quizstylesheet.css">
        <link href="https://fonts.googleapis.com/css?family=Archivo+Black|Judson:400,700" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>

    <body>

        
        <header>
        <?php require 'header.php'; ?>
    
            <div class='header-container'>
                    <div class='header'>
                        <div class="hero flex-center">
                            <div class="hero-message">
                                <h1>FuzzFeed 20 Logo's Quiz <span class="badge badge-warning">New</span></h1>                               
                            </div>
                            <div class="hero-subheading">
                                <h2>Here are 20 logo's- We'll be impressed if you answer all of them correctly.</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         </header>
  
         <div class="container">
            <div class="form-container">

            <?php 
                if(isset($_POST['ans'])) {
                    $ans = $_POST['ans']; 
                    $score = 0;

                    foreach($dataset as $questionNum => $value) {

                        if ($ans[$questionNum] != $value['CorrectAnswer']) {
                        } else {
                            $score++;
                        }
                        }

                        echo '<h3> You managed to guess '.$score++.'/20 correctly.</h3><br/>';

                        if ($score < 11) {
                            echo "<h4>You only answered less than 50% of the questions correctly. Try taking the quiz again. You've got this!</h4>";
                        } elseif ($score >= 11 || $score < 15) {
                            echo '<h4>You answered 50% - 60% of all the questions. Nice try.</h4>';
                        } else {
                            echo "<h4>We're impressed! You answered more then 75% of the questions correctly. Well done!</h4>";
                        }

                    } else {
            ?>


            <div class="form-space">
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    <?php foreach($dataset as $questionNum => $value) { ?>
                        <div class="case">
                            <h1 style="color:#000000;"><?php echo $value['Question'] ; ?></h1>
                        </div>
                        
                        <div class='form-group row'>             
                            <img src="images/<?php echo $value['Question']?>.png" class="responsive" alt="image">
                        </div>

                        <?php   
                            foreach ($value['ans'] as $letter => $ans){
                            $label = 'question-'.$questionNum.'-ans-'.$letter;
                        ?>

                        <div class='form-group row'>
                            <div class="option-button">                   
                                <input id="<?php echo $label; ?>" type="radio" name="ans[<?php echo $questionNum; ?>]" value="<?php echo $letter;?>">
                                <label style="color:#4d4d4d;" for="<?php echo $label; ?>"><strong><?php echo $ans; ?></strong></label>
                            </div>      
                        </div>

                                <?php } ?>
                            <?php } ?>
                                <div class="row">
                                    <button type="submit" class="btn btn-warning btn-lg btn-block" name="submit">Submit Answers</button>
                                </div>
                        <?php } ?> 
                </form>
                </div>
            </div>
         </div>

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src="" async defer></script>
    </body>
</html>