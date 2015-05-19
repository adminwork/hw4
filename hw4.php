<?php
    $string = file_get_contents('http://source-it.com.ua/teachers/');
    $string = strip_tags($string);

    $v = mb_strpos($string,"Татьяна Муращенко");  //находим позицию начального элемента
                                                                                                                        //    echo $v;
                                                                                                                        //    var_dump($v);
    $f = mb_strpos($string,"Полный перечень наших курсов:"); //находим позицию конечного элемента
                                                                                                                        //    echo $f;
                                                                                                                        //    var_dump($f);
    $g = $f - $v;
    $str = mb_substr($string,$v,$g);      //вычисляем кусок текста


    function mb_trim($str) {
        return mb_ereg_replace(
            '^[[:space:]]*([\s\S]*?)[[:space:]]*$', '\1', $str );
    }

var_dump($str);


                                                                                                                        //    echo $a;
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
    echo 'Количество слов:',$result;
    echo "<br>";

    $tmp = array_count_values($arr);
    $max = max($tmp);
    $result = array_search( $max, $tmp);
    echo 'Самый повторяющийся элемент массива: ', $result, '. Он повторяется ', $max, ' раз(а).';
    echo "<br>";
//var_dump($tmp);
    $min = min($tmp);
//var_dump($min);
    echo 'Самые редкие слова, повторяются '."$min".' раз:';
    foreach($tmp as $key => $value){
        if ($value = $min);
        $arrmin = $key;
        echo "$arrmin ,";
    }

    echo '<table border="1" cellpadding="5">';   //таблица слов с кол-вом повторений
        echo "<tr>";
            echo "<td><b>Слово</b></td>";
            echo "<td><b>Количество</b></td>";
        echo "</tr>";
    foreach($tmp as $key => $value){
        echo "
            <tr>
                <td>$key</td>
                <td>$value</td>
            </tr>";
    }
    echo "</table>";

