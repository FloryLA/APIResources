@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('WELCOME') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <example-component inline-template>
                        <table class="table tatble-hover table-striped">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Posts</th>
                                    <th>&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="post in posts">
                                    <td v-text="post.id"></td>
                                    <td v-text="post.title"></td>
                                    <td v-text="post.created"></td>

                                </tr>
                            </tbody>
                        </table>
                    </example-component>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
