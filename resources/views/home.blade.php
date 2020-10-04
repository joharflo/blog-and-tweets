@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">My entries</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

               
                  
                  <ul>
                    @foreach ($entries as $entry)
                    <li>
                        <a href="{{url('entries/'.$entry->id)}} ">{{ $entry->title}}</a>
                       
                    </li>
                    @endforeach 

                  </ul>

                  {{--
                  <div class="card mb-4">
                      <div class="card-header">
                          {{ $entry->id}}.) {{ $entry->title}}</div>
                      <div class="card-body">
                          <p>{{ $entry->content}}</p>              
                      </div>
      
                      <div class="card-footer">
                          Author:
                          <a href="{{url('user/'.$entry->user_id)}}" >                   
                            {{ $entry->user->name}}
                          </a>
                      </div>
                  </div>          
                  --}}
               
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
