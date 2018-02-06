<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

   if (!function_exists('base_imgpath')){

      function base_imgpath(){
         return $config['base_imgdir'];

      }
   }

   if (!function_exists('base_jsdir')){
      
      function base_jspath(){
         return $this->config->item('base_jsdir');

      }
   }

   if (!function_exists('base_cssdir')){
      
      function base_csspath(){
         return $this->config->item('base_cssdir');

      }
   }