<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

/*
| -------------------------------------------------------------------
| DX Auth Config
| -------------------------------------------------------------------
*/


/**
 * @package         Auth_AD
 * @subpackage      configuration
 * @author          Mark Kathmann <mark@stackedbits.com>
 * @version         0.4
 * @link            http://www.stackedbits.com/
 * @license         GNU Lesser General Public License (LGPL)
 * @copyright       Copyright © 2013 Mark Kathmann <mark@stackedbits.com>
 */
 
// hosts: an array of AD servers (usually domain controllers) to use for authentication		
$config['hosts'] = array('192.168.177.73');
// ports: an array containing the remote port number to connect to (default is 389) 
$config['ports'] = array(389);
// base_dn: the base DN of your Active Directory domain
$config['base_dn'] = 'DC=mskydev1,DC=local';
// ad_domain: the domain name to prepend (versions prior to Windows 2000) or append (Windows 2000 and up)
$config['ad_domain'] = 'mskydev1.local';
// start_ou: the DN of the OU you want to start searching from. Leave empty to start from domain root.
// examples: 'OU=Users' or 'OU=Corporate,OU=Users'
$config['start_ou'] = '';
// proxy_user: the (distinguished) username of the user that does the querying (AD generally does not allow anonymous binds) 
$config['proxy_user'] = 'valsys@mskydev1.local';
// proxy pass: the password for the proxy_user
$config['proxy_pass'] = 'Msky@2017';
