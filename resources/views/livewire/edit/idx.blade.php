<div>
    @section('content')
    <br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card card-outline card-primary">
                    <div class="card-header">
                        <b>Messege</b> | Edit
                    </div>
                    <div class="card-body">
                        <livewire:edit.page :newsId="$newsId">
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
</div>
