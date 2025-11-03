# Homework-PHP-MySQL
Il progetto è un'applicazione web e-commerce per l'acquisto di biglietti virtuali delle Sette Meraviglie del Mondo Moderno, con sistema di autenticazione utente e gestione carrello.
Questo è composto da più script:

- connessione1.php: File di connessione standard al database MySQL utilizzato dopo che il database è stato creato. Contiene le credenziali per connettersi al
database 7MeraviglieDB già esistente. Il file definisce parametri come hostname, username, password e nome del database, ed è richiamato
da tutte le pagine operative del sito (shop, carrello, pagamento, ecc.).

- connessione2.php: File di connessione speciale utilizzato esclusivamente durante la fase di installazione iniziale, ovvero solo in install.php. Questo file
si connette al server MySQL senza specificare un database particolare e contiene la query SQL per la creazione automatica del database
7MeraviglieDB. Dopo aver creato il database, chiude la connessione e richiama connessione1.php per stabilire la connessione al database appena creato.

- install.php: Script di inizializzazione completa del database che viene eseguito una sola volta. Richiama connessione2.php per creare il database e successivamente:​
  - Crea la tabella Utenti con campi: userId (auto-increment), nome, cognome, username (UNIQUE), password e sommeSpese​;
  - Crea la tabella Biglietti con campi: bigliettoId (auto-increment), nome e costoBiglietto​;
  - Popola automaticamente la tabella Utenti con due account di test (Mario Rossi e Luigi Verdi);​
  - Popola automaticamente la tabella Biglietti con i dati delle sette meraviglie e i relativi prezzi;​
  - Dopo l'esecuzione di questo file, il sistema è pronto per l'uso.
 
- index.php: Pagina di benvenuto del sito che presenta il progetto, che servirà come pagina introduttiva dei 7 monumenti, e come riferimento alle varie pagine
web che sono state create per ognuna delle sette meraviglie, inoltre include il menu di navigazione principale (menu_home.php).

- menu_home.php: Menu di navigazione per la pagina index.php che permette di accedere alle pagine di login e registrazione o di acquistare i biglietti (si passa sempre per il login/registrazione).

- pagina1.php, ..., pagina6.php, pagina7.php: Pagine informative dedicate alla descrizione delle 7 specifiche meraviglie del mondo. Queste inoltre includono il menu di navigazione
(menu_meraviglie.php).

- menu_meraviglie.php: Menu importato dalle pagine informative (pagina1.php, ecc..) che permette di navigare tra le diverse pagine di approfondimento, tornare alla home principale
(index.php) e anche qui di accedere/registrarsi/acquistare biglietti.

- style.css: Regole di stile CSS utilizzate in index.php e in tutte le pagine informative.

- script.js: File JavaScript che gestisce l'interattività del menu overlay full-screen.

- login.php: Form di accesso al sistema che verifica username e password inseriti confrontandoli con i dati nel database. In caso di login corretto, inizializza le
variabili di sessione (nome, cognome, username, spesa finora) e reindirizza alla pagina shop. Gestisce anche messaggi di errore per credenziali errate. Utilizza lo stile
definito in stile_autenticazione.php.

- registrazione.php: Form per la creazione di nuovi account utente. Raccoglie nome, cognome, username e password, verificando che lo username scelto non sia già presente
nel database prima di procedere con l'inserimento. In caso di successo, reindirizza l'utente alla pagina di login. Utilizza lo stile definito in stile_autenticazione.php.

- logout.php: Pagina che gestisce la disconnessione dell'utente distruggendo la sessione attiva. Mostra un messaggio di conferma logout avvenuto con successo e fornisce
link per tornare alla home o al login. Utilizza lo stile definito in stile_autenticazione.php.

- stile_autenticazione.php: Script in cui si definisce una variabile $stile_autenticazione con le regole CSS dedicate alle pagine di autenticazione (login, registrazione, logout).
Definisce lo stile per vari elementi.

- shop.php: Pagina principale del catalogo che mostra tutti i biglietti disponibili estratti dalla tabella Biglietti. Ogni biglietto è presentato in una scheda con immagine,
nome della meraviglia e prezzo. Viene mostrata la sidebar con le informazioni del profilo utente (nome, cognome, username, spesa finora) e permette di aggiungere articoli al carrello
tramite il pulsante "Aggiungi al carrello". Le immagini sono gestite tramite un array associativo che mappa nomi delle meraviglie ai percorsi delle rispettive immagini.
Include il menu di navigazione dello shop (menu_shop.php) e lo stile condiviso (stile_shop.php).

- carrello.php: Pagina di gestione del carrello che mostra tutti i biglietti aggiunti dall'utente. Permette di:​
  - Visualizzare la lista completa degli articoli nel carrello con checkbox di selezione​;
  - Eliminare singoli biglietti selezionati​;
  - Svuotare completamente il carrello​;
  - Deselezionare gli articoli selezionati;
  - Continuare con l'acquisto di articoli (shop.php);
  - Procedere al riepilogo d'acquisto (riepilogo.php)​.
  
  Gli articoli nel carrello sono gestiti tramite la variabile di sessione $_SESSION['carrello'], nel caso in cui non ci siano articoli nel carrello viene mostrato un pulsante per tornare al catalogo.
  Viene mostrata la sidebar profilo, include (menu_shop.php) e lo stile condiviso (stile_shop.php).

- riepilogo.php: Pagina di riepilogo pre-acquisto che mostra i dettagli completi di ogni biglietto selezionato con immagini, nomi e prezzi. Calcola automaticamente il totale
da pagare sommando i costi di tutti i biglietti nel carrello e memorizza l'importo nella variabile di sessione $_SESSION['daPagare']. Costruisce un array $biglietti contenente
tutte le informazioni (nome, prezzo, immagine) di ogni articolo per la visualizzazione. Vengono mostrati poi il pulsante per procedere al pagamento (pagamento.php) e continuare con gli acquisti (shop.php).
Nel caso in cui non ci siano articoli di cui fare un riepilogo viene mostrato un pulsante per tornare al catalogo.
Viene mostrata la sidebar profilo, include (menu_shop.php) e lo stile condiviso (stile_shop.php).

- pagamento.php: Pagina finale che gestisce il completamento dell'acquisto. Aggiorna il campo sommeSpese dell'utente nel database, sommando l'importo delle spese effettutte fino a quel momeneto dall'utente
($_SESSION['spesaFinora']) con la spesa appena effettuata ($_SESSION['daPagare']). Svuota il carrello azzerando $_SESSION['carrello'] e aggiorna la variabile di sessione $_SESSION['spesaFinora']
con il nuovo totale. Mostra un messaggio di conferma dell'acquisto se il pagamento va a buon fine, altrimenti un messaggio di errore nel caso di problemi di natura varia.
Viene mostrata la sidebar profilo, include (menu_shop.php) e lo stile condiviso (stile_shop.php).

- menu_shop.php: Menu di navigazione importato dalle pagine autenticate accessibili dopo il login, che permette di andare:
  - alla pagina di benvenuto del sito cliccando su "Le Sette Meraviglie" (index.php);
  - al catalogo/shop (shop.php);
  - alla visualizzione del carrello (carrello.php);
  - alla pagina di riepilogo pre-acquisto degli articoli (pagamento.php);
  - alla pagina di logout (logout.php).
 
  Questo menu è presente in tutte le pagine operative del sito, quindi (shop, carrello, riepilogo, pagamento).

- stile_shop.php: Script in cui si definisce una variabile $stile_shop con le regole CSS principali condivise tra tutte le pagine operative. Definisce lo stile per tutte gli
elementi presenti nelle pagine, come lo stile per la sidebar, la barra di navigazione, form, tutti i vari layout strutturali, ecc..


Gli stili vengono importati all'interno dei diversi documenti tramite la funzione require_once(). Gli stili vengono applicati stampando nella head la variabile definita nell'apposito script.

I menu vengono importanti all'interno dei diversi documenti tramite la funzione require().

Per la visualizzazione delle icone nei pulsanti e negli elementi dell'interfaccia, il progetto utilizza Font Awesome 6.0, una libreria di icone. Per utilizzare le icone Font Awesome
nel progetto, è necessario includere il file CSS della libreria nell'header di ogni pagina. Questo si fa aggiungendo un link nella sezione <head> degli script.

























