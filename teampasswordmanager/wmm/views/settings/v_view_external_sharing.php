<?php @"SourceGuardian";
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
