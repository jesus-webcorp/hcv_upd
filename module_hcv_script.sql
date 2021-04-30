/*ESTRUCTURE TABLE CIE10*/

DROP TABLE IF EXISTS `HCV_CIE10`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `HCV_CIE10`(
    `ID` INT (11),
    `LETRA` VARCHAR(255),
    `CATALOG_KEY` VARCHAR(255),
    `NOMBRE` VARCHAR(255),
    `CODIGOX` TINYINT(1),
    `LSEX` TINYINT(1),
    `LINF` TINYINT(1),
    `LSUP` TINYINT(1),
    `TRIVIAL` VARCHAR(255),
    `ERRADICADO` VARCHAR(255),
    `N_INTER` TINYINT(1),
    `NIN` TINYINT(1),
    `NINMTOBS` TINYINT(1),
    `COD_SIT_LESION` TINYINT(1),
    `NO_CBD` TINYINT(1),
    `CBD` TINYINT(1),
    `NO_APH` TINYINT(1),
    `AF_PRIN` TINYINT(1),
    `DIA_SIS` TINYINT(1),
    `CLAVE_PROGRAMA_SIS` TINYINT(1),
    `COD_COMPLEMEN_MORBI` TINYINT(1),
    `DIA_FETAL` TINYINT(1),
    `DEF_FETAL_CM` TINYINT(1),
    `DEF_FETAL_CBD` TINYINT(1),
    `CLAVE_CAPITULO` TINYINT(1),
    `CAPITULO` VARCHAR(255),
    `LISTA1` INT(11),
    `GRUPO1` INT(11),
    `LISTA5` INT(11),
    `RUBRICA_TYPE` TINYINT(1),
    `YEAR_MODIFI` TINYINT(1),
    `YEAR_APLICACION` TINYINT(1),
    `VALID` TINYINT(1),
    `PRINMORTA` INT(11),
    `PRINMORBI` INT(11),
    `LM_MORBI` TINYINT(1),
    `LM_MORTA` TINYINT(1),
    `LGBD165` TINYINT(1),
    `LOMSBECK` INT(11),
    `LGBD190` TINYINT(1),
    `NOTDIARIA` TINYINT(1),
    `NOTSEMANAL` TINYINT(1),
    `SISTEMA_ESPECIAL` TINYINT(1),
    `BIRMM` TINYINT(1),
    `CVE_CAUSA_TYPE` INT(11),
    `EPI_MORTA` TINYINT(1),
    `EDAS_E_IRAS_EN_M5` TINYINT(1),
    `CVE_MATERNAS-SEED-EPID` TINYINT(1),
    `EPI_MORTA_M5` TINYINT(1),
    `EPI_MORBI` TINYINT(1),
    `DEF_MATERNAS` INT(11),
    `ES_CAUSES` TINYINT(1),
    `NUM_CAUSES` TINYINT(1),
    `ES_SUIVE_MORTA` TINYINT(1),
    `ES_SUIVE_MORB` TINYINT(1),
    `EPI_CLAVE` TINYINT(1),
    `EPI_CLAVE_DESC` TINYINT(1),
    `ES_SUIVE_NOTIN` TINYINT(1),
    `ES_SUIVE_EST_EPI` TINYINT(1),
    `ES_SUIVE_EST_BROTE` TINYINT(1),
    `SINAC` TINYINT(1),
    `PRIN_SINAC` TINYINT(1),
    `PRIN_SINAC_GRUPO` TINYINT(1),
    `DESCRIPCION_SINAC_GRUPO` TINYINT(1),
    `PRIN_SINAC_SUBGRUPO` TINYINT(1),
    `DESCRIPCION_SINAC_SUBGRUPO` TINYINT(1),
    `DAGA` TINYINT(1),
    `ASTERISCO` TINYINT(1),
    `PRIN_MM` INT(11),
    `PRIN_MM_GRUPO` TINYINT(1),
    `DESCRIPCION_MM_GRUPO` TINYINT(1),
    `PRIN_MM_SUBGRUPO` TINYINT(1),
    `DESCRIPCION_MM_SUBGRUPO` TINYINT(1),
    PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;




DROP TABLE IF EXISTS `HCV_CIE10_DESCRIPCION`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `HCV_CIE10_DESCRIPCION`(
     `ID` INT (11),
    `CAMPO` varchar(15),
    `DESCRIPCIÓN`  varchar(15),
    PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;




/*ESTRUCTURE TABLE IDENTITY*/

DROP TABLE IF EXISTS `HCV_IDENTITY`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `HCV_IDENTITY` (
    `ID` int(11) NOT NULL AUTO_INCREMENT,
    `ID_USER` int (11),
    `CURP` varchar(15),
    `NAME` varchar(255),
    `F_LAST_NAME` varchar(255),
    `S_LAST_NAME` varchar(255),
    `PHONE_NUMBER` int(11),
    `BIRTHDATE` date,
    `ID_CAT_NATIONALITY` INT(11),
    `BIRTHPLACE` varchar(255),
    `ID_CAT_GENDER_IDENTITY` INT (11),
    `ID_CAT_STATE_OF_RESIDENCE` INT (11),
    `ID_CAT_MUNICIPALITY` INT(11),
    `ID_CAT_TOWN` INT(11),
    `ID_CAT_ACADEMIC` INT(11),
    `JOB` varchar(255),
    `ID_CAT_MARITAL_STATUS` INT(11),
    `ID_CAT_RELIGION` INT(11),
    `ANSWER_INDIGENOUS_COMUNITY` tinyint(1),
    `ANSWER_INDIGENOUS_LENGUAGE` tinyint(1),
    `ID_CAT_INDIGENOUS_LENGUAGE` INT(11),
    `ID_CAT_TUTOR` INT(11),
    `ANSWER_OTHER_TUTOR` varchar(255),
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

/*CATALOG NATIONALITIES CAT_GENDER_IDENTITY*/

DROP TABLE IF EXISTS `HCV_CAT_GENDER_IDENTITY`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `HCV_CAT_GENDER_IDENTITY` (
    `ID` int(11) NOT NULL AUTO_INCREMENT,
    `NAME`VARCHAR(255),
    `DESCRIPTION` VARCHAR(20),
    `PREFIX_PHONE` VARCHAR(255),
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




/*CATALOG NATIONALITIES CAT_NATIONALITIES*/

DROP TABLE IF EXISTS `HCV_CAT_NATIONALITIES`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `HCV_CAT_NATIONALITIES` (
    `ID` int(11) NOT NULL AUTO_INCREMENT,
    `KEY` VARCHAR(50),
    `NAME`VARCHAR(255),
    `COUNTRY_KEY` VARCHAR(20),
    `PREFIX_PHONE` VARCHAR(255),
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

/*CATALOG NATIONALITIES CAT_STATE_OF_RESIDENCE*/

DROP TABLE IF EXISTS `HCV_CAT_NATIONALITIES`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `HCV_CSTATE_OF_RESIDENCE` (
    `ID` int(11) NOT NULL AUTO_INCREMENT,
    `KEY` VARCHAR(50),
    `NAME`VARCHAR(255),
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;




/*LOCATION CATALOG CAT_LOCATION*/

DROP TABLE IF EXISTS `HCV_CAT_LOCATION`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `HCV_CAT_LOCATION` (
    `ID` int(11) NOT NULL AUTO_INCREMENT,
    `EFE_KEY` INT(11),
    `MUN_KEY` INT(11),
    `KEY` VARCHAR(255),
    `NAME` VARCHAR(255),
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;



/*LOCATION CATALOG CAT_LOCATION*/

DROP TABLE IF EXISTS `HCV_CAT_ACADEMIC`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `HCV_CAT_ACADEMIC` (
    `ID` int(11) NOT NULL AUTO_INCREMENT,
    `KEY` INT(11),
    `ACADEMIC_FROMATION` VARCHAR(255),
    `GROUP` VARCHAR(255),
    `DEGREE` VARCHAR(255),
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;


/*LOCATION CATALOG CAT_TUTOR*/

DROP TABLE IF EXISTS `HCV_CAT_TUTOR`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `HCV_CAT_TUTOR` (
    `ID` int(11) NOT NULL AUTO_INCREMENT,
    `NAME` VARCHAR(255),
    `DESCRIPTION` VARCHAR(255),
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;


/*LOCATION CATALOG CAT_MARITAL_STATUS*/

DROP TABLE IF EXISTS `HCV_CAT_MARITAL_STATUS`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `HCV_CAT_MARITAL_STATUS` (
    `ID` int(11) NOT NULL AUTO_INCREMENT,
    `NAME` VARCHAR(255),
    `DESCRIPTION` VARCHAR(255),
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;


/*###########################################################-----RELIGION---

/*RELIGION CATALOG CAT_SUBGROUP_RELIGION		*/

DROP TABLE IF EXISTS `HCV_CAT_SUBGROUP_RELIGION`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `HCV_CAT_SUBGROUP_RELIGION` (
    `ID` int(11) NOT NULL AUTO_INCREMENT,
    `ID_GROUP` INT(11),
    `NAME` VARCHAR(255),
    `DESCRIPTION` VARCHAR(255),
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

/*RELIGION CATALOG CAT_GROUP_RELIGION		*/

DROP TABLE IF EXISTS `HCV_CAT_GROUP_RELIGION`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `HCV_CAT_GROUP_RELIGION` (
    `ID` int(11) NOT NULL AUTO_INCREMENT,
    `NAME` VARCHAR(255),
    `DESCRIPTION` VARCHAR(255),
    PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

/*RELIGION CATALOG CAT_GROUP_RELIGION		*/

DROP TABLE IF EXISTS `HCV_CAT_RELIGION`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `HCV_CAT_RELIGION` (
    `ID` int(11) NOT NULL AUTO_INCREMENT,
    `KEY` INT(11),
    `ID_CAT_SUBGROUP_RELIGION` INT(11),
    `NAME` VARCHAR(255),
    `DESCRIPTION` VARCHAR(255),
    PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;



/*###########################################################-----RELIGION---


/*RELIGION CATALOG CAT_INDIGENOUS_LENGUGE		*/

DROP TABLE IF EXISTS `HCV_CAT_INDIGENOUS_LENGUGE`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `HCV_CAT_INDIGENOUS_LENGUGE` (
    `ID` int(11) NOT NULL AUTO_INCREMENT,
    `KEY` VARCHAR(255),
    `SCIENTIFIC_NAME` VARCHAR(255),
    `COMMON_NAMES` VARCHAR(255),
    `DESCRIPTION` VARCHAR(255),
    `SHORT_DESCRIPTION` VARCHAR(255),
    PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;



/*ANIMALS CATALOG CAT_ANIMALS					*/

DROP TABLE IF EXISTS `HCV_CAT_ANIMALS`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `HCV_CAT_ANIMALS` (
    `ID` int(11) NOT NULL AUTO_INCREMENT,
    `NAME` VARCHAR(255),
    `DESCRIPTION` VARCHAR(255),
    PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;


/*URBANIZATION CATALOG CAT_URBANIZATION					*/

DROP TABLE IF EXISTS `HCV_CAT_URBANIZATION`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `HCV_CAT_URBANIZATION` (
    `ID` int(11) NOT NULL AUTO_INCREMENT,
    `NAME` VARCHAR(255),
    `DESCRIPTION` VARCHAR(255),
    PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;


/*ALLERGIES CATALOG CAT_ALLERGIES				*/

DROP TABLE IF EXISTS `HCV_CAT_ALLERGIES`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `HCV_CAT_ALLERGIES` (
    `ID` int(11) NOT NULL AUTO_INCREMENT,
    `KEY` VARCHAR(50),
    `SCIENTIFIC_NAME` VARCHAR(255),
    `COMMON_NAMES` VARCHAR(255),
    `DESCRIPTION` VARCHAR(255),
    `SHORT_DESCRIPTION` VARCHAR(255),
    PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;



/*CAT_SURGICAL CATALOG CAT_SURGICAL				*/

DROP TABLE IF EXISTS `HCV_CAT_SURGICAL`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `HCV_CAT_SURGICAL` (
    `ID` int(11) NOT NULL AUTO_INCREMENT,
    `KEY` VARCHAR(50),
    `SCIENTIFIC_NAME` VARCHAR(255),
    `COMMON_NAMES` VARCHAR(255),
    `DESCRIPTION` VARCHAR(255),
    `SHORT_DESCRIPTION` VARCHAR(255),
    PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;


/*CAT_DIAGNOSTIC		 CATALOG CAT_DIAGNOSTIC						*/

DROP TABLE IF EXISTS `HCV_CAT_DIAGNOSTIC`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `HCV_CAT_DIAGNOSTIC` (
    `ID` int(11) NOT NULL AUTO_INCREMENT,
    `KEY` VARCHAR(50),
    `SCIENTIFIC_NAME` VARCHAR(255),
    `COMMON_NAMES` VARCHAR(255),
    `DESCRIPTION` VARCHAR(255),
    `SHORT_DESCRIPTION` VARCHAR(255),
    PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;



/*CAT_STD		 CATALOG CAT_STD						*/

DROP TABLE IF EXISTS `HCV_CAT_STD`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `HCV_CAT_STD` (
    `ID` int(11) NOT NULL AUTO_INCREMENT,
    `KEY` VARCHAR(50),
    `SCIENTIFIC_NAME` VARCHAR(255),
    `COMMON_NAMES` VARCHAR(255),
    `DESCRIPTION` VARCHAR(255),
    `SHORT_DESCRIPTION` VARCHAR(255),
    PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;




/*CAT_INFECTOCONTAGIOUS	CAT_INFECTOCONTAGIOUS		*/

DROP TABLE IF EXISTS `HCV_CAT_INFECTOCONTAGIOUS`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `HCV_CAT_INFECTOCONTAGIOUS` (
    `ID` int(11) NOT NULL AUTO_INCREMENT,
    `KEY` VARCHAR(50),
    `SCIENTIFIC_NAME` VARCHAR(255),
    `COMMON_NAMES` VARCHAR(255),
    `DESCRIPTION` VARCHAR(255),
    `SHORT_DESCRIPTION` VARCHAR(255),
    PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;




/*CAT_CHILDHOOD_DISEASE	CAT_CHILDHOOD_DISEASE		*/

DROP TABLE IF EXISTS `HCV_CAT_CHILDHOOD_DISEASE`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `HCV_CAT_CHILDHOOD_DISEASE` (
    `ID` int(11) NOT NULL AUTO_INCREMENT,
    `KEY` VARCHAR(50),
    `SCIENTIFIC_NAME` VARCHAR(255),
    `COMMON_NAMES` VARCHAR(255),
    `DESCRIPTION` VARCHAR(255),
    `SHORT_DESCRIPTION` VARCHAR(255),
    PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;
