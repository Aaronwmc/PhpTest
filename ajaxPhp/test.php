<?php header('Content-Type:text/html;charset=utf-8');?>
<script type="text/javascript">
	function showHint(str)
	{	
		if(str.length==0)
		{
			document.getElementById('txtHint').innerHTML='';
			return ;
		}
		if(window.XMLHttpRequest)
		{
			xmlhttp=new XMLHttpRequest();
		}
		else
		{
			xmlhttp=new ActiveXObject('Microsoft.XMLHTTP');
		}
		xmlhttp.onreadystatechange=function()
		{
			if(xmlhttp.readyState==4&&xmlhttp.status==200)
			{
				document.getElementById('txtHint').innerHTML=xmlhttp.responseText;
			}
		}
		xmlhttp.open('get','gethint.php?q='+str,true);
		xmlhttp.send();
	}
</script>


<p><b>在输入框中输入一个姓名:</b></p>
<form>
姓名: <input type="text" onkeyup="showHint(this.value)">
</form>
<p>返回值: <span id="txtHint"></span></p>