<?php 
   require_once '../auth.php';
   if (!$userid=controllaAuth()) {
    header("Location: ../6-Login-logout/Login.php");
        exit;
    } 
?>

  
<!DOCTYPE html>
<html>
	<head>
    <meta charset="UTF-8">
    <title>Consigliati</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href= "../0-Shared/Standard-style.css" />
		<link rel="stylesheet" href= "../1-Consigliati/Consigliati.css" />
		<script src="../0-Shared/Standard-js.js" defer> </script>
	</head>

  <body>
    <!--MENÙ READBOOK-->
    <header>
      <nav>
        <div id="menu">
          <a href="../1-Consigliati/Consigliati.php">Consigliati</a>
          <a href="../2-Store/Store.php">Store</a>
          <a class="menu_logo" href="../3-Home/Home.php" ><img src="../Images/logo_min.svg"></a>
          <a class="pref" href="../4-Preferiti/preferiti.php">Preferiti<img src="../Images/cuore.svg"></a>
          <a class="view" href="../6-Login-logout/Logout.php">Logout</a>
        </div>
      </nav>
    </header>

    <div class="User">
      <img src="../Images/andreabaldi.jpg" class="box">
      <h4>Andrea Baldi</h4>
      <p>1000026791</p>
    </div>

    <article>
      <section id="BOOK_1">
        <div class="number"><h1>1</h1></div>
        <div class="post">
          <h1>I pilastri della terra</h1>
          <h2>Ken Follett</h2>
          <p>I pilastri della Terra (The Pillars of the Earth) è un romanzo storico pubblicato nel 1989 dallo scrittore britannico Ken Follett che racconta la costruzione di una cattedrale a Kingsbridge, in Inghilterra (località immaginaria[1] nel Wiltshire). Ambientato nel XII secolo - precisamente tra il 1120 e il 1174 - copre il periodo dall'affondamento della Nave Bianca (la nave in cui morì l'erede al trono inglese) fino all'assassinio dell'arcivescovo di Canterbury Thomas Becket (descritto da T. S. Eliot nel suo dramma teatrale del 1935 Assassinio nella cattedrale), ma concentrandosi in particolare sul periodo dell'Anarchia. Il libro traccia lo sviluppo dell'Architettura gotica, il suo affrancamento da quella Romanica, e le fortune del priorato di Kingsbridge e del villaggio. Sullo sfondo degli avvenimenti storici dell'epoca si snodano le avventure di personaggi verosimili e viene illustrato con efficacia e realismo lo scontro in atto nel medioevo tra la nobiltà, arroccata a difesa dei propri privilegi, e la nascente borghesia mercantile, che si stava sviluppando nelle città e che tentava di emanciparsi dagli arcaici fardelli del feudalesimo. L'opera, considerata il capolavoro di Follett, ha venduto oltre 14 milioni di copie in tutto il mondo (1,3 milioni in Italia)[2]. L'autore ha poi pubblicato due sequel: Mondo senza fine, ambientato circa 200 anni dopo e pubblicato nel 2007, e una terza parte, La colonna di fuoco (2017). Nel 2020, Follett ha infine fatto uscire Fu sera e fu mattina, il prequel de I pilastri della terra, ambientato tra il 997 e il 1007. Anche Ellis Peters ha ambientato le celebri indagini del suo Fratello Cadfael negli stessi anni del Medioevo inglese.
          </p>
          <div class="library_container">
            <img src="../Images/autore1.jpg" class="library_dim">
            <img src="../Images/libro1.jpg" class="library_dim">
          </div>
        </div>
      </section>

      <section id="BOOK_2">
        <div class="number"><h1>2</h1></div>
        <div class="post">
          <h1>Alle fonti del Nilo</h1>
          <h2>Wilbur Smith</h2>
          <p>Alle fonti del Nilo è un romanzo d'avventura scritto da Wilbur Smith ed il quarto dei sei libri della saga ambientata nella terra dei faraoni. La spedizione parte alla ricerca delle fonti del Nilo, attraversando territori selvaggi e impervi, le paludi e le montagne e incontrando popoli bellicosi e cannibali. Durante questo viaggio Taita ritroverà Fenn, il nome da ragazza della sua amata Lostris, reincarnata in una piccola fanciulla, e trova inoltre come guida due cugini nubiani shilluk di nome Nontu e Nakonto, che facevano parte di una fiera popolazione guerriera con cui Taita aveva avuto già contatti molto tempo prima quando la regina Lostris aveva portato il suo popolo nel Basso Egitto. Dopo due anni incontrano un primo gruppo di soldati egiziani che erano partiti molti anni prima per la spedizione alle fonti del Nilo. Infine Taita incontra Kalulu, un longevo scortato da donne soldato, che conosce bene la zona del lago Semliki Nianzu dove confluiscono due rami del Nilo, il ramo meridionale che nasce dalle Montagne della Luna e quello settentrionale che invece nasce dal Lago di Nalubaale, quello che dovranno seguire. Seguendo il percorso del fiume troveranno il motivo per cui il Nilo non scorre: le pietre rosse. La spedizione viene però aggredita dai basmara che uccideranno Kalulu e quasi tutta la spedizione: Taita, Fenn, Meren, Nakonto e Imbali verranno salvati tempestivamente da Tinat Ankut, comandante dell'altra parte della spedizione che molti anni prima erano partiti alla ricerca delle fonti del Nilo.
          </p>
          <div class="library_container">
            <img src="../Images/autore2.jpeg" class="library_dim">
            <img src="../Images/libro2.jpeg" class="library_dim">
          </div>
        </div>
      </section>

      <section id="BOOK_3">
        <div class="number"><h1>3</h1></div>
        <div class="post">
          <h1>Il metodo Catalanotti</h1>
          <h2>Andrea Camilleri</h2>
          <p>Il metodo Catalanotti è un romanzo di Andrea Camilleri, con protagonista il Commissario Montalbano, è stato pubblicato da Sellerio il 31 maggio 2018. Questa volta l'indagine del commissario Montalbano non si apre con la solita telefonata di Catarella, ma con il vice Mimì Augello che, piombando a casa del commissario in piena notte, gli racconta di aver casualmente trovato un cadavere in un appartamento disabitato durante un suo incontro amoroso. Quasi contemporaneamente viene ritrovato morto nel suo appartamento Carmelo Catalanotti, usuraio, regista teatrale, ideatore di un ingegnoso e traumatico metodo recitativo che mette in condizione l'attore di entrare in un personaggio lavorando sui propri segreti più oscuri e nascosti: delle vere e proprie sedute psicanalitiche fuori dall'ordinario in cui il regista fa leva sulla parte più oscura dell'animo dell'attore. Sullo sfondo di violenze domestiche taciute e di sedute psicanalitiche "borderline" al fine della perfetta rappresentazione teatrale, Montalbano arriverà alla risoluzione del caso, un caso in cui drammaturgia e realtà si confondono, in cui i cadaveri possono scomparire come in una pantomima, e in cui una giovane "picciotta" capo della scientifica farà innamorare il commissario con una passione e un desiderio che non provava da troppi anni e che, credeva, non sarebbe mai più riuscito a provare.
          </p>
          <div class="library_container">
            <img src="../Images/autore3.jpeg" class="library_dim">
            <img src="../Images/libro3.jpg" class="library_dim">
          </div>
        </div>
      </section>

      <section id="BOOK_4">
        <div class="number"><h1>4</h1></div>
        <div class="post">
          <h1>Inferno</h1>
          <h2>Dan Brown</h2>
          <p>Inferno è il sesto romanzo thriller dello scrittore Dan Brown, pubblicato il 14 maggio 2013 in contemporanea in quasi tutto il mondo. È il quarto romanzo della serie con protagonista il professore Robert Langdon. Il romanzo si apre con una misteriosa figura chiamata l'Ombra che, per fuggire a dei misteriosi inseguitori, si getta dal campanile della Badia Fiorentina, a Firenze. Sei giorni dopo il professor Robert Langdon si sveglia in un ospedale di Firenze con una ferita alla testa e una seria amnesia che gli impedisce di ricordare i giorni precedenti; a complicare il tutto ci sono delle visioni indecifrabili. All'ospedale viene accudito dal dottor Marconi e dalla dottoressa Sienna Brooks, che gli spiega come la sera precedente sia arrivato all'ospedale in stato di semi-incoscienza; l'amnesia sarebbe dovuta ad uno sparo destinato a lui, ma che l'avrebbe colpito solo di striscio sulla testa. Improvvisamente irrompe Vayentha, una killer che uccide il dottor Marconi e sembra intenzionata a uccidere anche Langdon, che si salva solo fuggendo precipitosamente grazie all'aiuto di Sienna. Nell'appartamento di quest'ultima Langdon si rende conto che nella sua giacca è stata nascosta una capsula al titanio per materiale biologico contenente qualcosa di molto prezioso e programmata per essere aperta da lui solo; il professore decide allora di rivolgersi al Consolato USA, dando però un indirizzo falso per rispetto della privacy di Sienna. Quando invece dell'aiuto richiesto vede arrivare Vayentha Langdon comprende di essere nel mirino del suo stesso governo, e che l'unica opportunità di salvezza sta nel riottenere le memorie dei due giorni precedenti, partendo forse dal contenuto della capsula di cui è in possesso. Al suo interno si trova un cilindro medievale di osso, usato per comporre delle stampe, all'interno del quale è stato inserito un proiettore ad alta tecnologia. L'immagine che esso proietta è la Mappa dell'Inferno dantesco di Sandro Botticelli. Improvvisamente un gruppo di soldati irrompe a casa di Sienna e i due riescono a scappare per un soffio.
          </p>
          <div class="library_container">
            <img src="../Images/autore4.jpg" class="library_dim">
            <img src="../Images/libro4.jpg" class="library_dim">
          </div>
        </div>
      </section>

      <section id="BOOK_5">
        <div class="number"><h1>5</h1></div>
        <div class="post">
          <h1>Doctor Sleep</h1>
          <h2>Stephen King</h2>
          <p>Doctor Sleep è un romanzo horror di Stephen King, seguito del celebre Shining, pubblicato negli USA il 24 settembre 2013 e il 28 gennaio 2014, in Italia. Anni dopo gli avvenimenti che portarono all'incendio dell'Overlook Hotel, in cui perse la vita il guardiano invernale Jack Torrance, il figlio Danny con la madre Wendy prendono alloggio in un modesto appartamento in Florida. Fin dai primi anni dopo la terribile esperienza al grande albergo in Colorado, Danny Torrance continua ad avere visioni, provocate dalla "luccicanza", dei vecchi ospiti dell'Overlook, specialmente della donna morta nella maledetta stanza 217 che si manifesta nel bagno della loro casa seduta sul water, terrorizzando Danny, che chiama il vecchio amico Dick Hallorann, il cuoco afroamericano dell'albergo. Halloran lo porta a fare un giro sulla spiaggia e porta con sé un regalo per Danny, ma prima di aprirlo, decide di raccontargli la sua storia. Dick, quando era bambino, veniva molestato dal nonno pedofilo, che minacciava di rapirlo se avesse raccontato a qualcuno la verità. Dick, per paura, rifiutò di usare la sua "luccicanza" per comunicarlo, e non ne informò neanche la nonna. Poco tempo dopo, il nonno morì per un ictus. Sei mesi dopo il suo decesso, Dick si ritrovò il suo spettro sdraiato sul letto della sua camera, nudo con l'aspetto da morto vivente. Dick definisce gli spettri di questo genere sporcaccioni, spiegando che si tratta di persone morte in preda ad una forte rabbia che, rifiutandosi di passare nell'aldilà per paura di cosa li potrebbe attendere, spesso rimangono bloccati nel posto in cui sono morti e dopo un certo tempo svaniscono, ma ce ne sono alcuni che trovano il modo di prolungare la loro presenza restando attaccati a coloro che possiedono l'Aura, che per loro è come una fonte di nutrimento, servendosene per acquistare materialità fisica come falene attratte dalla luce.
          </p>
          <div class="library_container">
            <img src="../Images/autore5.jpg" class="library_dim">
            <img src="../Images/libro5.jpg" class="library_dim">
          </div>
        </div>
      </section>
    </article>

    <!--FOOTER-->
    <footer>
      <div class="footer">
        <div class="row">
          <a><i class="fa fa-facebook"></i></a>
          <a><i class="fa fa-instagram"></i></a>
          <a><i class="fa fa-youtube"></i></a>
          <a><i class="fa fa-twitter"></i></a>
        </div>
      
        <div class="row">
        READBOOK Copyright © 2022 readbook - All rights reserved || Designed By: Andrea Baldi 
        </div>
      </div>
    </footer>
  </body>
</html>






    