<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="dist/assets/styles/styles.css">
    <title>Document</title>
</head>
<body>
    <?php 
    /**
     * Google FAQ
     * Riscrivere questa pagina del sito google https://policies.google.com/faq
     * Ci sono diverse domande con relative risposte. Gestire il “Database” (array) e la visualizzazione di queste domande e risposte con PHP.
     * Non preoccupatevi dei link presenti nel testo delle risposte
     */
    ?>

    <!-- HEADER -->
    <header class="google-header">
        <!-- Logo area -->
        <div class="google-header__top">
            <h1 class="google-header__top__heading">
                <a href="#"><img class="google-header__top__heading__logo" src="dist/assets/images/google-logo.png" alt="Google"></a>
            </h1>
            <h2 class="google-header__top__privacy-and-terms">
                <a href="#">Privacy e termini</a>
            </h2>
        </div>

        <!-- Nav -->
        <nav class="google-header__nav">
            <ul class="google-header__nav__list">
                <li class="google-header__nav__list__item"><a href="">Introduzione</a></li>
                <li class="google-header__nav__list__item"><a href="">Norme sulla privacy</a></li>
                <li class="google-header__nav__list__item"><a href="">Termini di servizio</a></li>
                <li class="google-header__nav__list__item"><a href="">Tecnologie</a></li>
                <li class="google-header__nav__list__item--active"><a href="">Domande frequenti</a></li>
                <li class="google-header__nav__list__item"><a href="">Account Google</a></li>
            </ul>
        </nav>
    </header>

    <!-- MAIN CONTENT -->
    <main class="main-content">
        <!-- PHP Logic for main content -->
        <?php
        // Array FAQ content
        $faq_array = [
            [
                'question' => "Come state implementando la recente decisione della Corte di giustizia dell'Unione europea (CGUE) relativa al diritto all'oblio?",
                'answer' => "La recente decisione della Corte di giustizia dell'Unione europea ha profonde conseguenze per i motori di ricerca in Europa. La Corte ha stabilito che alcuni utenti hanno il diritto di chiedere ai motori di ricerca come Google di rimuovere risultati relativi a chiavi di ricerca che includono il proprio nome. Per poter essere rimossi, i risultati visualizzati devono essere inadeguati, irrilevanti o non più rilevanti, o eccessivi.<br><br>
                Da quando questa decisione è stata pubblicata il 13 maggio 2014, abbiamo lavorato incessantemente per uniformarci a essa. Si tratta di una procedura complessa perché dobbiamo valutare ogni singola richiesta e effettuare un bilanciamento tra il diritto dell'individuo a controllare i suoi dati personali ed il diritto di tutti di conoscere e distribuire le informazioni.<br><br>
                Per presentare una richiesta di rimozione, compila questo modulo web. Riceverai una risposta automatica che conferma la ricezione della tua richiesta. Dopodiché valuteremo il tuo caso (tieni presente che potrebbe occorrere un po' di tempo perché abbiamo già ricevuto tante richieste simili). Nel valutare la richiesta, considereremo se i risultati includono informazioni obsolete relative alla tua vita privata. Considereremo inoltre se vi è un interesse pubblico a che le informazioni rimangano nei nostri risultati delle ricerche, ad esempio se riguardano frodi finanziarie, negligenza professionale, condanne penali o la tua condotta pubblica in relazione a un pubblico ufficio (eletto o non eletto). Queste valutazioni sono complesse e, in quanto organizzazione privata, potremmo non essere nella posizione giusta per prendere decisioni in merito al tuo caso. Se non sei d'accordo con la nostra valutazione, puoi rivolgerti all'Autorità garante per la protezione dei dati personali nel tuo paese.<br><br>
                Nei prossimi mesi lavoreremo a stretto contatto con le autorità per la protezione dei dati e con altre autorità per perfezionare il nostro approccio. La decisione della CGUE rappresenta un cambiamento significativo per i motori di ricerca. Siamo preoccupati per le sue conseguenze, ma riteniamo anche che sia importante rispettare la decisione della Corte e ci stiamo adoperando per predisporre una procedura conforme alla legge.<br><br>
                Quando cerchi un nome, potresti trovare una notifica in cui viene spiegato che i risultati potrebbero essere stati modificati nel rispetto delle leggi europee per la protezione dei dati. Mostriamo questa notifica agli utenti europei quando cercano la maggior parte dei nomi, non soltanto le pagine che sono state soggette a una rimozione."
            ],
            [
                'question' => "Come fa Google a proteggere la mia privacy e a tenere le mie informazioni al sicuro?",
                'answer' => "Sappiamo che la sicurezza e la privacy sono importanti per te e lo sono anche per noi. Per noi è imperativo offrire un'elevata sicurezza e assicurarti che le tue informazioni sono al sicuro e accessibili quando ne hai bisogno.

                Siamo costantemente al lavoro per garantire un'elevata sicurezza, proteggere la tua privacy e rendere Google ancora più efficace ed efficiente per te. Spendiamo centinaia di milioni di dollari ogni anno per la sicurezza e ci avvaliamo di esperti di fama mondiale in materia di sicurezza dei dati per mantenere le tue informazioni al sicuro. Abbiamo inoltre sviluppato strumenti per la sicurezza e la privacy di facile utilizzo come Google Dashboard, la verifica in due passaggi e Impostazioni annunci. Così, per quanto riguarda le informazioni che condividi con Google, hai il massimo controllo.
                
                Puoi leggere ulteriori informazioni sulla sicurezza online, incluso come proteggere te e la tua famiglia online, nel Centro Google per la sicurezza online.
                
                Scopri quali misure adottiamo per garantire protezione e sicurezza alle tue informazioni personali, lasciando a te il controllo."
            ],
            [
                'question' => "Come faccio a rimuovere informazioni su di me dai risultati di ricerca di Google?",
                'answer' => "I risultati di ricerca di Google rispecchiano i contenuti pubblicamente disponibili sul Web. I motori di ricerca non possono rimuovere i contenuti direttamente dai siti web, quindi rimuovere risultati di ricerca da Google non consente di rimuovere i contenuti dal Web. Se desideri rimuovere qualcosa dal Web, devi contattare il webmaster del sito su cui sono pubblicati i contenuti e chiedergli di apportare una modifica. Inoltre, se, ai sensi delle leggi europee per la protezione dei dati, desideri richiedere la rimozione di determinate informazioni su di te visualizzate nei risultati di ricerca di Google, fai clic qui. Una volta che i contenuti saranno stati rimossi e che Google avrà rilevato l'aggiornamento, le informazioni non verranno più visualizzate nei risultati di ricerca di Google. In caso di una richiesta di rimozione urgente, è inoltre possibile visitare la nostra pagina di assistenza per avere ulteriori informazioni."
            ],
            [
                'question' => "Quando faccio clic sui risultati della Ricerca Google, le mie chiavi di ricerca vengono inviate ai siti web?",
                'answer' => "In alcuni casi sì. Quando fai clic su un risultato della Ricerca Google, il tuo browser web potrebbe reindirizzare alla pagina web di destinazione anche l'indirizzo Internet, o URL, della pagina dei risultati di ricerca sotto forma di URL referrer. Talvolta, l'URL della pagina dei risultati di ricerca potrebbe contenere la query di ricerca che hai inserito. Se utilizzi la ricerca SSL (la funzione di ricerca criptata di Google), nella maggior parte dei casi i termini di ricerca non vengono inviati come parte dell'URL negli URL referrer. Questo comportamento può fare eccezione, ad esempio se utilizzi alcuni browser meno diffusi. Ulteriori informazioni sulla ricerca SSL sono disponibili qui. Le query di ricerca o le informazioni contenute nell'URL referrer potrebbero essere disponibili mediante Google Analytics o un'API (Application Programming Interface). Inoltre, gli inserzionisti potrebbero ricevere informazioni relative all' esatte parole chiave che hanno determinato il clic su un annuncio."
            ],
        ]
        ?>
        <!-- Print array FAQ content with a foreach cycle -->
        <div class="main__content">
            <?php foreach($faq_array as $faq) { ?>
                <div class="main__content__faq">
                    <h2 class="main__content__faq__title"><?php echo $faq['question']; ?> <br><br></h2>
                    <p class="main__content__faq__paragraph"><?php echo $faq['answer']; ?> <br><br></p>
                </div>
            <?php } ?>
        </div>
    </main>
    
    <!-- FOOTER -->
    <footer class="footer">
        <ul class="footer__left">
            <li><a href="#">Google</a></li>
            <li><a href="#">Tutto su Google</a></li>
            <li><a href="#">Privacy</a></li>
            <li><a href="#">Termini</a></li>
        </ul>
        <div class="footer__right">
            <div class="footer__right__language__icon">
                <i class="fas fa-globe"></i>
            </div>
            <div class="footer__right__language__select">
                <label for="language"></label>
                <select name="" id="language">
                    <option value="af">Afrikaans</option>
                    <option value="id">Bahasa Indonesia</option>
                    <option value="ms">Bahasa Melayu</option>
                    <option value="ca">Català</option>
                    <option value="cs">Čeština</option>
                    <option value="da">Dansk</option>
                    <option value="de">Deutsch</option>
                    <option value="et">Eesti</option>
                    <option value="en">English</option>
                    <option value="en-GB">English (United Kingdom)</option>
                    <option value="es">Español</option>
                    <option value="es-419">Español (Latinoamérica)</option>
                    <option value="eu">Euskara</option>
                    <option value="fil">Filipino</option>
                    <option value="fr">Français</option>
                    <option value="fr-CA">Français (Canada)</option>
                    <option value="gl">Galego</option>
                    <option value="hr">Hrvatski</option>
                    <option value="zu">Isizulu</option>
                    <option value="is">Íslenska</option>
                    <option selected="" value="it">Italiano</option>
                    <option value="sw">Kiswahili</option>
                    <option value="lv">Latviešu</option>
                    <option value="lt">Lietuvių</option>
                    <option value="hu">Magyar</option>
                    <option value="nl">Nederlands</option>
                    <option value="no">Norsk</option>
                    <option value="pl">Polski</option>
                    <option value="pt-BR">Português (Brasil)</option>
                    <option value="pt-PT">Português (Portugal)</option>
                    <option value="ro">Română</option>
                    <option value="sk">Slovenčina</option>
                    <option value="sl">Slovenščina</option>
                    <option value="fi">Suomi</option>
                    <option value="sv">Svenska</option>
                    <option value="vi">Tiếng Việt</option>
                    <option value="tr">Türkçe</option>
                    <option value="el">Ελληνικά</option>
                    <option value="bg">Български</option>
                    <option value="ru">Русский</option>
                    <option value="sr">Српски</option>
                    <option value="uk">Українська</option>
                    <option value="iw">‫עברית‬</option>
                    <option value="ur">‫اردو‬</option>
                    <option value="ar">‫العربية‬</option>
                    <option value="fa">‫فارسی‬</option>
                    <option value="am">አማርኛ</option>
                    <option value="mr">मराठी</option>
                    <option value="hi">हिन्दी</option>
                    <option value="bn">বাংলা</option>
                    <option value="gu">ગુજરાતી</option>
                    <option value="ta">தமிழ்</option>
                    <option value="te">తెలుగు</option>
                    <option value="kn">ಕನ್ನಡ</option>
                    <option value="ml">മലയാളം</option>
                    <option value="th">ไทย</option>
                    <option value="ko">한국어</option>
                    <option value="zh-HK">中文 (香港)</option>
                    <option value="zh-CN">中文（简体中文）</option>
                    <option value="zh-TW">中文（繁體中文）</option>
                    <option value="ja">日本語</option>
                </select>
            </div>
        </div>
    </footer>

    <!-- JAVASCRIPT -->
    <script src="dist/assets/scripts/main.js"></script>
</body>
</html>