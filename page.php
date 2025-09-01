<!DOCTYPE html>
<html lang="cs">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <?php if (!empty(TAG_MANAGER)) { ?>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','<?php echo TAG_MANAGER; ?>');</script>
    <!-- End Google Tag Manager -->
    <?php } ?> 

    <title><?php echo TITLE; ?></title>

    <meta name="googlebot" content="snippet,archive" />
    <meta name="robots" content="all,index,follow" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="<?php echo AUTHOR; ?>" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="css/common.css?v=<?php echo md5(microtime(true)); ?>" />
    <link rel="stylesheet" href="css/defs.css?v=<?php echo md5(microtime(true)); ?>" />
    <link rel="stylesheet" href="css/typography.css?v=<?php echo md5(microtime(true)); ?>" />
    <link rel="stylesheet" href="css/page.css?v=<?php echo md5(microtime(true)); ?>" />
    <link rel="stylesheet" href="css/content.css?v=<?php echo md5(microtime(true)); ?>" />
    <!--<link rel="stylesheet" href="css/forms.css?v=<?php echo md5(microtime(true)); ?>" />-->
    <link rel="stylesheet" href="css/toolbox.css?v=<?php echo md5(microtime(true)); ?>" />

    <link rel="icon" type="image/png" href="assets/icons/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="assets/icons/favicon.svg" />
    <link rel="shortcut icon" href="assets/icons/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="assets/icons/apple-touch-icon.png" />
    <link rel="manifest" href="assets/icons/site.webmanifest" />

    <meta name="keywords" content="<?php echo KEYWORDS; ?>" />
	<meta name="description" content="<?php echo DESCRIPTION; ?>" />

    <!--
    <meta property="og:title" content="<?php echo OG_TITLE; ?>" />
    <meta property="og:url" content="<?php echo OG_URL; ?>" />
    <meta property="og:description" content="<?php echo OG_DESCRIPTION; ?>" />
    <meta property="og:image" content="<?php echo OG_IMAGE; ?>" />
    <meta property="og:type" content="article" />
    -->

</head>

<body class="">
    <?php if (!empty(TAG_MANAGER)) { ?>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<?php echo TAG_MANAGER; ?>"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <?php } ?>
    
    <header>
        <div class="bar">
            <div class="middle flex top justify">
                <a href="<?php echo LINK_MAINPAGE; ?>" class="logo"></a>
                <div class="hamburger">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div>
        <nav>
            <a href="#benefity">aktuální benefity</a>
            <a href="#akcni-sety">akční sety</a>
            <a href="#poptavka">nezávazná poptávka</a>
            <a href="#reference">reference</a>
            <a href="<?php echo LINK_KONTAKT; ?>">kontakt</a>
        </nav>
	</header>

    <section class="carousel">
        <div class="carousel-inner">
            <div class="hero h1 is-current">
                <div class="middle relative">
                    <p>Splitové sety NIBE</p>
                    <p>Nyní za&nbsp;akční ceny!</p>
                </div>
            </div>
            <div class="hero h2">
                <div class="middle relative">
                    <p>Nejvyšší kvalita nyní</p>
                    <p>za&nbsp;<span>akční ceny!</span></p>
                    <div></div>
                </div>
            </div>
        </div>
        <button class="carousel-control prev" aria-label="Předchozí slide"><span class="material-icons">arrow_back</span></button>
        <button class="carousel-control next" aria-label="Další slide"><span class="material-icons">arrow_back</span></button>
    </section>

    <main>
        <div class="middle">
            <h1>Speciální nabídka ke&nbsp;splitovým setům:</h1>
            <div class="flex top">
                <div class="piggy icon">
                    <div>Celková sleva<span>až 16&nbsp;500&nbsp;Kč</span><span>bez&nbsp;DPH</span></div>
                </div>
                <div>
                    <p>Zdarma schválení instalace autorizovaným technikem*<span>(ceníková cena 5&nbsp;000&nbsp;Kč bez&nbsp;DPH)</span></p>
                    <p>Zdarma montážní konzole (na&nbsp;zem/stěnu)<span>(ceníková cena až 5&nbsp;835&nbsp;Kč bez&nbsp;DPH)</span></p>
                    <p>Zdarma vyhřívání odvodu kondenzátu KVR&nbsp;10&#8209;10<span>(ceníková cena 5&nbsp;665&nbsp;Kč bez&nbsp;DPH)</span></p>
                    <p class="disclaimer">
                        *V&nbsp;rámci schválení instalace autorizovaným technikem NIBE bude posouzeno dodržení hlavních zásad a&nbsp;předpokladů pro&nbsp;správnou funkci tepelného čerpadla. Z&nbsp;důvodu proškolení a&nbsp;seznámení s&nbsp;obsluhou by měl být přítomen i&nbsp;budoucí uživatel zařízení. <strong>Schválení instalace je předpokladem pro uznání všech forem záruky nad rámec zákonné dvouleté lhůty.</strong>
                    </p>
                </div>
            </div>
            <p class="disclaimer">Nabídka je platná při odebrání zboží do konce <strong>listopadu 2025</strong></p>
            <div class="benefit">
                <p>NIBE - kvalitní, inovativní, švédská značka se&nbsp;skvělým servisem</p>
                <p>Desetitisíce prodaných tepelných čerpadel a&nbsp;spokojených zákazníků</p>
            </div>
        </div>
    </main>

    <section class="sety">
        <div class="middle">
            <h1>Akční sety</h1>
            <article>
                <h2>Prémiový splitový set: <strong>AMS 20 a&nbsp;SVM S332</strong></h2>
                <div class="flex justify top wrap">
                    <div class="image"></div>
                    <div>
                        <p>
                            <strong>kompletní řešení</strong> vytápění, chlazení a&nbsp;ohřevu vody v&nbsp;jednom
                        </p>
                        <p>
                            <strong>sezónní topný faktor</strong> SCOP až&nbsp;5,08
                        </p>
                        <p>
                            <strong>ekologické chladivo</strong> R32
                        </p>
                        <p>
                            <strong>vestavěný zásobník teplé vody</strong> 140&nbsp;l, akumulační nádrž 52&nbsp;l 
                        </p>
                        <p>
                            <strong>výkonné chlazení</strong> až do&nbsp;výstupní teploty vody +7&nbsp;°C
                        </p>
                        <p>
                            <strong>intuitivní ovládání</strong> - přehledný dotykový displej a&nbsp;možnost bezdrátového příslušenství a&nbsp;dalšího rozšíření
                        </p>
                        <p>
                            <strong>chytrá konektivita</strong> -  integrované připojení k&nbsp;internetu, úsporná smart technologie a&nbsp;vzdálené ovládání myUplink pro maximální pohodlí
                        </p>
                        <a href="https://www.nibe.eu/cz/cs/produkty/systemove-jednotky-a-regulace/split-svm-s332---ams-20" target="_blank">více informací</a>
                    </div>
                </div>
                <div class="price">
                    <p>akční ceny:</p>
                    <div class="flex justify top wrap">
                        <div>AMS 20-6 + SVM S332</div>
                        <div>199&nbsp;000&nbsp;Kč bez&nbsp;DPH</div>
                        <p>běžná cena <span>218&nbsp;760&nbsp;Kč bez&nbsp;DPH</span></p>
                    </div>
                    <div class="flex justify top wrap">
                        <div>AMS 20-10 + SVM S332</div>
                        <div>216&nbsp;500&nbsp;Kč bez&nbsp;DPH</div>
                        <p>běžná cena <span>240&nbsp;900&nbsp;Kč bez&nbsp;DPH</span></p>
                    </div>
                </div>

            </article>
            <article>
                <h2>Splitový set: <strong>AMS 20 a&nbsp;DSU 200 split</strong></h2>
                <div class="flex justify top wrap">
                    <div class="image"></div>
                    <div>
                        <p>
                            <strong>chytré tepelné čerpadlo</strong> pro každý domov s&nbsp;Dražickou vnitřní jednotkou
                        </p>
                        <p>
                            <strong>cenově příznivé řešení</strong> vytápění, chlazení a&nbsp;ohřev vody do&nbsp;novostaveb
                        </p>
                        <p>
                            <strong>sezónní topný faktor</strong> SCOP až&nbsp;5,08
                        </p>
                        <p>
                            <strong>ekologické chladivo</strong> R32
                        </p>
                        <p>
                            <strong>vestavěný zásobník teplé vody</strong> 185&nbsp;l
                        </p>
                        <p>
                            <strong>optimální řešení cena - výkon</strong>
                        </p>
                        <p>
                            <strong>zjednodušené ovládání a&nbsp;vzdálená správa</strong> - pomocí aplikace myUplink
                        </p>
                        <a href="https://www.nibe.eu/cz/cs/produkty/tepelna-cerpadla/tepelna-cerpadla-vzduch-voda/split-dsu" target="_blank">více informací</a>
                        
                    </div>
                </div>
                <div class="price">
                    <p>akční ceny:</p>
                    <div class="flex justify top wrap">
                        <div>AMS 20-6 + DSU 200/6 SPLIT</div>
                        <div>162&nbsp;000&nbsp;Kč bez&nbsp;DPH</div>
                    </div>
                    <div class="flex justify top wrap">
                        <div>AMS 20-10 + DSU 200/8-12 SPLIT</div>
                        <div>186&nbsp;000&nbsp;Kč bez&nbsp;DPH</div>
                    </div>
                </div>
            </article>
        </div>
    </section>

    <section class="poptavka">
        <div class="middle">
            <h1>Odeslat nezávaznou poptávku</h1>
            <form action="">
                <div class="flex top justify wrap">
                    <div class="col1">
                        <div class="item">
                            <label for="jmeno" class="label">Jméno a příjmení</label>
                            <input type="text" id="jmeno" name="jmeno">
                        </div>
                        <div class="item">
                            <label for="email" class="label">E-mail</label>
                            <input type="email" id="email" name="email">
                        </div>
                        <div class="item">
                            <label for="telefon" class="label">Telefon</label>
                            <input type="tel" id="telefon" name="telefon">
                        </div>
                        <div class="item">
                            <label for="adresa" class="label">Adresa realizace</label>
                            <input type="text" id="adresa" name="adresa">
                        </div>
                        <div class="item">
                            <label for="psc" class="label">PSČ realizace</label>
                            <input type="text" id="psc" name="psc">
                        </div>
                    </div>
                    <div class="col2">
                        <div class="item">
                            <label for="poznamky" class="label">Poznámky</label>
                            <textarea id="poznamky" name="poznamky"></textarea>
                        </div>
                        <div class="item flex justify wrap top doublecheck">
                            <div class="flex top">
                                <div class="checkbox" role="checkbox" tabindex="0" aria-checked="false">
                                    <span class="material-icons">check</span>
                                </div>
                                <input type="checkbox" name="novostavba" id="novostavba" value="true">
                                <label for="novostavba" class="label check">Novostavba</label> 
                            </div>
                            <div class="flex top">
                                <div class="checkbox" role="checkbox" tabindex="0" aria-checked="false">
                                    <span class="material-icons">check</span>
                                </div>
                                <input type="checkbox" name="rekonstrukce" id="rekonstrukce" value="true">
                                <label for="rekonstrukce" class="label check">Rekonstrukce</label> 
                            </div>
                        </div>
                        <div class="item">
                            <div class="button submit" role="button" tabindex="0">odeslat</div>
                        </div>
                        <div class="item flex top">
                            <div class="checkbox" role="checkbox" tabindex="0" aria-checked="false">
                                <span class="material-icons">check</span>
                            </div>
                            <input type="checkbox" name="souhlas" id="souhlas" value="true">
                            <label for="souhlas" class="label check">Souhlasím se&nbsp;zpracováním osobních údajů podle následujících dokumentů: <a href="./assets/data/GDPR-1-NIBE-2025.pdf" target="_blank">GDPR&nbsp;1</a> a&nbsp;<a href="./assets/data/GDPR-2-NIBE-2025.pdf" target="_blank">GDPR&nbsp;2</a>.</label> 
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <section class="reference">
        <div class="middle">
            <h1>Ukázky instalací v&nbsp;rodinných domech</h1>
            <article class="flex justify top wrap reverse">
                <div class="image">
                    <div></div>
                    <div></div>
                </div>
                <div>
                    <h2>Českobudějovicko</h2>
                    <p><strong>Typ výrobku:</strong> AMS&nbsp;10-16 + Lucie&nbsp;200 split</p>
	                <p><strong>Rok instalace:</strong> 2023</p>
	                <p><strong>Typ stavby:</strong> rodinný dům - rekonstrukce</p>
	                <p><strong>Původní topení:</strong> plyn</p>
	                
	                <p><strong>Obytná/vytápěná plocha:</strong> 300&nbsp;m<sup>2</sup></p>
	                <p><strong>Počet osob v&nbsp;domácnosti:</strong> 4</p>
	                <p><strong>Proč tepelné čerpadlo?</strong> nízké provozní náklady</p>
	                <p><strong>Proč značku NIBE?</strong> doporučení od&nbsp;známého</p>
	                <p><strong>Radiátory/podlahovka:</strong> kombinace</p>
	                
	                <p><strong>Instalační firma:</strong> Miroslav Lenčéš</p>
                </div>
            </article>
            <article class="flex justify top wrap">
                <div class="image">
                    <div></div>
                    <div></div>
                </div>
                <div>
                    <h2>Kutnohorsko</h2>
                    <p><strong>Typ výrobku:</strong> AMS&nbsp;10-6 + Lucie&nbsp;200 split</p>
	                <p><strong>Rok instalace:</strong> 2024</p>
	                <p><strong>Typ stavby:</strong> rodinný dům - rekonstrukce</p>
	                <p><strong>Původní topení:</strong> přímotopy</p>
	                
	                <p><strong>Obytná/vytápěná plocha:</strong> 81&nbsp;m<sup>2</sup></p>
	                <p><strong>Počet osob v&nbsp;domácnosti:</strong> 3</p>
	                <p><strong>Proč tepelné čerpadlo?</strong> temperování v&nbsp;zimě bez přítomnosti</p>
	                <p><strong>Proč značku NIBE?</strong> doporučení od&nbsp;topenáře</p>
	                <p><strong>Radiátory/podlahovka:</strong> podlahovka</p>
	                
	                <p><strong>Instalační firma:</strong> Petr Švehlík</p>
                </div>
            </article>
            <article class="flex justify top wrap reverse">
                <div class="image">
                    <div></div>
                    <div></div>
                </div>
                <div>
                    <h2>Kolínsko</h2>
                    <p><strong>Typ výrobku:</strong> AMS&nbsp;10-16 + NAD&nbsp;v1, OKC NTR/HP, SMO&nbsp;40</p>
	                <p><strong>Rok instalace:</strong> 2022</p>
	                <p><strong>Typ stavby:</strong> rodinný dům - rekonstrukce</p>
	                <p><strong>Původní topení:</strong> elektrokotel</p>
	                
	                <p><strong>Obytná/vytápěná plocha:</strong> 164&nbsp;m<sup>2</sup></p>
	                <p><strong>Počet osob v&nbsp;domácnosti:</strong> 3</p>
	                
	                <p><strong>Proč značku NIBE?</strong> doporučení od&nbsp;známého</p>
	                <p><strong>Radiátory/podlahovka:</strong> kombinace</p>
	                
	                <p><strong>Instalační firma:</strong> Jaroslav Krupička</p>
                </div>
            </article>
        </div>
    </section>

    <section class="nibe">
        <div class="middle">
            <div class="flex top justify wrap">
                <div>
                    <h1>Švédská <br class="show-desktop">tepelná čerpadla nejvyšší kvality</h1>
                    <p>80&nbsp;let zkušeností švédského výrobce NIBE zaručuje špičkovou technologii, vysoce úsporné vytápění, ohřev vody, větrání či chlazení. Tepelná čerpadla NIBE mají srozumitelné ovládání, elegantní skandinávský design, spolehlivý provoz a&nbsp;jsou šetrná k&nbsp;životnímu prostředí.</p>
                    <p>Česko-slovenské zázemí značky NIBE ve&nbsp;společnosti Dražice vám zajistí nejen snadnou komunikaci, síť partnerských instalačních firem, ale především širokou a&nbsp;spolehlivou servisní síť.</p>
                </div>
                <div class="image"></div>
            </div>
        </div>
    </section>

    <footer>
        <div class="middle">
            <p>Kompletní informace o&nbsp;produktech značky NIBE najdete na&nbsp;stránkách <a href="https://www.nibe.cz" target="_blank">www.nibe.cz</a></p>
            <p>Divize NIBE ENERGY SYSTEMS CZ</p>
            <p>Dražice 69; 294&nbsp;71&nbsp;Benátky nad Jizerou; tel.: <a href="tel:00420326370911">+420&nbsp;326&nbsp;370&nbsp;911</a>; e-mail: <a href="mailto:info@nibe.cz">info@nibe.cz</a></p>
        </div>
    </footer>
    
    <div class="notices is-bottom-right"></div>

    <script src="js/carousel.js?v=<?php echo md5(microtime(true)); ?>"></script>
    <script src="js/toast.js?v=2908"></script>
    <script src="js/page.js?v=2908"></script>
    <script src="js/form.js?v=<?php echo md5(microtime(true)); ?>"></script>

</body>
</html>