DELIMITER $$

USE `valsys_prod`$$

DROP TRIGGER /*!50032 IF EXISTS */ `TRG_PROSPECT_COST_before_update`$$

CREATE
    /*!50017 DEFINER = 'root'@'%' */
    TRIGGER `TRG_PROSPECT_COST_before_update` BEFORE UPDATE ON `PROSPECT_COST` 
    FOR EACH ROW BEGIN
    DECLARE gUSER VARCHAR(50);
    IF NEW.`LAST_UPD_BY` = '' THEN
    
    SET gUSER = 'SYSTEM';
  ELSE
    SET gUSER = NEW.`LAST_UPD_BY`;
  END IF;
  
  IF NEW.`INSTALLATION_COST` <> OLD.`INSTALLATION_COST` THEN
    INSERT INTO LOG_PROSPECT_UPDATE 
    (`PROSPECT_ID`, `TABLE_VALSYS`, `FIELD`, `VALUE_BEFORE`, `VALUE_AFTER`, `UPDATE_BY`,`UPDATE_DATE`)
    VALUES
    (OLD.`PROSPECT_ID`, 'PROSPECT_COST', 'INSTALLATION_COST', OLD.`INSTALLATION_COST`, NEW.`INSTALLATION_COST`, gUSER,NOW());
  END IF;
  IF NEW.`COST_PACKAGE` <> OLD.`COST_PACKAGE` THEN
    INSERT INTO LOG_PROSPECT_UPDATE 
    (`PROSPECT_ID`, `TABLE_VALSYS`, `FIELD`, `VALUE_BEFORE`, `VALUE_AFTER`, `UPDATE_BY`,`UPDATE_DATE`)
    VALUES
    (OLD.`PROSPECT_ID`, 'PROSPECT_COST', 'COST_PACKAGE', OLD.`COST_PACKAGE`, NEW.`COST_PACKAGE`, gUSER,NOW());
  END IF;
  IF NEW.`ALACARTE_COST` <> OLD.`ALACARTE_COST` THEN
    INSERT INTO LOG_PROSPECT_UPDATE 
    (`PROSPECT_ID`, `TABLE_VALSYS`, `FIELD`, `VALUE_BEFORE`, `VALUE_AFTER`, `UPDATE_BY`,`UPDATE_DATE`)
    VALUES
    (OLD.`PROSPECT_ID`, 'PROSPECT_COST', 'ALACARTE_COST', OLD.`ALACARTE_COST`, NEW.`ALACARTE_COST`, gUSER, NOW());
  END IF;
  IF NEW.`PROMO_COST` <> OLD.`PROMO_COST` THEN
    INSERT INTO LOG_PROSPECT_UPDATE 
    (`PROSPECT_ID`, `TABLE_VALSYS`, `FIELD`, `VALUE_BEFORE`, `VALUE_AFTER`, `UPDATE_BY`,`UPDATE_DATE`)
    VALUES
    (OLD.`PROSPECT_ID`, 'PROSPECT_COST', 'PROMO_COST', OLD.`PROMO_COST`, NEW.`PROMO_COST`, gUSER,NOW());
  END IF;
  IF NEW.`TOTAL_COST` <> OLD.`TOTAL_COST` THEN
    INSERT INTO LOG_PROSPECT_UPDATE 
    (`PROSPECT_ID`, `TABLE_VALSYS`, `FIELD`, `VALUE_BEFORE`, `VALUE_AFTER`, `UPDATE_BY`,`UPDATE_DATE`)
    VALUES
    (OLD.`PROSPECT_ID`, 'PROSPECT_COST', 'TOTAL_COST', OLD.`TOTAL_COST`, NEW.`TOTAL_COST`, gUSER,NOW());
  END IF;
END;
$$

DELIMITER ;