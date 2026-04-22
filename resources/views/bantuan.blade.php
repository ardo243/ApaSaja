@extends('layouts.app')

@section('title', 'Bantuan - AmikomEventHub')

@section('content')
<div class="bg-white min-h-screen py-12">
    <div class="max-w-3xl mx-auto px-4 sm:px-6">
        
        <div class="text-center mb-16">
            <h1 class="text-4xl font-extrabold text-gray-900 shadow-sm inline-block">Pusat Bantuan</h1>
            <p class="mt-4 text-gray-600 text-lg">Punya pertanyaan? Kami di sini untuk membantu Anda.</p>
            
            <div class="mt-8 relative max-w-xl mx-auto">
                <input type="text" placeholder="Cari bantuan..." class="w-full pl-12 pr-4 py-3 rounded-full border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition">
                <svg class="w-6 h-6 text-gray-400 absolute left-4 top-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </div>
        </div>
        <div class="mt-16 p-8 bg-blue-600 rounded-2xl text-center text-white">
            <h3 class="text-xl font-bold mb-2">hubungi Tim Support</h3>
            <p class="mb-6 text-blue-100">Tim support kami siap membantu Anda 24/7.</p>
            <a href="mailto:support@example.com" class="bg-white text-blue-600 px-8 py-3 rounded-full font-bold hover:bg-gray-100 transition shadow-lg">
                Hubungi Kami
            </a>
        </div>
    </div>
</div>
@endsection