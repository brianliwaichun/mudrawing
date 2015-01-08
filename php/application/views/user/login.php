
    <!DOCTYPE html>
    <html lang="en">
	<link rel="stylesheet" type="text/css" href="../../bootstrap-3.1.1-dist/css/bootstrap.css">
        <head>
            <meta charset="utf-8"></meta>
            <meta content="IE=edge" http-equiv="X-UA-Compatible"></meta>
            <meta content="width=device-width, initial-scale=1" name="viewport"></meta>
            <meta content="" name="description"></meta>
            <meta content="" name="author"></meta>
            <title>Cloud Based Multiple Drawing System</title>
        </head>
        <body>
            <div class="container">
                <form class="form-signin" method="post">
					<h2 class="form-signin-heading">

                        Cloud Based Multiple Drawing System<br/><br/>Please sign in

                    </h2>
					
                    <input class="form-control" autofocus="" required="" placeholder="User name" name="username"></input>
                    <input class="form-control" type="password" required="" placeholder="Password" name="password"></input>
                    <label class="checkbox">
                        <input type="checkbox" value="remember-me"></input>
                         Remember me
                    </label>
                    <button class="btn btn-lg btn-primary btn-block" type="submit">
                        Sign in
                    </button>
					<?php if($this->input->get('error')){
						echo "Login ID/Password incorrect.";
					}?>
                </form>
            </div>
           
        </body>
	
	<script src="../../bootstrap-3.1.1-dist/js/jquery-2.1.0.js"></script>
    </html>

