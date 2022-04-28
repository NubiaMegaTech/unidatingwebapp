<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Privacy Policy</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
		.custom-file-input::-webkit-file-upload-button {
  visibility: hidden;
}
.custom-file-input::before {
  content: 'Select some files';
  display: inline-block;
  background: linear-gradient(top, #f9f9f9, #e3e3e3);
  border: 1px solid #999;
  border-radius: 3px;
  padding: 5px 8px;
  outline: none;
  white-space: nowrap;
  -webkit-user-select: none;
  cursor: pointer;
  text-shadow: 1px 1px #fff;
  font-weight: 700;
  font-size: 10pt;
}
.custom-file-input:hover::before {
  border-color: black;
}
.custom-file-input:active::before {
  background: -webkit-linear-gradient(top, #e3e3e3, #f9f9f9);
}

		body {
  font-family: Avenir Next, Avenir, SegoeUI, sans-serif;
}


form {
  margin: 2em 0;
}
/**
* Make the field a flex-container, reverse the order so label is on top.
*/
 
.field {
  display: flex;
  flex-flow: column-reverse;
  margin-bottom: 1em;
}
/**
* Add a transition to the label and input.
* I'm not even sure that touch-action: manipulation works on
* inputs, but hey, it's new and cool and could remove the 
* pesky delay.
*/
label, .edit-profile-input {
  transition: all 0.2s;
  touch-action: manipulation;
}

.edit-profile-input {
  font-size: 1.5em;
  border: 0;
  border: 1px solid #ccc;
  font-family: inherit;
  -webkit-appearance: none;
  border-radius: 30px;
  padding: 20px;
  cursor: text;
}

.edit-profile-input:focus {
  outline: 0;
  border-bottom: 1px solid #666;
}

label {
  text-transform: uppercase;
  letter-spacing: 0.05em;
  color: #000 !important;
}
/**
* Translate down and scale the label up to cover the placeholder,
* when following an .edit-profile-input (with placeholder-shown support).
* Also make sure the label is only on one row, at max 2/3rds of the
* field—to make sure it scales properly and doesn't wrap.
*/
.edit-profile-input:placeholder-shown + label {
  cursor: text;
  max-width: 66.66%;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
  transform-origin: left bottom;
  transform: translate(0, 2.125rem) scale(1.5);
}
/**
* By default, the placeholder should be transparent. Also, it should 
* inherit the transition.
*/
::-webkit-input-placeholder {
  opacity: 0;
  transition: inherit;
}
/**
* Show the placeholder when the .edit-profile-input is focused.
*/
.edit-profile-input:focus::-webkit-input-placeholder {
  opacity: 1;
}
/**
* When the element is focused, remove the label transform.
* Also, do this when the placeholder is _not_ shown, i.e. when 
* there's something in the .edit-profile-input at all.
*/
.edit-profile-input:not(:placeholder-shown) + label,
.edit-profile-input:focus + label {
  transform: translate(0, 0) scale(1);
  cursor: pointer;
}		
	</style>
</head>
<body>
	<!-- <input type="file" class="custom-file-input"> -->
	<form action="">
	  <div class="field">
	    <input class="edit-profile-input" type="text" name="fullname" id="fullname" placeholder="Jane Appleseed">
	    <label class="label" for="fullname">Name</label>
	  </div>
	  
	  <div class="field">
	    <input class="edit-profile-input" type="email" name="email" id="email" placeholder="jane.appleseed@example.com">
	    <label class="label" for="email">Email</label>
	  </div>
	</form>
	<i class="fa-solid fa-bud"></i>
</body>
</html>