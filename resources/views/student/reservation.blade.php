@extends('layouts.login')

@section('content')
<div>
  <div>
    <div>
      <p>予約画面</p>
    </div>
    <div>
      <div>
        <form action="">
            <div class="">
              <p>名前</p>
              <p>{{ Auth::user()->username}}</p>
            </div>
            <div class="">
              <div class="">
                <lavel>日付</lavel>
              </div>
              <div class="card">
                  <div class="card-header">{{ $calendar->getTitle() }}</div>
                      <div class="card-body">
                         {!! $calendar->render() !!}
                      </div>
                  </div>
              </div>
            <div class="">
              <lavel>時限</lavel>
              <div class="">
                  <select class="form-control" id="sel" name="sel[]" size="1">
                     <option value="1" selected>1限</option>
                     <option value="2">2限</option>
                     <option value="3">3限</option>
                     <option value="4">4限</option>
                  </select>
              </div>
            </div>
            <div class="">
              <button class="">送信</button>
            </div>

        </form>



      </div>

    </div>
  </div>
  <div>

  </div>


</div>


@endsection
