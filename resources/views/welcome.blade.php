@extends('layout')
@section('content')
      @foreach($years as $y)
      <div class="year">
          <h1 id="{{$y->year}}">
            {{$y->year}}
          </h1>
          <div class="language-header">
            Languages Known:
          </div>
          @foreach($y->languages as $l)
            <span class="bolder">{!! $l->name !!}</span>
          @endforeach
          <div class="row">
          @foreach($y->pois as $p)
            <div class="center col-md-{{12/count($y->pois)}}">
              <h3>{!! $p->title !!}</h3>
              <div>
                <p>
                  {!! $p->addition !!}
                </p>
              </div>
              @foreach($p->descriptions as $d)
                <div>
                  <p>
                    {!! $d->text !!}
                  </p>
                </div>
              @endforeach
            </div>
          @endforeach
          </div>
        </div>
      @endforeach

@endsection
