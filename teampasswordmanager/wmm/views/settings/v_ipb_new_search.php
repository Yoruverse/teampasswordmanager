<?php @"SourceGuardian";
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
