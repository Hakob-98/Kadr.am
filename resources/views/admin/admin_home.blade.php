@extends('admin/admin_app')

@section('adminContent')
    <div class="userLinks">
        <div><a href="{{ url('/show-active-users') }}">Ակտիվ</a></div>
        <div><a href="{{ url('/show-warned-users') }}">Նախազգուշացված</a></div>
        <div><a href="{{ url('/show-blocked-users') }}">Արգելափակված</a></div>
        <div><a href="{{ url('/show-deleted-users') }}">Ջնջված</a></div>
        <div><a href="{{ url('/show-inactive-users') }}">Չակտիվացված</a></div>
    </div>

    <div id="importUsers">
        @yield('importUsers')
    </div>

    <style>
        .userLinks{
            background-color: grey;
            padding: 20px;
            display: flex;
            align-items: center;
            justify-content: space-evenly;
        }
        .userLinks>div>a{
            border: 1px solid black;
            padding: 10px 25px;
            background-color: #058187;
            color: white;
        }
        #importUsers{
            margin-top: 20px;
        }
        #importUsers table,
        #importUsers tr,
        #importUsers th,
        #importUsers td{
            border: 1px solid black;
        }
        .heading>h1{
            text-align: center;
            margin-bottom: 30px;
            font-weight: 900;
        }
        .showUsers{
            display: flex;
            justify-content: space-evenly;
            align-items: flex-start;
            padding: 20px;
        }
        h2{
            margin-bottom: 15px;
        }
        .usersBlock{
            border: 1px solid black;
            padding: 10px;
            /* position: relative; */
        }
        .usersBlock>div{
            border: 1px solid black;
            display: flex;
            align-items: center;
            padding: 5px;
            margin-bottom: 10px;
            transition: all 0.3s linear;
        }
        .userBox:hover{
            box-shadow: 0 0 10px #058187;
        }
        .usersBlock>div>div{
            margin: 0 5px;
        }
        .usersBlock button,
        .usersBlock a{
            border: 1px solid black;
            padding: 8px 10px;
            font-size: 14px;
            color: white;
            cursor: pointer;
        }
        .openUser{
            background-color: blue;
        }
        .warningRequest,
        .blockingRequest,
        .deleteRequest{
            display: none;
            position: fixed;
            top: 45%;
            left: 42%;
            background-color: grey;
            box-shadow: 0 5px 15px white;
            color: white;
            width: 250px;
            height: 100px;
            padding: 5px;
        }
        .requestHeading>h3{
            font-size: 16px;
            text-align: center;
        }
        .btnBox{
            text-align: center;
        }
        .btnBox>button{
            margin: 10px 15px;
            color: black;
        }
        .warned{
            background-color: orange;
        }
        .blocked{
            background-color: orangered;
        }
        .delete{
            background-color: red;
        }
    </style>
@endsection