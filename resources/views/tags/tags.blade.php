@extends('layouts.app')

@section('content')
        <form action="{{route('save-tag')}}" method="post">
            @csrf
            <div class="form-group row mt-2" >
                <label for="tag_title" class="col-md-4 col-form-label">Tag Title</label>
                <div class="col-md-8">
                    <input type="text" class="form-control" id="tag_title" placeholder="Tag Title"
                           name="tag_title" required>
                </div>

            </div>


            <div class="form-group row">
                <label for="" class="col-md-4 col-form-label"></label>
                <div class="col-md-8">
                    <button type="submit" class="btn btn-primary">Yeni Etiket Ekle</button>
                </div>

            </div>
        </form>

    </div>
    <div class="row">
        @foreach($tags as $tag)
            <div class="col-md-3 mt-2 mb-2">
                <div class="card">
                    <div class="card-body">
                        <span>{{$tag->title}}</span>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
@endsection
