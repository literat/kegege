@extends('layouts.default')

@section('title', '')

@section('content')
    <section id="header" class="appear"></section>
    <div class="navbar navbar-fixed-top" role="navigation" data-0="line-height:100px; height:100px; background-color:rgba(0,0,0,0);" data-300="line-height:60px; height:60px; background-color:rgba(0,0,0,1);">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="fa fa-bars color-white"></span>
                </button>
                <h1>
                    <a class="navbar-brand" href="{$basePath}" title="Domů" data-0="line-height:90px;" data-300="line-height:50px;"><!--Tomáš Litera--></a>
                </h1>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav" data-0="margin-top:20px;" data-300="margin-top:5px;">
                    <li class="active"><a href="{{ url('/') }}" title="Domů">Domů</a></li>
                    <li><a href="#about" title="O mě">O mě</a></li>
                    <li><a href="#cv" title="Životopis">Životopis</a></li>
                    <li><a href="#works" title="Portfolio">Portfolio</a></li>
                    <li><a href="#contact" title="Kontakt">Kontakt</a></li>
                    <li><a href="{{ url('/en') }}" title="English version">EN</a></li>
                </ul>
            </div><!--/.navbar-collapse -->
        </div>
    </div>

    <section id="opening" class="featured">
        <div class="container">
            <div class="row mar-bot40">
                <div class="col-md-6 col-md-offset-1">
                    <div>
                        <em class="fa fa-5x mar-bot20"></em>
                        <h2 class="slogan">Tomáš Litera</h2>
                        <p>
                            tak se jmenuji. <strong>Nazdar!</strong> Jsem webový vývojář původem z Kolína. Momentálně pracuji a studuji v Praze. IT mě baví, miluji divokou vodu a mám rád outdoor.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- services -->
    <section id="services" class="section pad-bot30 bg-white">
        <div class="container">
            <div class="row mar-bot40">

                <div class="col-lg-4" >
                    <div class="align-center">
                        <em class="fa fa-code fa-5x mar-bot20"></em>
                        <h4 class="text-bold">Webový vývojář</h4>
                        <p>Navrhuji, analyzuji, vyvíjím, programuji, kóduji, styluji, testuji a nasazuji webové aplikace. Od začátku až po výsledný produkt!</p>
                    </div>
                </div>

                <div class="col-lg-4" >
                    <div class="align-center">
                        <!--<em class="fa fa-terminal fa-5x mar-bot20"></em>-->
                        <figure class="member-photo"><img src="/img/canoeing.png" alt="Kanoe" /></figure>
                        <h4 class="text-bold">Kajakář</h4>
                        <p>Mám rád divokou vodu! Kajak je můj dopravní prostředek. Od těch nejmenších potoků až po velké řeky. Ten nejlepší den je vždy na vodě!</p>
                    </div>
                </div>

                <div class="col-lg-4" >
                    <div class="align-center">
                        <!--<em class="fa fa-bolt fa-5x mar-bot20"></em>-->
                        <figure class="member-photo"><img src="/img/skaut.png" alt="Logo Skaut" /></figure>
                        <h4 class="text-bold">Skaut</h4>
                        <p>Jsem členem Junáka ČR od roku 2004. Za tu dobu jsem prošel skautským životem od vedoucího, činovníka až po představitele <a href="http://vodni.skauting.cz/" title="Web vodních skautů ČR">HKVS</a>.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- spacer section:testimonial -->
    <section id="testimonials" class="section" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="align-center">
                        <div class="testimonial pad-top40 pad-bot40 clearfix">
                            <h5>&nbsp;</h5>
                            <br/>
                            <span class="author">&nbsp;</span>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- about -->
    <section id="about" class="section appear clearfix">
        <div class="container">

            <div class="row mar-bot40">
                <div class="col-md-offset-3 col-md-6">
                    <div class="section-header">
                        <h3 class="section-heading animated" data-animation="bounceInUp">Kdo jsem?</h3>
                        <p>Hlavně nadšenec do IT a outdooru. Student vysoké školy a vedoucí skautů.</p>
                    </div>
                </div>
            </div>

            <div class="row align-center mar-bot40">

                <div class="col-md-3">
                    <div class="team-member">
                        <figure class="member-photo"><img src="/img/me/student.jpg" alt="Já student" /></figure>
                        <div class="team-detail">
                            <h4>Student</h4>
                            <p class="text-justify">Začínal jsem na 6. základní škole v Kolíně, s rozšířenou výukou jazyků. Dále můj studijní život pokračoval přes kolínské Gymnázium až na vysokou školu. Nejprve jsem studoval Vysoké učení technické v Brně, ale po 3,5 letech se mi studium nepodařilo dokončit. Nyní se o to samé snažím na České zemědělské univerzitě, a jsem úspěšnější.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="team-member">
                        <figure class="member-photo"><img src="/img/me/developer.jpg" alt="Já vývojář" /></figure>
                        <div class="team-detail">
                            <h4>Vývojář</h4>
                            <p class="text-justify">O počítače jsem se začal zajímat již na základní škole. Na Gymnáziu v Kolíně jsem se dostal blíže k vývoji webových aplikací a k PHP. A to mě uchvátilo. Ihned po maturitě jsem nastoupil na praxi do webové firmy, abych dále rozvíjel své schopnosti. V současné době pracuji pro Economia a. s., kde i nadále vyvýjím webové aplikace v PHP. Své schopnosti vývojáře uplatňuji i v Junáku, pro kterého jsem vytvořil celou řadu webů a aplikací.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="team-member">
                        <figure class="member-photo"><img src="/img/me/kayaker.jpg" alt="Já kajakář" /></figure>
                        <div class="team-detail">
                            <h4>Kajakář</h4>
                            <p class="text-justify">Na divoké vodě trávím svůj volný čas. A to hlavně na kajaku, který mám ze všech lodí nejraději. Každoročně se mi daří vyjíždět do zahraničí a poznávat nové řeky a místa. V neposlední řadě tak Rakousko, jižní Francie, italský Piemont a další. A Česká republika má také své klenoty jako Čertovy proudy na Vltavě, soutěsky na Labi nebo Jizeru a další řeky v Krkonoších i jinde.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="team-member">
                        <figure class="member-photo"><img src="/img/me/scout.jpg" alt="Já skaut" /></figure>
                        <div class="team-detail">
                            <h4>Skaut</h4>
                            <p class="text-justify">V roce 2004 jsem se stal členem Junáka ČR, největší dětské organizace v republice. Pro své působení jsem si vybral přístav vodních skautů Poutníci Kolin, neb mám vodu a lodě rád. Vedl jsem zde dětský oddíl a vychoval z nich své nástupce. Prošel jsem si skautským vzděláváním a díky tomu jsem pak mohl přístav i spoluvést jako zástupce. Skautingu, vzdělávání a výchově se věnuji i nadále jako člen Kapitanátu vodních skautů.</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- /about -->

    <!-- spacer section:stats -->
    <section id="parallax-cv" class="section pad-top40 pad-bot40" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="align-center pad-top40 pad-bot40">
                <blockquote class="bigquote color-white">&nbsp;</blockquote>
                <p class="color-white">&nbsp;</p>
            </div>
        </div>
    </section>

    <!-- cv -->
    <section id="cv" class="section appear clearfix profile activate">
        <div class="container">

            <div class="row mar-bot40">
                <div class="col-md-offset-3 col-md-6">
                    <div class="section-header">
                        <h3 class="section-heading animated" data-animation="bounceInUp">Životopis</h3>
                        <p>neboli Curiculum Vitae</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-7 col-sm-offset-5">
                    <ul>
                        <li class="title"><span class="fa fa-user"></span>Profil</li>
                        <li>
                            <span class="note">Celé jméno</span>
                            <p><strong>Tomáš Litera</strong></p>
                        </li>
                        <li>
                            <span class="note">Narozen</span>
                            <p><strong>29. června 1988</strong></p>
                            <p><strong>Kolín, Česká republika</strong></p>
                        </li>

                        <li>
                            <span class="note">LinkedIn Profil</span>
                            <p><strong><a href="https://www.linkedin.com/in/tomaslitera" title="LinkedIn profil">https://www.linkedin.com/in/tomaslitera</a></strong></p>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-7 col-sm-offset-5">
                    <ul>
                        <li class="title"><span class="fa fa-briefcase"></span>Pracovní zkušenosti</li>
                        <li>
                            <span class="note">červenec 2014 - současnost</span>
                            <p><strong>Economia, a.s.</strong></p>
                            <p><strong>PHP vývojář</strong> v Praze, ČR</p>
                            <p class="description">Od roku 2014 je Centrum Holdings ve vlastnictví Economia a. s.</p>
                        </li>
                        <li>
                            <span class="note">únor 2011 - červen 2014</span>
                            <p><strong>Centrum Holdings</strong></p>
                            <p><strong>PHP vývojář</strong> v Praze, ČR</p>
                            <p class="description">Vývojář a správce CMS systémů (backend a frontend), na kterých běží weby Aktuálně.cz a Žena.cz. Práce s Interpire Newsletter Emailer.</p>
                        </li>
                        <li>
                            <span class="note">prosinec 2008 - červen 2014</span>
                            <p><strong>Na volné noze</strong></p>
                            <p><strong>Student</strong> v Brně, ČR</p>
                            <p class="description">Práce na rozličných projektech jak v rámci studia, tak i zakázky pro soukromé osoby.</p>
                        </li>
                        <li>
                            <span class="note">červen 2008 - prosinec 2008</span>
                            <p><strong>Centrum Holdings</strong></p>
                            <p><strong>Administrátor webových aplikací</strong> v Praze, ČR</p>
                            <p class="description">Správa CMS systému pro weby Aktuálně.cz, Žena.cz, Bleskově.cz, Pikant.cz</p>
                        </li>
                        <li>
                            <span class="note">duben 2008 - červen 2008</span>
                            <p><strong>NetCentrum</strong></p>
                            <p><strong>Administrátor webových aplikací</strong> v Praze, ČR</p>
                            <p class="description">Správa CMS systému pro weby Aktuálně.cz, Žena.cz, Bleskově.cz, Pikant.cz</p>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-7 col-sm-offset-5">
                    <ul>
                        <li class="title"><span class="fa fa-book"></span>Vzdělání</li>
                        <li>
                            <span class="note">červen 2012 - červen 2015</span>
                            <p><strong>Bakalářské studium</strong></p>
                            <p><strong>Česká zemědělská univerzita</strong> v Praze - Suchdol, Česká republika</p>
                            <p class="description">Provozně-ekonomická fakulta, obor INFO</p>
                        </li>
                        <li>
                            <span class="note">červen 2008 - únor 2012</span>
                            <p><strong>Bakalářské studium</strong> - nedokončeno</p>
                            <p><strong>Vysoké učení technické</strong> v Brně, Česká republika</p>
                            <p class="description">Fakulta informačních technologií, obor Informatika</p>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-7 col-sm-offset-5">
                    <ul>
                        <li class="title"><span class="fa fa-tasks"></span>Profesionální schopnosti</li>
                        <li>
                            <p>HTML/CSS<span class="annotation pull-right">80%</span></p>
                            <div class="progress">
                                <div style="width: 95%;" class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </li>
                        <li>
                            <p>PHP<span class="annotation pull-right">75%</span></p>
                            <div class="progress">
                                <div style="width: 85%;" class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </li>
                        <li>
                            <p>Javascript<span class="annotation pull-right">60%</span></p>
                            <div class="progress">
                                <div style="width: 70%;" class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-7 col-sm-offset-5">
                    <ul>
                        <li class="title"><span class="fa fa-bar-chart-o"></span>Osobní vlastnosti</li>
                        <li>
						<span class="chart" data-percent="90"><span class="skill">Kreativita</span>
							<span class="percent"></span>
						</span>
                            <span class="chart" data-percent="80"><span class="skill">Přizpůsobivost</span>
							<span class="percent"></span>
						</span>
                            <span class="chart" data-percent="75"><span class="skill">Vedení lidí</span>
							<span class="percent"></span>
						</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-7 col-sm-offset-5">
                    <ul>
                        <li class="title"><span class="fa fa-heart-o"></span>Zájmy</li>
                        <li>
                            <p><strong>Divoká voda</strong></p>
                            <p class="description">Pádlování na kajaku na divoké vodě je pro mě tím největším odpočinkem. Sjíždět peřeje, skákat jezy a vodopády nebo jen tak trénovat techniku na <a href="http://vodackyareal.cz/" title="Vodácký areál Praha - Troja">trojském kanále</a>.</p>
                        </li>
                        <li>
                            <p><strong>Outdoorové sporty</strong></p>
                            <p class="description">Rád jezdím na horském kole a běhám, poslední dobou i se psem. Není mi cizí ani lezení po skalách a výpravy do divoké přírody a spaní pod širákem.</p>
                        </li>
                        <li>
                            <p><strong>Skauting</strong></p>
                            <p class="description">Členem Junáka ČR jsem se stal v roce 2004 a od té doby vedu děti i dospělé v kolínské přístavu vodních skautů Poutníci.</p>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </section>
    <!-- /cv -->

    <!-- spacer section:stats -->
    <section id="parallax-portfolio" class="section pad-top40 pad-bot40" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="align-center pad-top40 pad-bot40">
                <blockquote class="bigquote color-white">&nbsp;</blockquote>
                <p class="color-white">&nbsp;</p>
            </div>
        </div>
    </section>

    <!-- section works -->
    <section id="works" class="section appear clearfix">
        <div class="container">

            <div class="row mar-bot40">
                <div class="col-md-offset-3 col-md-6">
                    <div class="section-header">
                        <h3 class="section-heading animated" data-animation="bounceInUp">Portfolio</h3>
                        <p>Projekty a startupy aneb co se mi podařilo vytvořit od té doby, kdy jsem se naučil psát pořádně na klávesnici.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <nav id="filter" class="col-md-12 text-center">
                    <ul>
                        <li><a href="#" class="current btn-theme btn-small" data-filter="*" title="Filtr: všechny">Všechny</a></li>
                        <li><a href="#"  class="btn-theme btn-small" data-filter=".webdesign" title="Filtr: Web design">Web Design</a></li>
                        <li><a href="#"  class="btn-theme btn-small" data-filter=".apps" title="Filtr: aplikace">Aplikace</a></li>
                        <li ><a href="#" class="btn-theme btn-small" data-filter=".projects" title="Filtr: projekty">Projekty</a></li>
                    </ul>
                </nav>
                <div class="col-md-12">
                    <div class="row">
                        <div class="portfolio-items isotopeWrapper clearfix" id="3">

                            <article class="col-md-4 isotopeItem webdesign">
                                <div class="portfolio-item">
                                    <img src="/img/portfolio/drager-theme.png" alt="Náhled Drager web šablona" />
                                    <div class="portfolio-desc align-center">
                                        <div class="folio-info">
                                            <h4><a href="http://drager.skauting.cz/" title="Web LK Drager">LK Drager WordPress Theme</a></h4>
                                            <a href="/img/portfolio/drager-theme.png" class="fancybox"><em class="fa fa-plus fa-2x"></em></a>
                                        </div>
                                    </div>
                                </div>
                            </article>

                            <article class="col-md-4 isotopeItem webdesign">
                                <div class="portfolio-item">
                                    <img src="/img/portfolio/navigamus12-theme.png" alt=" Náhled Navigamus web šablona" />
                                    <div class="portfolio-desc align-center">
                                        <div class="folio-info">
                                            <h4><a href="http://www.navigamus.cz/" title="Web Navigamus.cz">Navigamus 2012 WordPress Theme</a></h4>
                                            <a href="/img/portfolio/navigamus12-theme.png" class="fancybox"><em class="fa fa-plus fa-2x"></em></a>
                                        </div>
                                    </div>
                                </div>
                            </article>

                            <article class="col-md-4 isotopeItem webdesign">
                                <div class="portfolio-item">
                                    <img src="/img/portfolio/poutnicikolin-theme.png" alt=" Náhled Poutnicikolin web šablona" />
                                    <div class="portfolio-desc align-center">
                                        <div class="folio-info">
                                            <h4><a href="http://www.poutnicikolin.cz/" title="Web Poutníc Kolín">Poutnicikolin WordPress Theme</a></h4>
                                            <a href="/img/portfolio/poutnicikolin-theme.png" class="fancybox"><em class="fa fa-plus fa-2x"></em></a>
                                        </div>
                                    </div>
                                </div>
                            </article>

                            <article class="col-md-4 isotopeItem webdesign">
                                <div class="portfolio-item">
                                    <img src="/img/portfolio/3jezy-theme.png" alt="Náhled 3 jezy web šablona" />
                                    <div class="portfolio-desc align-center">
                                        <div class="folio-info">
                                            <h4><a href="http://3jezy.skauting.cz/" title="Web 3 jezy">3 jezy Joomla Theme</a></h4>
                                            <a href="/img/portfolio/3jezy-theme.png" class="fancybox"><em class="fa fa-plus fa-2x"></em></a>
                                        </div>
                                    </div>
                                </div>
                            </article>

                            <article class="col-md-4 isotopeItem webdesign">
                                <div class="portfolio-item">
                                    <img src="/img/portfolio/dsw-oddil-theme.png" alt="Náhled DSW oddil web šablona" />
                                    <div class="portfolio-desc align-center">
                                        <div class="folio-info">
                                            <h4><a href="http://dsw-oddil.skauting.cz/" title="Web Dobrý skautský web Oddíl">DSW Oddil WordPress Theme</a></h4>
                                            <a href="/img/portfolio/dsw-oddil-theme.png" class="fancybox"><em class="fa fa-plus fa-2x"></em></a>
                                        </div>
                                    </div>
                                </div>
                            </article>

                            <article class="col-md-4 isotopeItem apps">
                                <div class="portfolio-item">
                                    <img src="/img/portfolio/srazyvs-app.png" alt="Náhled aplikace SrazyVS" />
                                    <div class="portfolio-desc align-center">
                                        <div class="folio-info">
                                            <h4><a href="http://vodni.skauting.cz/srazvs/registration/" title="Registrace na Sraz vodních skautů">SrazyVS Application</a></h4>
                                            <a href="/img/portfolio/srazyvs-app.png" class="fancybox"><em class="fa fa-plus fa-2x"></em></a>
                                        </div>
                                    </div>
                                </div>
                            </article>

                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <section id="parallax-contact" class="section parallax" data-stellar-background-ratio="0.5">
        <div class="align-center pad-top40 pad-bot40">
            <blockquote class="bigquote color-white">&nbsp;</blockquote>
            <p class="color-white">&nbsp;</p>
        </div>
    </section>

    <!-- contact -->
    <section id="contact" class="section appear clearfix">
        <div class="container">

            <div class="row mar-bot40">
                <div class="col-md-offset-3 col-md-6">
                    <div class="section-header">
                        <h3 class="section-heading animated" data-animation="bounceInUp">Napište mi</h3>
                        <p>Máte-li pro mne pracovní nabídku nebo Vás jenom zaujali moje práce, dejte mi vědět!</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="cform" id="contact-form">
                        <div id="sendmessage">
                            Vaše zpráva byla odeslána! Děkuji.
                        </div>
                        <form action="/contact/contact.php" method="post" role="form" class="contactForm">
                            <div class="form-group">
                                <label for="name">Vaše jméno</label>
                                <input type="text" name="name" class="form-control" id="name" placeholder="Vaše jméno" data-rule="maxlen:4" data-msg="Please enter at least 4 chars" />
                                <div class="validation"></div>
                            </div>
                            <div class="form-group">
                                <label for="email">Váš E-mail</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Váš E-mail" data-rule="email" data-msg="Please enter a valid email" />
                                <div class="validation"></div>
                            </div>
                            <div class="form-group">
                                <label for="subject">Předmět</label>
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Předmět" data-rule="maxlen:4" data-msg="Please enter at least 8 chars of subject" />
                                <div class="validation"></div>
                            </div>
                            <div class="form-group">
                                <label for="message">Zpráva</label>
                                <textarea class="form-control" name="message" id="message" rows="5" data-rule="required" data-msg="Prosím, něco hezkého mi napište..."></textarea>
                                <div class="validation"></div>
                            </div>

                            <button type="submit" class="btn btn-theme pull-left">ODESLAT ZPRÁVU</button>
                        </form>

                    </div>
                </div>
                <!-- ./span12 -->
            </div>

        </div>
    </section>

    <!-- map -->
    <section id="maps" class="clearfix">
        <div id="map"></div>
    </section>

    <section id="footer" class="section footer">
        <div class="container">
            <div class="row animated opacity mar-bot20" data-andown="fadeIn" data-animation="animation">
                <div class="col-sm-12 align-center">
                    <ul class="social-network social-circle">
                        <!--<li><a href="#" class="icoRss" title="Rss"><em class="fa fa-rss"></em></a></li>-->
                        <li>
                            <a href="https://www.facebook.com/literat/" class="icoFacebook" title="Facebook">
                                <em class="fa fa-facebook"></em>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="icoTwitter" title="Twitter">
                                <em class="fa fa-twitter"></em>
                            </a>
                        </li>
                        <li>
                            <a href="https://plus.google.com/108355877304812581541/posts" class="icoGoogle" title="Google +">
                                <em class="fa fa-google-plus"></em>
                            </a>
                        </li>
                        <li>
                            <a href="https://cz.linkedin.com/in/tomaslitera/" class="icoLinkedin" title="Linkedin">
                                <em class="fa fa-linkedin"></em>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.github.com/literat/" class="icoGithub" title="Github">
                                <em class="fa fa-github"></em>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="row align-center copyright">
                <div class="col-sm-12">
                    <p>Copyright &copy; 2014 - {{ $year }} Tomáš Litera @ <a href="http://litera.me">litera.me</a></p>
                </div>
            </div>
        </div>

    </section>
    <a href="#header" class="scrollup"><em class="fa fa-chevron-up"></em></a>
@endsection