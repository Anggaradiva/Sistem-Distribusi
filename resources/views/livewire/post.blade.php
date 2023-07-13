<div>
    <div class="col-md-12 mb-2">
        <div class="card">
            <div class="card-body">
                @if(session()->has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session()->get('success') }}
                    </div>
                @endif
 
                @if(session()->has('error'))
                    <div class="alert alert-danger" role="alert">
                        {{ session()->get('error') }}
                    </div>
                @endif
 
                @if($updatePost)
                    @include('livewire.update')
                @else
                    @include('livewire.create')
                @endif
            </div>
        </div>
    </div>
 
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Nilai rata-rata</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($posts) > 0)
                                @foreach ($posts as $rs)
                                    <tr>
                                        <td>
                                            {{$rs->name}}
                                        </td>
                                        <td>
                                            {{$rs->description}}
                                        </td>
                                        <td>
                                            <button wire:click="edit({{$rs->id}})" class="btn btn-primary btn-sm">Edit</button>
                                            <button onclick="deletePost({{$rs->id}})" class="btn btn-danger btn-sm">Delete</button>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="3" align="center">
                                        No post Found.
                                    </td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
 
    <script>
        function deletePost(id){
            if(confirm("Are you sure to delete this record?"))
                window.livewire.emit('deletePost',id);
        }
    </script>
</div>