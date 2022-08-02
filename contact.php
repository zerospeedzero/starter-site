<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Sample Website</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="styles.css" rel="stylesheet">
	<style>
		form div, fieldset{
			margin-bottom:1rem;
		}
		fieldset{
			padding:0;
			border:none;
		}
		legend{
			margin-bottom:0.3rem;
		}
		input,select,textarea{
			font-family:"Trebuchet MS",Arial,Helvetica,sans-serif;
		}
	</style>
</head>

<body>
	<div id="wrapper">
    	<header>
			<h1>Sample Website</h1>
            <nav>
            	<ul>
                	<li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav>
        </header>
        <main>
        	<h2>Contact Us</h2>
        	<form action="#" method="post">
				<div>
					 <label for="name">Text Input</label>
					 <input type="text" name="name" id="name" value="" tabindex="1" />
				</div>

				<fieldset>
					<legend>Radio Button Choice</legend>
					<input type="radio" name="radios" id="radio-choice-1" tabindex="2" value="choice-1"><label for="radio-choice-1">Choice 1</label>

					<input type="radio" name="radios" id="radio-choice-2" tabindex="3" value="choice-2"><label for="radio-choice-2">Choice 2</label>
				</fieldset>

				<div>
					<label for="select-choice">Select Dropdown Choice:</label>
					<select name="select-choice" id="select-choice">
						<option value="Choice 1">Choice 1</option>
						<option value="Choice 2">Choice 2</option>
						<option value="Choice 3">Choice 3</option>
					</select>
				</div>
				
				<div>
					<label for="textarea" style="display:block;">Textarea</label>
					<textarea cols="40" rows="8" name="textarea" id="textarea"></textarea>
				</div>
				
				<div>
					<label for="checkbox">Checkbox</label>
					<input type="checkbox" name="checkbox" id="checkbox">
				</div>

				<div>
					<input type="submit" value="Submit">
				</div>
			</form>

        </main>
        <footer>
        	<small>&copy; Copyright 2020 Dan Stephenson. All Rights Reserved.</small>
        </footer>
    </div>
</body>
</html>