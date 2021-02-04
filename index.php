<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>台灣豬標章核可店家</title>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
    <script src="https://kit.fontawesome.com/87c0ff4c0f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.23/datatables.min.css"/>
    <script src="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.23/datatables.min.js"></script>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.css' integrity='sha512-C7hOmCgGzihKXzyPU/z4nv97W0d9bv4ALuuEbSf6hm93myico9qa0hv4dODThvCsqQUmKmLcJmlpRmCaApr83g==' crossorigin='anonymous'/>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js' integrity='sha512-d9xgZrVZpmmQlfonhQUvTR7lMPtO7NkZMkA0ABN3PHCbKA5nqylQ/yWlFAyY6hYgdF1Qh6nYiuADWwKB4C2WSw==' crossorigin='anonymous'></script>
</head>
<body>
    <meta>

    <div class="outSide">
        
        <!-- 1 -->
        <div class="title">
            <div class="inde"><a href="index.php"><i class="fas fa-home"> 回首頁</i></a></div>
            <div class="title2">
            <img src="img/tw_p.png" >
            <h3>臺灣豬標章核可店家</h3>
            </div>
        </div>
     
        <nav class="navWord">
            
                <ul>
                    <li><a href="?do=list">核可店家名單</a></li>
                    <li><a href="?do=anl">區域分佈</a></li>
                    <li><a href="?do=cal">資料統計</a></li>
                    <li><a href="?do=apo">API授權說明</a></li>
                    <li><a href="?do=rel">相關網站</a></li>
                </ul>
          
        </nav>

        <?php


            $do=(isset($_GET['do']))?$_GET['do']:"main";
            
            switch($do){

                    case "list";
                    case "anl";
                    case "cal":
                        $file="link/".$do.".php";
                    break;

                    default;
                        $file="link/".$do.".html";
                    break;
            }

            if(file_exists($file)){
                include_once $file;
            }else{
                include_once "main.php";
            }
        ?>

       
    </div>

        <footer>
            <div>
                <p>｜&copy;Designed by VITA LIN｜</p>
                <p>平台來源友善引用，詳請請見API授權說明</p>
            </div>
    
        </footer>

</body>
</html>

<!-- https://hsiangfeng.github.io/javascript/20190505/1432256317/ -->