<div class="row justify-content-center">
    <div class="col-12">
        <div class="card shadow  text-white bg-dark">
            <div class="card-header">{{ __('Dashboard') }}</div>
            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                {{ __('Hamza Moeen') }}
            </div>
        </div>
    </div>
</div>
