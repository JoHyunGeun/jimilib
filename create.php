<?php
//로그인 정보 외부파일 불러오기
require_once 'db_connect.php';

$servername = $hn;
$username = $un;
$password = $pw;
$db = $database;


$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully <br>";




$sql1 = "
CREATE table membership (
  id  varchar(100) not null,
name  varchar(100) null,
  password  varchar(100)  not null,
address  varchar(100) null,
  phonenum  varchar(100) null,
email  varchar(100) null,
admin   varchar(100) null,

  primary key(id)
  )";
//
//
//
if ($conn->query($sql1) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

$sql2 = "
Insert into membership values ('admin', '관리자', '111111', 'PKNU', '777-7777', 'admin@pknu.ac.kr','1')";

  $conn->query($sql2);
  $sql3 = "
  Insert into membership  (id,name,password,address,phonenum,email) values ('yjhwang', '황영주', '100011', '서울시 중구 충무로1가', '234-8879', 'yjhwang@pknu.ac.kr')";

    $conn->query($sql3);
    $sql4 = "
  Insert into membership  (id,name,password,address,phonenum,email) values ('chpark', '박철호', '503200', '광주시 남구 지석동', '298-9730',  'hpark@pknu.ac.kr')";

      $conn->query($sql4);
      $sql5 = "
    Insert into membership  (id,name,password,address,phonenum,email) values ('shlee', '이상훈', '503201', '광주시 남구 도금동', '838-4347', 'hleasdf@pknu.ac.kr')";

        $conn->query($sql5);
        $sql6 = "
        Insert into membership (id,name,password,address,phonenum,email)  values ('cskang', '강찬숙', '668890', '경상남도 남해군 설천면', '377-6879', 'hpark@pknu.ac.kr')";

          $conn->query($sql6);


    $conn->close();

$conn3 = new mysqli($servername, $username, $password, $db);

$sqll1 = "

CREATE TABLE film (

film_id int NOT NULL  ,


 title VARCHAR(255) NOT NULL,

 description TEXT null,
 release_year VARCHAR(255) null,
 language_id VARCHAR(255) null,
original_language_id VARCHAR(255) null,
rental_duration VARCHAR(255) null,
 rental_rate VARCHAR(255) null,
length VARCHAR(255) null,
replacement_cost VARCHAR(255) null,
 rating VARCHAR(255) null,
 special_features VARCHAR(255) null,
 last_update VARCHAR(255)null,
  primary key(film_id)
  )";

if ($conn3->query($sqll1) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn3->error;
}

$sqll2 = "

CREATE table rental (

  film_id  varchar(255) not null,
  name  varchar(255) null,
rental  varchar(255) null,
back  varchar(255) null,

  primary key(film_id)
  )";

  $conn3->query($sqll2);

  $sqll3 = "

    CREATE table reserv (
    id  varchar(255) null ,
  title  varchar(255) not null,

    primary key(title)
    )";

    $conn3->query($sqll3);
    $sqll4 = "

    CREATE table rentalrecord (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
film_id  varchar(255) not null,
name  varchar(255) null,

primary key(id)
)";

      $conn3->query($sqll4);

$sqll5 = "      Insert into $db.film
       (film_id,title,description,release_year,language_id,original_language_id,rental_duration,rental_rate,length,replacement_cost,rating,special_features,last_update)
      Values
      ('1','ACADEMY DINOSAUR','A Epic Drama of a Feminist And a Mad Scientist who must Battle a Teacher in The Canadian Rockies','2006','1',NULL,'6','0.99','86','20.99','PG','Deleted Scenes,Behind the Scenes','2006-02-15T05:03:42.000')
      ";
      $conn3->query($sqll5);
$sqll6 = "    Insert into $db.film
       (film_id,title,description,release_year,language_id,original_language_id,rental_duration,rental_rate,length,replacement_cost,rating,special_features,last_update)
      Values
      ('2','ACE GOLDFINGER','A Astounding Epistle of a Database Administrator And a Explorer who must Find a Car in Ancient China','2006','1',NULL,'3','4.99','48','12.99','G','Trailers,Deleted Scenes','2006-02-15T05:03:42.000')
    ";
    $conn3->query($sqll6);
  $sqll7 = "    Insert into $db.film
       (film_id,title,description,release_year,language_id,original_language_id,rental_duration,rental_rate,length,replacement_cost,rating,special_features,last_update)
      Values
      ('3','ADAPTATION HOLES','A Astounding Reflection of a Lumberjack And a Car who must Sink a Lumberjack in A Baloon Factory','2006','1',NULL,'7','2.99','50','18.99','NC-17','Trailers,Deleted Scenes','2006-02-15T05:03:42.000')
      ";
      $conn3->query($sqll7);
$sqll8 = "      Insert into $db.film
       (film_id,title,description,release_year,language_id,original_language_id,rental_duration,rental_rate,length,replacement_cost,rating,special_features,last_update)
      Values
      ('4','AFFAIR PREJUDICE','A Fanciful Documentary of a Frisbee And a Lumberjack who must Chase a Monkey in A Shark Tank','2006','1',NULL,'5','2.99','117','26.99','G','Commentaries,Behind the Scenes','2006-02-15T05:03:42.000')
      ";
      $conn3->query($sqll8);
$sqll9 = "      Insert into $db.film
       (film_id,title,description,release_year,language_id,original_language_id,rental_duration,rental_rate,length,replacement_cost,rating,special_features,last_update)
      Values
      ('5','AFRICAN EGG','A Fast-Paced Documentary of a Pastry Chef And a Dentist who must Pursue a Forensic Psychologist in The Gulf of Mexico','2006','1',NULL,'6','2.99','130','22.99','G','Deleted Scenes','2006-02-15T05:03:42.000')
      ";
      $conn3->query($sqll9);
$sqll10 = "      Insert into $db.film
       (film_id,title,description,release_year,language_id,original_language_id,rental_duration,rental_rate,length,replacement_cost,rating,special_features,last_update)
      Values
      ('6','AGENT TRUMAN','A Intrepid Panorama of a Robot And a Boy who must Escape a Sumo Wrestler in Ancient China','2006','1',NULL,'3','2.99','169','17.99','PG','Deleted Scenes','2006-02-15T05:03:42.000')
      ";
      $conn3->query($sqll10);
$sqll11 = "      Insert into $db.film
       (film_id,title,description,release_year,language_id,original_language_id,rental_duration,rental_rate,length,replacement_cost,rating,special_features,last_update)
      Values
      ('7','AIRPLANE SIERRA','A Touching Saga of a Hunter And a Butler who must Discover a Butler in A Jet Boat','2006','1',NULL,'6','4.99','62','28.99','PG-13','Trailers,Deleted Scenes','2006-02-15T05:03:42.000')
      ";
      $conn3->query($sqll11);
  $sqll12 = "    Insert into $db.film
       (film_id,title,description,release_year,language_id,original_language_id,rental_duration,rental_rate,length,replacement_cost,rating,special_features,last_update)
      Values
      ('8','AIRPORT POLLOCK','A Epic Tale of a Moose And a Girl who must Confront a Monkey in Ancient India','2006','1',NULL,'6','4.99','54','15.99','R','Trailers','2006-02-15T05:03:42.000')
    ";
    $conn3->query($sqll12);
$sqll13 = "      Insert into $db.film
       (film_id,title,description,release_year,language_id,original_language_id,rental_duration,rental_rate,length,replacement_cost,rating,special_features,last_update)
      Values
      ('9','ALABAMA DEVIL','A Thoughtful Panorama of a Database Administrator And a Mad Scientist who must Outgun a Mad Scientist in A Jet Boat','2006','1',NULL,'3','2.99','114','21.99','PG-13','Trailers,Deleted Scenes','2006-02-15T05:03:42.000')
      ";
      $conn3->query($sqll13);
$sqll14 = "      Insert into $db.film
       (film_id,title,description,release_year,language_id,original_language_id,rental_duration,rental_rate,length,replacement_cost,rating,special_features,last_update)
      Values
      ('10','ALADDIN CALENDAR','A Action-Packed Tale of a Man And a Lumberjack who must Reach a Feminist in Ancient China','2006','1',NULL,'6','4.99','63','24.99','NC-17','Trailers,Deleted Scenes','2006-02-15T05:03:42.000')
      ";
      $conn3->query($sqll14);
$sqll15= "      Insert into $db.film
       (film_id,title,description,release_year,language_id,original_language_id,rental_duration,rental_rate,length,replacement_cost,rating,special_features,last_update)
      Values
      ('11','ALAMO VIDEOTAPE','A Boring Epistle of a Butler And a Cat who must Fight a Pastry Chef in A MySQL Convention','2006','1',NULL,'6','0.99','126','16.99','G','Commentaries,Behind the Scenes','2006-02-15T05:03:42.000')
      ";
      $conn3->query($sqll15);
$sqll16 = "      Insert into $db.film
       (film_id,title,description,release_year,language_id,original_language_id,rental_duration,rental_rate,length,replacement_cost,rating,special_features,last_update)
      Values
      ('12','ALASKA PHANTOM','A Fanciful Saga of a Hunter And a Pastry Chef who must Vanquish a Boy in Australia','2006','1',NULL,'6','0.99','136','22.99','PG','Commentaries,Deleted Scenes','2006-02-15T05:03:42.000')
    ";
    $conn3->query($sqll16);
  $sqll17 = "    Insert into $db.film
       (film_id,title,description,release_year,language_id,original_language_id,rental_duration,rental_rate,length,replacement_cost,rating,special_features,last_update)
      Values
      ('13','ALI FOREVER','A Action-Packed Drama of a Dentist And a Crocodile who must Battle a Feminist in The Canadian Rockies','2006','1',NULL,'4','4.99','150','21.99','PG','Deleted Scenes,Behind the Scenes','2006-02-15T05:03:42.000')
      ";
      $conn3->query($sqll17);
  $sqll18 = "    Insert into $db.film
       (film_id,title,description,release_year,language_id,original_language_id,rental_duration,rental_rate,length,replacement_cost,rating,special_features,last_update)
      Values
      ('14','ALICE FANTASIA','A Emotional Drama of a A Shark And a Database Administrator who must Vanquish a Pioneer in Soviet Georgia','2006','1',NULL,'6','0.99','94','23.99','NC-17','Trailers,Deleted Scenes,Behind the Scenes','2006-02-15T05:03:42.000')
      ";
      $conn3->query($sqll18);
  $sqll19 = "    Insert into $db.film
       (film_id,title,description,release_year,language_id,original_language_id,rental_duration,rental_rate,length,replacement_cost,rating,special_features,last_update)
      Values
      ('15','ALIEN CENTER','A Brilliant Drama of a Cat And a Mad Scientist who must Battle a Feminist in A MySQL Convention','2006','1',NULL,'5','2.99','46','10.99','NC-17','Trailers,Commentaries,Behind the Scenes','2006-02-15T05:03:42.000')
    ";
    $conn3->query($sqll19);
$sqll20 = "      Insert into $db.film
       (film_id,title,description,release_year,language_id,original_language_id,rental_duration,rental_rate,length,replacement_cost,rating,special_features,last_update)
      Values
      ('16','ALLEY EVOLUTION','A Fast-Paced Drama of a Robot And a Composer who must Battle a Astronaut in New Orleans','2006','1',NULL,'6','2.99','180','23.99','NC-17','Trailers,Commentaries','2006-02-15T05:03:42.000')
      ";
      $conn3->query($sqll20);
$sqll21 = "      Insert into $db.film
       (film_id,title,description,release_year,language_id,original_language_id,rental_duration,rental_rate,length,replacement_cost,rating,special_features,last_update)
      Values
      ('17','ALONE TRIP','A Fast-Paced Character Study of a Composer And a Dog who must Outgun a Boat in An Abandoned Fun House','2006','1',NULL,'3','0.99','82','14.99','R','Trailers,Behind the Scenes','2006-02-15T05:03:42.000')
    ";
    $conn3->query($sqll21);
$sqll22 = "      Insert into $db.film
       (film_id,title,description,release_year,language_id,original_language_id,rental_duration,rental_rate,length,replacement_cost,rating,special_features,last_update)
      Values
      ('18','ALTER VICTORY','A Thoughtful Drama of a Composer And a Feminist who must Meet a Secret Agent in The Canadian Rockies','2006','1',NULL,'6','0.99','57','27.99','PG-13','Trailers,Behind the Scenes','2006-02-15T05:03:42.000')
    ";
    $conn3->query($sqll22);
$sqll23 = "      Insert into $db.film
       (film_id,title,description,release_year,language_id,original_language_id,rental_duration,rental_rate,length,replacement_cost,rating,special_features,last_update)
      Values
      ('19','AMADEUS HOLY','A Emotional Display of a Pioneer And a Technical Writer who must Battle a Man in A Baloon','2006','1',NULL,'6','0.99','113','20.99','PG','Commentaries,Deleted Scenes,Behind the Scenes','2006-02-15T05:03:42.000')
      ";
      $conn3->query($sqll23);
  $sqll24 = "    Insert into $db.film
       (film_id,title,description,release_year,language_id,original_language_id,rental_duration,rental_rate,length,replacement_cost,rating,special_features,last_update)
      Values
      ('20','AMELIE HELLFIGHTERS','A Boring Drama of a Woman And a Squirrel who must Conquer a Student in A Baloon','2006','1',NULL,'4','4.99','79','23.99','R','Commentaries,Deleted Scenes,Behind the Scenes','2006-02-15T05:03:42.000')
    ";
    $conn3->query($sqll24);
$sqll25 = "      Insert into $db.film
       (film_id,title,description,release_year,language_id,original_language_id,rental_duration,rental_rate,length,replacement_cost,rating,special_features,last_update)
      Values
      ('21','AMERICAN CIRCUS','A Insightful Drama of a Girl And a Astronaut who must Face a Database Administrator in A Shark Tank','2006','1',NULL,'3','4.99','129','17.99','R','Commentaries,Behind the Scenes','2006-02-15T05:03:42.000')
      ";
      $conn3->query($sqll25);
  $sqll26 = "    Insert into $db.film
       (film_id,title,description,release_year,language_id,original_language_id,rental_duration,rental_rate,length,replacement_cost,rating,special_features,last_update)
      Values
      ('22','AMISTAD MIDSUMMER','A Emotional Character Study of a Dentist And a Crocodile who must Meet a Sumo Wrestler in California','2006','1',NULL,'6','2.99','85','10.99','G','Commentaries,Behind the Scenes','2006-02-15T05:03:42.000')
      ";
      $conn3->query($sqll26);
$sqll27 = "      Insert into $db.film
       (film_id,title,description,release_year,language_id,original_language_id,rental_duration,rental_rate,length,replacement_cost,rating,special_features,last_update)
      Values
      ('23','ANACONDA CONFESSIONS','A Lacklusture Display of a Dentist And a Dentist who must Fight a Girl in Australia','2006','1',NULL,'3','0.99','92','9.99','R','Trailers,Deleted Scenes','2006-02-15T05:03:42.000')
    ";
    $conn3->query($sqll27);
$sqll28 = "      Insert into $db.film
       (film_id,title,description,release_year,language_id,original_language_id,rental_duration,rental_rate,length,replacement_cost,rating,special_features,last_update)
      Values
      ('24','ANALYZE HOOSIERS','A Thoughtful Display of a Explorer And a Pastry Chef who must Overcome a Feminist in The Sahara Desert','2006','1',NULL,'6','2.99','181','19.99','R','Trailers,Behind the Scenes','2006-02-15T05:03:42.000')
    ";
    $conn3->query($sqll28);
$sqll29 = "      Insert into $db.film
       (film_id,title,description,release_year,language_id,original_language_id,rental_duration,rental_rate,length,replacement_cost,rating,special_features,last_update)
      Values
      ('25','ANGELS LIFE','A Thoughtful Display of a Woman And a Astronaut who must Battle a Robot in Berlin','2006','1',NULL,'3','2.99','74','15.99','G','Trailers','2006-02-15T05:03:42.000')
      ";
      $conn3->query($sqll29);
$sqll30 = "      Insert into $db.film
       (film_id,title,description,release_year,language_id,original_language_id,rental_duration,rental_rate,length,replacement_cost,rating,special_features,last_update)
      Values
      ('26','ANNIE IDENTITY','A Amazing Panorama of a Pastry Chef And a Boat who must Escape a Woman in An Abandoned Amusement Park','2006','1',NULL,'3','0.99','86','15.99','G','Commentaries,Deleted Scenes','2006-02-15T05:03:42.000')
      ";
      $conn3->query($sqll30);
  $sqll31 = "    Insert into $db.film
       (film_id,title,description,release_year,language_id,original_language_id,rental_duration,rental_rate,length,replacement_cost,rating,special_features,last_update)
      Values
      ('27','ANONYMOUS HUMAN','A Amazing Reflection of a Database Administrator And a Astronaut who must Outrace a Database Administrator in A Shark Tank','2006','1',NULL,'7','0.99','179','12.99','NC-17','Deleted Scenes,Behind the Scenes','2006-02-15T05:03:42.000')
      ";
      $conn3->query($sqll31);
  $sqll32 = "    Insert into $db.film
       (film_id,title,description,release_year,language_id,original_language_id,rental_duration,rental_rate,length,replacement_cost,rating,special_features,last_update)
      Values
      ('28','ANTHEM LUKE','A Touching Panorama of a Waitress And a Woman who must Outrace a Dog in An Abandoned Amusement Park','2006','1',NULL,'5','4.99','91','16.99','PG-13','Deleted Scenes,Behind the Scenes','2006-02-15T05:03:42.000')
      ";
      $conn3->query($sqll32);
$sqll33 = "      Insert into $db.film
       (film_id,title,description,release_year,language_id,original_language_id,rental_duration,rental_rate,length,replacement_cost,rating,special_features,last_update)
      Values
      ('29','ANTITRUST TOMATOES','A Fateful Yarn of a Womanizer And a Feminist who must Succumb a Database Administrator in Ancient India','2006','1',NULL,'5','2.99','168','11.99','NC-17','Trailers,Commentaries,Deleted Scenes','2006-02-15T05:03:42.000')
      ";
      $conn3->query($sqll33);
$sqll34 = "      Insert into $db.film
       (film_id,title,description,release_year,language_id,original_language_id,rental_duration,rental_rate,length,replacement_cost,rating,special_features,last_update)
      Values
      ('30','ANYTHING SAVANNAH','A Epic Story of a Pastry Chef And a Woman who must Chase a Feminist in An Abandoned Fun House','2006','1',NULL,'4','2.99','82','27.99','R','Trailers,Deleted Scenes,Behind the Scenes','2006-02-15T05:03:42.000')
      ";
      $conn3->query($sqll34);
$sqll35 = "      Insert into $db.film
       (film_id,title,description,release_year,language_id,original_language_id,rental_duration,rental_rate,length,replacement_cost,rating,special_features,last_update)
      Values
      ('31','APACHE DIVINE','A Awe-Inspiring Reflection of a Pastry Chef And a Teacher who must Overcome a Sumo Wrestler in A U-Boat','2006','1',NULL,'5','4.99','92','16.99','NC-17','Commentaries,Deleted Scenes,Behind the Scenes','2006-02-15T05:03:42.000')
      ";
      $conn3->query($sqll35);
$sqll36 = "      Insert into $db.film
       (film_id,title,description,release_year,language_id,original_language_id,rental_duration,rental_rate,length,replacement_cost,rating,special_features,last_update)
      Values
      ('32','APOCALYPSE FLAMINGOS','A Astounding Story of a Dog And a Squirrel who must Defeat a Woman in An Abandoned Amusement Park','2006','1',NULL,'6','4.99','119','11.99','R','Trailers,Commentaries','2006-02-15T05:03:42.000')
      ";
      $conn3->query($sqll36);
  $sqll37 = "    Insert into $db.film
       (film_id,title,description,release_year,language_id,original_language_id,rental_duration,rental_rate,length,replacement_cost,rating,special_features,last_update)
      Values
      ('33','APOLLO TEEN','A Action-Packed Reflection of a Crocodile And a Explorer who must Find a Sumo Wrestler in An Abandoned Mine Shaft','2006','1',NULL,'5','2.99','153','15.99','PG-13','Trailers,Commentaries,Deleted Scenes,Behind the Scenes','2006-02-15T05:03:42.000')
      ";
      $conn3->query($sqll37);
  $sqll38 = "    Insert into $db.film
       (film_id,title,description,release_year,language_id,original_language_id,rental_duration,rental_rate,length,replacement_cost,rating,special_features,last_update)
      Values
      ('34','ARABIA DOGMA','A Touching Epistle of a Madman And a Mad Cow who must Defeat a Student in Nigeria','2006','1',NULL,'6','0.99','62','29.99','NC-17','Commentaries,Deleted Scenes','2006-02-15T05:03:42.000')
      ";
      $conn3->query($sqll38);
  $sqll39 = "    Insert into $db.film
       (film_id,title,description,release_year,language_id,original_language_id,rental_duration,rental_rate,length,replacement_cost,rating,special_features,last_update)
      Values
      ('35','ARACHNOPHOBIA ROLLERCOASTER','A Action-Packed Reflection of a Pastry Chef And a Composer who must Discover a Mad Scientist in The First Manned Space Station','2006','1',NULL,'4','2.99','147','24.99','PG-13','Trailers,Deleted Scenes,Behind the Scenes','2006-02-15T05:03:42.000')
      ";
      $conn3->query($sqll39);
$sqll40 = "      Insert into $db.film
       (film_id,title,description,release_year,language_id,original_language_id,rental_duration,rental_rate,length,replacement_cost,rating,special_features,last_update)
      Values
      ('36','ARGONAUTS TOWN','A Emotional Epistle of a Forensic Psychologist And a Butler who must Challenge a Waitress in An Abandoned Mine Shaft','2006','1',NULL,'7','0.99','127','12.99','PG-13','Trailers,Commentaries','2006-02-15T05:03:42.000')
      ";
      $conn3->query($sqll40);
$sqll41 = "      Insert into $db.film
       (film_id,title,description,release_year,language_id,original_language_id,rental_duration,rental_rate,length,replacement_cost,rating,special_features,last_update)
      Values
      ('37','ARIZONA BANG','A Brilliant Panorama of a Mad Scientist And a Mad Cow who must Meet a Pioneer in A Monastery','2006','1',NULL,'3','2.99','121','28.99','PG','Trailers,Deleted Scenes','2006-02-15T05:03:42.000')
      ";
      $conn3->query($sqll41);
  $sqll42 = "    Insert into $db.film
       (film_id,title,description,release_year,language_id,original_language_id,rental_duration,rental_rate,length,replacement_cost,rating,special_features,last_update)
      Values
      ('38','ARK RIDGEMONT','A Beautiful Yarn of a Pioneer And a Monkey who must Pursue a Explorer in The Sahara Desert','2006','1',NULL,'6','0.99','68','25.99','NC-17','Trailers,Commentaries,Deleted Scenes,Behind the Scenes','2006-02-15T05:03:42.000')
    ";
    $conn3->query($sqll42);
$sqll43 = "      Insert into $db.film
       (film_id,title,description,release_year,language_id,original_language_id,rental_duration,rental_rate,length,replacement_cost,rating,special_features,last_update)
      Values
      ('39','ARMAGEDDON LOST','A Fast-Paced Tale of a Boat And a Teacher who must Succumb a Composer in An Abandoned Mine Shaft','2006','1',NULL,'5','0.99','99','10.99','G','Trailers','2006-02-15T05:03:42.000')
      ";
      $conn3->query($sqll43);
  $sqll44 = "    Insert into $db.film
       (film_id,title,description,release_year,language_id,original_language_id,rental_duration,rental_rate,length,replacement_cost,rating,special_features,last_update)
      Values
      ('40','ARMY FLINTSTONES','A Boring Saga of a Database Administrator And a Womanizer who must Battle a Waitress in Nigeria','2006','1',NULL,'4','0.99','148','22.99','R','Trailers,Commentaries','2006-02-15T05:03:42.000')
    ";
    $conn3->query($sqll44);
$sqll45 = "      Insert into $db.film
       (film_id,title,description,release_year,language_id,original_language_id,rental_duration,rental_rate,length,replacement_cost,rating,special_features,last_update)
      Values
      ('41','ARSENIC INDEPENDENCE','A Fanciful Documentary of a Mad Cow And a Womanizer who must Find a Dentist in Berlin','2006','1',NULL,'4','0.99','137','17.99','PG','Trailers,Deleted Scenes,Behind the Scenes','2006-02-15T05:03:42.000')
      ";
      $conn3->query($sqll45);
$sqll46 = "      Insert into $db.film
       (film_id,title,description,release_year,language_id,original_language_id,rental_duration,rental_rate,length,replacement_cost,rating,special_features,last_update)
      Values
      ('42','ARTIST COLDBLOODED','A Stunning Reflection of a Robot And a Moose who must Challenge a Woman in California','2006','1',NULL,'5','2.99','170','10.99','NC-17','Trailers,Behind the Scenes','2006-02-15T05:03:42.000')
      ";
      $conn3->query($sqll46);
  $sqll47 = "    Insert into $db.film
       (film_id,title,description,release_year,language_id,original_language_id,rental_duration,rental_rate,length,replacement_cost,rating,special_features,last_update)
      Values
      ('43','ATLANTIS CAUSE','A Thrilling Yarn of a Feminist And a Hunter who must Fight a Technical Writer in A Shark Tank','2006','1',NULL,'6','2.99','170','15.99','G','Behind the Scenes','2006-02-15T05:03:42.000')
    ";
  $conn3->query($sqll47);

$conn3->close();
?>
