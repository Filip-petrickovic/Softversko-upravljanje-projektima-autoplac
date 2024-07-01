<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Auto Plac</title>
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans|Roboto+Mono|Work+Sans:400,700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/autoplac%20mvc%20projekat/public/css/style.css">
</head>
<body>
    
    <?php 
        include(__DIR__ . '/../../../components/header.php');
        ?>
    <div class="container">
        <main role="main" class="pb-3">
            <div class="main">
                <div style="background: center/cover linear-gradient(270deg, rgba(0, 0, 0, 0.1) 0%, rgba(0, 0, 0, 0.4) 100%), center/cover url('../../images/<?php echo $data['oglas']["url_slike"];?>'" class=" poster row rounded-lg-md flex justify-content-start align-items-end mt-5">
                    <div class="column mt-5">
                        <div class="ms-3  text-weight-bold">
                            <p class="header2 text-light mb-4"><?php echo "".$data['oglas']["godina"]." ".$data['oglas']["marka"]." ".$data['oglas']["model"];?></p>
                        </div>
                    </div>
                </div>
                <div class="row mt-5 mb-5 d-flex">
                    <div class="col-12 col-md-6">
                        <img class ="col-12 rounded" src="../../images/<?php echo $data['oglas']["url_slike"];?>" alt="">
                    </div>
                    <div class="col-12 col-md-6">
                        <p class="header3 pt-3 pb-3 text-center"><?php echo $data['oglas']["naslov"];?></p>
                        <div class="row col-12">
                            <div class="col-6 kolona">
                                <div class="row mt-1 mb-1 pt-5 pb-5 text-center fw-bold justify-content-center">
                                        <p class="text-primary">Marka:</p>
                                        <?php echo $data['oglas']["marka"];?>
                                </div>
                                <div class="row mt-1 mb-1 pt-5 pb-5 text-center fw-bold justify-content-center">
                                    <p class="text-primary">Godiste:</p> 
                                    <?php echo $data['oglas']["godina"];?>
                                </div>
                                <div class="row mt-1 mb-1 pt-5 pb-5 text-center fw-bold justify-content-center">
                                    <p class="text-primary">Kilometraza:</p> 
                                    <?php echo $data['oglas']["kilometraza"];?>
                                </div>
                            </div>
                            <div class="col-6 kolona">
                                <div class="row mt-1 mb-1 pt-5 pb-5 text-center fw-bold justify-content-center">
                                    <p class="text-primary">Model:</p>
                                        <?php echo $data['oglas']["model"];?>
                                </div>
                                <div class="row pt-5 pb-5 mt-1 mb-1 text-center fw-bold justify-content-center">
                                    <p class="text-primary">Cena:</p>
                                    €<?php echo $data['oglas']["cena"];?>
                                </div>
                                <div class="row pt-5 pb-5 mt-1 mb-1 text-center fw-bold justify-content-center">
                                    <p class="text-primary">
                                        Datum:
                                    </p>
                                    <?php echo $data['oglas']["datum_kreiranja"];?>
                                </div>
                            </div>
                            <div class="col-12 kolona">
                                <div class="col-12 pt-5 pb-5 text-center justify-content-center">
                                <?php echo $data['oglas']["opis"];?>
                                </div>
                            </div>
                            <?php 
                                echo '<div class="row mt-5 pt-5 col-12">';
                                echo '<div class="col-12  col-md-6 mt-3 mb-3 mt-md-0 mb-md-0">
                                    <a type="button" class=" container-fluid btn rounded btn-secondary  " href="/autoplac%20mvc%20projekat/public/ads" >Oglasi</a>
                                </div>';
                                if(isset($_SESSION['email']) && !empty($_SESSION['email'])){
                                    echo '<div class="col-12  col-md-6 mt-3 mb-3 mt-md-0 mb-md-0">
                                        <a type="button" class=" container-fluid btn rounded btn-primary" href="/autoplac%20mvc%20projekat/public/ads/order/'.$data['oglas']['id'].'" >Naruci</a>
                                    </div>';
                                }
                                echo '</div>';
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <footer class="border-top footer text-muted">
        <div class="container">
            &copy; 2024 - AutoPlac
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
</body>
</html>