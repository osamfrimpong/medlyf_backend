@extends('layouts.front')

@section('contents')
<header class="headings">
    <h1>TERMS AND CONDITIONS</h1>
</header>

<section>
    <div class="myterms">
        <!-- <embed src="docs/TERMS.pdf" type="application/pdf"/>   -->
        <iframe src="{{asset('docs/termsCon.html')}}"> </iframe>
    </div>

</section>
@endsection