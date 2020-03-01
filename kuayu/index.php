<script type="text/javascript" src="jquery-1.7.min.js"></script>
<button onclick="ajaxPost()">o</button><br>
<button onclick="jsonp()">p</button>
<script type="text/javascript">

    function ajaxPost(){
        $.ajax({
            url:"http://cs.com/index.php",
            dataType:'jsonp', //这里必须指定为jsonp
           // data:{"name":"xiaozhang"},
           // type:'post',
            jsonp:'sulifer', //这行不可以不用，不用的时候默认为callback，也可以自定义，但是要注意后台要原样返回，比如这里定义为callback，后台返回的格式也要是callback(data);
            success:function(JSON) {
                console.log(JSON);
                //这里输入你的结果处理程序
            }
        });
    }
</script>