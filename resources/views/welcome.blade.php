<!DOCTYPE html>
<html>
    <head>
        <title>Welcome to PrintFessional</title>

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
            <div class="content row">
                <div class="title ">Welcome to PrintFessional</div>
                 <div class="title">Serving Printing Services Soon</div>
            </div>
            <div class="row" style="margin-top:-9em">
                <i class="col-sm-8 pull-right fa fa-caret-down" style="color:#000;font-size:20em;"></i>
            </div>

            <div class="col-sm-12" style="padding-bottom:5em;">
                <form action="{{route('color.store')}}" enctype="multipart/form-data" method="post" class="col-sm-offset-3 col-sm-6 form-inline well">
                    <input type="hidden" value="{{csrf_token()}}" name="_token">
                        <label class="pull-left">Upload Photo</label>
                    <span class="input-group col-sm-12">
                        <input type="file" name="photo">
                    </span>
                    <span class="input-group col-sm-12">
                        <label class="pull-left">Image URL</label>
                        <input name="url" placeholder="http://" class="form-control pull-right">
                    </span>
                    <span class="input-group col-sm-12">
                        <label class="pull-left">Max Colors (Minimum 3)</label>
                        <input name="count" placeholder="Max Colors" class="form-control pull-right">
                    </span>
                    <button class="col-sm-offset-3 col-sm-6 btn btn-success pull-right" type="submit">Show me Colors!</button>
                </form>
            </div>

            <div class="col-sm-12">
                <div class="col-xs-5 featureicon" style="margin-top:-1em;margin-left:5%;">
                    <label style="font-size:.5em">Users</label><br>
                    <i class="fa fa-users" style="font-size:2em"></i>
                </div>
                <div class="col-xs-5 featureicon" style="margin-top:-1em;margin-left:5%;">
                    <label style="font-size:.5em">Communication</label><br>
                    <i class="fa fa-comments" style="font-size:2em"></i>
                </div>
            </div>

            <div class="col-sm-12" style="padding-top:5em;padding-bottom:5em;">
                <div class="col-xs-5 featureicon" style="margin-top:-1em;margin-left:5%;">
                    <label style="font-size:.5em">Orders</label><br>
                    <i class="fa fa-gift" style="font-size:2em"></i>
                </div>
                <div class="col-xs-5 featureicon" style="margin-top:-1em;margin-left:5%;">
                    <label style="font-size:.5em">Shipping</label><br>
                    <i class="fa fa-rocket" style="font-size:2em"></i>
                </div>
            </div>

    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</html>
