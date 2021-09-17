require('./foundation.js');
require('jquery.terminal');

var prompt;
var animation = false;

$(function() {
    var shell = $('#terminal').terminal({
        contact: () => new Promise((resolve, reject) => {
            shell.echo($("<span class='section-header'>contact</span>"));
            setTimeout(() => resolve(), 100);
        }).then(function() {
            shell.echo($($('#cmd-contact').html()));
            return new Promise((resolve, reject) => {setTimeout(() => resolve('$'), 200);});
        }),
        experience: () => new Promise((resolve, reject) => {
            shell.echo($("<span class='section-header'>projects</span>"));
            setTimeout(() => resolve(), 100);
        }).then(function() {
            shell.echo('2019-Current');
            shell.echo($("<span class='strong'>co-founder Argon Studio snc</span>"));
            setTimeout(() => {
                shell.echo('As co-director and main work force, I am confronted with all the challenges of starting a company, from production to business strategy, promotion, accounting and annual reports. I develop mobile applications allowing users to discover plans of apartments and buildings in 3D though augmented reality, as well as low cost virtual reality immersion using Google Cardboard. I support different actors in the field of architecture and real estate in their creation and promotion process. I also conducted workshops on the creation of artworks in augmented reality for students at the HES-SO.');
                resolve('$');
            }, 100);
        }).then(function() {
            return new Promise((resolve, reject) => {setTimeout(() => resolve('$'), 200);});
        }),
        projects: () => new Promise((resolve, reject) => {
            shell.echo($("<span class='section-header'>projects</span>"));
            setTimeout(() => resolve(), 100);
        }).then(function(result) {
            shell.echo($("<span class='strong'>Argon XR - Mixed Reality</span> -link <a href='https://github.com/ArgonStudioSNC/ArgonXR' target='_blank'>github.com/ArgonStudioSNC/ArgonXR</a>"));
            return new Promise((resolve, reject) => {setTimeout(() => resolve(), 50);});
        }).then(function(result) {
            shell.echo('Mobile platform for augmented reality and virtual reality projects for architecture, art and education');
            shell.echo('[x] Main product of our start-up');
            shell.echo('[x] I receive 3D models, I am then in charge of all the steps until the app publication.');
            shell.echo('[x] Used: Unity3D, Vuforia, C#, Unity CCD');
            return new Promise((resolve, reject) => {setTimeout(() => resolve('$'), 100);});
        }).then(function(result) {
            shell.echo(result);
            shell.echo($("<span class='strong'>Mobile application for a wedding</span>"));
            return new Promise((resolve, reject) => {setTimeout(() => resolve(), 50);});
        }).then(function(result) {
            shell.echo('[x] With backend and API, and features such as registration and communication with guests, accommodation solutions, interactive schedule, news feed, games and quizzes, photo album.');
            shell.echo('[x] I was responsible for the whole production process from the moment I received the layouts');
            shell.echo('[x] Used: Unity3D, C#, HTML5, PHP, MySQL, Laravel');
            return new Promise((resolve, reject) => {setTimeout(() => resolve('$'), 100);});
        }).then(function(result) {
            shell.echo(result);
            shell.echo($("<span class='strong'>Various websites and web applications</span>"));
            return new Promise((resolve, reject) => {setTimeout(() => resolve(), 50);});
        }).then(function(result) {
            shell.echo('[x] Full Stack development for private clients and universities');
            shell.echo('[x] Used: HTML5, PHP, JavaScript, Node.js, Composer, npm, MySQL, Laravel, Foundation');
            return new Promise((resolve, reject) => {setTimeout(() => resolve('$'), 100);});
        }).then(function(result) {
            shell.echo(result);
            shell.echo($("<span class='strong'>Bachelor Thesis - VarroApp</span>"));
            return new Promise((resolve, reject) => {setTimeout(() => resolve(), 50);});
        }).then(function(result) {
            shell.echo('Application for Varroa Mites detection');
            shell.echo('[x] Helps beekeepers in the fight against the Varroa parasite by counting dead mites based on a photo and using automated image processing techniques');
            shell.echo('[x] Used: Python, Java, C++, Android Studio');
            return new Promise((resolve, reject) => {setTimeout(() => resolve('$'), 200);});
        }),
        education: () => new Promise((resolve, reject) => {
            shell.echo($("<span class='section-header'>education</span>"));
            setTimeout(() => resolve(), 100);
        }).then(function(result) {
            shell.echo('2016-2018');
            shell.echo($("<span class='strong'>B.S. in Computer Science with specialisation in “Computer Perception and Virtual Reality”</span>"));
            shell.echo('Bern University of Applied Sciences');
            return new Promise((resolve, reject) => {setTimeout(() => resolve('$'), 100);});
        }).then(function(result) {
            shell.echo(result);
            shell.echo('2013-2016');
            shell.echo($("<span class='strong'>Computer Science with track “Visual Computing”</span>"));
            shell.echo('École Polytechnique Fédérale de Lausanne');
            shell.echo('!incomplete with 148 ECTS');
            return new Promise((resolve, reject) => {setTimeout(() => resolve('$'), 200);});
        }),
        skills: () => new Promise((resolve, reject) => {
            shell.echo($("<span class='section-header'>skills</span>"));
            setTimeout(() => resolve(), 100);
        }).then(function(result) {
            shell.echo($($('#cmd-skills').html()));
            return new Promise((resolve, reject) => {setTimeout(() => resolve('$'), 200);});
        }),
        languages: function() {
            shell.echo($("<span class='section-header'>languages</span>"));
            shell.pause(true);
            prompt = shell.get_prompt();
            animation = true;
            progressBar('French                      ', 100, shell)
            .then(() => progressBar('German and Swiss-German     ', 74, shell))
            .then(() => progressBar('English                     ', 81, shell))
            .then(function(result) {
                shell.set_prompt('');
                return new Promise((resolve, reject) => {setTimeout(() => resolve('$'), 200);});
            })
            .then(function(result) {
                shell.echo(result)
                .set_prompt(prompt);
                shell.resume();
                animation = false;
            });
        },
        interests: () => new Promise((resolve, reject) => {
            shell.echo($("<span class='section-header'>interests</span>"));
            setTimeout(() => resolve(), 100);
        }).then(function(result) {
            shell.echo('Clarinet since I was 8 - Ensemble Clarmonics, Musique des Jeunes de Bienne');
            shell.echo('Badminton - Committee & Club Treasurer');
            shell.echo('Politics - Les Vert·e·s, member and city council candidate');
            shell.echo('PC gaming (mostly MMORPG)');
            shell.echo('[x] Through several community engagements, I have acquired a solid experience in planning and managing large projects');
            return new Promise((resolve, reject) => {setTimeout(() => resolve('$'), 200);});
        }),
        compile: function(version){
            switch(version) {
                case 'dark':
                window.open("resume/dark");
                break;
                case 'light':
                window.open("resume/light");
                break;
                case 'classic':
                window.open("resume/classic");
                break;
                default:
                this.error('compile: argument missing.');
                this.echo($("<div>usage: compile [<button class='btn-cmd' data-cmd='compile classic'>classic</button>|<button class='btn-cmd' data-cmd='compile dark'>dark</button>|<button class='btn-cmd' data-cmd='compile light'>light</button>]</div>"));
                shell.echo('$');
            }
        },
        help: () => new Promise((resolve, reject) => {
            shell.echo("Last updated on 16 September 2021.");
            shell.echo($("<div>Type '<button class='btn-cmd' data-cmd='resume'>resume</button>' to view all.</div>"));
            shell.echo($("<div>Type 'compile [<button class='btn-cmd' data-cmd='compile classic'>classic</button>|<button class='btn-cmd' data-cmd='compile dark'>dark</button>|<button class='btn-cmd' data-cmd='compile light'>light</button>]' to view the PDF version.</div>"));
            shell.echo($("<div>Type '<button class='btn-cmd' data-cmd='help'>help</button>' to view this list.</div>"));
            shell.echo('');
            shell.echo($($('#cmd-list').html()));
            setTimeout(() => {resolve('')}, 200);
        }),
        resume: function(){
            this.exec("contact");
            this.exec("experience");
            this.exec("projects");
            this.exec("education");
            this.exec("skills");
            this.exec("languages");
            this.exec("interests");
        },
    }, {
        checkArity: false,
        completion: true,
        greetings: function() {
            this.echo($('#greetings').html());
            this.echo('Hello I’m Loïc Charrière. After my studies, I founded my start-up with an architect friend in the field of augmented reality. I enjoy the raw beauty of clean and optimized code, and the satisfaction of seeing my work exceed my client’s expectations.\n');
        },
        prompt: '[[b;#39b54a;]loiccharriere@127.0.0.1:/home/loic] $ ',
        onClear: function() {
            setTimeout(() => {
                this.greetings();
                this.exec('help', true);
            }, 300);
        },
        onCommandNotFound: function(cmd) {
            this.error(cmd + ": command not found.");
            this.echo($("<div>Type \'<button class='btn-cmd' data-cmd='help'>help</button>\' to get a list of commands.</div>"));
            shell.echo('$');
        },
        keydown: function(e, term) {
            if (animation) {return false;}
        }
    });

    shell.exec('help', true);
    $(document).on('click', '.btn-cmd', function(e) {
        shell.exec(this.dataset.cmd);
    });
});

function progressBar(name, max, term) {
    function inner(percent, width) {
        var size = Math.round(width*percent/100);
        var left = '', taken = '', i;
        for (i=size; i--;) {
            taken += '#';
        }
        for (i=width-size; i--;) {
            left += '-';
        }
        return name + ' [' + taken + left + '] ' + percent + '%';
    }

    var i = 0, size = 10;
    return new Promise((resolve, reject) => {
        (function loop() {
            term.set_prompt(inner(i=i+2, size));
            if (i < max) {
                setTimeout(loop, 10);
            } else {
                term.echo(inner(max, size));
                resolve();
            }
        })();
    });
}
