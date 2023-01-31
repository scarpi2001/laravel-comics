@extends('layouts.main-layout')

@section('title')
    <title>DC comics - Home</title>
@endsection

@section('content')
    <main>
        <section>
            <!-- container con labels e cards -->
            <div class="container">
                <span class="label">
                    CURRENT SERIES
                </span>
                
                <!-- contenitore cards -->
                <div class="cards_box">
                    <!-- card -->
                    <div class="card">
                        <figure>
                            <a href="details">
                                <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/09/AC1000_DLX_162-001_HD_5ba13723281ab0.37845353.jpg?itok=ZsI-C5eX">
                            </a>
                        </figure>

                        <span>dettagli</span>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection