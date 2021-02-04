

<div class="innerWord">
    <p>核可店家名單</p>
    <div class="upd">資料更新日期：<?=date('Y-m-d');?></div>
</div>


<!-- 3 -->

<div class="formList" style="padding:10px 100px">
    <table id="myTable" class="hover " style="width:80%">
        <thead>
            <th width="20%">店家名稱</th>
            <th width="10%">所在縣市</th>
            <th width="35%">詳細地址</th>
            <th width="10%">標章期限</th>
            <th width="15%">資料更新時間</th>
        </thead>

        <tbody>


        </tbody>


    </table>

</div>

<script>
    let data;

    $.getJSON('api.php').done((re)=>{
        
        data=re;
    let dl=data.length;

    var cal=0;   //計數器
        
            for(let i=cal; i<dl; i++){

                cont=`
                    <tr>
                        <td>${data[i].market_name}</td>
                        <td>${(data[i].addr).slice(0,3)}</td>
                        <td>${data[i].addr}</td>
                        <td>${(data[i].ValidDate).slice(0,10)}</td>
                        <td>${data[i].last_edited_date}</td>
                    </tr>
                `;

                $("tbody").append(cont);
            
            }

            $(document).ready( function () {
            $('#myTable').DataTable({
                "order": [[ 4, "desc" ]],
                "lengthMenu": [ 25, 50, 100, 500 ],
            });
        } );


    });
  

    


</script>

