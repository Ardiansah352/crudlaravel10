<div>
    <div class="row">
        <x-adminlte-textarea name="iLabel" wire:model="messege" label="Pesan" placeholder="Silahkan ketik pesan"
            fgroup-class="col-md-6" disable-feedback/>
    </div>
    <div class="row">
        <x-adminlte-button wire:click="send" class="btn-flat" type="submit" label="Kirim" theme="success" icon="fas fa-paper-plane"/>
    </div>
</div>
