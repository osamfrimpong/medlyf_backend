@extends('layouts.frontTopOnly')

<!-- @section('contents') -->
<header class="headings">
    <p>TERMS AND CONDITIONS</p>
</header>

<section>
    <div class="myterms">
        <!-- <embed src="docs/TERMS.pdf" type="application/pdf"/>   -->
        <iframe src="{{asset('docs/termsCon.html')}}"> </iframe>
    </div>

</section>
<!-- @endsection -->