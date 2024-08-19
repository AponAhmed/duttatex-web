@extends('dashboard.layouts.master')
@section('title', 'Quick Inquiry')
@section('content')
<main class="h-full pb-16 overflow-y-auto">
  <div class="container grid px-6 mx-auto">
    <div class="flex justify-between my-6">
      <h2
        class="text-2xl font-semibold text-gray-700 dark:text-gray-200">
        Subscriber List
      </h2>
      <div>
        <button class="flex items-center justify-between px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
          <span>Download</span>
        </button>
      </div>
    </div>
    <!-- table -->
    @if (session('success'))
                <div class="flex items-center justify-between py-2 px-4 mb-8 text-md text-white bg-green-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple"
                    id="toaster">
                    <div class="flex items-center">
                        <span>{{ session('success') }}</span>
                    </div>
                    <button
                        class="inline-flex items-center justify-center w-6 h-6 text-white transition-colors duration-150 rounded dark:hover:text-gray-200 hover: hover:text-gray-700"
                        aria-label="close" @click="closeToaster()">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" role="img" aria-hidden="true">
                            <path
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd" fill-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
            @endif
    <div class="w-full overflow-hidden rounded-lg shadow-xs">
      <div class="w-full overflow-x-auto">
        <table class="w-full whitespace-no-wrap">
          <thead>
            <tr
              class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
              <th class="px-4 py-3">SL</th>
              <th class="px-4 py-3">Subscriber Email</th>
              <th class="px-4 py-3">Date of Subscription</th>
              <th class="px-4 py-3">Actions</th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
            @foreach ($subscribers as $key => $subscriber)
            <tr class="text-gray-700 dark:text-gray-400">
              <td class="px-4 py-3 text-sm"> {{$key + 1}} </td>
              <td class="px-4 py-3 text-sm"> {{$subscriber->email}}
              </td>
              <td class="px-4 py-3 text-sm"> {{$subscriber->created_at->format('d M, Y')}} </td>
              <td class="px-4 py-3">
                <div class="flex items-center space-x-4 text-sm">
                  <a href="#" name="{{ $subscriber->id }}"
                    class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray openModalButton"
                    aria-label="Delete">
                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor"
                      viewBox="0 0 20 20">
                      <path fill-rule="evenodd"
                        d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                        clip-rule="evenodd"></path>
                    </svg>
                  </a>
                </div>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <div
        class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800">
        <span class="flex items-center col-span-3">
          Showing 21-30 of 100
        </span>
        <span class="col-span-2"></span>
        <!-- Pagination -->
        <span class="flex col-span-4 mt-2 sm:mt-auto sm:justify-end">
          <nav aria-label="Table navigation">
            <ul class="inline-flex items-center">
              <li>
                <button
                  class="px-3 py-1 rounded-md rounded-l-lg focus:outline-none focus:shadow-outline-purple"
                  aria-label="Previous">
                  <svg
                    class="w-4 h-4 fill-current"
                    aria-hidden="true"
                    viewBox="0 0 20 20">
                    <path
                      d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                      clip-rule="evenodd"
                      fill-rule="evenodd"></path>
                  </svg>
                </button>
              </li>
              <li>
                <button
                  class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">
                  1
                </button>
              </li>
              <li>
                <button
                  class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">
                  2
                </button>
              </li>
              <li>
                <button
                  class="px-3 py-1 text-white transition-colors duration-150 bg-purple-600 border border-r-0 border-purple-600 rounded-md focus:outline-none focus:shadow-outline-purple">
                  3
                </button>
              </li>
              <li>
                <button
                  class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">
                  4
                </button>
              </li>
              <li>
                <span class="px-3 py-1">...</span>
              </li>
              <li>
                <button
                  class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">
                  8
                </button>
              </li>
              <li>
                <button
                  class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">
                  9
                </button>
              </li>
              <li>
                <button
                  class="px-3 py-1 rounded-md rounded-r-lg focus:outline-none focus:shadow-outline-purple"
                  aria-label="Next">
                  <svg
                    class="w-4 h-4 fill-current"
                    aria-hidden="true"
                    viewBox="0 0 20 20">
                    <path
                      d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                      clip-rule="evenodd"
                      fill-rule="evenodd"></path>
                  </svg>
                </button>
              </li>
            </ul>
          </nav>
        </span>
      </div>
    </div>
  </div>
</main>

 <!-- Modal blur box  -->
 <div class="fixed inset-0 z-30 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center hidden"
        id="modal">
        <!-- Modal Box -->
        <div class="w-full px-6 py-4 overflow-hidden bg-white rounded-t-lg dark:bg-gray-800 sm:rounded-lg sm:m-4 sm:max-w-xl"
            role="dialog">
            <header class="flex justify-end">
                <button
                    class="inline-flex items-center justify-center w-6 h-6 text-gray-400 transition-colors duration-150 rounded dark:hover:text-gray-200 hover: hover:text-gray-700"
                    aria-label="close" id="closeModalButton1">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" role="img" aria-hidden="true">
                        <path
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd" fill-rule="evenodd"></path>
                    </svg>
                </button>
            </header>
            <!-- Modal body -->
            <div class="mt-4 mb-6">
                <!-- Modal title -->
                <p class="mb-2 text-lg font-semibold text-gray-700 dark:text-gray-300">
                    Confirm Delete
                </p>
                <!-- Modal description -->
                <p class="text-sm text-gray-700 dark:text-gray-400">
                    Are you sure you want delete this item?
                </p>
            </div>
            <footer
                class="flex flex-col items-center justify-end px-6 py-3 -mx-6 -mb-4 space-y-4 sm:space-y-0 sm:space-x-6 sm:flex-row bg-gray-50 dark:bg-gray-800">
                <button id="closeModalButton2"
                    class="w-full px-5 py-3 text-sm font-medium leading-5 bg-gray-500 text-white text-gray-700 transition-colors duration-150 border border-gray-300 rounded-lg dark:text-gray-400 sm:px-4 sm:py-2 sm:w-auto active:bg-transparent hover:border-gray-500 focus:border-gray-500 active:text-gray-500 focus:outline-none focus:shadow-outline-gray">
                    Cancel
                </button>
                <a id="confirmDeleteButton"
                    class="w-full px-5 py-3 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-red-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-red-600 hover:bg-red-700 focus:outline-none focus:shadow-outline-red">
                    Delete
                </a>
            </footer>
        </div>
    </div>
@endsection

@section('js')
    <script>

        function closeToaster() {
            let toaster = document.getElementById('toaster');
            toaster.style.display = 'none';
        }

        //delete modal
        let modal = document.querySelector('#modal');
        let openModalButton = document.querySelectorAll('.openModalButton');
        let closeModalButton1 = document.querySelector('#closeModalButton1');
        let closeModalButton2 = document.querySelector('#closeModalButton2');
        let confirmDeleteButton = document.querySelector('#confirmDeleteButton');
        openModalButton.forEach(button => {
            button.addEventListener('click', function() {
                const id = button.getAttribute('name');
                console.log(id);
                confirmDeleteButton.setAttribute('href', "{{ route('subscriber.delete', ['id' => ':id']) }}"
                    .replace(":id", id));
                if (modal.classList.contains('hidden')) {
                    modal.classList.remove('hidden');
                }
            })
        });

        closeModalButton1.addEventListener('click', function() {
            if (!modal.classList.contains('hidden')) {
                modal.classList.add('hidden');
            }
        })
        closeModalButton2.addEventListener('click', function() {
            if (!modal.classList.contains('hidden')) {
                modal.classList.add('hidden');
            }
        })
    </script>
@endsection
