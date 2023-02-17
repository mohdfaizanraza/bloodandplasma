<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<style>
    
.register{
    background: -webkit-linear-gradient(left, #3931af, #00c6ff);
    margin-top: 3%;
    padding: 3%;
}
.register-left{
    text-align: center;
    color: #fff;
    margin-top: 4%;
}
.register-left input{
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    width: 60%;
    background: #f8f9fa;
    font-weight: bold;
    color: #383d41;
    margin-top: 30%;
    margin-bottom: 3%;
    cursor: pointer;
}
.register-right{
    background: #f8f9fa;
    border-top-left-radius: 10% 50%;
    border-bottom-left-radius: 10% 50%;
}
.register-left img{
    margin-top: 15%;
    margin-bottom: 5%;
    width: 25%;
    -webkit-animation: mover 2s infinite  alternate;
    animation: mover 1s infinite  alternate;
}
@-webkit-keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
@keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
.register-left p{
    font-weight: lighter;
    padding: 12%;
    margin-top: -9%;
}
.register .register-form{
    padding: 10%;
    margin-top: 10%;
}
.btnRegister{
    float: right;
    margin-top: 10%;
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    background: #0062cc;
    color: #fff;
    font-weight: 600;
    width: 50%;
    cursor: pointer;
}
.register .nav-tabs{
    margin-top: 3%;
    border: none;
    background: #0062cc;
    border-radius: 1.5rem;
    width: 28%;
    float: right;
}
.register .nav-tabs .nav-link{
    padding: 2%;
    height: 34px;
    font-weight: 600;
    color: #fff;
    border-top-right-radius: 1.5rem;
    border-bottom-right-radius: 1.5rem;
}
.register .nav-tabs .nav-link:hover{
    border: none;
}
.register .nav-tabs .nav-link.active{
    width: 100px;
    color: #0062cc;
    border: 2px solid #0062cc;
    border-top-left-radius: 1.5rem;
    border-bottom-left-radius: 1.5rem;
}
.register-heading{
    text-align: center;
    margin-top: 8%;
    margin-bottom: -15%;
    color: #495057;
}



</style>

    <title>Document</title>
</head>
<body>


<div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                        <h3>Welcome</h3>
                      
                        <input type="submit" name="" value="DONAR"/><br/>
                    </div>
                    <div class="col-md-9 register-right">
                        <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">DONAR</a>
                            </li>
                           
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">DONAR UPLOADS</h3>
                                <div class="row register-form">
                                    <div class="col-md-6">
                             <div class="form-group">
                                <form action="userinfo.php" method="post" enctype="multipart/form-data">
            <label>Username</label>
        <input type="text" name="user" autocomplete="off" class="form-control">
            
        </div>

        <div class="form-group">
            <label>Email Id</label>
        <input type="text" name="email" autocomplete="off" class="form-control">
            
        </div>

        <div class="form-group">
            <label>Mobile No</label>
        <input type="text" name="mobile" autocomplete="off" class="form-control">
            
        </div>

        




<div class="form-group">
    <label>GENDER</label><br>
  <input type="radio" id="male" name="gender" value="male">
  <label for="male">Male</label><br>
  <input type="radio" id="female" name="gender" value="female">
  <label for="female">Female</label><br>
  <input type="radio" id="other" name="gender" value="other">
  <label for="other">Other</label>
  </div>


<div class="form-group">
<label for="state">Choose a state:</label>
<select id="state" name="state">
     <option >SELECT</option>
  <option value="MAHARASHTRA">MAHARASHTRA</option>
  <option value="MADHYAPRADESH">MADHYAPRADESH</option>
   <option value="UTTARPRADESH">UTTARPRADESH</option>
  <option value="ANDHRAPRADESH">ANDHRAPRADESH</option>
  <option value="TAMILNADU">TAMILNADU</option>
</select>
</div>

<div class="form-group">
            <label>Enter City</label>
        <input type="text" name="city" autocomplete="off" class="form-control">
            
        </div>




<div class="form-group">
    <label>FILES UPLOADS</label>
<input type="file" name="file">
</div>


<div class="form-group">
<label for="birthday">Birthday:</label>
<input type="date" id="birthday" name="dob">
</div>



<div class="form-group">
<label for="blood">SELECT BLOOD GROUP:</label>
<select id="blood" name="blood">
     <option >SELECT</option>
  <option value="A+">A+</option>
  <option value="O+">0+</option>
   <option value="B+">B+</option>
  <option value="AB+">AB+</option>
  <option value="A-">A-</option>
  <option value="B-">B-</option>
  <option value="O-">O-</option>
  <option value="AB-">AB-</option>
</select>
</div>







            
                                           <button type="submit" class="btnRegister"  
                                        name="submit"    value="Register"/>Submit</button>
                                    </form>
                         
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>










    
</body>
</html>