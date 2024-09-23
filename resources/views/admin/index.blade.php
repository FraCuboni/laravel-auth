@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="fs-4 text-secondary my-4">
        {{ __('Dashboard') }}
    </h2>
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header">ADMINPAGE</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <table class="table">
                        <thead class="thead-light">
                          <tr>
                            <th scope="col">id</th>
                            <th scope="col">title</th>
                            <th scope="col">text</th>
                            <th scope="col">start date</th>
                            <th scope="col">end date</th>
                            <th scope="col">posts number</th>
                            <th scope="col">collaborators</th>
                            <th scope="col">actions</th>
                          </tr>
                        </thead>
                        @foreach ($posts as $post)
                        <tbody>
                          <tr>
                            <td scope='row'>{{$post->id}}</td>
                            <td>{{$post->title}}</td>
                            <td>{{$post->subject}}</td>
                            <td>{{$post->start_date}}</td>
                            <td>{{$post->end_date}}</td>
                            <td>{{$post->number_of_posts}}</td>
                            <td>{{$post->collaborators}}</td>
                            <td>
                              <button type="button" class="btn btn-primary">Primary</button>
                              <button type="button" class="btn btn-warning">Warning</button>
                              <button type="button" class="btn btn-danger">Danger</button>
                            </td>

                          </tr>
                        </tbody>
                            
                        @endforeach
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
