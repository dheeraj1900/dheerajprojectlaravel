<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: ;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
  margin:200px;
}

/* Full-width input fields */
input[type=name], input[type=Email], input[type=number] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border:none;
  background: #f1f1f1;
}

input[type=name], input[type=Email], input[type=number] :focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.submitbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.submitbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
.color{
  color: red;
  font-size: 20px;
}
</style>
</head>
<body>
@if (count($errors) > 0)
   <div class = "alert alert-danger">
      <ul>
         @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
         @endforeach
      </ul>
   </div>
@endif
<form action="mylaravel/insert" method="post">
{{csrf_field()}}
  <div class="container">
    <h1>Register</h1>
    <hr>
     <label for="name"><b>Name<span class="color">*</span></b></label>
    <input type="name" placeholder="Enter name(eg.john)" name="name"  ><br>

    <label for="email"><b>Email<span class="color">*</span></b></label>
    <input type="email" placeholder="Enter Email(eg.abc12@gmail.com)" name="email" ><br>


    <label for="pin_code"><b>Pincode<span class="color">*</span></b></label>
    <input type="number" placeholder="Enter pincode(eg.110001)" name="pin_code" >


    <button type="submit" class="submitbtn">submit</button>
  </div>
  
  
</form>

</body>
</html>
