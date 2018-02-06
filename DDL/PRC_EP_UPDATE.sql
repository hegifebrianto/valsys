DELIMITER $$

USE `valsys_prod`$$

DROP PROCEDURE IF EXISTS `PRC_EP_UPDATE`$$

CREATE DEFINER=`root`@`%` PROCEDURE `PRC_EP_UPDATE`(
  pProspectId INT (10),
  pSalesSC2 VARCHAR (16),
  pFormN VARCHAR (16),
  pProspectType VARCHAR (50),
  pSalutation VARCHAR (100),
  pFirstName VARCHAR (64),
  pMiddleName VARCHAR (64),
  pLastName VARCHAR (64),
  pHomePhone VARCHAR (50),
  pWorkPhone VARCHAR (50),
  pMobilePhone VARCHAR (50),
  pEmail VARCHAR (64),
  pOpentityId INT (10),
  pPlnId VARCHAR (50),
  pIdType VARCHAR (50),
  pIdTypeNbr VARCHAR (50),
  pExpDate VARCHAR(20),
  pOccupation VARCHAR (50),
  pIncome VARCHAR (50),
  pLong VARCHAR (50),
  pLat VARCHAR (50),
  pProcessId VARCHAR (100),
  pActid VARCHAR (100),
  pFBeda VARCHAR (50),
  pFBedaBillIdentity VARCHAR (50),
  pFBedaBillInstall VARCHAR (50),
  pStatusEP VARCHAR (20),
  pIsApproval VARCHAR (20),
  pUser VARCHAR (5),
  pStatusHw VARCHAR (30),
  pSgsNumber VARCHAR (20),
  pSgsName VARCHAR (255),
  pGender VARCHAR (20),
  pReligion VARCHAR (50),
  pPlaceBirth VARCHAR (50),
  pDateOfBirth VARCHAR (50),
  pPhoneNbr VARCHAR (20),
  pMobilePhone2 VARCHAR (20),
  pEmergencyName VARCHAR (120),
  pEmergencySibling VARCHAR (100),
  pEmergencyPhone VARCHAR (20),
  pEmergencyAddress TEXT (1000),
  pSalesNik VARCHAR (20),
  pSalesName VARCHAR (50),
  pSalesDiffCause VARCHAR (100),
  pEmployeeId VARCHAR(50),
  pSalesCode VARCHAR (100),
  pSalesOfficeBranch VARCHAR (100),
  pSalesNameBranchHead VARCHAR (100),
  pEntityCode VARCHAR (100),
  pPOS VARCHAR (100),
  pStoreArea VARCHAR (100),
  pIdNumber VARCHAR (128),
  pInstallDate VARCHAR (20),
  pInstallTime VARCHAR (20),
  pKetTtd VARCHAR (50),
  pKetBedaAlamat VARCHAR (50),
  pKetIdentitas VARCHAR (50),
  pPemilikRumah VARCHAR (50),
  pKetCC VARCHAR (50),
  pKetTagihan VARCHAR (50),
  pKetPickupDana VARCHAR (50),
  pInputPickupDana VARCHAR (50),
  pKetSuratKuasa VARCHAR (50),
  pKetInstansi VARCHAR (50),
  pKetSewa VARCHAR (50),
  pKetMulti VARCHAR (50),
  pKetBundle VARCHAR (50),
  pBtFlag VARCHAR (100),
  pBtDkLk VARCHAR (100),
  pBtBranchOffice VARCHAR (100),
  pBtRegionOffice VARCHAR (100),
  pBtFee VARCHAR (100),
  pClosingDate VARCHAR (20),
  pVerifDate VARCHAR (20),
  pVerifTime INT (20),
  pCustClass INT (20),
  pProspectIdICC INT (10),
  pBuildingType VARCHAR (10),
  pBuildingStatus VARCHAR (100),
  pStreet TEXT(1000),
  pProvince VARCHAR (255),
  pCity VARCHAR (255),
  pDistrict VARCHAR (255),
  pSubDistrict VARCHAR (255),
  pPostalCode VARCHAR (255),
  pCountry VARCHAR (255),
  pDirection VARCHAR (255),
  pLandmark VARCHAR (255),
  pHouseNbr VARCHAR (10),
  pRT VARCHAR (10),
  pRW VARCHAR (10),
  pInstallAddress VARCHAR (255),
  pInstallDirection VARCHAR (255),
  pInstallLandmark VARCHAR (255),
  pInstallHouseNbr VARCHAR (10),
  pInstallHouseRT VARCHAR (10),
  pInstallHouseRW VARCHAR (10),
  pInstallProvince VARCHAR (255),
  pInstallCity VARCHAR (255),
  pInstallDistrict VARCHAR (255),
  pInstallSubdistrict VARCHAR (255),
  pInstallZipcode VARCHAR (255),
  pBillAddress VARCHAR (255),
  pBillDirection VARCHAR (255),
  pBillLandmark VARCHAR (255),
  pBillHouseNbr VARCHAR (10),
  pBillHouseRT VARCHAR (10),
  pBillHouseRW VARCHAR (10),
  pBillProvince VARCHAR (255),
  pBillCity VARCHAR (255),
  pBillDistrict VARCHAR (255),
  pBillSubdistrict VARCHAR (255),
  pBillZipcode VARCHAR (255),
  pValidAddressId INT (10),
  pProductId TEXT (10000),
  pProductCategory TEXT (10000),
  pProductType TEXT (10000),
  pInstallCost VARCHAR (50),
  pCostPackage VARCHAR (50),
  pAlacarteCost VARCHAR (50),
  pInternetCost VARCHAR (50),
  pPromoCost VARCHAR (50),
  pTotalCost VARCHAR (50),
  pDecHdCost VARCHAR (50),
  pBeliPutusCost VARCHAR (50),
  pPaymentDate VARCHAR (20),
  pPaymentMode VARCHAR (50),
  pPaymentType VARCHAR (20),
  pCurrencyCode VARCHAR (10),
  pAmount INT (15),
  pNotes VARCHAR (255),
  pBankAccountNo VARCHAR (40),
  pBankName VARCHAR (40),
  pAccountName VARCHAR (255),
  pCardType VARCHAR (40),
  pCardNumber VARCHAR (40),
  pCardExpDate VARCHAR (20),
  pPaymentDirectDebit VARCHAR (50),
  pReceiptNbr VARCHAR (50),
  pReceiptDate VARCHAR (20),
  pBrand VARCHAR (20),
  pPackageStatus VARCHAR (20),
  pAvailablePromo VARCHAR (20),
  pBillFreq VARCHAR (20),
  pFirstPayment VARCHAR(20), 
  pProspectIdMap TEXT (10000),
  pPromoType TEXT (10000),
  pDiscPromo TEXT (10000),
  pAmountPromo TEXT (10000),
  OUT po_message INT(11),
  OUT pID INT(11),
  OUT pn_message VARCHAR(200)
  )
BEGIN
  DECLARE vSFL INT(11);
  DECLARE vProsNBR  VARCHAR(200);
  DECLARE vTempId VARCHAR(50);
  DECLARE vError INT(11);
  DECLARE vCnt INT;
  DECLARE vProsId INT(11);
  DECLARE vPaymentDate VARCHAR (20);
  DECLARE vReceiptDate VARCHAR (20);
  DECLARE not_found INT DEFAULT 0;
  DECLARE vDelimiter VARCHAR (1) DEFAULT '#';
  DECLARE vDelimiter2 CHAR(1) DEFAULT '|';
  DECLARE vMaxCnt INT;
  DECLARE vMaxProsId BIGINT;
  DECLARE i INT DEFAULT 0;
  DECLARE got_err INT DEFAULT 0;
  
  DECLARE CONTINUE HANDLER FOR NOT FOUND SET not_found = 1;
  DECLARE CONTINUE HANDLER FOR SQLEXCEPTION SET got_err = 1;
  START TRANSACTION;
  
  IF pPaymentDate = '' THEN 
    SET pPaymentDate = NULL;
  ELSE 
    SET pPaymentDate = pPaymentDate;
  END IF;
  IF pReceiptDate = '' THEN 
    SET pReceiptDate = NULL;
  ELSE 
    SET pReceiptDate = pReceiptDate;
  END IF;
  IF pInstallDate = '' THEN 
    SET pInstallDate = NULL;
  ELSE 
    SET pInstallDate = pInstallDate;
  END IF;
  IF pClosingDate = '' THEN 
    SET pClosingDate = NULL;
  ELSE 
    SET pClosingDate = pClosingDate;
  END IF;
  
    UPDATE PROSPECT SET
      SALESC = pSalesSC2,
      FORMN = pFormN,
      PROSPECT_TYPE = pProspectType,
      SALUTATION = pSalutation,
      FIRST_NAME = pFirstName,
      MIDDLE_NAME = pMiddleName,
      LAST_NAME = pLastName,
      HOME_PHONE = pHomePhone,
      WORK_PHONE = pWorkPhone,
      MOBILE_PHONE = pMobilePhone,
      EMAIL = pEmail,
      OPENTITY_ID = pOpentityId,
      PLN_ID = pPlnId,
      ID_TYPE = pIdType,
      IDTYPE_NUMBER = pIdTypeNbr,
      EXP_DATE = STR_TO_DATE(pExpDate, '%m-%d-%Y'),
      OCCUPATION = pOccupation,
      INCOME = pIncome,
      LONGITUDE = pLong,
      LATITUDE = pLat,
      processId = pProcessId,
      actid = pActid,
      FBEDA = pFBeda,
      FBEDABILLING_IDENTITY = pFBedaBillIdentity,
      FBEDABILLING_INSTALL = pFBedaBillInstall,
      ISAPPROVAL = pIsApproval,
      LAST_UPD_BY = pUser,
      LAST_UPD_DATE = NOW()
    WHERE PROSPECT_ID = pProspectId;
    UPDATE PROSPECT_PAYMENT SET
      PAYMENT_DATE = STR_TO_DATE(pPaymentDate, '%m-%d-%Y'),
      PAYMENT_MODE = pPaymentMode,
      PAYMENT_TYPE = pPaymentType,
      CURRENCY_CODE = pCurrencyCode,
      AMOUNT = pAmount,
      NOTES = pNotes,
      BANK_ACCOUNT_NO = pBankAccountNo,
      BANK_NAME = pBankName,
      ACCOUNT_NAME = pAccountName,
      CARD_TYPE = pCardType,
      CARD_NUMBER = pCardNumber,
      EXP_DATE = pCardExpDate,
      PAYMENT_DIRECT_DEBIT = pPaymentDirectDebit,
      RECEIPT_NBR = pReceiptNbr,
      RECEIPT_DATE = STR_TO_DATE(pReceiptDate, '%m-%d-%Y'),
      LAST_UPD_BY = pUser,
      LAST_UPD_DATE = NOW()
      
    WHERE PROSPECT_ID = pProspectId;
    UPDATE PROSPECT_ADDRESS SET
      PROSPECT_ID_ICC = pProspectIdICC,
      BUILDING_TYPE = pBuildingType,
      BUILDING_STATUS = pBuildingStatus,
      STREET = pStreet,
      PROVINCE = pProvince,
      CITY = pCity,
      DISTRICT = pDistrict,
      SUBDISTRICT = pSubDistrict,
      POSTALCODE = pPostalCode,
      COUNTRY = pCountry,
      DIRECTION = pDirection,
      LANDMARK = pLandmark,
      HOUSE_NUMBER = pHouseNbr,
      RT = pRT,
      RW = pRW,
      INSTALLATION_ADDRESS = pInstallAddress,
      INSTALLATION_DIRECTION = pInstallDirection,
      INSTALLATION_LANDMARK = pInstallLandmark,
      INSTALLATION_HOUSE_NUMBER = pInstallHouseNbr,
      INSTALLATION_HOUSE_RT = pInstallHouseRT,
      INSTALLATION_HOUSE_RW = pInstallHouseRW,
      INSTALLATION_PROVINCE = pInstallProvince,
      INSTALLATION_CITY = pInstallCity,
      INSTALLATION_DISTRICT = pInstallDistrict,
      INSTALLATION_SUBDISTRICT = pInstallSubdistrict,
      INSTALLATION_ZIPCODE = pInstallZipcode,
      BILLING_ADDRESS = pBillAddress,
      BILLING_DIRECTION = pBillDirection,
      BILLING_LANDMARK = pBillLandmark,
      BILLING_HOUSE_NUMBER = pBillHouseNbr,
      BILLING_HOUSE_RT = pBillHouseRT,
      BILLING_HOUSE_RW = pBillHouseRW,
      BILLING_PROVINCE = pBillProvince,
      BILLING_CITY = pBillCity,
      BILLING_DISTRICT = pBillDistrict,
      BILLING_SUBDISTRICT = pBillSubdistrict,
      BILLING_ZIPCODE = pBillZipcode,
      VALID_ADDR_ID = pValidAddressId,
      LAST_UPD_BY = pUser,
      LAST_UPD_DATE = NOW()
    WHERE PROSPECT_ID = pProspectId;
    UPDATE PROSPECT_PACKAGE_ORDER SET
      BRAND = pBrand,
      STATUS = pPackageStatus,
      AVAILABLE_PROMO = pAvailablePromo,
      BILLING_FREQUENCY = pBillFreq,
      LAST_UPD_BY = pUser    
    WHERE PROSPECT_ID = pProspectId;
    UPDATE PROSPECT_COST SET
      INSTALLATION_COST = pInstallCost,
      COST_PACKAGE = pCostPackage,
      ALACARTE_COST = pAlacarteCost,
      INTERNET_COST = pInternetCost,
      BELI_PUTUS_COST = pBeliPutusCost,
      DEC_HD_COST = pDecHdCost,
      PROMO_COST = pPromoCost,
      TOTAL_COST = pTotalCost,
      LAST_UPD_BY = pUser
    WHERE PROSPECT_ID = pProspectId;
    
    SELECT F_STR_CNT (pProductId, vDelimiter2) INTO vMaxCnt;
    -- ADD PRODUCT
    CALL PRC_PRODUCTS(
      pProspectId,
      pProductId,
      pProductCategory,
      pProductType,
      pUser
    );
    
    
    UPDATE PROSPECT_ADDITIONAL SET
      STATUS_HW = pStatusHw,
      SGS_NUMBER = pSgsNumber,
      SGS_NAME = pSgsName,
      GENDER = pGender,
      RELIGION = pReligion,
      PLACE_BIRTH = pPlaceBirth,
      DATE_OF_BIRTH = STR_TO_DATE(pDateOfBirth, '%m-%d-%Y'),
      PHONE_NBR = pPhoneNbr,
      HANDPHONE_NBR = pMobilePhone2,
      EC_NAME = pEmergencyName,
      EC_RELATION = pEmergencySibling,
      EC_PHONE = pEmergencyPhone,
      EC_ADDR = pEmergencyAddress,
      NIK_SALES = pSalesNik,
      NAME_SALES = pSalesName,
      DIFFERENT_CAUSE = pSalesDiffCause,
      SALES_CODE = pSalesCode,
      OFFICE_BRANCH = pSalesOfficeBranch,
      HEAD_BRANCH = pSalesNameBranchHead,
      ENTITY_CODE = pEntityCode,
      POS = pPOS,
      STORE_AREA = pStoreArea,
      ID_NUMBER = pIdNumber,
      INSTALLATION_DATE = STR_TO_DATE(pInstallDate, '%m-%d-%Y'),
      INSTALLATION_TIME = pInstallTime,
      KET_TTD = pKetTtd,
      KET_BEDA_ALAMAT = pKetBedaAlamat,
      KET_IDENTITAS = pKetIdentitas,
      KET_PEMILIKRUMAH = pPemilikRumah,
      KET_CC = pKetCC,
      KET_TAGIHAN = pKetTagihan,
      KET_PICKUPDANA = pKetPickupDana,
      INPUT_PICKUPDANA = pInputPickupDana,
      KET_SURATKUASA = pKetSuratKuasa,
      KET_INSTANSI = pKetInstansi,
      KET_PERNYATAANSEWA = pKetSewa,
      KET_PERNYATAAN_MULTI_PELANGGAN = pKetMulti,
      KET_PERNYATAAN_BUNDLE_INTERNET = pKetBundle,
      TRANSPORTATION_FEE_FLAG = pBtFlag,
      BT_DK_LK = pBtDkLk,
      BT_BRANCH_OFFICE = pBtBranchOffice,
      BT_REGION_OFFICE = pBtRegionOffice,
      BT_TRANSPORTATION_FEE = pBtFee,
      CLOSING_DATE = STR_TO_DATE(pClosingDate, '%m-%d-%Y'),
      VERIFICATION_DATE = STR_TO_DATE(pVerifDate, '%m-%d-%Y'),
      VERIFICATION_PERIOD = pVerifTime,
      CUSTOMER_CLASS = pCustClass,
      LAST_UPD_BY = pUser,
      LAST_UPD_DATE = NOW()
    WHERE PROSPECT_ID = pProspectId;
    DELETE FROM PROSPECT_PROMO WHERE PROSPECT_ID = pProspectId;
    SET i=0;
    SELECT F_STR_CNT (pProspectIdMap, vDelimiter2) INTO vMaxCnt;
    LOOP2 :
    WHILE i < vMaxCnt DO SET i = i + 1;
      INSERT INTO PROSPECT_PROMO (
        PROMO_ID,
        PROSPECT_ID,
        PROMO_ID_MAP,
        PROMO_TYPE,
        DISC,
        AMOUNT
      ) VALUES (
        pAvailablePromo,
        pProspectId,
        F_GET_SUBSTR (pProspectIdMap, vDelimiter2, i),
        F_GET_SUBSTR (pPromoType, vDelimiter2, i),
        F_GET_SUBSTR (pDiscPromo, vDelimiter2, i),
        F_GET_SUBSTR (pAmountPromo, vDelimiter2, i)
      );
    END WHILE LOOP2;
    SELECT PROSPECT_NBR INTO @var1 FROM PROSPECT WHERE PROSPECT_ID = pProspectId LIMIT 1;
    SELECT @var1 INTO  vProsNBR;
    INSERT INTO LOG_NOTES_STATUS (
      LOG_NOTES_STATUS_PROSPECT_NBR,
      LOG_NOTES_STATUS_UPDATE,
      LOG_NOTES_STATUS_DESCRIPTION,
      LOG_NOTES_STATUS_DEPT,
      LOG_NOTES_STATUS_INSERT_DATE,
      LOG_NOTES_STATUS_INSERT_BY
    ) VALUES (
      vProsNBR,
      'UPDATE PROSPECT',
      'EP EDITED',
      'SALES',
      NOW(),
      pUser
    );
    SELECT COUNT(0) INTO po_message FROM LOG_NOTES_STATUS WHERE LOG_NOTES_STATUS_PROSPECT_NBR = vProsNBR;
    SET pn_message = vProsNBR;
    SET po_message = 1;
    COMMIT;
  
END$$

DELIMITER ;