@include("header")

<div class="row mt-5">
    <div class="col bg-light">
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home"
                        type="button" role="tab" aria-controls="nav-home" aria-selected="true">سوال ها
                </button>

            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <!-- دکمه سوال جدید -->

                <div class="col-2 mt-3">
                    <!-- Button trigger modal -->
                    <button type="button" id="btn_add" class="btn btn-primary p-2" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                        سوال جدید <i class="fas fa-plus"></i>
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                         aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">سوال جدید</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form method="post" action="new_questions">
                                        <div class="mb-3">
                                            <label  class="form-label">متن پرسش</label>
                                            <input type="text" name="question" class="form-control"
                                                   id="exampleInputEmail1" >

                                        </div>

                                        <hr>

                                        <button  class="btn btn-success btn-sm" type="button" onclick="add_answers()"><i class="fas fa-plus"></i></button>
                                        <button  class="btn btn-danger btn-sm" type="button" onclick="del_answers()"><i class="fas fa-minus"></i></button>

                                        <div id="answers" class="mt-3">
                                            <div class="mb-3">
                                                <label class="form-label"> پاسخ 1</label>
                                                <input type="text" name="answer[]"  class="form-control rounded-pill">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label"> پاسخ 2</label>
                                                <input type="text" name="answer[]" class="form-control rounded-pill">
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">پاسخ صحیح </label>
                                            <input type="number" min="1" max="8" name="true_answer" class="form-control w-25 rounded-pill">
                                        </div>

                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                        <button type="submit" class="btn btn-primary mt-3">ذخیره</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

                <!-- جدول سوال ها -->

                <div class="table-responsive">
                    <table class="table list-table table-secondary table-nowrap align-middle table-borderless ">
                        <thead>
                        <tr>
                            <th scope="col" class="ps-4" style="width: 50px;">
                                <div class="form-check font-size-16">
                                    <input type="checkbox" class="form-check-input" id="contacusercheck">
                                    <label class="form-check-label" for="contacusercheck"></label>
                                </div>
                            </th>
                            <th scope="col" style="width: 50px;">#</th>
                            <th scope="col">متن سوال</th>



                            <th scope="col" style="width: 150px;">ویرایش</th>
                        </tr>
                        </thead>


                        <tbody>

                        @foreach($questions as $question)

                        <tr class=" mt-2">
                            <th scope="row" class="ps-4">
                                <div class="form-check font-size-16">
                                    <input type="checkbox" class="form-check-input" id="contacusercheck1">
                                    <label class="form-check-label" for="contacusercheck1"></label>
                                </div>
                            </th>
                            <td>
                                {{$question->id}}
                            </td>
                            <td>
                                {{$question->text}}
                            </td>

                            <td>
                                <ul class="list-inline mb-0">
                                    <li class="list-inline-item">
                                        <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                           class="px-2 text-primary" data-bs-original-title="Edit"
                                           aria-label="Edit"><i class="far fa-edit fa-lg "></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                           class="px-2 text-danger" data-bs-original-title="Delete"
                                           aria-label="Delete"><i class="far fa-trash fa-lg "></i> </a>
                                    </li>

                                </ul>
                            </td>
                        </tr>

                        @endforeach

                        </tbody>

                    </table>
                </div>
            </div>

            <!-- جدول جواب ها -->

        </div>
    </div>


</div>



@include("footer")
