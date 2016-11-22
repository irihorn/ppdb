 $(document).ready(function(){  
      function fetch_data(id)  
      {  
           $.ajax({  
                url:"select_invest.php",  
                method:"POST",
                data:{id:ptn_id},  
                dataType:"text",  
                success:function(data){  
                     $('#live_data').html(data);  
                }  
           });  
      }  
      fetch_data();
});