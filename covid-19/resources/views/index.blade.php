<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Covid 19</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="{{ url('fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #ddd;
            color: white;
            box-sizing: border-box;
        }
        
        h1,
        h2.h2 {
            text-align: center;
            margin-top: 15px;
            color: #FFFFFF;
            /* background: #FFFFFF; */
            text-shadow: 2px 2px 0 #4074b5, 2px -2px 0 #4074b5, -2px 2px 0 #4074b5, -2px -2px 0 #4074b5, 2px 0px 0 #4074b5, 0px 2px 0 #4074b5, -2px 0px 0 #4074b5, 0px -2px 0 #4074b5;
            /* font-size: large; */
            font-size: 40px;
        }
        
        h3 {
            /* {{-- margin-top: 30px; --}} */
            color: #FFFFFF;
            /* background: #FFFFFF; */
            /* text-shadow: 2px 2px 0 hsl(251, 100%, 20%), 2px -2px 0 hsl(251, 100%, 20%), -2px 2px 0 hsl(251, 100%, 20%), -2px -2px 0 hsl(251, 100%, 20%), 2px 0px 0 hsl(251, 100%, 20%), 0px 2px 0 hsl(251, 100%, 20%), -2px 0px 0 hsl(251, 100%, 20%), 0px -2px 0 hsl(251, 100%, 20%), 2px 2px 2px rgba(63, 31, 206, 0), 2px 2px 0px #DB0F0C; */
            font-size: 20px;
        }
        
        .indonesia .card .card-body h2 {
            text-align: left;
            font-size: 20px;
        }
        
        .indonesia .card .card-body .card-title span {
            color: white;
            font-size: 20px;
            /* text-shadow: 2px 2px 0 hsl(175, 91%, 48%), 2px -2px 0 hsl(175, 91%, 48%), -2px 2px 0 hsl(175, 91%, 48%), -2px -2px 0 hsl(175, 91%, 48%), 2px 0px 0 hsl(175, 91%, 48%), 0px 2px 0 hsl(175, 91%, 48%), -2px 0px 0 hsl(175, 91%, 48%), 0px -2px 0 hsl(175, 91%, 48%), 2px 2px 2px rgba(63, 31, 206, 0), 2px 2px 0px #DB0F0C; */
            font-size: 20px;
        }
        
        .container {
            margin-top: 50px;
        }
        
        .indonesia {
            display: flex;
            /* {{-- justify-content: center; --}} */
            flex-wrap: wrap;
        }
        
        .card {
            float: left;
            /* height: 200px; */
            width: 100%;
            margin-top: 30px;
            border-radius: 20px;
            background: rgb(157, 0, 0);
            background: linear-gradient(90deg, rgba(157, 0, 0, 1) 0%, rgba(198, 0, 0, 1) 48%, rgba(255, 0, 0, 1) 100%);
            box-shadow: 0px 13px 68px -9px rgba(0, 0, 0, 0.68);
            /* overflow: hidden; */
            font-family: 'Source Sans Pro', sans-serif;
        }
        
        .card.sembuh {
            background: rgb(0, 14, 157);
            background: linear-gradient(90deg, rgba(0, 14, 157, 1) 13%, rgba(0, 7, 198, 1) 69%, rgba(0, 5, 255, 1) 95%);
        }
        
        .card.dead {
            background: rgb(148, 2, 166);
            background: linear-gradient(90deg, rgba(148, 2, 166, 1) 13%, rgba(181, 0, 212, 1) 46%, rgba(192, 0, 255, 1) 95%);
        }
        
        .card .card-body {
            display: flex;
            align-content: space-between;
        }
        
        .card .card-body .card-title h2.kasus {
            font-size: 25px;
        }
        
        .card .card-body .card-title span.total {
            font-size: 40px;
        }
        
        @media (min-width: 768px) {
            .indonesia {
                display: flex;
                justify-content: center;
            }
            .card {
                width: 350px;
                height: 150px;
                border-radius: 20px;
                margin-top: 20px;
                margin-bottom: 30px;
                margin-right: 20px;
            }
        }
    </style>
</head>

<body>
    <h1>Data Persebaran Covid-19</h1>
    <h2 class="h2">Berdasarkan Provinsi</h2>
    <div class="indonesia col-12">

        @foreach ($global as $items)
        <div class="card">
            <!-- <div class="row"> -->
            <div class="card-body">
                <div class=" card-title" style="flex-grow: 3;">
                    <h2 class="kasus">Total Kasus <br> Positif</h2>
                    <span class="total">{{$items['positif']}}</span>
                </div>
                <div class="icon" style="flex-grow: 1;">
                    <!-- <span><i class="fas fa-sad-cry fa-7x " style="border: 3px solid ;"></i></span> -->
                    <img src="https://img.icons8.com/cute-clipart/100/000000/sad.png" />
                </div>
            </div>
            <!-- </div> -->
        </div>
        <div class="card sembuh">
            <!-- <div class="row"> -->
            <div class="card-body">
                <div class=" card-title" style="flex-grow: 3;">
                    <h2 class="kasus">Total Orang <br> Sembuh</h2>
                    <span class="total">{{$items['sembuh']}}</span>
                </div>
                <div class="icon" style="flex-grow: 1;">
                    <!-- <span><i class="fas fa-sad-cry fa-7x " style="border: 3px solid ;"></i></span> -->
                    <img src="https://img.icons8.com/cute-clipart/100/000000/happy.png" />
                </div>
            </div>
            <!-- </div> -->
        </div>
        <div class="card dead">
            <!-- <div class="row"> -->
            <div class="card-body">
                <div class=" card-title" style="flex-grow: 3;">
                    <h2 class="kasus">Total Orang <br> Meninggal</h2>
                    <span class="total">{{$items['meninggal']}}</span>
                </div>
                <div class="icon" style="flex-grow: 1;">
                    <!-- <span><i class="fas fa-sad-cry fa-7x " style="border: 3px solid ;"></i></span> -->
                    <img src="https://img.icons8.com/cute-clipart/100/000000/crying.png" />
                </div>
            </div>
            <!-- </div> -->
        </div>
        @endforeach
    </div>
    </div>
    <div class="container ">
        <div class="row ">



            <div class="table-responsive ">
                <table class="table table-bordered table-striped table-dark ">
                    <thead class="thead-dark ">
                        <tr>
                            <th scope="col ">No</th>
                            <th scope="col ">Provinsi</th>
                            <th scope="col ">Positif</th>
                            <th scope="col ">Sembuh</th>
                            <th scope="col ">Meninggal</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $No = 0; @endphp @foreach ($datas as $item) @php $No++ @endphp
                        <tr>
                            <th scope="row ">{{$No}}</th>
                            <td>
                                {{ $item['attributes']['Provinsi'] }}
                            </td>
                            <td>
                                {{ $item['attributes']['Kasus_Posi'] }}
                            </td>
                            <td>
                                {{ $item['attributes']['Kasus_Semb'] }}
                            </td>
                            <td>
                                {{ $item['attributes']['Kasus_Meni'] }}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js " integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN " crossorigin="anonymous "></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js " integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q " crossorigin="anonymous "></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js " integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl " crossorigin="anonymous "></script>
</body>

</html>