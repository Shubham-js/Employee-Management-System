<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  	<style type="text/css">
  		form{
  			display: flex;
  			flex-direction: column;
  			align-items: center;
  		}
  		.re :hover{
  			color: grey;
  		}
  		
		input[type=text] {
			  border-top: none;        /* Remove default borders */
			  border-left: none;
			  border-right: none;
		}
		input[type=email] {
			  border-top: none;        /* Remove default borders */
			  border-left: none;
			  border-right: none;
		}
		input[type=password] {
			  border-top: none;        /* Remove default borders */
			  border-left: none;
			  border-right: none;
		}
		input[type=text]:focus{
  				outline: none;      /* Remove default outline and use border or box-shadow */
  				box-shadow: 0 0 0 2px orange; /* Full freedom. (works also with border-radius) */
			}
		input[type=email]:focus{
  				outline: none;      /* Remove default outline and use border or box-shadow */
  				box-shadow: 0 0 0 2px orange; /* Full freedom. (works also with border-radius) */
			}
		input[type=password]:focus{
  				outline: none;      /* Remove default outline and use border or box-shadow */
  				box-shadow: 0 0 0 2px orange; /* Full freedom. (works also with border-radius) */
			}
		input:focus::placeholder { /* Firefox, Chrome, Opera */ 
    			color: orange; 
		} 
  	</style>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Dight Intern</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home</a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Register
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="remployee.php" class="re">Employee</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="remployer.php" class="re">Employer</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Login
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item"  href="lemployee.php" >Employee</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="lemployer.php">Employer</a>
        </div>
      </li>
     
    </ul>

  </div>
</nav>
