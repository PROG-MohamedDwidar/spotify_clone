<x-app-layout>
    <x-slot name="title">
        mixer
    </x-slot>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}
    <div class="h-full overflow-hidden flex flex-col">
        <div class="inline-block flex flex-row" style="height:83%;">
            <div class="inline-block w-full overflow-scroll">
            <x-auth-card>
                <x-slot name="logo">
                    <a href="/">
                        <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                    </a>
                </x-slot>
        
                <form method="POST" action={{route('users.submitDonation')}} onsubmit = "return donateFormValidate()">
                    @csrf
                    @method("post")
                    <!-- amount -->
                    <div>
                        <x-input-label for="amount" :value="__('amount')" />
        
                        <x-text-input id="amount" onchange="validateAmount()" class="block mt-1 w-full" type="number" name="amount" :value="old('5')" required autofocus />
                        <div id="amountError" class="'text-sm text-red-600 space-y-1'"></div>
                    </div>
                    <!-- card name -->
                    <div>
                        <x-input-label for="cardName" :value="__('card holder name')" />
        
                        <x-text-input id="name" onChange="validateName()" class="block mt-1 w-full" type="text" name="cardName" :value="old('name')" required autofocus />
                        <div id="nameError" class="'text-sm text-red-600 space-y-1'"></div>
                    </div>
        
                    <!-- card number -->
                    <div>
                        <x-input-label for="cardNum" :value="__('card number')" />
        
                        <x-text-input id="cnum" onchange="validateCard()" class="block mt-1 w-full" type="text" name="cardNum" :value="old('name')" required autofocus />
                        <div id="cardNumError" class="'text-sm text-red-600 space-y-1'"></div>
                    </div>
                    
                    <!-- card exp -->
                    <div>
                        <x-input-label class="inline-block" for="cardexpm" :value="__('Expiry month')" />
        
                        <x-text-input id="cexpm" onchange="validateMonth()" class="inline-block mt-1 ml-1 w-16" type="text" name="cardexpm" :value="old('name')" required autofocus />
                        

                        <x-input-label class="inline-block ml-1" for="cardexpy" :value="__('Expiry year')" />
        
                        <x-text-input id="cexpy" class="inline-block mt-1 ml-1 w-16" type="text" name="cardexpy" :value="old('name')" required autofocus />
                        <div id="monthError" class="'text-sm text-red-600 space-y-1'"></div>
                    </div>
                    <!-- Password -->
                    <div class="mt-4">
                        <x-input-label for="password" :value="__('Pin')" />
        
                        <x-text-input id="password" class="block mt-1 w-full"
                                        type="number"
                                        name="password"
                                        onChange="validatePin()"
                                        required />
        
                        <div id="pinError" class="'text-sm text-red-600 space-y-1'"></div>
                    </div>
        
                    <div class="flex items-center justify-end mt-4">
                        
        
                        <x-primary-button class="ml-4">
                            {{ __('pay') }}
                        </x-primary-button>
                    </div>
                </form>
            </x-auth-card>
            </div>
        </div>
            
            
            <x-player.player>
                
            </x-player.player>
           
        
    </div>
</x-app-layout>
