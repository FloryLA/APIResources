@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Prueba de API-Posts') }}</div>

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
                                    <th colspan="2">&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="post in posts">
                                    <td v-text="post.id"></td>
                                    <td v-text="post.title"></td>
                                    <td v-text="post.created_at"></td>
                                    <td v-text="post.updated_at"></td>

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
