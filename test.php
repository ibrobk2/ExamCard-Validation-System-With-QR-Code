<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    var tr = 
    '<select name="" id="">'+
        '<option value="">Kano</option>'+
        '<option value="">Katsina</option>'+
        '<option value="">Kaduna</option>'+
    '</select>'+
    '<input>';
  $(".btn").click(function(){
    $(tr).appendTo(".row");
  });
});
</script>
</head>
<body>

<div class="row">
    <select name="" id="">
        <option value="">Kano</option>
        <option value="">Katsina</option>
        <option value="">Kaduna</option>
    </select>
</div>
<button class="btn">Add</button>


</body>
</html>
