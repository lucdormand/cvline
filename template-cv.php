<?php
get_header();
/* Template Name: Modele de Cv */
require __DIR__ . '/vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;

$html2pdf = new Html2Pdf();
?>

    <div>
        <h1>CreateCv</h1>
    </div>v
    <div id="cv_1">
        <div class="wrap_createcv">
            <section id="aboutme" class="section_createcv">

                <div class="contact">
                    <div class="flexcontact">
                        <div class="photo">
                            <img src="https://www.pierre-giraud.com/wp-content/uploads/2019/07/cv-profil.jpg" alt="Ma photo de profil">
                        </div>
                        <div class="flexcontact2">
                            <h2>Informations de contact</h2>
                            <div class="contact-flex">
                                <p>Nom : </p>
                                <p>GIRAUD Pierre</p>
                            </div>
                            <div class="contact-flex">
                                <p>Adresse : </p>
                                <p>115 Avenue des Lilas - 83000 Toulon</p>
                            </div>
                            <div class="contact-flex">
                                <p>Téléphone :</p>
                                <p>06 36 65 65 65</p>
                            </div>
                            <div class="contact-flex">
                                <p>Mail : </p>
                                <p><a href="mailto:pierre.giraud@edhec.com">pierre.giraud@edhec.com</a></p>
                            </div>
                            <div class="contact-flex">
                                <p>Permis :</p>
                                <p>B</p>
                            </div>
                        </div>
                    </div>
                    <div class="prez">
                        <h2>Qui suis-je ?</h2>
                        <p>Diplômé d'un master 2 "Entrepreneuriat et Innovation" (Programme Grande
                            Ecole EDHEC), je me tourne ensuite vers le développement informatique et les
                            thématiques liées au web comme l'optimisation du référencement (SEO).</p>
                        <a href="#" download>Télécharger mon CV</a>
                    </div>
                </div>
            </section>

            <section id="skillpro" class="section_createcv">
                <h2>Expériences professionnelles</h2>
                <div class="exp">
                    <div class= "text_left">
                        <div class="exp-logo">
                            <a href="#"><img src="https://www.pierre-giraud.com/wp-content/uploads/2019/07/pierre.png" alt="Logo de Pierre Giraud"></a>
                        </div>
                        <div class="exp-info">
                            <h3>Créateur</h3>
                            <h4>Pierre Giraud</h4>
                            <h4>Avril 2014 - Aujourd'hui</h4>
                        </div>
                    </div>
                    <div class="exp-desc">
                        <p>Créateur des sites pierre-giraud.fr puis pierre-giraud.com
                            début 2015 sur lesquels je partage mes formations complète en
                            programmation, optimisation du référencement, etc.</p>
                    </div>
                </div>
                <div class="exp">
                    <div class= "text_left">
                        <div class="exp-logo">
                            <a href="#"><img src="https://www.pierre-giraud.com/wp-content/uploads/2019/07/legalplace.png" alt="Logo de LegalPlace"></a>
                        </div>
                        <div class="exp-info">
                            <h3>Responsable SEO et contenu</h3>
                            <h4>LegalPlace</h4>
                            <h4>Novembre 2017 - Décembre 2018</h4>
                        </div>
                    </div>
                    <div class="exp-desc">
                        <p>Responsable SEO du site et plus globalement de la stratégie
                            de production de contenu : recherche de mots clefs, réécriture,
                            contrôle qualité du contenu publié, etc.</p>
                    </div>
                </div>
                <div class="exp">
                    <div class= "text_left">
                        <div class="exp-logo">
                            <a href="#"><img src="https://www.pierre-giraud.com/wp-content/uploads/2019/07/prestashop.png" alt="Logo de PrestaShop"></a>
                        </div>
                        <div class="exp-info">
                            <h3>Stage marketing</h3>
                            <h4>PrestaShop</h4>
                            <h4>Mai 2013 - Novembre 2013</h4>
                        </div>
                    </div>
                    <div class="exp-desc">
                        <p>Contrôle de la qualité et de l'intégrité des modules proposés,
                            modernisation de la marketplace & passerelle avec la communauté.</p>
                    </div>
                </div>
            </section>

            <section class="section_createcv">
                <h2>Formation</h2>
                <div class="exp">
                    <div class= "text_left">
                        <div class="exp-logo">
                            <a href="#"><img src="https://www.pierre-giraud.com/wp-content/uploads/2019/07/edhec.png" alt="Logo EDHEC"></a>
                        </div>
                        <div class="exp-info">
                            <h3>EDHEC Programme Grande Ecole</h3>
                            <h4>2011 - 2015</h4>
                        </div>
                    </div>
                    <div class="exp-desc">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur cumque ducimus eaque earum eius error esse ex excepturi, expedita harum ipsum laborum mollitia possimus repudiandae sed similique sint tenetur voluptas!</p>
                    </div>
                </div>
                <div class="exp">
                    <div class= "text_left">
                        <div class="exp-logo">
                            <a href="#"><img src="https://www.pierre-giraud.com/wp-content/uploads/2019/07/dd.png" alt="Logo Dumont"></a>
                        </div>
                        <div class="exp-info">
                            <h3>Prépa ECS option Maths</h3>
                            <h4>2009 - 2011</h4>
                        </div>
                    </div>
                    <div class="exp-desc">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aperiam architecto cupiditate distinctio dolores doloribus, earum eius error facere ipsa, laboriosam nam necessitatibus nisi officiis omnis optio quaerat sed voluptatibus?</p>
                    </div>
                </div>
                <div class="exp">
                    <div class= "text_left">
                        <div class="exp-logo">
                            <a href=""><img src="https://www.pierre-giraud.com/wp-content/uploads/2019/07/dd.png" alt=""></a>
                        </div>
                        <div class="exp-info">
                            <h3>Bac S option Maths</h3>
                            <h4>2005 - 2009</h4>
                        </div>
                    </div>
                    <div class="exp-desc">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error et nam nesciunt qui voluptatibus. Aliquam beatae dignissimos dolorem error eum, ex expedita fugit hic impedit placeat quasi ratione rem tempore.</p>
                    </div>
                </div>
            </section>

            <section class="section_createcv">
                <h2>Compétences</h2>
                <h3 class="h3gauche">Professionnelles</h3>
                <div class="comp">
                    <p>HTML / CSS</p>
                    <div class="conteneur-barre"><span class="barre c100"></span></div>
                </div>
                <div class="comp">
                    <p>PHP / MySQL</p>
                    <div class="conteneur-barre"><span class="barre c95"></span></div>
                </div>
                <div class="comp">
                    <p>JavaScript</p>
                    <div class="conteneur-barre"><span class="barre c90"></span></div>
                </div>
                <div class="comp">
                    <p>SEO</p>
                    <div class="conteneur-barre"><span class="barre c100"></span></div>
                </div>
                <h3 class="h3gauche">Personnelles</h3>
                <div class="comp2">
                    <p>Créativité</p>

                    <div class="conteneur-barre2"><span class="barre c90"></span></div>
                </div>
                <div class="comp2">
                    <p>Adaptation</p>

                    <div class="conteneur-barre2"><span class="barre c85"></span></div>
                </div>
                <div class="comp2">
                    <p>Sérieux</p>

                    <div class="conteneur-barre2"><span class="barre c95"></span></div>
                </div>
                <div class="comp2">
                    <p>Pédagogie</p>

                    <div class="conteneur-barre2"><span class="barre c95"></span></div>
                </div>
            </section>

            <section class="section_createcv">
                <h2>Centres d'intérêt</h2>
                <figure class="interet">
                    <img src="https://www.pierre-giraud.com/wp-content/uploads/2019/07/trail.png" alt="Trail">
                    <figcaption>Trail</figcaption>
                </figure>
                <figure class="interet">
                    <img src="https://www.pierre-giraud.com/wp-content/uploads/2019/07/cuisine.jpg" alt="Cuisine">
                    <figcaption>Cuisine</figcaption>
                </figure>
                <figure class="interet">
                    <img src="https://www.pierre-giraud.com/wp-content/uploads/2019/07/gaming.jpg" alt="Gaming">
                    <figcaption>Jeux vidéos</figcaption>
                </figure>
                <figure class="interet">
                    <img src="https://www.pierre-giraud.com/wp-content/uploads/2019/07/livre.jpg" alt="Littérature">
                    <figcaption>Littérature</figcaption>
                </figure>
            </section>
        </div>
    </div>


<?php

$html = ob_get_clean();
$html2pdf->writeHTML($html);
$html2pdf->output();
get_footer();
?>