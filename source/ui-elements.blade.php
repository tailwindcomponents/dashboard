@extends('_layouts.master')

@section('body')
    <h3 class="text-gray-700 text-3xl font-medium">UI Elements</h3>

    <div class="mt-4">
        <h4 class="text-gray-600">Alerts</h4>

        <div class="mt-4">
            <div class="rounded-md bg-white py-4 px-4 overflow-x-auto whitespace-no-wrap">
                <div class="inline-flex max-w-sm w-full bg-white shadow-md rounded-lg overflow-hidden ml-3">
                    <div class="flex justify-center items-center w-12 bg-green-500">
                        <svg class="h-6 w-6 fill-current text-white" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM16.6667 28.3333L8.33337 20L10.6834 17.65L16.6667 23.6166L29.3167 10.9666L31.6667 13.3333L16.6667 28.3333Z"/>
                        </svg>
                    </div>
                    
                    <div class="-mx-3 py-2 px-4">
                        <div class="mx-3">
                            <span class="text-green-500 font-semibold">Success</span>
                            <p class="text-gray-600 text-sm">Your account was registered!</p>
                        </div>
                    </div>
                </div>

                <div class="inline-flex max-w-sm w-full bg-white shadow-md rounded-lg overflow-hidden ml-3">
                    <div class="flex justify-center items-center w-12 bg-blue-500">
                        <svg class="h-6 w-6 fill-current text-white" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM21.6667 28.3333H18.3334V25H21.6667V28.3333ZM21.6667 21.6666H18.3334V11.6666H21.6667V21.6666Z"/>
                        </svg>
                    </div>
                    
                    <div class="-mx-3 py-2 px-4">
                        <div class="mx-3">
                            <span class="text-blue-500 font-semibold">Info</span>
                            <p class="text-gray-600 text-sm">This channel archived by owner !</p>
                        </div>
                    </div>
                </div>

                <div class="inline-flex max-w-sm w-full bg-white shadow-md rounded-lg overflow-hidden ml-3">
                    <div class="flex justify-center items-center w-12 bg-yellow-500">
                        <svg class="h-6 w-6 fill-current text-white" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM21.6667 28.3333H18.3334V25H21.6667V28.3333ZM21.6667 21.6666H18.3334V11.6666H21.6667V21.6666Z"/>
                        </svg>
                    </div>
                    
                    <div class="-mx-3 py-2 px-4">
                        <div class="mx-3">
                            <span class="text-yellow-500 font-semibold">Warning</span>
                            <p class="text-gray-600 text-sm">Your image size is to large !</p>
                        </div>
                    </div>
                </div>

                <div class="inline-flex max-w-sm w-full bg-white shadow-md rounded-lg overflow-hidden ml-3">
                    <div class="flex justify-center items-center w-12 bg-red-500">
                        <svg class="h-6 w-6 fill-current text-white" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20 3.36667C10.8167 3.36667 3.3667 10.8167 3.3667 20C3.3667 29.1833 10.8167 36.6333 20 36.6333C29.1834 36.6333 36.6334 29.1833 36.6334 20C36.6334 10.8167 29.1834 3.36667 20 3.36667ZM19.1334 33.3333V22.9H13.3334L21.6667 6.66667V17.1H27.25L19.1334 33.3333Z"/>
                        </svg>
                    </div>
                    
                    <div class="-mx-3 py-2 px-4">
                        <div class="mx-3">
                            <span class="text-red-500 font-semibold">Error</span>
                            <p class="text-gray-600 text-sm">Your email is already used!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-8">
        <h4 class="text-gray-600">Radio Buttons</h4>

        <div class="mt-4">
            <div class="flex rounded-md bg-white py-4 px-4 overflow-x-auto">
                <label class="inline-flex items-center">
                    <input type="radio" class="form-radio h-5 w-5 text-gray-600" checked><span class="ml-2 text-gray-700">label</span>
                </label>

                <label class="inline-flex items-center ml-3">
                    <input type="radio" class="form-radio h-5 w-5 text-red-600" checked><span class="ml-2 text-gray-700">label</span>
                </label>

                <label class="inline-flex items-center ml-3">
                    <input type="radio" class="form-radio h-5 w-5 text-orange-600" checked><span class="ml-2 text-gray-700">label</span>
                </label>

                <label class="inline-flex items-center ml-3">
                    <input type="radio" class="form-radio h-5 w-5 text-yellow-600" checked><span class="ml-2 text-gray-700">label</span>
                </label>

                <label class="inline-flex items-center ml-3">
                    <input type="radio" class="form-radio h-5 w-5 text-green-600" checked><span class="ml-2 text-gray-700">label</span>
                </label>

                <label class="inline-flex items-center ml-3">
                    <input type="radio" class="form-radio h-5 w-5 text-teal-600" checked><span class="ml-2 text-gray-700">label</span>
                </label>

                <label class="inline-flex items-center ml-3">
                    <input type="radio" class="form-radio h-5 w-5 text-blue-600" checked><span class="ml-2 text-gray-700">label</span>
                </label>

                <label class="inline-flex items-center ml-3">
                    <input type="radio" class="form-radio h-5 w-5 text-indigo-600" checked><span class="ml-2 text-gray-700">label</span>
                </label>

                <label class="inline-flex items-center ml-3">
                    <input type="radio" class="form-radio h-5 w-5 text-purple-600" checked><span class="ml-2 text-gray-700">label</span>
                </label>

                <label class="inline-flex items-center ml-3">
                    <input type="radio" class="form-radio h-5 w-5 text-pink-600" checked><span class="ml-2 text-gray-700">label</span>
                </label>
            </div>
        </div>
    </div>

    <div class="mt-8">
        <h4 class="text-gray-600">Checkboxes</h4>

        <div class="mt-4">
            <div class="flex rounded-md bg-white py-4 px-4 overflow-x-auto">
                <label class="inline-flex items-center">
                    <input type="checkbox" class="form-checkbox h-5 w-5 text-gray-600" checked><span class="ml-2 text-gray-700">label</span>
                </label>

                <label class="inline-flex items-center ml-3">
                    <input type="checkbox" class="form-checkbox h-5 w-5 text-red-600" checked><span class="ml-2 text-gray-700">label</span>
                </label>

                <label class="inline-flex items-center ml-3">
                    <input type="checkbox" class="form-checkbox h-5 w-5 text-orange-600" checked><span class="ml-2 text-gray-700">label</span>
                </label>

                <label class="inline-flex items-center ml-3">
                    <input type="checkbox" class="form-checkbox h-5 w-5 text-yellow-600" checked><span class="ml-2 text-gray-700">label</span>
                </label>

                <label class="inline-flex items-center ml-3">
                    <input type="checkbox" class="form-checkbox h-5 w-5 text-green-600" checked><span class="ml-2 text-gray-700">label</span>
                </label>

                <label class="inline-flex items-center ml-3">
                    <input type="checkbox" class="form-checkbox h-5 w-5 text-teal-600" checked><span class="ml-2 text-gray-700">label</span>
                </label>

                <label class="inline-flex items-center ml-3">
                    <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600" checked><span class="ml-2 text-gray-700">label</span>
                </label>

                <label class="inline-flex items-center ml-3">
                    <input type="checkbox" class="form-checkbox h-5 w-5 text-indigo-600" checked><span class="ml-2 text-gray-700">label</span>
                </label>

                <label class="inline-flex items-center ml-3">
                    <input type="checkbox" class="form-checkbox h-5 w-5 text-purple-600" checked><span class="ml-2 text-gray-700">label</span>
                </label>

                <label class="inline-flex items-center ml-3">
                    <input type="checkbox" class="form-checkbox h-5 w-5 text-pink-600" checked><span class="ml-2 text-gray-700">label</span>
                </label>
            </div>
        </div>
    </div>

    <div class="mt-8">
        <h4 class="text-gray-600">Buttons</h4>

        <div class="mt-4">
            <div class="flex rounded-md bg-white py-4 px-4 overflow-x-auto">
                <button class="px-6 py-3 bg-gray-600 rounded-md text-white font-medium tracking-wide hover:bg-gray-500">Button</button>
                <button class="px-6 py-3 bg-red-600 rounded-md text-white font-medium tracking-wide hover:bg-red-500 ml-3">Button</button>
                <button class="px-6 py-3 bg-orange-600 rounded-md text-white font-medium tracking-wide hover:bg-orange-500 ml-3">Button</button>
                <button class="px-6 py-3 bg-yellow-600 rounded-md text-white font-medium tracking-wide hover:bg-yellow-500 ml-3">Button</button>
                <button class="px-6 py-3 bg-green-600 rounded-md text-white font-medium tracking-wide hover:bg-green-500 ml-3">Button</button>
                <button class="px-6 py-3 bg-teal-600 rounded-md text-white font-medium tracking-wide hover:bg-teal-500 ml-3">Button</button>
                <button class="px-6 py-3 bg-blue-600 rounded-md text-white font-medium tracking-wide hover:bg-blue-500 ml-3">Button</button>
                <button class="px-6 py-3 bg-indigo-600 rounded-md text-white font-medium tracking-wide hover:bg-indigo-500 ml-3">Button</button>
                <button class="px-6 py-3 bg-purple-600 rounded-md text-white font-medium tracking-wide hover:bg-purple-500 ml-3">Button</button>
                <button class="px-6 py-3 bg-pink-600 rounded-md text-white font-medium tracking-wide hover:bg-pink-500 ml-3">Button</button>
            </div>
        </div>
    </div>

    <div class="mt-8">
        <h4 class="text-gray-600">Pagnations</h4>

        <div class="mt-4">
            <div class="flex rounded-md bg-white py-4 px-4 overflow-x-auto">
                <div class="flex rounded mr-4">
                    <a href="#" class="py-2 px-3 leading-tight bg-white border border-gray-200 text-blue-700 border-r-0 ml-0 rounded-l hover:bg-indigo-500 hover:text-white"><span>Previous</a></a>
                    <a href="#" class="py-2 px-3 leading-tight bg-white border border-gray-200 text-blue-700 border-r-0 hover:bg-indigo-500 hover:text-white"><span>1</span></a>
                    <a href="#" class="py-2 px-3 leading-tight bg-white border border-gray-200 text-blue-700 border-r-0 hover:bg-indigo-500 hover:text-white"><span>2</span></a>
                    <a href="#" class="py-2 px-3 leading-tight bg-white border border-gray-200 text-blue-700 border-r-0 hover:bg-indigo-500 hover:text-white"><span>3</span></a>
                    <a href="#" class="py-2 px-3 leading-tight bg-white border border-gray-200 text-blue-700 rounded-r hover:bg-indigo-500 hover:text-white"><span>Next</span></a>
                </div>
            </div>
        </div>
    </div>
@endsection
