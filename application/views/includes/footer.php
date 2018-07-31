<script type="text/javascript">
</script>
 <script type="text/javascript">
  function sold_model_(quantity,id){
    if(quantity>0){
      var base_url = $('#base').val();
      //alert("quantity");
        $.ajax({
            url: base_url+'Model/sold_model',
            type: 'POST',
            data:{quantity:quantity,id:id},
            dataType: 'text',
            success: function (data) {
              //alert(data);
              if(data == 1){
                alert("Sold Successfully!");
               location.reload();
                exit();
              }
            }
        });
    }else{
      alert("No stock available!")
    }
  }

  
 </script>
</html>