                    <div class="row">
                        <form action="{{ url('/home') }}" method="POST" class="col-md-6 col-md-offset-3 text-center" >
                        {!! csrf_field() !!}
                            <input name="value" type="text" class="form-control col-md-5" placeholder="expression..." value="{{$expresion}}" style="margin-bottom: 10px;"/>
                            <input type="hidden" name="method" value="insert" />
                            <input class="btn btn-success" type="submit" value="Submit" style="margin-bottom: 10px;"/>
                        </form>
                    </div>
                   <div class="panel panel-default">
                        <p class="panel-heading">Result</p>

                        <p class="panel-body">
                            {{$value}}
                        </p>
                    </div>
