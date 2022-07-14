@include("header")


    <div class="row mt-5">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    آزمونک
                </div>
                <div class="card-body">
                    <h5 class="card-title">به آزمونک خوش آمدی</h5>
                    <p class="card-text">
                        تعداد سوالات این آزمون
                            {{$total}}
                        تا می باشد
                    </p>
                    <p class="card-text">
                        زمان آزمون :
                        {{$total/2}}                        دقیقه
                    </p>
                    <a href="/question/1" class="btn btn-primary">
                        بزن بریم
                    </a>
                </div>
            </div>
        </div>
</div>

@include("footer")

