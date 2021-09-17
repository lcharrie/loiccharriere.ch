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
        <div class="grid-container full">
            <div class="bash-shell">
                <div class="shell--system">
                    <span class="shell--filepath">loiccharriere@127.0.0.1:/home/loic&nbsp;$</span> <span class="shell--command">resume</span> <span class="shell--option">-applicant</span> <span class="shell--param">loïc_charrière</span>
                </div>
                <div class="shell--output grid-x">
                    <div class="cell medium-3">
                        Software_Engineer<br>
                        loic.charriere@ik.me
                    </div>
                    <div class="cell medium-3">
                        0795788641<br>
                        2502 Biel/Bienne
                    </div>
                    <div class="cell medium-3">
                        <a href="https://www.linkedin.com/in/loiccharriere/" target="_blank">/in/loiccharriere/</a><br>
                        <a href="https://github.com/lcharrie" target="_blank">github.com/lcharrie</a>
                    </div>
                </div>
                <div class="shell--output">$</div>
                <span class="shell--filepath">loiccharriere@127.0.0.1:/home/loic&nbsp;$</span> <span class="shell--command">Summary</span>
                <div class="shell--output">
                    Hello I’m Loïc Charrière. After my studies, I founded my start-up with an architect friend in the field of augmented reality. I enjoy the raw beauty of clean and optimized code, and the satisfaction of seeing my work exceed my client’s expectations.
                </div>
                <div class="shell--output">$</div>
                <span class="shell--filepath">loiccharriere@127.0.0.1:/home/loic&nbsp;$</span> <span class="shell--command">Experience</span>
                <div class="shell--output">2019-Current</div>
                <div class="shell--output strong">Co-Founder Argon Studio SNC</div>
                <div class="shell--output">
                    As co-director and main work force, I am confronted with all the challenges of starting a company, from production to business strategy, promotion, accounting and annual reports. I develop mobile applications allowing users to discover plans of apartments and buildings in 3D though augmented reality, as well as low cost virtual reality immersion using Google Cardboard. I support different actors in the field of architecture and real estate in their creation and promotion process. I also conducted workshops on the creation of artworks in augmented reality for students at the HES-SO.
                </div>
                <div class="shell--output">$</div>
                <div>
                    <span class="shell--filepath">loiccharriere@127.0.0.1:/home/loic&nbsp;$</span> <span class="shell--command">Projects</span>
                </div>
                <div>
                    <span class="shell--output strong">Argon XR - Mixed Reality</span>
                    <span class="shell--option">-link</span>
                    <span class="shell--output">
                        <a href="https://github.com/ArgonStudioSNC/ArgonXR" target="_blank">github.com/ArgonStudioSNC/ArgonXR</a>
                    </span>
                </div>
                <div class="shell--output">Mobile platform for augmented reality and virtual reality projects for architecture, art and education</div>
                <div class="shell--output">[x] Main product of our start-up</div>
                <div class="shell--output">[x] I receive 3D models, I am then in charge of all the steps until the app publication.</div>
                <div class="shell--output">[x] Used: Unity3D, Vuforia, C#, Unity CCD</div>
                <div class="shell--output">$</div>
                <div class="shell--output strong">Mobile application for a wedding</div>
                <div class="shell--output">[x] With backend and API, and features such as registration and communication with guests, accommodation solutions, interactive schedule, news feed, games and quizzes, photo album.</div>
                <div class="shell--output">[x] I was responsible for the whole production process from the moment I received the layouts</div>
                <div class="shell--output">[x] Used: Unity3D, C#, HTML5, PHP, MySQL, Laravel</div>
                <div class="shell--output">$</div>
                <div class="shell--output strong">Various websites and web applications</div>
                <div class="shell--output">[x] Full Stack development for private clients and universities</div>
                <div class="shell--output">[x] Used: HTML5, PHP, JavaScript, Node.js, Composer, npm, MySQL, Laravel, Foundation</div>
                <div class="shell--output">$</div>
                <div class="shell--output strong">Bachelor Thesis - VarroApp</div>
                <div class="shell--output">Application for Varroa Mites detection</div>
                <div class="shell--output">[x] Helps beekeepers in the fight against the Varroa parasite by counting dead mites based on a photo and using automated image processing techniques</div>
                <div class="shell--output">[x] Used: Python, Java, C++, Android Studio</div>
                <div class="shell--output">$</div>
                <span class="shell--filepath">loiccharriere@127.0.0.1:/home/loic&nbsp;$</span> <span class="shell--command">Education</span>
                <div class="shell--output">2016-2018</div>
                <div class="shell--output strong">B.S. in Computer Science with specialisation in “Computer Perception and Virtual Reality”</div>
                <div class="shell--output">Bern University of Applied Sciences</div>
                <div class="shell--output">$</div>
                <div class="shell--output">2013-2016</div>
                <div class="shell--output strong">Computer Science with track “Visual Computing”</div>
                <div class="shell--output">École Polytechnique Fédérale de Lausanne</div>
                <div class="shell--output">!incomplete with 148 ECTS</div>
                <div class="shell--output">$</div>
                <span class="shell--filepath">loiccharriere@127.0.0.1:/home/loic&nbsp;$</span> <span class="shell--command">Skills</span>
                <div class="shell--output grid-x">
                    <div class="cell small-5 medium-2">C#<br>Python<br>Unity3D<br>Vuforia</div>
                    <div class="cell small-5 medium-2">HTML5<br>CSS<br>PHP<br>JavaScript</div>
                    <div class="cell small-5 medium-2">jQuery<br>MySQL<br>Laravel<br>VueJS</div>
                    <div class="cell small-5 medium-2">Java<br>Git<br>Scrum</div>
                </div>
                <div class="shell--output">$</div>
                <div class="shell--output">
                    <span class="shell--filepath">loiccharriere@127.0.0.1:/home/loic&nbsp;$</span> <span class="shell--command">Languages</span>
                    <div class="shell--output grid-x grid-margin-x">
                        <div class="cell shrink">French<br>German and Swiss-German<br>English</div>
                        <div class="cell auto">[##########]&nbsp;100%<br>[#######---]&nbsp;77%<br>[########--]&nbsp;81%</div>
                    </div>
                    <div class="shell--output">$</div>
                    <span class="shell--filepath">loiccharriere@127.0.0.1:/home/loic&nbsp;$</span> <span class="shell--command">Interests</span>
                    <div class="shell--output">Clarinet since I was 8 - Ensemble Clarmonics, Musique des Jeunes de Bienne</div>
                    <div class="shell--output">Badminton - Committee & Club Treasurer</div>
                    <div class="shell--output">Politics - Les Vert·e·s, member and city council candidate</div>
                    <div class="shell--output">PC gaming (mostly MMORPG)</div>
                    <div class="shell--output">[x] Through several community engagements, I have acquired a solid experience in planning and managing large projects</div>
                </div>
            </div>
        </div>
    </body>

    </html>
