<?php
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    session_start();

    //questo è il controllo di accesso: se non e' stata prima effettuata 
    //l'autenticazione, la variabile SESSION accessoPermesso non esiste
    if (!isset($_SESSION['accessoPermesso']))
        header('Location: login.php');

    //apertura della connessione
    require_once("./connessione1.php");

    require_once("./stile_interno2.php");
    
    // selezioniamo i biglietti disponibili (dalla tabella Biglietti)
    $sql = "SELECT *
            FROM $Biglietti_table_name
            ";

    if (!$resultQ = mysqli_query($mysqliConnection, $sql)) {
        printf("Si è verifiacto un errore nella selezione.\n");
        exit();
    }


    //array di immagini per le meraviglie
    $immagini = array(
        "Grande Muraglia Cinese, Cina" => "./file/collegamento_1/img/muraglia.jpg", 
        "Petra, Giordania" => "./file/collegamento_2/img/petra.jpg", 
        "Cristo Redentore, Rio de Janeiro" => "./file/collegamento_3/img/redentore2.jpg",
        "Machu Picchu, Cusco - Perù" => "./file/collegamento_4/img/machu_picchu.jpg", 
        "Chichén Itzá, Yucatàn - Messico" => "./file/collegamento_5/img/chichen_itza.jpg", 
        "Colosseo, Roma - Italia" => "./file/collegamento_6/img/colosseo-roma.jpg", 
        "Taj Mahal, Agra - India" => "./file/collegamento_7/img/taj_mahal.jpg"
    );

    //chiudiamo la connessione
    $mysqliConnection->close();

?>


<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title>Shop - Le Sette Meraviglie</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
        <?php echo $stile_interno2; ?>
    </head>
    <body>
        <?php
            require("menu_shop.php");
        ?>
        <div class="container-principale">
            <div class="sidebar">
                <h2>Il tuo profilo</h2>
                <div class="etichetta-sidebar">Username:</div>
                <div class="valore-sidebar"><?php echo $_SESSION['username']; ?></div>
                
                <div class="etichetta-sidebar">Nome:</div>
                <div class="valore-sidebar"><?php echo $_SESSION['nome']; ?></div>
                
                <div class="etichetta-sidebar">Cognome:</div>
                <div class="valore-sidebar"><?php echo $_SESSION['cognome']; ?></div>
                
                <div class="etichetta-sidebar">Finora hai speso:</div>
                <div class="valore-sidebar"> <?php echo $_SESSION['spesaFinora']; ?> &euro; </div>
                
                <div class="etichetta-sidebar">Ti sei collegato alle:</div>
                <div class="valore-sidebar">
                    <?php echo date ('g:i a', $_SESSION['dataLogin']) ?>
                </div>
            </div>
            
            <div class="container-meraviglie">
                <?php
                    //ciclo while per scorrere tutti i biglietti
                    while ($row = mysqli_fetch_array($resultQ)){
                        $nome = $row['nome'];
                        $prezzo = $row['costoBiglietto'];

                        //seleziona immagine
                        if(isset($immagini[$nome])){
                            $immagine=$immagini[$nome];
                        }else{
                            $immagine="bianco.jpg";   //sfondo di default
                        }
                ?>      
                        <div class="scheda-meraviglia">
                            <img src="<?php echo $immagine; ?>" alt="<?php echo $nome; ?>" />
                            <div class="contenuto-scheda">
                                <div class="titolo-scheda"><?php echo $nome; ?></div>
                                <div class="righa-carrello">
                                    <span class="prezzo-scheda"><?php echo $prezzo; ?> &euro;</span>
                                    <form action="carrello.php" method="post">
                                        <input type="submit" class="bottone-compra" value="Aggiungi al carrello" />
                                    </form>
                                </div>
                            </div>
                        </div>
                <?php } ?>
            </div>  
        </div>
    </body>
</html>
