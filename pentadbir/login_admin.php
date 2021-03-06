<?php
    /*
    define('MYSQL_BOTH', MYSQL_BOTH);
    define('MYSQL_NUM', MYSQL_NUM);
    define('MYSQL_ASSOC', MYSQL_ASSOC);
    include("config.php");
    session_start();

    if($_SERVER["REQUEST_METHOD"] == "POST") {

        //username & password sent from the form

    }
    */
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Log Masuk Pentadbir</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>


<!-- TAJUK UTAMA --> 
<div class="container-fluid p-5 bg-primary text-white text-center">
  <h1>SISTEM TEMU JANJI VETERINAR</h1>
  <p>KLINIK HAIWAN ALBY, MUAR, JOHOR</p>
</div>

<a href="/index.html"><h3 style="text-align: center">Home</h3></a>

<div class="container mt-5">
    <div class="row d-flex justify-content-center">
        <div class="col-md-6">
            <div class="card px-5 py-5" id="form1">
                <div class="form-data" v-if="!submitted">
                    <h2 style="text-align: center">Log Masuk Pentadbir</h2>
                    <div class="forms-inputs mb-4"> <span>Nama pengguna</span> <input autocomplete="off" type="text" v-model="email" v-bind:class="{'form-control':true, 'is-invalid' : !validEmail(email) && emailBlured}" v-on:blur="emailBlured = true">
                        <div class="invalid-feedback">Masukkan nama pengguna yang betul.</div>
                    </div>
                    <div class="forms-inputs mb-4"> <span>Kata laluan</span> <input autocomplete="off" type="password" v-model="password" v-bind:class="{'form-control':true, 'is-invalid' : !validPassword(password) && passwordBlured}" v-on:blur="passwordBlured = true">
                        <div class="invalid-feedback">Kata laluan sekurang-kurangnya 8 aksara.</div>
                    </div>
                    <a href="dashboard_pentadbir.php"><div class="mb-3"> <button v-on:click.stop.prevent="submit" class="btn btn-dark w-100">Login</button> </a>
                    </div>
                </div>
                <div class="success-data" v-else>
                    <div class="text-center d-flex flex-column"> <i class='bx bxs-badge-check'></i> <span class="text-center fs-1">Berjaya log masuk</span> </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>

<!--CSS Styling untuk login form -->
<style>
    body {
    background: #FFC300
    }

    .card {
        border: none;
        height: 500px
    }

    .forms-inputs {
        position: relative
    }

    .forms-inputs span {
        position: center;
        top: -18px;
        left: 10px;
        background-color: #fff;
        padding: 5px 10px;
        font-size: 15px
    }

    .forms-inputs input {
        height: 50px;
        width: 540px;
        border: 2px solid #eee
    }

    .forms-inputs input:focus {
        box-shadow: none;
        outline: none;
        border: 2px solid #000
    }

    .btn {
        height: 50px
    }

    .success-data {
        display: flex;
        flex-direction: column
    }

    .bxs-badge-check {
        font-size: 90px
    }

    .col text-right {
        color: white;
    }
</style>

<script>
    var app = new Vue({
    el: '#form1',
    data: function () {
    return {
    email : "",
    emailBlured : false,
    valid : false,
    submitted : false,
    password:"",
    passwordBlured:false
    }
    },

    methods:{

    validate : function(){
    this.emailBlured = true;
    this.passwordBlured = true;
    if( this.validEmail(this.email) && this.validPassword(this.password)){
    this.valid = true;
    }
    },

    validEmail : function(email) {

    var re = /(.+)@(.+){2,}\.(.+){2,}/;
    if(re.test(email.toLowerCase())){
    return true;
    }

    },

    validPassword : function(password) {
    if (password.length > 7) {
    return true;
    }
    },

    submit : function(){
    this.validate();
    if(this.valid){
    this.submitted = true;
    }
    }
    }
    });
</script>