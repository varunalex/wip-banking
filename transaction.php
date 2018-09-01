<!DOCTYPE HTML>

<html>
	<head>
		<title>Smart Bank - Online Banking</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="subpage">

		<!-- Header -->
			<header id="header">
				<div class="logo"><a href="index.php">Smart Bank<span>by Online Banking</span></a></div>
				<a href="#menu" class="toggle"><span>Menu</span></a>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="index.php">HOME</a></li>
					<li><a href="register.php">REGISTER</a></li>
					<li><a href="transaction.php">TRANSACTION</a></li>
					<li><a href="services.php">SERVICES</a></li>
				</ul>
			</nav>

		
			<section id="one" class="wrapper style2">
				<div class="inner">
					<div class="box">
					<div class="content">

					
						<h2 id="elements">User</h2>
						<div class="row 200%">
							<div class="6u 12u$(medium)">

								
								
									<h3>ACCOUNT</h3>
									<blockquote>Checkyour account balance and transaction, payutility bills,carrid out many otherbanking transaction, 24 hours a day, 7 days a week, as and when you want,even from home,day or night.</blockquote>

								
									<h3>Transaction</h3>

									
									<div class="table-wrapper">
										<table>
											<thead>
												<tr>
													<th>Account Holder</th>
													<th>Account Type</th>
													<th>Account Number</th>
													<th>Available Balance</th>
												</tr>
											</thead>
											
									
												<tr>
													<td>1.Dulani Chathurika</td>
													<td>Cheque</td>
													<td>12354897978</td>
													<td>R56200.00</td>
												</tr>
													<hr/>
								<label>
								<div id ="detailst">
									<span class="acctype"></span>
									<span class="accNo"></span>
									<span class="balance"></span>
								</div>

								</label>
								<br/>
								
								
									<p class="submit">
									<input type="button" value="Logout" onclick="logout()"/>
									</p>
									</form>
									</div id="form-div">
									</div>
									</div>
								<div id="AASDFASDFASDF" class="container">

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
</form>
</div >

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
												

								
								

								
		
		
		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>