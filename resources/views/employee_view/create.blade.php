@extends('employee_view.layout')

@section('content')

    <br>
    <br>

    <form action="{{ route('store') }}" method="POST">
        @csrf
        <div class="d-grid gap-2 d-md-block">
            <div class="col-xs-6 col-sm-12 col-md-6">
                <div class="form-group">
                    <input type="text" name="name" class="form-control" placeholder="თანამშრომლის სახელი">
                </div>
            </div>
            <div class="col-xs-6 col-sm-12 col-md-6">
                <div class="form-group">
                    <input type="text" class="form-control" name="surname" placeholder="თანამშრომლის გვარი">
                </div>
            </div>


            <div class="d-grid gap-2 d-md-block">
                <div class="form-group">


                </div>
            </div>


            <div class="checkbox">
                <div class="form-inline p-3">
                    <label>
                        <input type="checkbox" class="form-check-input " name="is_hired" value="{{ request('is_hired') ? 'checked=""' : '1' }}">
                        დასაქმებულის სტატუსი
                    </label>
                </div>
            </div>



            <div class="col-xs-12 col-sm-12 col-md-12">
                <a class="btn btn-outline-secondary btn-lg btn-block" href="{{ route('index') }}"> უკან</a>
                <button type="submit" class="btn btn-outline-success btn-lg btn-block">დამატება</button>
            </div>
        </div>

    </form>

@endsection
