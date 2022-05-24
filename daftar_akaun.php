<!DOCTYPE html>
<html lang="en">
<head>
  <title>Pendaftaran</title>
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

    <div class="container mt-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-7">
                <div class="card px-5 py-4" id="form1">
                    <div class="form-data" v-if="!submitted">
                        <div class="text-center mb-4">
                            <h2>Pendaftaran</h2>
                            <h5>Daftar akaun untuk pelanggan baru</h5>
                        </div>
                        </div>
                        <div class="forms-inputs mb-4"> <span>Nama pengguna</span> <input type="text" v-model="username" v-bind:class="{'form-control':true, 'is-invalid' : !validUsername(username) && usernameBlured}" v-on:blur="usernameBlured = true">
                            <div class="invalid-feedback">A valid username is required!</div>
                        </div>
                        <div class="forms-inputs mb-4"> <span>No telefon</span> <input type="text" v-model="phone" v-bind:class="{'form-control':true, 'is-invalid' : !validPhone(phone) && phoneBlured}" v-on:blur="phoneBlured = true">
                            <div class="invalid-feedback">A valid phone is required!</div>
                        </div>
                        <div class="forms-inputs mb-4"> <span>Kata laluan</span> <input type="password" v-model="password" v-bind:class="{'form-control':true, 'is-invalid' : !validPassword(password) && passwordBlured}" v-on:blur="passwordBlured = true">
                            <div class="invalid-feedback">Password must be 8 character!</div>
                        </div>
                        <div class="mb-3"> <button v-on:click.stop.prevent="submit" class="btn btn-dark w-100">Daftar</button> </div>
                    </div>
                    <div class="success-data" v-else>
                        <div class="text-center d-flex flex-column"> <i class='bx bxs-badge-check'></i> <span class="text-center fs-3">Berjaya daftar akaun.</span> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>

<style>
    body {
        background: #FF5733
    }

    .card {
        border: none;
        height: 100%
    }

    .forms-inputs {
        position: relative
    }

    .forms-inputs span {
        position: absolute;
        top: -18px;
        left: 10px;
        background-color: #fff;
        padding: 5px 10px;
        font-size: 15px
    }

    .forms-inputs input {
        height: 50px;
        width: 650px;
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
    passwordBlured:false,
    username:"",
    usernameBlured:false,
    phone:"",
    phoneBlured:false
    }
    },

    methods:{

    validate : function(){
    this.emailBlured = true;
    this.passwordBlured = true;
    this.usernameBlured = true;
    this.phoneBlured = true;
    if( this.validEmail(this.email) && this.validPassword(this.password) && this.validPhone(this.phone) && this.validUsername(this.username)){
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

    validUsername : function(username) {

    if (!/\s/.test(username)) {
    return true;
    }
    },

    validPhone : function(phone) {
    if (phone.length > 9 && phone.length < 12 ) { return true; } }, submit : function(){ this.validate(); if(this.valid){ this.submitted=true; } } } });

</script>