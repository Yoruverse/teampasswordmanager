<?php @"SourceGuardian";
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
