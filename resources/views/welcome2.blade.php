<!DOCTYPE html>
<html>
    <head>
        <title>Colorerer by PrintFessional</title>

        <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
        <style>
            html, body {
                height: 100%;
                background-color: #538cc6;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Source Sans Pro', sans-serif;
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
                border:3em #000 solid;
                background-color: #fff;
                border-radius: 50px;
                padding:3%;
            }
            .featureicon{
                font-size: 3em;
                height:5em;
                background-color: #fff;
                border:.3em #000 solid;
                border-radius: 50px;
            }
            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="col-sm-12">
                <form action="{{route('color.store')}}" method="post" class="col-sm-offset-3 col-sm-6 form-inline well">
                    <input type="hidden" value="{{csrf_token()}}" name="_token">
                    <span class="input-group col-sm-12">
                        <label class="pull-right">Image URL</label>
                        <input name="url" placeholder="http://" value="{{$request->input('url')}}" class="form-control pull-right">
                    </span>
                    <span class="input-group col-sm-12">
                        <label class="pull-right">Max Colors (Minimum 3)</label>
                        <input name="count" placeholder="Max Colors" class="form-control pull-right" value="{{$request->input('count')}}">
                    </span>
                    <button class="col-sm-offset-3 col-sm-6 btn btn-success pull-right" type="submit">Show me new Colors!</button>
                </form>
            </div>
            <div class="col-sm-offset-3 col-sm-6">
                <center>
                    @foreach($extraction as $ex)
                        <span class="col-sm-1" style="padding:10px;background-color:{{$ex}}">{{$ex}}</span>
                    @endforeach
                    <br>
                    <img class="img-responsive" src="http://printfessional.com/images/bar.jpg" style="margin-top:25px"></img>
                </center>
            </div>
        </div>
    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</html>
