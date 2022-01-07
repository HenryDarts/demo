<?php include('register.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Registration system PHP and MySQL</title>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="reg.css">
</head>
<body>
    <div class="container">
        <div class="row">
            
            <div class="col-md-2">

            </div>

            <div class="col-md-8 ">
                
                <form class="pt-5" action="login.php" method="post">
                    <?php include('errors.php'); ?>
                    
                    <div class="header">
                        <h2 class="pb-2">სისტემაში შესვლა</h3>
                    </div>

                    <div class="form-group">
                        <label for="emailInp">ელ-ფოსტა</label>
                        <input type="email" class="form-control" id="emailInp" name="email">
                    </div>

                    <div class="form-group">
                        <label for="passInp">პაროლი</label>
                        <input type="password" class="form-control" id="passInp" name="password">
                    </div>
                    
                    <div class="input-group">
  		                <button type="submit" class="btn" name="login_user">შესვლა</button>
  	                </div>
                    
                    <p>
                    თუ არ ხარ რეგისტრირებული? <a href="main.php">დარეგისტრირდი აქ</a>
                    </p>    

                </form>

            </div>

            <div class="col-md-2">

            </div>

        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF"
        crossorigin="anonymous"></script>
</body>
</html>