DELIMITER $$

USE `valsys_prod`$$

DROP TRIGGER /*!50032 IF EXISTS */ `TRG_PROSPECT_before_update`$$

CREATE
    /*!50017 DEFINER = 'root'@'%' */
    TRIGGER `TRG_PROSPECT_before_update` BEFORE UPDATE ON `PROSPECT` 
    FOR EACH ROW BEGIN
    DECLARE vDescIncomeOld VARCHAR(50);
    DECLARE vDescIncomeNew VARCHAR(50);
    DECLARE vDescProspectTypeNew VARCHAR(50);
    DECLARE vDescProspectTypeOld VARCHAR(50);
    DECLARE vDescSalutationNew VARCHAR(50);
    DECLARE vDescSalutationOld VARCHAR(50);
    DECLARE vDescIdTtypeOld VARCHAR(50);
    DECLARE vDescIdTtypeNew VARCHAR(50);
    DECLARE vDescOccupationOld VARCHAR(50);
    DECLARE vDescOccupationNew VARCHAR(50);
    
    DECLARE gUSER VARCHAR(50);
  IF NEW.`LAST_UPD_BY` = '' THEN
    
    SET gUSER = 'SYSTEM';
  ELSE
    SET gUSER = NEW.`LAST_UPD_BY`;
  END IF;    
    
    
    
	IF NEW.`SALESC` <> OLD.`SALESC` THEN
	   INSERT INTO LOG_PROSPECT_UPDATE 
	   (`PROSPECT_ID`, `TABLE_VALSYS`, `FIELD`, `VALUE_BEFORE`, `VALUE_AFTER`, `UPDATE_BY`)
	   VALUES
	   (OLD.`PROSPECT_ID`, 'PROSPECT', 'SALESC', OLD.`SALESC`, NEW.`SALESC`, gUSER);
	END IF;
	
	IF NEW.`FORMN` <> OLD.`FORMN` THEN
	   INSERT INTO LOG_PROSPECT_UPDATE 
	   (`PROSPECT_ID`, `TABLE_VALSYS`, `FIELD`, `VALUE_BEFORE`, `VALUE_AFTER`, `UPDATE_BY`)
	   VALUES
	   (OLD.`PROSPECT_ID`, 'PROSPECT', 'FORMN', OLD.`FORMN`, NEW.`FORMN`, gUSER);
	END IF;
	
	IF NEW.`PROSPECT_TYPE` <> OLD.`PROSPECT_TYPE` THEN
	   SELECT TYPE_NAME INTO vDescProspectTypeNew FROM MASTER_PROSPECT_TYPE WHERE NEW.`PROSPECT_TYPE` = ID_MPROSPECTTYPE;
	   SELECT TYPE_NAME INTO vDescProspectTypeOld FROM MASTER_PROSPECT_TYPE WHERE OLD.`PROSPECT_TYPE` = ID_MPROSPECTTYPE;
	   INSERT INTO LOG_PROSPECT_UPDATE 
	   (`PROSPECT_ID`, `TABLE_VALSYS`, `FIELD`, `VALUE_BEFORE`, `VALUE_AFTER`, `UPDATE_BY`)
	   VALUES
	   (OLD.`PROSPECT_ID`, 'PROSPECT', 'INCOME',  `vDescProspectTypeOld` ,  `vDescProspectTypeNew` , gUSER);
	END IF;
	
	IF NEW.`SALUTATION` <> OLD.`SALUTATION` THEN
	   SELECT NAME_SALUTATION INTO vDescSalutationNew FROM MASTER_SALUTATION WHERE NEW.`SALUTATION` = ID_SALUTATION;
	   SELECT NAME_SALUTATION INTO vDescSalutationOld FROM MASTER_SALUTATION WHERE OLD.`SALUTATION` = ID_SALUTATION;
	   INSERT INTO LOG_PROSPECT_UPDATE 
	   (`PROSPECT_ID`, `TABLE_VALSYS`, `FIELD`, `VALUE_BEFORE`, `VALUE_AFTER`,`UPDATE_BY`)
	   VALUES
	   (OLD.`PROSPECT_ID`, 'PROSPECT', 'SALUTATION', vDescSalutationOld , vDescSalutationNew , gUSER);
	END IF;
	
	IF NEW.`FIRST_NAME` <> OLD.`FIRST_NAME` THEN
	   INSERT INTO LOG_PROSPECT_UPDATE 
	   (`PROSPECT_ID`, `TABLE_VALSYS`, `FIELD`, `VALUE_BEFORE`, `VALUE_AFTER`, `UPDATE_BY`)
	   VALUES
	   (OLD.`PROSPECT_ID`, 'PROSPECT', 'FIRST_NAME', OLD.`FIRST_NAME`, NEW.`FIRST_NAME`, gUSER);
	END IF;
	
	IF NEW.`MIDDLE_NAME` <> OLD.`MIDDLE_NAME` THEN
	   INSERT INTO LOG_PROSPECT_UPDATE 
	   (`PROSPECT_ID`, `TABLE_VALSYS`, `FIELD`, `VALUE_BEFORE`, `VALUE_AFTER`, `UPDATE_BY`)
	   VALUES
	   (OLD.`PROSPECT_ID`, 'PROSPECT', 'MIDDLE_NAME', OLD.`MIDDLE_NAME`, NEW.`MIDDLE_NAME`, gUSER);
	END IF;
	
	IF NEW.`LAST_NAME` <> OLD.`LAST_NAME` THEN
	   INSERT INTO LOG_PROSPECT_UPDATE 
	   (`PROSPECT_ID`, `TABLE_VALSYS`, `FIELD`, `VALUE_BEFORE`, `VALUE_AFTER`, `UPDATE_BY`)
	   VALUES
	   (OLD.`PROSPECT_ID`, 'PROSPECT', 'LAST_NAME', OLD.`LAST_NAME`, NEW.`LAST_NAME`, gUSER);
	END IF;
	
	IF NEW.`HOME_PHONE` <> OLD.`HOME_PHONE` THEN
	   INSERT INTO LOG_PROSPECT_UPDATE 
	   (`PROSPECT_ID`, `TABLE_VALSYS`, `FIELD`, `VALUE_BEFORE`, `VALUE_AFTER`, `UPDATE_BY`)
	   VALUES
	   (OLD.`PROSPECT_ID`, 'PROSPECT', 'HOME_PHONE', OLD.`HOME_PHONE`, NEW.`HOME_PHONE`, gUSER);
	END IF;
	
	IF NEW.`WORK_PHONE` <> OLD.`WORK_PHONE` THEN
	   INSERT INTO LOG_PROSPECT_UPDATE 
	   (`PROSPECT_ID`, `TABLE_VALSYS`, `FIELD`, `VALUE_BEFORE`, `VALUE_AFTER`, `UPDATE_BY`)
	   VALUES
	   (OLD.`PROSPECT_ID`, 'PROSPECT', 'WORK_PHONE', OLD.`WORK_PHONE`, NEW.`WORK_PHONE`, gUSER);
	END IF;
	
	IF NEW.`MOBILE_PHONE` <> OLD.`MOBILE_PHONE` THEN
	   INSERT INTO LOG_PROSPECT_UPDATE 
	   (`PROSPECT_ID`, `TABLE_VALSYS`, `FIELD`, `VALUE_BEFORE`, `VALUE_AFTER`, `UPDATE_BY`)
	   VALUES
	   (OLD.`PROSPECT_ID`, 'PROSPECT', 'MOBILE_PHONE', OLD.`MOBILE_PHONE`, NEW.`MOBILE_PHONE`, gUSER);
	END IF;
	
	IF NEW.`EMAIL` <> OLD.`EMAIL` THEN
	   INSERT INTO LOG_PROSPECT_UPDATE 
	   (`PROSPECT_ID`, `TABLE_VALSYS`, `FIELD`, `VALUE_BEFORE`, `VALUE_AFTER`, `UPDATE_BY`)
	   VALUES
	   (OLD.`PROSPECT_ID`, 'PROSPECT', 'EMAIL', OLD.`EMAIL`, NEW.`EMAIL`, gUSER);
	END IF;
	
	IF NEW.`OPENTITY_ID` <> OLD.`OPENTITY_ID` THEN
	   INSERT INTO LOG_PROSPECT_UPDATE 
	   (`PROSPECT_ID`, `TABLE_VALSYS`, `FIELD`, `VALUE_BEFORE`, `VALUE_AFTER`, `UPDATE_BY`)
	   VALUES
	   (OLD.`PROSPECT_ID`, 'PROSPECT', 'OPENTITY_ID', OLD.`OPENTITY_ID`, NEW.`OPENTITY_ID`, gUSER);
	END IF;
	
	IF NEW.`PLN_ID` <> OLD.`PLN_ID` THEN
	   INSERT INTO LOG_PROSPECT_UPDATE 
	   (`PROSPECT_ID`, `TABLE_VALSYS`, `FIELD`, `VALUE_BEFORE`, `VALUE_AFTER`, `UPDATE_BY`)
	   VALUES
	   (OLD.`PROSPECT_ID`, 'PROSPECT', 'PLN_ID', OLD.`PLN_ID`, NEW.`PLN_ID`, gUSER);
	END IF;
	
	IF NEW.`ID_TYPE` <> OLD.`ID_TYPE` THEN
	   SELECT IDENTITY_TYPE_NAME INTO vDescIdTtypeNew FROM MASTER_IDENTITY_TYPE WHERE NEW.`ID_TYPE` = IDENTITY_TYPE_ID;
	   SELECT IDENTITY_TYPE_NAME INTO vDescIdTtypeOld FROM MASTER_IDENTITY_TYPE WHERE OLD.`ID_TYPE` = IDENTITY_TYPE_ID;
	   INSERT INTO LOG_PROSPECT_UPDATE 
	   (`PROSPECT_ID`, `TABLE_VALSYS`, `FIELD`, `VALUE_BEFORE`, `VALUE_AFTER`, `UPDATE_BY`)
	   VALUES
	   (OLD.`PROSPECT_ID`, 'PROSPECT', 'ID_TYPE', vDescIdTtypeOld, vDescIdTtypeNew, gUSER);
	END IF;
	
	IF NEW.`IDTYPE_NUMBER` <> OLD.`IDTYPE_NUMBER` THEN
	   INSERT INTO LOG_PROSPECT_UPDATE 
	   (`PROSPECT_ID`, `TABLE_VALSYS`, `FIELD`, `VALUE_BEFORE`, `VALUE_AFTER`, `UPDATE_BY`)
	   VALUES
	   (OLD.`PROSPECT_ID`, 'PROSPECT', 'IDTYPE_NUMBER', OLD.`IDTYPE_NUMBER`, NEW.`IDTYPE_NUMBER`, gUSER);
	END IF;
	
	IF NEW.`EXP_DATE` <> OLD.`EXP_DATE` THEN
	   INSERT INTO LOG_PROSPECT_UPDATE 
	   (`PROSPECT_ID`, `TABLE_VALSYS`, `FIELD`, `VALUE_BEFORE`, `VALUE_AFTER`, `UPDATE_BY`)
	   VALUES
	   (OLD.`PROSPECT_ID`, 'PROSPECT', 'EXP_DATE', OLD.`EXP_DATE`, NEW.`EXP_DATE`, gUSER);
	END IF;
	
	IF NEW.`OCCUPATION` <> OLD.`OCCUPATION` THEN
	   SELECT MASTEROCCUPATION_NAME INTO vDescOccupationNew FROM MASTER_OCCUPATION WHERE NEW.`OCCUPATION` = MASTEROCCUPATION_ID;
	   SELECT MASTEROCCUPATION_NAME INTO vDescOccupationOld FROM MASTER_OCCUPATION WHERE OLD.`OCCUPATION` = MASTEROCCUPATION_ID;
	   
	   INSERT INTO LOG_PROSPECT_UPDATE 
	   (`PROSPECT_ID`, `TABLE_VALSYS`, `FIELD`, `VALUE_BEFORE`, `VALUE_AFTER`, `UPDATE_BY`)
	   VALUES
	   (OLD.`PROSPECT_ID`, 'PROSPECT', 'OCCUPATION', vDescOccupationOld, vDescOccupationNew, gUSER);
	END IF;
	
	IF NEW.`INCOME` <> OLD.`INCOME` THEN
	   SELECT MASTERINCOME_NAME INTO  vDescIncomeNew FROM MASTER_INCOME WHERE NEW.`INCOME` = MASTERINCOME_ID;
	   SELECT MASTERINCOME_NAME INTO  vDescIncomeOld FROM MASTER_INCOME WHERE OLD.`INCOME` = MASTERINCOME_ID;
	   INSERT INTO LOG_PROSPECT_UPDATE 
	   (`PROSPECT_ID`, `TABLE_VALSYS`, `FIELD`, `VALUE_BEFORE`, `VALUE_AFTER` ,`UPDATE_BY`)
	   VALUES
	   (OLD.`PROSPECT_ID`, 'PROSPECT', 'INCOME', `vDescIncomeOld` , `vDescIncomeNew` , gUSER);
	END IF;
	
	IF NEW.`LONGITUDE` <> OLD.`LONGITUDE` THEN
	   INSERT INTO LOG_PROSPECT_UPDATE 
	   (`PROSPECT_ID`, `TABLE_VALSYS`, `FIELD`, `VALUE_BEFORE`, `VALUE_AFTER`, `UPDATE_BY`)
	   VALUES
	   (OLD.`PROSPECT_ID`, 'PROSPECT', 'LONGITUDE', OLD.`LONGITUDE`, NEW.`LONGITUDE`, gUSER);
	END IF;
	
	IF NEW.`LATITUDE` <> OLD.`LATITUDE` THEN
	   INSERT INTO LOG_PROSPECT_UPDATE 
	   (`PROSPECT_ID`, `TABLE_VALSYS`, `FIELD`, `VALUE_BEFORE`, `VALUE_AFTER`, `UPDATE_BY`)
	   VALUES
	   (OLD.`PROSPECT_ID`, 'PROSPECT', 'LATITUDE', OLD.`LATITUDE`, NEW.`LATITUDE`, gUSER);
	END IF;
	
	IF NEW.`FBEDA` <> OLD.`FBEDA` THEN
	   INSERT INTO LOG_PROSPECT_UPDATE 
	   (`PROSPECT_ID`, `TABLE_VALSYS`, `FIELD`, `VALUE_BEFORE`, `VALUE_AFTER`, `UPDATE_BY`)
	   VALUES
	   (OLD.`PROSPECT_ID`, 'PROSPECT', 'FBEDA', OLD.`FBEDA`, NEW.`FBEDA`, gUSER);
	END IF;
	
	IF NEW.`FBEDABILLING_IDENTITY` <> OLD.`FBEDABILLING_IDENTITY` THEN
	   INSERT INTO LOG_PROSPECT_UPDATE 
	   (`PROSPECT_ID`, `TABLE_VALSYS`, `FIELD`, `VALUE_BEFORE`, `VALUE_AFTER`, `UPDATE_BY`)
	   VALUES
	   (OLD.`PROSPECT_ID`, 'PROSPECT', 'FBEDABILLING_IDENTITY', OLD.`FBEDABILLING_IDENTITY`, NEW.`FBEDABILLING_IDENTITY`, gUSER);
	END IF;
	
	IF NEW.`FBEDABILLING_INSTALL` <> OLD.`FBEDABILLING_INSTALL` THEN
	   INSERT INTO LOG_PROSPECT_UPDATE 
	   (`PROSPECT_ID`, `TABLE_VALSYS`, `FIELD`, `VALUE_BEFORE`, `VALUE_AFTER`, `UPDATE_BY`)
	   VALUES
	   (OLD.`PROSPECT_ID`, 'PROSPECT', 'FBEDABILLING_INSTALL', OLD.`FBEDABILLING_INSTALL`, NEW.`FBEDABILLING_INSTALL`, gUSER);
	END IF;
	
	
	-- tambahan Ari - 19 Dec 2017
  IF old.statusep != new.statusep THEN
    INSERT INTO PROSPECT_STATUS_LOG VALUES (
      0,
      old.PROSPECT_NBR,
      old.statusep,
      old.last_upd_by,
      new.statusep,
      new.last_upd_by,
      CURRENT_TIMESTAMP
    );
  END IF;
	
	
    END;
$$

DELIMITER ;