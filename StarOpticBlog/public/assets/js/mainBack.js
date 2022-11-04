$(document).ready(function(){
    //console.log('ucitano');
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    var _token=$("input[name='_token']").val();


    fetch_data();
    function fetch_data(from_date='',to_date=''){

        $.ajax({
            url:"/admin/activity/fetch_data",
            method:"POST",
            data:{
                from_date:from_date,
                to_date:to_date,
                _token:_token
            },
            dataType:"json",
            success:function (data){
                var output='';
                $('#total_records').text(data.length);
                for(var count=0;count<data.length;count++){
                    output+='<tr>';
                    output+='<td>'+data[count].id+'</td>';
                    output+='<td>'+data[count].username+'</td>';
                    output+='<td>'+data[count].email+'</td>';
                    output+='<td>'+data[count].role_name +'</td>';
                    output+='<td>'+data[count].activity +'</td>';
                    output+='<td>'+data[count].created_at +'</td></tr>';
                }
                $('#activity').html(output);
            }
        })
    }


    $('#filter').click(function (){

       var from_date=$('#from_date').val();
       var to_date=$('#to_date').val();
       //console.log(to_date);
       if(from_date!='' && to_date!=''){
            fetch_data(from_date,to_date);
       }
       else {
           alert('Morate izabrati oba datuma');
       }
    });

    $('#refresh').click(function () {
        $('from_date').val('');
        $('to_date').val('');
        fetch_data();
    })

    fetch_users_data();
    function fetch_users_data(query=''){

        $.ajax({
            url:"/searchUsers",
            method:"GET",
            data:{query:query},
            dataType: 'json',
            success:function (data) {
                $('#table_users').html(data.table_data);
                $('#total_recordss').html(data.total_data);
            }

        })
    }

    $('#search_users').click(function () {
         var query=$('#search').val();
         fetch_users_data(query);
    })



})
