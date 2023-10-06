@extends('layout')

@section('content')
    <div class="row d-flex justify-content-center">
        <div class="col-md-8 col-lg-6">
            <div class="card shadow-0 border" style="background-color: #f0f2f5;">
                <div class="card-body p-4">
                    <div class="form-outline mb-4 text-center">
                        <h3>List Materi Diskusi</h3>
                    </div>
                    <ol class="list-group list-group-numbered">
                        @foreach ($materi as $item)
                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">Materi {{ $item->id }}</div>
                                    <a href="{{ route('diskusi.materi', $item->id) }}"> {{ $item->nama }}</a>
                                </div>
                                <span class="badge my-auto bg-primary rounded-pill">{{ $item->diskusi->count() }}</span>
                            </li>
                        @endforeach
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Diskusi</h5>
                    <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('diskusi.tambah') }}" method="POST">
                        @csrf
                        <div class="form-outline border mb-2">
                            <input type="text" id="typeText" name="nama" class="form-control" required />
                            <label class="form-label" for="typeText">Nama</label>
                        </div>
                        <div class="form-outline border">
                            <textarea class="form-control" id="textAreaExample" name="pesan" rows="4" required></textarea>
                            <label class="form-label" for="textAreaExample">Pesan</label>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Post</button>
                </div>
                </form>
            </div>
        </div>
    </div>
@endsection
