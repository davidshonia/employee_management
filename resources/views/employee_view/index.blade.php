@extends('employee_view.layout')

@section('content')

    <table class="table ">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Surname</th>
            <th>Is Hired</th>
        </tr>
        @foreach ($employee as $key => $item)
            <tr>
                <td>{{ ++$key }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->surname }}</td>

                <td>
                    @if($item->is_hired == 1)
                        <input type="checkbox" disabled="disabled" checked="checked">
                    @else
                        <input type="checkbox" disabled="disabled">
                    @endif
                </td>
                <td>
                    <form action="{{ route('delete',$item->id) }}" method="POST">
                        <a class="btn btn-warning btn-block m-1" href="{{ route('edit',$item->id) }}">ჩაასწორე</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger btn-block m-1">წაშალე</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    @if(count($employee)==0)
        <p>არ არის არცერთი თანამშრომელი რეგისტრირებული ჯერ.</p>
    @endif

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-success btn-lg btn-block" href="{{ route('create') }}"> დამატება</a>
            </div>
        </div>
    </div>
    <div class="d-flex p-5 ">
        <ul class="mx-auto justify-content-center ">
            <div class="table-responsive mb-1 justify-content-center ">
                {{ $employee->links() }}
            </div>
        </ul>
    </div>

@endsection
