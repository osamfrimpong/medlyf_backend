@extends('layouts.front')

@section('contents')
<header class="headings">
    <h1>PRIVACY POLICY</h1>
</header>

<section>
    <div class="myterms">
        <!-- <embed src="docs/TERMS.pdf" type="application/pdf"/>   -->
        <iframe src="{{asset('docs/privacyPolicy.html')}}"> </iframe>
    </div>

</section>

@endsection