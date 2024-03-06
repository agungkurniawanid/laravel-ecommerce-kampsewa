@extends('layouts.developers.ly-dashboard')
@section('content')
    <div class="_container w-full">
        {{-- untuk 4 card pengguna, feedback, transaksi dan mitra --}}
        <div class="_component1 p-[20px] gap-[10px] w-full grid grid-cols-4">
            {{-- card pengguna --}}
            @include('components.cards.card-totalpengguna')
            {{-- card feedback --}}
            @include('components.cards.card-totalfeedback')
            {{-- card transaksi --}}
            @include('components.cards.card-totaltransaksi')
            {{-- card mitra --}}
            @include('components.cards.card-totalmitra')
        </div>

        {{-- untuk 4 card penghasilan, pengeluaran, kerugian, keuntungan --}}
        <div class="_component2 px-[20px] gap-[10px] grid grid-cols-[2fr_1fr] w-full">
            <div class="grid grid-cols-2 grid-rows-2 gap-[10px]">
                {{-- card penghasilan --}}
                @include('components.cards.card-penghasilan')
                {{-- card pengeluaran --}}
                @include('components.cards.card-pengeluaran')
                {{-- card kerugian --}}
                @include('components.cards.card-keuntungan')
                {{-- card kerugian --}}
                @include('components.cards.card-kerugian')
            </div>
            {{-- card pengguna baru --}}
            <div class="w-full">
                @include('components.cards.cars-listnewuser')
            </div>
        </div>

        {{-- card table developer dan pengguna --}}
        <div class="_component3 p-[20px] gap-[10px] grid grid-cols-1 w-full">
            {{-- table customer --}}
            <div class="_table1">
                @include('components.tables.table-customer')
            </div>
        </div>
    </div>
@endsection
