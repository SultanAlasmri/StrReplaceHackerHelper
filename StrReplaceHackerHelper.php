<?php


use Illuminate\Support\Str;

     function StrReplaceHackerHelper($str,$replace,$userId = null)
  {
    if (isset($str)) {
            $str =  str_replace('{9*9}', $replace ,$str);
            $str =  str_replace('sulg', $replace ,$str);
            $str =  str_replace('"', $replace,$str);
            $str =  str_replace('{', $replace,$str);
            $str =  str_replace('}', $replace,$str);
            $str =  str_replace(' ', $replace ,$str);
            $str =  str_replace('<', $replace,$str);
            $str =  str_replace('>', $replace ,$str);
            $str =  str_replace('<>',$replace ,$str);
            $str =  str_replace('{}',$replace ,$str);
            $str =  str_replace('*', $replace,$str);
            $str =  str_replace('”', $replace,$str);
            $str =  str_replace('$', $replace,$str);
            $str =  str_replace('(', $replace,$str);
            $str =  str_replace(')', $replace,$str);
            $str =  str_replace('()',$replace ,$str);
            $str =  str_replace('/', $replace ,$str);
            $str =  str_replace('<p>',$replace ,$str);
            $str =  str_replace('</p>',$replace ,$str);
            $str =  str_replace('\ ', $replace ,$str);
            $str =  str_replace('<script>', $replace ,$str);
            $str =  str_replace('</script>' , $replace ,$str);
            $str =  str_replace('?' , $replace ,$str);
            $str =  str_replace('؟' , $replace ,$str);
            $str =  str_replace('../' , $replace ,$str);
            $str =  str_replace('./' , $replace ,$str);
            $str =  str_replace('/../' , $replace ,$str);
            $str =  str_replace('..' , $replace ,$str);
            $str =  str_replace('..' , $replace ,$str);
            $str =  str_replace(';' , $replace ,$str);
            $str =  str_replace('ً' , $replace ,$str);
            $str =  str_replace('ُ' , $replace ,$str);
            $str =  str_replace('َ' , $replace ,$str);
            $str =  str_replace('ِ' , $replace ,$str);
            $str =  str_replace('ٍ' , $replace ,$str);
            $str =  str_replace(']' , $replace ,$str);
            $str =  str_replace('[' , $replace ,$str);
            $str =  str_replace('~' , $replace ,$str);
            $str =  str_replace('ْ' , $replace ,$str);
            $str =  str_replace('ٌ' , $replace ,$str);
            $str =  str_replace('’' , $replace ,$str);
            $str =  str_replace(',' , $replace ,$str);
            $str =  str_replace(':' , $replace ,$str);
            $str =  str_replace('؛' , $replace ,$str);
            $str =  str_replace('×' , $replace ,$str);
            $str =  str_replace('÷' , $replace ,$str);
            $str =  str_replace('‘' , $replace ,$str);
            $str =  str_replace('،' , $replace ,$str);
            $str =  str_replace('+' , $replace ,$str);
            $str =  str_replace('_' , $replace ,$str);
            $str =  str_replace('&' , $replace ,$str);
            $str =  str_replace('^' , $replace ,$str);
            $str =  str_replace('%' , $replace ,$str);
            $str =  str_replace('$' , $replace ,$str);
            $str =  str_replace('#' , $replace ,$str);
            $str =  str_replace('@' , $replace ,$str);
            $str =  str_replace('!' , $replace ,$str);
            $str =  str_replace('ّ' , $replace ,$str);
            $str =  str_replace('onmouseover' , $replace ,$str);
            $str =  str_replace('alert' , $replace ,$str);
            $str =  str_replace('loop=' , $replace ,$str);
            $str =  str_replace('this["' , $replace ,$str);
            
            // $str =  str_replace('' , $replace ,$str);
    }

    // dd($str,$replace,$userId);
        return $str;
    }
