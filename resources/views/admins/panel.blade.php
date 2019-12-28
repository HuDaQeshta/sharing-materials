@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    Welcome ! <br>
                    <h6 class="mt-3"> Here are The Registered users :</h6>
                    <div class="row">
                    <div class="col-12 col-lg-12 col-md-12 d-flex align-items-center justify-content-center">    
                        <table class="table table-responsive-lg" id="courses">
                            <thead>
                              <tr>
                                <th width="5%" scope="col">User name</th>
                                <th width="35%" scope="col">Date of create</th>
                                <th width="15%" scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                @if($user->role_id === 2)
                                <tr class="table-secondary">
                                <td>{{$user->username}}</td>
                                <td>{{$user->created_at}}</td>
                                <td class="center"><i class="fas fa-trash"></i></td>
                                </tr>
                                @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    </div>
            </div>
        </div>
    </div>
</div></div>
@endsection
