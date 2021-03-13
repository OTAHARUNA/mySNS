@extends('layouts.login')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <p>出席画面です</p>
                </div>
                <form action="/">
                    @csrf
                    <div class="card-body">
                        <div class="">
                            <lavel>名前</lavel>
                            <input type="text">
                        </div>
                        <div class="">
                            <lavel>日付</lavel>
                            <p>{{$day}}</p>
                        </div>
                        <div class="">
                            <lavel for="sel">時限</lavel>
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
                            <button class="" type="submit">送信</button>
                        </div>
                    </div>
                    <div class="" id="modal">
                        <p>出席受付ました！</p>
                        <p>本日も授業頑張りましょう！</p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
