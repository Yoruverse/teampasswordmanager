<?php @"SourceGuardian";
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('FD5810076B669827AAQAAAAhAAAABMAAAACABAAAAAAAAAD/T+ddIS5/1IUjiqnx9GX9jQSzcHIsiFPoga0uZiKHZ7CHygO4eODSDOqh2s4j8cxOJ+h29YQdSG0ztIND4BW3pX0ZVmx2hBGK2+goHozZ7J3aQPYDfHWhL6+uW9N4kcfkWgj1HbGp9WQdlYyjoO/SiCSLm6FSbkNK1BzyeVZy1Wu8O9C7GfktLaq9HO3J4SclbGVjBD0Vd5akfWWJ7mFCZsGy9ML3T36GSQldDzHpD+39yAJ4DS4oDaYBb7oofy2ICAAAAGAIAAAdW8AHo8yX4I+YWuk7PeTiiy79Mvxam2FOq1Z8gM7LmbGGu9EVONeMNG5B6A7qRXZpdv2kXZWscoeyD9ezDDxyx9fOdbKgAYIOjZ+ojJNpRSaTkvr9YWb00XAstEoNuE2FtJPwpYJBgoZqc57GMSAg5fc7voWluRA3SgUk/TKc6tMS2Oo+1KAPnNaHPGFhcHHFWqTwiQgRncfVesl2P97zdgmQ/fdDR1bHD0CyPojCkXiTogvRJZh5sVmhv7MtS/K1IBYVhwv7YJDNSuP0/e4/OQgeY31aSoyKXxCIVjbFqmfa9xtU/P7Z2Uv2w+oMl8HN0bpjeiaAtnrUU3UT94dKZtg8BK4s8+r8HxS/MmMbXiVSTI9rtzgg8VLcBAqvw9MMKAt+7DNMgbhw7K58JkPSTEZ31508e4Evtxn/YMpZMwiM+ESb0uzAnbBrTpDqIkoS6l6z8E9tB9Mr6WaqGOi9I62omw6sbx1Dt7eAp2M2Zk9eKo9MLGF3OazMzTNtgOM+kP7rDlITaVylGnL0UFcWJOpZLvFKXG2oR11reb7cCAvO7F0bk/j63YouwKtDaOmZ1XVeRSKFMoAlpEe7UzauwXPrtENzI6dHakkA2gEk1Zh6326rSt8gIpygO/93ElwLJo8wiu19jHCr9nDhawFU3j8OnrjkOAhYog+oZNAopAZnIB/9cN6GD/TlRfTyassdKllttKj9kzFPnZTP9AFresZvYCptQJc8mAPxWgt2cWuiTc6tSS7rC0mS4FOlL2hemABUjuOSQdz/1IhPDhT1RUHl6hG8RPzadY//ulUo2ewW9sHyWw2d6p5ovjq8AnKQfHdpUamvAcPiPuIJpIaBIIOxRU13Bt4vLYSJTUrrRNPpYd0HT0AEsKzqBRqlbsCy1oitudiuquFPxFayiCL2wzQmCze9xClA1nT3NqWYncVihFd6oc4ewpMD4wP/z5sOMnljhQR3m7II11RHUfx4K+d7mxp6czV5pCAsh2U780t0rq/N7AcGrwvmsUrGYoxUdH/hy4nhDy4mUFmzeC7gZtb/tYavhIzJ785vofe/vhHKSNy8Xu/1jbA7+qeM9eE8Fgl2XkW7hO51oqehRXAWvPBmIPVBovtp3W/Mm9cMMcjdHmwtYh4NOXdjxNI7dSn7fpL7UI8l9XzF5tTFfgqWbp+0MUavF8sqvtHNkFjnvuos1g1USBahjBIadfuosd3z/HzjtmDh9qdmD2JOJUedJSwyZw7rAE1UhnuTPI+H4OuIZGYHaDdjKPtgqhDgcmsohjO9alN51tu9BdjynLtTO4Bf1AOKtMSL9S2bbYLxEfl5l3teKAsReAMg8dj+2Z5jJ7H5oFj6tSxKSRJ/OKhA9nqMeIr13ca+6E3kcsOxju//KSi/iBSYae84Xj4gR+jQOlxxBsC6cg2N8MTT4jIFv4xIl1SVfmAyS4LK6clrpCM1nMbiIzz+5kcCx7QeOCOb2S5HQoj6/Gvg76VMxL+a9sXQTXccwOK1iQBITuQOd0Qf+yviMWmFJGAviLwy86MIKmnKJYQd2+1bGsMrCrvAubCS/eCc2yyW9rBb6ubkTQTI6IkeCkF4ddx/CjMWVbfQHUi9HRXL7379MQze0zCilqu0ag8yxaBvlJ5TVoICyjYKVDRsULza9jgS9axFb5fFSFJoFdodcd0KqDo7/twN8R4ZHu+vqEbzmYmmov1nHhPmDtm9kmnP6eQrmMmtAJSQ8P61julfbsMCxDeqD7HDO/aICTw1MADu85LQ/rPrc69S+8KGI50eWWxNmRGChCd53h34qvGiKTwLegooZa4bgYyrjgNmB7xUzeIFGY9z2sHuNtLLyPE4vlJcEDJHxUXAdAVYUolerekTG1HFxy+Z+SllJjkqQG6hGiLHA00TaGuY7z4yw7Ce9aETWzFSunrXcOeD0Hyrq0eUFrW4nUSLEnKuj9iMDLmniqZvdZUCf/Ta0Njg+0pQPixfpCAx2tc1MCYH/kr/UCb0udSpkl6jWe3y9w25KADNQGVSyDucnjHXh0QrL0z0v5MS2i17fXOQWWpSi7A+jbYGN8xUPSTgSQ3besLKNhO5p0u8X7DpsiTfOuTYmjXDo+NL1P7mM9W2p7xnxvDNCym6Rakh9a72l4DMhkL+tUH9d/XaYsVkZjaWPTRxyNRSdV93IJLDP/quqMStRhyFgQlQbaUtePgfnyE4on3d7EXxcXePq3NKn5HsEnid5GC3gOcYAWyY6W6coBbxv5IzRn/Vl0/fn/8gdeIumnU0EWfD2tHn2kFQCt/QSsmlYMxbnIduk/1o5s8eEZHJBV9YPCIlNazBS3nLUeRNkvMcQKKfQ6ESFqSzpPUiYnnKrEGDXwNQh6W8+EdwOpmjDAS2bnW/QqOzYEu78B5S4A0dRfcMOvJYXAXEjwQMAWockMB8IhviRns5ERr/uzVYqxkKECDzcDn5NW8wMRrf++cVWvSNmNfvHgA+WNwXx8Z/a/74U7pRMMo79Ob7l89N0R9tfJYmcggzvSGqo+dQUUpVG3q/gDBPi6GGI5ToRCDq3HeiLiBTD4UyWCnB+besRmpVwiFufjyGnaLHZIJdRrB2y67wYFnmL9JL4Vy30NDiFwAgcsBqStj4Tmtvi0pKrQn3NHkfrcf0mnK7kO+pkbkWgoC+l+fChnOhtEo2Oy2Osne5WllpsLssouIN27nlYz9wXeHUnDRUN3u3pK1I3LL563muh04/8xC544Tjo4AYGuR9G/J7hvbh2gHQkC+u6gB2bCxQ5AuOtICnEjLckRVnUHkF9WSU0VJj8gD4iKN/M/2Gw3rKx9VZPPt0roId7iFkyAVyYLUI02xJtuaJLRFg5ZlZCtJcOiiuO1EAAAB4CAAA5NufjuNgPGpmjIxi6QBy9j6bm0leblV57TRWEcshwiOAbohU0sEQxYXisDlGlo0Z4Rrnuf46hl9eiyME4u4WdDRFNCDnEkHRATU+80pO0PAFbjcfN4fXghI3WrWEvu6QIpfYlVN/mqav4Hh/oSf8BVE9objG6MzgXSAnuBhzQq2cRWu/pDVlu3wjwBtSmd8QQy+eh0hlN8LMnWotECiiryCbTOmq4TYoF2vVQ6UAWpUOtk2YL1rH92o4eqvcQSGO54p8gLOHvRr/eWp0BXFYsftk9e0gkIfrJ1zt2QyB1tARo6ZtTYuMxvM07zEuVBDHOwhzV6EB/sbOlPyI+gM7Y8LWkGZ4JW75RAxaV1xId7JGMRnVw5+lXC8lSu6rtVeWy2v94cYe2Z81Kly2m3sfTmVjq0CO1a4WAFYnsRkZSztg75SaLvEQP2YXzOJ8BJETLO0JRfqtaY5XfSgi5YGJd0wA9TA9gpCdhFfvd24ASKi/9vyGQgPJi4mqmWEdEpk2HbIcrZmOWHUjLDRkDsSek2zMTCWKlnz/kd+6HnA0RKxGMIF2ylX2RmF89zpfgoS3p93HA1c95qVGVID7Z8b2vKeaQiPreQjlXenuS7NmakF0LPdDTC2u4+l1qiKAQgd4lqVN++JKsQbfyoIVWrvH8W2O2/8JGYx9PREMnXnT8VBaJgGwfD17l7UYsxZsD9GhjcnzSomTP2YO/bqmz44EPbij1yDhiecTgXVUKgMs0QhPySuscp7ZLt1RUN9NLaAGSgQDFYLFiK+KZeHR2CnChHV7Gl2q7tJvJ9gmnUA6bUxliJ3JE5+9c/Z+7QIca6aljJsOqsZ5hiNg1r0ugBBjc/piJmY80xywt2CtNo2wit7B0GP2m6AX06RMsD42JnBysxIDh16UynezqWIoxloTWJB+P2agI6f11rb8l0vCMPHhVtd63rbdWkFFBjT0Zp6334o/NJQBdXfrQXwVTJn3y8sZsEg426DAslAl+NMFfE82bfX5VBhxIpT3tGswHHYPoqQpmJiQ91ExbCYtgl5nyUGkdiayLMYJ3lGLoGxq+0/Jr/EICVLvJKVNCcKS9C1ayChjl+u6itDLKvAmb6ozI+8MlUl8u2XVMm1TPx9Lv0tMeyh9psvUWaty4tkA8IXS5jjU+0Xb5T7Nv9rnH5uMyRdVTOtJk75E/UImMeh+UnJhcvqZhvBY9w6YwycU2AADnZ2UmBKzAKDI6yBVS6ofa7WROmuKzYEMba54xQgi17fNDBmztS3U+ODcLWSOtwdtnUOzmQMCKZNQ+dEqN7HW8+9rtOe26zy9l1UX/pizCcI1dXEBNBMbzocsP2Llr33F3F//XjpI3kP2jK4rGNBuOSUl8BU5FY/Hsdvjtmiko54tOJy6dv7aQ5Guoxo5cCReP7RMYOBn0ogWHTduj04YEz4ot0ovg4/gWgAe5bEBnxYXmN7bpcDF0k2jXV0eT8FT9PG1VUmDiFY2FKsI5iApIxepMHhIMlYASDGWH6bQqPDVapUgVZUAn6icZ08pZKZZeNoZ+iGpwo9SWx7ijUUr/AM1XaailqZs3KVgDxT6N1c2DUGQeVhXyUCVUgLhm+xrhidRaK+IOZW5eXHsiyoD2+0ZGS39n/RDUAktc8Ap250k/Xwm0CAeHZzXuGDxC57gWJsPjI6syd8rnkQbtzAHCaLxTKqoP8sOqyfx+E3pKxzX2qzmSIEB5A1OU1ix1qEo5LenM8tpaY0bbG4YxCWewd2DiH2ya8MlsAfdynDZNghTcYyFXLtXqAp9v2T1ZRezZHANkybedIdIJb/jzoHqqtt0FS21HGuZ//eGO2YIs8oQmbJ2PTmCwUXAI25cxeW3IKnfNhbnaP2XmaWjPWVjptqrBfn3pubcCptex7KpiQhPzzLvpQdmwfKgtQdw85pTd0UJEpPRPYEyrMfhD4B/olqdkd/T0cjw4mjebpzpzZ0KLcHnOyWjqgNwAbgWseiu4fprKJXBHrmcH6T8FnPwyuRt9blr+c85qLmjePpyPiwajrSAh3eW/SjQdSCgw1W0DbvIe26wngtR4Sij4s+6KFr2rI3mGI3aRFc5XDMV7abRTO+0+1y+BmgHy4Yw4DkdlrMQjTPAwvRDjip4WjunFP/Dy5AKPV9hVCJoky4626fTSlHsEk3pYfp6IIiLHjofkL3hkA435ai2TTMocC3Jii0+g9r3wQuaYBL2GrS69Om8pyoxOoSZ6bsaa3q96JN+vdBjqxvDEAwcAgu8AiBbLCTS4Gwo5hsHG93JqULmPbs0sTYWl1w4WJgwMATQmYwds6Md5FsEvceJ1rMG3sxoqSJVyES0MIQVeWZLEKdtnO3JY4JjW5+4MIDzTTgXcT465n+S2tthJ4+oPZ9CM5qgybh5le0ZVICLDFBfxivlZhV8jdriijnXfQpkQrZFoEwU1mlbOsFnWP0QVITPWHGnbF0wOEXVTA8j/KxIxBqso3mGeJSXYWcYbM6jv6BYWy/DasoPlLxcWtVwW8T1yqFhu95e/MK7c1EmuiHK6Av8e5sDsnYilzovkjv3iRo+q3OKTj/0H/zZFICFx22l2Nvd880eZ3aWjLWguebM6cMXe/HCkE22UTE1Ra1oNrQMGhp9XtSOmc6WrWIHzY5NxvSpcI0WR9xu/d7soM/a7N8ShujHbpW1F6bTw3zG8bum3Id/a2OoIWkDq+7akeygFMfrqqDFFRrrfbOWEPbC98NBvpRlmlwSiWaH8+qaC0LVZViSW/xAelumyUQo7pP24C+mBEIrwmsgZtsLRnhCsQLjCCVRMVu4rHL16JEHG9oi1tAaJAC9yW2sw7qXqFjNWZcDXVPqJW+EnyP65abuNqFBYMGWeZbjt2EV2+ugQFileflf1uAuSj4qzRJSAAAAaAgAAE3uBHQZ+IpIKCBTR6120+Yk/joDrkpPpSJfHVkB5BmEsShPb8uP0snj4Dqg8Jsfbn6BjsAnTTcBou812g0RLiCVgQGpe5O81+eaahyuCVXTg7RbPwxjvNypUM3iJIBfpVmW9dNoMIt245QNToYse487txZet9mnh426q3JcbKtiQ1RbrNRxtRjV1i37mgqV+zx4MQPLpB8ToWaHxfHhMrX7u6e/DqVNCIOmjAFZUitTV5Wp+0MgjapJZixlS73lscJjjiOAi+U6m3wWj4tdVtTjJ8lPJ6Nx22jse8W5QCtS1fp4dYOTaG6rD4zPdNrPf56Pb7KhMd1MCDYqPCJz1scQ33/mpq+HDWMdFLb8zTlG6fgLk5K1IM5iNUOne+lzHEuIdC5529LcmqKJfSe3f6kiwRSqQmCfS97MU4S/5pGIi5nTjWiStdccOlFUV+9ZplSsV9YnBfT3yt1jGkjZPKaWJG5lagqTF7qJ+LfJASgn6qpfXyTSZNj8BBZ7lGsvvZw5wQsl6Nmh0posfB6bkHGW6OJwKumsAwO2vCl/fDfmBj4//ohyVVDK+jYzLE2UTgMpII6D6/EQpcdCIa6XagudmquY8KPW+Fvzpi3GLYPO3x9Dni7FIoYovcpmjnUpyL/ApJw1PZcyPxKCfUo19O0+chEzko+weuX3jBb+isbsiy6kq35if1JzLZCbJlC78pa/HNLt999qxvby5DugPUp3krQ0PEmIZjT35oCgYTdv755T7vAt/tBmm1a33tBqpWDOvlBVJ4RYjYqlwauKRSI5Z1m2uoff+4kkVv4QW80HuKM762kBz5KYy8BQ12yiJHiNYiLNfmy7P37HmJx1AkENzZNs/aCnENcF18PK8y+ja/wC2MzNsXaTHdwYEb100oGxqP23/v22jH8nkP2BzaGzNp4cxlR+BlhnFYAajO3OB5FH888CovA5L8I4Z//HqCmPTzSLZ6xl9GLV3CfOfCAOX/B9meYddeA4H2VK4jMufI1vbsIZcPVfy8WcYr30XYDSTh+DRspO/HThaMrvEQvLYMffkukC3h/kxwRkaNHw9mUZoXFKSE2B4Da79TPIQlS6ovDjOn61iqFHDFemp8e3+HBL1ObqFBDbOU7E3srU5T3Mmw0t2lqjsFXh7MAz/1OyUifWTk87TRsQ7IiR6inrHzTSXGm7EH6dqrDcR6cnRdg7gWNna8kKGKf9Ea8F1UhFDc2ba6KsfbyLJCWLOVmh+gpO65MifmW+aiNH4J6YWgte2gwkwASaEfasZ+oOC7LVWVY4sZAn9kxFJFa4dDIQB2dlYbWQ6S6PtRid60A6vLjQlhgli67Q/HZY6lY2tuzA6tz7ZIxevbOXbEtc99sWD7HjqmGDMqHh4B0HPH/gAtqAg8iN0sRbTo6oOoi8F57byKlsZTWiJMG2pzsIEqkEuFUD+2grzzVXzFxsavBmXQlzq4wB78KhYS6BhHmZweoAiyOV5kuNfWZwQCfI/YvTnxiilIQoV/issH/0lK2DntY7j1go4Mm1139ZMSFltztOkbzxnTUZ1LOEPierIm4v9CG67fBrx7YOjgaRAAz9EheddKI4RMIi10srXAkHVoA0RvUlnuRTPsiziQhqV4UAG+Z44+eiVB9H43v0DmUHKB3BrsA6jolleSwF78Nww0sC4uGIfYKQKazNFHZ4yuLfoEuWp6p2S3xS6XshWaK5gw0aS5ZJamLYNO2dJEno22unpKmY/wAe16OyhUyI0l35RSXAP3Q0Eb3oDCnQDAtIbyR2Plb1okVRhWo5NmYkPxs4BLZCi4xaK8DyKVQ8PF3RieRrKZsz34U9mE4y94o771fKE/XGzZeN8b8DIAaaPWVWnk0KMQ7tCrjkAe4cxKg90qEu2CLEmLvZXbA1wp1cD4nDdeZRYx+uEK9jcuQAYSGRbOv8y0XTAze1wUX5jaf8qEhOoUHQnwIEfQTqB7aODVU1IwrAeFKbEgikJbAFJVJ90R6UmqDMYV8GX4AJhb7ADJcd3YLo+RokWX/XPC+Q510qhhDPpibcy/mT11X5OeVHePRzQvSB8QxQGk/WUuLnYy4F2JuuzRnACnwaU5Xqdc1JbA6m90DCdAl9LCQFnYRQdXpqNuOnDFpGbibFd0rB18dSmjk1WKR0sOZ11sZ/GHoYXwUUtgTS3YwpYZ1IDgSDnpmL9uY9tRtqSpGswQ4ArLWBlppZV083VoEye9vyj/S05x1DD4aDRpuu8G0q5BHr+zEOgpCo6cixGrS9FW/x9ef8so8tPhI0AE9pjR5YW1YFXDslBfSJNm2ygK99lEQlADyE9Lm3z0FJMpBQaQqfnoDfuTM9eIneWIxQOgbVKx5u+EycjQNLlksct3RkGk07KbHsu7P0ASqiIjV02pRn/IeJ0mGOUWDCe6fP/XSFDAju+PqTbvoFCdV1YZfqi9blwlyy9RoixWtQIe2HACIGbZ1qR0SsMzoWvRotxXX6gmuO0u9v8LayKQISStLmnfvjN0kFsZBJfpB4cywX95PNIv3UKgabc9Az1J/UEo95+xHL+yid7OgArWy3wQtV68AQ7dy4oVDklW1rEQZ+CMVnSNZvyhhK7ob4ab/lloSK7tloTJ3mUMsCqR2bwdAj4beuBNxQhInHy3LQmOhCShdOxQW1TNFHHPF88lDqIhAKM3FjJT1dC5XhecUIs4hG/5EBVYjQ6eDqGSkPLySZTZ441mxKfPapJx9E8pl1KOZMS3W+6fexxAEca0ogXmgGVPwUve/XJPOfCSAj3mS16cR8iDnXY9QT2vOO9hSsOL1rTz24QlFCLKDfMfpUVWBKVcOsv7Z8G4lTwpT4QYr5l9E1KT2BKQaa4HLEiPMApOJjF0u62FlBBgsAAAAA');