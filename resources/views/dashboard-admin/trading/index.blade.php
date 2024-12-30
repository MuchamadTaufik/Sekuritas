@extends('dashboard-admin.layouts.main')

@section('container')
<div class="page-inner">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Trading View Configuration</div>
                </div>
                <div class="card-body">
                    @if(session()->has('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ isset($trading) ? route('trading.update', $trading->id) : route('trading.store') }}" method="POST">
                        @csrf
                        @if(isset($trading))
                            @method('PUT')
                        @endif
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="trading_view">Trading View Configuration</label>
                                    <textarea class="form-control @error('trading_view') is-invalid @enderror" 
                                              id="trading_view" 
                                              name="trading_view" 
                                              rows="10" 
                                              required>{{ old('trading_view', $trading->trading_view ?? '') }}</textarea>
                                    @error('trading_view')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="card-action">
                            <button type="submit" class="btn btn-primary">{{ isset($trading) ? 'Update' : 'Simpan' }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @if(isset($trading))
    <div class="row mt-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Preview Trading View</div>
                </div>
                <div class="card-body">
                    {!! $trading->trading_view !!}
                </div>
            </div>
        </div>
    </div>
    @endif
</div>
@endsection