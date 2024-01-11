
@props(['head','id'])

@php
    if($id>0){
       $action='Editar';
    }else{
        $action='Crear';
    };
@endphp
<x-dialog-modal wire:model="modal" >
    <x-slot:title >
        {{ $head }} | {{$action}}
    </x-slot:title>
    <x-slot:content>
       {{$slot}}
    </x-slot:content>
    <x-slot:footer>
        <x-secondary-button wire:click="closemodal" wire:loading.attr="disabled">
            Cancelar
        </x-secondary-button>

        @if ($id>0)
        <x-button wire:click="update" class="ml-2" >
            Editar
        </x-button>
        @else
        <x-button  wire:click="create" wire:loading.attr="disabled" class="ml-2" >
            Crear
        </x-button>
        @endif
    
    </x-slot:footer>
   </x-dialog-modal>