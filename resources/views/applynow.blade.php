@extends('layouts.app')
@section('content')
    <div class="form-section">

        <form action="{{ url('user/formSubmit') }}" method="POST">
            @csrf
            <h2>{{ $title ?? null }}</h2>

            <br>
            <div class="form-group">
                <label for="name">Fullname</label>
                <input type="text" class="form-control" name="name" id="name" aria-describedby="name" value="{{old('name')}}">
                <span style="color: red">
                    @error('name')
                    {{ $message }}
                    @enderror
                </span>
            </div>

            <div class="form-group">
                <label for="mobile">Mobile</label>
                <input type="number" class="form-control" maxlength="10" name="mobile" id="mobile" value="{{old('mobile')}}"
                    aria-describedby="mobile">
                <span style="color: red">
                    @error('mobile')
                        {{ $message }}
                    @enderror
                </span>
            </div>

            <div class="form-group">
                <label for="dob">Date of birth</label>
                <input type="date" min="" class="form-control" name="dob" id="dob" aria-describedby="dob" value="{{old('dob')}}">
                <span style="color: red">
                    @error('dob')
                    {{ $message }}
                    @enderror
                </span>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" id="email" aria-describedby="email" value="{{old('email')}}">
                <span style="color: red">
                    @error('email')
                    {{ $message }}
                    @enderror
                </span>
            </div>

            <button
                style="    padding: 10px;
        width: 80px;
        color: whitesmoke;
        background-color: #B7134F;
        outline: none;
        border: none;
        cursor: pointer; float:right; margin-bottom: 15px">Submit</button>

        </form>
        <br>
        <div class="banner-img"><img src="{{ asset('asset/images') }}/card.jpg" alt="axis bank card image" srcset="">
        </div>
    </div>
    <script language="javascript">
        var today = new Date();
        var dd = String(today.getDate()).padStart(2, '0');
        var mm = String(today.getMonth() + 1).padStart(2, '0');
        var yyyy = today.getFullYear();

        today = yyyy + '-' + mm + '-' + dd;
        $('#dob').attr('min',today);
    </script>
@endsection
