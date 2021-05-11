@extends('layouts.admin')

@section('content')
    <div class="mt-3" />

    <section class="content">
        <div class="container-fluid">
            @if($errors->any())
                <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
                </ul>
            @endif

            <form class="form-horizontal" action="{{ route('reviews.update', $review) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="card card-primary">
                    <div class="card-header">
                        <h1 class="card-title">PAP Classification</h1>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="pip" class="col-form-label col-sm-3">Public Investment Program</label>
                            <div class="col-sm-9">
                                <div class="form-check-inline">
                                    <label for="pip_1" class="form-check-label">
                                        <input id="pip_1" type="radio" class="form-check-input" name="pip" value="1" @if(old('pip', $review->pip) == 1) checked @endif>
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check-inline">
                                    <label for="pip_0" class="form-check-label">
                                        <input id="pip_0" type="radio" class="form-check-input" name="pip" value="0" @if(old('pip', $review->pip) == 0) checked @endif>
                                        No
                                    </label>
                                </div>
                            </div>
                            @error('pip')<span class="error invalid-feedback">{{ $message }}</span>@enderror
                        </div>

                        <div class="form-group row">
                            <label for="pip_typology_id" class="col-sm-3">PIP Typology</label>
                            <div class="col-sm-9">
                                <select id="pip_typology_id" name="pip_typology_id" class="form-control @error('pip_typology_id') is-invalid @enderror">
                                    <option value="" selected disabled>Select Typology</option>
                                    @foreach($pip_typologies as $option)
                                        <option value="{{ $option->id }}" @if(old('pip_typology_id', $review->pip_typology_id) == $option->id) selected @endif>{{ $option->name }}</option>
                                    @endforeach
                                </select>
                                @error('pip_typology_id')<span class="error invalid-feedback">{{ $message }}</span>@enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="cip" class="col-form-label col-sm-3">Core Investment Program/Project</label>
                            <div class="col-sm-9">
                                <div class="form-check-inline">
                                    <label for="cip_1" class="form-check-label">
                                        <input id="cip_1" type="radio" class="form-check-input" name="cip" value="1" @if(old('pip', $review->cip) == 1) checked @endif>
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check-inline">
                                    <label for="cip_0" class="form-check-label">
                                        <input id="cip_0" type="radio" class="form-check-input" name="cip" value="0" @if(old('pip', $review->cip) == 0) checked @endif>
                                        No
                                    </label>
                                </div>
                                @error('pip')<span class="error invalid-feedback">{{ $message }}</span>@enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="cip_type_id" class="col-sm-3">CIP Type</label>
                            <div class="col-sm-9">
                                <select id="cip_type_id" name="cip_type_id" class="form-control @error('cip_type_id') is-invalid @enderror">
                                    <option value="" selected disabled>Select Typology</option>
                                    @foreach($cip_types as $option)
                                        <option value="{{ $option->id }}" @if(old('cip_type_id', $review->cip_type_id) == $option->id) selected @endif>{{ $option->name }}</option>
                                    @endforeach
                                </select>
                                @error('cip_type_id')<span class="error invalid-feedback">{{ $message }}</span>@enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="trip" class="col-form-label col-sm-3">Three-Year Rolling Infrastructure Program/Project</label>
                            <div class="col-sm-9">
                                <div class="form-check-inline">
                                    <label for="trip_1" class="form-check-label">
                                        <input id="trip_1" type="radio" class="form-check-input" name="trip" value="1" @if(old('trip', $review->trip) == 1) checked @endif>
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check-inline">
                                    <label for="trip_0" class="form-check-label">
                                        <input id="trip_0" type="radio" class="form-check-input" name="trip" value="0" @if(old('trip', $review->trip) == 0) checked @endif>
                                        No
                                    </label>
                                </div>
                                @error('trip')<span class="error invalid-feedback">{{ $message }}</span>@enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="trip" class="col-form-label col-sm-3">Readiness Level</label>
                            <div class="col-sm-9">
                                <select id="readiness_level_id" name="readiness_level_id" class="form-control">
                                    <option value="" selected disabled>Select Readiness Level</option>
                                    @foreach($readiness_levels as $option)
                                        <option value="{{ $option->id }}" @if(old('readiness_level_id', $review->readiness_level_id) == $option->id) selected @endif>{{ $option->name }}</option>
                                    @endforeach
                                </select>
                                @error('readiness_level_id')<span class="error invalid-feedback">{{ $message }}</span>@enderror
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card card-primary">
                    <div class="card-header">
                        <div class="card-title">PIPOL Information &amp; Status</div>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="pipol_code" class="col-form-label col-sm-3">PIPOL Code</label>
                            <div class="col-sm-9">
                                <input type="text" id="pipol_code" class="form-control" name="pipol_code" value="{{ old('pipol_code', $review->pipol_code) }}" placeholder="2020-12345-12345">
                                @error('pipol_code')<span class="error invalid-feedback">{{ $message }}</span>@enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="pipol_url" class="col-form-label col-sm-3">Link to PIPOL Entry</label>
                            <div class="col-sm-9">
                                <input type="text" id="pipol_url" class="form-control" name="pipol_url" value="{{ old('pipol_url', $review->pipol_url) }}" placeholder="https://pipolv2.neda.gov.ph/viewprojects/[project_code]">
                                @error('pipol_url')<span class="error invalid-feedback">{{ $message }}</span>@enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="pipol_statuses" class="col-form-label col-sm-3">Status</label>
                            <div class="col-form-9">
                                <div class="form-check">
                                    <label for="pipol_encoded" class="form-check-label">
                                        <input id="pipol_encoded" name="pipol_encoded" type="checkbox" class="form-check-input" value="1" @if(old('pipol_encoded', $review->pipol_encoded)) checked @endif>
                                        Encoded by IPD
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label for="pipol_finalized" class="form-check-label">
                                        <input id="pipol_finalized" name="pipol_finalized" type="checkbox" class="form-check-input" value="1" @if(old('pipol_finalized', $review->pipol_finalized)) checked @endif>
                                        Finalized by IPD
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label for="pipol_endorsed" class="form-check-label">
                                        <input id="pipol_endorsed" name="pipol_endorsed" type="checkbox" class="form-check-input" value="1" @if(old('pipol_endorsed', $review->pipol_endorsed)) checked @endif>
                                        Endorsed by IPD
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label for="pipol_validated" class="form-check-label">
                                        <input id="pipol_validated" name="pipol_validated" type="checkbox" class="form-check-input" value="1" @if(old('pipol_validated', $review->pipol_validated)) checked @endif>
                                        Validated by NEDA
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="comments" class="col-form-label col-sm-3">Comments</label>
                            <div class="col-sm-9">
                                <textarea id="comments" name="comments" rows="4" class="form-control" placeholder="Any comment...">{{ old('comments', $review->comments) }}</textarea>
                                @error('comments')<span class="error invalid-feedback">{{ $message }}</span>@enderror
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{ route('reviews.index') }}" class="btn">Go Back to List</a>
                </div>

            </form>
        </div>
    </section>
@endsection
