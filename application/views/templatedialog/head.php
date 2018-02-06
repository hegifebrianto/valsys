<?
   $moduletitle = ucwords(str_replace('_',' ',$this->router->fetch_module().' - '.$this ->router->fetch_class()));

      $g_page_state=str_replace(' ','',strtolower($moduletitle));
      
   $username = $this->session->userdata['user_name'];
   $user_id = $this->session->userdata['user_id'];
   $user_descr = $this->session->userdata['user_descr'];
   $g_page_state = $this->session->userdata['g_page_state'];
   $g_customer_nbr = $this->session->userdata['g_customer_nbr'];

?>
<!DOCTYPE html>
<html lang="en-GB">
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <link rel="shortcut icon" href="<?=base_url();?>public/images/favicon.gif" />
   <title><?=$moduletitle;?></title>
   
   <!-- Ext JS -->
   <script type="text/javascript" src="<?=base_url();?>public/js/extjs/bootstrap.js"></script>
   
   <!-- Ext CSS -->
   <link rel="stylesheet" type="text/css" href="<?=base_url();?>public/js/extjs/resources/css/ext-all.css" />
   
   <script type="text/javascript">
         // FIX window href action issue here
         /*   if (top.location.href != '<?=base_url()?>panel')
               {
                  top.location.href = '<?=base_url()?>panel'
               };  */
      var g_customer_nbr = '<?=$g_customer_nbr?>';
      var g_page_state = '<?=$g_page_state;?>';
      
      var gUser_id = '<?=$user_id?>';
      var gUsername = '<?=$username?>';
      
      var gServerTime = '';

   </script>
   
</head>
<body>

