<?php

    

    function load_contents($url){
        $curl=curl_init();
        curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
        curl_setopt($curl,CURLOPT_URL,$url);

        $data=curl_exec($curl);
        curl_close($curl);
        return $data;
    }

    $content=load_contents('https://data.coa.gov.tw/Service/OpenData/TransService.aspx?UnitId=tR9TIFWlvquB');
    echo $content;
    
    // $data2=json_decode($content);
    // print_r($data2);

?>