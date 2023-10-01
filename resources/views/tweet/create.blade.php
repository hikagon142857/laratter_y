<!-- resources/views/tweet/create.blade.php -->

<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Create New Tweet') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:w-8/12 md:w-1/2 lg:w-5/12">
      <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-800 ">
          @include('common.errors')
          <form class="mb-6" action="{{ route('tweet.store') }}" method="POST">
            @csrf
            <div class="flex flex-col mb-4">
              <x-input-label for="tweet" :value="__('Tweet')" />
              <x-text-input id="tweet" class="block mt-1 w-full" type="text" name="tweet" :value="old('tweet')" required autofocus />
              <x-input-error :messages="$errors->get('tweet')" class="mt-2" />
            </div>
            <div class="flex flex-col mb-4">
              <x-input-label for="user_id" :value="__('User_id')" />
              <x-text-input id="user_id" class="block mt-1 w-full" type="integer" name="user_id" :value="old('user_id')" required autofocus />
              <x-input-error :messages="$errors->get('user_id')" class="mt-2" />
            </div>
            <div class="flex flex-col mb-4">
              <x-input-label for="description" :value="__('Description')" />
              <x-text-input id="description" class="block mt-1 w-full" type="text" name="description" :value="old('description')" required autofocus />
              <x-input-error :messages="$errors->get('description')" class="mt-2" />
            </div>
            <div class="flex flex-col mb-4">
              <x-input-label for="BP" :value="__('BP')" />
              <x-text-input id="BP" class="block mt-1 w-full" type="integer" name="BP" :value="old('BP')" required autofocus />
              <x-input-error :messages="$errors->get('BP')" class="mt-2" />
            </div>
            <div class="flex flex-col mb-4">
              <x-input-label for="DL" :value="__('DL')" />
              <x-text-input id="DL" class="block mt-1 w-full" type="integer" name="DL" :value="old('DL')" required autofocus />
              <x-input-error :messages="$errors->get('DL')" class="mt-2" />
            </div>
            <div class="flex flex-col mb-4">
              <x-input-label for="SQ" :value="__('SQ')" />
              <x-text-input id="SQ" class="block mt-1 w-full" type="integer" name="SQ" :value="old('SQ')" required autofocus />
              <x-input-error :messages="$errors->get('SQ')" class="mt-2" />
            </div>
            <div class="flex items-center justify-end mt-4">
              <x-primary-button class="ml-3">
                {{ __('Create') }}
              </x-primary-button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>

