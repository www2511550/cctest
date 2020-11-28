<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script language="JavaScript">
        function myrefresh()
        {
            window.location.reload();
        }
        setTimeout('myrefresh()',50000); //指定1秒刷新一次
    </script>
    <title>淘礼金-免单-时时更新</title>
    <style>
        *{padding: 0;margin: 0}
        li{list-style: none}
        div.content>ul{
            text-align: center;margin-top: 20px;
        }
        div.content>ul>li{margin-top: 10px;}
    </style>
</head>

<?php

$data = file_get_contents('http://dwz.2xb.cn/web_api/yuyuzhe/getdata.php');
$data = json_decode($data, true);
//echo '<pre>'.print_r($data, true).'</pre>';die;


?>

<body>
<div class="content">
    <h3 style="text-align: center;margin-top: 8px;">最新免单商品列表</h3>
    <ul>
        <?php
            if (count($data)>0){
                foreach ($data['data'] as $value){
                    echo '<li>'.$value['text'].'<br><a target="_blank" href="'.$value['url'].'">...点我快速抢购...</a></li>';
                }
        ?>
        <?php }else{ ?>
            <li>暂无免单，<a href="http://juanzhuzhu.com" target="_blank">其他特惠商品点我</a></li>
        <?php } ?>
    </ul>
</div>
</body>
</html>