@extends('_layouts.master')

@section('body')
    <h3 class="text-gray-700 text-3xl font-semibold">Forms</h3>

        <div class="mt-4">
            <h4 class="text-gray-600">Forms</h4>

            <div class="mt-4">
                <div class="p-6 bg-white rounded-md shadow-md">
                    <h2 class="text-lg text-gray-700 font-semibold capitalize">Account settings</h2>
                    
                    <form>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-4">
                            <div>
                                <label class="text-gray-700" for="username">Username</label>
                                <input class="form-input w-full mt-2 rounded-md focus:border-indigo-600" type="text">
                            </div>

                            <div>
                                <label class="text-gray-700" for="emailAddress">Email Address</label>
                                <input class="form-input w-full mt-2 rounded-md focus:border-indigo-600" type="email">
                            </div>

                            <div>
                                <label class="text-gray-700" for="password">Password</label>
                                <input class="form-input w-full mt-2 rounded-md focus:border-indigo-600" type="password">
                            </div>

                            <div>
                                <label class="text-gray-700" for="passwordConfirmation">Password Confirmation</label>
                                <input class="form-input w-full mt-2 rounded-md focus:border-indigo-600" type="password">
                            </div>
                        </div>

                        <div class="flex justify-end mt-4">
                            <button class="px-4 py-2 bg-gray-800 text-gray-200 rounded hover:bg-gray-700 focus:outline-none focus:bg-gray-700">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
@endsection