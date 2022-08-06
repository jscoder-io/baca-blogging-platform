@pushOnce('include-css')
    @livewireStyles
@endPushOnce

@pushOnce('include-js-body')
    @livewireScripts
@endPushOnce

<div class="flex items-center justify-center pt-4">
    <div>
        <div class="pb-1 text-lg font-semibold text-gray-800">Subscribe to the newsletter</div>
        <form wire:submit.prevent="save" class="flex flex-col sm:flex-row">
            <div>
                <label class="sr-only" for="email-input">Email address</label>
                <input wire:model="subscriber.email"
                    autocomplete="email" 
                    class="w-72 rounded-md px-4 focus:border-transparent focus:outline-none focus:ring-2 focus:ring-teal-600" 
                    id="email-input" 
                    name="email" 
                    placeholder="Enter your email" 
                    required="" 
                    type="email">
            </div>
            <div class="mt-2 flex w-full rounded-md shadow-sm sm:mt-0 sm:ml-3">
                <button class="w-full rounded-md bg-teal-500 py-2 px-4 font-medium text-white sm:py-0 hover:bg-teal-700 focus:outline-none focus:ring-2 focus:ring-teal-600 focus:ring-offset-2" type="submit" wire:loading.attr="disabled">Sign up</button>
            </div>
        </form>
        @if ($_instance->hasError())
        <div><span class="text-red-700">{{ $_instance->getError() }}</span></div>
        @endif
        @if ($_instance->subscriber->exists)
        <div><span class="text-blue-700">Thank you!</span></div>
        @endif
    </div>
</div>