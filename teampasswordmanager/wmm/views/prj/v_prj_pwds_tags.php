<?php @"SourceGuardian";
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('FD5810076B669827AAQAAAAhAAAABMAAAACABAAAAAAAAAD/T+ddIS5/1IUjiqnx9GX9jQSzcHIsiFPoga0uZiKHZ7CHygO4eODSDOqh2s4j8cxOJ+h29YQdSG0ztIND4BW3pX0ZVmx2hBGK2+goHozZ7J3aQPYDfHWhL6+uW9N4kcfkWgj1HbGp9WQdlYyjoO/SiCSLm6FSbkNK1BzyeVZy1Wu8O9C7GfktLaq9HO3J4SclbGVjBD0Vd5akfWWJ7mFCZsGy9ML3T36GSQldDzHpD+39yAJ4DS4oDaYBb7oofy2ICAAAABAYAACEU+6TCNsgF/XuOY5lNdEOW9H1qYAJACwaOPXSJWMi+hTpW9tIWhWxq07DoDFbPU7TZW5wcS8AxswwBfDEeyOSs/XbAqcHOLm4hRByBu1CuOJGrqA4KQRoi2qaS8gxwIAEIwlupVf9R2/4QAfeKUGG016rI2dIWa0f81eZ7vM6MOSjWTForb1mCKnrQz6jBKOhs5Fyv+M5oI0kLFDLL0uMvwUyEgDUzvt2orpF2/8lAt8xI1EOdNk8SJSL3kEOPMz9OwXnFtZ86aVGKoV7XJVUORB+EqF6E3wR8IqfZagli7V2GM0ozFLT8nB8Sj42++PEhz9bGDTKI2FgLJRSgzL3/w+qtINxXwAHxpU8mV+dNBMAdPx13VZI5C8x1nenzkB4qkwbeswC+ZZHlhfbpCHUaK7+4jhdJjP2t4mUyY5DFsfXS2i0nAKRHppyXPdvaVJLhsww0Lk2NNMaVhItyytFPHy/m3cps6Gw6m0q920dGVB1adKfKmZyvTJCxLaEot5WLlBZniFK4LpE9mcEZWoQEdi3IhT2+sTeWRAsM0GHMZwq8rGK1Fic79Oo8IE3PLMVmztb9Jlw5WicpkIc8zK6jRmC7IheqeMXkbBlpsS75JAVX6hL14n3VkN7NbZ4U0rhE5s1MLUbt+70Hl5Z58f0+olZdefcPi7cKfhe8j6U1Sd++ZNmAIBYwBVo8NxUTjwDWANnNoCE2hRmQPPxPg2006n/uZohQZd+fhRaRPDZUgoZ5vr1lx4q1yN4Dvxev0uk3G6bBeLIwDKU3wsOvqXjBNHP8uPqITmP3HyuFDa1fBuW7joobw0/+Ie/MUEJqJhnSkVrLJ1vtmxE3y/i766FsbEzWuZ3YRWqS+01h93reSvIshGdoepYhJ9Ylzdmvx2R0+0/o8q3s/8p67Q42Ow7qV5c9YAooRJG1hKKm0r1qE9x4314nXPppKSH5srs0QVIrTSYnbQWwLMfcuoSHyCBZCnGmHQwghiuoOJfrbeXKZDrRtD7AntD+yYCjimBzx83vG1xa/kN6egV2PKgbjJYUuNca12A5atTaSpKzJAWAkeqiw+Bk544YcHAVLRCzTalXOl5UVwF7+KVKHg5dnvJMy3v6DVw9JIcb4aJekFevueCDeFJLmcgWoyMZ80Vpq5xjnsL8zUHCTEtS2yKQLwLT6HEcJiQUGPD8/JcHuLmjRl7o+uoyaQK3R0lHOxd98JC5h+1a860th9cRmOuck0DQWE1B9TBE3+UqMr4LRk3H4WoxavzrD1M7Qgc4fBNIo/O8YCc83Q2zevC9MSc0C22rsKjue95JMyt5qntQ0toEGDzS6Ps7Vpfv2UfkRmEysDXSl12VcrRWyVdlAzHwgNTCDLEKJ367Kh2JdPrsj2/re90oWqzTwFy5mmapvSD8PmTMPsJPAk4gQYmZnT8IYuTF257mKli9cMFDNZ9fJ3YwN+yDdsCVfpPtc0Gw1Y3HkFaqDx+4pFZbouZ6eyI3SPFUXV1ABYovYNox+cN0+0WPm+iU5p8eZk2yPIGeHe/OwRE9Fu/0YmqpPgi/ydoxHcOOwDxsVJXZ8ajndmkX/EyHd1jbpycc59ngdGogLeLdohbSbJycsfinkybT3XK6ri32DX7WuVgbdZmsvzEIEcB2+LY8AmumIHf4D0+i/yL1Qbu5lD41WcLymPK8DQ8sFulG3yZ70ZFd0qaULgsJH3inoDP4oM58U7PadIYh3ZMvDe+1qBNjYeQMHs9YiNJUb9oxVoDhqiwR2ycuTbGcwVjHZV486ZfDwOOWKlapjubkGla8XJVeFmvr4QPw6dlS2QNeRotFjD00ViFG/yb77ik52d5lmIjB3SEJLTGeSENatdG50hgFND+7FRljTYQQvjSRweVRXObxk4DKjuZwByF9XN9gmX+Az0bS93gGINrteyH1xYJMNMuVKqdI2z6G14BSsCKd244jHgiF95TFpOJpF/tupydEpsJLXPx04qpm437Rvh/Fz1E55SPNq077Ru+8/OihMOxkrsSJVib6iHmpJJIjGsjIo2BMZ8yfQd+ugmSRzjTUOXqtmlu2BgqPevXGl6wNju3LkNNQ+GRUsqIs75T+aWrR4ttV57oPKJVZeXGIRuAKKtiFHI2UfsJs86fAf7n8z7kgVI8tUzbsBYVv0OAKRWuR7gPOHxRxPYGaI+Bx9+PAkqJYo/ectNRm5CY+4OckD607O7CXwLbwaL5eKxIhpfIkLHo/fStMx3y5FDVCHHarGMIkxfHpZeZi8k4GmfKyvE9hnMaIOSmTaagYQA7SyQnVKH5ZbRLmBwvHJmSZ6Awv5wBaU3Mo60hku5dOeLPGxkSOGLA1BHTulA8x5d+NbP71pBL3hVASUyCY2e1ERZJabxa1+6my25o/iMg49eKMGQi/iOTlwRFaH3sH1DhdkF6cA3Ze8B3BUgK9tLXWb8zsAnOYAnIfDtdaSxREshhUmKYXvdLd1Vqr4dbJWjnHWTiJUX++OnVnCYuslJtuwlJnJTzboJt8+FgcQJAXLT/vn8E+Ppx8vC3BWD5jkRUpe9ldektmKY7DSMZTAHzB7+1EV1hFhfx7qeltY2GnnVYi0Y61eR+r9XLSOXiNQjTQpEkYcOfapANqISQ0FgW/U8onL5wf+HXCJT1Pdua+e4aNMBdOTa8gcPkjlq/AOd/vYfgrGTPxheW23qAx6nvPPxQuo/0w+AeGRAZxynrqLRDrvDOzEJ6zKpCRaC5e6cx8zBhryJw1d5gTHQbYged4Iqx7+AUnV0LCe2x2wBDzgAleIX4LHRdF+d8sY8EDt7WipVETLII4fvYxxNOP3MLD6DzsJJYsXCHoy1FQ2S4mf65r27Wv02xERqEmc/Mja++gzkQUWEoFCXloJPZlHLyuvw+IaEHgqN8EDXBtBSx0zkT+a54ERhrQziXkEkpUK7lFHafk7t1XokgP8PJg4FoCLora5NcYW3CRiUKVaouJzaJ/P8FyWkLbk+on30VBLbWdKtHY/5EtCHeYVwdyiacop0GGja6qMzTCUHssBBbRfky7Vj7haGPjvJ3gwpdaX3kg7YqqdZksL5VLP7SJyiXJCxkjtWDkL33x1OmJSKyev/HkNfblD125LYL04yelSYLGvQPt02Yob1dZyVw+VdbcavAzCQda5xGSeNEAbnre3LtsijyWjpfSQi1TetG/Sj3y8VSNyqPV/FxKUmfZmUZhHKFHep7m+xm3dvT4WnaACWQqf+08tIEoLKW/go0Dk2Zvb2b3K8ZmTOowDOuiU+sPMBN/ZGFpeST9RaGcdAbTk+pQi36kPe7i04UwNttmPweIN2WBiCSCsqK3FIuf5yJHfhSnHVuEawxzHpwB8fwKuN8/zKgdz+w3FpDunR9aMFaAKjhaANxxqGr7Msy2ShtucVM2W1RzF2RUjiIXDbArVF/ETrCzzds4De3AtEeFUH0Uaj8V0gPQ7kPyzXq9v89xfuQIGaBU77Hlfp0zTsvz7xTANOja51iDARIsCBA8GNsCfCZRtiSoE0X/GHKHze0tmE5caG7qMn7FbV9HNqION2m3reWQNT13fpKCtWCYj5gL81y8ZaIG8EAUyHIcqNUJ4sX7lqqEokPSMdxdMhChl8LtXKemeHeWvccGVGc2uDPzMVO1qjvlyZPS0TW5L+P7CUsv5FqCK8bNp8ipTUi7/0mtekpB1epkEUn53ePfI1nm+8Pq3spfsRLd+yGOMafTLH0UwtpC2v/tQsmF8kbipV7iMElfR/bSWpHX13slW/XfCo9c8IZVWBP0y/DUcuCw8X07O/vjNEJKZ5xQSEM7JSugHPSqbMgZwBRF780L3iQzG+S7P93FiYdohQtV1i8CTuoUIb4C86GoJL4iD4zOkMB05jo/K9zV/1o9CSegqjsMrnXGoJC8MVM8yvJUiGMHKOpBC1mOMa+neOVCt+VDFvxhSUSGEYIu02n8AfonDg1IRh8ERL3cjB24iApJDs+1y9X8Q/vHmxseWJJ5lOkUIhlU7cRhEUjpohIwzex42yBVg6CjMYnSh1tKnF2jUtz0igCNzqbsUB6WnsxyJ89VzSHzPNxrsyqh31j4Q0oeHXAJDhA0tn3ErCZI8p4oOt7evcrgIsQd32gKzjFBWA97hfkrWqlPB+v/oZoye08eF+0Q7rBgZ+fqicFa/xdRPQyz9s5K6CIS3WO1uMzCdpQwDJuEERxFB3t2Jqx3QIlTQFc70nm/4IrA1pq25+ZMe2SFpnfVz4LoVYF5jA9D6d3zgTBMz1p/rVm9c9MZmoAEUx4+CtvWPgWv/wwq5monflF2SgtyYNnam9CNdfKfT9jruKFBsZo/edY6/6huUbAQZX10zBXJ8EXQVZwghaumAcPvq8STrJlvzYbk+pg4HN251upLCZaTZVehohoT2AZec3dpdSTGZtzRyHB+kInBHVBIc4gI7khLHzXJLGZRqSW/pInJaGsDCmeZiJoXWU9Pryq8Ri6F0A/c+FQ5lLpIcLhmadi03lPVMtl2knlFC7/BdZeF+YJ2lcUSlodtLtLIovelyVnp6PTIvOPG6OqHlQ5gaxjLbCz1h/Ps2U+GBmlOTsF+e68ZV569Yv09rOiUEdPcEAxBunPv4Kag1R9UahihS09c4AH0AYQmnfmfszG6ESzn/bluSygHpxVlNDpO0Sa0mhl1NRq3ooYRXNwVXMFrs30+oWmSBaXTqHTmx5XPKh3ClVolyMYuaXHMhjtKIZXzo1XFhySjFHe5lqqIKEdQjGz/LiMfGz0PobTXEfjDivgTGU202VxStkYfC4x0H83VY5LjD5Rby/cToddmDBKFDlKzERdzGGyu0ZvLKWLe0xME+mndf0+t5hBNEwC8OiueFRcxlyqlE8A+vum2v6MLMBLgGT82RHnOKKz7YyVZjtUB5p3MtD1rhFG4yOariMoN3edCoNobI3nA3ceUJnsIfG3cb4EXz2yXe/ChosMI6ECjZiAmqfWcl97nkQuGCgCoYxNg5hFpcec5n/1THk7StebUCLIaFaQEeP6Z6/SO41Vz2DMrotJaWzaEnVSt19okZ1PqjnUxLh92w+NYX4qrvKUAKjNCoZRZLuzWyhW4BwiTuwQm1GAEHsqvzZ915Ktsze9ZZq4BsgMkaATWyD1D/fyEjE58ApeEhKRGYxDkDbJ83SvjbRYyBSQLeL+wkhzAnZpqckvfLMYCjC9ryJdVXNc9r2F/QAmPQhX4KG64bBaZmjTwXXxUD505lyrqzbB6E2MzWsc5nfKlQF0/e08UKg2kM5ZJBPUkAKIlCPBW0oK4E328Q0W45RqAV/C7EIu/v6DHlGmIVX6g95J+owC0aZAh22jK5zeFRExWYFBT6hZcugdsulNEpuBktRq2ht/wJCr31d5oWKJgk1vGdza9VzQsDc/07WII6Z+3/6J6H+8UmuLgth+u3g8SmKgrBdm/vmLvuIUO+2LeEfgVGxGiNCKlcKDR7ZrdqZiOnD8nm2shGAPE7IL0grewEAH6Z0H3RtSwUNGV6h3RQTR83cGkIDOgVCx1BKeRkobSfncntNOem4jbeaiOJdYsWCJwRqC6eCsUMczAe0P3oHUhos0qLWZ36TmxLse9SwQ26wqExGK1TPGMKi7idAFc/nG+dVVUiBg7EZZj1H+skdZmrWzddDL0VjXhEJ8KO1vW9ATqwVCL5qxmzHVwmACEVh7cGguk4dZnnNDREE0R58XyHqYeGxsi6TIY7Do+dmr7kPoKWb+G3jU/STDyajonDG5gRZISDft+kJEBSdcJhE2ikpiQewpU3FxpBCqbPMCZu6KfaFGFcxvJZ7u6m9ARDh5H29+J0GqQMENU2okwjppzPMWsbvahwJHuureYo8Ge1MA5+q8lc2Zw5VZtWXclp2qdzbErgus8G0QIBf5H6JcF9e/j3wr/h4puYFkrE99rmJFDbM3ZVd89f8+SrNwxQVhQv0YecK37MpTfD5lXPUcecEUFj9Qm2D7FlLRjCFEsJ9tpk9UBw+KP2/oO6vsU2jXFxNssW+dIbLi3KTkAn/4Bih1bDmEiZT4xj6Nnf2Rhoatjp1uTg9oj9Bu/JQblaiYqBXh9amvaUWe0p3GEI2qNVQjDzD3JhJHB6VgEXkHwzNqGk2mW40mCkcW4eL7D0sU4Hxsqon89v7UwERVAOfi5bBYs2sYn4Gdv4TKY3joM2hxs+DHOIDEbJhlkGJ5MqDLWN+oClzHXzNLnlHdRW1yGq80Y64/GVG3cjRsXH1VGGhlIlTZspdJfp5vlUhq9SafH6Zmp6REIdpxhcNYIxjXyGUZKgFhRJzesWDInvN0fRrXwdG/5HIYI7P5ZInbvl/iytFmWBaDd2pwtzD1OmAHFqGOmdf5P9GnA527iUSoEO+6KAyBmGfshKzQ8e0OMvRh83ODJpXz0AKHfps8y8R9QcZG589122O31H3MCJ6i4/Uyqx3262zOPrJoWglXgfxuRH4mfQiYOSgHBha58zruPlRxiAQ6SAG0j6rln5bbyuNqijw3C2Lv+W7Ht7PG1u8Vn0WqrWcA2J99LEDOu5G7SFsvHxj9BBqqaYJ12kgfJpHI5Q7nbHoInBFPYt0jyamYhmICESYFsYBNy3c+ce+TY36fG8D227HxNiJl9EpJhOw41FVqMi/vapYNWjC8Q5pf+2+YkughYlrMCI1oNFjAPsU3aljN1XR/djLet3WRzQqDLsqNBtX5WSYFCZvmbBRRy/hPNBBlXEXmpVIW6E+sxwhoQL4LnbO7Q1ZKeRvIFbg1Yd9Jc2UdCvTOkTqaaAaOn0EWecXJp3Dk/VcXBAM9aLz8z0V9fap7/FLdbV+igjLXLI7vMjHSCZeXV9ldC7tXjh+yABt25DS2b4q9PbV0jSAxzXFJk/Wp5airVMLhTsReRfntWU09utTHuuI57++qgKJU7vu2hEeQv2upYEsnpBHnxPjf49WNh0Y2fKbfm6eNChXN0c8C1rY7ataBRVSLYmeTOduD5mKhWZGC20QlAvEP4oOXdiDJH8dCNB2uyNLY168FmDq71hMVJCTTN21UXQEw5m1l17osoNjbegw8U1XMSYjByxc1DcBT1aVt0UU0cQ6VTMfWBpussz7uyl/GizR4xgLF7+O6u1FK2dpIxgRt97aeihiwQDhdbBeVe0THBfbksJdadNzLEoVITqAtBkpe1JLTTKwT4OW4zoEGfPIE6wkM76D6VLp0O/HeVSEm6YDXG7V1Zsro7QnP83v2cV731n7nLWr4CgO6S7QPIZSNtKh20Mk2/EZZnVq+UVeH9eFt2aygEh/cpasCMCjtQHUILnpqxY9r2E+ywgcjt7xFIahorztNT3MDCnv6aon9bmHK/tkVyk6nJU5H3brwJgf2Ei+YrAxOrteHOD5Rcf/7rOEsf129EYMM1xWkEBT5CoNxmV6DPhyWA2FlQ29YgH64qm8GRz8WNv5JaE7R7ha3/i4Wce/bf462rHzljpTDeAxmX9Qpc8JocnUjeSIQHfvMahEk71B2oO+zFX9L+w7xX70WurWKWHE4aUbRGnGX6uYFXEBfveytCzoDnuyMoLE1QsCvYlIqyy7O2e6FbNCM9S6f3mgBRlX7F+tjnGULeTiL2Xm4p1QAAd3WILvjYgSTKInsVd6Zr9saqBD43bxCcIgbo4rhbyxvXHxzTm+AK/9C8MwBx2rYbb7scZU7iEp608EahzEuudOZkJhuULCEdN4ZNxqMIR00ycSM849V159A4dLWLQnGncGmIOGnZdB/mBmHOitAvlZxt60wXJDDe9PB4gyrTFC2pQnaqenL2OmuFu/bzxc0gQJTdo5F/1n3JUe1fITM6BjKnKcR8nORymkQdEbhpYAKAEH0QPZU8ItZJmtaMtszD+4/WVJAi296fuc+48tcMKYEDCC8MB6aiDPbwg+g1xx/1/5HSq+CUIFFr5qG4/FGl6DyuGsk9V/9rDkaNpZHG4OPycAWQaZX12O+24DUu+zMHECDPfzjS3Aax7lffjwWsOXdTutitKtwufUFOFkK1ucUsrGrPkwVzVU9pHGKnVq5xHePSytu4NUJX3jdY0lsIIFgZFWXnfLyYQ6b2plziC89UbOjgl0sxPi1esDgKzarUKL+Zlmh+imNFX3DYaoygLTqy8PwJbPwS9p78s9RimeOIwMDFY9lu+r1loZK42CsHICew0mFc+C/fR5rDI/jwCPoLW8CZlWvtbyZgRcMgWWKMH5C56T8UYQr8cEYUcr/MqzJfWlDUQAAABgYAADwiYml//5iDvSy1LRwA6MnhrfDdXmq7bUg7kyrR4Exgzbv9IVcNGahEG0WXCv3SpuMVBaWwTwrbD0xouiekfQMsraCMfM8SDyWbrXZ8QoKfTwJ7HXCoZdtZnxB/CwXTMavqSozL+UCDWqsIHX5vriiho66wlIRnXdXjW3JtPFftj3UojkUhCeD0q35O1X4n3JBtwkN24OtUdu8wh+BbX3Gc5Dju+yuuDVYsX2o2ynnzr4U7daNMOB0K/xV9o1GB3Cge4Oi3GJG0qXrt7Ecjwp5CpuaTooxlvyreuGHK/1W6p5VH4sofp7fwU4wuAYfkckqmbU1Bt4+5bdvPWpNJ2e113wm8MS032YIrfDYNJeSuWOXf6xW7lMvwvYcn/Q08yuy6YIg98L89l6Cr8/VVY4kRtVHeC8NP6/ulevbIO8SpXfZBU2zjTO0SNB3tTBwFuJntpKvzquRq4Wz1RylY/e6fp8G9bkUMn/HEUeR0/HOzI/noViz0xygZujAmQgI943DCcvqpsSiQDad3DQHuV1e8Q3WJWuZgZUAJICpavTOPTM5OIsFRtfjHYDs6uUKKl0p4EExA/X7lCSowYLMuQJVsSxv1PM8BHY5sg6rzcMAzKGgWNyIdRmCMn3FN+dwgVcL94iqRpZ3HKyLpGA/YKQqfZF8jevfqPy9Fjn6payde9ciaEU9nwKlC2GmZ3GspWVi3v/c3JeNN8US+/LKrZf8KzXI+r/iviQhv0uDdjqT/5pW2vJi6WG5s2RNCHvazt4ruj1dJdYpd8Z0zfySUGwgml0nSU3+k/bgPUXDwUJH7S0KqsGQ7NZoVX3SsvlJrUnBNxjBe5rUCHveLcb3rARzrttd9Yx1dvVgySkIBTHdCVKAqlktgescGPdMS2z69wdW1X1232d1Z7+RHnse3HdLbk0P9Re2waR/7eF58ixYcqz9ohzmmp+yr1wWcuUbBfJ75Dn1lxH07jOQ7FsR3nFUhezw6tE6W7ANbQNPiIhniJaxV4e7kbaACJOszqsMupn3fq8F59m+gb3RgrJOsJD6p4qxI+T6nodK04P42MIeFGTc9YRbDopSzOUNNOMJMgIAh8IRSaP3Tu7kgJaE8tXwCCULLY4kw4HPW+fqXfLc9jSBwytXC+vENcS17vxghkZyDhqdpEEwQnId5Um99OKXPp7t5SXDNCVmxtqgeAeZ4J+jquhywlwD3YpYpUyUiZvtRk44iicjuUshj61NUwMLimeLBKpsk0CInFhYBhqZdErJJbmfvwH236Z3TiX55P76RvmsvRkF+pKS4nJ0H802365+VdS9dMGYaISrzBG4PuE2SgAhPSrrp3WD8w/VrMhbJKFFtUbeGrTx8mmi6sFUAtffOQSn+IczkuBVK1TFBJ/RS6iGcLHp84N2YhAU5w16yGjafRssJjaFRpWbwclfDYdePGXrFFO7m2gfWRmuGl8SwmxkB6Dzzb94aFDWapd/40gxECvlZTQcg3DHR90526ZHrhB5TXpe4TTJnnKLrVjAlow2HvzReoWaaXPIDT+dbF9b5rqdtMudSPvT9ZxY/C7ZSn16yXu7hgWK+bhTBJu4Yw47SUodDkPHNauyIgLRYwohPrct4L//JTU5mAFSPnBr3dH9YsrKgv4Y/zlz4bA0h1iazST4a9jjBRlVOdKdfL6jFHqxQnzCPC8xIHpACKWMnhgbCVJ228vKyHrAacjXeZOudn3ceXzCB0VZBlXxKDlJHitjW/CK0BlcMEArQDc8yWE1/7FWfOmuEFqWzKxK/LnnIDTqutc5jXuShMF0XU4uCW7uy0h8C+zZk6tspthkYmOXnUJZaLvXjgBqE1haesGiUBIMu4twKAyCgz4TZC79neaOQH2+xaU4z40h5w6JV9MVvV2NWrkHomfMcbHb6PcuKo/JSYiBuaaNeoZ+nPR+v5XrtqddwjzpzZNQBiLplrU7UACmLYud3Tr2mqp5w63Lq/oqa/V6t+h2G3eV9gjiiIWStmUtV8DLPuBmLQqLwrdL+c7gsnX2NLxbcPIrTzuAv6dL+Dft/dAaZd/szGzW+PVAEhVpGalWXlT99v8EQUz5hHm/2MJt0g3MgXoGBvcnh/GJaM2fHdi1gRMUC6jRaCUUYV5Srm286aK/w3LmZZ3XVE559scM3QBSHlRxGJ7TWPpZnaqO8G/mFtNnXHaqWJ8NGv61IdIxaqp5+wK1j+P0I4JESwB1aKAWBq2U/gN4UQDjILcweyfOnuws1Rnt4RE5I8ZtU/oMuEqbEACbJZgsvD7PFGUZHGSikuL+gf2SGKBM4wyKA+YwJOn4IeTruAjAQ7osowY+8nT+12gl1/afaNDhKDy44CZJ6jzWT5qBfWsrfh6ONX3SHPUoOhrKb742fkTbJegwaAwvIzGeM8mczCy2Yxzuo/4RsbUmHU4EJiAXCsiAz6C1o8e0R8I3WIKGDIXR92cfOAXxH+uJZrbEwHDXqTrntN6kpnJNkYTx9ski+yUerbLAdIy8AyBXyiEs7ppah2xrCVdhCWD0zQKp0rJ6baQXbk4NWRmtglXd1GhZsXa7xXXEJVLJnZnAKJF7uYgPSU34PlYMMiGqpj/EiQk8R9rpWNYyYp0HKM7Y3W21ekX8laHB5ihV3pxgNpRjkFQPulP/nZiLic7KU3c3luoeAVblEweD4WkHvjfUkOTrsxgWwXXi1MD3R70ZgPLJTThH/NDMyOIX/TVkm6WehW1lxk6apdJ6oDMVQg8CBY8bvPwl2UZOlJ1c+u+UFWPFMOsRFS5emG5IojjAifTzfHdskTKVyAo22o3Qi+e382sYiQl1Cr/CDOenrOt7gyI5PzOAjeqqiuqOHDSVmjqBrqJDOfqNquS79GIacWggIQD+WN04yk/z3nXo68nUYML+pKrea3ytKrk6W6TqCRvXDEpl0DUhWvzb9TE9ozeQS2dT2yDxyemxp9tmS36NNizDvNwBArbyjMesXYeqlxBB5TptLgDfXbN/gdQpwkGaGbOSxvQ89lTUwMC3tpDR48fYnVSllw2IWIESnAl+PQx9VA1DfJTJI6p6GtWvbn2L0bapmPtgJy9q5i7RipdzhOTLgE6lleFo1QLH5tmgwSk/TgaCiB2wWnliKoiTf4jgcC0/MI0mIsCNtFuSvFGgfbkB0i+kjBHvIyRkwLIk8je+AMhl8B2gZPfCAFQBp1d8YK38fTYhmhzVbTp9s0Ru7KP04/uLxfceTkD+vQZ65pER1VfS2s56mKA3p/mxu7v6mbGQvnYdF60XVRw4DHpNeMUtAoAIPJu6EOW33RymjJhETgt4moaxbqd0ppDUZICkwiEa8pXjwb4p/QT/5OvRqaLzU63+DLBpFAWhn51j9VpIOnsVMtUGiWhF53rdHmY5cDz8j/w9QxO5ujfch6QGtjSj98lQB41JztiwuYKqGUfToq28UjNfXhADFqzb04RzbRD6EFRPIXU0UUUbVt5eJo1EAMe4d/rFGVVa+Jg62LJrXkBhGUQLlSlszZy/r2gGL+w2rD64fwv/wDPqucsemUSEBmUZpsTGXBot9TMwpe4UTpfdh7XzdCoJa+ev5l+zFhtpogW5xxIne23KvWQ2GplABStbSV5E9hW76tB2UR/8tSwAOZIwQrGAjO8EnMi36bdMSCoLzVU4+a3hMnrPa0bJ542QjBlzj0P2rq1iAk0jP/w2F7LBthTuVtz3P1ZZJ6ZSXJDJvq+e+reX8HshFo3bSrIqxWV/uc29V1ctYpmgwgb9mNSK8cb7h0s4o2FmUQRaiJ5xQeIirrYJW9xz2eRFmatqZggb5APQt7tHniyRSF1/jmsQFNUi2ppPpnerz2zPdnbp3cKwDwV0wkLwbwxqg374v79XgqyHrpIGGmCfd99h09Zk5Rw05usa7Ay7OB0nDxbV+dvD26P5IheHEfrq7UQ7+94BKMqqwTjTb7o+VjuUi3UOwOUjk/bxamYNtIQCjgyRH+tCXDASoWmBf9YmRtrAheKyPRMxckohFTJydEGQI/ldPSIOMAaaW5c0r+xKPtRJCS3bkpGSt/tABNSHsIHnbb9jv7Vt3BDEbpGYGQ2YxgdgbnJb6IYaJaqXqQqQPDH2IGPgsd2IPvLofAKdBH9VBZ64d05UcI8HMi5klbX+etl57y0/cC45TqamTnMd6YJ14DuFKUeF8NHdk6Q+Mhae33gpjp5bR05bb019mXzO+M+DwmcOeQgTEK6xhyW08UXxuij9O3gRuKuNrVqZ4Rd19Oal4I6E3Fnw8PAyytqsJjBb8vx7Df7BK3hN5rKzTo3ZV9K6O62p6+BV2yiTAn1MufNBRj+vartOaxSgKVZq9jIVNLxjakwKimGmoCcSks+NbQ9FedgQox5Fhk3C8Jl4p3p7naXCUiADB7y4X2Z5O8E8PiddqmYXUfQTqhBbkHyOpgZHRwtZKn/NuIJyr15j6o4IKfRaVXWhxHNS+1xH8FvDzgdxx7Df6bdilw3EYEhtP9Qm5ecYt+VVJAguqwqK7D36yhz6toYccp8KX3iQ/PgmdVpweE07TyqkXQZZLqehhtAzkPLUbM7stw+ayk8QMia13deO/b1P2lvPTqMsfPOxGBijuRTfSmU8L9D/MtAbNtWX+nBiNOqcs3XIIShJRwP9k8IJlN5tRjsKOYRS1u+mGM91B/eBGW4U/7bw5ygsGY2hrPMWMQAN4Y0pcE/7ejTrOtSV7fSiERl6ZWd6LX3jzB0TyW3r6du0ygnVFyf5jBx23eHHL9QLeuyDtqQyPy/4x5CiSrGaAqD63X9DtYS7AnFoKv3p3KL7KSd52D819IvyYk9PTTgef9MLG87AAHDBBq9oU/pmzR9Yff8DnukdS8IS23vnk0FJRHfCcGOOTA9DimOXjh0HY7lUrH/bCQCfWCiTwuQJ4FH9bs4bX8K14VLOHW+wqPP4tPqwyi4MSc1hN3isYpY1Ron/cpnUyMMw+6p7zNsxV2s/K+tm63HuGHtwDTGtgs/nNcZvcxP0M2NiETR1c8jFOwhIsFoKmOZUegu6jletkn7wd95+9BvjlE8+HQ7VJbI8eQlL+y+PSoFabKwuLKMPr6coWcKFvoSrqrQjVZRYZkmEXa7Ioi/N40EzQvqKskLbQbN7Wy2Ts/ifsayxtuc9IaUoPmLxkhqVicG5sreo+CWKK5L5LnFDHQoLhzLCyV6GS7Sr5nsWNUQNd9YIOk5+BLSvqhK1NmiV8+e3Wyq83VN2fze0hGeccrFTiBeGwBfGGBbONdFz4s+lbnPlgLTRyC2LkQi9HADpF17fwcKv8Jj4r+M+o0WU3o9LFM9Na6NGc2k+aeBqF4CjZ9/InSJlaXcI6Rd91jv3HFMW8iRywPmUZV4qjBMsQAe890HalH67VVRogM9YnoNA48/knk8+B7t598fKpcUKg6q/QLcxBKYsXYUtIqw5dClr1wTpdMmDte4Thp9dClLLkm/z+sGC4KwG52bBTUsGSRnYY6Buj+Yy9TrAxVjsQ/YBsAkE7rBOSizFLFMH2uIGWEKbqrQZ5CTEPsncRkUUBV73aXQcd+9h9g93ArxfBTo3DwuhGx2ZQOZEnzthMTaW0mdDRwJMlEFTroCVgGSCxk7HbXOQCb8djLNUdPi9Ci2lIY/F9kXxqHdLtXh+O84KcIfLH1YY6772+y+5qzsellhntZVHkP/lZ//diBn9sQT6WP8b6ZRkRw7NwqLU/BJRB5oECAEVH+HHGgj5TzsZeAJc33uHz2q/YLv5URe7tYHCz+wYUyB4l/rzm91WLdbBgVH+x/4V/zHpTIWmmfWit6zW9D3hweTXhjX7lssRxZAQ7ULbVunFUS55I3vq9xMsqRohIoCQVlkJDyP9OZBKyRJTTEcqgxYUd/Pm5iCQVrhYtNs4wk1pLBsqjwZ6Bnn/WMqYKVQEOdxKzN6q/fJGshJH3jheODYbOWQLHQAUAKmU1r61SLI9G3PfLdDWc5vRmVYbnAxqvhGgKIaaqjkX1BMI5dty/u6wuASD3AfcztnPH7GO95Pvqb4WonjZRZyq1HJiMohySu7iGE/qazJgpG7QYmQViNnYSYFVnhFIdfJbnDohnYAOsyO4E+/OGA0P7lKpnLhyxI7TAjGKmfHEGy8YZYfkQqHELnA2q4w3Hct46RtNe2qBFP5/X30pMBZmd0rVXjjgceHyhTnxoHtYCmBXtfnLMe2cLZOHVMzJ8guUUsPZ+Au30MMHxTFLExTj4onJSDxf4ExgnZjl07RCFQaxwgyP8Jlj31reTGHD8tPB/DPumrfdY+/uWQQ0tpLfrYrOuCxEldbYRHw4nKKxCrtjU2Xwz6JTUPJTnGPiIehdJw/olOkYiHBktRJgdVQjm5uokrBcK2i4yoFGNsbktY6vbKK3p57PKIW9W7by9GU+cbKvztB0rmSLHb5/JbGyF+dgd+qUWuJWGMHOkzfrIQ51yM9CSzQOwwNEkwc3I3081rcBZvpf2s+Gp5/UlzerJjTPAxCypVj5kx6BCH/EyDOew7Uc5RKRh1dgCKx2gkAbFOMyws2o8YKcLaAWJUaK1rG1W0UIGaksMn0nv9lnMPK/0YZHjj0llz2NfqyH0Q6anTBEprtDVRixvrfJ1zhk3vTZhUAiFANIcNgbSFRBFToUeJY300sE5oH1xi0RKvUSl6zPlB8C+Wb648xTP71AS2JE/aZzNzmvzEAx258jY4UdKZD8t4VODEn7cg1Fqr56ic2Mdvs77tylGVAmWOPPjZ7fSz1lg6KdpmlopnZP5HSgAx8TlyZFoGrlVFGXdO/F/G01MdevuwIkzWrC+YNsw33RPH/lq2zLt6gayRDrgT1n+L13IGXG5Vl+dJncJeXUZ0u9dKNL8nTDrYfy/21LjW5RdAaCJocl3zYoCgGQ4w8bktjv8mLdgt+FF6WiMp1b2EaQtIhZyB3HzMMmy8OQxP0w/AabfZXkCOm6ltDgaueVJoLOP83oVOKAnxCayLcdBn2M/3fJjtEhLzAB2dkbQaZMlkH72IgrqtztIVFbIVYtoUroiwb5weLtZ305aAybFNA4QuHY/3+lECApXda3tbCz+3oxFi0aYStD6TE6AgeGyFmhoID4pHWGAHJRJmdaWtr2t7vfbjla3GGbXDZbNG234D81vbOB7IaOoJySxcwOB2FQTi+iS0oTWIDEtfB9gZKgBKEGRuwrMHiz6Dc05dnxnCuUSVv0G++1U+A/s9dn5rNpBoaeyOLYZRibzJ+BwvkuvVQSaficilVewp/m7QFVFqQ0Zi7b2PbMKZyUcksMXdUDJco18zqAsSDUHtu0JG8WGBS7shYLMBAQs5lsgqndbMsxUChOSS5KYRM3M/nrW9sPX1qbFVlHLztvKGGNnP0N5XzQCw4wph2xQlZiwaQq37iYx4acg5P/saWe27QMvBVIgyxKgiowtlY9V25roUSSs4IqQ2EQn6KGs+MqsSFz7oBmnk7dF5eJHMwevq7gKAVrm0DER4mk+dUFxUKYbJLGD3pDOfzUV7AuLxOfvfIIDDQx3WvBNxJwzTCrGU8JqA4xFtbx6YJW19IrXZ3jlB06ORzcjobNWnu6RAXJV5WfQPxxE268bIFo0ByBnF7wD83b61y8zYHyX7jG9rEAefiOs+nKA+Nq1CyLqz4p1X+wwI6UDgSU1kEwrXU2c+qCI+wo3HkvVzeMm9IBb3Rp1pEkoDYVllcNmqyHDAXaOTVvOmD3oD88VCJ9crTgJtBi1Z5q1noaXAA8EfX5jr8M26SZWSKkVY7TGBIEPgN+9suDIYeMKj0w9jtGit/RQ+sVWnHK9nL//2Mwf7KeJxrL/5sTfpOWL6UBn3ei4pptBo90pWTbQYgSHKY9xuxkqZKOZO3yj8acpZLTMbF1puJKwiHAD9mlngAsdALaiegWvTAmJ6kR5wpuWKOj56ZSuEJsRS64G7h+qNevEsk216HlVgFjntK2oq/fGPejvxLxDGK5uUuVKzeR2yRbFMjDisXuxja4duVyp1uZ9RJPr0mf8uXCsPL/dPBDCOlr4OradpzpjUP3s46t1yydLL/XarnB5Y+9TeweKocGOEvaEzIRxjO0q1729bSEpOM6W6nyREyv+O6ABZvWp/CXagdl27RSyGZRByMmlaxVOeeKhrfZYoccdqZ1gKkbtsERNhvDvQqPpwfQdt07dPCtCM+ZRjlkOFDoiBZUPIYSyIdPgByWjn6+0cYo5Ehf8amEIrGN4xijbDFkoIrpfyKW3k5Ln4/I3q13lnZ04L1SAAAAGBgAAGOznh++l08BMmrVynA2KXeVAPULn4rTmO40wj9s9gMrNYXGoS9zK8+FF9AgC8msfmLJWBrLQTk79RKp4PJbAm/Bli+JX91rpoqyrEH7s7rWzftRxmxx5WeHBbjxzXMiScNGBL/GasnnBw3EwUE4yLWhxCHTclUUNZiYzqbeVq2bnikPJTABs8aVWa0BOKmx4+qUoGZ9anRy3YaUduU4DqsxU00xibAmAhyAdF/Eksdm0XMlbxR/gXZ+V9znVgba5o0ecEX7QOrP+Ue0GCATMmVxQrCxBmmyBtk3yAUZFnHB9UeNe8QRj6GMUKWe8BTBc8rnAqn4nH9MUhw9BWlQhI7l27A0Q7TyWxs+gIs74FVpfkAMa/G9/GPZ7OsuFO2mTLXG/MCPoaZZ0ExsHRdiHj/Vx2Le+ndH277x3r1oUniV4QnwSPUibNX3Fwn96mMIvWnEMYC5ZVcAN9R6XXU8LmMhjNDuI0I0GOYMnpTBnvGKLD7eDC6TqzHCzyeZVjMn7k2uHxjry39wShym7/R47hk3L3dfIdin3O2pzmy72feHwa3COrjIieAYk92nhus1iqWO2PpahSavbgd0iVDsF93e1snjj+O6YcOdtVO+uQvIolXo2pagB/ZJg7t24OQLXosUpNijBkeCikKr3EIxQGOx0suFDl3zHOIrBtWQRjSe3wJzUS7uhhnOOsCL238Yf/d+TH/u3Irgcmrd5BKPnEPCVZlRcp9MNeaYTRO5OEYy7ZdSeYMm/MI+xXphWrhlYVkvpwHMY6xm5uFUzFTr3xl54tpEodjkdz/uOpWDExFs9gjmF7JCKb7oVJf6EDJO5CJiQodxniKLzgJaUJlYhPKgymsM66WNsspBcCwJv3lFD+TRgUlBZ+Y3IO7Q99hAP1kxJuEFvLCqp1bdQYGnyk6H8hsyPVKAJ0YxJDW4QN+Y2ujtlIhYfebD4hdSZ46U+h8Tn3yv6VVCKJynJ0krBHBQsNDirBJxAiAPTfHAyDqEH3h+hkHE8Nx8RTdD8zkIa8ja/4B+uvsMK98F/w1knZ55hMKLRFZOMDZ+MAqoS8kBT08D8/Yh3PRJKUxWtG2yEe8n5nBJaGT9+OaJSM53alAaXcUb7bb2laxNsWUmuuEcEDNZ1HWTd+vpBAHOotbPE6fx/1ofjnpMZSwCiKKHsZYau9R4gncZVxOCFoK4FKQ+Yx9as/szoK7EJ+mhSItchZ9DIxrlvkvKG3keaUcWvSh0P3A5aNhPfxlUgZEmoCAGBl7J+jOOoTza85Wx+z6myUMdpzkvYTP5qXpxtA1QNpvgru26aWkwzvyChJg/tdmYICJyzSMaVcKZc6dgwMLBxfOypikcgWrOKKOv50y8MpUu9e3jQAU5gJNphkSqCgwXeTukxxHJTpl1lF4C8/JkTddhMLrmf69iGdp2EylLbFA2AkFVdzZDx/pEODcOH0EJgM0yLKTC4S9iej1Jtyr5Hq7cWa4R6v1SNUZh5FKC4aJY+/NY/3QFnkb2+HIUNVxOsycFL2WadjCd3A3SYxP8yDIkJecpRYVGftP1IqRN6yLDc1Ex841DE+Js9AP5cP8Cf7WzalcBOE7NPYz0tlv7OwtTG+8BWRxK8VN02t1ikSTl7JI//od5YYtNgCQ1l9l+bNlcj1X0+mFdwIe38yzIHK4JkwUo4k4pqGcKqUnVKBoi+zXRN2JJ/HDLuF70ODxx7GdIjfZUpxNGAHLI3ojtHaliBRsJaq4AwWr8nKnJ6JtuUCIt3hlZ3OMbaPaZEG3ustrlfcbiEXFHv5apJvlKc+REaydUR/KSROQUKqaq4HxuA4zvd1g174lVDJEFWURCt44FQNVm8Vz0espEtxhxLJb59gpCas1ppNvna24oT2oUDnZtFhcvXX+qIYQeWKcMAEVzjYBB5eH/PpMXZ6rWRzVAbidFuhHlVzCjD6pSCsLH+kXSeGv1Hu/o72dJDSoi9J52BlE/+m2ziGvhKsjlO3kN98j8zFjpVbolDwuib+PagvNkIhuRpqeZHM5o7HNQ0hsRokQ6sKxvqFGEStzXR1XPwhNoz6Z0vOmbg5xVYf3Y2+tL9Ayx8M2TQ44LFBj6bPWu5JP02Ltb8A7+OzN4yDQosze65ldx7vgF2b2S0w7dZo/e/P2M4LJM6stjHD+llYeOEW85cagxhWlCaHJFv9zmak8uFMS701OxgE5wCn8en5tCiFo1MwT38Rv0Gat6FFiVENfcJmScEepD2mXy5dheypHDHu8U7PpIet6mNirGKFSQVKlvKx7VazEZoSDjV8npd2XzpyqM6EiQfK622gAVIbq5CduNY1QC9r3DxXGFpApiC+XGrjuABcsHnqZ5MLkaKU2kz++d7PdlIznxzxonUZjWpDeDq1ncWgLg2ksEoyIgPGTE9V45z+Re6ZkQbzgD8tZlJYjS9qE4z9NAIDFar/VZDTfraqjpLk/M62niQWPpURzHNLC1wjpaECukaHC++USz6Ih5TWylhjoYLJjvyW3Y2n371kuMPdviuo8+/SsWEHG+w9Oo0Q8bV3vjP4oZjzVtYVn4Jsp/C9/XsmgpcLBRZdkgsdsoX9ozLiioOMEia7RQ1Yq4KtI+sz6h7WpqCy4bywDXFb6eavaMuhWTuu4OOrGXH66w/DZp8I4SRLDHz8r115OxbgPEs/vtmjLQnQQ3TYMUVmNAfxSdu7wMK/FRtP7DPN2gi8LQESyTvrPAn9tL+z6qktoZ1uBmlLsuaD2QpT+TUVkZ+ISIU7MYH7yiXVWu66ff4RCr1YG81le1htrVDQ0l/YpAQo2FcUd6KPGsutfnAyOkYoD7fDmEJ/e4tj975JEFprb7ejIxXLjC6ZuqW2YHhzV/5TPvHq+waDAcPBq92ikQbtQx7r/DGAQ/YqQlVJIwAobPxZMySDkShsLWkY7FB9XLBOFAACaHnAvx8xKzNOJ8EJL6cbKdZHMEKyQPkh6sqqQuPKcmHR5S28On6W3ndsmcaT1zeZGsjI+WeAnRIZLysjfWrYpJv5Io0ut1erloucUpbojRtRHjjfDp0aHRtqr3JTGXqEp32UTvlb2X0/QexmA2ipFqW6cDDkViHmv/kBL4+Fxc6K2oYWd1V8qnhiJ07qt6P5ZTZgt++g0X5tjeLUkYhn+Z9RS52YiaCs9vh1k1nVMr2F6mWUKj/pGfvxQR6u9czoXtBgtS+n3CzWBNGQpohbxH6nIT115iIJ7vJuuZof6qgIyEvI8+maUdCZNPY9vzHNdQ81i6uHZFLIm0V0UO5ecwur9CYznnxvq3SYVAnrYgMPoaR6sxeFithd08obPvQg9azMlErBwyNMRhN+joz6TTtve3jT1kRUQl32HA2iMIrl7dylWi7U7L33Yg/DVKLhAEEV9OUIpun9+Juu6sg1lRiItMEXbm3Ao7bCQhBKuTzZuJkA+hCVRrH+anWoRPpc6XZDPrS/PgzMLQPBc5wlc1j8GzXxlWhzL8uIQjqGUCKUbb2Hf/i2W95hWYncRRoktHjzpEB4ODfEIP1++R3WXDU4mVaPeiJO0mgBt1JALmqYyd9DWzrudCfaeuupuB1faoeZfkcZhx+kWGOt0hSvdlgnPpy6Z1qKgxUFQ2LKutf3Szk+GXdLsu7V2dQALHjQdOKF142pvjxI0uZMtGWDA/+Kscqh9/0sbuI40V7XT6jaSfc1iDx68qQzL26kHu05ABrRKIqFlQMFAorfS+hlz2VklWm7Tggl22FkHnoloD9mtsQv6PJhERIRWxR32oZyuviU1SniomVDy3JSPGXvyam/leaYDRN8idlSc3lK+0njNx7TCsdTIj80GqSE5QSyl4SuRFMQinAhPeVm5ggXU5wXqZjG//+0UPgA13trERkB57mBT2h8UJ6pc9XOB4w9n53qTG7xKealZwnV1HGXrcYUFMJeW+1gJf7p2wywfdnAyBGzttkSu3qZdPJd9/i3xZeB30yibW+3pXHAk7vrRZhcDeRznJ5LDk5kc+SgbRLBDaZJWaBAsNpNzpwm0xUU10bJSpiI9B39xlytJcxQMYjUEYlyaQPH4ILlqzUmQ6nTu9hLb6T4JRATohVDEY5fp7S6jdxaZ+DEBKkLSlj4pUJnCgxwIh4izlHpBRT7PJzGqqqqNJLaylCrX8ugyPD/kiP6sGzQlUPFKsyLZ3EIGHwPlOhBDjJDf+0kW0QHISK/gmyMRA17Pk4jmVR3n0lbvxYfKTnaXLLmoaaWtXxDCmsWZY7ieBYqRVT6C74ZiCeAii3eNNlsqChfHuek6IXWVU0ffTqEAoLUkglZHZ/T0JrJxdTY4AVqxQrZxAkh/G9O6dDsgof4BKBiIt9MVtEElhn94QhuIqpPUrBhpam/ePLwUu6Q8XEQOY5jhWSD0wN1XJt8CyPn2fVfa9QRTo8UwVHO7TNo5hGUBC1V75rXTzj9UpfuuqxxVOTH9UNGgf1tzqMmAPs+UNlVX0yjuEZXrBj6RelzdaYkA8h7il5zw7MQmUGn0U5+uZykXNKHIja/JRgVfZBxR4ueWi5Fd6e0dAeqqgxTuTGtMz0lwR7fVjJVD7fW7wtq4Pyvjwykjv/y95lUf7hdplXuoAiUJofFiTzGZUSR53UVNDout1HwJYbzOVGCHjVRaAznQieFqJlrWbCSpBvSU2Std26yperLqkyy2bnJeviyJz7M+brgkapOmMk9nTp6S6WmJXrz7xhgLULPjVHrxvCbMEccmt7cru+vafz0I+e9jYP1sPbOJKiZHhHoAC/0sNolkZ0X9v++0HNpwwnuXL7EB2Jozhte4qBd9jERlfdyA9ueGEeAnp4NGQ0Vi1QYa5a/PDtOhrdxTVG5u2M2y+hSwuSw5oamY9ctvFC91DXLEgDyBc/mFchdIVUEkdD2zuWjd6Vlk3JxwdCmreYIZzMNcsnppfvv3KaC913mF9tB9kS5dyxEpKOWNZFh+s/tSYJCciRwldtp5qBzYzzzz/MZ6BFdg5VTFnoXd8zsSGHBXrMU0YwHqHyIytpyClWiw4zP3KwT/5+C3hydlufp6UhTP8MF3F7nM39sUcnOJxkld3NJKnEVwecd4nzdo0KdxP0sAYb/wi6ah+fNnn7TtD3amgyuSpTPhqGK7JKeeWms10GOG9J7qfg/e0aB9Zfq+B9cb4zjumLSO43RtGLCpcE3M9NIorU5nmdIJ+CqhojGu59U8RUkKn7pDoHdPVdz8Ii2CK71ajHRUrOBw9GrufXSszMOGS8yP+2AjU5O3ur240NHRH5bElFqrZAoAj0ZQiCWYo2kCHFaiV0aELi6sYDgTpm+mNZiWbF0mR90cD4AQW9ZS8t4PfxaZcymTpr/flKrjzY3fN+zfO9gaqRNRZNYMM5RPrvzMiS0RfBLVqQVKIjuEg5P5ZCq555PismRiWKP4NYFx/DFGq0WhjDmPKkouxn215rqUx0/INcUEnL8hAR2sms0TR4m0Y4uj5InhkJGbGkSGTUHRWN7bFxY7P1Vh39IQlMcDGmySp8pKHz9htctHpcpFlpSLkiQ464+CpOB6lqTsyWPPtHR6SNu1QOSnh7I7ckQIF/jjvC24ROOuFGXJIKr72PUDXoLmGg2DhXA9RS5BAOuAAiW7pfM1zxeta8J/6oWu8+LB5OJmq3M+/h+0vSIXPLsjAqIWtn61P7oRJEdgQmcYjJFtqo4tvCB/yPJo8CYi8GghMqOB8rWMJzPzrVu85iKln+yPDtfnbXnt+DJV9pKJQ0+l71Yb6RraXDr/eivJTidAHQqsV+/YmhEMBakgVsWs0O7uGaNOC8OhVWfVC564uN54eDOxIO6sAXJag+nzZqNUKlXSK6W/9HAmoBSicBV0GsKp/brb66oo6NdJJK/zZgM0/noGWnHJ24ln1H8Q+f0VBy8zUVHB49IyumCnmng9vFYaNY7hWUrloHOYEHLO/cl1Sio3uUZcYm7VYa6KKp7sTfWselGHjCTeEvT3L24vNP/DxbYpXS3UUj2H1fMhsqzI/c3ds9AP+Qh/s3NGLoT/UZXNXiEYTK5TVeq8RLpDAuGhU21xyOiQsfWJzngcRSBR2rnsk0SOmqwx8jk7Zrj0hAfNlS6IxlULNwndMFhFDBXd7iXhFGt+PbOFN2bm1VcOax2IRsSKKj9Z0KLBxt6lYigr2tDJYxLJlMQdRKW+2mKy00OSVUGDsyonccZ8vSwPiTzjc7fg4Jbod/SIrblHSzjZAfFRvU2JTo41tAXWiJ5HT01lyke97rNukSWyd6/0kTUfHOzb3B1nct9X4+HHuKj/LAt0Q4NCUICp/QBEYgPBLRVDb9R29Ug3Wka341wMwcmChGn6rH/Jxq/+T7cUZYOhaRezFXLogSVKhhbQN0/gvrZGjiI3XBUQI7EZqg0xuY0t6YmwrwemVnUEKPjzJ+8fjRoTYkUdWjbpwVDVCaM7mEvaTcjdZgHrFjMejdJ2hPGEkFXPWJjrruaaCPSOlA9OzE/3sDlhLu/wjbFdHvcyNS43WLLWzmc8vOloGjFnNMcANaQoph3xVlO/AZZg/2DMrDYBO/epI2/JUm5fKW6Rg0MuqSQlpIcbz871wQjwKllyIRsHJVklv7rAvSQzu4aI3reEegjwelJ4emjYJxiGABm7h5a45IY8kkSk+edZc4B0oU4oRv+gCpTKKsSyzq1MLXkFsa9qeJ3sJ9fvRT3/Bnp1OAm0A9TwAEdemHDQsUVHT4ivyiKmSpAHj/TS8C9zw55P8hgVRv9emTTXeY3mE1ZG+OUupgnBXpcW3UX8WrOY/fLN3enXnqW0PLu05jbJS/Ty4To7fUIx5jgWi//qvzFs22j320FyZvn2mNbB1LVkf21lMjAvA7JImqGBEQoMpRr1KKoohe6xLBhFxtR7iIvRdX98ndRM+rKf4ie4AVkIhPgzLV+sVj+w28DsIcEkfpiZNe17ji1tTOf05HNDSHjw+8EXbM0tdGFV5q+PBiAEjqQptISma3sR1+3IkcwsXyadpEdrXQMUziHH6kKpO3sbMWIglL7lPaxW9X7KZaqtbSIJbGk9Prh2nclWjpZms++UdMkZU8gB4z3NtlSdesklOyxNzmTAEYsqfOwqCTawQw/g47Y1AO1SYOBl7criyfCxZ3ABEFq5J7FYrqLxa23gDpxMS/wGBsYupMzLv1tQ3aP0JjCslqxBUJ0o5AUFxjT4eH8e7CFpZcOMNk8M1Tpe9z5g8SQxhOCKEv0w/tki/HzTdVYOAKSAk5jwftqKGxiOX/SvP48LCe53klf4OjlKk03Lj7ndwwuauFq105QK2YPIKvui1yt9Mlml1lx+/TrQz2iSVlL7Z1JA/DvQiNEfHFuyC32PIFhYbhdYQ3F3muICuU+lyUp1ROvyg9I7vH4NNPipNVOMCaAj/1iYyjNtNhyn3WX8qtdWPpjGBYIvMToZogzSMZhz8gmuGOG0/RmP2lLr2xhb1sNhJf030aVD9s9Pz3JREKmONYwz2B/JEc0N+rRvHYx+SfmjO/7bcwMJA3DBc0Eq06OyalZZjLBju+CBpwl1goFF4101l8pIDINvy9bPCcUuEA53bItKD0LlLAqrwvKs8xS4gkKrrNcBTpGsO6o3Uj7Mzq+okPvxPKbXD4iHSzD1G2zNOReFymxu0Y/qi2o+xx4LiiuiJYpYKCJfYJqVDBVEXKPmsfMj3s3rhZnrryJ6cbdfXnKTSVV1r6qUnWHvbOsyAypWbWMNjEi94tkhe7hhAPplNniST9LTQvTNom8jNyLlst+DbTt9nAmv97qQxC89gbMABHFGnkUGrdjMF7oDONgOOQSPsOPdEPjBzohMTgYan0rV/1ZLxZaP/FmrumjWLDcUCsGVPELG5s6kVNJz8kz8IgYSunrXVcUPMZ7VTYOV4vrW7x06Z/aE9ZeW6MEDJx8TbwA4aP2bw28J8XFWPYTEbXSJorYPWZ+Z9O48uL/dt5F84EMzTSamwOHEcjuJw+cLVPUiwMbEbjoXVTkLUR+Vn00vE6nvaWUijUDsBRp5NwwplRSIIF/A7BExcr/Bhc+gVNAIOzqjYe/hOPdaVwGbGF66ty5qfST+80R7iEq9RKq4oEdcQGyswgb8FK8PdZXgQoI/8sdMuovOn5H1strIEVgjltQfaHGiMTkHgyVm/VWhsnaZN28yL/IwBfT+ngu0zh0yg3llHoYGPWGZ7/QrqKFaQjqzNnJ5nnyCSR9GAxmN5uXyz5/WsHR65bGqr3J2SzDHaPdpJ6HedY2DawVdtfQAAAAA=');