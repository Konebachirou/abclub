<?php

namespace Database\Seeders;

use App\Models\Pole;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pole::insert([
            [
                'icon' => "service-01.png",
                'name' => 'Pôle Réseau',
                'description' => "<p>Ce pôle est chargé d'organiser les événements de networking et 
                la communication entre nos alumnis, nos membres et nos adhérents.</p>
                <h5 >LES ACTIVITES DU PÔLE EN BREF</h5>
                 <h6>Réseau :</h6>
                 <ul>
                     <li>organisation d'événements de networking réunissant nos alumnis, nos membres (ABC & Afroscep) et nos adhérents. Cette année, nous avons organisé des rencontres à Paris, Abidjan et Douala.</li>
                     <li>Point de contact entre les alumnis et les membres de l'association</li>
                 </ul>
                 <h6>African Business Jobs :</h6>
                 <ul>
                     <li>Gestion de la page African Business Jobs, le job board de l'ABC : Publication régulière d'offres d'emploi pour des postes en Afrique ou plus largement en lien avec l'Afrique / Partage de sondages sur l'écosystème professionnel africain</li>
                 </ul>
                 <h6>Newsletters mensuelles : </h6>
                 <ul>
                     <li>Partage des actualités de l'association et mise en lumière de membres du réseau ABC ayant fait le choix d'entreprendre</li>
                 </ul>
                 <h6>Partenariat solidaire :</h6>
                 <ul>
                     <li>Chaque année, l'African Business Club soutient un projet solidaire et cette année, nous collaborons avec Malaika, une association à but non lucratif dont la mission est d'autonomiser les filles congolaises et leurs communautés à travers des programmes d'éducation et de santé</li>
                 </ul>
                 ",
                'created_at' => now(),
                'updated_at' => now()

            ],
            [
                'icon' => "service-02.png",
                'name' => 'Pôle AMID',
                'description' => "<p>L'Africa Mobility and Innovation Days est un forum qu'organise l'African Business Club autour de deux thématiques principales, le recrutement des talents installés en Europe pour les marchés africains et l'entrepreneuriat.<p>
                <h5 >LES ACTIVITES DU PÔLE EN BREF</h5>
                <h6>AMID :</h6>
                           <ul>
                               <li>Le pôle AMID est la fusion de l'ANP et L'ANE</li>
                               <li>L'Africa Mobility and Innovation Days est un forum qu'organise l'African Business Club
                               autour de deux thématiques principales, le recrutement des talents installés en Europe
                               pour les marchés africains et l'entrepreneuriat</li>
                               <li>L'an dernier, ce forum a réuni plus de 300 personnes, des pénalistes de renommés et des
                               dirigeants d'entreprise</li>
                           </ul>
                           <h6>ANP :</h6>
                           <ul>
                               <li>Africa Next Position est un forum d’excellence où des entreprises exerçant en Afrique recrutent les talents de la diaspora</li>
                               <li>Un forum pour partager les expériences avec nos intervenants, s’inspirer les uns des autres et échanger afin d’agrandir votre réseau</li>
                               <li>Plusieurs entreprises et institutions partenaires</li>
                           </ul>
                           <h6>ANE :</h6>
                           <ul>
                               <li>l'Africain Next Entrepreneur est une journée dédiée à l'entrepreneuriat proposant des conférences et un concours visant à promouvoir des projets d’innovation portés par des entrepreneurs de la diaspora africaine en France</li>
                               <li>L'an dernier, plus de 100 participations ont été enregistrés</li>
                           </ul>",
                'created_at' => now(),
                'updated_at' => now()

            ],
            [
                'icon' => "service-03.png",
                'name' => 'Pôle Abc Connect',
                'description' => "<p>L'ABC Connect est le réseau des adhérents de l'African Business Club. Ce pôle est également chargé de promouvoir les opportunités de partenariats et le retour d'expérience de modèles africains.</p>
                <h5 >LES ACTIVITES DU PÔLE EN BREF</h5>
                <h6>ABC Connect :</h6>
                <ul>
                    <li>L'ABC Connect, est un réseau d'adhérents de l'African Business Club</li>
                    <li>L'ABC Connect établit un véritable networking, un échange entre professionnels, et trouve des opportunités de partenariats</li>
                </ul>
                <h6>Nos adhérents :</h6>
                <ul>
                    <li>Jeunes de 25 à 39 ans, d’origine africaine ou avec de très fortes attaches à l’Afrique</li>
                </ul>
                <h6>Notre valeur ajoutée  :</h6>
                <ul>
                    <li>Nous proposons une solution de montée en compétence et de networking professionnel des jeunes de la diaspora en contribuant à l'excellence Africaine</li>
                </ul>
                <h6>Notre Produit  :</h6>
                <ul>
                   <li>Rencontres et networking (Conférences, Séminaires et Evenements de networking)</li>
                   <li>Développement de carrière (Conseil stratégie de communication, Conseil stratégie marketing, Conseil stratégie développement de business, Audit et Expertise comptable/marketing et autres)</li>
                   <li>Masterclass trimestriel</li>
                </ul>
                <h6>Nos intervenants :</h6>
                <ul>
                    <li>Gomez Agou - Stan Zézé - Joyce-Ann Wainaina - Me Cherine Luzaisu - Victoria Kwakwa - Mesfin Tasew Bakele - et autres</li>
                </ul>",
                'created_at' => now(),
                'updated_at' => now()

            ],
            [
                'icon' => "service-04.png",
                'name' => 'Pôle Meet & Share',
                'description' => "<p>ce pôle a en charge l'organisation de tables rondes autour
                d'un thème en rapport avec l'Afrique et en faisant appel à des experts du domaine.</p>

                <h5 >LES ACTIVITES DU PÔLE EN BREF</h5>
                <h6>Qui sommes nous ?  :</h6>
                <ul>
                    <li>Nous organisons des événements sous forme de table ronde tous les trois mois autour d'un thème précis en rapport avec l'Afrique en faisant appel à des intervenants d'experts dans le domaine</li>
                </ul>
                <h6>Rencontres :</h6>
                <ul>
                    <li>Nous organisons des rencontres entre des acteurs clés du développement du continent africain et des personnes désireuses d’accroître leur connaissance des enjeux de celui-ci.</li>
                </ul>
                <h6>Partage : </h6>
                <ul>
                    <li>Nous organisons le partage d'expériences, de connaissances et de contacts afin de permettre la création d’un réseau</li>
                </ul>
                <h6>Exclusivité :</h6>
                <ul>
                    <li>Un nombre limité de participants à certains événements pour favoriser l'émulation et la création de rencontres privilégiées</li>
                    <li>Nous avons organisé plus d'une dizaine de Meet and Share au cours de ces 3 dernières années</li>
                </ul>
                <h6>Le Podcast de l'African Business Talk :</h6>
                <ul>
                    <li>Le Podcast de l'African Business Talk a pour objectif de vous permettre de comprendre et appréhender les enjeux du business en Afrique à travers les yeux de ceux qui le font</li>
                </ul>",
                'created_at' => now(),
                'updated_at' => now()

            ],
            [
                'icon' => "service-05.png",
                'name' => 'Pôle Data Management & IT',
                'description' => "<p>Ce pôle gère l'ensemble des outils digitaux de l'African 
                Business Club et participe à l'amélioration de l'offre proposée par l'association, via l'exploitation 
                des informations recueillies sur nos événements et canaux de communication.</p>
                <h5 >LES ACTIVITES DU PÔLE EN BREF</h5>
                <h6>Data management and IT :</h6>
                <ul>
                    <li>Concevoir des dashboards à dessein de mieux analyser nos Kpis provenant de nos réseaux sociaux (données démographiques agrégés de nos abonnés, leurs fonctions et secteurs, nouveaux abonnés) en fonction de nos events</li>
                    <li>Concevoir un Data Wharehouse Alumnis pour mieux renforcer la cohésion et le sentiment d’appartenance</li>
                    <li>Concevoir et développer le site web de l'African Business Club</li>
                </ul>
                <h6>Réseau Alumni (Data Wharehouse) :</h6>
                <ul>
                    <li>Favoriser la cohésion et le sentiment d'appartenance.</li>
                    <li>Réseau d'entraide à l'insertion Pro.</li>
                </ul>
                <h6>Data Reporting des activités : </h6>
                <ul>
                    <li>Récolte et exploitation des données de nos événements</li>
                    <li>Analyse statistique des événements (Conférenciers & Participants).</li>
                </ul>",
                'created_at' => now(),
                'updated_at' => now()

            ],
            [

                'icon' => "service-04.png",
                'name' => 'Pôle media',
                'description' => "<p>Ce pôle met en lumière les activités de notre association
                et est chargé du marketing, de la
                communication, de la gestion du podcast et de la relation presse.</p>

                <h5 >LES ACTIVITES DU PÔLE EN BREF</h5>
                <h6>Événement :</h6>
                <ul>
                    <li>Organisation des petits et grands Événements de l'African Business Club</li>
                </ul>
                <h6>Marketing et Digital :</h6>
                <ul>
                    <li>Définition stratégique et opérationnelle des actions à mener dans le but de 
                        promouvoir les activités et actions de l'African Business Club.</li>
                    <li>Rendre accessibles nos informations de manière ciblée, afin d’être plus proche de nos
                        membres, partenaires, alumnis et adhérents.</li>
                </ul>
                <h6>Communication : </h6>
                <ul>
                    <li>Mettre en lumière les activités, les actions, les informations et les actualités de l'African
                        Business Club sur les réseaux sociaux et autres</li>
                </ul>
                <h6>Presse :</h6>
                <ul>
                    <li>Faire parler de l'African Business Club dans les médias et nos médias partenaires</li>
                </ul>
                <h6>Le Podcast de l'African Business Talk :</h6>
                <ul>
                    <li>Le Podcast de l'African Business Talk a pour objectif de vous permettre de comprendre et appréhender les enjeux du business en Afrique à travers les yeux de ceux qui le font</li>
                </ul>",
                'created_at' => now(),
                'updated_at' => now()

            ],
        ]);
    }
}