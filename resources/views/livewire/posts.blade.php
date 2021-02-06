<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day --}}

    <label for="">Title</label>
    <input wire:model="title" type="text" class="form-control">
    @if ($errors->has('title'))
    <p style="color:red;">{{ $errors->first('title') }}</p>
    @endif

    <label for="">Content</label>
    <textarea wire:model="content" type="text" class="form-control"></textarea>
    @if ($errors->has('content'))
    <p style="color:red;">{{ $errors->first('content') }}</p>
    @endif

    <br>
    <button wire:click="save" class="btn btn-primary">Save</button>
</div>