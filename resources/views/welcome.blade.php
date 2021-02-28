<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

        <title>Laravel calculator</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>
        <div class="flex-center position-ref full-height">

            <div class="content">

                <div class="row">
                    <h1 class="col-md-8 col-md-offset-2 text-center">Laravel calculator</h1>
                </div>

                <div class="container">
                    <div class="row">
                        <form action="{{ url('/home') }}" method="POST" class="col-md-6 col-md-offset-3 text-center" >
                        {!! csrf_field() !!}
                            <input name="value" type="text" class="form-control col-md-9" placeholder="expression..." value="{{$expresion}}"/>
                            <input type="hidden" name="method" value="insert" />
                            <input class="btn btn-success" type="submit" value="Submit"/>
                        </form>
                    </div>
                   <div class="panel panel-default">
                        <p class="panel-heading">Result</p>

                        <p class="panel-body">
                            {{$value}}
                        </p>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">History
                                <div align="right">
                                <form action="{{ url('/home') }}" method="POST">
                                    {!! csrf_field() !!}
                                    <input type="hidden" name="method" value="clear" />
                                    <input class="btn btn-success" type="submit" value="Clear"/>
                                </form>
                                </div>
                            
                        </div>
        
                            <div class="panel-body" >
                            <table class="table table-striped table-responsive">
                            <tbody >
                                @foreach($history as $item)
                                <tr key="tr{item.id}">
                                    <td ">
                                        {{$item->index}}
                                    </td>
                                    <td >{{$item->calculation}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                            </table>
                            </div>
                            
                    </div>
           
                </div>
                
            </div>
            </div>
        </div>
    </body>
</html>
