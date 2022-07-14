@include('header')

<div class="d-flex justify-content-center">
    <div class="card  mt-3 mb-3 w-25 d-flex align-items-center" >
        <img src="img/checkmark.png" class="card-img-top w-75" alt="...">
        <div class="card-body">
            <h5 class="card-title">
                امتیاز شما برابر است با :

                {{$user_score}}
            </h5>
            <p class="card-text">


            <p class="card-text"><small class="text-muted">زمان سپری شده :</small></p>
        </div>
    </div>
</div>



</div>

@include("footer")
