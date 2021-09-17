<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('page-title', 'Resume | ' . __('main.website-title'))</title>
    <meta name="description"
    content="@yield('page-description', __('main.description-home'))">

    <!-- Styles -->
    <link href="{{ mix('css/resume.css') }}" rel="stylesheet" type="text/css">

    <!-- Scripts -->
    <script src="{{ mix('js/manifest.js') }}"></script>
    <script src="{{ mix('js/vendor.js') }}" defer></script>
    <script src="{{ mix('js/resume.js') }}" defer></script>
</head>

<body>
    <div id="resume" class="resume">
        <div class="grid-container">
            <div id="terminal" class="bash-shell"></div>
        </div>

        <template id="greetings">
    __  ___      ____
   /  |/  /_  __/ __ \___  _______  ______ ___  ___
  / /|_/ / / / / /_/ / _ \/ ___/ / / / __ `__ \/ _ \
 / /  / / /_/ / _, _/  __(__  ) /_/ / / / / / /  __/
/_/  /_/\__, /_/ |_|\___/____/\__,_/_/ /_/ /_/\___/
       /____/                         Loïc Charrière
        </template>
        <template id='cmd-contact'>
            <div class="grid-x">
                <span class="cell medium-3">
                    Software_Engineer<br>
                    <a class='simple' href='mailto:loic.charriere@ik.me'>loic.charriere@ik.me</a>
                </span>
                <span class="cell medium-3">
                    <a class='simple' href='tel:0041795788641'>0795788641</a><br>
                    2502 Biel/Bienne
                </span>
                <span class="cell medium-3">
                    <a href="https://www.linkedin.com/in/loiccharriere/" target="_blank">/in/loiccharriere/</a><br>
                    <a href="https://github.com/lcharrie" target="_blank">github.com/lcharrie</a>
                </span>
            </div>
        </template>
        <template id='cmd-skills'>
            <div class="grid-x">
                <span class="cell small-5 medium-2">Java<br>C#<br>Python<br>Unity3D</span>
                <span class="cell small-5 medium-2">Vuforia<br>Git<br>Scrum</span>
                <span class="cell small-5 medium-2">HTML5<br>CSS<br>PHP<br>JavaScript</span>
                <span class="cell small-5 medium-2">jQuery<br>MySQL<br>Laravel<br>VueJS</span>
            </div>
        </template>
        <template id='cmd-languages'>
            <div class="shell--output grid-x grid-margin-x">
                <div class="cell shrink">French<br>German and Swiss-German<br>English</div>
                <div class="cell auto">[##########]&nbsp;100%<br>[#######---]&nbsp;77%<br>[########--]&nbsp;81%</div>
            </div>
            <div class="shell--output">$</div>
        </template>
        <template id='cmd-list'>
            <div class="grid-x grid-padding-x">
                <span class="cell medium-4">
                    <button class='btn-cmd' data-cmd='clear'>clear</button><br>
                    <div>compile [<button class='btn-cmd' data-cmd='compile classic'>classic</button>|<button class='btn-cmd' data-cmd='compile dark'>dark</button>|<button class='btn-cmd' data-cmd='compile light'>light</button>]
                    </div>
                    <button class='btn-cmd' data-cmd='contact'>contact</button><br>
                    <button class='btn-cmd' data-cmd='education'>education</button>
                </span>
                <span class="cell medium-4">
                    <button class='btn-cmd' data-cmd='experience'>experience</button><br>
                    <button class='btn-cmd' data-cmd='help'>help</button><br>
                    <button class='btn-cmd' data-cmd='interests'>interests</button><br>
                    <button class='btn-cmd' data-cmd='languages'>languages</button>
                </span>
                <span class="cell medium-4">
                    <button class='btn-cmd' data-cmd='projects'>projects</button><br>
                    <button class='btn-cmd' data-cmd='resume'>resume</button><br>
                    <button class='btn-cmd' data-cmd='skills'>skills</button>
                </span>
            </div>
        </template>

    </body>

    </html>
