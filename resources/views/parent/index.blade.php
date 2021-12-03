@extends('layouts.app')

@section('template_title')
    Parent
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Parent') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('parents.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                    @foreach ($parents as $parent)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $parent->fullname_mother }}</td>
											<td>{{ $parent->phone_mother }}</td>
											<td>{{ $parent->fullname_father }}</td>
											<td>{{ $parent->phone_father }}</td>
											<td>{{ $parent->fullname_tuthor }}</td>
											<td>{{ $parent->phone_tuthor }}</td>
											<td>{{ $parent->id_user }}</td>

                                            <td>
                                                <form action="{{ route('parents.destroy',$parent->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('parents.show',$parent->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('parents.edit',$parent->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $parents->links() !!}
            </div>
        </div>
    </div>
@endsection
