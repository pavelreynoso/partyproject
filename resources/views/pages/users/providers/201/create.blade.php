@extends('layouts.register')

@section('content')

<div class="page-wrapper bg-gra-03 p-t-15 p-b-100 font-poppins">
    <div class="wrapper wrapper--w900">
        <div class="card card-4">
            <div class="card-body">
                <h2 class="title">Let's define what you offer.</h2>
                <form action=" {{ route('affiliates.r201.store') }} " method="POST">
                    @csrf
                    <div id="packageName">
                        <form id="messageForm">
                            <div class="questions">Write the name of the product or service you offer:
                                <div class="p-b-15"></div>
                                <input type="Text" id="package_name" class="input_text_big" name="Business_name"
                                    placeholder="">
                                <span class="text-besides" id="charactersRemainingName">50</span>
                                <span class="text-besides"> characters left</span>
                            </div>
                        </form>
                    </div>
                    <div class="p-b-15"></div>
                    <div id="packageDescription">
                        <form id="messageForm">
                            <div class="questions">Describe everything it includes:
                                <div class="p-b-15"></div>
                                <textarea id="package_description" name="package_description" style="input_text_big"
                                    minlength="5" maxlength="200"></textarea>
                                <span class="text-besides" id="charactersRemainingDescription">200</span>
                                <span class="text-besides"> characters left</span>
                            </div>
                        </form>
                    </div>

                    <div class="p-b-15"></div>
                    <div class="questions">Add your offer's portrait. This is what the clients will see first and thus should be the best photo you have:
                        <div class="p-b-15"></div>
                        <div class="avatar-upload col-6">
                            <div class=" form-group avatar-edit">
                                <input type='file' id="portrait" name="portrait" accept=".png, .jpg, .jpeg" />
                                <label for="imageUpload"></label>
                            </div>
                        </div>
                        <div class="p-b-15"></div>
                    </div>
                    <div class="questions">Add some other pictures so that your customers know your offer better.
                        <div class="p-b-15"></div>
                        <div class="avatar-upload col-6">
                            <div class=" form-group avatar-edit">
                                <input type='file' id="image" name="image[]" accept=".png, .jpg, .jpeg" />
                                <label for="imageUpload"></label>
                            </div>
                        </div>
                        <div class="p-b-15"></div>
                    </div>
                    <div class="questions">What does it cost? Please note that we will deduct a 2% fee to this cost as per our agreement. To check more, please refer to Terms & Conditions.
                        <div class="p-b-15"></div>
                        $<input type="text" class="input_text" name="Based_package_price"> MXN
                    </div>

                    <div class="p-b-15"></div>
                    <div class="p-b-15 center">
                        <a href="{{ route('affiliates.r212.create') }}">
                            <button class="btn2 btn--radius-2 btn-feval" type="submit">Back</button>
                        </a>
                        <a href="{{ route('affiliates.r302.create') }}">
                            <button class="btn2 btn--radius-2 btn-feval" type="submit">Continue</button>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
@section('scripts')
<script type="text/javascript" src="{{asset('../js/201.js')}}"></script>
@endsection
