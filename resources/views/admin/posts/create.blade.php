@extends('layouts.app')

@section('content')
    <h1>
        CREATE POST
    </h1>
    
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-10">
            <form action="{{ route('admin.posts.update', $post) }}" method="POST">
            @csrf

            {{-- Forzo il metod da post a put --}}
            @method('PUT')

                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control" id="title" placeholder="title" value="{{$post->title}}">
                    
                </div>
                
                <div class="form-group">
                    <label for="description">subject</label>
                    <textarea type="text" class="form-control" id="subject" name="subject" placeholder="subject">{{$post->subject}}</textarea>
                    
                </div>

                <div class="form-group">
                    <label for="price">start_date</label>
                    <input type="text" class="form-control" id="start_date" name="start_date" placeholder="start_date"  value="{{$post->start_date}}">
                    
                </div>

                <div class="form-group">
                    <label for="img">end_date</label>
                    <input type="text" class="form-control" id="end_date" name="end_date" placeholder="img end_date"  value="{{$post->end_date}}">
                    
                </div>

                <div class="form-group">
                    <label for="price">start_date</label>
                    <input type="text" class="form-control" id="number_of_posts" name="number_of_posts" placeholder="number_of_posts"  value="{{$post->number_of_posts}}">
                    
                </div>

                <div class="form-group">
                    <label for="img">end_date</label>
                    <input type="text" class="form-control" id="collaborators" name="collaborators" placeholder="collaborators"  value="{{$post->collaborators}}">
                    
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-danger">Delete</button>

            </form>        
        </div>
    </div>
</div>
@endsection