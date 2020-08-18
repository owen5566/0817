<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .fail{
            color: red ;
        }
        .pass{
            color : green
        }
    </style>
</head>
<body>
    <ul>
        <?php 
        $list = array(78, 98 ,95 ,69);
        foreach($list as $key=>$score){ 
            // if ($score<90){
            //     $css = "style='color:red'";
            // }else
            //     $css="";
            ?>
            <li class=<?= !($score<90) ? "pass" : "fail"?> >score <?=($key+1)." : $score".(($score>90) ?" :D" :" >:(")?>
        <?php }?>
    </ul>
</body>
</html>