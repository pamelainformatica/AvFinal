@extends('main')
@section('conteudo')
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
                @endsection 
@endif

<hi>acessório</h1>

<ul>
    <?php

    $loja = [
['nome' => 'boné', 'quantidade' => 15, 'valorunit' => 300],
['nome' => 'relógio', 'quantidade' => 10, 'valorunit' => 600],
['nome' => 'oculos', 'quantidade' => 20, 'valorunit' => 400],

    ];

    forech ($loja as $loja) {
        echo "li><a" href='detalhes.php?nome={$acessório['nome]}$quantidade={$acessório}'['valorunit']}
    }


