<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Helper for SQL queries
 * 
 * 
 */ 
   if (!function_exists('generate_limit_sql')){

      function generate_limit_sql($sql, $count, $offset = 0)
      {
         $minrow = $offset + 1;
         $maxrow = $offset + $count;
    
         $count = intval($count);
         if ($count <= 0) {
            throw new Exception("LIMIT argument count=$count is not valid");
         }
    
         $offset = intval($offset);
         if ($offset < 0) {
            throw new Exception("LIMIT argument offset=$offset is not valid");
         }
    
         $limit_sql = "SELECT z2.*
            FROM (
                SELECT z1.*, ROWNUM AS \"DB_ROWNUM\"
                FROM (
                    " . $sql . "
                ) z1
            ) z2
            WHERE z2.\"DB_ROWNUM\" BETWEEN $minrow AND $maxrow";    
            
         return $limit_sql;
      }
   }
