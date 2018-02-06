DELIMITER $$

USE `valsys_prod`$$

DROP TRIGGER /*!50032 IF EXISTS */ `TRG_PROSPECT_PAYMENT_before_update`$$

CREATE
    /*!50017 DEFINER = 'root'@'%' */
    TRIGGER `TRG_PROSPECT_PAYMENT_before_update` BEFORE UPDATE ON `PROSPECT_PAYMENT` 
    FOR EACH ROW BEGIN
    DECLARE gUSER VARCHAR(50);
    DECLARE vDescPaymentModeOld VARCHAR(50);
    DECLARE vDescPaymentModeNew VARCHAR(50);
    DECLARE vDescPaymentTypeOld VARCHAR(50);
    DECLARE vDescPaymentTypeNew VARCHAR(50);
    
  IF NEW.`LAST_UPD_BY` = '' THEN
    
    SET gUSER = 'SYSTEM';
  ELSE
    SET gUSER = NEW.`LAST_UPD_BY`;
  END IF; 
  
	-- 1
	IF NEW.`PAYMENT_DATE` <> OLD.`PAYMENT_DATE` THEN
	   INSERT INTO LOG_PROSPECT_UPDATE 
	   (`PROSPECT_NBR`, `TABLE_VALSYS`, `FIELD`, `VALUE_BEFORE`, `VALUE_AFTER`, `UPDATE_BY`)
	   VALUES
	   (OLD.`PROSPECT_ID`, 'PROSPECT_PAYMENT', 'PAYMENT_DATE', OLD.`PAYMENT_DATE`, NEW.`PAYMENT_DATE`, gUSER);
	END IF;
	-- 2
	IF NEW.`PAYMENT_MODE` <> OLD.`PAYMENT_MODE` THEN
	   SELECT PAYMENTMETHOD_NAME INTO vDescPaymentModeNew FROM MASTER_PAYMENT_METHOD WHERE NEW.`PAYMENT_MODE` = PAYMENTMETHOD_ID;
	   SELECT PAYMENTMETHOD_NAME INTO vDescPaymentModeOld FROM MASTER_PAYMENT_METHOD WHERE OLD.`PAYMENT_MODE` = PAYMENTMETHOD_ID;
	   
	   INSERT INTO LOG_PROSPECT_UPDATE 
	   (`PROSPECT_NBR`, `TABLE_VALSYS`, `FIELD`, `VALUE_BEFORE`, `VALUE_AFTER`, `UPDATE_BY`)
	   VALUES
	   (OLD.`PROSPECT_ID`, 'PROSPECT_PAYMENT', 'PAYMENT_MODE', vDescPaymentModeOld, vDescPaymentModeNew, gUSER);
	END IF;
	-- 3
	IF NEW.`PAYMENT_TYPE` <> OLD.`PAYMENT_TYPE` THEN
	   SELECT MASTER_PAYMENT_TYPE_NAME INTO vDescPaymentTypeNew FROM MASTER_PAYMENT_TYPE WHERE NEW.`PAYMENT_TYPE` = MASTER_PAYMENT_TYPE_ID;
	   SELECT MASTER_PAYMENT_TYPE_NAME INTO vDescPaymentTypeOld FROM MASTER_PAYMENT_TYPE WHERE OLD.`PAYMENT_TYPE` = MASTER_PAYMENT_TYPE_ID;
	   
	   INSERT INTO LOG_PROSPECT_UPDATE 
	   (`PROSPECT_NBR`, `TABLE_VALSYS`, `FIELD`, `VALUE_BEFORE`, `VALUE_AFTER`, `UPDATE_BY`)
	   VALUES
	   (OLD.`PROSPECT_ID`, 'PROSPECT_PAYMENT', 'PAYMENT_TYPE', OLD.`PAYMENT_TYPE`, NEW.`PAYMENT_TYPE`, gUSER);
	END IF;
	-- 4
	IF NEW.`CURRENCY_CODE` <> OLD.`CURRENCY_CODE` THEN
	   INSERT INTO LOG_PROSPECT_UPDATE 
	   (`PROSPECT_NBR`, `TABLE_VALSYS`, `FIELD`, `VALUE_BEFORE`, `VALUE_AFTER`, `UPDATE_BY`)
	   VALUES
	   (OLD.`PROSPECT_ID`, 'PROSPECT_PAYMENT', 'CURRENCY_CODE', OLD.`CURRENCY_CODE`, NEW.`CURRENCY_CODE`, gUSER);
	END IF;
	-- 5
	IF NEW.`AMOUNT` <> OLD.`AMOUNT` THEN
	   INSERT INTO LOG_PROSPECT_UPDATE 
	   (`PROSPECT_NBR`, `TABLE_VALSYS`, `FIELD`, `VALUE_BEFORE`, `VALUE_AFTER`, `UPDATE_BY`)
	   VALUES
	   (OLD.`PROSPECT_ID`, 'PROSPECT_PAYMENT', 'AMOUNT', OLD.`AMOUNT`, NEW.`AMOUNT`, gUSER);
	END IF;
	-- 6
	
	IF NEW.`NOTES` <> OLD.`NOTES` THEN
	   INSERT INTO LOG_PROSPECT_UPDATE 
	   (`PROSPECT_NBR`, `TABLE_VALSYS`, `FIELD`, `VALUE_BEFORE`, `VALUE_AFTER`, `UPDATE_BY`)
	   VALUES
	   (OLD.`PROSPECT_ID`, 'PROSPECT_PAYMENT', 'NOTES', OLD.`NOTES`, NEW.`NOTES`, gUSER);
	END IF;
	-- 7
	
	IF NEW.`BANK_ACCOUNT_NO` <> OLD.`BANK_ACCOUNT_NO` THEN
	   INSERT INTO LOG_PROSPECT_UPDATE 
	   (`PROSPECT_NBR`, `TABLE_VALSYS`, `FIELD`, `VALUE_BEFORE`, `VALUE_AFTER`, `UPDATE_BY`)
	   VALUES
	   (OLD.`PROSPECT_ID`, 'PROSPECT_PAYMENT', 'BANK_ACCOUNT_NO', OLD.`BANK_ACCOUNT_NO`, NEW.`BANK_ACCOUNT_NO`, gUSER);
	END IF;
	-- 8
	
	IF NEW.`BANK_NAME` <> OLD.`BANK_NAME` THEN
	   INSERT INTO LOG_PROSPECT_UPDATE 
	   (`PROSPECT_NBR`, `TABLE_VALSYS`, `FIELD`, `VALUE_BEFORE`, `VALUE_AFTER`, `UPDATE_BY`)
	   VALUES
	   (OLD.`PROSPECT_ID`, 'PROSPECT_PAYMENT', 'BANK_NAME', OLD.`BANK_NAME`, NEW.`BANK_NAME`, gUSER);
	END IF;
	-- 9
	
	IF NEW.`ACCOUNT_NAME` <> OLD.`ACCOUNT_NAME` THEN
	   INSERT INTO LOG_PROSPECT_UPDATE 
	   (`PROSPECT_NBR`, `TABLE_VALSYS`, `FIELD`, `VALUE_BEFORE`, `VALUE_AFTER`, `UPDATE_BY`)
	   VALUES
	   (OLD.`PROSPECT_ID`, 'PROSPECT_PAYMENT', 'ACCOUNT_NAME', OLD.`ACCOUNT_NAME`, NEW.`ACCOUNT_NAME`, gUSER);
	END IF;
	-- 10
	
	IF NEW.`CARD_TYPE` <> OLD.`CARD_TYPE` THEN
	   INSERT INTO LOG_PROSPECT_UPDATE 
	   (`PROSPECT_NBR`, `TABLE_VALSYS`, `FIELD`, `VALUE_BEFORE`, `VALUE_AFTER`, `UPDATE_BY`)
	   VALUES
	   (OLD.`PROSPECT_ID`, 'PROSPECT_PAYMENT', 'CARD_TYPE', OLD.`CARD_TYPE`, NEW.`CARD_TYPE`, gUSER);
	END IF;
	-- 11
	
	IF NEW.`CARD_NUMBER` <> OLD.`CARD_NUMBER` THEN
	   INSERT INTO LOG_PROSPECT_UPDATE 
	   (`PROSPECT_NBR`, `TABLE_VALSYS`, `FIELD`, `VALUE_BEFORE`, `VALUE_AFTER`, `UPDATE_BY`)
	   VALUES
	   (OLD.`PROSPECT_ID`, 'PROSPECT_PAYMENT', 'CARD_NUMBER', OLD.`CARD_NUMBER`, NEW.`CARD_NUMBER`, gUSER);
	END IF;
	-- 12
	
	IF NEW.`EXP_DATE` <> OLD.`EXP_DATE` THEN
	   INSERT INTO LOG_PROSPECT_UPDATE 
	   (`PROSPECT_NBR`, `TABLE_VALSYS`, `FIELD`, `VALUE_BEFORE`, `VALUE_AFTER`, `UPDATE_BY`)
	   VALUES
	   (OLD.`PROSPECT_ID`, 'PROSPECT_PAYMENT', 'EXP_DATE', OLD.`EXP_DATE`, NEW.`EXP_DATE`, gUSER);
	END IF;
	-- 13
	
	IF NEW.`PAYMENT_DIRECT_DEBIT` <> OLD.`PAYMENT_DIRECT_DEBIT` THEN
	   INSERT INTO LOG_PROSPECT_UPDATE 
	   (`PROSPECT_NBR`, `TABLE_VALSYS`, `FIELD`, `VALUE_BEFORE`, `VALUE_AFTER`, `UPDATE_BY`)
	   VALUES
	   (OLD.`PROSPECT_ID`, 'PROSPECT_PAYMENT', 'PAYMENT_DIRECT_DEBIT', OLD.`PAYMENT_DIRECT_DEBIT`, NEW.`PAYMENT_DIRECT_DEBIT`, gUSER);
	END IF;
	-- 14
	
	IF NEW.`RECEIPT_NBR` <> OLD.`RECEIPT_NBR` THEN
	   INSERT INTO LOG_PROSPECT_UPDATE 
	   (`PROSPECT_NBR`, `TABLE_VALSYS`, `FIELD`, `VALUE_BEFORE`, `VALUE_AFTER`, `UPDATE_BY`)
	   VALUES
	   (OLD.`PROSPECT_ID`, 'PROSPECT_PAYMENT', 'RECEIPT_NBR', OLD.`RECEIPT_NBR`, NEW.`RECEIPT_NBR`, gUSER);
	END IF;
	-- 15
	
	IF NEW.`RECEIPT_DATE` <> OLD.`RECEIPT_DATE` THEN
	   INSERT INTO LOG_PROSPECT_UPDATE 
	   (`PROSPECT_NBR`, `TABLE_VALSYS`, `FIELD`, `VALUE_BEFORE`, `VALUE_AFTER`, `UPDATE_BY`)
	   VALUES
	   (OLD.`PROSPECT_ID`, 'PROSPECT_PAYMENT', 'RECEIPT_DATE', OLD.`RECEIPT_DATE`, NEW.`RECEIPT_DATE`, gUSER);
	END IF;
    
    END;
$$

DELIMITER ;