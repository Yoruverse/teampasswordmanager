<?php @"SourceGuardian";
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
