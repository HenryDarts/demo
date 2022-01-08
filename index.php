<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>ციფრული სამოქალაქო განათლების ოლიმპიადა მდგრადი განვითარებისთვის</title>
</head>

<body>

    <header>

        <!--სლაიდშოუ-->
        <div id="carControls" class="carousel slide" data-ride="carousel">>

            <div class="carousel-inner">

                <!--სტატიების ლინკზე გადასასვლელი-->
                <div class="carousel-item active">

                    <img class="w-100" src="1.jpg" alt="First slide">

                    <div class="carousel-caption">
                        <h5 style="color:black;">„ციფრული SDG-ოლიმპიადა სამოქალაქო განათლებისთვის საქართველოში“</h5>
                        <button type="button" class="btn btn-success btn-lg"><a href="articles.php" style="color:white;">სტატიების ნახვა</a></button>
                    </div>

                </div>


            <!--წინაზე გადასასვლელი-->
            <a class="carousel-control-prev" role="button" data-slide="prev" href="#carControls">
                <span class="carousel-control-prev-icon"></span>
                <span class="sr-only">Previous</span>
            </a>

            <!--შემდეგზე გადასასვლელი-->
            <a class="carousel-control-next" role="button" data-slide="next" href="#carControls">
                <span class="carousel-control-next-icon"></span>
                <span class="sr-only">Next</span>
            </a>

        </div>
        <!--სლაიდშოუ-->


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
                    <a href="login.php">სისტემაში შესვლა</a>
                </form>

            </div>
        </nav>
        <!--ნავბარი, სანავიგაციო-->
        
    </header>

    <!--ჩვენს შესახებ-->
    <div>
        <div class="bg-light">
            <div class="container py-5">
                <div class="row h-100 align-items-center py-5">

                    <div class="col-lg-6">
                        <h1 class="display-4">პროექტის შესახებ</h1>
                        <p class="lead text-muted mb-0">2021 წლის სექტემბრიდან, ფორუმი ორგანიზაციასთან „Jaan Tõnnissoni Instituut“ (ესტონეთი) თანამშრომლობით ახორციელებს პროექტს „ციფრული სამოქალაქო განათლების ოლიმპიადა მდგრადი განვითარებისთვის“</p>
                    </div>

                    <div class="col-lg-6 d-none d-lg-block"><img
                            src="https://bootstrapious.com/i/snippets/sn-about/illus.png" alt="" class="img-fluid">
                    </div>

                </div>
            </div>
        </div>

        <div class="bg-white py-5">

            <div class="container py-5">
                
                <!--ტექსტი/აღწერა 1-->
                <div class="row align-items-center mb-5">
                    <div class="col-lg-6 order-2 order-lg-1"><i class="fa fa-bar-chart fa-2x mb-3 text-primary"></i>
                        <p class="font-italic text-muted mb-4">
                        ინიციატივის ფინანსური მხარდამჭერია ესტონეთის საგარეო საქმეთა სამინისტრო. პროექტი მიზნად ისახავს მოსწავლეების კომპეტენციის გაზრდას მდგრადი განვითარების მიზნების (SDG) შესახებ
                        </p>
                    </div>
                
                    <div class="col-lg-5 px-5 mx-auto order-1 order-lg-2"><img
                            src="https://bootstrapious.com/i/snippets/sn-about/img-1.jpg" alt=""
                            class="img-fluid mb-4 mb-lg-0">
                    </div>
                </div>
                <!--ტექსტი/აღწერა 1-->

                <!--ტექსტი/აღწერა 2-->
                <div class="row align-items-center">
                    <div class="col-lg-5 px-5 mx-auto"><img
                            src="https://bootstrapious.com/i/snippets/sn-about/img-2.jpg" alt=""
                            class="img-fluid mb-4 mb-lg-0">
                    </div>
                
                    <div class="col-lg-6"><i class="fa fa-leaf fa-2x mb-3 text-primary"></i>
                        <p class="font-italic text-muted mb-4">
                        100-ზე მეტი სკოლის 2000-ზე მეტი მოსწავლე შეძლებს მონაწილეობა მიიღოს ციფრულ ოლიმპიადაში.
წარმატებული მოსწავლეები მონაწილეობას მიიღებენ საზაფხულო ბანაკში, ხოლო მათი მასწავლებლები ესტონეთში სასწავლო ვიზიტით გაემგზავრებიან.
                        </p>
                        <a href="articles.php" class="btn btn-light px-5 rounded-pill shadow-sm">
                            იხილე სტატიები
                        </a>
                    </div>
                </div>
                <!--ტექსტი/აღწერა 2-->
            </div>
        </div>

        <!--გუნდი-->


    </div>
    <!--ჩვენს შესახებ-->


    <div class="container-fluid bg-dark">
        <div class="row text-center">

            <div class="col-md-7 text-light">
                <p>რესურსებზე წვდომის მისაღებად გაიარეთ რეგისტრაცია...</p>
            </div>

            <div class="col-md-5">
                <button type="button" class="btn-primary"><a href="main.php" style="color:white;">რეგისტრაცია</a></button>
            </div>

        </div>
    </div>


    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>

</html>
