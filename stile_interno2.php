<?php
$stile_interno2 = "
<style type=\"text/css\">
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    
    body {
        font-family: Arial, sans-serif;
        background: #0f0f10;
        color: #f6f7f9;
    }
    


    /* Navbar dello shop */
    .navbar {
        background: #17181b;
        border-bottom: 1px solid #26272b;
        padding: 15px 30px;
    }
    
    .contenuto-navbar {
        align-items: center;
        max-width: 1200px;
        margin: 0 auto;
        display: flex;
    }
    
    .navbar h1 {
        color: #2ec4b6;
        font-size: 22px;
        margin-right: 50px;
    }
    
    .link-navbar {
        color: #f6f7f9;
        text-decoration: none;
        margin-right: 20px;
        padding: 8px 15px;
        border-radius: 8px;
        font-weight: bold;
    }
    
    .link-navbar:hover {
        background: #26272b;
    }
    



    /* Container principale */
    .container-principale {
        display: flex;
        max-width: 1200px;
        margin: 30px auto;
        padding: 0 20px;
    }
    
    


    /* Sidebar profilo */
    .sidebar {
        width: 310px;
        background: #17181b;
        border: 1px solid #26272b;
        border-radius: 12px;
        padding: 25px;
        margin-right: 30px;
        height: fit-content;
    }
    
    .sidebar h2 {
        font-size: 20px;
        margin-bottom: 20px;
        color: #2ec4b6;
    }
    
    .etichetta-sidebar {
        color: #a3a6ad;
        font-size: 13px;
        margin-bottom: 5px;
    }
    
    .valore-sidebar {
        margin-bottom: 15px;
        font-size: 15px;
    }
    



    
    /* Container dei biglietti delle meraviglie */
    .container-meraviglie {
        display: flex;
        flex-wrap: wrap;
        gap: 25px;
    }
    
    


    /* Card meraviglia con flex column */
    .scheda-meraviglia {
        background: #17181b;
        border: 1px solid #26272b;
        border-radius: 12px;
        width: 280px;
        display: flex;
        flex-direction: column;
    }
    
    .scheda-meraviglia img {
        width: 100%;
        height: 180px;
        object-fit: cover;  /* controlla il modo in cui un'immagine ridimensionata per adattarsi al suo contenitore */
        border-radius: 12px 12px 0 0;
    }
    
    .contenuto-scheda {
        padding: 18px;
        display: flex;
        flex-direction: column;
        flex: 1;   /* elemento cresce per occupare tutto lo spazio disponibile nel contenitore */
    }
    
    .titolo-scheda {
        font-size: 18px;
        font-weight: bold;
        margin-bottom: 10px;
        color: #f6f7f9;
    }
    
    .righa-carrello {
        display: flex;
        justify-content: space-between; 
        align-items: center;
        margin-top: auto;
    }
    
    .prezzo-scheda {
        background: #26272b;
        color: #2ec4b6;
        font-size: 16px;
        font-weight: bold;
        padding: 6px 14px;
        border-radius: 6px;
    }
    
    .bottone-compra {
        background: #2ec4b6;
        color: #0f2420;
        border: none;
        border-radius: 6px;
        font-weight: bold;
        font-size: 14px;
        padding: 8px 16px;
        cursor: pointer;
    }
    
    .bottone-compra:hover {
        filter: brightness(1.1);  /* aumenta la luminosità di un elemento del 10% rispetto all'immagine originale */
    }

</style>
";
?>
