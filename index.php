<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, user-scalable=no, maximum-scale=1.0" />
        <meta name="description" content="Maxime Neuville, développeur web a La Rochelle. Je développe sur le framework Symfony 2, venez découvrir Freezy mon dernier projet web/mobile.">
        <meta name="keywords" content="maxime neuville, développeur web, développeur symfony, symfony 2, phonegap, méthode agile, la rochelle" />
        <meta name="author" content="Maxime Neuville">
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <!-- Facebook -->
        <meta property="og:type" content="website">
        <meta property="og:title" content="Maxime Neuville - Développeur web Symfony2 à La Rochelle">
        <meta property="og:site_name" content="Maxime Neuville">
        <meta property="og:description" content="Maxime Neuville, développeur web a La Rochelle. Je développe sur le framework Symfony 2, venez découvrir Freezy mon dernier projet web/mobile.">
        <meta property="og:url" content="http://www.maximeneuville.fr">
        <meta property="og:image" content="http://www.maximeneuville.fr/medias/logo-facebook.png" />
        <meta property="og:image:type" content="image/jpg">
        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="57x57" href="medias/favicons/apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="medias/favicons/apple-touch-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="medias/favicons/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="medias/favicons/apple-touch-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="medias/favicons/apple-touch-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="medias/favicons/apple-touch-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="medias/favicons/apple-touch-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="medias/favicons/apple-touch-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="medias/favicons/apple-touch-icon-180x180.png">
        <link rel="icon" type="image/png" href="medias/favicons/favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="medias/favicons/android-chrome-192x192.png" sizes="192x192">
        <link rel="icon" type="image/png" href="medias/favicons/favicon-96x96.png" sizes="96x96">
        <link rel="icon" type="image/png" href="medias/favicons/favicon-16x16.png" sizes="16x16">
        <link rel="manifest" href="medias/favicons/android-chrome-manifest.json">
        <link rel="shortcut icon" href="medias/favicons/favicon.ico">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="msapplication-TileImage" content="medias/favicons/mstile-144x144.png">
        <meta name="msapplication-config" content="medias/favicons/browserconfig.xml">
        <meta name="theme-color" content="#ffffff">
        <title>Maxime Neuville - Développeur web Symfony2 à La Rochelle</title>
        <!-- Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <!-- Javascript -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="js/jquery-ui.min.js"></script>
        <script src="js/common.min.js"></script>
    </head>
    <body>
        <div class="wrapper">
            <header>
                <h1>Maxime<i class="mask"></i><span class="name">Neuville</span></h1>
                <nav>
                    <ul>
                        <li><a href="#about" title="À propos"><span data-hover="À propos">À propos</span></a></li>
                        <li><a href="#skills" title="Compétences"><span data-hover="Compétences">Compétences</span></a></li>
                        <li><a href="#career" title="Mon parcours"><span data-hover="Parcours">Parcours</span></a></li>
                        <li><a href="#projects" title="Projets"><span data-hover="Projets">Projets</span></a></li>
                        <li><a href="#contact" title="Me contacter"><span data-hover="Contact">Contact</span></a></li>
                    </ul>
                </nav>
            </header>
            <section>
                <article id="about">
                    <div class="arrow"></div>
                    <h2>À propos<span class="border"></span></h2>
                    <div class="clearfix"></div>
                    <p>Développeur web de <?php echo date_diff(date_create('1985-09-25'), date_create('today'))->y; ?> ans, je me spécialise dans la création d'applications&nbsp;métier sous Symfony et leurs adaptations sur support mobile.</p>
                    <p class="last">Actuellement en poste chez <a href="http://www.rc2c.fr" title="Ouvrir le site de RC2C (nouvelle fenêtre)" target="_blank">RC2C</a> à La Rochelle, venez découvrir mon parcours et mes projets.</p>
                    <div class="more-info">
                        <h3>... et aussi</h3>
                        <p>Badminton, Football, Plongée&nbsp;sous-marine (N1), Voyages, Nouvelles technologies</p>
                    </div>
                </article>
                <article id="skills">
                    <h2>Compétences<span class="border"></span></h2>
                    <div class="clearfix"></div>
                    <ul>
                        <li>
                            <span class="icon"><i class="symfony"></i></span>
                            <h4>Symfony</h4>
                            <p>Développement de bundle et applications métier Symfony 1 et 2</p>
                        </li>
                        <li>
                            <span class="icon"><i class="php"></i></span>
                            <h4>PHP Objet</h4>
                            <p>Développement MVC<br />Norme de codage PSR-2</p>
                        </li>
                        <li>
                            <span class="icon"><i class="versionning"></i></span>
                            <h4>Versionning</h4>
                            <p>Utilisation quotidienne de GIT et SVN</p>
                        </li>
                        <li>
                            <span class="icon"><i class="agile"></i></span>
                            <h4>Méthodes agiles</h4>
                            <p>Scrum, planning poker, sprint, utilisation d'outils de gestion de projets (Redmine, Basecamp)</p>
                        </li>
                        <li>
                            <span class="icon"><i class="mobile"></i></span>
                            <h4>Mobile</h4>
                            <p>Développement de web app avec PhoneGap/Cordova</p>
                        </li>
                        <li>
                            <span class="icon"><i class="js"></i></span>
                            <h4>Javascript Objet</h4>
                            <p>Développement de plugins, utilisation de frameworks (jQuery, Angular, Sencha), Ajax, JSON</p>
                        </li>
                        <li>
                            <span class="icon"><i class="api"></i></span>
                            <h4>API</h4>
                            <p>Création d'API sécurisée<br />Utilisation : Google, Smoney, OAuth, SystemPay, Yousign</p>
                        </li>
                        <li>
                            <span class="icon"><i class="conception"></i></span>
                            <h4>Conception</h4>
                            <p>Études et chiffrage d'un projet. Rédaction de documentations et wireframes</p>
                        </li>
                        <li>
                            <span class="icon"><i class="cms"></i></span>
                            <h4>CMS</h4>
                            <p>Utilisation et configuration de CMS (Drupal, Wordpress, Prestashop)</p>
                        </li>
                        <li>
                            <span class="icon"><i class="tests"></i></span>
                            <h4>Tests</h4>
                            <p>Création de tests unitaires, fonctionnel (PhpUnit, Sélénium)</p>
                        </li>
                        <li>
                            <span class="icon"><i class="sql"></i></span>
                            <h4>Base de données</h4>
                            <p>Conception de base de données MySQL. Utilisation de Doctrine&nbsp;1&nbsp;et&nbsp;2</p>
                        </li>
                        <li>
                            <span class="icon"><i class="flash"></i></span>
                            <h4>Flash</h4>
                            <p>Création de jeux, applications AIR, animations (ActionScript 2 et 3)</p>
                        </li>
                    </ul>
                    <a class="btn" href="cv-maxime-neuville.pdf" title="Télécharger mon CV au format PDF (nouvelle fenêtre)" target="_blank">Télécharger mon CV</a>
                </article>
                <article id="career">
                    <div id="experiences">
                        <h2>Expériences<span class="border"></span></h2>
                        <div class="clearfix"></div>
                        <div class="timeline">
                            <div class="line"></div>
                            <ul>
                                <li>
                                    <div class="container right">
                                        <span class="icon">2008</span>
                                        <h4>Concepteur/Développeur web</h4>
                                        <div class="date">Depuis juillet 2008</div>
                                        <div class="clearfix"></div>
                                        <div class="company">RC2C à La Rochelle (17)</div>
                                        <p>Agence de communication et stratégies numériques engagée dans le développement durable.</p>
                                        <p>Au sein d'une équipe d'intégrateurs, webdesigners, développeurs et chefs de projets je développe et imagine des applications métier sous <strong>Symfony&nbsp;2</strong> en utlisant les <strong>méthodes agiles</strong> et le versionning.</p>
                                        <ul>
                                            <li>Création d'API (REST) et utilisation d'API <strong>GoogleMaps</strong>, Smoney, Yousign, Twilio</li>
                                            <li>Développemnt du CMS interne sous Symfony 1.4</li>
                                            <li>Maintenance des sites existants et support client</li>
                                            <li>Développement de module interactif (Flash, SVG, Html5, Javascript)</li>
                                            <li>Création de site via des <strong>CMS open source</strong> (Drupal, Wordpress, Prestashop)</li>
                                            <li>Rédaction de documentations techniques et utilisateurs</li>
                                            <li>Développement de tests unitaires et fonctionnels</li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <div class="container right">
                                        <span class="icon">2008</span>
                                        <h4>Développeur web</h4>
                                        <div class="date">Mars-Mai 2008</div>
                                        <div class="clearfix"></div>
                                        <div class="company">Agemax à La Roche-sur-Yon (85)</div>
                                        <p>Stage de fin d'étude dans une société de développement informatique qui travaille avec des agences de communication.</p>
                                        <ul>
                                            <li>Création de composants flash (ActionScript 3)</li>
                                            <li>Mises à jour et optimisations des sites clients avec le CMS interne</li>
                                            <li>Développement d'un intranet (PHP, SQL, Ajax)</li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div id="formations">
                        <h2>Formations<span class="border"></span></h2>
                        <div class="clearfix"></div>
                        <div class="timeline">
                            <div class="line"></div>
                            <ul>
                                <li>
                                    <div class="container right">
                                        <span class="icon">2013</span>
                                        <h4>Formation HTML5/CSS3</h4>
                                        <div class="clearfix"></div>
                                        <div class="company">Pyramyd Formation à Paris (75)</div>
                                        <p>Apprentissage des nouvelles propriétés CSS3 (font-face, header, nav, text-shadow...), création de canvas 2D-3D et animations CSS3.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="container right">
                                        <span class="icon">2011</span>
                                        <h4>Formation Développement d'application pour mobiles multi plateformes</h4>
                                        <div class="clearfix"></div>
                                        <div class="company">PLB à Paris (75)</div>
                                        <p>Apprentissage du framework jQuery Mobile et PhoneGap/Cordova. Création d'application web pour Android, iOS, Windows Phone.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="container right">
                                        <span class="icon">2008</span>
                                        <h4>Diplôme Européen d'Etudes Supérieures Webmaster</h4>
                                        <div class="clearfix"></div>
                                        <div class="company">École des établières à Luçon (85)</div>
                                        <p>Diplome BAC+3, mémoire de fin d'étude : "Le Web 2.0 - Effet de mode ou véritable évolution".</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="container right">
                                        <span class="icon">2007</span>
                                        <h4>BTS Informatique de gestion</h4>
                                        <div class="clearfix"></div>
                                        <div class="company">La Joliverie à Nantes (44)</div>
                                        <p>Option Développeur d'applications (Java, PHP, Visual basic, SQL)</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </article>
                <article id="projects">
                    <h2>Projets<span class="border"></span></h2>
                    <div class="clearfix"></div>
                    <figure data-id="1">
                        <img src="medias/projects/lisea_thumb.png" alt="Logo du projet LISEA" />
                        <figcaption>
                            <a href="#show"><span class="link">Afficher le projet</span></a>
                            <div class="container">
                                <img src="medias/projects/lisea.png" alt="" />
                                <div class="right">
                                    <h4>Développement du site internet de la ligne TGV<br />Tours-Bordeaux</h4>
                                    <p>Développement d'un site en Symfony 1.4 avec géolocalisation de contenus transversaux basé sur le CMS <a href="https://github.com/punkave/apostrophe" target="_blank" title="Plus d'informations sur le CMS Apostrophe (nouvelle fenêtre)">Apostrophe</a>. Création d'un outil de newsletter automatisé.</p>
                                    <ul>
                                        <li>Symfony 1.4</li>
                                        <li>Module Javascript (slider du tracé, frise interactive, organigramme)</li>
                                        <li>Newsletter / Système d'alertes</li>
                                        <li>Médiathèque publique</li>
                                        <li>Module de visite 360°</li>
                                        <li>Connexion avec l'API <a href="http://fr.calameo.com" target="_blank" title="Plus d'informations sur les fonctionnalités de Calaméo (nouvelle fenêtre)">Calaméo</a></li>
                                        <li>Travail en équipe</li>
                                    </ul>
                                    <a href="http://www.lgv-sea-tours-bordeaux.fr" class="btn" target="_blank" title="Voir le site de LISEA (nouvelle fenêtre)">Voir le site de LISEA</a>
                                </div>
                            </div>
                        </figcaption>
                    </figure>
                    <figure data-id="2">
                        <img src="medias/projects/itl_thumb.png" alt="Logo du projet ITL Group" />
                        <figcaption>
                            <a href="#show"><span class="link">Afficher le projet</span></a>
                            <div class="container">
                                <img src="medias/projects/itl.png" alt="" />
                                <div class="right">
                                    <h4>Développement d'un outil de calcul financier</h4>
                                    <p>Refonte de l'outil de calcul interne vers une version en Symfony 2 plus évolutive et modulable pour répondre aux demandes des nouveaux contrats de la société.</p>
                                    <ul>
                                        <li>Symfony 2 (Sonata, FOS...)</li>
                                        <li>Création d'une API RESTful sécurisée et documentée</li>
                                        <li>Utilisation avancée de formule de prêt financier</li>
                                        <li>Travail en équipe</li>
                                        <li>Méthodes agiles</li>
                                        <li>Création de bundles</li>
                                        <li>Interface multilingue</li>
                                        <li>Tâches planifiées (CRON)</li>
                                        <li>Génération de PDF (XFDF, InDesign)</li>
                                    </ul>
                                    <a href="https://calculateur.itlgroup.fr" class="btn" target="_blank" title="Voir l'outil financier (nouvelle fenêtre)">Voir l'outil financier</a>
                                </div>
                            </div>
                        </figcaption>
                    </figure>
                    <figure data-id="3">
                        <img src="medias/projects/freezy_thumb.png" alt="Logo du projet Freezy" />
                        <figcaption>
                            <a href="#show"><span class="link">Afficher le projet</span></a>
                            <div class="container">
                                <img src="medias/projects/freezy.png" alt="" />
                                <div class="right">
                                    <h4>Création d'une application de gestion de congélateur pour mobile</h4>
                                    <p>Pour un projet personnel j'ai développé un site en Symfony 2 et une API pour permettre de communiquer avec l'application mobile. L'application est utilisable en mode online ou offline. La synchronisation avec la base de données se fait dès que la connexion est disponible.</p>
                                    <ul>
                                        <li>Symfony 2</li>
                                        <li>Création d'une API sécurisée</li>
                                        <li>OAuth Google API</li>
                                        <li>PhoneGap/Cordova</li>
                                        <li>SenchaTouch</li>
                                        <li>UX Mobile</li>
                                        <li>Webdesign</li>
                                    </ul>
                                    <a href="http://www.freezy.fr" class="btn" target="_blank" title="Voir le site de Freezy (nouvelle fenêtre)">Voir le site de Freezy</a>
                                    <a href="#soon" class="btn disable" title="Bientôt disponible">Télécharger l'application Freezy</a>
                                </div>
                            </div>
                        </figcaption>
                    </figure>
                    <figure data-id="4">
                        <img src="medias/projects/maif_thumb.png" alt="Logo du projet MAIF" />
                        <figcaption>
                            <a href="#show"><span class="link">Afficher le projet</span></a>
                            <div class="container">
                                <img src="medias/projects/maif.png" alt="" />
                                <div class="right">
                                    <h4>Développement d'un outil personnalisé de gestion d'évenements pour la MAIF</h4>
                                    <p>Site en Symfony 2 avec back office pour gérer l'intégralité des contenus, inscriptions et voir les statistiques en temps réel. Création d'une carte de France avec les événements regroupés par département.</p>
                                    <ul>
                                        <li>Symfony 2</li>
                                        <li>Système d'alertes (email et/ou SMS)</li>
                                        <li>Utilisation de la solution <a href="http://thecallr.com/fr" target="_blank" title="Plus d'informations sur la solution TheCallR (nouvelle fenêtre)">TheCallR</a> et de leur API (envoi de SMS)</li>
                                        <li>Tâches planifiées (CRON)</li>
                                        <li>Méthodes agiles</li>
                                        <li>Support client</li>
                                    </ul>
                                    <a href="https://app.maif.fr/maif-agenda/" class="btn" target="_blank" title="Voir le site de MAIF Agenda (nouvelle fenêtre)">Voir le site de MAIF Agenda</a>
                                </div>
                            </div>
                        </figcaption>
                    </figure>
                    <figure data-id="5">
                        <img src="medias/projects/interlude_thumb.png" alt="Logo du projet Interlude" />
                        <figcaption>
                            <a href="#show"><span class="link">Afficher le projet</span></a>
                            <div class="container">
                                <img src="medias/projects/interlude.png" alt="" />
                                <div class="right">
                                    <h4>Développement du site Internet du camping Interlude (Groupe Sunêlia)</h4>
                                    <p>Site multilingue (4 langues) en Symfony 1.4 basé sur le CMS <a href="https://github.com/punkave/apostrophe" target="_blank" title="Plus d'informations sur le CMS Apostrophe (nouvelle fenêtre)">Apostrophe</a> et connecté avec la plate-forme WebCamp pour gérer les locations et réservations.</p>
                                    <ul>
                                        <li>Symfon 1.4</li>
                                        <li>Système de support via Userlike</li>
                                        <li>API TheCallR (SMS)</li>
                                        <li>Module d'agenda</li>
                                        <li>Réservation de locations</li>
                                    </ul>
                                    <a href="http://www.interlude.fr" class="btn" target="_blank" title="Voir le site du camping Interlude (nouvelle fenêtre)">Voir le site du camping Interlude</a>
                                </div>
                            </div>
                        </figcaption>
                    </figure>
                    <figure data-id="6">
                        <img src="medias/projects/simpson_thumb.png" alt="Logo du projet Simpson Strong-Tie" />
                        <figcaption>
                            <a href="#show"><span class="link">Afficher le projet</span></a>
                            <div class="container">
                                <img src="medias/projects/simpson.png" alt="" />
                                <div class="right">
                                    <h4>Développement du site et base produits pour le leader mondial des connexions pour la construction bois</h4>
                                    <p>Site multilingue en Symfony 1.4 basé sur le CMS <a href="https://github.com/punkave/apostrophe" target="_blank" title="Plus d'informations sur le CMS Apostrophe (nouvelle fenêtre)">Apostrophe</a> connecté au PIM (Product Information Management) en Symfony 2.</p>
                                    <ul>
                                        <li>Symfony 1.4 et 2</li>
                                        <li>Création d'une API documentée</li>
                                        <li>Site et base produits multilingue (11 langues)</li>
                                        <li>Connexion avec l'API <a href="http://fr.calameo.com" target="_blank" title="Plus d'informations sur les fonctionnalités de Calaméo (nouvelle fenêtre)">Calaméo</a></li>
                                        <li>Tâches planifiées (CRON)</li>
                                        <li>Travail en équipe</li>
                                        <li>Méthodes agiles</li>
                                    </ul>
                                    <a href="http://www.simpson.fr" class="btn" target="_blank" title="Voir le site de Simpson Strong-Tie (nouvelle fenêtre)">Voir le site de Simpson Strong-Tie</a>
                                </div>
                            </div>
                        </figcaption>
                    </figure>
                    <figure data-id="7">
                        <img src="medias/projects/orange-bleue_thumb.png" alt="Logo du projet L'Orange Bleue" />
                        <figcaption>
                            <a href="#show"><span class="link">Afficher le projet</span></a>
                            <div class="container">
                                <img src="medias/projects/orange-bleue.png" alt="" />
                                <div class="right">
                                    <h4>Création du site Internet de L'Orange Bleue de Montaigu-Boufféré</h4>
                                    <p>L'Orange Bleue est une franchise de club de fitness leader en France.</p>
                                    <ul>
                                        <li>Wordpress 4.3</li>
                                        <li>Webdesign</li>
                                        <li>Gestion projet</li>
                                        <li>Réseaux sociaux</li>
                                        <li>Intégration responsive</li>
                                        <li>Création d'un module de calcul IMC</li>
                                        <li>Utilisation des plugins ACF, Custom Post Type, Contact Form...</li>
                                    </ul>
                                    <a href="http://www.lorangebleue-bouffere.fr" class="btn" target="_blank" title="Voir le site de L'Orange Bleue (nouvelle fenêtre)">Voir le site de L'Orange Bleue</a>
                                </div>
                            </div>
                        </figcaption>
                    </figure>
                    <figure data-id="8">
                        <img src="medias/projects/lumo_thumb.png" alt="Logo du projet Lumo France" />
                        <figcaption>
                            <a href="#show"><span class="link">Afficher le projet</span></a>
                            <div class="container">
                                <img src="medias/projects/lumo.png" alt="" />
                                <div class="right">
                                    <h4>Développement d'une plateforme en ligne de financement participatif</h4>
                                    <p>Lumo France est un site de crowdfunding qui met en avant des projets d'énergies renouvelables. Site développé en Symfony 1.4 basé sur le CMS <a href="https://github.com/punkave/apostrophe" target="_blank" title="Plus d'informations sur le CMS Apostrophe (nouvelle fenêtre)">Apostrophe</a> avec inscription et espace client. Solution de paiement et système de tirelire</p>
                                    <ul>
                                        <li>Symfony 1.4</li>
                                        <li>Paiement sécurisé (<a href="http://www.s-money.fr" target="_blank" title="Plus d'informations sur Smoney (nouvelle fenêtre)">Smoney</a>)</li>
                                        <li>Développements spécifiques (Compte client, commentaires, partage réseaux sociaux, blog...)</li>
                                        <li>Carte interactive (Google maps + leaflet)</li>
                                        <li>Signature électronique de documents (API <a href="https://yousign.fr" target="_blank" title="Plus d'informations sur Yousign (nouvelle fenêtre)">Yousign</a>)</li>
                                        <li>Travail en équipe</li>
                                        <li>Méthodes agiles</li>
                                        <li>Support client</li>
                                    </ul>
                                    <a href="https://www.lumo-france.com" class="btn" target="_blank" title=" (nouvelle fenêtre)">Voir le site de Lumo France</a>
                                </div>
                            </div>
                        </figcaption>
                    </figure>
                    <figure data-id="9">
                        <img src="medias/projects/les-lutins-de-noel_thumb.png" alt="Logo du projet Les lutins de Noël" />
                        <figcaption>
                            <a href="#show"><span class="link">Afficher le projet</span></a>
                            <div class="container">
                                <img src="medias/projects/les-lutins-de-noel.png" alt="" />
                                <div class="right">
                                    <h4>Création d'un jeu pour les voeux de l'agence RC2C</h4>
                                    <p>En 2008, l'agence RC2C (Intelliance) souhaitait un jeu intégrant l'équipe pour fêter la fin d'année. Jeu d'adresse et rapidité développé sous Adobe Flash.</p>
                                    <ul>
                                        <li>ActionScript 2</li>
                                        <li>Animation Flash</li>
                                        <li>Webdesign</li>
                                        <li>Système de score</li>
                                    </ul>
                                    <a href="http://www.maximeneuville.fr/les-lutins-de-noel" class="btn" target="_blank" title=" (nouvelle fenêtre)">Voir le jeu des Lutins de Noël</a>
                                </div>
                            </div>
                        </figcaption>
                    </figure>
                    <figure data-id="10">
                        <img src="medias/projects/campus-insa_thumb.png" alt="Logo du projet Campus INSA" />
                        <figcaption>
                            <a href="#show"><span class="link">Afficher le projet</span></a>
                            <div class="container">
                                <img src="medias/projects/campus-insa.png" alt="" />
                                <div class="right">
                                    <h4>Développement du site internet du campus de l'enseigne INSA Val de Loire.</h4>
                                    <p>Le site du campus INSA développé sur Drupal 7 est découpé en 7 sous-sites et un portail qui fait remonter les informations de chacun de ses sous-sites.</p>
                                    <ul>
                                        <li>Drupal 7</li>
                                        <li>Création de modules</li>
                                        <li>Travail en équipe</li>
                                        <li>Gestion des droits par sous-site</li>
                                        <li>Javascript (Masonry, load more...)
                                        <li>Méthodes agiles</li>
                                    </ul>
                                    <a href="http://campus.insa-cvl.fr" class="btn" target="_blank" title="Voir le site du Campus INSA (nouvelle fenêtre)">Voir le site du Campus INSA</a>
                                </div>
                            </div>
                        </figcaption>
                    </figure>
                    <div id="detail">
                        <a href="#close" class="icon close" title="Fermer le projet"><i class="close"></i>Fermer</a>
                        <a href="#previous" class="icon previous" data-title="Projet précédent" title=""><i class="previous"></i>Projet précédent</a>
                        <a href="#next" class="icon next" data-title="Projet suivant" title=""><i class="next"></i>Projet suivant</a>
                        <div class="block-content"></div>
                    </div>
                </article>
            </section>
            <footer id="contact">
                <ul class="contact">
                    <li>
                        <a href="https://github.com/mneuville" title="Voir mon profil Github (nouvelle fenêtre)" target="_blank">
                            <span class="icon"><i class="github"></i></span>Github
                        </a>
                    </li>
                    <li>
                        <a href="https://twitter.com/fouine44" title="Me suivre sur Twitter (nouvelle fenêtre)" target="_blank">
                            <span class="icon"><i class="twitter"></i></span>Twitter
                        </a>
                    </li>
                    <li>
                        <a href="http://www.viadeo.com/profile/002w91vxbp43b9z" title="Voir mon profil Viadeo (nouvelle fenêtre)" target="_blank">
                            <span class="icon"><i class="viadeo"></i></span>Viadeo
                        </a>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com/profile/view?id=379884669" title="Voir mon profil LinkedIn (nouvelle fenêtre)" target="_blank">
                            <span class="icon"><i class="linkedin"></i></span>LinkedIn
                        </a>
                    </li>
                    <li>
                        <a class="open" title="Me contacter par téléphone">
                            <span class="icon"><i class="phone"></i></span>0&#54;&#46;25&#46;2&#53;&#46;3&#51;&#46;34
                        </a>
                    </li>
                    <li>
                        <a href="&#109;&#97;&#105;&#108;&#116;&#111;&#58;&#110;&#101;&#117;&#118;&#105;&#108;&#108;&#101;&#46;&#109;&#97;&#120;&#105;&#109;&#101;&#64;&#103;&#109;&#97;&#105;&#108;&#46;&#99;&#111;&#109;" class="open" title="Me contacter par e-mail">
                            <span class="icon"><i class="email"></i></span>&#110;&#101;&#117;&#118;&#105;&#108;&#108;&#101;&#46;&#109;&#97;&#120;&#105;&#109;&#101;&#64;&#103;&#109;&#97;&#105;&#108;&#46;&#99;&#111;&#109;
                        </a>
                    </li>
                </ul>
            </footer>
            <a href="#top" id="back-top" class="icon" title="Revenir en haut de la page"><i class="top"></i>Revenir en haut de la page</a>
        </div>
        <script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
			ga('create', 'UA-66472233-1', 'auto');
			ga('send', 'pageview');
		</script>
    </body>
</html>
