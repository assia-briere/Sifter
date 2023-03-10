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
            header("location: ../view/signup.php");
            exit();
        }
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        
        $_SESSION["id"] = $user["idc"];
        $_SESSION["gmail"] = $gmail;
        
        
        $stmt->closeCursor();
        return true;
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
                header('location: ../view/Candidat.php');
                exit();
        }catch(Exception $e){
            echo "error : ".$e->getMessage();
        }
        
        $stmt->closeCursor();
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
    public function trfCv($txt){
        echo $txt;
    }
    public function trosfCv($txt){
        $tet= array("Profil", "Exp??rience","Education","Comp??tence","Langues","Loisirs");
        $edu=array("Master","Licence","Docorat","technicien","Bac+2","Bac+3","Bac+5","ingenieur","Baccalaur??at" );
        $competences = array(
            "Gestion", "Communication","Marketing","Vente","Service client","Management","Journalisme","Transport et logistique",
            "Tourisme et h??tellerie","Finance","Comptabilit??","Ressources humaines","Droit","M??decine","Ing??nierie",
            "Architecture","Design graphique","Design web","Design d'interface utilisateur","Design industriel","Design de produit",
            "Illustration","Animation","Musique","Photographie",
            "R??seaux sociaux","Analyse de donn??es","Business intelligence","Intelligence artificielle","Machine learning","Cybers??curit??","S??curit?? physique",
            "Sant?? et s??curit?? au travail","M??thodologie de recherche","Analyse financi??re","Gestion de portefeuille","Gestion de risques",
            "Gestion de la qualit??","Gestion de la cha??ne d'approvisionnement","Gestion de la production","Gestion de la maintenance",
            "Gestion de la distribution","Gestion de la logistique invers??e","Gestion des achats","Gestion des stocks","Gestion des entrep??ts","Gestion des inventaires",
            "Journalisme d'entreprise","R??daction technique","Traduction","Interpr??tation","Enseignement","Formation","Coaching","Conseil",
            "Entrepreneuriat","Cr??ation d'entreprise","D??veloppement commercial","Fiscalit??","Audit","Consulting informatique","PHP","HTML","CSS","SQL","PL/SQL","Oracle","SQL Developper","Visual studio/Code","JavaScript","MySQL","jQuery","AngularJS",
            "React", "Vue.js","Node.js","Symfony","Laravel","CodeIgniter","CakePHP","WordPress","Drupal","Magento","Git","SASS/LESS","Bootstrap",
            "Materialize","API REST","SOAP","JSON","XML","OAuth", "JWT","Websockets","Redis","Memcached","Amazon Web Services","Google Cloud Platform",
            "Microsoft Azure","Linux","Apache","Nginx","Virtualisation","Containerisation","Docker","Kubernetes","Agilit??","Scrum","Kanban","Test Driven Development","Continuous Integration","DevOps",
            "S??curit?? informatique",  "Analyse de performance","Optimisation de site web","Design graphique","Animation","Mod??lisation 3D", "VFX et compositing",
            "Montage vid??o","Sound design",
            "Musique de film","C","C#","Java",
            "Jeu vid??o",
            "D??veloppement de jeux mobiles",
            "D??veloppement de jeux PC",
            "Design de jeux",
            "Gameplay",
            "Marketing de jeux",
            "S??curit?? informatique",
            "Syst??mes et r??seaux",
            "Administration de bases de donn??es",
            "Analyse de donn??es",
            "Intelligence artificielle",
            "Machine learning",
            "Deep learning",
            "Vision par ordinateur",
            "D??veloppement de logiciels",
            "Programmation web",
            "D??veloppement mobile",
            "D??veloppement d'applications desktop",
            "D??veloppement de microcontr??leurs",
            "IoT",
            "Automatisation industrielle",
            "Robotique",
            "Ing??nierie ??lectrique",
            "Ing??nierie m??canique",
            "Ing??nierie civile",
            "Ing??nierie chimique",
            "Ing??nierie a??rospatiale",
            "Ing??nierie nucl??aire",
            "M??decine",
            "Soins infirmiers",
            "Kin??sith??rapie",
            "Chirurgie",
            "Pharmacie",
            "Dentisterie",
            "Psychiatrie",
            "Psychologie clinique",
            "Psychoth??rapie",
            "Orthophonie",
            "Orthop??die",
            "Optom??trie",
            "Marketing",
            "Publicit??",
            "Relations publiques",
            "Analyse de march??",
            "Planification strat??gique",
            "D??veloppement de marque",
            "Communication",
            "Journalisme",
            "Traduction et interpr??tation",
            "Enseignement",
            "Formation professionnelle",
            "Coaching",
            "Leadership",
            "E-commerce",
            "Web design",
            "D??veloppement web",
            "Programmation back-end",
            "Programmation front-end",
            "D??veloppement de CMS",
            "Gestion de contenu",
            "Int??gration de donn??es",
            "Big data",
            "Business intelligence",
            "Analyse de donn??es",
            "Data mining",
            "Data science",
            "D??veloppement logiciel",
            "Architecture logicielle",
            "Test logiciel",
            "Gestion de projets informatiques",
            "Gestion de bases de donn??es",
            "S??curit?? informatique",
            "R??seaux et syst??mes",
            "Support technique",
            "Assistance utilisateur",
            "Formation en informatique",
            "Design graphique",
            "Design d'interface utilisateur",
            "Design de produits",
            "Design de logos",
            "Illustration",
            "Animation",
            "Montage vid??o",
            "Effets sp??ciaux",
            "Enregistrement sonore",
            "Musique de film",
            "Production audiovisuelle",
            "??criture cr??ative",
            "R??daction web",
            "Traduction",
            "Interpr??tation",
            "Enseignement en ligne",
            "Formation en ligne",
            "Coaching",
            "Conseil en affaires",
            "Marketing et ventes",
            "Gestion de projet",
            "Finance et comptabilit??",
            "Droit",
            "Immobilier",
            "Assurance",
            "Vente au d??tail",
            "Service ?? la client??le",
            "H??tellerie et tourisme",
            "Restauration",
            "Soins de sant??",
            "M??decine alternative",
            "Th??rapie",
            "Psychologie",
            "??ducation",
            "Conception de jeux",
            "Programmation de jeux",
            "Testing de jeux",
            "Gestion de la communaut?? de jeux",
            "Traduction",
            "Interpr??tation",
            "Langues ??trang??res",
            "Enseignement",
            "Formation professionnelle",
            "??ducation des adultes",
            "P??dagogie",
            "Psychologie",
            "Coaching",
            "D??veloppement personnel",
            "Sant?? mentale",
            "Sant?? physique",
            "Soins infirmiers",
            "M??decine",
            "Recherche m??dicale",
            "Sant?? publique",
            "Assurance maladie",
            "S??curit?? alimentaire",
            "Agriculture",
            "Investissement",
            "Assurance",
            "Collecte de fonds",
            "B??n??volat",
            "Organisation ?? but non lucratif",
            "Entrepreneuriat",
            "Planification strat??gique",
            "Gestion des risques",
            "Gestion de crise",
            "Leadership",
            "Collaboration",
            "Communication interculturelle",
            "Conception de circuits ??lectroniques",
            "Programmation de microcontr??leurs",
            "Conception de syst??mes embarqu??s",
            "Programmation de syst??mes temps r??el",
            "Conception de syst??mes de communication",
            "D??veloppement de logiciels de bureau",
            "D??veloppement de logiciels web",
            "D??veloppement d'applications mobiles",
            "D??veloppement de jeux vid??o",
            "G??nie logiciel",
            "Architecture de logiciels",
            "Tests logiciels",
            "Assurance qualit?? logicielle",
            "Analyse de donn??es",
            "Science des donn??es",
            "Apprentissage automatique",
            "Intelligence artificielle",
            "Robotique",
            "R??seaux informatiques",
            "S??curit?? informatique",
            "Syst??mes d'exploitation",
            "Virtualisation",
            "Cloud computing",
            "Administration de bases de donn??es",
            "Gestion de projet informatique",
            "Gestion de la configuration",
            "DevOps",
            "Agilit??",
            "Productivit??",
            "Gestion de la cha??ne d'approvisionnement",
            "Logistique",
            "Gestion des stocks",
            "Achats",
            "Gestion de la qualit??",
            "Am??lioration continue",
            "Lean manufacturing",
            "G??om??trie",
            "Calcul diff??rentiel",
            "Calcul int??gral",
            "Alg??bre lin??aire",
            "Statistiques",
            "Probabilit??s",
            "Physique",
            "Chimie",
            "Biologie",
            "G??n??tique",
            "Microbiologie",
            "Biochimie",
            "Neurosciences",
            "Psychologie cognitive",
            "Sciences de l'??ducation",
            "Sciences politiques",
            "??conomie",
            "Sociologie",
            "Anthropologie",
            "Histoire",
            "Arch??ologie",
            "Philologie",
            "Linguistique",
            "Traduction et interpr??tation",
            "Tourisme",
            "H??tellerie",
            "Restauration",
            "Service ?? la client??le",
            "Marketing",
            "Publicit??",
            "Relations publiques",
            "Journalisme",
            "??dition",
            "Communication",
            "Design graphique",
            "Design d'interface utilisateur",
            "Design de produits",
            "Design de mode",
            "Architecture d'int??rieur",
            "Architecture de paysage",
            "Arts visuels",
            "Arts du spectacle",
            "Cin??ma",
            "Musique",
            "Arts litt??raires",
            "Histoire de l'art",
            "Philosophie",
            "Th??ologie","Hygi??ne et s??curit?? au travail",
            "S??curit?? informatique",
            "S??curit?? physique",
            "S??curit?? incendie",
            "S??curit?? financi??re",
            "S??curit?? des donn??es",
            "S??curit?? des r??seaux",
            "D??veloppement de logiciels",
            "Programmation web",
            "D??veloppement d'applications mobiles",
            "Intelligence artificielle",
            "Zoologie",
            "Botanique",
            "??cologie",
            "Biotechnologie",
            "G??n??tique",
            "Microbiologie",
            "Immunologie",
            "Virologie",
            "Bio-informatique",
            "Biochimie",
            "Bio-physique",
            "Psychologie sociale",
            "Sociologie",
            "Anthropologie",
            "Arch??ologie",
            "Histoire",
            "Philosophie",
            "Litt??rature",
            "Traduction",
            "Journalisme",
            "Communication"
        );
        $langues = array(
            "Anglais","Espagnol", "Fran??ais","Allemand", "Italien",  "Portugais","Chinois (mandarin)", "Japonais","Cor??en","Russe",
            "Arabe","Hindi","Bengali","Punjabi","Ourdou","Persan","Turc","H??breu","Grec","N??erlandais", "Su??dois","Norv??gien","Danois",
            "Finnois", "Islandais", "Polonais","Tch??que","Slovaque","Hongrois","Roumain","Bulgare","Croate","Serbe", "Slov??ne","Albanais","Macedonien",
            "Bosnien", "Kurde","Swahili","Amharique", "Yoruba","Zoulou", "Hausa","Igbo","Somali","Farsi","Tamoul","Cinghalais",
            "Tagalog","Indon??sien","Malais","Vietnamien","Thai","Khmer","Laotien","Birman","N??palais","Sanskrit","Latin","Ancien grec","Arabe classique", "H??breu biblique","Chinois classique",
            "Japonais classique","Cor??en classique","Sanskrit classique","Latin m??di??val","Anglo-saxon","Vieux norrois" );
        $postes = array("D??veloppeur web","D??veloppeur mobile","D??veloppeur logiciel","Ing??nieur en informatique","Analyste programmeur","Chef de projet informatique","Administrateur syst??me",
                "Administrateur de base de donn??es","Architecte de solution","Architecte cloud","Ing??nieur DevOps","Ing??nieur r??seau",
                "Consultant en s??curit?? informatique","Data scientist","Analyste de donn??es","Gestionnaire de projet","Sp??cialiste en exp??rience utilisateur",
                "Concepteur de produits","Sp??cialiste en marketing num??rique","Analyste d'affaires","Gestionnaire de la cha??ne d'approvisionnement","Conseiller financier",
                "Avocat","M??decin","Infirmier","Enseignant","Traducteur","Interpr??te", "Journaliste","Graphiste", "Photographe",
                "R??dacteur","Community manager","Responsable des ressources humaines","Comptable","Directeur financier","Directeur g??n??ral" ,"Stage"
                );
        $loisirs = array( "Cuisine", "P??tisserie","Viniculture",
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
                    "Th????tre",
                    "Improvisation",
                    "Dramaturgie",
                    "Cin??ma",
                    "R??alisations",
                    "Sc??narisation",
                    "Lecture",
                    "Science-fiction",
                    "Fantasy",
                    "Myst??re",
                    "??criture",
                    "Romans",
                    "Po??sie",
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
                    "Randonn??e",
                    "Sentiers de randonn??e",
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
                    "Athl??tisme",
                    "Natation",
                    "Gymnastique",
                    "Yoga",
                    "Hatha",
                    "Vinyasa",
                    "Ashtanga",
                    "M??ditation",
                    "Zen",
                    "Transcendantale",
                    "Jeux de soci??t??",
                    "??checs",
                    "Jeu de dames",
                    "Jeux de cartes",
                    "Bridge",
                    "Poker",
                    "Langues ??trang??res",
                    "Anglais",
                    "Espagnol",
                    "Italien",
                    "Allemand",
                    "Japonais",
                    "Mandarin",
                    "Volontariat",
                    "B??n??volat",
                    "Activisme politique",
                    "Militantisme",
                    "Parti politique",
                    "Religion",
                    "Christianisme",
                    "Islam",
                    "Juda??sme",
                    "Bouddhisme",
                    "Spiritualit??",
                    "Astrologie",
                    "Num??rologie",
                    "Cartomancie",
                    "Tarot",
                    "??nigmes et casse-t??te",
                    "Escape games",
                    "Jeux de r??le",
                    "Jeux de guerre",
                    "Cosplay",
                    "Science-fiction",
                    "Fantasy",
                    "Horreur",
                    "Com??die",
                    "Romance","Lecture",
                    "Drame",
                    "Thriller",
                    "Documentaires",
                    "S??ries TV",
                    "Ski",
                    "Ski alpin",
                    "Ski de fond",
                    "Snowboard",
                    "Raquettes",
                    "Patinage sur glace",
                    "Patinage artistique",
                    "Hockey sur glace",
                    "Arts martiaux",
                    "Karat??",
                    "Judo",
                    "Taekwondo",
                    "Boxe",
                    "Fitness",
                    "Musculation",
                    "Cardio-training",
                    "Zumba",
                    "Pilates",
                    "??quitation",
                    "??quitation classique",
                    "??quitation western",
                    "Endurance ??questre",
                    "Sports nautiques",
                    "Surf",
                    "Planche ?? voile",
                    "Voile",
                    "Kayak",
                    "Cano??",
                    "Stand-up paddle",
                    "Plong??e sous-marine","lecture",
                    "Apn??e",
                    "Voitures");
        $idx=array(
            "Exp??rience" =>  $postes ,
            "Education" => $edu,
            "Comp??tence" => $competences,
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