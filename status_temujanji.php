<?php

//status temu janji untuk view pelanggan

include('navigation_bar.php');
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <title>Status Temu Janji</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<!-- HEADER --> 

<div>
        <div class="d-flex flex-row">
            <div class="col-md-3">
                <div class="card card1 p-3">
                    <div class=" image d-flex flex-row align-items-center mt-3"> <img src="https://i.imgur.com/R4afbIg.png" height="50" width="50" /> <span>Clover</span> </div>
                    <hr class="hline">
                    <div class="d-flex flex-column align-items-center"> <button class="btn"><i class="fa fa-dashboard"></i><span>Dashboard</span></button> <button class="btn mt-3"><i class="fa fa-users"></i><span>Users</span></button> <button class="btn mt-3"><i class="fa fa-inbox"></i><span>Inbox</span></button> <span class="other mt-4">Other Information</span> <button class="btn mt-3"><i class="fa fa-book"></i><span>Knowlwdge</span></button> <button class="btn mt-3"><i class="fa fa-question-circle"></i><span>Dashboard</span></button> </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="card card2 p-3">
                    <div class="hello d-flex justify-content-end align-items-center mt-3"> <span>Hi, Pelanggan</span> </div>
                    <div class="d-flex justify-content-center mt-5 gap-2 p-3">
                        <h1 style="text-align: center"> STATUS TEMU JANJI</h1>
                       
                        <div class="container my-5">
                            <form action="controller" method="get" class="d-md-flex d-sm-block justify-content-between"> <input type="hidden" name="command" value="select-orders">
                                <h1 class="h5 align-self-center col-3">Search Order</h1>
                                <div class="btn-group align-self-center col-12 col-sm-12 col-md-8 col-lg-6"> <select name="searchType" class="btn btn-outline-dark col-3 col-sm-3">
                                        <option value="orderId">Order ID</option>
                                        <option value="created">Created</option>
                                        <option value="customer">Customer</option>
                                        <option value="status">Status</option>
                                    </select> <input type="search" name="searchBy" class="col-6 col-sm-6"> <input type="submit" value="Search" class="btn btn-outline-dark col-3 col-sm-3"> </div>
                            </form>
                            <div class="d-md-flex d-none justify-content-md-between justify-content-sm-center align-content-center border-bottom border-2 my-2 bg-dark text-light p-3 rounded-3">
                                <div class="col-2 text-sm-center text-md-start align-self-center">
                                    <h1 class="h5 fw-bold">Order ID</h1>
                                </div>
                                <div class="col-2 align-self-center">
                                    <h1 class="h5 fw-bold">Created</h1>
                                </div>
                                <div class="col-3 align-self-center">
                                    <h1 class="h5 fw-bold">Customer</h1>
                                </div>
                                <div class="col-2 align-self-center">
                                    <h1 class="h5 fw-bold">Show details</h1>
                                </div>
                                <div class="col-2 align-self-center">
                                    <h1 class="h5 fw-bold">Status</h1>
                                </div>
                            </div>
                            <div class="d-md-flex d-sm-block justify-content-md-between justify-content-sm-center text-center border-bottom border-2 my-2 bg-light p-2 rounded-3">
                                <div class="col-md-2 text-sm-center text-md-start align-self-center my-2">
                                    <h1 class="h6">2F456DA</h1>
                                </div>
                                <div class="col-md-2 text-sm-center text-md-start align-self-center my-2">
                                    <h1 class="h6">04/12/2021 3:15:24:299</h1>
                                </div>
                                <div class="col-md-3 text-sm-center text-md-start align-self-center my-2">
                                    <h1 class="h6">Robert Tailor Hamonovych</h1>
                                </div>
                                <div class="col-md-2 text-sm-center text-md-start align-self-center my-2"> <a class="btn btn-outline-dark w-100" href="#">Details</a> </div>
                                <div class="col-md-2 text-sm-center text-md-start align-self-center my-2">
                                    <form method="get" action="controller" class="d-flex btn-group"> <input type="hidden" name="command" value="refresh-order-status"> <select name="status" class="btn btn-outline-dark">
                                            <option value="REGISTERED" class="form-select-button">REGISTERED</option>
                                            <option value="PAID" class="form-select-button">PAID</option>
                                            <option value="CANCELED" class="form-select-button">CANCELED</option>
                                        </select> <input type="submit" class="btn btn-outline-dark" value="OK"> </form>
                                </div>
                            </div>
                            <div class="d-md-flex d-sm-block justify-content-md-between justify-content-sm-center text-center border-bottom border-2 my-2 bg-light p-2 rounded-3">
                                <div class="col-md-2 text-sm-center text-md-start align-self-center my-2">
                                    <h1 class="h6">D2903WE</h1>
                                </div>
                                <div class="col-md-2 text-sm-center text-md-start align-self-center my-2">
                                    <h1 class="h6">03/09/2021 3:15:24:299</h1>
                                </div>
                                <div class="col-md-3 text-sm-center text-md-start align-self-center my-2">
                                    <h1 class="h6">Jason Tailor Hamonovych</h1>
                                </div>
                                <div class="col-md-2 text-sm-center text-md-start align-self-center my-2"> <a class="btn btn-outline-dark w-100" href="#">Details</a> </div>
                                <div class="col-md-2 text-sm-center text-md-start align-self-center my-2">
                                    <form method="get" action="controller" class="d-flex btn-group"> <input type="hidden" name="command" value="refresh-order-status"> <select name="status" class="btn btn-outline-dark">
                                            <option value="REGISTERED" class="form-select-button">REGISTERED</option>
                                            <option value="PAID" class="form-select-button">PAID</option>
                                            <option value="CANCELED" class="form-select-button">CANCELED</option>
                                        </select> <input type="submit" class="btn btn-outline-dark" value="OK"> </form>
                                </div>
                            </div>
                            <div class="d-md-flex d-sm-block justify-content-md-between justify-content-sm-center text-center border-bottom border-2 my-2 bg-light p-2 rounded-3">
                                <div class="col-md-2 text-sm-center text-md-start align-self-center my-2">
                                    <h1 class="h6">5463783D</h1>
                                </div>
                                <div class="col-md-2 text-sm-center text-md-start align-self-center my-2">
                                    <h1 class="h6">19/10/2021 3:34:24:299</h1>
                                </div>
                                <div class="col-md-3 text-sm-center text-md-start align-self-center my-2">
                                    <h1 class="h6">Mike Orley Hemington</h1>
                                </div>
                                <div class="col-md-2 text-sm-center text-md-start align-self-center my-2"> <a class="btn btn-outline-dark w-100" href="#">Details</a> </div>
                                <div class="col-md-2 text-sm-center text-md-start align-self-center my-2">
                                    <form method="get" action="controller" class="d-flex btn-group"> <input type="hidden" name="command" value="refresh-order-status"> <select name="status" class="btn btn-outline-dark">
                                            <option value="REGISTERED" class="form-select-button">REGISTERED</option>
                                            <option value="PAID" class="form-select-button">PAID</option>
                                            <option value="CANCELED" class="form-select-button">CANCELED</option>
                                        </select> <input type="submit" class="btn btn-outline-dark" value="OK"> </form>
                                </div>
                            </div>
                            <div class="d-md-flex d-sm-block justify-content-md-between justify-content-sm-center text-center border-bottom border-2 my-2 bg-light p-2 rounded-3">
                                <div class="col-md-2 text-sm-center text-md-start align-self-center my-2">
                                    <h1 class="h6">324516AD</h1>
                                </div>
                                <div class="col-md-2 text-sm-center text-md-start align-self-center my-2">
                                    <h1 class="h6">03/02/2021 22:45:44:999</h1>
                                </div>
                                <div class="col-md-3 text-sm-center text-md-start align-self-center my-2">
                                    <h1 class="h6">Jessy Koper Fauer</h1>
                                </div>
                                <div class="col-md-2 text-sm-center text-md-start align-self-center my-2"> <a class="btn btn-outline-dark w-100" href="#">Details</a> </div>
                                <div class="col-md-2 text-sm-center text-md-start align-self-center my-2">
                                    <form method="get" action="controller" class="d-flex btn-group"> <input type="hidden" name="command" value="refresh-order-status"> <select name="status" class="btn btn-outline-dark">
                                            <option value="REGISTERED" class="form-select-button">REGISTERED</option>
                                            <option value="PAID" class="form-select-button">PAID</option>
                                            <option value="CANCELED" class="form-select-button">CANCELED</option>
                                        </select> <input type="submit" class="btn btn-outline-dark" value="OK"> </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>

<style>

    /* css styling for dashboard interface */
    * {
    margin: 0;
    padding: 0
    }

    body {
        background-color: #fff
    }

    .card1 {
        height: 100vh;
        width: 100%;
        background-color: #272162;
        border: none
    }

    .card2 {
        height: 100vh;
        width: 100%;
        background-color: #f6f5fa;
        border: none
    }

    .image span {
        color: #fff;
        font-size: 28px
    }

    .hline {
        color: #a2a5d8
    }

    .btn {
        height: 40px;
        width: 100%;
        border: none;
        position: relative;
        border-radius: 5px
    }

    .btn i {
        position: absolute;
        left: 10px;
        color: #fff;
        font-weight: 500;
        font-size: 18px;
        top: 10px
    }

    .btn span {
        position: absolute;
        right: 8px;
        color: #fff;
        font-weight: 400;
        font-size: 16px;
        top: 10px
    }

    .btn:hover {
        background-color: #3ddcd1
    }

    .other {
        color: #575c93
    }

    .hello span {
        font-size: 25px;
        font-weight: bold;
        color: #3c3f61;
        right: 40px
    }

    .shape {
        background-color: #fff
    }

    .cardchild {
        height: 100px;
        width: 200px;
        border: none;
        position: relative;
        border-radius: 10px
    }

    .type {
        font-weight: 500
    }

    .number {
        font-size: 25px;
        color: #4f5366
    }

    .cardchild .logo1 {
        position: absolute;
        top: 15px;
        right: 20px
    }

    .cardchild .percentage {
        position: absolute;
        bottom: 10px;
        right: 15px;
        color: #48ddd8;
        font-weight: 500
    }

    .cardchild .logo2 {
        position: absolute;
        top: 15px;
        right: 20px
    }

    .cardchild .percentage2 {
        position: absolute;
        bottom: 10px;
        right: 15px;
        color: #bb7484;
        font-weight: 500
    }

    .cardchild .logo3 {
        position: absolute;
        top: 15px;
        color: #bb7484;
        right: 20px
    }

    .cardchild .percentage3 {
        position: absolute;
        bottom: 10px;
        right: 15px;
        color: #48ddd8;
        font-weight: 500
    }

    .cardchild .logo4 {
        position: absolute;
        top: 15px;
        right: 20px
    }

    .cardchild .percentage4 {
        position: absolute;
        bottom: 10px;
        right: 15px;
        color: #bb7484;
        font-weight: 500
    }

    .cardchildchild {
        width: 335px;
        position: relative;
        border: none;
        border-radius: 15px;
        cursor: pointer
    }

    .cardchildchild .profile1 {
        position: absolute;
        border-radius: 50%;
        top: -45px;
        display: flex;
        align-items: center;
        justify-content: center;
        right: 120px
    }

    .name {
        font-size: 18px;
        font-weight: 500
    }

    .braceletid {
        font-size: 13px;
        color: #bab9ba;
        font-family: 'Source Sans Pro', sans-serif
    }

    .btn1 {
        height: 35px;
        width: 160px;
        border: none;
        background-color: #f8c01a;
        cursor: pointer;
        color: #fff;
        font-weight: 500;
        font-size: 16px;
        border-radius: 20px
    }

    .btn1:hover {
        background-color: #c72b2b
    }

    .icons {
        font-size: 20px;
        font-weight: 500
    }

    .dummytext {
        font-size: 14px;
        font-weight: normal;
        color: #b0aeb1
    }

    .btn2 {
        height: 35px;
        width: 160px;
        border: none;
        background-color: #c72b2b;
        cursor: pointer;
        color: #fff;
        font-weight: 500;
        font-size: 16px;
        border-radius: 20px
    }

    .btn2:hover {
        background-color: #f8c01a
    }

</style>

<script>
    //insert JS script
</script>
