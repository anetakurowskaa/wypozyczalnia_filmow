<?


$user = 's176350';
$password = 'YLa2PFzu';
$database = 's176350';

mysql_connect('10.254.94.2', $user, $password);
@mysql_select_db($database) or die("Nie udało się wybrać bazy danych");

/*
$query= "CREATE TABLE `filmy` (`id` int(6) NOT NULL auto_increment, `tytul` varchar(35) NOT NULL, `gatunek` varchar(30) NOT NULL, `opis` varchar(300) NOT NULL, `aktorzy` varchar(100) NOT NULL, `cena` varchar(10) NOT NULL,PRIMARY KEY (id))";

mysql_query($query);
if ($query)
	{
		echo ("Ok");
	}
	else
	{
		echo ("Blad");
	}

*/

//$query = "INSERT INTO `filmy` VALUES ('','Skazani na Shawshank','dramat','Adaptacja opowiadania Stephena Kinga. Historia nies�usznie skazanego na do�ywocie bankiera, kt�ry musi prze�y� w brutalnym �wiecie rz�dzonym przez stra�nik�w i wsp�wi�ni�w.','Tim Robbins Morgan Freeman Bob Gunton','7 zl')";
//$query = "INSERT INTO `filmy` VALUES ('','Nietykalni','biograficzny dramat komedia','Sparali�owany milioner zatrudnia do opieki m�odego ch�opaka z przedmie�cia, kt�ry w�a�nie wyszed�� z wi�zienia.','Francois Cluzet Omar Sy Anne Le Ny','8 zl')";
//$query = "INSERT INTO `filmy` VALUES ('','Ojciec chrzestny','dramat gangsterski','Opowie�� o nowojorskiej rodzinie mafijnej. Starzej�cy si� Don Corleone pragnie przekaza� w�adz� swojemu synowi.','Marlon Brando Al Pacino James Caan','11 zl')";
//$query = "INSERT INTO `filmy` VALUES ('','Zielona mila','dramat','Emerytowany stra�nik wi�zienny opowiada przyjaci�ce o niezwyk�ym m�czy�nie, kt�rego skazano na �mier� za zab�jstwo dw�ch 9-letnich dziewczynek.','Tom Hanks David Morse Bonnie Hunt','7 zl')";
//$query = "INSERT INTO `filmy` VALUES ('','Forrest Gump','dramat komedia','Historia �ycia Forresta, ch�opca o niskim ilorazie inteligencji z niedow�adem ko�czyn, kt�ry staje si� miliarderem i bohaterem wojny w Wietnamie.','Tom Hanks Robin Wright Gary Sinise','8 zl')";
//$query = "INSERT INTO `filmy` VALUES ('','Lot nad kuku�czym gniazdem','dramat psychologiczny','Historia z�odzieja, szulera i chuligana, kt�ry, by unikn�� wi�zienia, udaje niepoczytalno��. Trafia do szpitala dla umys�owo chorych, gdzie tward� r�k� rz�dzi siostra Ratched.','Jack Nicholson Louise Fletcher William Redfield','7 zl')";
//$query = "INSERT INTO `filmy` VALUES ('','Dwunastu gniewnych ludzi','dramat s�dowy','Dwunastu przysi�g�ych ma wyda� wyrok w procesie o morderstwo. Jeden z nich ma w�tpliwo�ci dotycz�ce winy oskar�onego.','Martin Balsam John Fiedler Lee J. Cobb','8 zl')";
//$query = "INSERT INTO `filmy` VALUES ('','Ojciec chrzestny II','dramat gangsterski','W roku 1917 m�ody Vito Corleone stawia pierwsze kroki w mafijnym �wiecie Nowego Jorku. Ponad 40 lat p�niej jego syn Michael walczy o interesy i dobro rodziny.','Al Pacino Robert Duvall Diane Keaton','11 zl')";
//$query = "INSERT INTO `filmy` VALUES ('','Pulp Fiction','gangsterski','Przemoc i odkupienie w opowie�ci o dw�ch p�atnych mordercach pracuj�cych na zlecenie mafii, �onie gangstera, bokserze i parze okradaj�cej ludzi w restauracji.','John Travolta Samuel L. Jackson Uma Thurman','7 zl')";
//$query = "INSERT INTO `filmy` VALUES ('','W�adca Pier�cieni: Powr�t kr�la','fantasy przygodowy','Zwie�czenie filmowej trylogii wg powie�ci Tolkiena. Aragorn jednoczy si�y �r�dziemia szykuj�c si� do bitwy, aby odwr�ci� uwag� Saurona od pod��aj�cych w kierunku G�ry Przeznaczenia hobbit�w.','Elijah Wood Sean Astin Dominic Monaghan','7 zl')";
//$query = "INSERT INTO `filmy` VALUES ('','Lista Schindlera','dramat wojenny','Historia przedsi�biorcy Oskara Schindlera, kt�ry podczas II wojny �wiatowej uratowa� przed pobytem w obozach koncentracyjnych 1100 �yd�w.','Liam Neeson Ben Kingsley Ralph Fiennes','8 zl')";
//$query = "INSERT INTO `filmy` VALUES ('','Siedem','krymina�� thriller','Dw�ch policjant�w, ��todzi�b i stary wyga, stara si� z�apa� seryjnego morderc� wybieraj�cego swoje ofiary wg specjalnego klucza.','Morgan Freeman Brad Pitt Gwyneth Paltrow','7 zl')";
//$query = "INSERT INTO `filmy` VALUES ('','W�adca Pier�cieni: Dwie wie�e','fantasy przygodowy','Dru�yna Pier�cienia zostaje rozbita, lecz zdesperowany Frodo za wszelk� cen� chce wype�ni� powierzone mu zadanie. Aragorn z towarzyszami przygotowuje si�, by odeprze� atak hord Sarumana.','Elijah Wood Sean Astin Dominic Monaghan','8 zl')";
//$query = "INSERT INTO `filmy` VALUES ('','�ycie jest pi�kne','dramat komedia wojenny','Zamkni�ty w obozie koncentracyjnym wraz z synem Guido pr�buje przekona� ch�opca, �e okrutna rzeczywisto�� jest jedynie form� zabawy dla doros�ych.','Roberto Benigni Nicoletta Braschi Giorgio Cantarini','7 zl')";
//$query = "INSERT INTO `filmy` VALUES ('','Podziemny kr�g','thriller psychologiczny','Dw�ch m�czyzn znudzonych rutyn� zak�ada klub, w kt�rym co tydzie� odbywaj� si� walki na go�e pi�ci.','Edward Norton Brad Pitt Helena Bonham Carter','8 zl')";

//$query = "ALTER DATABASE `s176350` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci";

//$query= "CREATE TABLE `uzytkownicy` (`id_user` smallint(6) NOT NULL auto_increment, `login` varchar(128) COLLATE utf8_polish_ci NOT NULL, `haslo` varchar(128) COLLATE utf8_polish_ci NOT NULL, `email` varchar(20) COLLATE utf8_polish_ci NOT NULL, `data_rej` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP, `data_log` datetime NOT NULL,  `ip` varchar(12) COLLATE utf8_polish_ci NOT NULL, PRIMARY KEY (id))";

//$query = "SELECT * FROM `filmy`";

//$query = "ALTER TABLE `uzytkownicy` MODIFY `id_user` smallint(6) NOT NULL auto_increment";

//$query = "INSERT INTO `uzytkownicy` (`id_user`, `login`, `haslo`, `email`, `data_rej`, `data_log`, `ip`) VALUES
//('', 'admin', 'aa', 'aa@wp.pl', '2015-02-09 18:55:57', '0000-00-00 00:00:00', '')";

//$query = "ALTER TABLE `uzytkownicy` DROP column `login`";
//$query = "ALTER TABLE `uzytkownicy` DROP column `data_rej`";
//$query = "ALTER TABLE `uzytkownicy` DROP column `data_log`";
//$query = "ALTER TABLE `uzytkownicy` DROP column `ip`";

//$query = "DROP TABLE `uzytkownicy";

//$query= "CREATE TABLE `uzytkownicy1`(`id_uzytkownika` int(6) NOT NULL auto_increment, `email` varchar(40), `haslo` varchar(40), PRIMARY KEY (id_uzytkownika))";

//$query="CREATE TABLE `okladki` ('image_id' INT(11) NOT NULL AUTO_INCREMENT, 'image_url' TEXT)";
//$query="INSERT INTO `okladki` ('', '\okladki\1.jpg')";
//$query="ALTER TABLE `filmy` ADD COLUMN `okladka` varchar(100) AFTER `cena`";
//$query="INSERT INTO `okladki` ('', '\okladki\2.jpg')";
//$query="INSERT INTO `okladki` ('', '\okladki\3.jpg')";
//$query="INSERT INTO `okladki` ('', '\okladki\4.jpg')";
//$query="INSERT INTO `okladki` ('', '\okladki\5.jpg')";
//$query="INSERT INTO `okladki` ('', '\okladki\6.jpg')";
//$query="INSERT INTO `okladki` ('', '\okladki\7.jpg')";
//$query="INSERT INTO `okladki` ('', '\okladki\8.jpg')";
//$query="INSERT INTO `okladki` ('', '\okladki\9.jpg')";
//$query="INSERT INTO `okladki` ('', '\okladki\10.jpg')";
//$query="INSERT INTO `okladki` ('', '\okladki\11.jpg')";
//$query="INSERT INTO `okladki` ('', '\okladki\12.jpg')";
//$query="INSERT INTO `okladki` ('', '\okladki\13.jpg')";
//$query="INSERT INTO `okladki` ('', '\okladki\14.jpg')";
//$query="INSERT INTO `okladki` ('', '\okladki\15.jpg')";

//$query= "CREATE TABLE `filmy1` (`id` int(6) NOT NULL auto_increment, `tytul` varchar(35) NOT NULL, `gatunek` varchar(30) NOT NULL, `opis` varchar(300) NOT NULL, `aktorzy` varchar(100) NOT NULL, `cena` decimal(10,2) NOT NULL, `wypozyczenia` int NULL, `recenzja` int NULL, `opinia` varchar(300), `widziano` tinyint(1) NOT NULL DEFAULT '1', PRIMARY KEY (id))";

//$query="CREATE TABLE `ogl-rec-wyp`(`id` int NOT NULL REFERENCES  `filmy`(id), `wypozyczenia` int(10) NULL, `recenzja` int(10) NULL, `recenzja` int(10) NULL, `widziano` tinyint(1) NOT NULL DEFAULT '1', PRIMARY KEY(id))";

//$query="CREATE TABLE `zamowienia`(`id_osoby` int NOT NULL REFERENCES `uzytkownicy1`(id_uzytkownika), `filmy` varchar(100), `status` varchar(13), `kwota` varchar(10))";


//$query="CREATE TABLE `recenzje`(`nr_rec` int NOT NULL auto_increment, `id_osoby` int NOT NULL REFERENCES `uzytkownicy1`(id_uzytkownika), `nr_filmu` int NOT NULL REFERENCES filmy(id), `recenzja` varchar(450), PRIMARY KEY(nr_rec))";

//$query = "ALTER TABLE `zamowienia` MODIFY `status` char(9) NOT NULL DEFAULT 'w trakcie'";
//$query="ALTER TABLE `filmy` ADD COLUMN `wypozyczenia` int NULL AFTER `cena`";
$query="ALTER TABLE `filmy` ADD COLUMN `recenzja` int NULL AFTER `wypozyczenia`";
mysql_query($query);
if ($query)
	{
		echo ("Ok");
	}
	else
	{
		echo ("Blad");
	}


/*
$query="SELECT * FROM `filmy`";
$result=mysql_query($query);
*/

mysql_close();

?>