<?php 
  session_start(); 

  if (!isset($_SESSION['email'])) {
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['email']);
  	header("location: index.php");
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ციფრული სამოქალაქო განათლების ოლიმპიადა მდგრადი განვითარებისთვის</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="article.css">
</head>

<body>
    <?php  if (isset($_SESSION['email'])) : ?>

    <!--ნავბარი, სანავიგაციო-->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav mr-auto">

                    <li class="nav-item">
                        <a href="index.php" class="nav-link">
                            მთავარი გვერდი
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="articles.php" class="nav-link">
                            სტატიები
                        </a>
                    </li>

                </ul>

            <form class="form-inline my-2 my-md-1">
                <a href="articles.php?logout='1'">სისტემიდან გამოსვლა</a>
            </form>

        </div>
    </nav>
    <!--ნავბარი, სანავიგაციო-->

    <!--მთავარი // სტატიების ჩამონათვალი-->
    <div id="rs-team" class="rs-team fullwidth-team pt-5">
        <div class="container">
            <div class="row">

                <!--პირველი-->
                <div class="col-lg-4 col-md-6">
                    <div class="team-item">

                        <!--სურათი და ტექსტი // ნორმალურ მდგომარეობაში-->
                        <div class="team-img">
                            <img src="arts/1.png" alt="text image">

                            <div class="normal-text">
                                <!--სათაური-->
                                <span class="subtitle"><b>მდგრადი განვითარების მიზანი 1</b></span>
                            </div>

                        </div>
                        <!--სურათი და ტექსტი // ნორმალურ მდგომარეობაში-->

                        <!--მაუსის დადებაზე-->
                        <div class="team-content">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <div class="team-details">
                                        <h4 class="team-name">
                                            <a data-toggle="modal" data-target="#md1">სიღარიბის ყველა ფორმის აღმოფხრა</a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--მაუსის დადებაზე-->

                    </div>`
                </div>
                <!--პირველი-->

                <!--მეორე-->
                <div class="col-lg-4 col-md-6">
                    <div class="team-item">

                        <!--სურათი და ტექსტი // ნორმალურ მდგომარეობაში-->
                        <div class="team-img">
                            <img src="arts/2.png" alt="text image">
                            <div class="normal-text">
                                <!--სათაური-->
                                <span class="subtitle"><b>მდგრადი განვითარების მიზანი 2</b></span>
                            </div>

                        </div>
                        <!--სურათი და ტექსტი // ნორმალურ მდგომარეობაში-->

                        <!--მაუსის დადებაზე-->
                        <div class="team-content">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <div class="team-details">
                                        <h4 class="team-name">
                                            <a data-toggle="modal" data-target="#md2">შიმშილის აღმოფხვრა, სასურსათო უსაფრთხოებისა და გაუმჯობესებული კვების მიღწევა და მდგრადი სოფლის მეურნეობის ხელშეწყობა</a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--მაუსის დადებაზე-->

                    </div>`
                </div>
                <!--მეორე-->

                <!--მესამე-->
                <div class="col-lg-4 col-md-6">
                    <div class="team-item">

                        <!--სურათი და ტექსტი // ნორმალურ მდგომარეობაში-->
                        <div class="team-img">
                            <img src="arts/3.png" alt="text image">

                            <div class="normal-text">
                                <!--სათაური-->
                                <span class="subtitle"><b>მდგრადი განვითარების მიზანი 3</b></span>
                            </div>

                        </div>
                        <!--სურათი და ტექსტი // ნორმალურ მდგომარეობაში-->

                        <!--მაუსის დადებაზე-->
                        <div class="team-content">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <div class="team-details">
                                        <h4 class="team-name">
                                            <a data-toggle="modal" data-target="#md3">ჯანმრთელი ცხოვრების წესის ხელშეწყობა და კეთილდღეობის უზრუნველყოფა ყველასთვის, ყველა ასაკში</a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--მაუსის დადებაზე-->

                    </div>`
                </div>
                <!--მესამე-->

                <!--მეოთხე-->
                <div class="col-lg-4 col-md-6">
                    <div class="team-item">

                        <!--სურათი და ტექსტი // ნორმალურ მდგომარეობაში-->
                        <div class="team-img">
                            <img src="arts/4.png" alt="text image">

                            <div class="normal-text">
                                <!--სათაური-->
                                <span class="subtitle"><b>მდგრადი განვითარების მიზანი 4</b></span>
                            </div>

                        </div>
                        <!--სურათი და ტექსტი // ნორმალურ მდგომარეობაში-->

                        <!--მაუსის დადებაზე-->
                        <div class="team-content">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <div class="team-details">
                                        <h4 class="team-name">
                                            <a data-toggle="modal" data-target="#md4">ინკლუზიური და თანასწორი განათლების უზრუნველყოფა და უწყვეტი სწავლის შესაძლებლობის ხელშეწყობაა ყველასათვის.</a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--მაუსის დადებაზე-->

                    </div>`
                </div>
                <!--მეოთხე-->           
                
                <!--მეხუთე-->
                <div class="col-lg-4 col-md-6">
                    <div class="team-item">

                        <!--სურათი და ტექსტი // ნორმალურ მდგომარეობაში-->
                        <div class="team-img">
                            <img src="arts/5.png" alt="text image">

                            <div class="normal-text">
                                <!--სათაური-->
                                <span class="subtitle"><b>მდგრადი განვითარების მიზანი 5</b></span>
                            </div>

                        </div>
                        <!--სურათი და ტექსტი // ნორმალურ მდგომარეობაში-->

                        <!--მაუსის დადებაზე-->
                        <div class="team-content">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <div class="team-details">
                                        <h4 class="team-name">
                                            <a data-toggle="modal" data-target="#md5">გენდერული თანასწორობის მიღწევა და ყველა ქალისა და გოგონას გაძლიერება.</a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--მაუსის დადებაზე-->

                    </div>`
                </div>
                <!--მეხუთე-->  

                <!--მეექვსე-->
                <div class="col-lg-4 col-md-6">
                    <div class="team-item">

                        <!--სურათი და ტექსტი // ნორმალურ მდგომარეობაში-->
                        <div class="team-img">
                            <img src="arts/6.png" alt="text image">

                            <div class="normal-text">
                                <!--სათაური-->
                                <span class="subtitle"><b>მდგრადი განვითარების მიზანი 6</b></span>
                            </div>

                        </div>
                        <!--სურათი და ტექსტი // ნორმალურ მდგომარეობაში-->

                        <!--მაუსის დადებაზე-->
                        <div class="team-content">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <div class="team-details">
                                        <h4 class="team-name">
                                            <a data-toggle="modal" data-target="#md6">წყლის რესურსების მდგრადი მართვისა და სანიტარიაზე ხელმისაწვდომობის საყოველთაო უზრუნველყოფა.</a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--მაუსის დადებაზე-->

                    </div>`
                </div>
                <!--მეექვსე-->  

                <!--მეშვიდე-->
                <div class="col-lg-4 col-md-6">
                    <div class="team-item">

                        <!--სურათი და ტექსტი // ნორმალურ მდგომარეობაში-->
                        <div class="team-img">
                            <img src="arts/7.png" alt="text image">

                            <div class="normal-text">
                                <!--სათაური-->
                                <span class="subtitle"><b>მდგრადი განვითარების მიზანი 7</b></span>
                            </div>

                        </div>
                        <!--სურათი და ტექსტი // ნორმალურ მდგომარეობაში-->

                        <!--მაუსის დადებაზე-->
                        <div class="team-content">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <div class="team-details">
                                        <h4 class="team-name">
                                            <a data-toggle="modal" data-target="#md7">წყლის რესურსების მდგრადი მართვისა და სანიტარიაზე ხელმისაწვდომობის საყოველთაო უზრუნველყოფა.</a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--მაუსის დადებაზე-->

                    </div>`
                </div>
                <!--მეშვიდე-->
                
                <!--მერვე-->
                <div class="col-lg-4 col-md-6">
                    <div class="team-item">

                        <!--სურათი და ტექსტი // ნორმალურ მდგომარეობაში-->
                        <div class="team-img">
                            <img src="arts/8.png" alt="text image">

                            <div class="normal-text">
                                <!--სათაური-->
                                <span class="subtitle"><b>მდგრადი განვითარების მიზანი 8</b></span>
                            </div>

                        </div>
                        <!--სურათი და ტექსტი // ნორმალურ მდგომარეობაში-->

                        <!--მაუსის დადებაზე-->
                        <div class="team-content">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <div class="team-details">
                                        <h4 class="team-name">
                                            <a data-toggle="modal" data-target="#md8">წყლის რესურსების მდგრადი მართვისა და სანიტარიაზე ხელმისაწვდომობის საყოველთაო უზრუნველყოფა.</a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--მაუსის დადებაზე-->

                    </div>`
                </div>
                <!--მერვე--> 

                <!--ცხრა-->
                <div class="col-lg-4 col-md-6">
                    <div class="team-item">

                        <!--სურათი და ტექსტი // ნორმალურ მდგომარეობაში-->
                        <div class="team-img">
                            <img src="arts/9.png" alt="text image">

                            <div class="normal-text">
                                <!--სათაური-->
                                <span class="subtitle"><b>მდგრადი განვითარების მიზანი 9</b></span>
                            </div>

                        </div>
                        <!--სურათი და ტექსტი // ნორმალურ მდგომარეობაში-->

                        <!--მაუსის დადებაზე-->
                        <div class="team-content">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <div class="team-details">
                                        <h4 class="team-name">
                                            <a data-toggle="modal" data-target="#md9">წყლის რესურსების მდგრადი მართვისა და სანიტარიაზე ხელმისაწვდომობის საყოველთაო უზრუნველყოფა.</a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--მაუსის დადებაზე-->

                    </div>`
                </div>
                <!--ცხრა--> 

                <!--ათი-->
                <div class="col-lg-4 col-md-6">
                    <div class="team-item">

                        <!--სურათი და ტექსტი // ნორმალურ მდგომარეობაში-->
                        <div class="team-img">
                            <img src="arts/10.png" alt="text image">

                            <div class="normal-text">
                                <!--სათაური-->
                                <span class="subtitle"><b>მდგრადი განვითარების მიზანი 10</b></span>
                            </div>

                        </div>
                        <!--სურათი და ტექსტი // ნორმალურ მდგომარეობაში-->

                        <!--მაუსის დადებაზე-->
                        <div class="team-content">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <div class="team-details">
                                        <h4 class="team-name">
                                            <a data-toggle="modal" data-target="#md10">წყლის რესურსების მდგრადი მართვისა და სანიტარიაზე ხელმისაწვდომობის საყოველთაო უზრუნველყოფა.</a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--მაუსის დადებაზე-->

                    </div>`
                </div>
                <!--ათი--> 

                <!--11-->
                <div class="col-lg-4 col-md-6">
                    <div class="team-item">

                        <!--სურათი და ტექსტი // ნორმალურ მდგომარეობაში-->
                        <div class="team-img">
                            <img src="arts/11.png" alt="text image">

                            <div class="normal-text">
                                <!--სათაური-->
                                <span class="subtitle"><b>მდგრადი განვითარების მიზანი 11</b></span>
                            </div>

                        </div>
                        <!--სურათი და ტექსტი // ნორმალურ მდგომარეობაში-->

                        <!--მაუსის დადებაზე-->
                        <div class="team-content">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <div class="team-details">
                                        <h4 class="team-name">
                                            <a data-toggle="modal" data-target="#md11">წყლის რესურსების მდგრადი მართვისა და სანიტარიაზე ხელმისაწვდომობის საყოველთაო უზრუნველყოფა.</a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--მაუსის დადებაზე-->

                    </div>`
                </div>
                <!--11--> 
                
                <!--12-->
                <div class="col-lg-4 col-md-6">
                    <div class="team-item">

                        <!--სურათი და ტექსტი // ნორმალურ მდგომარეობაში-->
                        <div class="team-img">
                            <img src="arts/12.png" alt="text image">

                            <div class="normal-text">
                                <!--სათაური-->
                                <span class="subtitle"><b>მდგრადი განვითარების მიზანი 12</b></span>
                            </div>

                        </div>
                        <!--სურათი და ტექსტი // ნორმალურ მდგომარეობაში-->

                        <!--მაუსის დადებაზე-->
                        <div class="team-content">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <div class="team-details">
                                        <h4 class="team-name">
                                            <a data-toggle="modal" data-target="#md12">წყლის რესურსების მდგრადი მართვისა და სანიტარიაზე ხელმისაწვდომობის საყოველთაო უზრუნველყოფა.</a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--მაუსის დადებაზე-->

                    </div>`
                </div>
                <!--12--> 

                <!--13-->
                <div class="col-lg-4 col-md-6">
                    <div class="team-item">

                        <!--სურათი და ტექსტი // ნორმალურ მდგომარეობაში-->
                        <div class="team-img">
                            <img src="arts/13.png" alt="text image">

                            <div class="normal-text">
                                <!--სათაური-->
                                <span class="subtitle"><b>მდგრადი განვითარების მიზანი 13</b></span>
                            </div>

                        </div>
                        <!--სურათი და ტექსტი // ნორმალურ მდგომარეობაში-->

                        <!--მაუსის დადებაზე-->
                        <div class="team-content">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <div class="team-details">
                                        <h4 class="team-name">
                                            <a data-toggle="modal" data-target="#md13">წყლის რესურსების მდგრადი მართვისა და სანიტარიაზე ხელმისაწვდომობის საყოველთაო უზრუნველყოფა.</a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--მაუსის დადებაზე-->

                    </div>`
                </div>
                <!--13--> 
                
                <!--14-->
                <div class="col-lg-4 col-md-6">
                    <div class="team-item">

                        <!--სურათი და ტექსტი // ნორმალურ მდგომარეობაში-->
                        <div class="team-img">
                            <img src="arts/14.png" alt="text image">

                            <div class="normal-text">
                                <!--სათაური-->
                                <span class="subtitle"><b>მდგრადი განვითარების მიზანი 14</b></span>
                            </div>

                        </div>
                        <!--სურათი და ტექსტი // ნორმალურ მდგომარეობაში-->

                        <!--მაუსის დადებაზე-->
                        <div class="team-content">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <div class="team-details">
                                        <h4 class="team-name">
                                            <a data-toggle="modal" data-target="#md14">წყლის რესურსების მდგრადი მართვისა და სანიტარიაზე ხელმისაწვდომობის საყოველთაო უზრუნველყოფა.</a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--მაუსის დადებაზე-->

                    </div>`
                </div>
                <!--14--> 

                <!--15-->
                <div class="col-lg-4 col-md-6">
                    <div class="team-item">

                        <!--სურათი და ტექსტი // ნორმალურ მდგომარეობაში-->
                        <div class="team-img">
                            <img src="arts/15.png" alt="text image">

                            <div class="normal-text">
                                <!--სათაური-->
                                <span class="subtitle"><b>მდგრადი განვითარების მიზანი 15</b></span>
                            </div>

                        </div>
                        <!--სურათი და ტექსტი // ნორმალურ მდგომარეობაში-->

                        <!--მაუსის დადებაზე-->
                        <div class="team-content">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <div class="team-details">
                                        <h4 class="team-name">
                                            <a data-toggle="modal" data-target="#md15">წყლის რესურსების მდგრადი მართვისა და სანიტარიაზე ხელმისაწვდომობის საყოველთაო უზრუნველყოფა.</a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--მაუსის დადებაზე-->

                    </div>`
                </div>
                <!--15--> 

                <!--16-->
                <div class="col-lg-4 col-md-6">
                    <div class="team-item">

                        <!--სურათი და ტექსტი // ნორმალურ მდგომარეობაში-->
                        <div class="team-img">
                            <img src="arts/16.png" alt="text image">

                            <div class="normal-text">
                                <!--სათაური-->
                                <span class="subtitle"><b>მდგრადი განვითარების მიზანი 16</b></span>
                            </div>

                        </div>
                        <!--სურათი და ტექსტი // ნორმალურ მდგომარეობაში-->

                        <!--მაუსის დადებაზე-->
                        <div class="team-content">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <div class="team-details">
                                        <h4 class="team-name">
                                            <a data-toggle="modal" data-target="#md16">წყლის რესურსების მდგრადი მართვისა და სანიტარიაზე ხელმისაწვდომობის საყოველთაო უზრუნველყოფა.</a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--მაუსის დადებაზე-->

                    </div>`
                </div>
                <!--16-->
                
                <!--17-->
                <div class="col-lg-4 col-md-6">
                    <div class="team-item">

                        <!--სურათი და ტექსტი // ნორმალურ მდგომარეობაში-->
                        <div class="team-img">
                            <img src="arts/17.png" alt="text image">

                            <div class="normal-text">
                                <!--სათაური-->
                                <span class="subtitle"><b>მდგრადი განვითარების მიზანი 17</b></span>
                            </div>

                        </div>
                        <!--სურათი და ტექსტი // ნორმალურ მდგომარეობაში-->

                        <!--მაუსის დადებაზე-->
                        <div class="team-content">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <div class="team-details">
                                        <h4 class="team-name">
                                            <a data-toggle="modal" data-target="#md17">წყლის რესურსების მდგრადი მართვისა და სანიტარიაზე ხელმისაწვდომობის საყოველთაო უზრუნველყოფა.</a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--მაუსის დადებაზე-->

                    </div>`
                </div>
                <!--17--> 


    <!--მთავარი // სტატიების ჩამონათვალი-->

    <!--Modal 1-->
    <div class="modal fade" id="md1">

        <div class="modal-dialog modal-xl">
            <div class="modal-content">

                <div class="modal-header">
                    <h3>სიღარიბის ყველა ფორმის აღმოფხრა</h3>
                </div>

                <div class="modal-body">
                    <embed src="pdfs/1.pdf" frameborder="0" width="100%" height="720pc">
                </div>

            </div>
        </div>

    </div>
    <!--Modal 1-->

    <!--Modal 2-->
    <div class="modal fade" id="md2">

        <div class="modal-dialog modal-xl">
            <div class="modal-content">

                <div class="modal-header">
                    <h3>შიმშილის აღმოფხვრა, სასურსათო უსაფრთხოებისა და გაუმჯობესებული კვების მიღწევა და მდგრადი სოფლის მეურნეობის ხელშეწყობა</h3>
                </div>

                <div class="modal-body">
                    <embed src="pdfs/2.pdf" frameborder="0" width="100%" height="720pc">
                </div>

            </div>
        </div>

    </div>
    <!--Modal 2-->    

    <!--Modal 3-->
    <div class="modal fade" id="md3">

        <div class="modal-dialog modal-xl">
            <div class="modal-content">

                <div class="modal-header">
                    <h3>ჯანმრთელი ცხოვრების წესის ხელშეწყობა და კეთილდღეობის უზრუნველყოფა ყველასთვის, ყველა ასაკში</h3>
                </div>

                <div class="modal-body">
                    <embed src="pdfs/3.pdf" frameborder="0" width="100%" height="720pc">
                </div>

            </div>
        </div>

    </div>
    <!--Modal 3-->

    <!--Modal 4-->
    <div class="modal fade" id="md4">

        <div class="modal-dialog modal-xl">
            <div class="modal-content">

                <div class="modal-header">
                    <h3>ინკლუზიური და თანასწორი განათლების უზრუნველყოფა და უწყვეტი სწავლის შესაძლებლობის ხელშეწყობაა ყველასათვის.</h3>
                </div>

                <div class="modal-body">
                    <embed src="pdfs/4.pdf" frameborder="0" width="100%" height="720pc">
                </div>

            </div>
        </div>

    </div>
    <!--Modal 4-->    

    <!--Modal 5-->
    <div class="modal fade" id="md5">

        <div class="modal-dialog modal-xl">
            <div class="modal-content">

                <div class="modal-header">
                    <h3>გენდერული თანასწორობის მიღწევა და ყველა ქალისა და გოგონას გაძლიერება.</h3>
                </div>

                <div class="modal-body">
                    <embed src="pdfs/5.pdf" frameborder="0" width="100%" height="720pc">
                </div>

            </div>
        </div>

    </div>
    <!--Modal 5-->

    <!--Modal 6-->
    <div class="modal fade" id="md6">

        <div class="modal-dialog modal-xl">
            <div class="modal-content">

                <div class="modal-header">
                    <h3>წყლის რესურსების მდგრადი მართვისა და სანიტარიაზე ხელმისაწვდომობის საყოველთაო უზრუნველყოფა.</h3>
                </div>

                <div class="modal-body">
                    <embed src="pdfs/6.pdf" frameborder="0" width="100%" height="720pc">
                </div>

            </div>
        </div>

    </div>
    <!--Modal 6-->

    <!--Modal 7-->
    <div class="modal fade" id="md7">

        <div class="modal-dialog modal-xl">
            <div class="modal-content">

                <div class="modal-header">
                    <h3>წყლის რესურსების მდგრადი მართვისა და სანიტარიაზე ხელმისაწვდომობის საყოველთაო უზრუნველყოფა.</h3>
                </div>

                <div class="modal-body">
                    <embed src="pdfs/7.pdf" frameborder="0" width="100%" height="720pc">
                </div>

            </div>
        </div>

    </div>
    <!--Modal 7-->

    <!--Modal 8-->
    <div class="modal fade" id="md8">

        <div class="modal-dialog modal-xl">
            <div class="modal-content">

                <div class="modal-header">
                    <h3>წყლის რესურსების მდგრადი მართვისა და სანიტარიაზე ხელმისაწვდომობის საყოველთაო უზრუნველყოფა.</h3>
                </div>

                <div class="modal-body">
                    <embed src="pdfs/8.pdf" frameborder="0" width="100%" height="720pc">
                </div>

            </div>
        </div>

    </div>
    <!--Modal 8-->

    <!--Modal 9-->
    <div class="modal fade" id="md9">

        <div class="modal-dialog modal-xl">
            <div class="modal-content">

                <div class="modal-header">
                    <h3>წყლის რესურსების მდგრადი მართვისა და სანიტარიაზე ხელმისაწვდომობის საყოველთაო უზრუნველყოფა.</h3>
                </div>

                <div class="modal-body">
                    <embed src="pdfs/9.pdf" frameborder="0" width="100%" height="720pc">
                </div>

            </div>
        </div>

    </div>
    <!--Modal 9-->

    <!--Modal 10-->
    <div class="modal fade" id="md10">

        <div class="modal-dialog modal-xl">
            <div class="modal-content">

                <div class="modal-header">
                    <h3>წყლის რესურსების მდგრადი მართვისა და სანიტარიაზე ხელმისაწვდომობის საყოველთაო უზრუნველყოფა.</h3>
                </div>

                <div class="modal-body">
                    <embed src="pdfs/10.pdf" frameborder="0" width="100%" height="720pc">
                </div>

            </div>
        </div>

    </div>
    <!--Modal 10-->

    <!--Modal 11-->
    <div class="modal fade" id="md11">

        <div class="modal-dialog modal-xl">
            <div class="modal-content">

                <div class="modal-header">
                    <h3>წყლის რესურსების მდგრადი მართვისა და სანიტარიაზე ხელმისაწვდომობის საყოველთაო უზრუნველყოფა.</h3>
                </div>

                <div class="modal-body">
                    <embed src="pdfs/11.pdf" frameborder="0" width="100%" height="720pc">
                </div>

            </div>
        </div>

    </div>
    <!--Modal 11-->

    <!--Modal 12-->
    <div class="modal fade" id="md12">

        <div class="modal-dialog modal-xl">
            <div class="modal-content">

                <div class="modal-header">
                    <h3>წყლის რესურსების მდგრადი მართვისა და სანიტარიაზე ხელმისაწვდომობის საყოველთაო უზრუნველყოფა.</h3>
                </div>

                <div class="modal-body">
                    <embed src="pdfs/12.pdf" frameborder="0" width="100%" height="720pc">
                </div>

            </div>
        </div>

    </div>
    <!--Modal 12-->

    <!--Modal 13-->
    <div class="modal fade" id="md13">

        <div class="modal-dialog modal-xl">
            <div class="modal-content">

                <div class="modal-header">
                    <h3>წყლის რესურსების მდგრადი მართვისა და სანიტარიაზე ხელმისაწვდომობის საყოველთაო უზრუნველყოფა.</h3>
                </div>

                <div class="modal-body">
                    <embed src="pdfs/13.pdf" frameborder="0" width="100%" height="720pc">
                </div>

            </div>
        </div>

    </div>
    <!--Modal 13-->

    <!--Modal 14-->
    <div class="modal fade" id="md14">

        <div class="modal-dialog modal-xl">
            <div class="modal-content">

                <div class="modal-header">
                    <h3>წყლის რესურსების მდგრადი მართვისა და სანიტარიაზე ხელმისაწვდომობის საყოველთაო უზრუნველყოფა.</h3>
                </div>

                <div class="modal-body">
                    <embed src="pdfs/14.pdf" frameborder="0" width="100%" height="720pc">
                </div>

            </div>
        </div>

    </div>
    <!--Modal 14-->

    <!--Modal 15-->
    <div class="modal fade" id="md15">

        <div class="modal-dialog modal-xl">
            <div class="modal-content">

                <div class="modal-header">
                    <h3>წყლის რესურსების მდგრადი მართვისა და სანიტარიაზე ხელმისაწვდომობის საყოველთაო უზრუნველყოფა.</h3>
                </div>

                <div class="modal-body">
                    <embed src="pdfs/15.pdf" frameborder="0" width="100%" height="720pc">
                </div>

            </div>
        </div>

    </div>
    <!--Modal 15-->

    <!--Modal 16-->
    <div class="modal fade" id="md16">

        <div class="modal-dialog modal-xl">
            <div class="modal-content">

                <div class="modal-header">
                    <h3>წყლის რესურსების მდგრადი მართვისა და სანიტარიაზე ხელმისაწვდომობის საყოველთაო უზრუნველყოფა.</h3>
                </div>

                <div class="modal-body">
                    <embed src="pdfs/16.pdf" frameborder="0" width="100%" height="720pc">
                </div>

            </div>
        </div>

    </div>
    <!--Modal 16-->

    <!--Modal 17-->
    <div class="modal fade" id="md17">

        <div class="modal-dialog modal-xl">
            <div class="modal-content">

                <div class="modal-header">
                    <h3>წყლის რესურსების მდგრადი მართვისა და სანიტარიაზე ხელმისაწვდომობის საყოველთაო უზრუნველყოფა.</h3>
                </div>

                <div class="modal-body">
                    <embed src="pdfs/17.pdf" frameborder="0" width="100%" height="720pc">
                </div>

            </div>
        </div>

    </div>
    <!--Modal 17-->
    <?php endif ?>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF"
        crossorigin="anonymous"></script>

</html>
