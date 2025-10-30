<?php
$stile_shop = "
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
        justify-content: center;
        max-width: 1200px;
        margin: 0 auto;
        display: flex;
    }
    
    .contenuto-navbar a {
        text-decoration: none;
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
        min-width: 210px;
        max-width: 210px;
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
    
    


    /* Scheda meraviglia */
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
        flex: 1;   /* fa crescere gli elementi per occupare tutto lo spazio disponibile nel contenitore */
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




    /* Notifica carrello */
    .messaggio-aggiunto {
        background: #27ae60;
        color: white;
        padding: 15px 20px;
        margin: 20px auto 20px auto;
        max-width: 1200px;
        border-radius: 8px;
        text-align: center;
    }

    .messaggio-aggiunto p {
        margin: 0 0 10px 0;
        font-size: 16px;
    }

    .messaggio-aggiunto strong {
        font-size: 18px;
    }
    
    .messaggio-aggiunto a {
        color: white;
    }

    .messaggio-aggiunto a:hover {
        color: #ecf0f1;
    }



    

    /* Parte di stile relativo SOLO a carrello.php */
    .container-carrello {
        flex: 1;           /* fa crescere gli elementi per occupare tutto lo spazio disponibile nel contenitore */
    }

    .titolo-carrello {
        font-size: 28px;
        color: #f6f7f9;
        margin-bottom: 30px;
    }

    .carrello-vuoto {
        background: #17181b;
        border: 1px solid #26272b;
        border-radius: 12px;
        padding: 60px;  
        text-align: center;
    }

    .carrello-vuoto p {
        font-size: 20px;
        color: #a3a6ad;
        margin-bottom: 30px;
    }

    .carrello-vuoto a {
        background: #27ae60;
        color: white;
        padding: 12px 24px;
        border-radius: 8px;
        border: none;
        font-size: 15px;
        font-weight: bold;
        text-decoration: none;
        display: inline-block;
    }

    .carrello-vuoto a:hover {
        background: #229954;
    }

    .carrello-pieno {
        background: #17181b;
        border: 1px solid #26272b;
        border-radius: 12px;
        padding: 20px;
        margin-bottom: 30px;
    }

    .articolo-carrello {
        padding: 15px;
        border-bottom: 1px solid #26272b;
        display: flex;
        align-items: center;
    }
    
    input[type='checkbox'] {
        width: 20px;
        height: 20px;
        margin-right: 15px;
        cursor: pointer;
    }

    .container-pulsanti {
        display: flex;
        gap: 15px;
        flex-wrap: wrap;
    }

    .bottone-rosso1 {
        background: #e74c3c;
        color: white;
        border: none;
        padding: 12px 20px;
        border-radius: 8px;
        font-size: 15px;
        font-weight: bold;
        cursor: pointer;
    }

    .bottone-rosso1:hover {
        background: #c0392b;
    }

    .bottone-rosso2 {
        background: #0f0f10;
        color: #e74c3c;
        border: 2px solid #e74c3c;
        padding: 12px 20px;
        border-radius: 8px;
        font-size: 15px;
        font-weight: bold;
        cursor: pointer;
    }

    .bottone-rosso2:hover {
        background: #e74c3c;
        color: white;
    }

    .bottone-grigio {
        background: #95a5a6;
        color: white;
        border: none;
        padding: 14px 30px;
        border-radius: 8px;
        font-size: 16px;
        font-weight: bold;
        text-decoration: none;
        margin-left: auto;
    }

    .bottone-grigio:hover {
        background: #7f8c8d;
    }

    .bottone-bianco {
        background: white;
        color: #0f0f10;
        border: none;
        padding: 12px 20px;
        border-radius: 8px;
        font-size: 15px;
        font-weight: bold;
        cursor: pointer;
    }

    .bottone-bianco:hover {
        background: #CCCCCC;
    }

    .bottone-acqua {
        background: #2ec4b6;
        color: #0f2420;
        border: none;
        padding: 14px 32px;
        border-radius: 8px;
        font-size: 16px;
        font-weight: bold;
        text-decoration: none;
        margin-left: auto;
    }

    .bottone-acqua:hover {
        filter: brightness(1.1);
    }

</style>
";
?>
