@extends('employee_view.layout')

@section('content')

    <form action="{{ route('update',$employee->id) }}" method="POST">
        @csrf
        @method('PUT')
        <br>
        <br>
        <div class="d-grid gap-2 d-md-block">
            <div class="col-xs-6 col-sm-12 col-md-6">
                <div class="form-group">
                    <input type="text" name="name" value="{{ $employee->name }}" class="form-control" placeholder="">
                </div>
            </div>
            <div class="col-xs-6 col-sm-12 col-md-6">
                <div class="form-group">
                    <input type="text" class="form-control" value="{{ $employee->surname }}" name="surname" placeholder="">
                </div>
            </div>
            <div class="col-xs-6 col-sm-12 col-md-6">
                <div class="form-inline">
                    @if($employee->is_hired == 1)
                        <input type="checkbox" class="form-check-input" name="is_hired"  checked="checked" value="{{ request('is_hired') ? 'checked="checked"' : '1' }}">
                    @else
                        <input type="checkbox" class="form-check-input"  name="is_hired" value="{{ request('is_hired') ? 'checked="checked"' : '1' }}">
                    @endif
                </div>
            </div>





            <div class="col-xs-12 col-sm-12 col-md-12 form-inline text-left p-3">
                <a class="btn btn-outline-secondary btn-block btn-sm" href="{{ route('index') }}"> უკან</a>
                <button type="submit" class="btn btn-outline-success btn-block btn-sm">ჩაასწორე</button>
            </div>
        </div>

    </form>
@endsection
