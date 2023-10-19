@extends('layouts.website')

@section('content')
<section>
    <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="col-lg-12 text-center mb-5">
                <h2 class="page-title">{{ $page->title }}</h2>
            </div>
        </div>

        <div class="row mb-5">

            <div class="d-md-flex post-entry-2 half">
                <div class="me-4 thumbnail">
                    @if ($page->description)
                    <div class="card mb-5">
                        <div class="card-body">
                            {{ $page->description }}
                        </div>
                    </div>
                    @endif
                    <img src="{{ $page->image->getUrl() }}" alt="{{ $page->title }}" class="img-fluid">
                    @if ($page->type == 2)
                    <button class="btn btn-primary btn-lg mt-5" data-bs-toggle="modal" data-bs-target="#stars">Começar a jogar</button>
                    @endif
                </div>
                <div class="ps-md-5 mt-4 mt-md-0">
                    {!! $page->text !!}
                </div>
            </div>

        </div>

    </div>
</section>

<!-- Modal -->
<div class="modal fade" id="stars" tabindex="-1" aria-labelledby="stars_label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="stars_label">Jogar</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <img src="/assets/estrelas.png" class="img-fluid">
            </div>
        </div>
    </div>
</div>
@endsection