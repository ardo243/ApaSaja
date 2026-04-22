@extends('layouts.app')

@section('title', 'Katalog')

@section('content')
<div class="bg-gray-50 min-h-screen py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center mb-12">
            <h1 class="text-4xl font-extrabold text-gray-900 tracking-tight">Katalog Produk</h1>
            <p class="mt-4 text-lg text-gray-600">Temukan koleksi terbaik kami khusus untuk Anda.</p>
            <div class="mt-4 h-1 w-24 bg-blue-500 mx-auto rounded-full"></div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
            
            @php
                // Contoh data dummy, nanti bisa kamu ganti dengan variabel dari Controller
                $products = [
                    ['name' => 'Produk Digital A', 'price' => 'Rp 150.000', 'img' => 'https://via.placeholder.com/300x200', 'cat' => 'Software'],
                    ['name' => 'Produk Digital B', 'price' => 'Rp 275.000', 'img' => 'https://via.placeholder.com/300x200', 'cat' => 'Design'],
                    ['name' => 'Produk Digital C', 'price' => 'Rp 50.000', 'img' => 'https://via.placeholder.com/300x200', 'cat' => 'Asset'],
                    ['name' => 'Produk Digital D', 'price' => 'Rp 420.000', 'img' => 'https://via.placeholder.com/300x200', 'cat' => 'Course'],
                ];
            @endphp

            @foreach($products as $product)
            <div class="bg-white rounded-2xl shadow-sm hover:shadow-xl transition-shadow duration-300 overflow-hidden border border-gray-100">
                <div class="relative">
                    <img src="{{ $product['img'] }}" alt="{{ $product['name'] }}" class="w-full h-48 object-cover">
                    <span class="absolute top-3 right-3 bg-white/90 backdrop-blur-sm px-3 py-1 rounded-full text-xs font-bold text-blue-600 shadow-sm">
                        {{ $product['cat'] }}
                    </span>
                </div>

                <div class="p-6">
                    <h3 class="text-lg font-bold text-gray-900 mb-2">{{ $product['name'] }}</h3>
                    <p class="text-gray-500 text-sm mb-4">Deskripsi singkat produk yang menjelaskan keunggulan utamanya.</p>
                    
                    <div class="flex items-center justify-between">
                        <span class="text-xl font-bold text-blue-600">{{ $product['price'] }}</span>
                        <button class="p-2 bg-blue-50 hover:bg-blue-600 text-blue-600 hover:text-white rounded-lg transition-colors duration-200">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            @endforeach
            </div>
    </div>
</div>
@endsection