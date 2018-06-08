<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>LIVE GET DATA FROM DATABASE</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://unpkg.com/element-ui/lib/theme-chalk/index.css">
    <script src="https://unpkg.com/vue/dist/vue.js"></script>
  <script src="https://unpkg.com/element-ui/lib/index.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
</head>
<body>
  <div id="wrap" style="margin:auto;width:500px;text-align:center;">
    <h3>LIVE GET DATA FROM DATABASE</h3>
	   <button type="submit" value='11' class='get' name="get" onclick="request(this)">1</button>
       <button type="submit" value='13' class='get' name="get" onclick="request(this)">2</button>
       <button type="submit" value='17' class='get' name="get" onclick="request(this)">3</button>
    <p style="margin:0px;margin-top:10px;opacity:0.6;font-size:12px;">Nevs</p>
  </div>
  <div id="result" style="margin:auto;width:500px;text-align:center;"></div>
</body>
<div id="app">
    <el-button @click="visible = true" class='show'>Button</el-button>
    <el-dialog :visible.sync="visible" title="Done !!!">
      <p class="result">:v</p>
    </el-dialog>
  </div>
<style>
   body{
       font-family: 'Open Sans', sans-serif;
       background:#f0edf1;
   }
   #wrap{
       margin-top:40px !important;
       background:#fff;
       color:#8491caff;
       padding:5px 10px 20px 10px;
       clear:both;
   }
   #download{
       margin-top:10px;
   }
   #result{
       margin-top:40px !important;
       background:#fff;
       color:#8491caff;
       float:left;
   }
   .origin-img{
       width:30%;
   }
   #form{
       letter-spacing:-5px;
       border-radius:10px;
   }
   input,button{
       padding:10px 10px;
       border:none;
       font-family: 'Open Sans', sans-serif;
   }
   .show{
       display:none !important;
   }
   input{
       width:80%;
       background:#f4f1f4;
   }
   button{
       background:#2296f3;
       color:#fff;
       padding: 10px 20px;
   }
   button:hover{
   	cursor:pointer;
   }
</style>
  <script>
    new Vue({
      el: '#app',
      data: function() {
        return { visible: false }
      }
    })
  </script>
<script>
       function request(element){
           var id = $(element).val();
           console.log(id);
           $.ajax({
               url: "get.php",
               method: "POST",
               data:{id:id},
               success:function(data){
                   $('.show').click();
                   $('.result').html(data);
               }
           });
       }
</script>
</html>
