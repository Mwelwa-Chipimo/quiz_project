<!DOCTYPE html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>

    <body>
        <header>


            <!-- Navbar -->

        
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">FuzzzFeed</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                        <div class="navbar-toolbar">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Quizzes</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">News</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">TV & Movies</a>
                                </li>
                            </ul>
                        </div> 
                </div>
            </nav>


            <!-- jumbotron -->
        

            <div class="jumbotron jumbotron-fluid">
                <div class="container text-center">
                  <h1 class="display-4">FuzzzFeed Logo Quiz</h1>
                  <p class="lead">We bet you can't correctly guess all 20 of these logo's.</p>
                </div>
              </div>

        </header>

        <?php 

            $questions = array(array());


        ?>


        <section>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">


                    <div class="question-1">
                        <div class='container'>

                            <h4>Question 1</h4>
                            <p>This is question 1</p>

                        
                            <div class='row'>
                                <img src="images/dangote-logo.png" alt="dangote logo">
                            </div>
                        

                        
                              <div class='col-lg-12 d-inline-flex border'>
                                    <div class='radio-toolbar'>
                                        <input id="option-1" type="radio" name="q-1" >
                                        <label for="option-1" class="radio-label">Option 1</label>
                                    </div>
                                 <div class='row'>
                                 <div class='radio-toolbar'>
                                        <input id="option-2" type="radio" name="q-1" >
                                        <label for="option-2" class="radio-label">Option 2</label>
                                    </div>
                                </div>
                            </div>



                            <div class='row'>
                                <div class='col-lg-12 d-inline-flex'>
                                    <div class='radio-toolbar'>
                                        <input id="option-3" type="radio" name="q-1" >
                                        <label for="option-3" class="radio-label">Option 3</label>
                                    </div>
                                </div>

                                
                                    <div class='radio-toolbar'>
                                        <input id="option-4" type="radio" name="q-1" >
                                        <label for="option-4" class="radio-label">Option 4</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
            </form>
        </section>


        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src="" async defer></script>
    </body>
</html>