<?php @"SourceGuardian";
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('FD5810076B669827AAQAAAAhAAAABMAAAACABAAAAAAAAAD/T+ddIS5/1IUjiqnx9GX9jQSzcHIsiFPoga0uZiKHZ7CHygO4eODSDOqh2s4j8cxOJ+h29YQdSG0ztIND4BW3pX0ZVmx2hBGK2+goHozZ7J3aQPYDfHWhL6+uW9N4kcfkWgj1HbGp9WQdlYyjoO/SiCSLm6FSbkNK1BzyeVZy1Wu8O9C7GfktLaq9HO3J4SclbGVjBD0Vd5akfWWJ7mFCZsGy9ML3T36GSQldDzHpD+39yAJ4DS4oDaYBb7oofy2ICAAAAMgGAAAeVT4sgr6/NTNeUSTsxFzD3PfNXoPrP8DpbKqvsprBActWZ0h4jUjGSd8xBnKyvfn5Ubx/Rx9ovws2VDxY8GGNcjnnPLO6h73bg7SKR9oRXaQOCz/Af2nMzHfoyzTNSYNbCOAJotBEj1c581X1kxGiMiJC0//KRvM2+gK7XQhq269kLBvm7ctf1VqRoYTYvsJJcADDvaWwKVMj+kzLga8Pfnzez3WaLv8O8uamBXS68zssrDjnyg7Q6ukWDr+1YjXSoLPoiVjzaQSJ2XXz2WoPlsJYb9mx3ny3LZ4S4oC61js0CxA6baKOXtCDekTEwYc8YoVJOGiXheSLRLWofrJ9KSJp3LsN+Fsx+PpqNuu2s+IqO1hASJqdHqTuxcDSaaMpwtSt1zcvEDFvvGLnc9ue7zbHIF+aHOcNqgeoGj/Kr/Qo+b150ePdpGP45dj+NFwzWeXdbilM+SCgrGd6FwADyqCdluL/7jU4PgoVhH9VZBesYrnzbLXZE3Bi9znBtLIF7WoBbM5DR3/WkLvvk/eblJxgmuL5PPOtzJAMOSQRw/j53kcxwZFl5dRGjRPK0yeHq7nZd/TD7d+OluGIoYvCCbCgH3uk010XST+0pQoxaZ0eWS71T/3D0buXY/Xz3fTdFT1l4ZCN7hpv+yipPjqmiuvYE4P75lZ/jb/IS6XVgNx+/cvDMU+Mtwe6rGbc4gcepBbJNgo+NyGxefDRn7cm8XUvBgqhhHWI41f2RsnFlxqHhXMXu3rGEQx5xG5S2j5NMGO6P70pV+GGwlQSOoOw2o2KjC8NSsh/ztNmM7DSEOs0rp8H393SR2g4LPgueg69CTllarLpBgDGEv81N13XZmn0oe+T+Ht4GLZsKUsTJ9LL5sNEefNADxZCCaC7/YMwxStHTyvVaJh6dWjuIlU4mw86l+jn7tIfwaq4eruIR2qVYc3kf6fPY0t7+snm1tjoOX9TTNC5nRdk5CZcA/RsxgJ/lvJVz5tnhRYUcD6wB7kPsshISdjkvwFx6DgkHFROXHD+2Y7bwoh3Dh3K6ycZ5mzg3gD5Xw2TBhYIk7XdlqxSpacUqtqJVIfw8XGBFqML4NQe+m3+yp6LC79WgSTUawhQQBeHRtdGFtBgSz6A0qW5Flvr56RZK/ATXuR6jK8W/7nUsuvOyzez0QJFlx/XGb/H1rumD7nBhBakl6XL6QFBwpxKzzSWu/Kqxb5agffspuYCTP/XZn3JuLK97TmhfRCzE5RTnV0djamLCXYyqOO6WC6EdRB91NznExDBz4XeA28pW1F6Jm4nEA5LXbBGTdqFWsqH29oyxJ0R7AM4T+jecyCF2SrWW75vrAiwNLm3H81Uel+Ra/ERD2z3ntYpB9YuTFrPxnHGhqGvQKSe3x3Jqvk77mVjNt/q4Li2NlODiXdUEBeRHqSovh2wH6TCf75hwyHtv1z95TGV0dQYcTDAbWDATdgGnjgpTbPD435k0G99Ip1E/UlFp5yIudNy0LyMlnrnxFsrb25K0EH71o5leAoJFO4uGu/sVNlwEefSzX0Lj4dTaQaMo7V9wzTZYJQ3b/k8t+iTNoJapIIjG/GMg1FBkr9TgOnsRlZpOIm1ZLyabKlbjqTdnkWVPG1CZjBSy5OgvC/nuaOn5eMF5qc++ruvcO7WyDZ2ZFmZBm/nstEIgZIqFCIj71FCZasKFM5UGaetcvWpjqFQsg1hkdai2wJW0XLV3qXHqmvm6bpiUitPUQ/BECvouiyiI8ugWN86FL0THL3Kh70QZH0Sh9AutRkPDbZtqFOKeHxNSzAZaK60rKKi6HX2r7E/Lxk08uBcwxeFR03oS4HYk2TkXX10Apa6wCv9vPDYtfCwSFgehNe3kD9Laif1Mk9PI8lK/rbqV+YJhJYGUhUDlwLu11cPqZywNFHCMahi+uBp5Tn3zLm5wSMnSmNsu0UQc13uiV/DU+EOlXTKDhyCRA4mfO23Yvr04L5G1+Sw7ZsYXhOhAHDh61Kfk4uGYF2CoCBjNESQE8h/yfzc1fAyy97yB03VjzG9EOJMh88QrgSU5cv954kenMWANJedI6Ul71XVEPBa8nzjnLhxtZsOdMyVCgvjqyHEzhqsCEhJMFJaMP2xJFyx8o0bIEdA5s43Kv3q2nwrVBmo6sWVdZW0hs7lH+cVkeDG5bwVhylLF2pUQjY6JDz3ESu3r6ecDbE0wUJw6mfOn2vWZY+ngEAIsEMcY9HVagpuhESmO9iEgB53x2kWqo/ob6zl8nkjVVSjEjLUYjI876BEGwnCBxAlDlTQFCuKTuJR8g2QG0xeLGpooKkommnmkurpBVEAAADIBgAAeFwONnlwrd7CSWZdbYpyAoUPk52YQvppPfid9KnxVayZ+5qePDafnP/SBCwEjLldMwSuoPBfgpVJ1BkfbdNb4k7OP7l1zi+NQjVmPPiQikqEfl4dg/pjOrC/xwm8tqZ781zyT+A1Pm24ZcdDXfLdryjTNVhqJJIpb9tRiQPqy9g1VAduH19YGUSQ5OZIOX88fZSZtRozA2DS+qTZgAuWxdDWaI1sE2/B4A3QnR8RGAe4plZiDV3yvWOUJqPhhmwmlXtahyHLj9cl9ghk8OfTj+WEj1YbsLTJFzGwAEKaRtH7qVoIi1ws8djevOxPz3bLxe/ohxexHRRdW7fWGTVqoNZP1NaDL4kahYb6h4ktJqLeVvWuftUOMVswxdHLao5qObF3WEVk1VKEXAca3eDH2UIlmnZ1fH/AcQqefzkuoQlkbvlwUo/XqsnOsEUY9+l6LB2fQw8ymmRTR+tpn/3DSK9OKJlENR4vgucR3hKhKFXfR+FFfLUYCWJlfBXAPCVuqY+a7JkiP+a6eqwPj/MdCm79cplGQFRhxySpD9352OJ8hmoY8UOaF0US9E0YwSleq/eG/p7Iof3Kl/WodHQdRvJvS/NVedEid1xJZu4yCxx6PLYyzxRLHBG+tVc4JCkuLlnjRewjcJPrVx2Oy7qIZ+FDuYDkfShNHIBt1xEx1nL/48Oboq11YhLSOeraNM/vo5bmNr+vNpfIFfp/hBhcsn2CByy1K7GbDpp6YzebjPCT7H9h7pK84irKb7OswHgtgI6C/bGsyBlhZ/wHfiWa+9LjsT+VH3IuShy1FWDkycekraxRa+Hp0zmPj8rSmc3rGYT0sPMKthtUCHmhWfVW7aclgxmJ2lJQOiQRfD077tApaWpUOZFoMa31ESAjg4CvS++DulV3TAXlFnDSjvppy3Wz40xDlJcCc9W2GWlT9qK/h8gxY4l2b4UsVesheuX/IIhSnAcIc2TPRMG3juW3a7zGZQCXIBeBchGgYazSYYlYLlUi368Z2nRrjXM2nplQ4yaiqVuLmTPbSCe13W54/wkYMcIpn6c7z4MKgtI3Vlztr/SYff6rg+qhCWqrsul86HoSJhmbsiFY5iXt+g2Zn7BeHf/P0EBQ6UYJtqcT65Re/qETlBGrintQY6yAap+6jlRhgeiPr9qkKVQ240Qb889Pm7MomXaKcdrrzsxPfEg/gN3nP+v5KS2WAj3OCzBZ/iUsHBpxcnA4bXdYjrOCANO1n3Fo5B6+NAVntmy+hsnATHNYBq2gO8CGajSQ47li5rC600ovNF3O8mOL68GZAxrMjbwvR+SKtDkHH6wxcxYXpcVp6nyr/p6rOiAQ8P4vibTcHzIiayzW+jzx3cx3OPOPU0A21m2aJx4D92guzVHo288hnFg9bk0lsTBinNwT74t4gyDygDevm6Kbl7JtfZCgiSDkrKgdhQLohS/dPM4dIOuSFt4UVoc2Xhmypj2xQ2EnD+kM93OE3h+Z2Xx7lYETogZ/UTBOIM39R+l1gcQaJLEuE2kvxePUUra4tOXiXTJU4T1aF0TVs711aqNycMeP/ffPMbmfVppKAa1mDfpC5toPuysaUUk7rZnMyiaROumkyQgfWuv0YVaX4ioXr/BQSZxwz7yPuirp0isEZemUsVrNOyLUKPPjS/nv32SvMo/sPn8TDxjTe9H+IwZiG4o69dO4cTqMRBPG0ia6kYWRW/C8dpKfFUJBY6e9ljLElKLcK1JM6afZj+skB/Su3isF0MXS4NdaHora/MtV6Hth6k1WobN7RdYYBJxIWGt4Xc5kyWB0jUITUyezzM4k6gnBUA50ie5zj3g0xV5Z9sZ7XxMDmtlBhanJI8VGX/nv0wVC3+7k6/kH0zAT77bOh1rxu3oJ2EeR3RknxiBjGd9GwtMRDMfTzZfW7pbAe7A23DxKRpB67McGqWsg8kOPWwNeulYOIOiKa2mfZ7fVaQZQF11f6enBJeI01Tpv4gB+CS9VHRflg3Y54Jg6y4vYMaYMY2aX6gRg+HOLLM8VnLe83k1TXEiqO2N6ekX5Cal3Qefme8bsWbsQNXwstjzRpCFqukzGwn0plfn1Ms7kGajimpODxrnOF5BqO9a+CWvamO6fZaVlqe7n92Yx0x47tijf5k4VzMfcW7hjURhIT7MouUg3oRM985Vhkj8HZhJpxJd8bFT8slwlZS2IOK84RF1+jBsziLxlAQLhS4fO2rJEIAetgrs1/YVaKrR/iu8ImcXYiRxqDtpzodeMQfWdVrdQ+SkKA/L6vhMTkSgsmiAyA0iUydeukfThbMaWKx0rdLlZk9dajsRSAAAAsAYAAF30eG4ofqAcHb/adn0A1S2dXfBHZxStO2e3A+uB0+JVRFOcyuyU7C11jmamqoeL+BGlJRbMwSDgzDIXzMIixQhBEQZW47RUXKOAfwJVSZzNJpdpbxZ0pbTceizwbyYdcNfyUzznggiqkVLH5QiJk8cKLlRq5u4tLCA2EWCvR/ni7eOahV1/yZ2rDFF213zoTG98u88Nzz9CaSEa/0Kd3KelUsW01BJx+kNoyA7OaII87Q+HyWIbwGxMqnXgoGbR/5J2j4KphJtlF5zVQwQtfEPEmRVdW99CCTmZPfxjM5vL30mBZisLNw4oYptrK+3JLrZX1ZXectPkNvfubOubLfLSzGw0hSrZHsCSnegu++u2+MuW8bq3xdrCdTjiatBTMkfVQxTyi6SApIA5afikqpBqFwtfQg4FRDAp7u2WWIKUoG7JuTeQHWNjMxm9Px2xVnKVrfmroXi6ZzW21acRa6oxPMCVKJ/2nvXV67ptqohtaLqgWE1+QMnOuIZUbxxvHu3fWmlIYRcek0Umx+q5eHJIlvlrq+xWMcAT35hO2J9TRFrnrWawPzViDBxBZVam2TYYwGI7muPqPESXneOejOM4AqsmTOfDWkqEym6sBN8XN+QukXr5p6XwRkmOtp6McvCjpZMwwiY7ZuStKwhMQzwHw7zNP3VAPfTzMcyxjbgZdhkJR/2fsJuuE5DWSnmqj4VakxttfjLCeISw+JW416Uia8mTRwQ3jyQTThFQityL3pnQkpQ2k9JWfHnx3RjNoe5X+pBwQoydnEsfUt+kHEa6ymMN/vZroEYhXe7COuYZSotn5B9IN5Z/yv4z1XAy3EJCuf1I9LbJqQn7yW9APp4ZBVFZIcEOa/LRalbtrX0icbpgTmhuXG9p8RYEV+14RbqRRVK04hgbWUJkZuzO4UxBxe44hFVxQSIflCAlTmFVyW6705WPGcsJ86oDxIDRoWoB/AUbtVFprMFW1FvRp/t13YMxMLoDilMVeEYnKrsAl/pFNylvBEv+FP/09bt5UnPP+/hAGwyMp/NKyuB0o25jZAojbKB6mTyiW4DDHImyNCr0MGLQXpEJId/2OW56mDT8X3RvPlPw2ZYaRcrlXVgV1UPru8Pdeoii8qL8EDiMtyaRHaWGMpERYsNdCak+kwtMb9kjHwiqAWaPM9qmqt8OKAkWNJsYxoq0duE/clroqUvwjnBjLzXE8Zye+QbqiAZAZEQEZ6KUbEEWdRBm+1C3SLtrnpeUP8Hjnoy4aoPEhtl7bPqTIhnMpRd0MUDM61bMNN4dz4m6GVUyRPlysmagn3DsNwGmvlO8JiCuoYI3I/lTR0XOLRYwQQ0KrK8uLkgdsOhpJvZGFu5wpumA6m/c2AVQOSyvTF/Ab1qjN6y5diBcsmoUsSQ1CagEZMSVT8vfcmjAbT5HkF4hWOTd86f7qkih35EsmNvb5xZXiujF6z1fLEA8b4TzrW2jxYLEEcQp47YI/qwTQ0jRuoF7hpsjKbM/BxKjah9km+yHr2Mppr4byTgS5fJ0MOvd33KmplE1aB+mk7PsCL2MNDHcJLh3vraLkKi9HOkdWozyGOUIhFSAKO+CGgqmIVKcD6Gd20aqTC5h7eo7YJjAevOPynyq68lYGlyyizV1GeWx1rJ2XFOWSU0asymMu2GFIcxM3d71OM9ggEPJxkctmy93xWqsxhc3is9hQaSdHfTU8q3Aa08niT9GeAMTpKVEtxO5dWiq+L+fKB2NrsMtQ0ZhF8pK5UIBkyQX17SW3NGKDsmXeXkbpzocIgBxLTRZbjOK8ozH21tCu0VboR1wMqqrM5aDhdmeEaW1/AbLIeWkDWqnMYyIYyWMHJILKuAJMqyux1qceZmIAOWyeCyyuJHMjB7lQtuLD/5liFmfS4PoWS4tCc2lV+X2AS6jd56EdIDRO6N7MP8Rvy5u1XQlxgxSALJ5/qU6GjiKDVLfR1ZxHlMzr7EEM/5kOmsqs+GmYWL23lGTvurlRqeNExhKjnyNnVT9gvC63+UEUToPKSzjnygSr0gqvWtIQ4qr9I9dG+EIJDxezWz8nh6kqO7hZVfCNAR3juhduA6XBOOFq2fTdx8AZ+hkeGgxagQiAq0uKHsxHK1lc2z8I55MYmCrIzmoeTsSBVIkk2vx4TRZVBGCbBANprvbFxAkD7doYkoxfK0FPYVUcfp+FNIJxfUlhNFrHUCJ+q9lw4RQTT9dnjqbnwEpOTtSb7xJK4AUcZKHEd4bZPPEs98I9QqpZ5SPG/LptgJRDPl1kcxnWS04dZaML+vuAAAAAA==');
