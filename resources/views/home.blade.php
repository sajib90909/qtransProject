@extends('master')

@section('content')
    <div class="bg-light pb-5">
        @include('components.navbar')
        @include('components.slider')

        {{--            form--}}
        <div>
            <form action="{{ route('packages.save') }}" method="POST" id="package-form">
                {{ csrf_field() }}
                <div class="text-center h5 my-4"><strong>Package</strong> | Create package</div>
                <div class="p-4 m-4 border border-4 row">
                    <div class="col-6 px-5">
                        <div class="row">
                            <div class="col-6 mb-4">
                                <label for="">Package Type:</label>

                                @include('components.helper.input_radio', [
                                    'name' => 'package_type_id',
                                    'options' => $package_types,
                                ])

                            </div>
                            <div class="col-6 mb-4">
                                <label for="">Field of Text:</label>

                                @include('components.helper.input_radio', [
                                    'name' => 'field_of_text_id',
                                    'options' => $field_of_texts,
                                ])

                            </div>
                        </div>

                        @include('components.helper.input_text', [
                                    'name' => 'number_of_words',
                                    'placeholder' => 'Number of words',
                                ])
                        @include('components.helper.input_text', [
                            'name' => 'duration',
                            'placeholder' => 'Type duration',
                        ])
                        @include('components.helper.input_text', [
                            'name' => 'discount',
                            'placeholder' => 'Discount',
                        ])

                    </div>
                    <div class="col-6 px-5">
                        <div class="mb-4">
                            <div class="row" id="language-input">
                                @include('components.helper.input_option', [
                                    'name' => 'languages[]',
                                    'options' => $languages
                               ])
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <a onclick="appendInputOptions()" class="btn btn-primary text-white w-100 cursor-pointer">+ Add more</a>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-start mb-4">
                            <div class="pr-5">
                                <span>Is complementary</span>
                            </div>
                            <div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" required name="is_complementary" id="inlineRadio1" value="1">
                                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="is_complementary" id="inlineRadio2" value="0">
                                    <label class="form-check-label" for="inlineRadio2">No</label>
                                </div>
                            </div>
                        </div>

                        @include('components.helper.input_text', [
                            'name' => 'name',
                            'placeholder' => 'Type name',
                        ])
                        @include('components.helper.input_text', [
                            'name' => 'email',
                            'type' => 'email',
                            'placeholder' => 'Type email',
                        ])

                    </div>
                </div>
                <div class="text-center custom-border-bottom mb-5 pb-4">
                    <button class="btn btn-primary" type="submit">Calculate</button>
                    <a class="btn btn-primary text-white cursor-pointer" onclick="resetAll()">Reset</a>
                </div>
            </form>

            @include('components.footer')
        </div>
    </div>
    <script>
        const inputOptions = `@include('components.helper.input_option', [
                                'removeBtn' => true,
                                'name' => 'languages[]',
                                'options' => $languages
                           ])`

        function appendInputOptions(){
            $('#language-input').append(inputOptions)
        }

        function removeInputOptions(that){
            that.parentNode.parentNode.removeChild(that.parentNode);
        }

        function resetAll(){
            $('#package-form')[0].reset();
        }


    </script>
@endsection
