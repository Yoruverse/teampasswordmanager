<?php @"SourceGuardian";
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('FD5810076B669827AAQAAAAhAAAABMAAAACABAAAAAAAAAD/T+ddIS5/1IUjiqnx9GX9jQSzcHIsiFPoga0uZiKHZ7CHygO4eODSDOqh2s4j8cxOJ+h29YQdSG0ztIND4BW3pX0ZVmx2hBGK2+goHozZ7J3aQPYDfHWhL6+uW9N4kcfkWgj1HbGp9WQdlYyjoO/SiCSLm6FSbkNK1BzyeVZy1Wu8O9C7GfktLaq9HO3J4SclbGVjBD0Vd5akfWWJ7mFCZsGy9ML3T36GSQldDzHpD+39yAJ4DS4oDaYBb7oofy2ICAAAAJgFAAB6MIOM/SRdutDANw0mDPQn+MXnJ07VqjiYV33FQLiYFLcWTLEH7ND98k4E6wiQz8zo2U6bzO2pEdRWW4fGW25h3fKwGqYSm+3fIkAgA9YhbYV046r5jIx73BtPXNLI3778I20DD0S16LE6DiPcfQjpevqq2onVzpLrRDmccnm558whmxI7xhKVEt3a+UaTTdZoyrd3K8OhGHcy+8o5UOuKcE70nQGc1LI74nNK9/p0AoducNrfv7gdKObB6u7zda77UPjZZ0ppN3c4lRB+4EzXunCU5TFhuP1QV6C47mIUAVBg8TDczAGQLY1asiLTN4W/npXa4y4LAFtw7ROiEpUjBaNrRuy+MsQG8WbTrhnOBJgu0zmBBwl+U/QKmx7iPX2D5ecwm3/znLA0TuePiEGyRZ3r0lBW/Als7boDgssrujB1rOdzEYR/fVMj+ti1QNLMSF0aLJopYFIlpGKMG7Fb3wEuGEzcsy4oEhVmcwo5Ty5H8E3spDvw/p7UMph1GmK0Kw73NF26mqaRJrJfWEAYiQdQWfGO+jUtNvuulAwUUdNiavVRrtVEC7Wm5oGSOeRjboMjKaOmArVqetZD6YOj6Pb3ChUdWKgPpeq9DNBQm7iw5J2diQNiPnESMRB2l56DPQsuviCzH1wO3Vu+vXQlJLvbwaindz8bROuv57rVW5Gx8p/tyaN3p+nWpbFgZ689WK1Sxp3EuxI5myGY93ku6rbw2fa+8loAf10OKKFqJ9OHNOYiw+ilAWmqK29zP1qval+afxevcMSZZQH0xceF726B7Ap+11OK97AG9D7kJnp5LmZiw8xEaYsJ/LdBLM7Gyd+ehmdduDVe5CIk+gOjIJ0yBL1OedvP6U/ibS8Pz6PXeESPlJinEnDqgxhmLvrEdukUQmaVVBZrIu0vJFjkOwyxlGEcH6JxeQwslN9zr20MSkr0GwsBJxUqf9SMJG9FYXVIljpBqSoU08Q27es5ikM5p9rtSrR8N5RNa0r/1AfezBnTLUC6WQ8Qu9q37nyc8xfaxfZQUQ2Mollo/FEIT0Z+QiQtsFCXdELlTshpOlRNX9HYM4NLd/cBDCj0BgRNAHHsFzQvVUkkrFe8r/X2+G14PfKv5mDrzEQ0wtUJd2JTvtQDPXS4N+XWNKuyKYLCKKNTOlrH4pENnopEZFxBWDaY8rgmDUpA3/3mmm3rQ7IcDbZ1/t8RVUdJH6Y2ixn+pu2v2BcUak3YYoIXU9rjLH1sCvMNGV+WLv+ivXYorsHvQNlrkRowqXeAJrIVtsXiMsDtNxtZ2ZAVCbvv5B+qS/Op5mH+pnuJgKoKs3tq3XLIknFMccuiBhD/lbZfzGfBGygK5zYLwxanBqGR0DHWVykBVr78jt6YMBfBmRUolS88Mrgl2Tf1zeOh/3EHlGAHuUb6Hnf4XVMHdEDKGNFa7+XEYIrri/nyrrlJZcYexT9JHJkPPC54gcVc3xdqEEZelUH3AxM05+JvjSbeNl4BS9pctahpsvmFQl9Bn96EtmVqWLrSRHLtBiNaJgfdYtwaY0mXSIQaoCvjsrcClpb5PsnFTiigvK84MdhmZVvzW1oWl7NlOhpeqe+V4J+19D7JXn8xaDiPWXo6JiXCSzJ+JS53tJbz3NLRCskBtXm1ipuL8J+P2rA9nwQFYvyoxXHbrkHGaVDJd0+Ua+WQha3fuzQif/W/S8W77oQ2WtrkfhXPaMNyDHYdMs8bBHiNkViBvho8w+Lk+KbXk0Sl4VUb285huwBcTQll5UZHgjEAjya/fE4ICgCeloRfBjXbxmTKpWSu1nBTu2btx+EHMzN9Wr9MLL+2YMS18TptKYpvd26AGSCfQUSR+yguJ1MXdzI/3jZfBh4cvGTsQqy8v3mRywLh0D64iBGrgM27XLVb9JUGZonyguH0UQAAAJgFAACl2dRW3vOmyYSG9ZW/DSyYVSWynkN5SVP1bQje5SvTnkYCsIAx5UG2alz70OBgtGp27MPUq8O+mdMDIvzCfbFIz1NwjpBh2EiqNbzCAXo9HULXHXjyaOAK20xGV7WvdXJrdiDivTzY94+8zGAcY+opv6IPF3OAJMeLdRGo2OjnIHPSlmtE5By+jAp5a3h0RQgQoX2AcIXG/qVFuqQe4d8+ZijtQkCaaMxHEzJzXEOl+JtHl03ADnvKOLrYC2mflOTj3DaaPK6F3IuK0pWfH6f1ggnGvCAGwLFvV4Rh3qs94yC/pHhX0oEByDKm9VGvTl5NSiQg3JPtF2fDoI4Irwkd3SmunrpId9YFcC+7kAPhQ2AOFO7O63fVrYrF/hDbvNBF75xyel97YtNKSqvcnJl40KvqfIkV5jOgf74LTuvoAmARMjaShearfABK5SvVfRFo2vee5hsMJ1Yfxz34PkpZhJpYI+r5jH+dUk3TpmDJCapLd7kyxbTIaK9G3HemTbDDR16v3cP0GkTUhRhP2mL+UiKRs3v0H+qDpa3gOeV382LKpVfCfVUYD1P4CsKtEjsAxAdJvZjwDua8xZPtPZuLZykePVZvj4oRU+ox6uDuFfhmq62Uh36D7Ml+kWplEnhXMp25YS78rIAAcf3R/yX59Gs8gnaG5eLHt5XMUELxwtDzdTRcRNX3LKUAUvu7N3czo0pg191MwKvdPK+2j4p6AyHsQ7/PPA54oH+KCl/87lNZivmEd/5FONmuyh229mNRO7fR4ApSDzqYccfcc9U9rf+W6Ul3Xu+Pd3sws8jQ79mCCjp+eaKrpWKuUsQA2v3jhD2b87w1EOnMEZguadUAtbkYxU99MutLMzeb7uMJwbR/Roa25fZ0PiEs9g4G5gIChJAC5r/evI8+HXJ8TYy3Smbz0tEXUJu7nPb+tqH6pQdbJP0/JBk87M9aXYvzluCot3R65ge69wsh05k9WVSY0aWKGvBeAVa2IHP5sTUp/punrQDpm5JD3B6TMUokvqMoskzERI+q8VYDrGehXcR7atxVIzFydjhnTemzE3Pijsa2/KslDKCL1072FmV8opJFZTftInAerSsapU16XJ/NftOiEw2+Pbgzk9bT5PvJVdvJtdndxe2brPbeFzvPOS4Jzs/fnprO2mabsc21tHdedgwAndmPGTRBp6MrMu9A2k3tVKmnTThie61A133GUHrIfOf44ORaoz0GqaIuAhtCJHHF9sxpWtb72UbMN8rK2vSDP1B01vFUeDUj3q4sVSrE96Hkv++vRAnDeiMjuS7jhw12DGNumqJ3wbm5Q8LS+8lMG7C0UwFumxo96VNctAnoIuGXMSjhvAyJPcu2L+0FWsr4uCWhFyh6e7MG4EJY9Reg5tJwdDDK7fw6Os0fvpAvX6YsehYQ4sWNTRAx8af/L8OP65hxr+L8ovFEf/8KLrAOmupwsi4cmkVT61Oi4F6kMV6PVSK21sKcD+EJieVvQ4Joeih+iut8bPgmGuHrFEsOd8JJbbSGFbo7Y4XdnNaklVa1NKumnSbLVG/tjUyrVMTotq++tQ96JcaVfeR572Lzdipym02V0sn3SxpCsN/q2zHeN2bAX13/FGTquFE0D0Vqy0M1DW62aJwX9ECqHU7T0omXuIMmnsrHZa2R4CEDsa0MEr07EccD2BuXAlUBLcyZu0MITcLwbiFyup2fDjaWv+3IxGP3JyRk2LnwnwQOkJc9YfEut22M0ZH4WTUkkrWb+HjNE+SHMPTIV8nNI9Nfccr5AUdcXxYUlN1AJ3LkcloasyMC6ghX8rSBTVeMK74ErxfLrJDuCKxHJ7Maz+ckxxb9HcTlNs6H183bES1V+Bc0p2LFRt9OtjyUfqXWIxItmOUEcOOx2W/MqvbhNN1fi7fXB+K4UgAAAKAFAAC4eODFsaEwHPhMBKoRdmJnEWRbrJkuHIe8OTgYsr3HkAoKLnmFvy8lgboB57QvUM0nk+AiGtplCEVzZnGJO2CFGyTo2nVSTHee2YDFu491mcnT2FSHtG1Y5PtCfFd8sgs9cssYvu6AI21nrwFvd8t99tdIZjFtFZoBCbDtb+M7joNG6rvn5MN8C7A2ds6oqtJtFkhogAwVcIpBRmFnaZ3CPgpWB1Z7BuVTKaaEgDCojc/Na29RHVGrKLdGWH8LlycAJFxAL0j4ACFISwv/e/8P5OmmEAegqV+1TqFNTCUOz3R2OJPqa53aLBtEAtTg70/CwNd29q6P9CvFPhIF9wyMwwTNSXXvEmiicm+qJfdIfLxz9VxW7gTUnYSJt8Prep3GNsP/LsmhkfJ+YrfOMzxy2Y9wt/sVTROqUK6qUTULfcF24/pxelpUhhoKgfId5zr5iR6MypVqtLOjJvFgfcD0veyY4NMXvyL70ygNj8B3b2XlmqC+nKywOcmsmbiM1QYUtyRVWijArQPCP2DFfHq6Ivx3Unw7OGchRAV026+8+TU5lL2PYbgR6KdWXGNgewIe7ZgoFEp6Jik/Yb+yoJNzu0EL6VGhjj9/Us+CaNa/Z5xqIv+Wo/VY5cgieIVvZT/qM26pr5I0hcr6YPsPMT/mfa++n+qr2w2JEas0n5mYaY7c0mS48JiR2ulECvfagCtj+jAlP/7wJodj/D6NKwE3beavBENry1ud4dMb6SmOtg/ICMqkheoJLHrPkiJ0rsSCXTqdN+IFMqZoJ0x7BYWywISpEKxsLawaGe49EBBl46KODGNPvnETksQZYQC2PsBsfB4mPaTCF3m0yand95MyJCHc9zf7ek6bFLT8U/Ajrmwld0ko5kEVPgSF5WGyY6PUuN+hIf3JK/LTISlTfoW6WEbD8R7FjRSbN04Ss+dy5wMv5lVkYqsUFvUoB4imhHwpofdW2Bf7gzaY9cWgKXkxsXJYT31me7hkaqpZ+RdWbsid4JCQ+b2ASymi1uiHPW/97RNz+vzvalZI8v8W176F7YrYZXcqY+24WyuH/gdMlCbGZIW1v9GsPDjv6elkfJDZYtA2EvKYa1EZBT0n4Ae/8AVjdpqEL3VrRH6K5h4vauA+D/N8G8NwBXAjRrPJjLsVEBGPwQ4m3W5J1WawAZAd72nSz9tjEa8la+Y74P348HyjbGg32Nc+GreqL7aHivzjkfM2499SewEwC5EqlYZvX2ZBs0rR5QzOErjrKBjq6CDOgxxz2hJzE0pT7s016ksLtV6/EJxSlt22wd3Th4mAR8QPM+4GBKn+eNGC45u+k/VrlaFn5sCue3kCgeg49arsDqeOUrQZUHWqYUBwiQpevbm+pzv/0JX1e8Fz9rOvf+D2ejtz1hG8a41uxT6toio2xMrOtFXVSnu/05SrHiDDtW6irklfKWiJvgFCVZiDCtNdjSCyeFKnIqDyzz+nq6yzEh5inhm1ZlTcI7IQ/MSrLceNOi/HJCm4r/JgizM62fXyZkPB6Iex0ZShZQcSpCGp9ESOdPbjmdpNwGNVlIPHjpRkgKLTy83ClZuVtT+XcXOzjeGoUWLXt/k9Xkl+99PPuN4nkH0BlKP+qtXmP70RTYqigPW8TNcRUh1Q4LhyVXmvObA7MvcdLm+iSyhwULwwODRvgsB5ezAxC2uzbX5lVih02O9mYAJZUQ8rlYbosNkbcBAEzDlLgJmR7EyjivdRRdvWTCTFrXfG52dVvZt1o/OG76sHi6tgF74eR4A4qHCJRnq52B3GY7RcSoMjhfE9XeZuBB42vwCP4+0BXlAVRO2oVYiDEGrSq/z+ibXo3v2WHfN32FrLIkHR316oRsSFWbrQgxMAiNg3z0y2pBBPar0maLPBv0tYtkjeD83cUHm6zjs6+TByQiqRbwIE2lEAAAAA');
