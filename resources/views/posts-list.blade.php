@foreach($tests as $test)
    <!-- Tests -->
    <div class="card mb-4">

        <div class="card-body">
            <h2 class="card-title">{{$test['title']}}</h2>
            <p class="card-text">
{{\Illuminate\Support\Str::limit(strip_tags($test['content']), 200, '...')}}</p>
            <a href="/test/{{$test['slug']}}" class="btn btn-primary">Read More </a>
        </div>
    </div>
@endforeach
