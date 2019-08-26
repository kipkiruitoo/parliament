@extends('layouts.manage')

@section('content')
<div class="flex-container">
    <section class="hero is-primary m-b-30 p-l-30 p-b-30">
        <div class="hero-content">
            <div class="columns">
                <div class="column">
                    p
                </div>
            </div>
        </div>
    </section>
    <div class="columns">
        <div class="column is-6">
            <div class="card">
                {{--  <div class="card-header">
                    <div class="card-header-title">
                            <h1 class="title">Users</h1>
                    </div>
                </div>  --}}
                <div class="card-content">
                        {!! $userschart->html() !!}
                </div>
            </div>
            
        </div>
        <div class="column">
            <div class="card">
                <div class="card-content">
                    {!! $billschart->html() !!}
                </div>
            </div>
        </div>
    </div>
    <div class="columns">
        <div class="column is-6">
            <div class="card">
                <div class="card-content">
                    {!! $petitionschart->html() !!}
                </div>
            </div>
        </div>
    </div>
</div>
    
{!! Charts::scripts() !!}
{!! $userschart->script() !!}
{!! $billschart->script( ) !!}
{!! $petitionschart->script() !!}
@endsection