<?php @"SourceGuardian";
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
