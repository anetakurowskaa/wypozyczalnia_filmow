<?


$user = 's176350';
$password = 'YLa2PFzu';
$database = 's176350';

mysql_connect('10.254.94.2', $user, $password);
@mysql_select_db($database) or die("Nie udaÅ‚o siÄ™ wybraÄ‡ bazy danych");

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

//$query = "INSERT INTO `filmy` VALUES ('','Skazani na Shawshank','dramat','Adaptacja opowiadania Stephena Kinga. Historia nies³usznie skazanego na do¿ywocie bankiera, który musi prze¿yæ w brutalnym œwiecie rz¹dzonym przez stra¿ników i wspó³wiêŸniów.','Tim Robbins Morgan Freeman Bob Gunton','7 zl')";
//$query = "INSERT INTO `filmy` VALUES ('','Nietykalni','biograficzny dramat komedia','Sparali¿owany milioner zatrudnia do opieki m³odego ch³opaka z przedmieœcia, który w³aœnie wyszed³‚ z wiêzienia.','Francois Cluzet Omar Sy Anne Le Ny','8 zl')";
//$query = "INSERT INTO `filmy` VALUES ('','Ojciec chrzestny','dramat gangsterski','Opowieœæ o nowojorskiej rodzinie mafijnej. Starzej¹cy siê Don Corleone pragnie przekazaæ w³adzê swojemu synowi.','Marlon Brando Al Pacino James Caan','11 zl')";
//$query = "INSERT INTO `filmy` VALUES ('','Zielona mila','dramat','Emerytowany stra¿nik wiêzienny opowiada przyjació³ce o niezwyk³ym mê¿czyŸnie, którego skazano na œmieræ za zabójstwo dwóch 9-letnich dziewczynek.','Tom Hanks David Morse Bonnie Hunt','7 zl')";
//$query = "INSERT INTO `filmy` VALUES ('','Forrest Gump','dramat komedia','Historia ¿ycia Forresta, ch³opca o niskim ilorazie inteligencji z niedow³adem koñczyn, który staje siê miliarderem i bohaterem wojny w Wietnamie.','Tom Hanks Robin Wright Gary Sinise','8 zl')";
//$query = "INSERT INTO `filmy` VALUES ('','Lot nad kuku³czym gniazdem','dramat psychologiczny','Historia z³odzieja, szulera i chuligana, który, by unikn¹æ wiêzienia, udaje niepoczytalnoœæ. Trafia do szpitala dla umys³owo chorych, gdzie tward¹ rêk¹ rz¹dzi siostra Ratched.','Jack Nicholson Louise Fletcher William Redfield','7 zl')";
//$query = "INSERT INTO `filmy` VALUES ('','Dwunastu gniewnych ludzi','dramat s¹dowy','Dwunastu przysiêg³ych ma wydaæ wyrok w procesie o morderstwo. Jeden z nich ma w¹tpliwoœci dotycz¹ce winy oskar¿onego.','Martin Balsam John Fiedler Lee J. Cobb','8 zl')";
//$query = "INSERT INTO `filmy` VALUES ('','Ojciec chrzestny II','dramat gangsterski','W roku 1917 m³ody Vito Corleone stawia pierwsze kroki w mafijnym œwiecie Nowego Jorku. Ponad 40 lat póŸniej jego syn Michael walczy o interesy i dobro rodziny.','Al Pacino Robert Duvall Diane Keaton','11 zl')";
//$query = "INSERT INTO `filmy` VALUES ('','Pulp Fiction','gangsterski','Przemoc i odkupienie w opowieœci o dwóch p³atnych mordercach pracuj¹cych na zlecenie mafii, ¿onie gangstera, bokserze i parze okradaj¹cej ludzi w restauracji.','John Travolta Samuel L. Jackson Uma Thurman','7 zl')";
//$query = "INSERT INTO `filmy` VALUES ('','W³adca Pierœcieni: Powrót króla','fantasy przygodowy','Zwieñczenie filmowej trylogii wg powieœci Tolkiena. Aragorn jednoczy si³y œródziemia szykuj¹c siê do bitwy, aby odwróciæ uwagê Saurona od pod¹¿aj¹cych w kierunku Góry Przeznaczenia hobbitów.','Elijah Wood Sean Astin Dominic Monaghan','7 zl')";
//$query = "INSERT INTO `filmy` VALUES ('','Lista Schindlera','dramat wojenny','Historia przedsiêbiorcy Oskara Schindlera, który podczas II wojny œwiatowej uratowa³ przed pobytem w obozach koncentracyjnych 1100 ¯ydów.','Liam Neeson Ben Kingsley Ralph Fiennes','8 zl')";
//$query = "INSERT INTO `filmy` VALUES ('','Siedem','krymina³‚ thriller','Dwóch policjantów, ¯ó³todziób i stary wyga, stara siê z³apaæ seryjnego mordercê wybieraj¹cego swoje ofiary wg specjalnego klucza.','Morgan Freeman Brad Pitt Gwyneth Paltrow','7 zl')";
//$query = "INSERT INTO `filmy` VALUES ('','W³adca Pierœcieni: Dwie wie¿e','fantasy przygodowy','Dru¿yna Pierœcienia zostaje rozbita, lecz zdesperowany Frodo za wszelk¹ cenê chce wype³niæ powierzone mu zadanie. Aragorn z towarzyszami przygotowuje siê, by odeprzeæ atak hord Sarumana.','Elijah Wood Sean Astin Dominic Monaghan','8 zl')";
//$query = "INSERT INTO `filmy` VALUES ('','¯ycie jest piêkne','dramat komedia wojenny','Zamkniêty w obozie koncentracyjnym wraz z synem Guido próbuje przekonaæ ch³opca, ¿e okrutna rzeczywistoœæ jest jedynie form¹ zabawy dla doros³ych.','Roberto Benigni Nicoletta Braschi Giorgio Cantarini','7 zl')";
//$query = "INSERT INTO `filmy` VALUES ('','Podziemny kr¹g','thriller psychologiczny','Dwóch mê¿czyzn znudzonych rutyn¹ zak³ada klub, w którym co tydzieñ odbywaj¹ siê walki na go³e piêœci.','Edward Norton Brad Pitt Helena Bonham Carter','8 zl')";

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