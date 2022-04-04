<div>
    <div class="container mt-3">
        @if (session('msg'))
            <p class="msg">{{ session('msg') }}</p>
        @endif
        <h1>Rick and Morty</h1>
        <div class="rom justify-content-center">
            <div class="col-8 d-flex flex-wrap flex-column">
                <div class="input-group">
                    <input wire:model="name" type="text" class="form-control mt-3" placeholder="Pesquisar Personagem"
                        wire:keydown.enter="salve">
                    <button wire:loading.attr="disabled" wire:click="salve" type="button"
                        class="btn btn-primary mt-3">
                        <span wire:loading wire:target="salve" class="spinner-border spinner-border-sm" role="status"
                            aria-hidden="true"></span>
                        Pesquisar
                    </button>
                </div>
            </div>
            @if ($errors->has('name'))
                <span>{{ $errors->first('name') }}</span>
            @endif
            @if ($resultado)
                <div class="card mt-3 shadow">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="{{ $resultado['results'][0]['image'] }}" alt="{{ $name }}"
                                class="card-img">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title" id="name" name="name" >Personagem: {{ $resultado['results'][0]['name'] }}</h5>
                                <p id="species" name="species">Espécie: {{ $resultado['results'][0]['species'] }}</p>
                                <p id="gender" name="gender">Gênero sexual: {{ $resultado['results'][0]['gender'] }}</p>
                                <p id="status" name="status">Status: {{ $resultado['results'][0]['status'] }}</p>
                                <form method="POST" wire:submit.prevent="create">
                                    @csrf
                                    <button type="submit" class="btn btn-secondary">Salvar Personagem</button>
                                </form>
                            </div>
                        </div>
                    </div>
            @endif
        </div>
        <div>
            {{-- @foreach ((array)$resultado as $result)
                {{ $result }}
            @endforeach --}}
        </div>
    </div>
</div>
</div>
