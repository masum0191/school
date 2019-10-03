
@extends('layouts.admin')

@section('content')

<div class=" bg-white">
    <div class="row bg-dark">
        <div class="col-6">
                <h3 class="box-title text-white"><i class="fa fa-address-book"></i> Parent</h3>
        </div>


<div class="col-6 text-right">
    <nav>
        <ol class="breadcrumb bg-dark text-white">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="#">Parent</a></li>
            <li class="breadcrumb-item active">Add Parent</li>
        </ol>
    </nav>
</div>


    </div>
    {{-- {!! Form::open(['url' => '/processform', 'class' => 'form-horizontal']) !!} --}}

    {{-- <fieldset>

        <legend>Legend</legend> --}}

        <!-- Email -->
        <div class="form-group">
                {!! Form::label('name', 'Guardian Name:', ['class' => 'col-sm-2 control-label']) !!}
            <div class="col-sm-6">
                {!! Form::email('name', $value = null, ['class' => 'form-control', 'placeholder' => 'name']) !!}
            </div>
        </div>
        <div class="form-group">
                {!! Form::label('Designation', 'Father\'s Name:', ['class' => 'col-sm-2 control-label']) !!}
            <div class="col-sm-6">
                 {!! Form::email('Designation', $value = null, ['class' => 'form-control', 'placeholder' => 'Designation']) !!}
            </div>
        </div>
        <div class="form-group">
                {!! Form::label('date of Birth', 'Mother\'s Name:', ['class' => 'col-sm-2 control-label']) !!}
            <div class="col-sm-6">
                {!! Form::date('email', $value = null, ['class' => 'form-control', 'placeholder' => 'Date of Birth']) !!}
            </div>
        </div>
        <div class="form-group">
                {!! Form::label('Gender', 'Father\'s Profession:', ['class' => 'col-sm-2 control-label']) !!}
            <div class="col-sm-6">
               {!!  Form::select('select', ['S' => 'male', 'L' => 'female'],  'S', ['class' => 'form-control' ]) !!}
            </div>
        </div>


        <div class="form-group">
                {!! Form::label('Religion', 'Mother\'s Profession:', ['class' => 'col-sm-2 control-label']) !!}
            <div class="col-sm-6">
                {!! Form::email('Religion', $value = null, ['class' => 'form-control', 'placeholder' => 'Religion']) !!}
            </div>
        </div>
        <div class="form-group">
                {!! Form::label('email', 'Email:', ['class' => 'col-sm-2 control-label']) !!}
            <div class="col-sm-6">
                {!! Form::email('email', $value = null, ['class' => 'form-control', 'placeholder' => 'email']) !!}
            </div>
        </div>
        <div class="form-group">
                {!! Form::label('phone', 'Phone:', ['class' => 'col-sm-2 control-label']) !!}
            <div class="col-sm-6">
                {!! Form::email('phone', $value = null, ['class' => 'form-control', 'placeholder' => 'phone']) !!}
            </div>
        </div>
        <div class="form-group">
                {!! Form::label('Address', 'Address:', ['class' => 'col-sm-2 control-label']) !!}
            <div class="col-sm-6">
                {!! Form::email('Address', $value = null, ['class' => 'form-control', 'placeholder' => 'Address']) !!}
            </div>
        </div>





         <div class="form-group">
                {!! Form::label('Photo', 'Photo :', ['class' => 'col-sm-2 control-label']) !!}
            <div class="col-sm-6">
                {!! Form::file('Register', $value = null, ['class' => 'form-control']) !!}
            </div>
        </div>

         <div class="form-group">
                {!! Form::label('Username ', 'Username  : ', ['class' => 'col-sm-2 control-label']) !!}
            <div class="col-sm-6">
                {!! Form::email('Username ', $value = null, ['class' => 'form-control', ]) !!}
            </div>
        </div>

 <div class="form-group">
                {!! Form::label('Remarks', 'Password  : ', ['class' => 'col-sm-2 control-label']) !!}
            <div class="col-sm-6">
                {!! Form::password('password',['class' => 'form-control', 'placeholder' => 'Password', 'type' => 'password']) !!}
            </div>
        </div>

<!-- Submit Button -->
        <div class="form-group">
            <div class="col-lg-10 col-lg-offset-2">
                {!! Form::submit('Submit', ['class' => 'btn btn-lg btn-info pull-right'] ) !!}
            </div>
        </div>
        {{-- <!-- Password -->
        <div class="form-group">
            {!! Form::label('password', 'Password:', ['class' => 'col-lg-2 control-label']) !!}
            <div class="col-lg-10">
                {!! Form::password('password',['class' => 'form-control', 'placeholder' => 'Password', 'type' => 'password']) !!}
                <div class="checkbox">
                    {!! Form::label('checkbox', 'Checkbox') !!}
                    {!! Form::checkbox('checkbox') !!}
                </div>
            </div>
        </div>

        <!-- Text Area -->
        <div class="form-group">
            {!! Form::label('textarea', 'Textarea', ['class' => 'col-lg-2 control-label']) !!}
            <div class="col-lg-10">
                {!! Form::textarea('textarea', $value = null, ['class' => 'form-control', 'rows' => 3]) !!}
                <span class="help-block">A longer block of help text that breaks onto a new line and may extend beyond one line.</span>
            </div>
        </div>

        <!-- Radio Buttons -->
        <div class="form-group">
            {!! Form::label('radios', 'Radios', ['class' => 'col-lg-2 control-label']) !!}
            <div class="col-lg-10">
                <div class="radio">
                    {!! Form::label('radio1', 'This is option 1.') !!}
                    {!! Form::radio('radio', 'option1', true, ['id' => 'radio1']) !!}

                </div>
                <div class="radio">
                    {!! Form::label('radio2', 'This is option 2.') !!}
                    {!! Form::radio('radio', 'option2', false, ['id' => 'radio2']) !!}
                </div>
            </div>
        </div>

        <!-- Select With One Default -->
        <div class="form-group">
            {!! Form::label('select', 'Select w/Default', ['class' => 'col-lg-2 control-label'] )  !!}
            <div class="col-lg-10">
                {!!  Form::select('select', ['S' => 'Small', 'L' => 'Large', 'XL' => 'Extra Large', '2XL' => '2X Large'],  'S', ['class' => 'form-control' ]) !!}
            </div>
        </div>

        <!-- Select Multiple -->
        <div class="form-group">
            {!! Form::label('multipleselect[]', 'Multi Select', ['class' => 'col-lg-2 control-label'] )  !!}
            <div class="col-lg-10">
                {!!  Form::select('multipleselect[]', ['honda' => 'Honda', 'toyota' => 'Toyota', 'subaru' => 'Subaru', 'ford' => 'Ford', 'nissan' => 'Nissan'], $selected = null, ['class' => 'form-control', 'multiple' => 'multiple']) !!}
            </div>
        </div>

        <!-- Submit Button -->
        <div class="form-group">
            <div class="col-lg-10 col-lg-offset-2">
                {!! Form::submit('Submit', ['class' => 'btn btn-lg btn-info pull-right'] ) !!}
            </div>
        </div>

    </fieldset> --}}

    {{-- {!! Form::close()  !!} --}}

</div>
@endsection
