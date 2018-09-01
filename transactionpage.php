
<html>
<title>Online Banking</title>
<link href="css.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
function postTodatabase(){

	if (window.XMLHttpRequest)
		{

		xmlhttp=new XMLHttpRequest();
		}
else
		{

		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		var fsend = "clientname=";
		var tosend = document.getElementById('name').value;
		fsend += tosend;
		fsend += "&surname=";
		tosend = document.getElementById('surname').value;
		fsend += tosend;
		fsend += "&initial=";
		tosend = document.getElementById('initial').value;
		fsend += tosend;
		fsend += "&id_passport=";

		tosend = document.getElementById('id_passport').value;
		fsend += tosend;


	xmlhttp.open("GET","register.php?"+fsend,false);
	xmlhttp.send();
	document.getElementById("maincont").innerHTML=xmlhttp.responseText;

}
	function getBalance(acctNo){
	if (window.XMLHttpRequest)
	{
	xmlhttp=new XMLHttpRequest();
}

else
{



xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}

	var fsend = "accNo=";
	var tosend = acctNo;
	fsend += tosend;
	xmlhttp.open("GET","getbalance.php?"+fsend,false);
	xmlhttp.send();
	document.getElementById("detailst").innerHTML=xmlhttp.responseText;
}
	function logout(){
	if (window.XMLHttpRequest)
{



xmlhttp=new XMLHttpRequest();
}

else
{


	xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}
	xmlhttp.open("GET","logout.php?",false);
	xmlhttp.send();
	window.location = "home.html";
}

	function getCookie(c_name)
{
	var i,x,y,ARRcookies=document.cookie.split(";");
	for (i=0;i<ARRcookies.length;i++)
{
	x=ARRcookies[i].substr(0,ARRcookies[i].indexOf("="));
	y=ARRcookies[i].substr(ARRcookies[i].indexOf("=")+1);
	x=x.replace(/^\s+|\s+$/g,"");
	if (x==c_name)
{
	return unescape(y);
}
}
}

	function checkLogin(){
	var accountNo =getCookie("accountNo");
	if (accountNo!=null && accountNo!="")
{
	getBalance(accountNo);
}
else
{
	alert("Please login in-order to perform a transaction");
	window.location = "bank.php";
}
}



	function beneficiarypayment(){
	if (window.XMLHttpRequest)
{


	xmlhttp=new XMLHttpRequest();
}

else
	{
	

	xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}
	var accountNo =getCookie("accountNo");
	var fsend = "benaccountno=";
	var tosend = document.getElementById('benaccountno').value;
	fsend += tosend;
	fsend += "&amount=";
	tosend = document.getElementById('amount').value;
	fsend += tosend;
	fsend += "&accountNo=";
	tosend = accountNo;
	fsend += tosend;
	xmlhttp.open("GET","beneficiary.php?"+fsend,false);
	xmlhttp.send();

	var resp=xmlhttp.responseText;
	if(resp == "paid"){
	alert('Your Transaction has been Successfully Completed.');
	getBalance(accountNo);

	}
	else
	{
	alert("You current balance is less than the amount you want to pay");
}
}
	function getBalance(acctNo){
	if (window.XMLHttpRequest)

		{


	xmlhttp=new XMLHttpRequest();
}
	else
{


	xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}

	var fsend = "accNo=";
	var tosend = acctNo;
	fsend += tosend;
	xmlhttp.open("GET","getbalance.php?"+fsend,false);
	xmlhttp.send();
	document.getElementById("detailst").innerHTML=xmlhttp.responseText;
}

	function transferamount(){
	if (window.XMLHttpRequest)

{


	xmlhttp=new XMLHttpRequest();
}
else
{

	xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}
	var accountNo =getCookie("accountNo");
	var fsend = "benaccountno=";
	var tosend = document.getElementById('benaccountnos').value;
	fsend += tosend;

	fsend += "&company=";
	tosend = document.getElementById('company').value;
	fsend += tosend;
	fsend += "&amount=";
	tosend = document.getElementById('amounts').value;
	fsend += tosend;
	fsend += "&accountNo=";
	tosend = accountNo;
	fsend += tosend;
	xmlhttp.open("GET","test.php?"+fsend,false);
	xmlhttp.send();

	
	var resp=xmlhttp.responseText;
	if(resp == "done"){
	alert('You have paid the Beneficiary.');
	getBalance(accountNo);
	}else{
	alert("You current balance is less than the amount you want to pay");
}
}
</script>
</head>


<body onload="checkLogin()">
	<div id="maincont">
	<div id="wrapperdetail">
	<div id="form-divdetail">
<form class="form" id="form1" action='register.php' method='GET'>
<h1 align="center"><label >DETAILS</label></h1>
<div>
<h3>
<label>
	<span class="acctholder">Account Holder</span>
	<span class="acctype">Account Type</span>
	<span class="accNo">Account Number</span>
	<span class="balance">Available Balance</span>
</label>
</h3>
</div>
<br/>

<hr/>
<label>
<div id ="detailst">
	<span class="acctype"></span>
	<span class="accNo"></span>
	<span class="balance"></span>
</div>

</label>
<br/>
<br/>
<hr/>
	<p class="submit">
	<input type="button" value="Logout" onclick="logout()"/>
	</p>
	</form>
	</div id="form-div">
	</div>
	</div>
<div id="AASDFASDFASDF" class="container">

	<div align="right">
		<h2><a href="loan.php">Apply For A Loan</a></h2>
	</div>
</br>
<p>
	<div id="wrapper2">
<div id="form-div2">
	<form class="form" id="form2">
	<h3 align="center"><label >EFT Transaction</label></h3>
	<hr />
	<p class="name">
	<input name="benaccountno" type="text" class="validate[required,custom[onlyLetter],length[0,100]] text-input" id="benaccountno" />
<label for="name">To Account No.</label>
</p>

<p class="name">
	<input name="amount" type="text" class="validate[required,custom[onlyLetter],length[0,100]] text-input" id="amount" />
	<label for="name">Amount</label>
	</p>
	<p class="submit">
	<input type="button" value="Transfer" onclick="beneficiarypayment()"/>
</p>

</form>
</div >
</div>
<p>
<div id="wrapper5">
<div id="form-div5">
<form class="form" id="form2">
<h3 align="center"><label >Beneficiary Payment</label></h3>
<hr />

<p class="name">
	<input name="bankname" type="text" class="validate[required,custom[onlyLetter],length[0,100]] text-input" id="name" />
	<label for="name">Bank Name</label>
</p>
<p class="name">
	<input name="benaccountno" type="text" class="validate[required,custom[onlyLetter],length[0,100]] text-input" id="benaccountnos" />
	<label for="name">Beneficary Account No.</label>
</p>
<p class="name">
<select name="company" class="validate[required,custom[onlyLetter],length[0,100]] text-input" id="company" />
<option value="telkom">Telkom</option>
<option value="edgars">Edgars</option>
<option value="UWC">UWC</option>
</select>

<label for="benef">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspCompany</label>
</p>

<p class="name">
<input name="amount" type="text" class="validate[required,custom[onlyLetter],length[0,100]] text-input" id="amounts" />
<label for="name">Amount</label>
</p>
<p class="submit">
<input type="button" value="Pay" onclick="transferamount()"/>
</p>
</form>
</div >
</div>
<div id="wrapper8">
<div id="form-div8">
	<form class="form" id="form2" action="statement3.php ">
	<h2 align="center"><label >View Statement</label></h2>

	Enter your Acc number<br><br />
	<input name="AccountPin" type="text" id="AccountPin" />
	<p class="submit">
	<input type="submit" name="submit" value="View" />
	</p>
</form>
</div>
</p>
</div>
</body>
</html>