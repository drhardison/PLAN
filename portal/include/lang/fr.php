<?php
//English language array...have fun :)

$lang = array(
	"global" => array(
	//General
	"noauth" => "Vous n'�tes pas autoris� � voir cette page.",
	"home" => "home",
	"file" => "fichier",
	"files" => "fichiers",
	"map" => "carte",
	"music" => "musique",
	"servers" => "serveurs",
	"schedule" => "calendrier",
	"tournaments" => "tournois",
	"sponsors" => "sponsors",
	"staff" => "staff",
	"shoutbox" => "shoutbox",
	"benchmarks" => "benchmarks",
	"tech_support" => "support technique",
	"restaurants" => "restaurants",
	"policy" => "charte",
	"users" => "utilisateurs",
	"benchmarks" => "benchmarks",
	"profile" => "profil",
	"logout" => "se d�connecter",
	"login" => "se connecter",
	"register" => "s'enregistrer",
	"logedout_message" => "you are not logged in &gt; login",
	"forgot" => "mot de passe oubli� ?",
	"admin" => "admin",
	"administrator" => "administrateur",
	"sadministrator" => "super administrateur",
	"change_pw" => "changer son mot de passe",
	//Left hand module stuff
 		//cpanel	
	"cpanel" => "panneau de contr�le",
	"cp_cuser" => "pseudo client",
	"cp_cip" => "adresse ip client",
	"food" => "nourriture",
	"gr" => "game request",
	"prizes" => "prix",
	"going_for" => "venir pour",
	"reg_for" => "s'inscrire �",
	"open_play" => "jeu ouvert",
	"cp_lodge" => "logements locaux",
	"cp_register" => "besoin d'un compte ? enregistrez-vous ici",
	"cp_security" => "&nbsp;pour une meilleure s�curit�, activez les javascript.<br />&nbsp;n�cessite un cookie.<br />",
	"cp_other" => "autres liens",
	
	
	"admin_guides" => "guide admin",
	"register_account" => "s'enregistrer pour avoir un compte",
	"schedule_hour" => "emploi du temps de l'heure � venir",
	"view_all" => "tout voir",
	"bench_link" => "comp�tiotion de bench",
	"caffeine" => "caf�ine",
	"caffeine_log" => "caf�ine log",
	"marathon" => "le marathon",
	"polls" => "sondages",
	"announcements" => "annonces",
	//omfg were gonna need a giant error set :)
	),
	
	"admin_modules" => array(
	"title" => "module config",
	"add_notes" => "Cela vous permet de d�placer les modules vers le haut ou le bas ainsi que de les activer/d�sactiver. S�lecionnez simplement un module et cliquez sur le bouton pour le d�placer.<br>NOTE: Cela n�cessite que le toggle correspondant (si besoin est) soit activ�.",
	"enable" => "activer",
	"enabled" => "activ�",
	"up" => " monter ",
	"down" => "descendre",
	"disable" => "d�sactiver",
	"disabled" => "d�sactiv�",
	),
	
	"admin_benchmark_cheaters" => array(
	"plural" => "tricheur aux benchmarks",
	"singular" => "reset les tricheurs",
	"notes_update" => "reset un benchmarks si il vous semble suspect ou faux. Cette op�ration est irr�versible, aussi soyez prudent.",
	"desc_userid" => "pseudo",
	"error_userid" => "Vous avez oubli� de s�lectionner le pseudo du tricheur.",
	"noauth" => "Vous n'�tes pas autoris� � voir cette page.",
	),

	"admin_benchmarks" => array(
	"plural" => "benchmarks",
	"singular" => "benchmark",
	"notes_add" => "Ajouter ou modifier le benchmarks d'un joueur. Gardez en t�te que tous les benchmarks list�s comme faisant partie du score global sont n�cessaires pour �tablir le gagnant global.",
	"desc_name" => "nom du benchmark",
	"error_name" => "Vous avez oubli� d'entrer un nom de benchmark!",
	"desc_abbreviation" => "abr�viation du benchmark",
	"desc_composite" => "Cela fait partie du score global ?",
	"desc_deflate" => "pourcentage de d�flation appliqu�e au score quand il est ajout� au score global.",
	),
	
	"admin_caffeine_cheaters" => array(
	"plural" => "tricheurs du mode caf�ine",
	"singular" => "�ffacer les tricheurs",
	"notes_update" => "Effacez le compte d'un joueur du mode caf�ine si il est suspect� de tricher. C'est irr�versible, donc soyez prudent.",
	"desc_userid" => "pseudo du tricheur",
	"error_userid" => "Vous avez oubli� de choisir le pseudo du tricheur.",
	),

	"admin_caffeine_types" => array(
	"plural" => "types de caf�ines",
	"singular" => "type de caf�ine",
	"notes_add" => "Ajouter ou modifier les types de caf�ine � disposition des joueurs.",
	"desc_name" => "Nom du type de caf�ine",
	"error_name" => "Vous avez oubli� d'entrer un nom au type de caf�ine !",
	),

	"admin_caffeine" => array(
	"plural" => "objets caf�ines",
	"singular" => "caf�ine",
	"notes_add" => "Ajouter ou modifier les objets caf�ines propos�s aux joueurs.",
	"desc_name" => "Nom de l'objets caf�ine",
	"error_name" => "Vous avez oubli� d'entrer un nom � l'objet caf�ine !",
	"desc_caffeine_permg" => "quantit� de caf�ine par milligramme (jusqu'� 10 positions d�cimales)",
	"error_caffeine_permg" => "pour calculer le contenu de caf�ine, vous devez entrer la quantit� de caf�ine par milligramme dans la substance",
	"desc_ttype" => "type de substance",
	"descother_ttype" => "Ajouter d'autres types",
	),
	
	//is this legal?
	"admin_deleteuser" => array(
	"plural" => "�ffacer des utilisateurs",
	"singular" => "�ffacer un utilisateur",
	"notes_update" => "Supprimer un utilisateur inclue toutes les informations qui lui sont associ�es. Il sera �ffac� de tous les tournois et sera remplac� par un vide. Ce n'est pas r�versible donc soyez prudent. Vous ne pouvez pas �ffacer un super admin, vous devez le r�trograder au stade d'administrateur ou d'utilisateur normal pour pouvoir l'�ffacer.",
	//tournament...how to implement?"notes_update" => "deletes a user.  this is not reversible, so be careful.  super administrators are not shown here, you must first demote a user to administrator or normal user status to delete them.",
	"desc_userid" => "pseudo",
	"error_userid" => "vous avez oubli� de s�lectionner un utilisateur.",
	),
	
	"admin_disp_scores" => array(
	"plural" => "scores donn�s par les joueurs",
	"singular" => "",
	"teamname" => "nom de l'�quipe",
	"id" => "id",
	),

	"admin_foodrun" => array(
	"plural" => "food runs",
	"singular" => "food run",
	"notes_del" => "this feature is currently toggled off and users are not allowed to add food runs.  if you wish to change its status, you can <a href=\"admin_toggle.php\">toggle it on</a>.",
	"desc_userid" => "post� par",
	"desc_datetime_leaving" => "heure de d�part",
	"error_datetime_leaving" => "you forgot to enter a time of departure!",
	"desc_headline" => "destination",
	"error_headline" => "you didn't say where you're going!",
	),
	
	"admin_games" => array(
	"plural" => "jeux",
	"singular" => "jeu",
	"notes_add" => "Liste de tous les jeux disponibles lors d'un tournoi. Si vous souhaitez lancer un tournoi sur un jeu, vous devez le lister ici.",
	"desc_name" => "Nom du jeu",
	"error_name" => "Vous avez oubli� d'entrer un nom de jeu !",
	"desc_current_version" => "Version actuelle",
	"desc_url_update" => "Url relative ou absolue permettant de t�l�chager le dernier patch du jeu",
	"desc_url_maps" => "Url relative ou absolue menant � un pack de cartes",
	),

	"admin_gamingrig" => array(
	"plural" => "d�tails de la config",
	"singular" => "d�tail de la config",
	"notes_mod" => "modifier la config d'un utilisateur.",
	"desc_ms_sharename" => "nom de l'ordinateur",
	"desc_ms_workgroup" => "nom du groupe de travail (r�seau)",
	"desc_ftp_server" => "Poss�de un serveur ftp ?",
	"desc_comp_proc" => "Sp�cifications du cpu (nom et vitesse)",
	"desc_comp_mem" => "Sp�cifications de la m�moire (quantit� en Mb et type)",
	"desc_comp_hdstorage" => "Sp�cifications du disque dur (quantit� en Go et nombre de disques)",
	"desc_comp_gfx" => "Sp�cifications de la carte graphique (quantit� de m�moire en Mb et chipset)",
	),
);











//Installer stuff...old format
$lang["install"]['install'] = 'installer ALP';
$lang["install"]['success'] = 'succ�s !';
$lang["install"]['failure'] = '�chec.';
$lang["install"]['on'] = 'on';
$lang["install"]['off'] = 'off';
$lang["install"]['nolongerrequired'] = 'n\'est plus requis, c\'est ok si activ�.';
$lang["install"]['optional'] = 'optionel, mais recomand�.';
$lang["install"]['start'] = 'D�but';
$lang["install"]['end'] = 'Fin';
$lang["install"]['errors'] = 'ERREURS';
$lang["install"]['warning'] = 'ATTENTION!';
$lang["install"]['and'] = 'et';

$lang["install"]['stepone'] = '�tape une sur cinq';
$lang["install"]['stepone_passed'] = '<strong>Test de BDD: </strong>Pass�';
//$lang["install"]['stepone_description'] = 'edit the _config.php file located in the / directory of ALP.  edit the variables to describe your lan party.';
$lang["install"]['stepone_description'] = 'Configurer la BDD - Veuillez entrer les param�tres de votre serveur SQL ci-dessus.';
$lang["install"]['stepone_next'] = 'aler � l\'�tape deux - validation de _config.php et php.ini';
$lang["install"]['stepone_repeat'] = 'changer la configuration de la BDD';

$lang["install"]['steptwo'] = '�tape deux sur cinq';
$lang["install"]['steptwo_varone'] = 'nom de la lan';
$lang["install"]['steptwo_varone_error'] = "Vous devez entrer un nom de lan.";
$lang["install"]['steptwo_vartwo'] = "Nom du groupe de jeu";
$lang["install"]['steptwo_vartwo_error'] = "Vous devez entrer un nom de groupe de jeu.";
$lang["install"]['steptwo_varthree'] = "Maximum de participants";
$lang["install"]['steptwo_varthree_error'] = "Le nombre de participants maximum doit �tre sup�rieur � z�ro.";
$lang["install"]['steptwo_varfour'] = "Pseudo du super admin";
$lang["install"]['steptwo_varfour_error'] = "Vous devez sp�cifier un pseudo de super admin.";
$lang["install"]['steptwo_varfive'] = "Information de la connexion mysql";
$lang["install"]['steptwo_varfive_error'] = "Vos informations de connexion mysql sont �rron�es.";
$lang["install"]['steptwo_varsix'] = "php.ini variable (magic_quotes_gpc)";
$lang["install"]['steptwo_varsix_error'] = "Editez php.ini pour avoir magic_quotes_gpc d'activ�. Si vous ne savez pas comment faire cela; consultez Google ou le forum technique.";
$lang["install"]['steptwo_varseven'] = "langue par d�faut";
$lang["install"]['steptwo_varseven_error'] = "Vous avez oubli� de choisir une langue par d�faut, ou la langue sp�cifi�e n'est pas inclus dans les fichiers ALP.";
$lang["install"]['steptwo_vareight'] = "php.ini variable (short_open_tag)";
$lang["install"]['steptwo_vareight_error'] = "Editez php.ini pour avoir short_open_tags d'activ�. Si vous ne savez pas comment faire cela; consultez Google ou le forum technique.";
$lang["install"]['steptwo_varnine'] = "php.ini variable (register_globals)";
$lang["install"]['satellitenotes'] = "Autres notes (ALP satellites):";
$lang["install"]['satellitenotes_valone'] = "Le nom de domaine de votre serveur web doit �tre ALP. (ie: http://alp/ est l'adresse r�gl�e par le DNS; pas windows WINS).";
$lang["install"]['satellitenotes_valtwo'] = "Votre php doit avoir le ftp et les sockets d'extensions s�curis�s d'activ�s.<br />(Ignorez cela si vous n'avez pas pr�vu d'utiliser les ALP Satellites)";
$lang["install"]['steptwo_varten'] = "Dates de d�but et de fin";
$lang["install"]['steptwo_varten_error'] = "La date de fin de votre lan doit �tre apr�s la date de commencement.";
$lang["install"]['steptwo_vareleven'] = "php.ini variable (error reporting)";
$lang["install"]['steptwo_vareleven_error'] = "Ce n'est pas la valeur par d�faut (E_ALL & ~E_NOTICE) ou (2039).<br />&nbsp;&nbsp;&nbsp;si votre valeur est plus strict; ALP vous renverra des erreurs.";
$lang["install"]['steptwo_vartwelve'] = "base de donn�es mysql";
$lang["install"]['steptwo_vartwelve_error'] = "Le nom de la base de donn�es mysql ne doit pas exister actuellement.<br />&nbsp;&nbsp;&nbsp;Si vous continuez, et qu'il n'existe toujours pas � l'�tape quatre, il <br />&nbsp;&nbsp;&nbsp;sera cr�� automatiquement.";
	
$lang["install"]['steptwo_next'] = "aller � l'�tape trois - configuration de la structure de la table mysql";
$lang["install"]['steptwo_redo'] = "Faites les modifications n�cessaires au fichier _config.php et actualisez la page.";

$lang["install"]["stepthree"] = "�tape trois sur cinq";
$lang["install"]["stepthree_warning"] = "Continuer �ffacera la totalit�s des tables existantes d'ALP. Si vous avez une version pr�c�dente d'ALP que vous souhaitez conserver, pensez � sauvegarder votre base de donn�e. Ce script remplace les tables existantes par des tables vides. A cause des changements trop importants qui ont �t� r�alis�s depuis la version pr�c�dente, il n'y a pas de script d'upgrade. D�sol�.";
$lang["install"]["stepthree_doublewarning"] = "VOUS AVEZ �T� AVERTIS !!!";
$lang["install"]["stepthree_tournamentmodetitle"] = "mode tournois seulement";
$lang["install"]["stepthree_tournamentmode"] = "le mode tournoi va automatiquement configurer la BDD d'ALP en prennant en compte votre intention d'utiliser ALP uniquement pour des tournois. Cela va automatiquement d�sactiver toutes les capacit�s non n�cessaires. Cette possibilit� pourra �tre r�activ�e plus tard. ALP tournois est pour les tournois de jeux vid�o, ALP sports est pour tous les autres types de tournois (football, nage, basketball, etc.)";
$lang["install"]["stepthree_next_choice1"] = "aller � l'�tape quatre - Version compl�te - cr�ation de la structure de la table mysql";
$lang["install"]["stepthree_next_choice2"] = "aller � l'�tape quatre - ALP en mode tournois seulement - cr�ation de la structure de la table mysql";
$lang["install"]["stepthree_next_choice3"] = "aller � l'�tape quatre - ALP en mode tournois sportifs seulement - cr�ation de la structure de la table mysql";
	
$lang["install"]["stepfour"] = "etape quatre sur cinq";
$lang["install"]["stepfour_creatingdatabase"] = "cr�ation de la BDD ALP";
$lang["install"]["stepfour_newtable"] = "cr�er un nouveau tableau";
$lang["install"]["stepfour_defaultvalues"] = "ins�rez les valeur par d�faut dans";
$lang["install"]["stepfour_success"] = "cr�ation de la structure de la table r�ussie";
$lang["install"]["stepfour_warning"] = "soyez s�r d'avoir supprim� le fichier install.php avant d'utiliser le script";
$lang["install"]["stepfour_next"] = "aller � l'�tape cinq - enregistrer le compte super admin";
$lang["install"]["stepfour_redo"] = "une erreur innatendue a surgie de l'espace.  actualisez cette page pour essayer de nouveau.";
	
$lang["install"]['coffee']    = 'caf�';
$lang["install"]['softdrink'] = 'sodas';
$lang["install"]['tea']       = 'th�';
$lang["install"]['other']     = 'autres';
?>
