# php
#### define
`define("test", 123); echo test;`

#### operater
> &&.||會提前結束判斷
> `(1>3)&&(1<3)`
> (1<3)不會執行

#### str func
- strlen($str) : 傳回$str byte 數
- substr($str, $start , $lenght) : 從 $str 的 $start 位置取出 $lenght 個字元
- str_replace($search, $replace, $str) : 從 $str 找到 $search 取代成 $replace
- strpos($str, $search) : 從 $str 找到 $search , 回傳找到的位置(若無結果則回傳false)

#### for loop
- foreach($陣列 as $單相){
    $單相...
}

#### sort
- natsort($arr) : natural sort

#### uploadFile
> require 
> 1.<form method="post" *enctype="multipart/form-data"*>
> 2.<input *type="file"*>
> $\_FILES ===> array
> $\_FILES["inputFile btn name"] ===> object
>> Array
>> (
>>    [name] => wryyy.txt
>>    [type] => text/plain
>>    [tmp_name] => /Applications/MAMP/tmp/php/php6APtLt
>>    [error] => 0
>>    [size] => 7
>> ) 
