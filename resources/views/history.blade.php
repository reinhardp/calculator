<div class="panel panel-default">
    <div class="panel-heading">
            History
            <div style="width: fit-content; float: right;">
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
                <tr>
                    <td >
                        {{$item->index}}
                    </td>
                    <td >{{$item->calculation}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
        
</div>
 