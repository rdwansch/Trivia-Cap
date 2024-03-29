{{-- Bug: All input is checked --}}

@extends('components.layout')

@section('title')
    Diamonds
@endsection

@section('content')
    @include('components.sidebar')
    <div class="p-4 sm:ml-64 min-h-screen bg-slate-300">
        <div class="p-5 bg-white rounded-lg dark:border-gray-700">
            <h1 class="text-4xl font-bold ">Add Diamond</h1>
            <div class="text-blue-500 my-2">
                <a href="/diamonds" class="hover:underline">Diamond</a>
                <span>/</span>
                <a href="#" class="hover:underline">Add</a>
            </div>

            <form method="POST" action="/diamonds/add">
                @csrf
                @if ($errors->any())
                    <div class="alert alert-danger flex items-center gap-5">
                        @foreach ($errors->all() as $error)
                            <span class="text-red-500">{{ $error }}</span>
                        @endforeach
                    </div>
                @endif
                <table class="max-w-[900px] mt-5">
                    <tbody class="">
                        <tr>
                            <td class="w-1/6 text-right">
                                <label for="price" class="font-semibold text-2xl">Price</label>
                            </td>
                            <td class="pt-5 pr-5">:</td>
                            <td class="w-5/6">
                                <input type="text" name="price" id="price" value="{{ old('price') }}"
                                    class="block outline-none focus:outline-none bg-gray-200 py-1 px-3 rounded-lg border border-gray-400 shadow w-full focus:ring focus:ring-purple-200"></input>
                            </td>
                        </tr>
                        <tr>
                            <td class="w-1/6 text-right pt-5">
                                <label for="amount" class="font-semibold text-2xl">Amount</label>
                            </td>
                            <td class="pt-5 pr-5">:</td>
                            <td class="w-5/6 pt-5">
                                <input type="text" name="amount" id="amount" value="{{ old('amount') }}"
                                    class="block outline-none focus:outline-none bg-gray-200 py-1 px-3 rounded-lg border border-gray-400 shadow w-full focus:ring focus:ring-purple-200"></input>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="max-w-[900px] mt-5">
                    <button
                        class="focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900 block ml-auto"
                        type="submit">
                        Save
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
