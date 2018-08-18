@extends('layouts.front.app')

@section('og')
    <meta property="og:type" content="How to brew"/>
    <meta property="og:title" content="{{ config('app.name') }}"/>
    <meta property="og:description" content="{{ config('app.name') }}"/>
@endsection

@section('content')
    <section id="content" class="hero-section content-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="hero-content">
                        <div>
                            <h4 class="line-in-the-middle"><span>Floretique</span></h4>
                        </div>
                        <h2 style="text-align:center">FQA / POLICY</h2>
                        <div style="width:65%;" class="line-at-bottom"></div>
                        <p>test test test</p>
                        <p>test test test</p>
                        <p>test test test</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection