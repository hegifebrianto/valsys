DELIMITER $$

USE `valsys_prod`$$

DROP PROCEDURE IF EXISTS `PRC_EP_INSERT`$$

CREATE DEFINER=`root`@`%` PROCEDURE `PRC_EP_INSERT`(
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
proc_label:BEGIN
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
    /*SELECT EMPLOYEE_ID INTO @var2 FROM MASTER_SALES_LOGIN WHERE SALES_CODE=pSalesCode;*/
    /*SELECT @var2 into vSFL;*/
    CALL PROS_NBR_GENERATOR(pEmployeeId,@ID); SELECT @ID INTO vTempId;
    SET vProsNBR = vTempId;
	SELECT
	COUNT(0) INTO vCnt
	FROM
	PROSPECT
	WHERE PROSPECT_NBR = vProsNBR;
 
    IF vCnt = 1 THEN
	SET po_message = 0;
	SET pID =0;
	SET pn_message = 'YOUR SALES CODE IS IN THE PROBLEM, CALL APP SUPPORT TO FIX THEM';
	LEAVE proc_label;
    
    ELSE
    
    	
	    /*SELECT MAX(PROSPECT_ID) + 1 INTO vMaxProsId FROM PROSPECT;*/
	    INSERT INTO PROSPECT (
	      PROSPECT_NBR,
	      SALESC,
	      FORMN,
	      PROSPECT_TYPE,
	      CATEGORY,
	      SALUTATION,
	      FIRST_NAME,
	      MIDDLE_NAME,
	      LAST_NAME,
	      HOME_PHONE,
	      WORK_PHONE,
	      MOBILE_PHONE,
	      EMAIL,
	      OPENTITY_ID,
	      PLN_ID,
	      ID_TYPE,
	      IDTYPE_NUMBER,
	      EXP_DATE,
	      OCCUPATION,
	      INCOME,
	      LONGITUDE,
	      LATITUDE,
	      processId,
	      actid,
	      FBEDA,
	      FBEDABILLING_IDENTITY,
	      FBEDABILLING_INSTALL,
	      statusep,
	      ISAPPROVAL,
	      CREATED_BY,
	      CREATED_DATE
	    ) VALUES (
	      vProsNBR,
	      pSalesSC2,
	      pFormN,
	      pProspectType,
	      pBrand,
	      pSalutation,
	      pFirstName,
	      pMiddleName,
	      pLastName,
	      pHomePhone,
	      pWorkPhone,
	      pMobilePhone,
	      pEmail,
	      pOpentityId,
	      pPlnId,
	      pIdType,
	      pIdTypeNbr,
	      STR_TO_DATE(pExpDate, '%m-%d-%Y'),
	      pOccupation,
	      pIncome,
	      pLong,
	      pLat,
	      pProcessId,
	      pActid,
	      pFBeda,
	      pFBedaBillIdentity,
	      pFBedaBillInstall,
	      pStatusEP,
	      pIsApproval,
	      pUser,
	      NOW()
	    );
	    /*COMMIT;*/
	    SELECT COUNT(0) INTO po_message FROM PROSPECT WHERE PROSPECT_NBR = vProsNBR;
	    -- SELECT CONCAT('MESS',po_message);
	    IF po_message = 0 THEN
	      ROLLBACK;
	      SET pn_message = 0;
	    ELSE
	      SELECT PROSPECT_ID INTO vProsId FROM PROSPECT WHERE PROSPECT_NBR = vProsNBR LIMIT 1;
	      -- SELECT CONCAT('1',vProsId);
	      INSERT INTO PROSPECT_ADDITIONAL (
		PROSPECT_ID,
		STATUS_HW,
		SGS_NUMBER,
		SGS_NAME,
		GENDER,
		RELIGION,
		PLACE_BIRTH,
		DATE_OF_BIRTH,
		PHONE_NBR,
		HANDPHONE_NBR,
		EC_NAME,
		EC_RELATION,
		EC_PHONE,
		EC_ADDR,
		NIK_SALES,
		NAME_SALES,
		DIFFERENT_CAUSE,
		EMPLOYEE_ID,
		SALES_CODE,
		OFFICE_BRANCH,
		HEAD_BRANCH,
		ENTITY_CODE,
		POS,
		STORE_AREA,
		ID_NUMBER,
		INSTALLATION_DATE,
		INSTALLATION_TIME,
		KET_TTD,
		KET_BEDA_ALAMAT,
		KET_IDENTITAS,
		KET_PEMILIKRUMAH,
		KET_CC,
		KET_TAGIHAN,
		KET_PICKUPDANA,
		INPUT_PICKUPDANA,
		KET_SURATKUASA,
		KET_INSTANSI,
		KET_PERNYATAANSEWA,
		KET_PERNYATAAN_MULTI_PELANGGAN,
		KET_PERNYATAAN_BUNDLE_INTERNET,
		TRANSPORTATION_FEE_FLAG,
		BT_DK_LK,
		BT_BRANCH_OFFICE,
		BT_REGION_OFFICE,
		BT_TRANSPORTATION_FEE,
		CLOSING_DATE,
		VERIFICATION_DATE,
		VERIFICATION_PERIOD,
		CUSTOMER_CLASS,
		CREATED_BY,
		CREATED_DATE
	      ) VALUES (
		vProsId,
		pStatusHw,
		pSgsNumber,
		pSgsName,
		pGender,
		pReligion,
		pPlaceBirth,
		STR_TO_DATE(pDateOfBirth, '%m-%d-%Y'),
		pPhoneNbr,
		pMobilePhone2,
		pEmergencyName,
		pEmergencySibling,
		pEmergencyPhone,
		pEmergencyAddress,
		pSalesNik,
		pSalesName,
		pSalesDiffCause,
		pEmployeeId,
		pSalesCode,
		pSalesOfficeBranch,
		pSalesNameBranchHead,
		pEntityCode,
		pPOS,
		pStoreArea,
		pIdNumber,
		STR_TO_DATE(pInstallDate, '%m-%d-%Y'),
		pInstallTime,
		pKetTtd,
		pKetBedaAlamat,
		pKetIdentitas,
		pPemilikRumah,
		pKetCC,
		pKetTagihan,
		pKetPickupDana,
		pInputPickupDana,
		pKetSuratKuasa,
		pKetInstansi,
		pKetSewa,
		pKetMulti,
		pKetBundle,
		pBtFlag,
		pBtDkLk,
		pBtBranchOffice,
		pBtRegionOffice,
		pBtFee,
		STR_TO_DATE(pClosingDate, '%m-%d-%Y'),
		STR_TO_DATE(pVerifDate, '%m-%d-%Y'),
		pVerifTime,
		pCustClass,
		pUser,
		NOW()
	      );
		  -- SELECT CONCAT('7',vProsId);
	      SELECT COUNT(0) INTO po_message FROM PROSPECT_ADDITIONAL WHERE PROSPECT_ID = vProsId;
	      --  SELECT CONCAT('6',vProsId);
	       
	      IF po_message = 0 THEN
		ROLLBACK;
		SET pn_message = 0;
	      ELSE
	      
		INSERT INTO PROSPECT_ADDRESS (
		  PROSPECT_ID,
		  PROSPECT_ID_ICC,
		  BUILDING_TYPE,
		  BUILDING_STATUS,
		  STREET,
		  PROVINCE,
		  CITY,
		  DISTRICT,
		  SUBDISTRICT,
		  POSTALCODE,
		  COUNTRY,
		  DIRECTION,
		  LANDMARK,
		  HOUSE_NUMBER,
		  RT,
		  RW,
		  INSTALLATION_ADDRESS,
		  INSTALLATION_DIRECTION,
		  INSTALLATION_LANDMARK,
		  INSTALLATION_HOUSE_NUMBER,
		  INSTALLATION_HOUSE_RT,
		  INSTALLATION_HOUSE_RW,
		  INSTALLATION_PROVINCE,
		  INSTALLATION_CITY,
		  INSTALLATION_DISTRICT,
		  INSTALLATION_SUBDISTRICT,
		  INSTALLATION_ZIPCODE,
		  BILLING_ADDRESS,
		  BILLING_DIRECTION,
		  BILLING_LANDMARK,
		  BILLING_HOUSE_NUMBER,
		  BILLING_HOUSE_RT,
		  BILLING_HOUSE_RW,
		  BILLING_PROVINCE,
		  BILLING_CITY,
		  BILLING_DISTRICT,
		  BILLING_SUBDISTRICT,
		  BILLING_ZIPCODE,
		  VALID_ADDR_ID,
		  CREATED_BY,
		  CREATED_DATE
		) VALUES (
		  vProsId,
		  pProspectIdICC,
		  pBuildingType,
		  pBuildingStatus,
		  pStreet,
		  pProvince,
		  pCity,
		  pDistrict,
		  pSubDistrict,
		  pPostalCode,
		  pCountry,
		  pDirection,
		  pLandmark,
		  pHouseNbr,
		  pRT,
		  pRW,
		  pInstallAddress,
		  pInstallDirection,
		  pInstallLandmark,
		  pInstallHouseNbr,
		  pInstallHouseRT,
		  pInstallHouseRW,
		  pInstallProvince,
		  pInstallCity,
		  pInstallDistrict,
		  pInstallSubdistrict,
		  pInstallZipcode,
		  pBillAddress,
		  pBillDirection,
		  pBillLandmark,
		  pBillHouseNbr,
		  pBillHouseRT,
		  pBillHouseRW,
		  pBillProvince,
		  pBillCity,
		  pBillDistrict,
		  pBillSubdistrict,
		  pBillZipcode,
		  pValidAddressId,
		  pUser,
		  NOW()
		);
		-- SELECT CONCAT('5',vProsId);
		SELECT COUNT(0) INTO po_message FROM PROSPECT_ADDRESS WHERE PROSPECT_ID = vProsId;
			-- SELECT CONCAT('4',vProsId);
		
		IF po_message = 0 THEN
		  ROLLBACK;
		  SET pn_message = 0;
		ELSE
		  SELECT F_STR_CNT (pProductId, vDelimiter2) INTO vMaxCnt;
	--    LOOP1 :
	--    WHILE i < vMaxCnt DO SET i = i + 1;
	--    INSERT INTO PROSPECT_PRODUCT (
	--      PROSPECT_ID,
	--      PRODUCT_ID,
	--      PRODUCT_CATEGORY,
	--      PRODUCT_TYPE,
	--      PROSPECT_PRODUCT_INSERT_DATE,
	--      PROSPECT_PRODUCT_INSERT_BY
	--    ) VALUES (
	--      vProsId,
	--      F_GET_SUBSTR (pProductId, vDelimiter2, i),
	--      F_GET_SUBSTR (pProductCategory, vDelimiter2, i),
	--      F_GET_SUBSTR (pProductType, vDelimiter2, i),
	--      NOW(),
	--      pUser
	--    );
	--    END WHILE LOOP1;
		-- SELECT CONCAT('2 ',vProsId);
	    -- ADD PRODUCT
	    CALL PRC_PRODUCTS(
	      vProsId,
	      pProductId,
	      pProductCategory,
	      pProductType,
	      pUser
	    );
	    
		-- SELECT CONCAT('3 ',vProsId);
	   
	   
	   SELECT COUNT(0) INTO po_message FROM PROSPECT_PRODUCT WHERE PROSPECT_ID = vProsId;
	   -- SELECT CONCAT('MESSAGE',po_message);
	   IF po_message = 0 THEN
	     ROLLBACK;
	     SET pn_message = 0;
	   ELSE
	     INSERT INTO PROSPECT_COST (
	       PROSPECT_ID,
	       INSTALLATION_COST,
	       COST_PACKAGE,
	       ALACARTE_COST,
	       INTERNET_COST,
	       BELI_PUTUS_COST,
	       DEC_HD_COST,
	       PROMO_COST,
	       TOTAL_COST,
	       CREATED_BY
	     ) VALUES (
	       vProsId,
	       pInstallCost,
	       pCostPackage,
	       pAlacarteCost,
	       pInternetCost,
	       pBeliPutusCost,
	       pDecHdCost,
	       pPromoCost,
	       pTotalCost,
	       pUser
	     );
	     SELECT COUNT(0) INTO po_message FROM PROSPECT_COST WHERE PROSPECT_ID = vProsId;
	     IF po_message = 0 THEN
	       ROLLBACK;
	       SET pn_message = 0;
	     ELSE
	       INSERT INTO PROSPECT_PAYMENT (
			PAYMENT_DATE,
			PROSPECT_ID,
			PAYMENT_MODE,
			PAYMENT_TYPE,
			CURRENCY_CODE,
			AMOUNT,
			NOTES,
			BANK_ACCOUNT_NO,
			BANK_NAME,
			ACCOUNT_NAME,
			CARD_TYPE,
			CARD_NUMBER,
			EXP_DATE,
			PAYMENT_DIRECT_DEBIT,
			CREATED_BY,
			CREATED_DATE,
			RECEIPT_NBR,
			RECEIPT_DATE
		      ) VALUES (
			STR_TO_DATE(pPaymentDate, '%m-%d-%Y'),
			vProsId,
			pPaymentMode,
			pPaymentType,
			pCurrencyCode,
			pAmount,
			pNotes,
			pBankAccountNo,
			pBankName,
			pAccountName,
			pCardType,
			pCardNumber,
			pCardExpDate,
			pPaymentDirectDebit,
			pUser,
			NOW(),
			pReceiptNbr,
			STR_TO_DATE(vReceiptDate, '%m-%d-%Y')
		      );
		      SELECT COUNT(0) INTO po_message FROM PROSPECT_PAYMENT WHERE PROSPECT_ID = vProsId;
	       IF po_message = 0 THEN
		 ROLLBACK;
		 SET pn_message = 0;
	       ELSE
		 INSERT INTO PROSPECT_PACKAGE_ORDER (
		   PROSPECT_ID,
		   BRAND,
		   STATUS,
		   AVAILABLE_PROMO,
		   BILLING_FREQUENCY,
		   FIRST_PAYMENT,
		   CREATED_BY
		 ) VALUES (
		   vProsId,
		   pBrand,
		   pPackageStatus,
		   pAvailablePromo,
		   pBillFreq,
		   pFirstPayment,
		   pUser
		 );
		 SELECT COUNT(0) INTO po_message FROM PROSPECT_PACKAGE_ORDER WHERE PROSPECT_ID = vProsId;
		 IF po_message = 0 THEN
		   ROLLBACK;
		   SET pn_message = 0;
		 ELSE
		   SET i=0;
		   SELECT F_STR_CNT (pProspectIdMap, vDelimiter2) INTO vMaxCnt;
	    /*JIKA TIDAK ADA PROMO ID MAP*/
		   IF vMaxCnt = 0 THEN
		     INSERT INTO LOG_NOTES_STATUS (
		       LOG_NOTES_STATUS_PROSPECT_NBR,
		       LOG_NOTES_STATUS_UPDATE,
		       LOG_NOTES_STATUS_DESCRIPTION,
		       LOG_NOTES_STATUS_DEPT,
		       LOG_NOTES_STATUS_INSERT_DATE,
		       LOG_NOTES_STATUS_INSERT_BY
		       ) VALUES (
		       vProsNBR,
		       'ENTRY PROSPECT',
		       'EP SAVED',
		       'SALES',
		       NOW(),
		       pUser
		     );
		     SELECT COUNT(0) INTO po_message FROM LOG_NOTES_STATUS WHERE LOG_NOTES_STATUS_PROSPECT_NBR = vProsNBR;
		     IF po_message = 0 THEN
		       ROLLBACK;
		       SET pn_message = 0;
		     ELSE
		       SET pn_message = vProsNBR;
		SET pID = vProsId;
		       COMMIT;
		     END IF;
		   ELSE
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
			 vProsId,
			 F_GET_SUBSTR (pProspectIdMap, vDelimiter2, i),
			 F_GET_SUBSTR (pPromoType, vDelimiter2, i),
			 F_GET_SUBSTR (pDiscPromo, vDelimiter2, i),
			 F_GET_SUBSTR (pAmountPromo, vDelimiter2, i)
		       );
		     END WHILE LOOP2;
		     SELECT COUNT(0) INTO po_message FROM PROSPECT_PROMO WHERE PROSPECT_ID = vProsId;
		     IF po_message = 0 THEN
		       ROLLBACK;
		       SET pn_message = 0;
		     ELSE
		       INSERT INTO LOG_NOTES_STATUS (
			 LOG_NOTES_STATUS_PROSPECT_NBR,
			 LOG_NOTES_STATUS_UPDATE,
			 LOG_NOTES_STATUS_DESCRIPTION,
			 LOG_NOTES_STATUS_DEPT,
			 LOG_NOTES_STATUS_INSERT_DATE,
			 LOG_NOTES_STATUS_INSERT_BY
			 ) VALUES (
			 vProsNBR,
			 'ENTRY PROSPECT',
			 'EP SAVED',
			 'SALES',
			 NOW(),
			 pUser
		       );
		       SELECT COUNT(0) INTO po_message FROM LOG_NOTES_STATUS WHERE LOG_NOTES_STATUS_PROSPECT_NBR = vProsNBR;
		       IF po_message = 0 THEN
			 ROLLBACK;
			 SET pn_message = 0;
		       ELSE
			 SET pn_message = vProsNBR;
			 SET pID = vProsId;
			 COMMIT;
		       END IF;
		     END IF;
		   END IF;
		 END IF;
	       END IF;
		    END IF;
		  END IF;
		END IF;
	      END IF;
	    END IF;
	 END IF;
END$$

DELIMITER ;