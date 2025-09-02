<!DOCTYPE html>
<html lang="sk">

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
            <a href="#benefity">aktuálne benefity</a>
            <a href="#akcni-sety">akčné sety</a>
            <a href="#poptavka">nezáväzný dopyt</a>
            <a href="#reference">referencie</a>
            <a href="<?php echo LINK_KONTAKT; ?>">kontakt</a>
        </nav>
	</header>

    <section class="carousel">
        <div class="carousel-inner">
            <div class="hero h1 is-current">
                <div class="middle relative">
                    <p>Splitové sety NIBE</p>
                    <p>Teraz za&nbsp;akčné ceny!</p>
                </div>
            </div>
            <div class="hero h2">
                <div class="middle relative">
                    <p>Najvyššia kvalita teraz</p>
                    <p>za&nbsp;<span>akčné ceny!</span></p>
                    <div></div>
                </div>
            </div>
        </div>
        <button class="carousel-control prev" aria-label="Předchozí slide"><span class="material-icons">arrow_back</span></button>
        <button class="carousel-control next" aria-label="Další slide"><span class="material-icons">arrow_back</span></button>
    </section>

    <main>
        <div class="middle">
            <h1>Špeciálna ponuka k&nbsp;splitovým setom:</h1>
            <div class="flex top">
                <div class="piggy icon">
                    <div>Celková zľava<span>až 626&nbsp;&euro;</span><span>bez&nbsp;DPH</span></div>
                </div>
                <div>
                    <p>Zadarmo schválenie inštalácie autorizovaným technikom*<span>(cenníková cena 200&nbsp;&euro; bez&nbsp;DPH)</span></p>
                    <p>Zadarmo montážna konzola (na&nbsp;zem/stenu)<span>(cenníková cena až 199&nbsp;&euro; bez&nbsp;DPH)</span></p>
                    <p>Zadarmo vyhrievanie odvodu kondenzátu KVR&nbsp;10&#8209;10<span>(cenníková cena 227&nbsp;&euro; bez&nbsp;DPH)</span></p>
                    <p class="disclaimer">
                        *V&nbsp;rámci schválenia inštalácie autorizovaným technikom NIBE bude posúdené dodržanie hlavných zásad a&nbsp;predpokladov pre&nbsp;správnu funkciu tepelného čerpadla. Z&nbsp;dôvodu preškolenia a&nbsp;zoznámenia s&nbsp;obsluhou by mal byť prítomný aj&nbsp;budúci užívateľ zariadenia. <strong>Schválenie inštalácie je predpokladom pre uznanie všetkých foriem záruky nad rámec zákonnej dvojročnej lehoty.</strong>
                    </p>
                </div>
            </div>
            <p class="disclaimer">Ponuka je platná pri odobratí tovaru do&nbsp;konca <strong>novembra 2025</strong></p>
            <div class="benefit">
                <p>NIBE - kvalitná, inovatívna, švédska značka so&nbsp;skvelým servisom</p>
                <p>Desaťtisíce predaných tepelných čerpadiel a&nbsp;spokojných zákazníkov</p>
            </div>
        </div>
    </main>

    <section class="sety">
        <div class="middle">
            <h1>Akčné sety</h1>
            <article>
                <h2>Prémiový splitový set: <strong>AMS 20 a&nbsp;SVM S332</strong></h2>
                <div class="flex justify top wrap">
                    <div class="image"></div>
                    <div>
                        <p>
                            <strong>kompletné riešenie</strong> vykurovania, chladenia a&nbsp;ohrevu vody v&nbsp;jednom
                        </p>
                        <p>
                            <strong>sezónny vykurovací faktor</strong> SCOP až&nbsp;5,08
                        </p>
                        <p>
                            <strong>ekologické chladivo</strong> R32
                        </p>
                        <p>
                            <strong>vstavaný zásobník teplej vody</strong> 140&nbsp;l, akumulačná nádrž 52&nbsp;l 
                        </p>
                        <p>
                            <strong>výkonné chladenie</strong> až do&nbsp;výstupnej teploty vody +7&nbsp;°C
                        </p>
                        <p>
                            <strong>intuitívne ovládanie</strong> - prehľadný dotykový displej a&nbsp;možnosť bezdrôtového príslušenstva a&nbsp;ďalšieho rozšírenia
                        </p>
                        <p>
                            <strong>múdra konektivita</strong> -  integrované pripojenie k&nbsp;internetu, úsporná smart technológia a&nbsp;vzdialené ovládanie myUplink pre maximálne pohodlie
                        </p>
                        <a href="https://www.nibe.eu/sk/sk/produkty/systemove-jednotky-a-regulacie/split-svm-s332---ams-20" target="_blank">viac informácií</a>
                    </div>
                </div>
                <div class="price">
                    <p>akčné ceny:</p>
                    <div class="flex justify top wrap">
                        <div>AMS 20-6 + SVM S332</div>
                        <div>8&nbsp;120&nbsp;&euro; bez&nbsp;DPH</div>
                        <p>bežná cena <span>8&nbsp;666&nbsp;&euro; bez&nbsp;DPH</span></p>
                    </div>
                    <div class="flex justify top wrap">
                        <div>AMS 20-10 + SVM S332</div>
                        <div>8&nbsp;830&nbsp;&euro; bez&nbsp;DPH</div>
                        <p>bežná cena <span>9&nbsp;546&nbsp;&euro; bez&nbsp;DPH</span></p>
                    </div>
                </div>

            </article>
            <article>
                <h2>Splitový set: <strong>AMS 20 a&nbsp;DSU 200 split</strong></h2>
                <div class="flex justify top wrap">
                    <div class="image"></div>
                    <div>
                        <p>
                            <strong>inteligentné tepelné čerpadlo</strong> pre každý domov s&nbsp;Dražickou vnútornou jednotkou
                        </p>
                        <p>
                            <strong>cenovo priaznivé riešenie</strong> vykurovania, chladenia a&nbsp;ohrev vody do&nbsp;novostavieb
                        </p>
                        <p>
                            <strong>sezónny vykurovací faktor</strong> SCOP až&nbsp;5,08
                        </p>
                        <p>
                            <strong>ekologické chladivo</strong> R32
                        </p>
                        <p>
                            <strong>vstavaný zásobník teplej vody</strong> 185&nbsp;l
                        </p>
                        <p>
                            <strong>optimálne riešenie cena - výkon</strong>
                        </p>
                        <p>
                            <strong>zjednodušené ovládanie a&nbsp;vzdialená správa</strong> - pomocou aplikácie myUplink
                        </p>
                        <a href="https://www.nibe.eu/sk/sk/produkty/tepelne-cerpadla/tepelne-cerpadla-vzduch-voda/split-dsu" target="_blank">viac informácií</a>
                        
                    </div>
                </div>
                <div class="price">
                    <p>akčné ceny:</p>
                    <div class="flex justify top wrap">
                        <div>AMS 20-6 + DSU 200/6 SPLIT</div>
                        <div>6&nbsp;610&nbsp;&euro; bez&nbsp;DPH</div>
                    </div>
                    <div class="flex justify top wrap">
                        <div>AMS 20-10 + DSU 200/8-12 SPLIT</div>
                        <div>7&nbsp;590&nbsp;&euro; bez&nbsp;DPH</div>
                    </div>
                </div>
            </article>
        </div>
    </section>

    <section class="poptavka">
        <div class="middle">
            <h1>Odoslať nezáväzný dopyt</h1>
            <form action="">
                <div class="flex top justify wrap">
                    <div class="col1">
                        <div class="item">
                            <label for="jmeno" class="label">Meno a priezvisko</label>
                            <input type="text" id="jmeno" name="jmeno">
                        </div>
                        <div class="item">
                            <label for="email" class="label">E-mail</label>
                            <input type="email" id="email" name="email">
                        </div>
                        <div class="item">
                            <label for="telefon" class="label">Telefón</label>
                            <input type="tel" id="telefon" name="telefon">
                        </div>
                        <div class="item">
                            <label for="adresa" class="label">Adresa realizácie</label>
                            <input type="text" id="adresa" name="adresa">
                        </div>
                        <div class="item">
                            <label for="psc" class="label">PSČ realizácie</label>
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
                                <label for="rekonstrukce" class="label check">Rekonštrukcia</label> 
                            </div>
                        </div>
                        <div class="item">
                            <div class="button submit" role="button" tabindex="0">odoslať</div>
                        </div>
                        <div class="item flex top">
                            <div class="checkbox" role="checkbox" tabindex="0" aria-checked="false">
                                <span class="material-icons">check</span>
                            </div>
                            <input type="checkbox" name="souhlas" id="souhlas" value="true">
                            <label for="souhlas" class="label check">Súhlasím so&nbsp;<a href="./assets/data/GDPR-NIBE-2025-SK.pdf" target="_blank">spracovaním osobných údajov</a>.</label> 
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <section class="reference">
        <div class="middle">
            <h1>Ukážky inštalácií v&nbsp;rodinných domoch</h1>
            <article class="flex justify top wrap reverse">
                <div class="image">
                    <div></div>
                    <div></div>
                </div>
                <div>
                    <h2>AMS&nbsp;10-16 + Lucie&nbsp;200 split</h2>
	                <p><strong>Rok inštalácie:</strong> 2023</p>
	                <p><strong>Typ stavby:</strong> rodinný dom - rekonštrukcia</p>
	                <p><strong>Pôvodné kúrenie:</strong> plyn</p>
	                <p><strong>Obytná/vykurovaná plocha:</strong> 300&nbsp;m<sup>2</sup></p>
	                <p><strong>Počet osôb v&nbsp;domácnosti:</strong> 4</p>
	                <p><strong>Prečo tepelné čerpadlo?</strong> nízke prevádzkové náklady</p>
	                <p><strong>Prečo značku NIBE?</strong> odporúčanie od&nbsp;známého</p>
	                <p><strong>Radiátory/podlahovka:</strong> kombinácia</p>
                </div>
            </article>
            <article class="flex justify top wrap">
                <div class="image">
                    <div></div>
                    <div></div>
                </div>
                <div>
                    <h2>AMS&nbsp;10-6 + Lucie&nbsp;200 split</h2>
	                <p><strong>Rok inštalácie:</strong> 2024</p>
	                <p><strong>Typ stavby:</strong> rodinný dom - rekonštrukcia</p>
	                <p><strong>Pôvodné kúrenie:</strong> priamotopy</p>
	                <p><strong>Obytná/vykurovaná plocha:</strong> 81&nbsp;m<sup>2</sup></p>
	                <p><strong>Počet osôb v&nbsp;domácnosti:</strong> 3</p>
	                <p><strong>Prečo tepelné čerpadlo?</strong> temperovanie v&nbsp;zime bez prítomnosti</p>
	                <p><strong>Prečo značku NIBE?</strong> odporúčania od&nbsp;kúrenára</p>
	                <p><strong>Radiátory/podlahovka:</strong> podlahovka</p>
                </div>
            </article>
            <article class="flex justify top wrap reverse">
                <div class="image">
                    <div></div>
                    <div></div>
                </div>
                <div>
                    <h2>AMS&nbsp;10-16 + NAD&nbsp;v1, OKC NTR/HP, SMO&nbsp;40</h2>
	                <p><strong>Rok inštalácie:</strong> 2022</p>
	                <p><strong>Typ stavby:</strong> rodinný dom - rekonštrukcia</p>
	                <p><strong>Pôvodné kúrenie:</strong> priamotopy</p>
	                <p><strong>Obytná/vykurovaná plocha:</strong> 164&nbsp;m<sup>2</sup></p>
	                <p><strong>Počet osôb v&nbsp;domácnosti:</strong> 3</p>
	                <p><strong>Prečo tepelné čerpadlo?</strong> temperovanie v&nbsp;zime bez prítomnosti</p>
	                <p><strong>Prečo značku NIBE?</strong> odporúčanie od&nbsp;známého</p>
	                <p><strong>Radiátory/podlahovka:</strong> kombinácia</p>
                </div>
            </article>
        </div>
    </section>

    <section class="nibe">
        <div class="middle">
            <div class="flex top justify wrap">
                <div>
                    <h1>Švédske <br class="show-desktop">tepelné čerpadlá najvyššej kvality</h1>
                    <p>80&nbsp;rokov skúseností švédskeho výrobcu NIBE zaručuje špičkovú technológiu, vysoko úsporné vykurovanie, ohrev vody, vetranie či&nbsp;chladenie. Tepelné čerpadlá NIBE majú zrozumiteľné ovládanie, elegantný škandinávsky dizajn, spoľahlivú prevádzku a&nbsp;sú šetrné k&nbsp;životnému prostrediu.</p>
                    <p>Česko-slovenské zázemie značky NIBE v&nbsp;spoločnosti Dražice vám zaistí nielen jednoduchú komunikáciu, sieť partnerských inštalačných firiem, ale predovšetkým širokú a&nbsp;spoľahlivú servisnú sieť.</p>
                </div>
                <div class="image"></div>
            </div>
        </div>
    </section>

    <footer>
        <div class="middle">
            <p>Kompletné informácie o&nbsp;produktoch značky NIBE nájdete na&nbsp;stránkách <a href="https://www.nibe.sk" target="_blank">www.nibe.sk</a></p>
            <p>Divízia NIBE ENERGY SYSTEMS CZ</p>
            <p>Dražice 69; 294&nbsp;71&nbsp;Benátky nad Jizerou; tel.: <a href="tel:00420326370911">+420&nbsp;326&nbsp;370&nbsp;911</a>; e-mail: <a href="mailto:info@nibe.cz">info@nibe.cz</a></p>
        </div>
    </footer>
    
    <div class="notices is-bottom-right"></div>

    <script src="js/carousel.js?v=2908"></script>
    <script src="js/toast.js?v=2908"></script>
    <script src="js/page.js?v=2908"></script>
    <script src="js/form.js?v=<?php echo md5(microtime(true)); ?>"></script>

</body>
</html>