@extends('layouts.app')

@section('template_title')
    Parentz
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Parentz') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('parentzs.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Fullname Mother</th>
										<th>Phone Mother</th>
										<th>Fullname Father</th>
										<th>Phone Father</th>
										<th>Fullname Tuthor</th>
										<th>Phone Tuthor</th>
										<th>Id User</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($parentzs as $parentz)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $parentz->fullname_mother }}</td>
											<td>{{ $parentz->phone_mother }}</td>
											<td>{{ $parentz->fullname_father }}</td>
											<td>{{ $parentz->phone_father }}</td>
											<td>{{ $parentz->fullname_tuthor }}</td>
											<td>{{ $parentz->phone_tuthor }}</td>
											<td>{{ $parentz->id_user }}</td>

                                            <td>
                                                <form action="{{ route('parentzs.destroy',$parentz->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('parentzs.show',$parentz->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('parentzs.edit',$parentz->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $parentzs->links() !!}
            </div>
        </div>
    </div>
@endsection
