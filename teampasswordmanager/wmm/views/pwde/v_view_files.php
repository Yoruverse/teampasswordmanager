<?php @"SourceGuardian";
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
