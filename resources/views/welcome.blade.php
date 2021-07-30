@extends('app')

@section('page-title', 'welcome - ' . __('main.website-title'))

@section('content')
    <div id="under-construction" class="grid-y grid-frame">
        <div class="grid-x align-middle" style="height:100%;">
            <div class="cell text-center">
                <h3>Welcome to loiccharriere.ch</h3>
                <h5>This site is currently under construction.<br>Don't hesitate, visit it very soon!</h5>
                <div class="grid-x grid-padding-x align-center">
                    <a class="cell shrink" href="https://www.linkedin.com/in/loiccharriere/">/in/loiccharriere/</a>
                    <a class="cell shrink" href="https://github.com/lcharrie">github.com/lcharrie/</a>
                </div>
            </div>
        </div>
    </div>
@endsection
