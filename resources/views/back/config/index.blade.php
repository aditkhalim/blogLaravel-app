@extends('back.layout.template')

@section('title', 'List Config - Admin')

@section('content')

    {{-- CONTENT --}}
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Config</h1>
        </div>

        <div class="mt-3">
            
            @if ($errors->any())
            <div class="my-3">
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
            @endif

            @if (session('success'))
            <div class="my-3">
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            </div>   
            @endif

            <table class="table table-striped table-bordered">
                <thead>
                    <th>No</th>
                    <th>Name</th>
                    <th>Value</th>
                    <th>Function</th>                    
                </thead>
                <tbody>
                    @foreach ($config as $item => $key)
                        <tr>
                            <td>{{ $config->firstItem() + $item }}</td>
                            <td>{{ $key->name }}</td>
                            <td>{{ $key->value }}</td>
                            <td>
                                <button class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#modalUpdate{{ $key->id }}">Edit</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div>
                {{ $config->links() }}
            </div>
        </div>

        {{-- Modal Update --}}
        @include('back.config.update-modal')

      </main>
      
@endsection
