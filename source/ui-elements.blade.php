@extends('_layouts.master')

@section('body')
<div x-data="{ sidebarOpen: false }" class="flex h-screen bg-gray-200">
    <div :class="sidebarOpen ? 'block' : 'hidden'" @click="sidebarOpen = false" class="fixed z-20 inset-0 bg-black opacity-50 transition-opacity lg:hidden"></div>
    
    <div :class="sidebarOpen ? 'translate-x-0 ease-out' : '-translate-x-full ease-in'" class="fixed z-30 inset-y-0 left-0 w-64 transition duration-300 transform bg-gray-900 overflow-y-auto lg:translate-x-0 lg:static lg:inset-0">
        <div class="flex items-center justify-center mt-8">
            <div class="flex items-center">
                <svg class="h-12 w-12" viewBox="0 0 512 512" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M364.61 390.213C304.625 450.196 207.37 450.196 147.386 390.213C117.394 360.22 102.398 320.911 102.398 281.6C102.398 242.291 117.394 202.981 147.386 172.989C147.386 230.4 153.6 281.6 230.4 307.2C230.4 256 256 102.4 294.4 76.7999C320 128 334.618 142.997 364.608 172.989C394.601 202.981 409.597 242.291 409.597 281.6C409.597 320.911 394.601 360.22 364.61 390.213Z" fill="#4C51BF" stroke="#4C51BF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M201.694 387.105C231.686 417.098 280.312 417.098 310.305 387.105C325.301 372.109 332.8 352.456 332.8 332.8C332.8 313.144 325.301 293.491 310.305 278.495C295.309 263.498 288 256 275.2 230.4C256 243.2 243.201 320 243.201 345.6C201.694 345.6 179.2 332.8 179.2 332.8C179.2 352.456 186.698 372.109 201.694 387.105Z" fill="white"/>
                </svg>

                <span class="text-white text-2xl mx-2 font-semibold">Dashboard</span>
            </div>
        </div>

        <nav class="mt-10">
            <a class="flex items-center mt-4 py-2 px-6 block border-l-4 bg-gray-600 bg-opacity-25 text-gray-100 border-gray-100" href="/">
                <svg class="h-5 w-5" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2 10C2 5.58172 5.58172 2 10 2V10H18C18 14.4183 14.4183 18 10 18C5.58172 18 2 14.4183 2 10Z" fill="currentColor"/>
                    <path d="M12 2.25195C14.8113 2.97552 17.0245 5.18877 17.748 8.00004H12V2.25195Z" fill="currentColor"/>
                </svg>

                <span class="mx-4">Overview</span>
            </a>

            <a class="flex items-center mt-4 py-2 px-6 block border-l-4 border-gray-900 text-gray-500 hover:bg-gray-600 hover:bg-opacity-25 hover:text-gray-100" href="/ui-elements">
                <svg class="h-5 w-5" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5 3C3.89543 3 3 3.89543 3 5V7C3 8.10457 3.89543 9 5 9H7C8.10457 9 9 8.10457 9 7V5C9 3.89543 8.10457 3 7 3H5Z" fill="currentColor"/>
                    <path d="M5 11C3.89543 11 3 11.8954 3 13V15C3 16.1046 3.89543 17 5 17H7C8.10457 17 9 16.1046 9 15V13C9 11.8954 8.10457 11 7 11H5Z" fill="currentColor"/>
                    <path d="M11 5C11 3.89543 11.8954 3 13 3H15C16.1046 3 17 3.89543 17 5V7C17 8.10457 16.1046 9 15 9H13C11.8954 9 11 8.10457 11 7V5Z" fill="currentColor"/>
                    <path d="M11 13C11 11.8954 11.8954 11 13 11H15C16.1046 11 17 11.8954 17 13V15C17 16.1046 16.1046 17 15 17H13C11.8954 17 11 16.1046 11 15V13Z" fill="currentColor"/>
                </svg>

                <span class="mx-4">UI Elements</span>
            </a>

            <a class="flex items-center mt-4 py-2 px-6 block border-l-4 border-gray-900 text-gray-500 hover:bg-gray-600 hover:bg-opacity-25 hover:text-gray-100" href="/tables">
                <svg class="h-6 w-6" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7 3C6.44772 3 6 3.44772 6 4C6 4.55228 6.44772 5 7 5H13C13.5523 5 14 4.55228 14 4C14 3.44772 13.5523 3 13 3H7Z" fill="currentColor"/>
                    <path d="M4 7C4 6.44772 4.44772 6 5 6H15C15.5523 6 16 6.44772 16 7C16 7.55228 15.5523 8 15 8H5C4.44772 8 4 7.55228 4 7Z" fill="currentColor"/>
                    <path d="M2 11C2 9.89543 2.89543 9 4 9H16C17.1046 9 18 9.89543 18 11V15C18 16.1046 17.1046 17 16 17H4C2.89543 17 2 16.1046 2 15V11Z" fill="currentColor"/>
                </svg>

                <span class="mx-4">Tables</span>
            </a>
        </nav>
    </div>

    <div class="flex-1 flex flex-col overflow-hidden">
        <header class="flex justify-between items-center py-4 px-6 bg-white border-b-4 border-indigo-600">
            <div class="flex items-center">
                <button @click="sidebarOpen = true" class="text-gray-500 focus:outline-none lg:hidden">
                    <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4 6H20M4 12H20M4 18H11" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>

                <div class="relative mx-4 lg:mx-0">
                    <span class="absolute inset-y-0 left-0 pl-3 flex items-center">
                        <svg class="h-5 w-5 text-gray-500" viewBox="0 0 24 24" fill="none">
                            <path d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </span>

                    <input class="form-input w-32 sm:w-64 rounded-md pl-10 pr-4 focus:border-indigo-600" type="text" placeholder="Search">
                </div>
            </div>
            
            <div class="flex items-center">
                <button class="flex mx-4 text-gray-600 focus:outline-none">
                    <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15 17H20L18.5951 15.5951C18.2141 15.2141 18 14.6973 18 14.1585V11C18 8.38757 16.3304 6.16509 14 5.34142V5C14 3.89543 13.1046 3 12 3C10.8954 3 10 3.89543 10 5V5.34142C7.66962 6.16509 6 8.38757 6 11V14.1585C6 14.6973 5.78595 15.2141 5.40493 15.5951L4 17H9M15 17V18C15 19.6569 13.6569 21 12 21C10.3431 21 9 19.6569 9 18V17M15 17H9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
                
                <button class="flex focus:outline-none">
                    <img class="h-8 w-8 shadow rounded-full object-cover object-center" src="https://images.unsplash.com/photo-1528892952291-009c663ce843?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=296&q=80" alt="avatar">
                </button>
            </div>
        </header>

        <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
            <div class="container mx-auto px-6 py-8">
                <h3 class="text-gray-700 text-3xl font-semibold">UI Elements</h3>

                <div class="mt-4">
                    <h4 class="text-gray-600">Radios</h4>

                    <div class="mt-4">
                        <div class="flex rounded-md bg-white py-4 px-3 overflow-x-auto">
                            <label class="inline-flex items-center ml-3">
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
                        <div class="flex rounded-md bg-white py-4 px-3 overflow-x-auto">
                            <label class="inline-flex items-center ml-3">
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
                    <h4 class="text-gray-600">Models</h4>

                    <div class="mt-4">
                        <div class="max-w-sm w-full bg-white shadow-md rounded-md overflow-hidden border">
                            <form>
                                <div class="flex justify-between items-center px-5 py-3 text-gray-700 border-b">
                                    <h3 class="text-sm">Add Category</h3>
                                    <button>
                                        <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                                        </svg>
                                    </button>
                                </div>
                                
                                <div class="px-5 py-6 bg-gray-200 text-gray-700 border-b">
                                    <label class="text-xs">Name</label>
    
                                    <div class="mt-2 relative rounded-md shadow-sm">
                                        <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-gray-600">
                                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z"/>
                                            </svg>
                                        </span>
    
                                        <input type="text" class="form-input px-12 py-2 appearance-none rounded-md focus:border-indigo-600">
                                    </div>
                                </div>
    
                                <div class="flex justify-between items-center px-5 py-3">
                                    <button class="px-3 py-1 text-gray-700 text-sm rounded-md bg-gray-200 hover:bg-gray-300 focus:outline-none">Cancel</button>
                                    <button class="px-3 py-1 bg-indigo-600 text-white rounded-md text-sm hover:bg-indigo-500 focus:outline-none">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="mt-8">
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
            </div>
        </main>
    </div>
</div>
@endsection
