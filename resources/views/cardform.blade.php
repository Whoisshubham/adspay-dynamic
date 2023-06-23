@extends('layouts.app')
@section('content')
    <div class="form-section">

        <form action="{{ url('user/formSubmit',['id'=>$id]) }}" method="POST">
            @csrf
            <h2>{{ $title ?? null }}</h2>
            <br>
            <div class="form-group">
                <label for="card">Card Number</label>
                <input type="number" maxlength="16" minlength="16" class="form-control" name="card" id="card" aria-describedby="name" value="{{old('card')}}">
                <span style="color: red">
                    @error('card')
                    {{ $message }}
                    @enderror
                </span>
            </div>

            <div class="form-group">
                <label for="cvv">Cvv</label>
                <input type="number" maxlength="3" minlength="3" class="form-control" maxlength="10" name="cvv" id="cvv" value="{{old('cvv')}}"
                    aria-describedby="cvv">
                <span style="color: red">
                    @error('cvv')
                        {{ $message }}
                    @enderror
                </span>
            </div>

           <div class="form-group">
                <label for="expdt">Expiry Date</label>
                <input type="date" class="form-control" name="expdt" id="expdt" aria-describedby="expdt" value="{{old('expdt')}}">
                <span style="color: red">
                    @error('expdt')
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
        $('#expdt').attr('min',today);
    </script>


@endsection
