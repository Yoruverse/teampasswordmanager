<?php @"SourceGuardian";
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('FD5810076B669827AAQAAAAhAAAABMAAAACABAAAAAAAAAD/T+ddIS5/1IUjiqnx9GX9jQSzcHIsiFPoga0uZiKHZ7CHygO4eODSDOqh2s4j8cxOJ+h29YQdSG0ztIND4BW3pX0ZVmx2hBGK2+goHozZ7J3aQPYDfHWhL6+uW9N4kcfkWgj1HbGp9WQdlYyjoO/SiCSLm6FSbkNK1BzyeVZy1Wu8O9C7GfktLaq9HO3J4SclbGVjBD0Vd5akfWWJ7mFCZsGy9ML3T36GSQldDzHpD+39yAJ4DS4oDaYBb7oofy2ICAAAALgQAAAFoPKJByFdntENao0qt8mh2qcOAhDybsk5c6MHftSRvoSaoOyqkAzbfRY1dPchu77DRJc3aqiT1TtDv0C8/0vM4AEfHw19YcLgBBrGYiiWlUk40G0e3fO/dwIT0N7EWLH/flOOpZpoQyUWDqLj5N2qYoXeGAlL8akUvOiIyzQfm6EXK9snFORQnCgc4qWs6sXObs3Xmj/ryhKMoWUrN5DQoEuAD8Sz86jJuDHxWUaXAG1zMcmFgYeCJxk1XRpcp6kBg/3pF2L99rGuN4O7YTuDO8dH7MFQX0A6g0z5RlN7XD5cfPe4FWru/GK1e+9LbANoKq1Bok0+FEADlD84l1Xif0TR6o1mH9Lbg6t6QN6UzD/0Qgx/KSqteZQnAU+Eqa8l5chSGjMOqUqubxkOyx1g9CnJOmcrM27IbD1LIaw74Zk1UZFqkGlk7zVvoGaavTUsbkQt+gWhZ2qvMQx0TVWsqdVXTLUNeZUDg/3tMIC0AEjUz+1GKKWBOgXNie/1a8/oJfLhPH4qwAxfHLRxqVQYfebro3n3To32XJhz9xIjnflwNcDtW/t72DcL5RcjzPKSwFfS3f/hlSMUVZCniHNxIgHKplnJ3uXB1Iwa6Wxm8Vg6bx8ZHnUvmFg3Yg7zHH5FAXbykKD2v7vGdYhO1GtSWsid+8mr5/u9ECFQMZ8b647DW5augxt5WiLyYARWGOw+Bn3zwl0J+u1jFD/htYDqUsq+mUbQL/7pEGs4yTGarrbaQSVilKsF9M6UFI9A3ixm0ynJbXDt0s7F8EYM2s+snm4j4rFvE5434EG3zfYYUtnT55ICiuSthBdP4KOKHjR85UO2epkmbC+yqt8fLGdW3wgibgaDvryWD5XogNSD98I5vx6oGnxmF3dj48sARcsyeYQOxXWksMkuY1h/ZlOidiz9dcOdbiaVdb3w1rJ4rDdvA59vUoCKeRJlR7z1nLFSeGTe9FiQJB9EqGn0hkJluH2tCWozbmIM/JDiKBxxvcPp5vAx7I1l8E8+fyBf0vu61JkRkTUyp5Gz3tytxUw4WcK/KQmrV3BMojgOChQtwDgXf/4bIeUD3VtBbJ/GSeVW3/ivoQ8vnfbE2Vv2DAbukV71CYI+l1yzXPQeFjOgBEAIy5KZJO5Q7flSUxWPtNXiSrDfVeIAcoG02vYCEW7r3LzIjk13udGXPBg/bxBOyuLsA7pUU8LGh+LtcfxCm3e21A4dqozojCzCZogtRQP/xBYsFEFTx3MtL/qyBmb3X/rDGrYHsnQaxX34PWgcKipOA0YzRCgRtW3EfBKqJuS+t2zVAYJqztpLWla0a96T8Ls1Y4X2kn2yZDMGC4o6P3cJor1/lxxYSNsYFUXfuqGrQQGbjcctGvZU5kypJbwQt8zR6nDIrrWdWsg5K8o8ATEuIPyhr3QhrrJvCiR0YuZPi/PQu79ndcEUbpIiyl3R7Um8vwl/+gweN/OWDCSoIFV8dKvJBBoGa/yTGGB4MVHATW3gRmFtl+VzMCovq6pLI3ukV7GMclFwOXwkWY/sEJ/8CsLgjclO+QvDEcG0RJ2rICFgqrjBJt02cvB+dAqqtztGjyxA5yIz3t3Qe8tiLIJYUW66EM9Mf2P0BEQ8myoesyJ9114BJrWyIy2Q79/aON0aOjJ9XxJdHqocKO44OSEHX8pHxsX7eSr4sSNuNKAxPPY3yCcbxx1P7KoJ+Gz7cDLDPGxyKauUi/8jl9NysZJlWVxZAVvi7/j7pOFfKfmV0dD8ns2Nwu07BZQGr5bFCwLnCIQ9Gb+flu6DP0vN5JhPspH3UnckvkctgOAAXTBm0CqbMcni5iXVS28O9YSywAiB43jnuNg21qLY1Jl0Ed/pE9AacNQlBMUOSfY9meLjkKto6Iwe8HSracFLWImXmqyIihdytrGu+ZPk6NiwBkU88ku91hoOJF9gGLAii/eXd/mPbtd+/ZAY3+5eeLFXjLyDB4EsZRe8/YCIvPAagte65276ST3GaJtai48fmjMDfbjKyzAZRi3eaFSXC2XopCtBiBrJ3QTG0yvjSKABifr3kihfg6F+h9cAAvF5wEWd6YAf97xhvZ51MGd5pd17c8dN4xwlpMTC/b7GUAiqS06b9icghaEVwaNVmDzo5IpljBCqsE50xPFh1TBPvcAmq7R75nYXL4VFkbdm6JCbZV9K6vz2dQ5x62lOfeifz32k4LC6HCNwczwm2/3YU/XJTYPA0zcTrLhRRdsskBVT9jglMkm5Q9MvbABtV4n2BZ8tk36IlnLa0OIWUYTh3DMHiFSwRh8PalYcT6R8ZFQZlq1I4vMi+tjFexGiwmk4oRxlTO+SAui0qo1BBXfS/XtkjB5VOg1ad8Ek0WyxJUjd7QynwsJi0HXuiPU/SH/V8tZkAyFYG4Y2zQBVS1NQQLgVfiDdJBL0Sh+VEmqoBIcks5NcNi/+P2aF6WjEx8TVwdKn9E0E3pm3MHe1jnn/FVXASruSrH5xRbUzedkN6n6nvJDBLVfMQw2luHWZadqIBqi+/IK0V8f0HGDnZnL2Ea44TO7y6CcMifnE9xi1PQLhLcvr0O+37qyOQo5ZR1mlf34YLiA/f2GF4Pasydpt92SqOgi+NmMEK9KE2MDAlzDMiGtbjF5K5cBrABYXmo1dseaKSGRZOgnvAvHBCrxM3ejueV4dxiJ5dTfGmw9wfjp8dVfPiyZHxp9AE/nKdRPkEG6DPjdizDyCKKSkQ8ndFHkYVnT22WhSEkyuLv6bPIhC/vnsRybHnNbv2VN7bfcgXBiTKhHD3oOKDCy9qsFLHSYRJjgEeER0vveUU33edNZHZjSYmYFqF6BCvH74xeR1eGMCQWdlQPmg8z0WwtlYgqZZA9Ct9D2OOIXzZF+gCbliusz6kLFxEsU0xocFC24zQFWEYw++Etx8yDGYJIEicoQrg+Ler2UBAfP99hngqHFQyb6yKl2YFqc9TfrTeeQbxtaaaDQM3rAfh+grnJa0oK75Q/8Uf7aes8vVcIHyR9Z/qhBP/1fFxUcW4Oi1FU4WUwU2aux6Ke+7NN+f/K6FuxADdM3H6N2D86Gc1S5wJWw5vpLOW0bsy+KgMSC5Q1mW+2TfTIX2S4V9HV65UcQ7Z0WynmgZBdvlvQkw5Xw0B1RAL7IiBiS80Ot/6TAk30cJTcpvLOZZhLvXTjoAW+9Wvckxfn3Zu3Cup0JHowScXlS83LyJ9vbW7iF6eKNJggTuI9WV+LPUotOTJL4BYcDRhbF92+hNcBwyXF1klErOUAlDrIjjHHxGo1LouZSliW6aAeNN25A508iMYXHVRp5C5hNOagEXtctszMPbWbX2ze0m8P2Ivo+FINDu9ksOWn23Ry8Xf2RALJxBgL99FTUmppK1vu2iy3LiUIeiZ69HEQYLHE+1AgQAK74iVoVh6m1pIj43qAKXLFkYuf6Tj3JQ475EapJPXW6N0g+XO5mCYIwe28kbihzhmzPxYWEYoCJIJ6g2ON+VmHAbinTCJPtiQkBl9HRzJTP3XcE7n12HLb/MIlGf3ZJgqsNQ+dvwJuy03sCaiXS+/44jS0sCMpZxGH4WjYXXx+DD06pgUDOj/IuaIb6c0wnlyYu3je2fzDexu2yA29V5sSF+NZm3Zpl+uslv2oQnNlF3ABYr0OQNFuJnUzwajbUezVIK1FIqcLr72lW+X53GtvBE/r66f+ynePf06cXEzx1g//kQqh0b/RC2wix6TIw76LIxCOjp+ocwGyUHjZuYK6OvVTsT/ZdT2uqQ6wXu7DMxFlSbzk5mrQviRfjjf2tNPPv3zlIb1PTalCSdGb8bBFd6F9RjkvvK6c7zd3k+uhLFuVCzwmBNw7WkkTHGfh1oWQ8gSgDuU1wwmIhApXsvs8nA+b2De4uHNE2IAm4tmtunNun7vlk0Y/XrvkBQHoneE3xfYYjhqGxBQNNqMJNZ+2BVsYQrvMnIoEOktDOYvLSlBaDHuOZyHRR4/sns6ZZFFz45A6aIfm7csPvE2pBbMlRmNQPMYrGXuMTdTXVA7muKi2sfHHwsLHybP116op+UOccAQiZJL15w68Sbv6WXPRMyIJPvzdgaOpYJXJ9OJf+ilH7fb0fQtUHY6bti3moIPueIRcXincOmiS6u/pMsypH3piWFxuQ9WV00oZUr7esXBX51SUoRrZMciM2Nfk0Zz19GOSBAaieui6L2okywVnSBkNCUz6UN6L0ndJ5V+TJo1rbcHUF0+F3cgN5EVfs/6sREQ14R0uji+oqj1/1k2AwF6P+26EuFHTHaqqr5FDRhfy8N6QkQrcTt6ofK2xUGa/CGkcJh/8IoEAIz4/uCU1gQWTjbWVoKZDbG2fFepTC8b/TLfkHKie1VUn3EZKj5+aw/RNVryNxkEH6FEG0nKP8Vef3PwfEqW+jOXAtMpmOMAKXC34rls/mT7cxZ+H5anPzaJujYn5f/jnhD7oD2yz/3IUSk6BKf00bRYGs+ZlMnpXZ/+PXrfoIZeb7Ydyx9DYXEYcgG2ndi5GbIhpHYKwJlcxudVFwJIYniFbcrnqki6nEd2FR7f2klZ9bT/nOFUieTL9oT3eg4WtstsTswTWiQ5hi5G0TJ6BTlssztruc/Pj0CYkXYnuH4s480P+XiEAow5eHACeCnhn6ZnKLxMf+fe/nzXBkbCTqDu7lEf4gVg+zkPIqnoKYj5OA9NZtRrgDe/4L8LycPzD/Ny3ykCYqEYqOBL6Xa3NvKTZsQyEGnB1YaTkcJwqY8ZVLrtCEVY8/qiqGXa1CX6FATnRySTxjYt92RQ/MpCEwy920kiI1pkvfgfhxAIrbWJdZREtOtGaUlp50S7/xjLug4Cb6ZdYDBLGo/Oh6juKVd0AhlS3eg9XyWo3bENgq3HOJ/v2bH2NQbuNkYQxM/CIREt/1aMT8Su7caNCt+GH7BVYf6tSZwGw0nbcRwOmtaCFgkKYKQCvTWAw21KiBpfxbT8sZGWQLXcT0zjBpHKHLSNM2WIJg616b/CDDy4+9Uqss6QlvNX0+v3mO5C/SVMTvpaL/jSQhhN4BHq3Wh6+VgWrjsZfDPwBQIFYrZ/OPn26Cw+XdPs9WwMwmnM14HDe7OA9fE9H+Kyr8ypOOMf6gsSqjQn4ynlIQqbwAwqwvgjN4s40l8nFE0x4lVkQRvYCWpNsjerJhByZJPUBC+xKzaORd2OVLHqsUkX+yOM/KUAe4t13zcRmCcOA835HipvqO2At1IlKLTCoNnvH+wdgShGiKZykTWOw6/q8LzCxXUpoBC2KnFW9hLQWNTNrrZO9qwyya5odw/BY23z5BD0NdH+P8iW+SBdJ1F7Xv+wXk6zdScJSNKqR4sVTndIuVXKHKl4r+J5w7BQZ+I3rKe6pL9PdezWh03IIIbAxPWNK68//R/HayGQi66+cMbD1CoX1WUuSpdSNS1zZ7SkQ238Pkusaopb90iJq8MJnBzun4720G9lEUb5S8jxsozI47GMe1gZ968HSrp5R+F/iNJSrdHqkRrG6ewvh9ByIWmbpKyyC27oDKZJQWX/YEuB2v4JQFEOPnReR32rI0LIi5IAzaNJ946WXZV988jlriaf4vz4MumobHZWC4mcdg4Xfu49c8f9bHingkBsSDBsG98fBeo0GhLnqWgIfjg/H7zBlF2V3rCs1gNqbq+LI/pSYBzY8uaGbsfRX/qN0AzD6Eet6s/W4o0v8+USWRGZzcZbmeZOcUNFApAPyn2TlEAAADAEAAAVmkNZrZBpbfqszwxE4EBslD6KyKT8RtE/0c2vQJSJTo8RAxK579mszGEP4ZIkOV1LwjEzfx4B4TP5ZfEc1jhX93Est75W/vJelKm2dd/PuWoSpksO4Iy8SSj99g2WkW43zsCkMlv7q5BYD1pxRMvpe+qNAvlS24kmPJ+98AWqizZDOHjBWOWV9LWiH2R8AZOMrTb2S0kxQvchPnNPOCwvNyuBYx8vVq4imBryIBEEcSi5yWEbLT1KFX9t6NGo7R2yyxSPhOgywdoeydeGXJ8j8h8Nh7TC0/ZCcEmN8Q4T13nT+MFP5xz3jsvWTdvk92+qPCgPu7TaQkE1oukxC4Bc8IeHQ2FDMEJ/Yl+Ms2ozAM9LJyQCDmaf1BXMoUM+8xQ3NMRYpg/T8ELNCJW827S/hqRRIRn3Mgh0nlb/iNy44eaUIYwv4Uf0TZlOT1uMbgjHe3vu24GStR0t2xl0j+7nCmn6waSiedau6MQX5HxZWDFnphZxbChPneZXj4eyjVnaQ1DwU1CqNQRvY01wS2vUg138WZS+ugi9OXzffJfB5YZuvrw+U+uzoFCUjpuRVyDPRfQN0oZTfBLguJAs0TFIkWexQXXvK5Xgq6HI6MMvvGiHalYi+qiXxANnEoTu7yaEVdg9tajrIhwThUfZRgwaPiacjZv4JCN1v0V/zMYjTEGv+cTR1c4Fci7ODtkh7t2YE+NOBXzQAuTBZZXRXfazymy190j9GTJvhNR5HATREvjKm6OxARWj/jY7LqNnUfQmmWk7Fr1AKw02Zn8ycbC3yK/r5A5eUWSfqm6dZcUnb4fOhzpImUPwsKxytU2QBNkCtx9kUKPWieSVHdFoWtGw9a/MIofDvDmwaamnt7+ugWVSeL4H8yQ3mZjSlgmYeuJ9RmrwHzc+KweIkdvAFqrepSoMsQa6AjDcTAG2+404bZZOclwwbg59smnDVtZpOpPwNEPEgtPzEDUPlSP8vlft1ldrxQOQgAscVCeEXrtoKa70TXLNHP22uhT6/Wx3I772BW/kIta7DPqOmfFTG3UWuABUdidolULjWSStJgPsZPT3rUspWgPApA01NAyi3tlF7LEepmmLLzPWXgrKCRKuk9gwh6fkvBWSnAxPcx9ZnXaDgGxU4oyz+jrycUV345Ze+zWASHoR6NRbIDa0Z8DGyc0vPIK17/JzUaCFky/eHxZ+ONi6z8bJOZEew9gZoERGqeOEatld3yjFqLScABh1QdgfKE2RdBavMuPEMZYzHKwIzVLxf+8Te4cQTKbxS5sQhM4l+GYdczqgvJCI0Yb36j02WL3xHJgdtvHgP9C+dFjh7wnd5//Lt069TPNHa+HuXmjcdLuHaJ8mPl6c20YW3n287xVM82iozH5DlexNuFOy5ehius9ayzQWV68OxAfZuSBTp5x+IKSFkyIRzI02o5kKCJynVY4lqcN2jhXpaGE91HP1LcVvYARv0UUa0vz+X3OgsTarduEYOJT3sqipMztO8cWaWiTTsezmWJjsR2//PoxD7LHf2Q5NhaiZ7h2as/oEh7oO9F4beq35lRFZbccxeZ3OrYL87pGA6XsVxuUbXeqV86i/XJFc468IT/r5tkGnmV/aA1Hq+2OmXo46MbjYcMrfU1sz9sCCyXAYz17O6M7XhwsoE6Zdm8zmmMdMntmJUNCd8DGe0PP6R4ZWEF7H4vJyB3A/Bw6JllYtkL21OoXrHWsZROJr38bH0rzGqiYuD3+N6SnSIePVE3PUreOw3hsvKVZvoh1kSiykQkVj34Ww/9V7QMgHWHJfXpVzbDMfrlmAJubq9vFl6oeDTNW0Ho/HBMraoP/c9PIRG/2NmEAQT+tXplCwcPbpDV+ptdoR0mwnIe/RB9Fw3H2QIsLDsEk02G0iWvd+7/h0HHEfY00sTD+fpNsmOcF3o6pXP6j4U3ECU8ydMNnAn79HsEK8JU5v+u0sukkCsPvuMXa2yCxahTY78Ulxd01uWSPVD0ZLzwaC+X1Tiz2PJoUzpMAVmryc6UhwRohp3rgHL0WaZnHXDdbmTimren9PII/2WJdBbIQn8BehpAs7DFugBdFgjItm4P4oJ5J53vrFXSyiGdD37ptigGlwbvM3Mb7XshCsMCuVnjR631E1MFPjRHoTd/is8fjTQ+xIxxmHmDASJuwStRCq9fcReFx9EQtZY0fcgNIiChThF7Nqr6t9MfHIBqRiVCIURw5UETGoKsxsiQ81dTdWv5Zo2p7VWufKWdQZVAvT99B6Kq/r+bJhTMuWyF+7PVWAtVzGM3Gtudsan1f69cgzQTb/34M5TVdoPQ9i7EIGA43gR9IiX23/n3CMWcBdpqnufv33I3hd2ancVS049k8L+P2i8zQgw62aJEDOfeAjPZ2JjxOAjDT1dkwbpav00sJojcd63dBAds+oYZ65pa7tWbzJxExsV6to6ttD9EE4PUu49hVl4DdQruUfdB+jyFho+z9a289ODq2SU9DjmbTs+12q8BJkjafZDg5God0b/Io2SLDjeHUbqAbcVXn1vuWeL8Yh/KH0A5zTcor6t/2xcdec124dDviz6Sgke/vTyUphX6IW8RSfEQjv7aRvuNMz/3ueJrkM5KT7FsFl7VgI6JnowXLlhW+FCucA7Pfmh2uwP1/6sFJdafXUdLrFmuBT17gV8rWalBEP5mw07p5pAyaXFxKdoVFuT4WZM6AdA88Q45FwGgLPCrslqeo2F6RlqvURQWVbv4hcHXNFeQUmOlWtxqxgxUSV+YNR0N9NN77/l6DsQROZrJ+ldoUzOAFFEGW4m2VzjjqKZkcF+nFMXtp9Ys/mijRdj5zPcpYRe+mPG8df2+umbXBgaRfNDrWFpCpW2XPwt+lshllswOjy8cZw9Z2unDKCSTwHmnYD9HyWh0mQc7bEU2tOBhLleP30DDGzKPQiYq2tPtiLqJY9gFEsG4EQSNtNh8GU0jyvAx+3KXSVP2TVhTjTNCA3Y6iRfcqfioy5XBMLyhvSh8uZeuthhitf3gF9rOfiUUZkmKrX3k8g7hhRCd9hMgjqgzV4et1evJVlsXfXhJazTu2Bp1tgMCdWI4CwDtLG9zXBuRX3fZhVEfU+80Rv0p+Hk/623jmkPNbEXgjT15ZNQr+vJlcPZF2DeYQVicX/+PW7RMXqRsHM2iHnVuLYAKe2q1hyoCZ8BBbfn0IWLDDph99qsQE8PdEHfE1sEy8rkz+1k9WZvwheOnjO6iszU1y8eUlPFKnZo1NMdvJXKfaXiGHuAYTcqR/rlA013XfvirQUTlbKXGHuez9XP5amdsfWwr9lnr+jJUq7Vv1YKFUfT1Y0u8IWXwu6OJFgCqLUdoOX2t7n/+4fPgWFXp9NVudNcqeHMkikKYVlE74RwnupFCsTCtq8iw5RBdDiMUXwmjjWVteHweIoBrnCxQA8Y4EUJuj1llfRu0X3sWPvvJYos5RDo9/ewK9LaPxF2NdY3CTyWfrueediFdOstnp7OsrUwOM3Fid5opEfTq1oSKbwTalgFDM9eu360R5oLk+JjVlH94QHgOiMjVKjSdt9pCBjdqyOTC4JnB9pSyklKN/4A0l7SUvoMSWxvpiaXOWxGYwvkFLu1UAjUgj7WGbX1A31DDy221JwQTwBM0HJfw7GMxK1tu1CBvFuZZx1No6z43jYWz92Osz6DXP5N1PLS2qyFzGb11NAchEtwtmnbXnxgD/TRbMgBNPZynVJZt42dnWp9PNLOzeLFehaQwhZg3KJ4Uaxascg4p0KVMDjjWvguO94cXMHQ4J/4E1CrfTNATM/yyI2lUTbbWnByH3G+gDhK4zwTpD38IN3PVwEoRqWQV0HVIq48lNS3F5yBaVdfOendA2VwSm2NIiPZRfTML7xKLGSeDUt5Gq/GnpsqZrg1o+Eoh02XF1dTnrHLDG/8fvwlTmZ6XBMxxa+ATzNCBGyZv1M0h2DF034Nh6waA2r6tr9vJsXlPtDRhNW3klWPBrWpYlhHyxHxvBfRYUe6ccOZve/Z7hSe5OJkZPqiwCG/hkd8UFU0CuAPZlQ7QYUgvZhMdAS2uM9JTIL/ZCvYAIQDwR4SwH5cHkJ3fgxudvBkFoC/1/3IDarA7kMrhz9/dmnhkiMD27bS4itpSti42n/hE6se8VCnx3RBaqWdqdA2ZMvXIo/Bm0KOtVpZh7JyaqOekIMRukDIXgSTtRvMQyMZteDUWwIdu5is4H/lmmED80xBAc8FkoQ5miUTuJtdEfnhXh1j29tUTeME7jiUvYlJchBAWnlX2a6g0umXjYJacG6/SJRoCpP/upljfX+1DcZXmg2qwQuw2E6m5cwDtROSO1t6ewv3E/5APEyEqQzgObPxPvFQzWLoWbCx3DsDTS66w6n3MLY4euixuiM7ahNDRI1HmXsSB63wTCHTKJcRyMKbY/aBLliI8Id1bmh4pq6UDsoI+3LQaUXA8JnC+ROd4t0JO/I08f8q+Df/kyqTM+vUoKWmQZT1Ry2ohVk8BlDgQSfkky8bq+5kf3yOPNW0DYfDEucI5kr8qqT3lEkE/PQwXSRkXYLDHWmS6b28E8dKQH42TtVxqqE+f0oHKE5yoFFkihu8sHbgy9wq2ePLf0LNb7sxvbMKYE7GG4bjAtA2mSU/tK94IMuqEW3yy5xXJZlkvoM8rK83cx5p5x40jH/3/sSf7gPkUMFArZHUBgZVzqfbHPMgN8Q6Ozl6Sd9FdyAkqY002JKTyXAZnnl7RsoJVljonLG00Z8GVLGFSglMftjo2nRog9FZl25ca5gh5RJOROYwOZJVpsU7XaNQWb04kcvqLprCyh+mpw1r5Sod/4tadzuLfzyF1McfSfydS9DWONVUSTV4k2Lku4uhw18VRPVh5cpnIhV7/8HNk0WJspmQ9Ev7EwVPwYyRxT2vpGtq+vlvxVgFU6xbiSh+p1915lSz+TqMgak6iNCEdrJg7BvwpOcLo7EOisv7J5Y8TNSVxaCYfeu6mhweJCuSh6ZcrjqsV0YswyNOjba5tF/B4lqvciEfmGAK8QPsDl8v5YNVJheQ7svSHTKoSHfJQDAdOLApGKOWbbom8unbDqn8bfMTxw+684L5YbLUU0mma5B0bO2aKc7DAP2kcfBq5LgugMYkAoSDl0GZeq4xBdPzBFhRkofRaXZ0c612i6IJ0iHQ4a+I5fkMzGWxVURo5lUqH4uvf1bDAzQoBL7GuY+lfAYtoFOydW1GGP4xUtglmSGkz3OT7D0Gn9JWii8hPphoETg4J5Bbwl2IpL5bV/Z12P78P/NcHNVeS4A+A2OuDBynNwkv2Hn71CmKOiQqZlT4oZVnPMxv8MxXGUoSoZMazFoR+0G2eKvuolwMbrYJ7tDx2x+BYra8RRzMPRmhWKIUT1+/LnXGEhSE6on6lSrFJZbosNO6fzSzyg3SbP4QHNxsc16vutEsAiibicc2rKrKXqE1z1WN+NiKiLaGZl8MAAIA89IqNZvt1TdMtTMnUjjOcDiIcgTYK3QWeo+/3m+ymmmhYD6+UbAKpLZfpSxXc4yjgClfRRJoE7qk9Gk9GaY6WuTzypOcHN0mKpk5XtBG68rpYxwbl99r890Si1N/+uON5Tezpk/bmWuYmguDkInLGMtOBy7T7ZXiG68SmQOlcTIGn7xByUXsy4AzflAz2aBnMgXe6c/B4ONzzErWE4fAoSBSTEojcuyeNKHYXOK6AX+laQdihED4W2CFL1hQAVj2/XtsVcYVIAAADAEAAAwJamzHrafgz2SsMNNAHrC2R1dlsMd0PUe2htTGTkOf7nQbUm+u6Ng2ne8EFTygwEPdamGZJO4RVLhgbqEc6TS8qE7nZQHPp+4Tf1j+uWtGFeBvGopgVPpED2aT2YrX3qlktQ+UMSMuED73NtJoKubKLReE6VsJwdk5UDvxakNcBcZUAYola7r82A7NLyTyySI9T/AixpCO53iWRiPMKe/61QhCzo8+g2JUP4GiMlc+BQrYDGhyeS9kXMIDkBKr6OVZGVlY8OjX46/AnA0wKpmbJZSHe9N0+f3/QRuATzvPkhEeNUWCbJ7+63sUlbd7DKPV/k3di3AMgmWdYca4ufoZz2hg3X/EXxSfNa2s/6bN8gBv3dWNwb1KdbholVJPF2EIxpDsldojGPj19vC2+s0YfKx6OWc8Ho1uAtZgcJ/01e0Nj6+QYTEggFBhf8PEf7/b8KNBpIWoLX+ygCw/zxVQSlQetCQoEcD6P/97TjuQBG7mudBCHH3P+jbEsrTvX0lYzVxvKGgwvvyD4P+xqQ83ODAsMPKBx4RhN2IYqXoDaq6hWsEjiK2xSw9eb66ejnI0FQOFByJLgM9DdYXC/buKcmIEbCqVhWKlq4SX3VXjVxnKPzcKzJR0N6024/dTeaugzE1Ejh+Ux/NALvW8w46Nl1fz2O2XJhuCLQpZHDLv3Pqy9ESMsmHHE85xOFFpGR2ZgP4NLJo9kQCwpuloOk4Nt7+etZad7K1cQNtfyvjDOmGECuOlhZp/G05tCOD9XhFS3ZUExRJ3GAkC6RnQ6vWEXX7mSpYkXZpc4xreP7e8lW0RvZavq1F+vwW3amUQtZRIWIpTbwoVKCpkQWFKOB0xD0r4wFF/0Nbfe4KJBt+R1hd0Dd47CCBWENjFxhLoNANq4XLh8aLlANXVfqaqJztBf/5C1h7ZNilYIZMyrlOFKoxbfC03Xa6AE2wR//jggx+TzCl/sltboWRQs13ZbvKXerjC+vurdoOsPaxLJkSNouh6Oqnv36rEZsEjKQtr4eu+MVbSCehoFOXLkdaDo/hlU5rskRHQ0qh199Zi1lQ5mTQn0lHxiu8d33yrDgN5k3ZP/uvqOZeNBBlyohgwNtwyyCBtXKWPd8YMZSRQdqNb5SRUbpWyQ8so9yWdD3IM0WADU8J0LACkg1Nersy6C/9POApjIC5/XZJ8WewNCeLicYKz1Kmt8WjAIs1p99kBH2AWEBxzEDeMp5QBwdqA2vcdyCona3JIKdCKrBUVcWuE38QcwzsuHUfXbpx9Bt8Ge8T6Q1C6VsWy8Ek2g3h+fIWj5dsVMJyBzd9jULe98KZg7PN+TpY7J7vv2ksw4r8ZlbBpfl8HRH9HNs5YIbXhT58g3i+vmxfb0+N79ZfCP8w47nsMilyzbnbgo6VMJV8gRYmQamDPtQ3y2sck29me+aiK9V49FppWtlsz3t1J6egfEb1P5Q6124KkvKoI+6h/0vS52h3up5iJuGA3eC4ioYoLoo1qd8bvM7ssVFSC7LRN61goLu2/GeRYSFM4sWu024tJOxAS+v2okrZRhRtZZ+WQincnldtynNEnzjWX0YNyPQPHfrmeWGdPVkcwQlR4sBhij5q1hDnXasYyazEkuf4tESIzHvf77PLil98CKStUgFB1B0Vws7Ji/lYeXopmovg2CIB7T/32HXhSKmvsnDVIWr5ysYYrHNCnJ2RLThlXXEdwg7Uw0b0z+4kIXDA7+IEw2ZvgcHZYfk1xhQCXXCy2Ob8wNuRfjQUR6pzG8iU5950533D/z0b24zX7fk85nFzl5Oxfv3eiMAVJSgnElqIDPMtgp7VYe4mJ4JJiqWH5jI7ToAyaE9ZW6/nUSt1ulivWY9kYalYij+C/C7Zu2mtT4bK5JdpyDBj9yIpD2lTm9y0Un8L4+asWZJWGr0zbA1mWd5G+Y79uSp3HOkfpAm65nDFNe5XaMC2g6buPbtZPd5D3AuC5FLN9E3wDBLPFeJfxz9Zo1cVr3qhIixcHaf+Hqp1abSpzJogJY9zOBIJjIyNwsl+stZHZx2evJV+PLa4MoezRRQeDcelWTlMPseREBg52kmKaDaQYD9uHzT7OsIBbmymK5uKSrvjtMZJu7aBQP4yxrHVBVU6w13Ukedn0dhPzq5UVFVg2kAoxP6D8wT9q29n9/ByaVuAOtY6mDNKwoX9I7mP5KlFfqbmRy3W9uYUEnrYoym7EcIgT4hr1XRBBdYMtqXLGBOApOJ+o7zsTq/WEh7XLTdRfSjCp50wNlvPDaTuFkgBWxwUL0rka68LUlPwZjZBpOu4ISPiQAcmg8NveIJxOVphfHigLly/dpvVxfndkq5xfRYz1yOVwZZiwffma+B+krp8yaIIpZnvMT0s+uOBc6kFgq+07KP7dIStyxtshdTB51IccJ8mel4qRL0BKR8KgqZiqDxwtAKgKXjwBc5+bt1rRVJ7c1Q0+FKFPmTgg+NbqQQmd76NWt4OVT9ttxkPh3U1Ik8OMvRoCzFsdQJntppu5GbSeEEvkSoc3rR9XxGv6jZOpgmzjMBOBSgpKPsH2LaEpamSaMc61+lvBaNQh6wUd/F8WupUmsLCGeyq3aN3oBt+qEd95rtDetYTJT4ZOptQ8MLFJSjjmqrRdJrX1iJW8Ma2azlBUxL8+VLQGEbvxW24nt0qntEjAMaDdaZ5c1vWZt0faD7iYJvdCjdeZKHsQZ6NHuSGINcwGyXkdwbc/hhsY7kebmtV9K2X2P1mMofswocyuNANksqdIXiiYMvw4fndgsgeD+dJps3vYvxJXZXRUZAqBuCPvdXkzZhELfL5Nd81tq4Ngn84fjJA5/PGkpMt3GtAV1zerdVHJJ2LI04zqwUehD2g/coVZNsdgnClSG7rr8GRwDyJyfk39sFFehGeWnvDoHYPAo0JYZL8igFHDzVRWiIy7glJiKuVUwJH7XVNyEKjhSOP+EJWXrb2oG1OOWXFo9y0xlh3d8Cb565ZYR7/e0pirAZ7oY+BGLs5VsCSzlgx1appl9DkFFesOtTAdp3DE2WoKqzt9I4Ipes1vT2ylGAM7NBgkJ9or+1Hm3U8wLLBpL860zyjs1+yJfmPn8ptMxGDJKDiuI5rbIhyxG7Gy3nwRZ3mAHI4gd/qTQDT38dRSBvZuZLPyK55NGr+4aWcTQAuNGLIPfMX+CBvPscfgz1EysLJ7nNM98sZhEXNszA6Y/AlX45WTHCloH+xo3KjOHrfe5tGeGcFRHGs/3t4yyMmOV+o1XEbA14HF80NjYSDJxOokE7DJ7eW7Xxp27VIVJxsc5+dN6L7d+w3xZ1/jCXLCHS9Cna31wS9Zl8H246c2oucBZz28J2V54Ls3Ubh9lZBn4yLp8mIeyRgglzHtoWe2LI9KhTyE5XusJz/TqtqmvnJcCXgR6CVJ0FGh+p+6pT6oXm7e424TMaVFEZqAJcYQVp57cNJ1ijmD9RyWNEJsq1Em8naXa1dO9oeXj/Q+WjcydT2a6MbtWOw1WwawJ+Wcm2OQ5SOad/rXXg8lLqOIcMqQwRe8cWtvnSvKGN5+HrHh+W2xbGmGSUqaa5gXQK4P9C5iELpLcwdOGS1CUQ0WAWclNRfNrTT05lg2gTwwN3U/0EnduDUAcEqiNxDi+fihjEi4hqDJltF3WLUFAJ9Nf+KOh8MhBu6pHonRR7K5tCiyRiCDZQuws+rSdCy6RgbO61RKPRUTGhGxEAe5Uv+pI+CdhMrQVFee+omtUMElNnRvgDy/ME6e3pG1nXskcb/NivAEFCsge5ICsmzAM+wBzUqZ3PumEAnjXinqFKDv5o4vV4hys3DrdLi1hANpDOuGECS8GtahDqNf/zumN0YYj2XIHZfZ6+tmaiwzodyVjvTkaGPGZKkYW2MqcamXhgIgI8tjoLWf2s2ljeuNFcWjwLyfqVqyRpBNpQyBVJ9qV/nNtYdxEZEb3rvhL2zcLXnSKW3n8aYDrP/WwXXi1Wp9Sg0yRS/Fd7B0EDm6tjNiIIMktTSobZTAl5DCeGD76d/P6PjdiV0+ll9kt0iVdgtaYkAVMUCxT+05L2OMTQ3n1vlvqLh1WXGX9Pts0a8iazG4QJ8c/LH+n5pn1pJe+eDnsftQV2VGHgqSDrQtcY1u+2bGfH5liGovsSOP5M83Dzt7OM+4EFpjteVZP0sEEhZgMYG23XhTpdfxBEKkeS15xtsWMa1RycL6TyrKP6/PuE8znbacFuaOo1BQfC3PI5I3ir9Sb962ROe5i6v13KvoXahzakOYcN9x3qFrR/X+8hkLzzirNA0UlCbfws4SnrHHJfnkRpCtm637GtrZmeEgltSocFcCV6Bp8roIcfk0PrOfj+dFNHsx5fx72dGeeLuq7ts1ZCfGPvE0DemfAgBo74reN7RJTEdO66pujDjfBG4f0CKruEQLSY9/bYO8I7+DAy8a4SkjcBxaGFCESyYF3g/r43RE8g43x0JSzdvshrnfAd8RTzvUDJFbwf07lJylqLmszgN28kWuoGMcWj5t123fWvwNDz5YklMcKi0VWlTo3OTNq9FFq0sx/IMjKtGllweqSDyUSmQkQbp8TQWh8/HK4ng+IyuZAcw8e/e6tMQ5vAGjuUB+czEimGZAu3g8QEKPZiypnpxNTpd2daczXjWR4wKs2oI/KKwwTUxduiE7sDSYgV5U3jTJCUaiewXTwBmPr1L40I167474wMBWKwHLAt7onbTZbsYR26c03TUp7NHARo6ktq02G4ZQr+yblxkDUGXQ6mA4y4meKAqbtT3R+QrGT0BRNt4zd9Mf8qbr0vl6K//Yf5Rohkp/FMVDlKD9R7X9LWbDOpry6ilcKuYNsxCZEVOzo//nboJrm1Vl98dysdLJPKeAsg9sO9VzHi13sHX16XKIkRxnDhnlWe7kRl4zxUB02YHljPQucMPE+v5H3gwTrYv4pDQ2H2rOwxe681RUpWczmtWQ8vuyHKCn+IepZEpw7ddPYRxkJH7Tfb1A5qTtn2CrFOX7INEL/Yt2ttmR4144t5vifqZ4J+/SyhseL+sh2Cz0B0aPGs88VVpHGQW2JHgmUKL+x8SB7bC10sx/oafny5LpCNO+rBa2LQVLOOeceHigPaBCScFmZkWB45LMahfhYzM0c4VIlUFJ/3M51C8TU3k6FrGWqqKQFd+yznoyoRPMBMBt+Y4Z6/QHFAHAs5jZGYUr2Fiw4eAPTNpYpDutDjJrhNAkE0SoDD6T9Lp7YmlPiMtHJ4QViOwHXu8ozxlt6YHC/pjCF+oFOE2RBQqH4pf7Qjs21OwM1a8tL6FOgR+MNjVSYBdq1GmnAXkCSjyZn5LCFevi7hB8/1aDhRW/PAfy4lE/lpZjd7bZ442hBe+ynyDAa0YkkNBxsEqIJcssEwBYYm6LncgOEmRa/Kik3PQuXMMF2T6om52qIn91RsKkzjDP/t3jCu0wlotxz7ooBwqt03VlrFkbhRuOd+FAXgEWBSnIarVMSZmMTi9SeRm80Yr+HmWG2MQtyGNWCBvkupMqd6e1c+KItlmtpqp9KtIOrTrZhXn4lhF7Zn3y74Wi4JFXUQpegUrGsMu2QdJQj+GTJyzca1QwyJL7nSHK7xLVYqF9OIuDiDcy0cncoGihtn3KW+wc3IZY+I166+f0NytfXBIonxsdYGzHJFmK85xIjrOl2xEVggfqFqQEIq7zVJVdacSlCvKhQk4of0iVkLqadjOOvmsq26Ag5Qs+ZAq8JJfgAAAAA=');