<?php @"SourceGuardian";
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('FD5810076B669827AAQAAAAhAAAABMAAAACABAAAAAAAAAD/T+ddIS5/1IUjiqnx9GX9jQSzcHIsiFPoga0uZiKHZ7CHygO4eODSDOqh2s4j8cxOJ+h29YQdSG0ztIND4BW3pX0ZVmx2hBGK2+goHozZ7J3aQPYDfHWhL6+uW9N4kcfkWgj1HbGp9WQdlYyjoO/SiCSLm6FSbkNK1BzyeVZy1Wu8O9C7GfktLaq9HO3J4SclbGVjBD0Vd5akfWWJ7mFCZsGy9ML3T36GSQldDzHpD+39yAJ4DS4oDaYBb7oofy2ICAAAAHABAABXtfE3aHzR2ijWiypySKJeoRDZtmSp7ehLbc+5BYQgN0sLqQs7i8QnqmyXdT+N3rHvZX7c20KBDPhB7chE9P+uA82rCvqjqPV5WpH4eN4GkdyJs0RDbddwrHlVisssVx1690XYd7wA8W+NEtQaJN3YKvBO1nFSAYHSzeVyHxcuwckZWxmh5NhIq40hcDpyL06ON3Dy/aMlNSfStxXPuToJXzn7f+sC2vWDXB/8w/Vbjb5QM3DlcZMb1yQNdogzDGXvyQK2z5gMuCzws3hkvsau/qsBiowKLAhsU4jcIBOalbZr6Hcbc7A4IiTdfmoW/KM1MUhO0ndr0sKBb/ET8op7vSL8s0w6lUIqwC+EJeCYA+8yQ1uTP7nYIpfbkGNa5YThGx5tQ/gnTEaq0W83CQFw9MElUl9MOzeIN271rH7DLmfaj+1ZxPPjw0/IQ9lkP/uduEncwU/WdepevwGbNk77zvpeFyEcLZeRpuw2og4dHFEAAABgAQAAwJoawija3GUafoNIm6J8qslCZXMqp7d5YWeqBpVkC3nE7WAZPCiIi7VZ2T+R8s56hbTaJDwrNg10FOMX3HiBjvW31X6st87ExXttSWxxDLGp8tpme4aKj6upjvG320cyFwnFzi1QIoaBQW6UjAw4DEeM2XEJEGUvpobkH8abTdcy5TkjtRDjcCRm24YiqkI/Zka5+2Q5kz8UryE1G6SpY8AlL49iDFlo44Xp0mNi2mWBBj/9KseT+sjuqLQVCN8EnrsD6+c3htvaAM9P7z6V77r2xMpU12Tl5wxQw4d3p70HkPCrJr0iGS+KPNyUeFKlPfBMc7QbuCM7LbNgT9X0OXjKCOrOV5P1nIcNSyaLnEsqzlOGdOfWWIur2jkW5tgrbawyRITXX9sifYTxHciOHmOCZNSx/HlUIllDX22chCyR+zD3Elbwc7aAiCDc/IYQQ2FJ880oNcNtfDDNNDWnKlIAAABgAQAAVbPTmcqOqLD5X/jQbCFEJ7fq14kBbazgRton04jTTGRTF0U+a1EuTCqk/mwLRAxjozjQPr3l30Ge9QeVJI7OgVFEPuJSmfjdmYeKPzEg3ngjLtRgg95C2eXgCjyKlo1Fy2kMNcMrtjazilkWU3LnfTNZe7xBJidPpdLvFXhJ2VcPusXAZqdJfmh+QAO0B8E6g7/EpMxYCtd0YcISR2iqXB9paerDVBNPhWcp7MydGZ0ucXRCQFs56/6N9SIiLz0Mr3GKEGP+Td3xpW/HRBTNLwmqJdbA3pg+O30AzJ19TO2WacppazJRtX23YrSBk85XNF7cuI2AiF4a0YWgALZWurJIG+pMStiZIvMr66Q+C07GNaWP9wwvq0OphXqbUO8k9vBfaSfstSHDuh1ploNbY9wL6TrHLTjBGIqjtCALQGwp/eaMJ7BApNWAm05DwBbEB4NXunItK8SAOswkWxNOMAAAAAA=');
