<div class="innerWord">
    <p>各地區核可店家數量</p>
    <div class="upd" style="width: 70%;">資料更新日期：<?=date('Y-m-d');?></div>
</div>



<table style="width: 40%;">
    <thead>
            <tr>
                <th style="width: 30%;">地區</th>
                <th style="width: 30%;">店家數量</th>
            </tr>
    </thead>
    <tbody>

    </tbody>


</table>

<script>

        let tai=0,newt=0,tao=0,shi=0,mau=0,chug=0,zun=0,nan=0,yun=0,jia=0,tna=0,kao=0,pin=0,don=0,hua=0,yil=0,pon=0,maa=0,gin=0,lian=0;


        $.getJSON('api.php').done((re)=>{
          data=re;
          let city=new Array;
              city=["臺北市",
                    "新北市",
                    "桃園市",
                    "新竹縣",
                    "苗栗縣",
                    "臺中市",
                    "彰化縣",
                    "南投縣",
                    "雲林縣",
                    "嘉義縣",
                    "臺南市",
                    "高雄市",
                    "屏東縣",
                    "臺東縣",
                    "花蓮縣",
                    "宜蘭縣",
                    "澎湖縣",
                    "金門縣",
                    "馬祖縣",
                    "連江縣",
            ];
          let count=new Array;
            let dl=data.length;
                count[0]=0; 
                count[1]=0;
                count[2]=0; 
                count[3]=0; 
                count[4]=0; 
                count[5]=0;
                count[6]=0;
                count[7]=0;
                count[8]=0;
                count[9]=0;
                count[10]=0;
                count[11]=0;
                count[12]=0;
                count[13]=0;
                count[14]=0;
                count[15]=0;
                count[16]=0;
                count[17]=0;
                count[18]=0;
                count[19]=0;
                
             console.log(dl);
                for(let i=0;i<dl;i++){
                    switch(data[i].addr.slice(0,3)){
                    case "臺北市":
                        tai++;
                        count[0]=tai;
                    break;
                    case "新北市":
                        newt++;
                        count[1]=newt;
                    break;
                    case "桃園市":
                        tao++;
                        count[2]=tao;
                    break;
                    case "新竹市":
                    case "新竹縣":
                        shi++;
                        count[3]=shi;
                    break;
                    case "苗栗縣":
                        mau++;
                        count[4]=mau;
                    break;
                    case "臺中市":
                        chug++;
                        count[5]=chug;
                    break;
                    case "彰化縣":
                        zun++;
                        count[6]=zun;
                    break;
                    case "南投縣":
                        nan++;
                        count[7]=nan;
                    break;
                    case "雲林縣":
                        yun++;
                         count[8]=yun;
                    break;
                    case "嘉義縣":
                        jia++;
                         count[9]=jia;
                    break;
                    case "臺南市":
                        tna++;
                         count[10]=tna;
                    break;
                    case "高雄市":
                        kao++;
                         count[11]=kao;
                    break;
                    case "屏東縣":
                        pin++;
                         count[12]=pin;
                    break;
                    case "臺東縣":
                        don++;
                         count[13]=don;
                    break;
                    case "花蓮縣":
                        hua++;
                         count[14]=hua;
                    break;
                    case "宜蘭縣":
                        yil++;
                         count[15]=yil;
                    break;
                    case "澎湖縣":
                        pon++;
                         count[16]=pon;
                    break;
                    case "金門縣":
                        gin++;
                         count[17]=gin;
                    break;
                    case "馬祖縣":
                        maa++;
                         count[18]=maa;
                    break;
                    case "連江縣":
                        lian++;
                         count[19]=lian;
                    break;

                }

          }
             for(let i=0; i<20; i++){
                    cont=`
                    <tr>
                        <td>${city[i]}</td>
                        <td>${count[i]}</td>

                    </tr>
                `;
                   $("tbody").append(cont);
                }

        })
</script>