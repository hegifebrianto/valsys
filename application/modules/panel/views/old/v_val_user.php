<?php
/*
 * ***********************************************************
 * * Project Name : Validation User MNC Subscribe			 *
 * * Starting     : 10 September 2013                        *
 * * Version      : 1                                        *
 * * Programmer   : Mochamad Rezki 					         *
 * * File Type    : View                                     *
 * ***********************************************************
 */
?>

<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>public/js/extjs/ux/css/CheckHeader.css" />
<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>public/js/extjs/ux/css/toolbars.css" />
<style>
	.test-lbl-text-align
	{font-weight:bold;color:red;text-align:right;display:block;width:650px;height:15px;}
	.test-lbl-text-align2
	{font-weight:bold;color:blue;text-align:right;display:block;width:650px;height:15px;}
	
	.readonlyText {
    background-image:none;
    background-color:#D0D3D9;
	}
	
</style>
<script type="text/javascript">
base_url = '<?= base_url() ?>';
module_id = '<?= $module_id ?>';

Ext.Loader.setConfig({
	enabled: true,
	paths: {
		'Ext.ux': base_url + 'public/js/extjs/ux'
	}
});


Ext.require(['Ext.ux.CheckColumn', 'Ext.ux.RowExpander',
	'Ext.ux.CheckColumnGroup',
	'Ext.data.*',
	'Ext.grid.*',
	'Ext.tree.*',
	'Ext.toolbar.Paging',
	'Ext.window.Window',
	'Ext.tab.*',
	'Ext.ux.IFrame',
]);

Ext.override(Ext.LoadMask, {
	onHide: function() {
		this.callParent();
	}
});

Ext.QuickTips.init();
Ext.require('Ext.ux.data.PagingMemoryProxy');
Ext.onReady(function() {
		
		Ext.Ajax.request({
			url: '<?= base_url() ?>panel/val_user/isi_duluk',
			method: 'GET',
			success: function(response) {
				var data = Ext.JSON.decode(response.responseText);
				var nama = Ext.getCmp('nama').setValue(data.user_descr);
				var username = Ext.getCmp('username').setValue(data.username);
				var email = Ext.getCmp('email').setValue(data.email);
			}
		});
		
		var Store_Divisi = Ext.create('Ext.data.JsonStore', {
            autoLoad: true,
			remoteSort: true,
            buffered: true,
            pageSize: 2000,
            proxy: {
                type: 'ajax',
                timeout: 300000,
                url: base_url + 'panel/val_user/get_divisi',
                actionMethods: {
                    read: 'POST',
                },
                reader: {
                    type: 'json',
                    root: 'rows',
                    totalProperty: 'results'
                },
            },
            fields: ['DIVISION_ID','DIVISION_DESC']
        });
		
		var Storegraceperiod = Ext.create('Ext.data.JsonStore', {
			pageSize: 2000,
			proxy: {
				type: 'ajax',
				timeout: 300000,
				url: base_url + 'panel/val_user/Grace_period',
				actionMethods: {
					read: 'POST',
				},
				reader: {
					type: 'json',
					root: 'rows',
					totalProperty: 'results'
				},
			},
			fields: ['GRACE_PERIOD'],
			listeners: {
				load: function (store, records, successful, options) {
					ShowButton();
				}
				

			}			
		});
		
		var Store_Dept = Ext.create('Ext.data.JsonStore', {
			autoLoad: true,
            proxy: {
                type: 'ajax',
                timeout: 300000,
                url: base_url + 'panel/val_user/get_dept',
                actionMethods: {
                    read: 'POST',
                },
                reader: {
                    type: 'json',
                    root: 'rows',
                    totalProperty: 'results'
                },
            },
            fields: ['DEPARTMENT_ID','DEPARTMENT_DESC'],
/* 			listeners: {
				beforeload: function(store, operation, options){
					 var  div_id	      = Ext.getCmp('div').getValue()
					store.proxy.extraParams.div_id	= div_id; 
				}
			} */
        });
		
/* 		Store_Dept.on('load', function (store, records, successful, options) {
		var combo = Ext.getCmp('dept');
			if (successful && Ext.typeOf(combo.getPicker().loadMask) !== "boolean") {
				combo.getPicker().loadMask.hide();
			}
		});	 */
		
		var Store_Branch = Ext.create('Ext.data.JsonStore', {
            autoLoad: true,
			remoteSort: true,
            buffered: true,
            pageSize: 2000,
            proxy: {
                type: 'ajax',
                timeout: 300000,
                url: base_url + 'panel/val_user/get_branch',
                actionMethods: {
                    read: 'POST',
                },
                reader: {
                    type: 'json',
                    root: 'rows',
                    totalProperty: 'results'
                },
            },
            fields: ['SEQ_BRANCH','BRANCH']
        });
		
		var Store_Region = Ext.create('Ext.data.JsonStore', {
            autoLoad: true,
			remoteSort: true,
            buffered: true,
            pageSize: 2000,
            proxy: {
                type: 'ajax',
                timeout: 300000,
                url: base_url + 'panel/val_user/get_region',
                actionMethods: {
                    read: 'POST',
                },
                reader: {
                    type: 'json',
                    root: 'rows',
                    totalProperty: 'results'
                },
            },
            fields: ['STATE_CODE','STATE_NAME']
        });
		
		var rowEditing = Ext.create('Ext.grid.plugin.RowEditing', {
			clicksToEdit: 2,
		});

		var msginfo = Ext.create('Ext.form.Panel', {
			url: '',
			title: '',
			border: false,
			labelAlign: 'center',
			id: 'msginfo',
			width: 1928,
			height: 50,
			style: {
				marginLeft: 'auto',
				marginRight: 'auto'
			},
			bodyStyle: 'margin: 10px;',
			hidden: true,
			items: [
				{
					xtype: 'label',
					labelAlign: 'center',
					labelWidth: 1928,
					cls: 'test-lbl-text-align',
					name: 'msginfo1',
					id: 'msginfo1',
				},
			],
			renderTo: Ext.getBody()
		});
		
		function messagelabel(color,msg) {

			Ext.getCmp('msginfo1').setText('<span style="color:'+color+'"></strong>'+msg+'<strong></span>', false);
			msginfo.show();
			window.scrollTo(0, 0);
		}
		
		
		var valid_user = new Ext.FormPanel({
            title:'VALIDATION USER MNC SUBSCRIBE',
            id:'AddNotes',
            frame:true,
			width:350,
			renderTo: Ext.getBody(),
			style: {
				marginLeft: 'auto',
				marginRight: 'auto'
			},		
            items:[
                {	        
                    xtype: 'textfield',
                    id   : 'nama',
                    name : 'nama',
                    fieldLabel: 'NAMA',
					width:320,
                    labelAlign: 'left',
					fieldCls: 'readonlyText',
                    labelWidth: 130,
					readOnly:true,
				},{	        
                    xtype: 'textfield',
                    id   : 'username',
                    name : 'username',
                    fieldLabel: 'USERNAME',
					width:320,
					fieldCls: 'readonlyText',
                    labelAlign: 'left',
                    labelWidth: 130,
					readOnly:true,
                },{	        
                    xtype: 'textfield',
                    id   : 'nik',
                    name : 'nik',
					emptyText: "Masukkan NIK Dengan Benar",
                    fieldLabel: 'NIK',
					width:320,
                    labelAlign: 'left',
                    labelWidth: 130,
					allowBlank:false,
					listeners: //for call the event of the control
					{
						change: //here call the select event of combo
						{
							fn: function(text, value)//here combo means cmbCountry
							{
								if (value.length >9 ) {
									cek_divisi(value);

								}
							}
						}
					}				
                },{	        
                    xtype: 'datefield',
                    id   : 'birth',
                    name : 'birth',
					emptyText: "Input Sesuai Data Anda",
                    fieldLabel: 'DATE BIRTH',
					width:320,
                    labelAlign: 'left',
                    labelWidth: 130,
					allowBlank:false,
					format: 'd/m/Y',
					submitFormat: 'd/m/Y',
                },{	        
                    xtype:'combobox',
                    width:320,
                    labelAlign: 'left',
                    labelWidth: 130,
                    fieldLabel:'DIVISI',
                    id:'div',
                    name:'div',
                    store:Store_Divisi,
                    allowBlank:true,
                    displayField:'DIVISION_DESC',
                    valueField:'DIVISION_ID',
					readOnly:true,
/*                     listeners: {
						change: function(){
							Store_Dept.load();
							Ext.getCmp('dept').setValue('');
							Ext.getCmp('dept').enable();
						}
					} */
                },{	        
                    xtype:'combobox',
                    width:320,
                    labelAlign: 'left',
                    labelWidth: 130,
                    fieldLabel:'DEPARTEMEN',
                    id:'dept',
                    name:'dept',
                    store:Store_Dept,
                    allowBlank:true,
					readOnly:true,
                    displayField:'DEPARTMENT_DESC',
                    valueField:'DEPARTMENT_ID',
                },{	        
                    xtype:'combobox',
                    width:320,
                    labelAlign: 'left',
                    labelWidth: 130,
                    fieldLabel:'BRANCH',
                    id:'branch',
                    name:'branch',
					queryMode:'local',
                    store:Store_Branch,
                    allowBlank:false,
                    displayField:'BRANCH',
                    valueField:'SEQ_BRANCH',
                },{	        
                    xtype:'combobox',
                    width:320,
                    labelAlign: 'left',
                    labelWidth: 130,
                    fieldLabel:'REGION',
                    id:'region',
                    name:'region',
					queryMode:'local',
                    store:Store_Region,
                    allowBlank:false,
                    displayField:'STATE_NAME',
                    valueField:'STATE_CODE',
                },{	        
                    xtype: 'textfield',
                    id   : 'email',
                    name : 'email',
                    fieldLabel: 'E-MAIL',
					width:320,
                    labelAlign: 'left',
                    labelWidth: 130,
					readOnly:false,
                }
            ],
            buttons:[{ 
                text:'Approval Print',
                id:'btnprint',
				width:100,
				labelAlign: 'right',
                margin:'0 3 0 0',
                handler: appr_print
            },{ 
                text:'Guidelines',
                id:'btnguide',
				labelAlign: 'right',
                margin:'0 3 0 0',
                handler: guide_print
            },{ 
                text:'Save & Continue',
                id:'btnsave', 
				labelAlign: 'left',
                margin:'0 3 0 0',
                handler: SaveNotes
            },
		{ 
                text:'Logout',
                id:'btnlogout',
		  width:70, 
		 labelAlign: 'left',
                margin:'0 0 0 0',
                handler: function () {
			location.href= '<?= base_url()?>'+'auth/logout/';
		  }
            }]
        });
		
		
		
		var perhatian = new Ext.FormPanel({
			width:450,
			height:190,
			renderTo: Ext.getBody(),
			bodyStyle: 'margin: 30px;',
			style: {
				marginLeft: 'auto',
				marginRight: 'auto'
			},
			items: [{
				xtype: 'displayfield',
				name: 'home_score',
				fieldLabel: 'PERHATIAN',
				labelStyle: 'font-weight:bold;',
			}, {
				xtype: 'displayfield',
				name: 'visitor_score',
				value: 'Silahkan masukkan data anda sesuai dengan data HRD untuk melanjutkan proses login ke MNC Subscribe.'
			}, {
				xtype: 'displayfield',
				name: 'visitor_score',
				value: 'Apabila tidak bisa login, silahkan memilih opsi "Approval Print" untuk mengajukan Form Aplikasi Approval User MNC Subscriber kepada / Kepala Cabang/ Branch Office dan IT Security Management.'
			}]			
		});
		
			var security_awareness = new Ext.FormPanel({
			width:750,
			height:175, //untuk memperbesar size kebawah jika terdapat tambahan optionnya 
			renderTo: Ext.getBody(),
			bodyStyle: 'margin: 5px;',
			style: {
				marginLeft: 'auto',
				marginRight: 'auto'
			},
			items: [{
				xtype: 'displayfield',
				name: 'secure_score',
				fieldLabel: 'Security Awareness',
				labelStyle: 'margin-right:5px;width:200px;font-weight:bold;',
			}, {
				xtype: 'displayfield',
				name: 'visitor_secure',
				value: 	'- Ganti Password Anda secara berkala & segera ganti Password default yang diberikan oleh Admin IT agar tidak dapat dipergunakan oleh orang lain.',			
			}, {
				xtype: 'displayfield',
				name: 'visitor_secure',
				value: 	'- Jangan memberitahukan Password Anda kepada orang lain, meskipun kepada atasan ataupun Admin IT.',			
			}, {
				xtype: 'displayfield',
				name: 'visitor_secure',
				value: 	'- Jangan menuliskan Password Anda dan menempelkannya sebagai pengingat.',			
			}, {
				xtype: 'displayfield',
				name: 'visitor_secure',
				value: 	'- Simpan Password yang Anda miliki dengan pengamanan yang baik.',			
			}, {
				xtype: 'displayfield',
				name: 'visitor_secure',
				value: 	'- Jika mengalami kesulitan dalam melakukan penggantian Password, silakan menghubungi App Support atau IT Security Management',			
			}, ]			
		});

		 
		
		function ShowButton()
		{
			var nik = Ext.getCmp('nik').getValue();
			var birth = Ext.getCmp('birth').rawValue();
			var email = Ext.getCmp('email').getValue();
			var btn_lan = Ext.getCmp('btn_lan');
			var x = 1;
			
			btn_lan.hide();
			
					
			Storegraceperiod.each( function (model) {
				grace_period = model.get('GRACE_PERIOD');
				if (x == 1 ) {
					if (grace_period=='A') { btn_lan.show(); }
					
					btn_lan.setText(grace_period);
					Ext.getCmp('btn_lan').setValue(grace_period);
				} 
				x=x+1;
			}); 

		} 
		
		function appr_print() {
			Ext.getCmp('btnprint').disable();
			var nama = Ext.getCmp('nama').getValue();
			var username = Ext.getCmp('username').getValue();
			var email = Ext.getCmp('email').getValue();
			var nik = Ext.getCmp('nik').getValue();
			var birth = Ext.getCmp('birth').rawValue;
			var div = Ext.getCmp('div').getValue();
			var dept = Ext.getCmp('dept').getValue();
			var branch = Ext.getCmp('branch').getValue();
			var region = Ext.getCmp('region').getValue();
			
			if(nik == '' || birth == '' || div == '' || dept == '' || branch == '' || region == '' || nik == null || birth == null || div == null || dept == null || branch == null || region == null){
				
				messagelabel("red","Field cannot empty !");
				Ext.getCmp('btnprint').enable();
				
			}else{ 
				link = base_url + 'panel/val_user/print_pdf?nik=' + nik+ '&nama=' + nama + '&username=' + username + '&email=' + email + '&div=' + div+ '&dept=' + dept + '&branch=' + branch + '&region=' + region;
				window.open(link, '_blank');
				Ext.getCmp('btnprint').enable();
			}
			
		}

		function guide_print() {
				link = base_url + 'asset/appsupport/User_Registration.pdf';
				window.open(link, '_blank');
				Ext.getCmp('btnguide').enable();
		}
		
		
	
		function Lanjutmenu() {
				var nik = Ext.getCmp('nik').getValue();
				var birth = Ext.getCmp('birth').rawValue;
				var email = Ext.getCmp('email').getValue();
				
				if (nik == ''|| birth == ''|| email == ''){
				Ext.getCmp('btn_lan').enable();
				}else{
				Ext.Ajax.request ({
					url: '<?=base_url()?>panel/val_user/lanjut',
					method: 'POST',
					params: {nik:nik, birth:birth, email:email},
					success: function(response) {
						var result = Ext.JSON.decode(response.responseText);
						var day_left = result.day_left;
						/*if (result.success) {
							window.location.href = '<?=base_url()?>';
						} else {
							messagelabel("red",msgse);
						}
						Ext.getCmp('btn_lan').enable(); */
						if (day_left > 0 ) {
							Ext.MessageBox.show({
								title: 'Icon Support',
								msg: 'You have only '+day_left+' day(s) left',
								buttons: Ext.MessageBox.OKCANCEL,
								icon: Ext.MessageBox.WARNING,
								fn: function(btn){
									if(btn == 'ok'){
										window.location.replace(base_url+'?valid=1');
									} else {
										return;
									}
								}
							});
						} else {
							Ext.MessageBox.show({
								title: 'Icon Support',
								msg: 'Your trial period is expired',
								buttons: Ext.MessageBox.OK,
								icon: Ext.MessageBox.WARNING,
							});							
						}

					}
				});
				 
				
		}
	}
		
		function SaveNotes() {
			Ext.getCmp('btnsave').disable();
			var nama = Ext.getCmp('nama').getValue();
			var email = Ext.getCmp('email').getValue();
			var nik = Ext.getCmp('nik').getValue();
			var birth = Ext.getCmp('birth').rawValue;
			var div = Ext.getCmp('div').getValue();
			var dept = Ext.getCmp('dept').getValue();
			var branch = Ext.getCmp('branch').getValue();
			var region = Ext.getCmp('region').getValue();
			var btn_lan = Ext.getCmp('btn_lan');
			
			if(nik == '' || email == '' || birth == '' || div == '' || dept == '' || branch == '' || region == '' || nik == null || email == null|| birth == null || div == null || dept == null || branch == null || region == null){
				
				messagelabel("red","Field cannot empty !");
				Ext.getCmp('btnsave').enable();
				
			}else{ 
				Ext.Ajax.request({
					url:'<?=base_url()?>panel/val_user/process',
					method:'POST',
					params:{nik:nik, birth:birth, nama:nama, div:div, dept:dept, branch:branch, region:region, email:email},
					
					success: function(response) {
						var result = Ext.JSON.decode(response.responseText);
						msgse = result.errors.reason;
						//console.log(msgse);
						if (result.success) {
							window.location.href = '<?=base_url()?>';
							
							
							var email = Ext.getCmp('email').getValue();
							//msgse = result.errors.reason;
							if (email == '' || email == null){
							}else{	
							Ext.Ajax.request({
							url:'<?=base_url()?>panel/val_user/send_mail',
							method:'POST',
							params:{email:email},
							
							success: function(response) {
								//var result2 = Ext.JSON.decode(response.responseText);
								//msgse2 = result2.errors.reason;
								if (result.success){
								}
							  }	
							});
							} 
						}else {
							messagelabel("red",msgse);
							//btn_lan.show();
							 Lanjutmenu();
						}
						Ext.getCmp('btnsave').enable();
					}
					
				});
			}
	//		ShowButton();
			
		}
		
		function cek_divisi(nik) {
			Ext.Ajax.request({
			url: '<?= base_url() ?>panel/val_user/cek_div',
			method: 'GET',
			params:{nik:nik},
			success: function(response) {
				var data = Ext.JSON.decode(response.responseText);
				Ext.getCmp('div').setValue(data.division_id);
				 Ext.getCmp('dept').setValue(data.department_id);
				//var email = Ext.getCmp('email').setValue(data.email);
			}
		});
			
		}
		
		function boxSounding(btitle, bmsg, btype) {
			return Ext.Msg.show({title: btitle, msg: bmsg, minWidth: 200, modal: true, icon: (btype == 1 ? Ext.Msg.INFO : Ext.Msg.ERROR), buttons: Ext.Msg.OK});
		}

	}
);

</script>