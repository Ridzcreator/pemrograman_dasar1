<!DOCTYPE HTML>
<html>
<head>
    <title>Halaman Login</title>
<style>
	form{
		text-align:center;
	    }
	body{
		background: rgba(0, 128, 0, 0.3);
	    }
	.button {
 	background-color: #4CAF50;
  	border: none;
  	color: white;
  	padding: 15px 32px;
  	text-align: center;
  	text-decoration: none;
  	display: inline-block;
  	font-size: 16px;
  	margin: 4px 2px;
  	cursor: pointer;
	}

.button1 {
  background-color: white; 
  color: black; 
  border: 2px solid #4CAF50;
}

.button1:hover {
  background-color: #4CAF50;
  color: white;}
</style>

</head>

<body>
<img src="smektis.jpg" height="400" width="1262">
    <div class="container">
        <h1 style="color:#2F86A6;text-align:center;">Login</h1>
        <form>
            <label style="color:#FFFF">Username</label><br>
            <input type="text"><br>
            <label style="color:#FFFF">Password</label><br>
            <input type="password"><br><br>
            <button  class="button button1">Log in</button>
        </form>
    </div>
</body>
</html>
