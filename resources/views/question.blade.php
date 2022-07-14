@include('header')

<div class="row mt-5">
    <div class="col">
        <div class="card">
            <div class="card-header bg-secondary">
                سوال
                {{$question->id}}

                از
                {{$total}}
            </div>
            <div class="card-body">

                <p class="card-text fw-bold fs-4 border border-white rounded-3 p-3 w-75 shadow p-3 mb-5 bg-body rounded">
                    {{ $question->text }}
                </p>

                <form method="post" action="/check-answer">

                    @foreach($question->answers as $answer)
                    <div class="form-check">
                        <input class="form-check-input mt-3  rounded-2 shadow " type="radio" value="{{$answer->id}}" name="answer" id="flexRadioDefault1">
                        <label class="form-check-label fs-5 mt-2 " for="flexRadioDefault1">
                            {{ $answer->text }}
                        </label>

                    </div>

                    @endforeach
                    <input type="hidden" name="question_id" value="{{$question->id}}" >
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <button type="submit"  class="btn btn-primary mt-3">بعدی</button>

                </form>


            </div>
        </div>
    </div>
</div>


</div>




@include("footer")
