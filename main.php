<?php include('register.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>რეგისტრაცია</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="reg.css">    
</head>

<body>
    <div class="container">
        <div class="row">
            
            <div class="col-md-2">

            </div>

            <div class="col-md-8 ">
                
                <form class="pt-5" action="main.php" method="post">
                    <?php include('errors.php'); ?>
                    
                    <div class="header">
                        <h2 class="pb-2">სარეგისტრაციო ფორმა</h3>
                    </div>

                    <div class="form-group">
                        <label for="nameInp">სახელი, გვარი</label>
                        <input type="text" class="form-control" id="nameInp" name="username" value="<?php echo $username; ?>">
                    </div>

                    <div class="form-group">
                        <label for="emailInp">ელ-ფოსტა</label>
                        <input type="email" class="form-control" id="emailInp" name="email" value="<?php echo $email; ?>">
                    </div>

                    <div class="form-group">
                        <label for="promo">პრომო კოდი</label>
                        <input type="text" class="form-control" id="promo" name="promo">
                    </div>
                   
                    <div class="form-group">
                        <label for="user_type">მასწავლებელი ხართ თუ მოსწავლე?</label>
                        <select class="mdb-select md-form" id="user_type" name="user_type" size="3">
                            <option value="" disabled selected></option>
                            <option value="Student">მოსწავლე</option>
                            <option value="Teacher">მასწავლებელი</option>
                         </select>
                                            
                    </div>   

                    <div class="form-group">
                        <label for="passInp">პაროლი</label>
                        <input type="password" class="form-control" id="passInp" name="password_1">
                    </div>

                    <div class="form-group">
                        <label for="repPassInp">გაიმეორეთ პაროლი</label>
                        <input type="password" class="form-control" id="repPassInp" name="password_2">
                    </div>

                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="valEm">
                        <label class="form-check-label" for="valEm"><small>თანახმა ვარ, რომ გამომიგზავნოთ რესგისტრაციის ვერიფიკაციის მეილი</small></label>
                    </div>
                    
                    <button type="submit" class="btn btn-primary" name="reg_user">რესგისტრაცია</button>
                    
                    <p>
                    თუ უკვე რეგისტრირებული ხარ? <a href="login.php">მიჰყევი ბმულს</a>
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
