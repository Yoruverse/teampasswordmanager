<?php @"SourceGuardian";
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('FD5810076B669827AAQAAAAhAAAABMAAAACABAAAAAAAAAD/T+ddIS5/1IUjiqnx9GX9jQSzcHIsiFPoga0uZiKHZ7CHygO4eODSDOqh2s4j8cxOJ+h29YQdSG0ztIND4BW3pX0ZVmx2hBGK2+goHozZ7J3aQPYDfHWhL6+uW9N4kcfkWgj1HbGp9WQdlYyjoO/SiCSLm6FSbkNK1BzyeVZy1Wu8O9C7GfktLaq9HO3J4SclbGVjBD0Vd5akfWWJ7mFCZsGy9ML3T36GSQldDzHpD+39yAJ4DS4oDaYBb7oofy2ICAAAAJAHAACqeOwaiObjI9leGBAOQdsV1rInj44Uy2F094LfiSGCy2QeUj8EZXZMYgKEIN5z8fJqYOwaAe5KQoyz8Zt3QXA2/xR9UFyC6k+IbKthPOGAE8WndpUxzljo/+oCOOSEr8XplhBHJ5JrlRDCWjd+BIpzS9xOBJ1unj6EXrIDp6dT5WiiaaqJj7sKAPHtTJodW8634JfgzZUc9RXDdooBZTHLsHn/lisxIR+YJI7rCWXVCfQE5/K6ABFhMjuW+umzvjhJGzGwQczsKtuevmAdtfw6whc10dTueyxhMcCsRbEfI71PSgsN6hVWTrW0cdWLinXiootOpzPUjqE6jEcAGvrynQA9y7bvd0FOz+ws3xiSMiyeo0PA6F9oUj9oxZj2dvtj3yX4pp0up9mnL22QgL+nf/vWXW2g57R1f3IWKd8n43tUI5DXKPQytfbEOApDyzLVzwO0TtudrkpDZD7C2u2xf1oKz+7hxXDU2UflmbQ4iqWd7bXs5xT8mQ/erUegLxdh6TMCvdPTy416Cb5chRYAw1ycGe+1W8XV4ysYMg8nNaY5fzjmF+k9lXr4IsCLAsfNm34Lf5ORU+jCNXIQCYn5MOuHHmE+KgWNffiO+Vd3T8hDh1+uvUIHoZVD4HeaYaufHnfhqsDhagchtkF6AP0Y6scJXGllyPdfPMKIejJNxMCGvjpTrVI/mg2kcsn8hJw0d+0IVAquHxxrbal7KPCKdSBMW1eXARlaQzk1SDnVr0VCLCky2OtABsl3wIbI3N+qhTy7Hc5sw7/Q7X7eHmGuzLr4+CTlLP1XeLHzOZ6wYk+QrYidtILW9sgQ/I5h8sa7w8xYI0lVeXoAguwvkqsE2cnldhDlOl5+/KDBPOpSnE0jYTBw202OEm7ftr29A1CUpVp3iocJaIABvbmXcRll7KHug0wfyYw9+3xnVDPMHrNIY5TEHoDVxPQXQeQSqpFGq5nw+5hoRL37NXM7XA7qEdFAXLdZqc8pZ4I2wJlVC0XLw7sETNBb2n1BIqb+Y00IgXbOEehBxXXpgTH5aCfdhWaYJmPW1oBLSvis/kcdil6EP07O/pF6yPe2rWPcgzGZ88Q7xunNX5M2r4rAk4odv1xIC5TMAr5ERFOHr3M+bQAii3ul7jVP/+FEr05zCyPYQdv3Tt7xbYm4owwGDtW4M+w4j/S8ElBkX/GhVKEpu1HdLUYMrznxzTKq4AY4dYi3MCewxEgnUf8TqRqS7yQ84WZwSsLOovTF5qbqBKOHiH7zfQFqOoz/gutnAy2ootnFHW+Fog7c1RzSFZLOloxFDsr9SuynIM5nYEmPFFIWimmmX7NdWpITtKyUWTbttR1ilJ7i29a+eqhqj3mb/RMkqHgG6g0RV5gJtDJBMQsqFL4p7ipXocN2zTmWb6tLbi70MqS+E+WfKnzVTIQZOTDrVVR4WbjkrnS8nWDcLsn6BhtaBgTj+t7M91RSdHH0qVmCv3Opdl3TZ2IHT3/Ri6B6ME67bGi9lB7bAqaoodrQH3Ovdrqd4IghPi8ywt33tfywZDTahgHI4FGNlgSFQp2LXFJfOCHDAQ9ypXU549uO14X6QGW0HFkMiHgNQkCvo3yNYib2eI15Xra9ekQ57IFea+tZstWGKMN24DlutLwK93awZsA64GXDzZhGYgHPqukWd+9F+T8GnLxjNfX7xUj0vRAV5dDyuZ0S7YN4vx2sraIIivr0jqb8Q7c9hkqJkmSMNEUbHs37rW2AR2VE+3LAtlNAfSJmonI61GUKwRSSMhjS63gFQiC9PZOCbW1sJiB2Q8xt9NLjY6EPFUctRxqWNuZc8Lllb6POLV6Q+il1kJNWmoViOrweSvhfVPqi2IR8IdtEeEnoRPZo5dIoz7lxMnOm8eIdcn4YK8DZ83pmK+GPZnEeyyvJ2jklU0vydcNbr/h0iI7X7r9GvnTIVtvpBX8snegy40FU6Tf1SpCUJKyZvKZWyiMBGj4r8izaFSmQBU4DLiUpr26ibVmTWsDOWfQ9/UCl0q9CqSkLOx4vYKVtZ1+LFRfRQlOD72v2hrEjXKIDestV+SzLL8mQh6B/LJbm0TbGeFFwAfWuhIWJVM9AmgHQrDLgc1xKok+MO7KVVjkOegZtY9lhIgHcCrwZWlFS6OmDKfUXt8uYBaTEt4+xpprwWJgdgbNMGr9D3pd4Z/a4v2yOGluCrCwO75C7NN9Sd908DDhLJs2CwY/BNLAulI9jD+TYYLpC3F88jsdYbdFxdodM6ZmYDGKsjS5N86jF4DjViNIlpI0weHr3NJ72mtPueCdyRP7Mx84azRaSquy51mlUH8/VZ7Wkzhi03RGFRjnNnHHAyeApLzQS+M+r0fxIyS3RwAToiNJZRcFnvdcSYdCTRd84OqMERDsNOoSSL5c4XKgs0IE8QFBsILqVI6E3f6Wk4FgZxb9pfv7Tjc28U4tGYO94Ca2QNAdFhJht/RgqIRE9Kdz+2yczgQ3RANyXJjSjmhqjF2AvREez/vItqHX9QXZewxBUiGOCl3SXISHNPa0Jy0uK366jhevIOTxMoyoXVYKRiJiaE4oj8/UJifHyfUrXgrPlEAatUQAAAJAHAAAv0X+kjIGrQRkk529j5GxC5KVkBQSu907nAeinV8hoFKl3Djz3WdG27XT3dBCe1jBvQRumWctWXYH+wjZSyo978ZYZ9OOJElfrBcNpf6HU54bimpkSY97NFVf0bsUK5RxGx4aYS+AoLvqK7GhkeBP1wQrX1BYaOZSsPMuq8xxLqtljvc6faUbu+RDlRrBPjds11LVvlRShB/23FL3fiHE8SRUwaHoZUIgslIyv4jqaZm3v93btUFJ9OGL6c36oA7a9i+NMwAggKbqWow2BcNG78vVcjm+PDBy8NswAQOyW8acmQfdMBVUTxFa+Tu/P6TtM1048v7X6zGZ3P9ceTs2uEdrAcnIiaBVGCXr+hMUzrMrOaSe4wBFPst1vBLLswxjLG6D6WOUtttQiJIA9bStoEmjPR9J6z2uAqzOt94AgDIxMdfrnBIm0CD/Z/utURN0X+FB2TBbjR0izQ+s0vDtjPF0LxfriNXUNTa/SXp6/R1cWCZiFw0pDVHgCW1ps6CXmhGlLuX8O77Pq6g5UVOGe0cbrMZQeiOStd47/iG9UFtVpyayhZvNjEZf3gjsuAG1GFcqpUFhoWGO/pMJejUaoiQ12ONQ8cCL5y7lwTovTSQSrO0QyKMo22xp2W/LfcyPv6rw1XuDHApxqsKa7gfbfa/O5fL7FgzOQN8w4lXGT3i419qolJWUokTorkP+3YUBWYJ7KcM/YZY2I0hY2pdAVXKROy3me+qPvgrvB+tiLuSNv1RwW9PYbPZ1qFh+bMImPZeBuSGl+uH/TrjNw9/uG2UGd8VDbcLq3RHy+n3PZTqROgNBIXAZaStcATrBpH86bLnMFZa4mGXcGzmjPHG/7nI+H2b9MBE7l64xwfh1jJJri40aMgUSlBhUgkZ75eZyu8Rq6TlrCtvSct/UYGeixhXFlbigBG/pJBSNrZcMvmq4jO7SmRVGRoURcZLd7X0ft39NUiZ0qB4KfXE5pVNy0MUryO1Vrd7i5dtLv0IFuiSm9zKZ0LYE3qMTSwIrH5aOpCuIl1yoK3lIDd4MaEMfj3r8ZIwGWXkD3p1oBvXskP11TyKhYObIWAcZnuB+VC03biYYJLxqbB4DxkpLffrm41reZoZ5La6la5pbwdhn8LwH/mkX1u3Hr6f7XEP+IlMRNDje9rIlNW7f+l9Omx3gYbFJWVWdeKIXm7hCrvFtI54QExdBWCpaLywJzVaiEtaOnaj59mfxlLl5euFTotTeRiM5MSaXjgBB2OGM2KirFhsSmUtrN1cZwI1S015avqQYd89I8rD7l+371LMp0rSrTW0SNYOq11N3x5Pg8ZzlPfpssbhQCqfsN8C7i0qea4a+DqVoZYmEXJe0ylS6YZ6TCmTXp1wuW1X1mmwfqUiVUR/0rxumKidUZHmNK12FEU7egYJK7rFFRV1J2/wjqH2INVocsJmrwjfmHdopoOHnt028/mvTJuw+x818nD11O32V94ZZj2SeTu8ImVlw1SjrWrnqJQrDutmOJkcnVttxLky1SYWzBbOQBGrKGPzWGl26VgurC4sRJArkbmC2xJuJQm5snFwA+g626x9gKva5Y+EJKvNpyHK4Uk821IDc4z1It1ooHrOpyPA/et90+lzrptU/4WrvBDEUpKqf5Rx+sN49mqnJ9oxp5UGDTZ00q4bBc4ySep8+MpI8sEbVyEhv2tsKtjkhYZo6+nSgO7+ZcW+BAIMGfsvn1fLRm5L6LzC7PBHRTRzrPd1HYWHcqsOfas9Uv4bRcHH0T9sH94Syo+qpqPyAYdVRjMGW2dl5Q/ThQDBNo6p/80vsuRmavhMmDH+MTG2aB7SPxvebFN9DI3YdzyF3bSfNti36PIMvMf11aq3+OC9koKkFhCkJVfZJGtym0di5K520u2YqSfdg9ub+rO3lolfpfc4oA1DKIvPQjpzLyS2p4wycdvT0I4yJJbMm9oVXaI7V2CSqwwWbbfWGSu0mGP+fuTWY1KQFkWMqmE475laofhqWweWqfWZ9ld+0x/AlQWk4jm1I6oWETYt142wTDhuGUWsTVjrhpNGkbavaw0yUPpzreK6A8sG6CXgiOabqhphnuFGe6w+UgBT/eXNOM4lHTIXVjKxLVWgmG34axRZ8X7IXK4HeirfTsnbD/WKnG2tY+lwtktQqSx29soKyc/WGKmlzKzzfxuLER86oCMmSWklgL1Yu7H7/JWrFl0b5AscSl61jiz2/XLkwxrOhiVoWiJ62BDWG3qWBDOJ3Xq6TT13jBtPHA3z6/xkS2ggCje0GFxRYwBwR7mLNcl2rIsEFadEP38etepGW42Kjjk/2Pr39Q/S9MEvFbJIhCTzX+DbPNMaMSmnj+LY+g3JLHi5j/xnR+yRQZnS/FMu/QnJqngKC60/CpSPiD0QeRZ2+W/6ksJMKi9I64FLVh8xf5SConGH6L/XOD0cv4kKv4IBIooCOcQti+WtHcPXfqyBRCrXgeCmNFPj3ydtfQpvuOubvmbfcYP6p5bfNajC8lNfmdVx7JOvYw6228ay9nLBbHVEURUQcteuYAKaw/L15uppFQqO7EQqJvCKAHvnWnDiI3vWZ994W/wuK7UgAAAIgHAABlNvUhaL/mxaY/7DeT/9VodyncdUAb+AMwLjclDwN+seA9ZfnNf1XXGZx+e+Y9ko582SVKim0QMOH9YtfCDlF3gkgp1KgQAZ/dfzKkf9iVQBgIG0x4rbe1XxowTvCp/Xdowff5xBqsrfXvkeYcruoiTnayZQ9GaxxMa3jiiI5k9+XSgJDBljnkzg+9vNBfw/zS0dIBmoST/apXLY7UnN3dN5Hf5L8M7W6xQYkA4FTl/I2QHmt6XHPzXMHANxMoHSGkwkTa6LSnq5W/AY7uzovcVN1rpxNDlstP9lxRNzpLZ60qoIPzz9KxUsY4B9/V+jGOghR3DZkqvyNsBAf43lPTXyhhNhL9G9OSgvuRlyLEaK4oJR4WDa087LOeY1tiowYmRhBvKgQrvX8DEr1IKoWW69HuOLkEZ5mYXpLxpRdjUNTYtYXeYsRA+9yPP9mUbyCGjyVIkWQuajNLI/cUuA9wEjoiywBxM7N+yvDa15u62QmPP1FiBQWoH/VeyBCfs4kEgrU6SLvLLK9NNla0TIi8RA8xwkA30Wev+U0XLxT0ZtabftqUZpI5SlwMsmffLOalF1IFTUllvacU2wEmlyFzOBLbz3Ey9tfyP6oxJxzkX6rzwC5FPVSs/Zyw4niTS0EJRqcCG1+Z18kR8bQSNyFj/MD78eX8uQ9oOy7WRefvSOa3hlHzvGb76Y36O7LyJprBW1sTcSrwMWVJWlNymxK3Rzvg2CiYT/rpIrj7Dx8syfaG2VEJFmFc0Hza8h9sAwMRNh0X9oev4vw47e/6OGVT+491+O8L9gGE8Dkdy2Y9vSd6kzi/+GfDfwzyV1+SIyFEF5kMd63WxgA7oX++ZebUDrES8fPLM6a/Yk0hs4dO07LZl0rqJ8wGOWi6btg/Pfw2adJNRi01sjVrk9JXLeB3NQUEMJneqV5XAMPNCLF8ZoyhxjmXH3Dyh3Z0eggBMZd8YxgJgygKTaex3nNho9aLqBSvlkzasxIqTu4c4EbBocpR4m5LsxkQqCLsCeA89z4Jqj5ivTv3hPHr/o9x8zdYVadR2g6/ZL2xcr+wV2ngCdl+NHbWHWsLmT/hXkboyq5RSjrYuAlafoBvsNObjJJ3qTZmA8u6g9VmpE9i+EyZRlaM282oaRCZj3amxQJ6v1jh+KJZ3uaU9eHs1ICsFjmkXBGccJQhf3mOqPPaUC5cU3ejuJJbxuAk3DdpRy66MJImJE5SuLWD3hLpo2tc2k+oeXysJpLNszXJDltRxHY8l5i05kFmpFHd3sg4bHPrVKWoLbdYFOGPdCMGAdt/Uu3DJPkHd7yz8qTOrDL24xmS8zCXzREuEyyVFcJaoXyv6AGfFM3cWoE13JKLMoB8yUVJjmVus19/40vbDhmRbK1YpCw7REFj+ChMCzV5lRIgu+QAiLrAaS+WQVN6JnTZTjiR1x5jGcmjx+xpb+mVH8st689zwMv3A1rG4g6g/Grg3yjzrq1UI8bJ+MhxYsS3Gs+elgmNK1ub2Mvr5Sq1RqtxgZyADCn3vJ0SJhG23LKyTnYZLiyoTJTfluH+E5lpN13D7fY4q7n6J6A2gRHYKr+S0m0M9nTiT2gb3X8bvbOQAQ711EOVI6Q2lqSPsONVLCywPBK8BJZ81b8Dv5mkf6eeVnS1pjr77TFB/BOKjawjixFvuJC8qnQkys4A+O2TZka5YAYPSS0uH9ko8WMLyEVm4xmg7GDNPi7p6WRIe+epQ9j0H+3dlGco8FfUi+utuYyScL5H3nkz2LUpo0SKtv/PNfHF7hXIYgBzMGxOmaXUD+c72mmYth2I9AFa3X6YEgaGd8tOH9UD0CzAzPwH6arVoH070xOaJAgHlT2w3e9n0halAuKMoHhdxVM7egwWbJyPxVIGkSPRgkqjGLWsTREoH7ItWvn1eV6X11g0nP/Drrcef8YqYCkaZLkfFXrlp2drkNmDTJHXkJna7w/3ii5TU0fp/BA5EULrOFYUp+dTTcRiF0La4kPGXycLMi0qMlwPQ47VZC8c5TgljgGG5OwVTVsh0XtBJXr85OE5cWOBF4A7YoalEki/WoLi96YGByZ2gVOPPOtVxv1bcnyis/NaeWD9FaTqYg6scNrvfd366bb4MMMbhMXKEaZF4mCChIVqAVeh+IhYilYKGPe0Au0fNXLMBHmsB2OsEoRV1OAzW9EIRQFYBeEj0odkGw1y8aW+XR8vDecyCXjwkedlkBjFVBrxWEgrR2BJ2e/ubGePwKP288LSzlNqZJqK7OsCAtz2dQ2huAkyQU/hJPddntSRffxrRjaiIuik2mpxcdOwEMekedvmmich/DSNQiEvNwwyh5Fd0tGHfy7CBtHX//5ZmGQGTa4MpY3pBxQT8logA5JutzKO5ev0DxQVdL+LmKyR3XkbYMInoEDpUc7UKSYW+8biZHqfJffeXfWYpqwNcX92Mmy3f8gsV6Tcs4/g5zBbd6DsnBawW7rBADqnGGbyfkbTmoY4/ruIzd409VFagomnwQl34zJ3oSg4pLKkAr+bMmjD3vC43hVf2QUWwKefopbYKXRiM4jsVzI4ujy7RXBuGPuKaaPziAAAAAA=');