@php($size = sizeof($peoples_arr[0])+sizeof($peoples_arr[1])+sizeof($peoples_arr[2])+sizeof($peoples_arr[3]))
@if ($size != 0)
    <div class="row">
        <div class="col-md-8 col-md-offset-2 col-centered">
            @if( $size == 1)
                <h3 >{{"one Record founds"}}</h3>
            @else
                <h3 >{{$size." Records are founds"}}</h3>
            @endif
        </div>
    </div>
@for($array_counter = 0; $array_counter <4;$array_counter++)
        @continue($peoples_arr[$array_counter]->count() == 0)

    <div class="row">
        <div class="col-md-10 col-md-offset-1 col-centered">
            <h3 id="db-title" class="col-centered" style="color:white">{{"result from Database ".($array_counter+1)}}</h3>
        </div>
    </div>
    <br>
    @php($counter = 1)
@foreach($peoples_arr[$array_counter] as $person)
    <div class="row">
        <div class="col-md-10 col-md-offset-1 col-centered">
            <h3 id="record-title" class="col-centered" style="color:white">{{"Record ".$counter++}}</h3>
        </div>
    </div>
<br>
    <div class="row">
    <div class="col-md-8 col-md-offset-2 col-centered">
        <div class="form-group">
            name:<input readonly class="form-control" placeholder="" value="{{$person->name}}" />
        </div>

        <div class="form-group">
            phone:<input readonly class="form-control" pattern="[0-9]{10}" placeholder=""  />
        </div>

        <div class="form-group">
           e-mail:<input readonly class="form-control" placeholder="" value="{{$person->email}}" />
        </div>

        <div class="form-group">
            username:<input readonly class="form-control" value="{{$person->username}}" />
        </div>

        <div class="form-group">
            national ID:<input  readonly class="form-control"  value="{{$person->id}}" />
        </div>
    </div>
</div>
@endforeach
@endfor
@else
    <div class="row">
        <div class="col-md-8 col-md-offset-2 col-centered">
            <h3 style="color:#dc3545">Result not found</h3>
        </div>
    </div>
@endif

