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
                    <button class="btn btn-primary btn-lg mt-5" data-bs-toggle="modal" data-bs-target="#stars">Começar a
                        jogar</button>
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
                <div class="alert alert-danger d-none" id="no-game">
                    Não existe jogo a decorrer.
                </div>
                <div id="game" class="d-none">
                    <div id="stars-text">
                        <p>084/2023 – sexta-feira - 20/10/2023 | 25 Créditos</p>
                        <p>Oferecido por direito.pt</p>
                        <p>Selecione 2 números</p>
                    </div>
                    <div class="row mt-2">
                        <div class="col-3">
                            <div class="square-button">
                                <button class="btn btn-primary">1</button>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="square-button">
                                <button class="btn btn-primary">2</button>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="square-button">
                                <button class="btn btn-primary">3</button>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="square-button">
                                <button class="btn btn-primary">4</button>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-3">
                            <div class="square-button">
                                <button class="btn btn-primary">5</button>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="square-button">
                                <button class="btn btn-primary">6</button>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="square-button">
                                <button class="btn btn-primary">7</button>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="square-button">
                                <button class="btn btn-primary">8</button>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-3">
                            <div class="square-button">
                                <button class="btn btn-primary">9</button>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="square-button">
                                <button class="btn btn-primary">10</button>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="square-button">
                                <button class="btn btn-primary">11</button>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="square-button">
                                <button class="btn btn-primary">12</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-large btn-success">Continuar</button>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    $(() => {
        const starsModal = document.getElementById('stars')
        starsModal.addEventListener('shown.bs.modal', event => {
            $.LoadingOverlay('show');
            $.get('/games/getActiveGames').then((resp) => {
                $.LoadingOverlay('hide');
                let stars = resp.stars;
                if(stars == null){
                    $('#no-game').removeClass('d-none');
                    $('#game').addClass('d-none');
                } else {
                    $('#no-game').addClass('d-none');
                    $('#game').removeClass('d-none');
                }
            });
        })
    });
</script>
@endsection

@section('styles')
<style>
    .square-button {
        width: 80px;
        height: 80px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .square-button button {
        height: 80px;
        width: 80px;
        font-size: 30px;
    }

    #stars-text p {
        font-size: 16px;
        font-weight: bold;
    }
</style>
@endsection