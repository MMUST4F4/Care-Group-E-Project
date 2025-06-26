@extends('userheaderdooter')
@section('usercontent')
<section id="news-details" style="padding:40px 0;">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1 col-sm-12">
                <div class="news-thumb">
                    <h2 class="section-title">{{ $news->title }}</h2>
                    <p>
                        <small>
                            @if($news->author)
                                By {{ $news->author }} |
                            @endif
                            {{ $news->created_at ? $news->created_at->format('F d, Y') : '' }}
                        </small>
                    </p>
                    @if($news->image)
                        <img src="{{ asset('storage/'.$news->image) }}" alt="News Image" class="img-responsive" style="margin-bottom:20px;">
                    @endif
                    <div class="news-info" style="font-size:18px;">
                        {!! nl2br(e($news->content)) !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection