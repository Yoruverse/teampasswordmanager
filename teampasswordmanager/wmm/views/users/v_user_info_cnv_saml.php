<?php @"SourceGuardian";
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
