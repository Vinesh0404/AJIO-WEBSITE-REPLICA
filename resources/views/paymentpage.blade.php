@extends('layouts.app') <!-- Use your appropriate master layout -->

@section('content')
<style type="text/css">
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }
</style>
<div class="w-full px-4 py-2">
    <ul class="flex">
        <li class="text-green-400 hover:border-b-2 border-green-400"><a href="#">Credit / Debit Card Payment</a></li>
    </ul>
</div>
<div class="max-w-full px-4 py-2">
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('processPayment') }}" method="POST">
        @csrf
        <div class="mt-2">
            <label for="name_on_card" class="text-lg font-bold text-gray-600 pb-2">Name On Card:</label>
            <input type="text" name="name_on_card" id="name_on_card" class="form-control" placeholder="Enter Card Name" value="{{ old('name_on_card') }}">
            @error('name_on_card')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>

        <div class="mt-2">
            <label for="card_number" class="text-lg font-bold text-gray-600 pb-2">Card Number:</label>
            <input type="number" name="card_number" id="card_number" class="form-control" placeholder="xxxx xxxx 1234" value="{{ old('card_number') }}">
            @error('card_number')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>

        <div class="mt-2">
            <label for="expiry_month" class="text-lg font-bold text-gray-600 pb-2">Expiry Month:</label>
            <select name="expiry_month" id="expiry_month" class="form-control">
                @for ($i = 1; $i <= 12; $i++)
                    <option value="{{ str_pad($i, 2, '0', STR_PAD_LEFT) }}" {{ old('expiry_month') == str_pad($i, 2, '0', STR_PAD_LEFT) ? 'selected' : '' }}>
                        {{ str_pad($i, 2, '0', STR_PAD_LEFT) }}
                    </option>
                @endfor
            </select>
        </div>

        <div class="mt-2">
            <label for="expiry_year" class="text-lg font-bold text-gray-600 pb-2">Expiry Year:</label>
            <select name="expiry_year" id="expiry_year" class="form-control">
                @for ($i = date('Y'); $i <= date('Y') + 10; $i++)
                    <option value="{{ $i }}" {{ old('expiry_year') == $i ? 'selected' : '' }}>{{ $i }}</option>
                @endfor
            </select>
        </div>

        <div class="mt-2">
            <label for="cvv" class="text-lg font-bold text-gray-600 pb-2">CVV:</label>
            <input type="password" name="cvv" id="cvv" class="form-control" placeholder="123" value="{{ old('cvv') }}">
            @error('cvv')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>

        <div class="mt-2">
            <button type="submit" class="btn btn-primary" style="background-color: #00BFFF;">Confirm Payment</button>
        </div>
    </form>
</div>
@endsection