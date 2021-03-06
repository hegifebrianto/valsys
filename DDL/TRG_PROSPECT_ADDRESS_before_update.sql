DELIMITER $$

USE `valsys_prod`$$

DROP TRIGGER /*!50032 IF EXISTS */ `TRG_PROSPECT_ADDRESS_before_update`$$

CREATE
    /*!50017 DEFINER = 'root'@'%' */
    TRIGGER `TRG_PROSPECT_ADDRESS_before_update` BEFORE UPDATE ON `PROSPECT_ADDRESS` 
    FOR EACH ROW BEGIN
	DECLARE vDescPropertyTypeNew VARCHAR(50);
	DECLARE vDescPropertyTypeOld VARCHAR(50);
	DECLARE vDescHouseStatusNew VARCHAR(50);
	DECLARE vDescHouseStatusOld VARCHAR(50);
		
	DECLARE gUSER VARCHAR(50);
  IF NEW.`LAST_UPD_BY` = '' THEN
    
    SET gUSER = 'SYSTEM';
  ELSE
    SET gUSER = NEW.`LAST_UPD_BY`;
  END IF; 
	  
	-- 1
	IF NEW.`PROSPECT_ID_ICC` <> OLD.`PROSPECT_ID_ICC` THEN
	   INSERT INTO LOG_PROSPECT_UPDATE 
	   (`PROSPECT_ID`, `TABLE_VALSYS`, `FIELD`, `VALUE_BEFORE`, `VALUE_AFTER`, `UPDATE_BY`)
	   VALUES
	   (OLD.`PROSPECT_ID`, 'PROSPECT_ADDRESS', 'PROSPECT_ID_ICC', OLD.`PROSPECT_ID_ICC`, NEW.`PROSPECT_ID_ICC`, gUSER);
	END IF;
	-- 2
	IF NEW.`BUILDING_TYPE` <> OLD.`BUILDING_TYPE` THEN
	   SELECT PROPERTY_NAME INTO vDescPropertyTypeNew FROM MASTER_PROPERTY_TYPE WHERE NEW.`BUILDING_TYPE` = PROPERTY_ID;
	   SELECT PROPERTY_NAME INTO vDescPropertyTypeOld FROM MASTER_PROPERTY_TYPE WHERE OLD.`BUILDING_TYPE` = PROPERTY_ID;	
	   INSERT INTO LOG_PROSPECT_UPDATE 
	   (`PROSPECT_ID`, `TABLE_VALSYS`, `FIELD`, `VALUE_BEFORE`, `VALUE_AFTER`, `UPDATE_BY`)
	   VALUES
	   (OLD.`PROSPECT_ID`, 'PROSPECT_ADDRESS', 'BUILDING_TYPE',vDescPropertyTypeOld, vDescPropertyTypeNew, gUSER);
	END IF;
	-- 3
	
	IF NEW.`BUILDING_STATUS` <> OLD.`BUILDING_STATUS` THEN
	   SELECT HOUSE_STATUS_NAME INTO vDescHouseStatusNew FROM MASTER_HOUSE_STATUS WHERE NEW.`BUILDING_STATUS` = HOUSE_STATUS_ID;
	   SELECT HOUSE_STATUS_NAME INTO vDescHouseStatusOld FROM MASTER_HOUSE_STATUS WHERE OLD.`BUILDING_STATUS` = HOUSE_STATUS_ID;
	   INSERT INTO LOG_PROSPECT_UPDATE 
	   (`PROSPECT_ID`, `TABLE_VALSYS`, `FIELD`, `VALUE_BEFORE`, `VALUE_AFTER`, `UPDATE_BY`)
	   VALUES
	   (OLD.`PROSPECT_ID`, 'PROSPECT_ADDRESS', 'BUILDING_STATUS',vDescHouseStatusOld, vDescHouseStatusNew, gUSER);
	END IF;
	-- 4
	
	IF NEW.`STREET` <> OLD.`STREET` THEN
	   INSERT INTO LOG_PROSPECT_UPDATE 
	   (`PROSPECT_ID`, `TABLE_VALSYS`, `FIELD`, `VALUE_BEFORE`, `VALUE_AFTER`, `UPDATE_BY`)
	   VALUES
	   (OLD.`PROSPECT_ID`, 'PROSPECT_ADDRESS', 'STREET', OLD.`STREET`, NEW.`STREET`, gUSER);
	END IF;
	-- 5
	
	IF NEW.`PROVINCE` <> OLD.`PROVINCE` THEN
	   INSERT INTO LOG_PROSPECT_UPDATE 
	   (`PROSPECT_ID`, `TABLE_VALSYS`, `FIELD`, `VALUE_BEFORE`, `VALUE_AFTER`, `UPDATE_BY`)
	   VALUES
	   (OLD.`PROSPECT_ID`, 'PROSPECT_ADDRESS', 'PROVINCE', OLD.`PROVINCE`, NEW.`PROVINCE`, gUSER);
	END IF;
	-- 6
	
	IF NEW.`CITY` <> OLD.`CITY` THEN
	   INSERT INTO LOG_PROSPECT_UPDATE 
	   (`PROSPECT_ID`, `TABLE_VALSYS`, `FIELD`, `VALUE_BEFORE`, `VALUE_AFTER`, `UPDATE_BY`)
	   VALUES
	   (OLD.`PROSPECT_ID`, 'PROSPECT_ADDRESS', 'CITY', OLD.`CITY`, NEW.`CITY`, gUSER);
	END IF;
	-- 7
	
	IF NEW.`DISTRICT` <> OLD.`DISTRICT` THEN
	   INSERT INTO LOG_PROSPECT_UPDATE 
	   (`PROSPECT_ID`, `TABLE_VALSYS`, `FIELD`, `VALUE_BEFORE`, `VALUE_AFTER`, `UPDATE_BY`)
	   VALUES
	   (OLD.`PROSPECT_ID`, 'PROSPECT_ADDRESS', 'DISTRICT', OLD.`DISTRICT`, NEW.`DISTRICT`, gUSER);
	END IF;
	-- 8
	
	IF NEW.`SUBDISTRICT` <> OLD.`SUBDISTRICT` THEN
	   INSERT INTO LOG_PROSPECT_UPDATE 
	   (`PROSPECT_ID`, `TABLE_VALSYS`, `FIELD`, `VALUE_BEFORE`, `VALUE_AFTER`, `UPDATE_BY`)
	   VALUES
	   (OLD.`PROSPECT_ID`, 'PROSPECT_ADDRESS', 'SUBDISTRICT', OLD.`SUBDISTRICT`, NEW.`SUBDISTRICT`, gUSER);
	END IF;
	-- 9
	
	IF NEW.`POSTALCODE` <> OLD.`POSTALCODE` THEN
	   INSERT INTO LOG_PROSPECT_UPDATE 
	   (`PROSPECT_ID`, `TABLE_VALSYS`, `FIELD`, `VALUE_BEFORE`, `VALUE_AFTER`, `UPDATE_BY`)
	   VALUES
	   (OLD.`PROSPECT_ID`, 'PROSPECT_ADDRESS', 'POSTALCODE', OLD.`POSTALCODE`, NEW.`POSTALCODE`, gUSER);
	END IF;
	-- 10
	
	IF NEW.`COUNTRY` <> OLD.`COUNTRY` THEN
	   INSERT INTO LOG_PROSPECT_UPDATE 
	   (`PROSPECT_ID`, `TABLE_VALSYS`, `FIELD`, `VALUE_BEFORE`, `VALUE_AFTER`, `UPDATE_BY`)
	   VALUES
	   (OLD.`PROSPECT_ID`, 'PROSPECT_ADDRESS', 'COUNTRY', OLD.`COUNTRY`, NEW.`COUNTRY`, gUSER);
	END IF;
	-- 11
	
	IF NEW.`DIRECTION` <> OLD.`DIRECTION` THEN
	   INSERT INTO LOG_PROSPECT_UPDATE 
	   (`PROSPECT_ID`, `TABLE_VALSYS`, `FIELD`, `VALUE_BEFORE`, `VALUE_AFTER`, `UPDATE_BY`)
	   VALUES
	   (OLD.`PROSPECT_ID`, 'PROSPECT_ADDRESS', 'DIRECTION', OLD.`DIRECTION`, NEW.`DIRECTION`, gUSER);
	END IF;
	-- 12
	
	IF NEW.`LANDMARK` <> OLD.`LANDMARK` THEN
	   INSERT INTO LOG_PROSPECT_UPDATE 
	   (`PROSPECT_ID`, `TABLE_VALSYS`, `FIELD`, `VALUE_BEFORE`, `VALUE_AFTER`, `UPDATE_BY`)
	   VALUES
	   (OLD.`PROSPECT_ID`, 'PROSPECT_ADDRESS', 'LANDMARK', OLD.`LANDMARK`, NEW.`LANDMARK`, gUSER);
	END IF;
	-- 13
	
	IF NEW.`HOUSE_NUMBER` <> OLD.`HOUSE_NUMBER` THEN
	   INSERT INTO LOG_PROSPECT_UPDATE 
	   (`PROSPECT_ID`, `TABLE_VALSYS`, `FIELD`, `VALUE_BEFORE`, `VALUE_AFTER`, `UPDATE_BY`)
	   VALUES
	   (OLD.`PROSPECT_ID`, 'PROSPECT_ADDRESS', 'HOUSE_NUMBER', OLD.`HOUSE_NUMBER`, NEW.`HOUSE_NUMBER`, gUSER);
	END IF;
	-- 14
	
	IF NEW.`RT` <> OLD.`RT` THEN
	   INSERT INTO LOG_PROSPECT_UPDATE 
	   (`PROSPECT_ID`, `TABLE_VALSYS`, `FIELD`, `VALUE_BEFORE`, `VALUE_AFTER`, `UPDATE_BY`)
	   VALUES
	   (OLD.`PROSPECT_ID`, 'PROSPECT_ADDRESS', 'RT', OLD.`RT`, NEW.`RT`, gUSER);
	END IF;
	-- 15
	
	IF NEW.`RW` <> OLD.`RW` THEN
	   INSERT INTO LOG_PROSPECT_UPDATE 
	   (`PROSPECT_ID`, `TABLE_VALSYS`, `FIELD`, `VALUE_BEFORE`, `VALUE_AFTER`, `UPDATE_BY`)
	   VALUES
	   (OLD.`PROSPECT_ID`, 'PROSPECT_ADDRESS', 'RW', OLD.`RW`, NEW.`RW`, gUSER);
	END IF;
	-- 16
	
	IF NEW.`INSTALLATION_ADDRESS` <> OLD.`INSTALLATION_ADDRESS` THEN
	   INSERT INTO LOG_PROSPECT_UPDATE 
	   (`PROSPECT_ID`, `TABLE_VALSYS`, `FIELD`, `VALUE_BEFORE`, `VALUE_AFTER`, `UPDATE_BY`)
	   VALUES
	   (OLD.`PROSPECT_ID`, 'PROSPECT_ADDRESS', 'INSTALLATION_ADDRESS', OLD.`INSTALLATION_ADDRESS`, NEW.`INSTALLATION_ADDRESS`, gUSER);
	END IF;
	-- 17
	
	IF NEW.`INSTALLATION_DIRECTION` <> OLD.`INSTALLATION_DIRECTION` THEN
	   INSERT INTO LOG_PROSPECT_UPDATE 
	   (`PROSPECT_ID`, `TABLE_VALSYS`, `FIELD`, `VALUE_BEFORE`, `VALUE_AFTER`, `UPDATE_BY`)
	   VALUES
	   (OLD.`PROSPECT_ID`, 'PROSPECT_ADDRESS', 'INSTALLATION_DIRECTION', OLD.`INSTALLATION_DIRECTION`, NEW.`INSTALLATION_DIRECTION`, gUSER);
	END IF;
	-- 18
	
	IF NEW.`INSTALLATION_LANDMARK` <> OLD.`INSTALLATION_LANDMARK` THEN
	   INSERT INTO LOG_PROSPECT_UPDATE 
	   (`PROSPECT_ID`, `TABLE_VALSYS`, `FIELD`, `VALUE_BEFORE`, `VALUE_AFTER`, `UPDATE_BY`)
	   VALUES
	   (OLD.`PROSPECT_ID`, 'PROSPECT_ADDRESS', 'INSTALLATION_LANDMARK', OLD.`INSTALLATION_LANDMARK`, NEW.`INSTALLATION_LANDMARK`, gUSER);
	END IF;
	-- 19
	
	IF NEW.`INSTALLATION_HOUSE_NUMBER` <> OLD.`INSTALLATION_HOUSE_NUMBER` THEN
	   INSERT INTO LOG_PROSPECT_UPDATE 
	   (`PROSPECT_ID`, `TABLE_VALSYS`, `FIELD`, `VALUE_BEFORE`, `VALUE_AFTER`, `UPDATE_BY`)
	   VALUES
	   (OLD.`PROSPECT_ID`, 'PROSPECT_ADDRESS', 'INSTALLATION_HOUSE_NUMBER', OLD.`INSTALLATION_HOUSE_NUMBER`, NEW.`INSTALLATION_HOUSE_NUMBER`, gUSER);
	END IF;
	-- 20
	
	IF NEW.`INSTALLATION_HOUSE_RT` <> OLD.`INSTALLATION_HOUSE_RT` THEN
	   INSERT INTO LOG_PROSPECT_UPDATE 
	   (`PROSPECT_ID`, `TABLE_VALSYS`, `FIELD`, `VALUE_BEFORE`, `VALUE_AFTER`, `UPDATE_BY`)
	   VALUES
	   (OLD.`PROSPECT_ID`, 'PROSPECT_ADDRESS', 'INSTALLATION_HOUSE_RT', OLD.`INSTALLATION_HOUSE_RT`, NEW.`INSTALLATION_HOUSE_RT`, gUSER);
	END IF;
	-- 21
	
	IF NEW.`INSTALLATION_HOUSE_RW` <> OLD.`INSTALLATION_HOUSE_RW` THEN
	   INSERT INTO LOG_PROSPECT_UPDATE 
	   (`PROSPECT_ID`, `TABLE_VALSYS`, `FIELD`, `VALUE_BEFORE`, `VALUE_AFTER`, `UPDATE_BY`)
	   VALUES
	   (OLD.`PROSPECT_ID`, 'PROSPECT_ADDRESS', 'INSTALLATION_HOUSE_RW', OLD.`INSTALLATION_HOUSE_RW`, NEW.`INSTALLATION_HOUSE_RW`, gUSER);
	END IF;
	-- 22
	
	IF NEW.`INSTALLATION_PROVINCE` <> OLD.`INSTALLATION_PROVINCE` THEN
	   INSERT INTO LOG_PROSPECT_UPDATE 
	   (`PROSPECT_ID`, `TABLE_VALSYS`, `FIELD`, `VALUE_BEFORE`, `VALUE_AFTER`, `UPDATE_BY`)
	   VALUES
	   (OLD.`PROSPECT_ID`, 'PROSPECT_ADDRESS', 'INSTALLATION_PROVINCE', OLD.`INSTALLATION_PROVINCE`, NEW.`INSTALLATION_PROVINCE`, gUSER);
	END IF;
	-- 23
	
	IF NEW.`INSTALLATION_CITY` <> OLD.`INSTALLATION_CITY` THEN
	   INSERT INTO LOG_PROSPECT_UPDATE 
	   (`PROSPECT_ID`, `TABLE_VALSYS`, `FIELD`, `VALUE_BEFORE`, `VALUE_AFTER`, `UPDATE_BY`)
	   VALUES
	   (OLD.`PROSPECT_ID`, 'PROSPECT_ADDRESS', 'INSTALLATION_CITY', OLD.`INSTALLATION_CITY`, NEW.`INSTALLATION_CITY`, gUSER);
	END IF;
	-- 24
	
	IF NEW.`INSTALLATION_DISTRICT` <> OLD.`INSTALLATION_DISTRICT` THEN
	   INSERT INTO LOG_PROSPECT_UPDATE 
	   (`PROSPECT_ID`, `TABLE_VALSYS`, `FIELD`, `VALUE_BEFORE`, `VALUE_AFTER`, `UPDATE_BY`)
	   VALUES
	   (OLD.`PROSPECT_ID`, 'PROSPECT_ADDRESS', 'INSTALLATION_DISTRICT', OLD.`INSTALLATION_DISTRICT`, NEW.`INSTALLATION_DISTRICT`, gUSER);
	END IF;
	-- 25
	
	IF NEW.`INSTALLATION_SUBDISTRICT` <> OLD.`INSTALLATION_SUBDISTRICT` THEN
	   INSERT INTO LOG_PROSPECT_UPDATE 
	   (`PROSPECT_ID`, `TABLE_VALSYS`, `FIELD`, `VALUE_BEFORE`, `VALUE_AFTER`, `UPDATE_BY`)
	   VALUES
	   (OLD.`PROSPECT_ID`, 'PROSPECT_ADDRESS', 'INSTALLATION_DISTRICT', OLD.`INSTALLATION_SUBDISTRICT`, NEW.`INSTALLATION_SUBDISTRICT`, gUSER);
	END IF;
	-- 26
	
	IF NEW.`INSTALLATION_ZIPCODE` <> OLD.`INSTALLATION_ZIPCODE` THEN
	   INSERT INTO LOG_PROSPECT_UPDATE 
	   (`PROSPECT_ID`, `TABLE_VALSYS`, `FIELD`, `VALUE_BEFORE`, `VALUE_AFTER`, `UPDATE_BY`)
	   VALUES
	   (OLD.`PROSPECT_ID`, 'PROSPECT_ADDRESS', 'INSTALLATION_ZIPCODE', OLD.`INSTALLATION_ZIPCODE`, NEW.`INSTALLATION_ZIPCODE`, gUSER);
	END IF;
	-- 27
	
	IF NEW.`BILLING_ADDRESS` <> OLD.`BILLING_ADDRESS` THEN
	   INSERT INTO LOG_PROSPECT_UPDATE 
	   (`PROSPECT_ID`, `TABLE_VALSYS`, `FIELD`, `VALUE_BEFORE`, `VALUE_AFTER`, `UPDATE_BY`)
	   VALUES
	   (OLD.`PROSPECT_ID`, 'PROSPECT_ADDRESS', 'BILLING_ADDRESS', OLD.`BILLING_ADDRESS`, NEW.`BILLING_ADDRESS`, gUSER);
	END IF;
	-- 28
	
	IF NEW.`BILLING_DIRECTION` <> OLD.`BILLING_DIRECTION` THEN
	   INSERT INTO LOG_PROSPECT_UPDATE 
	   (`PROSPECT_ID`, `TABLE_VALSYS`, `FIELD`, `VALUE_BEFORE`, `VALUE_AFTER`, `UPDATE_BY`)
	   VALUES
	   (OLD.`PROSPECT_ID`, 'PROSPECT_ADDRESS', 'BILLING_DIRECTION', OLD.`BILLING_DIRECTION`, NEW.`BILLING_DIRECTION`, gUSER);
	END IF;
	-- 29
	
	IF NEW.`BILLING_LANDMARK` <> OLD.`BILLING_LANDMARK` THEN
	   INSERT INTO LOG_PROSPECT_UPDATE 
	   (`PROSPECT_ID`, `TABLE_VALSYS`, `FIELD`, `VALUE_BEFORE`, `VALUE_AFTER`, `UPDATE_BY`)
	   VALUES
	   (OLD.`PROSPECT_ID`, 'PROSPECT_ADDRESS', 'BILLING_LANDMARK', OLD.`BILLING_LANDMARK`, NEW.`BILLING_LANDMARK`, gUSER);
	END IF;
	-- 30
	
	IF NEW.`BILLING_HOUSE_NUMBER` <> OLD.`BILLING_HOUSE_NUMBER` THEN
	   INSERT INTO LOG_PROSPECT_UPDATE 
	   (`PROSPECT_ID`, `TABLE_VALSYS`, `FIELD`, `VALUE_BEFORE`, `VALUE_AFTER`, `UPDATE_BY`)
	   VALUES
	   (OLD.`PROSPECT_ID`, 'PROSPECT_ADDRESS', 'BILLING_HOUSE_NUMBER', OLD.`BILLING_HOUSE_NUMBER`, NEW.`BILLING_HOUSE_NUMBER`, gUSER);
	END IF;
	-- 31
	
	IF NEW.`BILLING_HOUSE_RT` <> OLD.`BILLING_HOUSE_RT` THEN
	   INSERT INTO LOG_PROSPECT_UPDATE 
	   (`PROSPECT_ID`, `TABLE_VALSYS`, `FIELD`, `VALUE_BEFORE`, `VALUE_AFTER`, `UPDATE_BY`)
	   VALUES
	   (OLD.`PROSPECT_ID`, 'PROSPECT_ADDRESS', 'BILLING_HOUSE_RT', OLD.`BILLING_HOUSE_RT`, NEW.`BILLING_HOUSE_RT`, gUSER);
	END IF;
	-- 32
	
	IF NEW.`BILLING_HOUSE_RW` <> OLD.`BILLING_HOUSE_RW` THEN
	   INSERT INTO LOG_PROSPECT_UPDATE 
	   (`PROSPECT_ID`, `TABLE_VALSYS`, `FIELD`, `VALUE_BEFORE`, `VALUE_AFTER`, `UPDATE_BY`)
	   VALUES
	   (OLD.`PROSPECT_ID`, 'PROSPECT_ADDRESS', 'BILLING_HOUSE_RW', OLD.`BILLING_HOUSE_RW`, NEW.`BILLING_HOUSE_RW`, gUSER);
	END IF;
	-- 33
	
	IF NEW.`BILLING_PROVINCE` <> OLD.`BILLING_PROVINCE` THEN
	   INSERT INTO LOG_PROSPECT_UPDATE 
	   (`PROSPECT_ID`, `TABLE_VALSYS`, `FIELD`, `VALUE_BEFORE`, `VALUE_AFTER`, `UPDATE_BY`)
	   VALUES
	   (OLD.`PROSPECT_ID`, 'PROSPECT_ADDRESS', 'BILLING_PROVINCE', OLD.`BILLING_PROVINCE`, NEW.`BILLING_PROVINCE`, gUSER);
	END IF;
	-- 34
	
	IF NEW.`BILLING_CITY` <> OLD.`BILLING_CITY` THEN
	   INSERT INTO LOG_PROSPECT_UPDATE 
	   (`PROSPECT_ID`, `TABLE_VALSYS`, `FIELD`, `VALUE_BEFORE`, `VALUE_AFTER`, `UPDATE_BY`)
	   VALUES
	   (OLD.`PROSPECT_ID`, 'PROSPECT_ADDRESS', 'BILLING_CITY', OLD.`BILLING_CITY`, NEW.`BILLING_CITY`, gUSER);
	END IF;
	-- 35
	
	IF NEW.`BILLING_DISTRICT` <> OLD.`BILLING_DISTRICT` THEN
	   INSERT INTO LOG_PROSPECT_UPDATE 
	   (`PROSPECT_ID`, `TABLE_VALSYS`, `FIELD`, `VALUE_BEFORE`, `VALUE_AFTER`, `UPDATE_BY`)
	   VALUES
	   (OLD.`PROSPECT_ID`, 'PROSPECT_ADDRESS', 'BILLING_DISTRICT', OLD.`BILLING_DISTRICT`, NEW.`BILLING_DISTRICT`, gUSER);
	END IF;
	-- 36
	
	IF NEW.`BILLING_SUBDISTRICT` <> OLD.`BILLING_SUBDISTRICT` THEN
	   INSERT INTO LOG_PROSPECT_UPDATE 
	   (`PROSPECT_ID`, `TABLE_VALSYS`, `FIELD`, `VALUE_BEFORE`, `VALUE_AFTER`, `UPDATE_BY`)
	   VALUES
	   (OLD.`PROSPECT_ID`, 'PROSPECT_ADDRESS', 'BILLING_SUBDISTRICT', OLD.`BILLING_SUBDISTRICT`, NEW.`BILLING_SUBDISTRICT`, gUSER);
	END IF;
	-- 37
	
	IF NEW.`BILLING_ZIPCODE` <> OLD.`BILLING_ZIPCODE` THEN
	   INSERT INTO LOG_PROSPECT_UPDATE 
	   (`PROSPECT_ID`, `TABLE_VALSYS`, `FIELD`, `VALUE_BEFORE`, `VALUE_AFTER`, `UPDATE_BY`)
	   VALUES
	   (OLD.`PROSPECT_ID`, 'PROSPECT_ADDRESS', 'BILLING_ZIPCODE', OLD.`BILLING_ZIPCODE`, NEW.`BILLING_ZIPCODE`, gUSER);
	END IF;
	-- 38
	
	IF NEW.`VALID_ADDR_ID` <> OLD.`VALID_ADDR_ID` THEN
	   INSERT INTO LOG_PROSPECT_UPDATE 
	   (`PROSPECT_ID`, `TABLE_VALSYS`, `FIELD`, `VALUE_BEFORE`, `VALUE_AFTER`, `UPDATE_BY`)
	   VALUES
	   (OLD.`PROSPECT_ID`, 'PROSPECT_ADDRESS', 'VALID_ADDR_ID', OLD.`VALID_ADDR_ID`, NEW.`VALID_ADDR_ID`, gUSER);
	END IF;
	
	
	
	
	
	  
	  
    END;
$$

DELIMITER ;