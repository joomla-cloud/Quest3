@foreach($questions as $question)
    <!-- Questions -->
    <div class="card mb-4">
        <div class="card-body">
            <h2 class="card-title">{{$question['question']}}</h2>
        </div>
    </div>
@endforeach
