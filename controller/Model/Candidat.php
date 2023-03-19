<?php 

require_once dirname(__DIR__) . "/Model/Connexion.php";

class Candidat extends Connection {



        public function getUser($gmail, $modePass) {
        $query = "SELECT * FROM Candidat  WHERE gmail = :gmail AND modPass = :modePass";
        $stmt = $this->connect()->prepare($query);
        $stmt->bindParam(":gmail", $gmail);
        $stmt->bindParam(":modePass", $modePass);
        $stmt->execute();
        $num = $stmt->rowCount();
        
        if($num==0){
        return false;
        }
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        
        $_SESSION["id"] = $user["idc"];
        $_SESSION["gmail"] = $gmail;
        $_SESSION["nom"]=$user["nom"];
        $_SESSION["prenom"]=$user["prenom"];
        $_SESSION["Tele"]=$user["Tele"];
        $_SESSION["domaine"]=$user["domaine"];
        
        
        $stmt->closeCursor();
        return true;
    }

public function setScore($id,$score){
    $query="UPDATE  candidat SET Score=:score WHERE idc=:id";
    $stmt=$this->connect()->prepare($query);
    $stmt->bindParam(":score", $score);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
}
    
    public function setUser($name,$prenom,$gmail,$modePass) {
        $query = "INSERT INTO Candidat (nom, prenom, gmail, modPass) VALUES (:nom, :prenom, :gmail, :modePass)";
        $stmt = $this->connect()->prepare($query);

        $stmt->bindParam(":nom", $name);
        $stmt->bindParam(":prenom", $prenom);
        $stmt->bindParam(":gmail", $gmail);
        $stmt->bindParam(":modePass", $modePass);


        try{
            $stmt->execute();
            $t=$this->getUser($gmail,$modePass);
                header('location: ../view/Candidat.php');
                exit();
        }catch(Exception $e){
            echo "error : ".$e->getMessage();
        }
        
        $stmt->closeCursor();
    }
    
    public function UpdateCandidat($nom,$prenom,$ville,$tel,$domaine,$id){
        $query="UPDATE  candidat SET nom=:nom , prenom=:prenom , Tele=:tete , ville=:ville , domaine =:domaine WHERE idc=:id";
         $stmt=$this->connect()->prepare($query);
         $stmt->bindParam(":nom", $nom);
         $stmt->bindParam(":prenom", $prenom);
         $stmt->bindParam(":tete", $tel);
        $stmt->bindParam(":ville", $ville);
        $stmt->bindParam(":domaine", $domaine);
        $stmt->bindParam(":id", $id);
        try{
            $stmt->execute();
        }
        catch(Exception $e){
            echo "error : ".$e->getMessage();
        }
    }
    
    public function choixCv($cv){
        $query="UPDATE  Candidat SET cv=:cv WHERE gmail=:email";
        $stmt=$this->connect()->prepare($query);
        $stmt->bindParam(":cv",$cv );
        $stmt->bindParam(":email", $_SESSION['gmail']);
        try{
            if($stmt->execute())
            {
                header("location: ../view/info.php");
            }
        }catch(Exception $e){
            echo "error : ".$e->getMessage();
        }
        
        $stmt->closeCursor();
    }
    
    
    public function test(){


        

    }

    public function getCv (){

        $query = "SELECT cv FROM candidat WHERE gmail=:email";
        $stmt=$this->connect()->prepare($query);
        $stmt->bindParam(":email", $_SESSION['gmail']);
        $stmt->execute();
        $cv = $stmt->fetchColumn();
        return $cv ;
    }
    // public function trfCv($txt){
    //     echo $txt;
    // }
    public function trosfCv($txt){
        $tet= array("Profil", "Expérience","Education","Compétence","Langues","Loisirs");
        $edu=array("Master","Licence","Docorat","technicien","Bac+2","Bac+3","Bac+5","ingenieur","Baccalauréat" );
        $competences = array(
            "Gestion", "Communication","Marketing","Vente","Service client","Management","Journalisme","Transport et logistique",
            "Tourisme et hôtellerie","Finance","Comptabilité","Ressources humaines","Droit","Médecine","Ingénierie",
            "Architecture","Design graphique","Design web","Design d'interface utilisateur","Design industriel","Design de produit",
            "Illustration","Animation","Musique","Photographie",
            "Réseaux sociaux","Analyse de données","Business intelligence","Intelligence artificielle","Machine learning","Cybersécurité","Sécurité physique",
            "Santé et sécurité au travail","Méthodologie de recherche","Analyse financière","Gestion de portefeuille","Gestion de risques",
            "Gestion de la qualité","Gestion de la chaîne d'approvisionnement","Gestion de la production","Gestion de la maintenance",
            "Gestion de la distribution","Gestion de la logistique inversée","Gestion des achats","Gestion des stocks","Gestion des entrepôts","Gestion des inventaires",
            "Journalisme d'entreprise","Rédaction technique","Traduction","Interprétation","Enseignement","Formation","Coaching","Conseil",
            "Entrepreneuriat","Création d'entreprise","Développement commercial","Fiscalité","Audit","Consulting informatique","PHP","HTML","CSS","SQL","PL/SQL","Oracle","SQL Developper","Visual studio/Code","JavaScript","MySQL","jQuery","AngularJS",
            "React", "Vue.js","Node.js","Symfony","Laravel","CodeIgniter","CakePHP","WordPress","Drupal","Magento","Git","SASS/LESS","Bootstrap",
            "Materialize","API REST","SOAP","JSON","XML","OAuth", "JWT","Websockets","Redis","Memcached","Amazon Web Services","Google Cloud Platform",
            "Microsoft Azure","Linux","Apache","Nginx","Virtualisation","Containerisation","Docker","Kubernetes","Agilité","Scrum","Kanban","Test Driven Development","Continuous Integration","DevOps",
            "Sécurité informatique",  "Analyse de performance","Optimisation de site web","Design graphique","Animation","Modélisation 3D", "VFX et compositing",
            "Montage vidéo","Sound design",
            "Musique de film","C","C#","Java",
            "Jeu vidéo",
            "Développement de jeux mobiles",
            "Développement de jeux PC",
            "Design de jeux",
            "Gameplay",
            "Marketing de jeux",
            "Sécurité informatique",
            "Systèmes et réseaux",
            "Administration de bases de données",
            "Analyse de données",
            "Intelligence artificielle",
            "Machine learning",
            "Deep learning",
            "Vision par ordinateur",
            "Développement de logiciels",
            "Programmation web",
            "Développement mobile",
            "Développement d'applications desktop",
            "Développement de microcontrôleurs",
            "IoT",
            "Automatisation industrielle",
            "Robotique",
            "Ingénierie électrique",
            "Ingénierie mécanique",
            "Ingénierie civile",
            "Ingénierie chimique",
            "Ingénierie aérospatiale",
            "Ingénierie nucléaire",
            "Médecine",
            "Soins infirmiers",
            "Kinésithérapie",
            "Chirurgie",
            "Pharmacie",
            "Dentisterie",
            "Psychiatrie",
            "Psychologie clinique",
            "Psychothérapie",
            "Orthophonie",
            "Orthopédie",
            "Optométrie",
            "Marketing",
            "Publicité",
            "Relations publiques",
            "Analyse de marché",
            "Planification stratégique",
            "Développement de marque",
            "Communication",
            "Journalisme",
            "Traduction et interprétation",
            "Enseignement",
            "Formation professionnelle",
            "Coaching",
            "Leadership",
            "E-commerce",
            "Web design",
            "Développement web",
            "Programmation back-end",
            "Programmation front-end",
            "Développement de CMS",
            "Gestion de contenu",
            "Intégration de données",
            "Big data",
            "Business intelligence",
            "Analyse de données",
            "Data mining",
            "Data science",
            "Développement logiciel",
            "Architecture logicielle",
            "Test logiciel",
            "Gestion de projets informatiques",
            "Gestion de bases de données",
            "Sécurité informatique",
            "Réseaux et systèmes",
            "Support technique",
            "Assistance utilisateur",
            "Formation en informatique",
            "Design graphique",
            "Design d'interface utilisateur",
            "Design de produits",
            "Design de logos",
            "Illustration",
            "Animation",
            "Montage vidéo",
            "Effets spéciaux",
            "Enregistrement sonore",
            "Musique de film",
            "Production audiovisuelle",
            "Écriture créative",
            "Rédaction web",
            "Traduction",
            "Interprétation",
            "Enseignement en ligne",
            "Formation en ligne",
            "Coaching",
            "Conseil en affaires",
            "Marketing et ventes",
            "Gestion de projet",
            "Finance et comptabilité",
            "Droit",
            "Immobilier",
            "Assurance",
            "Vente au détail",
            "Service à la clientèle",
            "Hôtellerie et tourisme",
            "Restauration",
            "Soins de santé",
            "Médecine alternative",
            "Thérapie",
            "Psychologie",
            "Éducation",
            "Conception de jeux",
            "Programmation de jeux",
            "Testing de jeux",
            "Gestion de la communauté de jeux",
            "Traduction",
            "Interprétation",
            "Langues étrangères",
            "Enseignement",
            "Formation professionnelle",
            "Éducation des adultes",
            "Pédagogie",
            "Psychologie",
            "Coaching",
            "Développement personnel",
            "Santé mentale",
            "Santé physique",
            "Soins infirmiers",
            "Médecine",
            "Recherche médicale",
            "Santé publique",
            "Assurance maladie",
            "Sécurité alimentaire",
            "Agriculture",
            "Investissement",
            "Assurance",
            "Collecte de fonds",
            "Bénévolat",
            "Organisation à but non lucratif",
            "Entrepreneuriat",
            "Planification stratégique",
            "Gestion des risques",
            "Gestion de crise",
            "Leadership",
            "Collaboration",
            "Communication interculturelle",
            "Conception de circuits électroniques",
            "Programmation de microcontrôleurs",
            "Conception de systèmes embarqués",
            "Programmation de systèmes temps réel",
            "Conception de systèmes de communication",
            "Développement de logiciels de bureau",
            "Développement de logiciels web",
            "Développement d'applications mobiles",
            "Développement de jeux vidéo",
            "Génie logiciel",
            "Architecture de logiciels",
            "Tests logiciels",
            "Assurance qualité logicielle",
            "Analyse de données",
            "Science des données",
            "Apprentissage automatique",
            "Intelligence artificielle",
            "Robotique",
            "Réseaux informatiques",
            "Sécurité informatique",
            "Systèmes d'exploitation",
            "Virtualisation",
            "Cloud computing",
            "Administration de bases de données",
            "Gestion de projet informatique",
            "Gestion de la configuration",
            "DevOps",
            "Agilité",
            "Productivité",
            "Gestion de la chaîne d'approvisionnement",
            "Logistique",
            "Gestion des stocks",
            "Achats",
            "Gestion de la qualité",
            "Amélioration continue",
            "Lean manufacturing",
            "Géométrie",
            "Calcul différentiel",
            "Calcul intégral",
            "Algèbre linéaire",
            "Statistiques",
            "Probabilités",
            "Physique",
            "Chimie",
            "Biologie",
            "Génétique",
            "Microbiologie",
            "Biochimie",
            "Neurosciences",
            "Psychologie cognitive",
            "Sciences de l'éducation",
            "Sciences politiques",
            "Économie",
            "Sociologie",
            "Anthropologie",
            "Histoire",
            "Archéologie",
            "Philologie",
            "Linguistique",
            "Traduction et interprétation",
            "Tourisme",
            "Hôtellerie",
            "Restauration",
            "Service à la clientèle",
            "Marketing",
            "Publicité",
            "Relations publiques",
            "Journalisme",
            "Édition",
            "Communication",
            "Design graphique",
            "Design d'interface utilisateur",
            "Design de produits",
            "Design de mode",
            "Architecture d'intérieur",
            "Architecture de paysage",
            "Arts visuels",
            "Arts du spectacle",
            "Cinéma",
            "Musique",
            "Arts littéraires",
            "Histoire de l'art",
            "Philosophie",
            "Théologie","Hygiène et sécurité au travail",
            "Sécurité informatique",
            "Sécurité physique",
            "Sécurité incendie",
            "Sécurité financière",
            "Sécurité des données",
            "Sécurité des réseaux",
            "Développement de logiciels",
            "Programmation web",
            "Développement d'applications mobiles",
            "Intelligence artificielle",
            "Zoologie",
            "Botanique",
            "Écologie",
            "Biotechnologie",
            "Génétique",
            "Microbiologie",
            "Immunologie",
            "Virologie",
            "Bio-informatique",
            "Biochimie",
            "Bio-physique",
            "Psychologie sociale",
            "Sociologie",
            "Anthropologie",
            "Archéologie",
            "Histoire",
            "Philosophie",
            "Littérature",
            "Traduction",
            "Journalisme",
            "Communication"
        );
        $langues = array(
            "Anglais","Espagnol", "Français","Allemand", "Italien",  "Portugais","Chinois (mandarin)", "Japonais","Coréen","Russe",
            "Arabe","Hindi","Bengali","Punjabi","Ourdou","Persan","Turc","Hébreu","Grec","Néerlandais", "Suédois","Norvégien","Danois",
            "Finnois", "Islandais", "Polonais","Tchèque","Slovaque","Hongrois","Roumain","Bulgare","Croate","Serbe", "Slovène","Albanais","Macedonien",
            "Bosnien", "Kurde","Swahili","Amharique", "Yoruba","Zoulou", "Hausa","Igbo","Somali","Farsi","Tamoul","Cinghalais",
            "Tagalog","Indonésien","Malais","Vietnamien","Thai","Khmer","Laotien","Birman","Népalais","Sanskrit","Latin","Ancien grec","Arabe classique", "Hébreu biblique","Chinois classique",
            "Japonais classique","Coréen classique","Sanskrit classique","Latin médiéval","Anglo-saxon","Vieux norrois" );
        $postes = array("Développeur web","Développeur mobile","Développeur logiciel","Ingénieur en informatique","Analyste programmeur","Chef de projet informatique","Administrateur système",
                "Administrateur de base de données","Architecte de solution","Architecte cloud","Ingénieur DevOps","Ingénieur réseau",
                "Consultant en sécurité informatique","Data scientist","Analyste de données","Gestionnaire de projet","Spécialiste en expérience utilisateur",
                "Concepteur de produits","Spécialiste en marketing numérique","Analyste d'affaires","Gestionnaire de la chaîne d'approvisionnement","Conseiller financier",
                "Avocat","Médecin","Infirmier","Enseignant","Traducteur","Interprète", "Journaliste","Graphiste", "Photographe",
                "Rédacteur","Community manager","Responsable des ressources humaines","Comptable","Directeur financier","Directeur général" ,"Stage"
                );
        $loisirs = array( "Cuisine", "Pâtisserie","Viniculture",
                    "Oenologie",
                    "Mixologie",
                    "Jardinage",
                    "Horticulture",
                    "Paysagisme",
                    "Bricolage",
                    "Menuiserie",
                    "Plomberie",
                    "Musique",
                    "Chant",
                    "Instruments de musique",
                    "Danse",
                    "Classique",
                    "Contemporaine",
                    "Jazz",
                    "Hip-hop",
                    "Théâtre",
                    "Improvisation",
                    "Dramaturgie",
                    "Cinéma",
                    "Réalisations",
                    "Scénarisation",
                    "Lecture",
                    "Science-fiction",
                    "Fantasy",
                    "Mystère",
                    "Écriture",
                    "Romans",
                    "Poésie",
                    "Nouvelles",
                    "Peinture",
                    "Huile",
                    "Acrylique",
                    "Aquarelle",
                    "Dessin",
                    "Croquis",
                    "Illustration",
                    "Sculpture",
                    "Argile",
                    "Pierre",
                    "Bois",
                    "Photographie",
                    "Portrait",
                    "Nature",
                    "Voyage",
                    "Paysages urbains",
                    "Randonnée",
                    "Sentiers de randonnée",
                    "Camping",
                    "Tentes",
                    "Caravanes",
                    "Sports collectifs",
                    "Basket-ball",
                    "Football",
                    "Rugby",
                    "Handball",
                    "Volley-ball",
                    "Sports individuels",
                    "Athlétisme",
                    "Natation",
                    "Gymnastique",
                    "Yoga",
                    "Hatha",
                    "Vinyasa",
                    "Ashtanga",
                    "Méditation",
                    "Zen",
                    "Transcendantale",
                    "Jeux de société",
                    "Échecs",
                    "Jeu de dames",
                    "Jeux de cartes",
                    "Bridge",
                    "Poker",
                    "Langues étrangères",
                    "Anglais",
                    "Espagnol",
                    "Italien",
                    "Allemand",
                    "Japonais",
                    "Mandarin",
                    "Volontariat",
                    "Bénévolat",
                    "Activisme politique",
                    "Militantisme",
                    "Parti politique",
                    "Religion",
                    "Christianisme",
                    "Islam",
                    "Judaïsme",
                    "Bouddhisme",
                    "Spiritualité",
                    "Astrologie",
                    "Numérologie",
                    "Cartomancie",
                    "Tarot",
                    "Énigmes et casse-tête",
                    "Escape games",
                    "Jeux de rôle",
                    "Jeux de guerre",
                    "Cosplay",
                    "Science-fiction",
                    "Fantasy",
                    "Horreur",
                    "Comédie",
                    "Romance","Lecture",
                    "Drame",
                    "Thriller",
                    "Documentaires",
                    "Séries TV",
                    "Ski",
                    "Ski alpin",
                    "Ski de fond",
                    "Snowboard",
                    "Raquettes",
                    "Patinage sur glace",
                    "Patinage artistique",
                    "Hockey sur glace",
                    "Arts martiaux",
                    "Karaté",
                    "Judo",
                    "Taekwondo",
                    "Boxe",
                    "Fitness",
                    "Musculation",
                    "Cardio-training",
                    "Zumba",
                    "Pilates",
                    "Équitation",
                    "Équitation classique",
                    "Équitation western",
                    "Endurance équestre",
                    "Sports nautiques",
                    "Surf",
                    "Planche à voile",
                    "Voile",
                    "Kayak",
                    "Canoë",
                    "Stand-up paddle",
                    "Plongée sous-marine","lecture",
                    "Apnée",
                    "Voitures");
        $idx=array(
            "Expérience" =>  $postes ,
            "Education" => $edu,
            "Compétence" => $competences,
            "Langues" =>  $langues,
            "Loisirs" => $loisirs, 
        );
            for($i=1;$i<count($tet)-1;$i++){
                $tst=array();
                $txt1=$this->extTxt($txt,strpos($txt,$tet[$i]),strpos($txt,$tet[$i+1]));
                for($j=0;$j<count($idx[$tet[$i]]);$j++){
                    $tst2=$this->getElement($idx[$tet[$i]][$j],$txt1);
                    if(!empty($tst2)){
                        // echo $tet[$i]. ": \n";
                        // echo $tst2["kew"];
                        $tst[]=$tst2;
                    }
                    
                }
                $idx[$tet[$i]]=$tst;
            }
            $tst=array();
                $txt1=$this->extTxt($txt,strpos($txt,"Loisirs"),strlen($txt));
                for($j=0;$j<count($idx["Loisirs"]);$j++){
                    $tst2=$this->getElement($idx["Loisirs"][$j],$txt1);
                    if(!empty($tst2)){
                        // echo $tet[$i]. ": \n";
                        // echo $tst2["kew"];
                        $tst[]=$tst2;
                    }
                
                }
                $idx["Loisirs"]=$tst;
                $_SESSION["js"]=$idx;
                return json_encode($idx);
    }
    public function extTxt($txt,$p1,$p2){
        return substr($txt, $p1, $p2-$p1);
    }

    public function getElement($string,$txt){
        
        
        $count= substr_count($txt,$string);
        if($count){
            $data=array(
                "kew"=>$string,
                "nm"=>$count
            );
            return $data;
        }
        
    }
}
?>