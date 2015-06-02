<?php

    function query($string){
        $string = file_get_contents('http://source-it.com.ua/teachers/');
        $string = strip_tags($string);

        $pozica = mb_strpos($string,"Татьяна Муращенко");  //находим позицию начального элемента
        //    echo $v;
        //    var_dump($v);
        $pozicb = mb_strpos($string,"Полный перечень наших курсов:"); //находим позицию конечного элемента
        //    echo $f;
        //    var_dump($f);
        $text = $pozicb - $pozica;
        $str = mb_substr($string,$pozica,$text);      //вычисляем кусок текста

//    $str = str_replace(array('_', '-', '—', '(', ')', '“', '”', '«', '»', '.', ':', '+', '/'), ' ', trim($str));
//    $str=preg_replace('  ', ' ', $str);
        //   var_dump($str);
        //    var_dump($a);

        $arr = explode(" ", $str); //разбиваем строку на массив
        //    print_r($arr);
        //    echo "<br>";
        function trim_value(&$value)     //убираем символы из элементов массива
        {
            $value = trim($value, "()“”«».:-—,");
        }

        array_walk($arr, 'trim_value');
        //    var_dump($arr);
//    preg_match('#Преподаватели Source IT(.*)Полный перечень наших курсов:#is', $string, $matches);
        //    var_dump($matches);
//    $arr   = str_word_count($matches[1],2,"АаБбВвГгДдЕеЁёЖжЗзИиЙйКкЛлМмНнОоПпРрСсТтУуФфХхЦцЧчШшЩщЪъЫыЬьЭэЮюЯя«»“”ä");
        //    print_r($c);
        $result = count($arr);              //количество слов является количество элементов массива
    }