(function($) {
    'use strict';

    $.Common = function() {
        //  Settings
        this.settings = {
            offset: 90,
            duration: 500,
            effect: 'slide',
            options: { direction: 'left' },
            nb_project: 10,
            currentProject: null,
            heightLine: 125,
            keyLeft: 37,
            keyRight: 39,
            keyEscape: 27
        };

        // Elements
        this.elements = {
            win: $(window),
            document: $(document),
            htmlBody: $('html, body'),
            menu: $('nav'),
            menuItem: $('li > a', 'nav'),
            backTop: $('#back-top'),
            wrapper: $('body > .wrapper'),
            detail: $('#detail'),
            projects: $('#projects'),
            projectLink: $('figure figcaption a', '#projects'),
            projectClose: $('a.close', '#detail'),
            projectNext: $('a.next', '#detail'),
            projectPrevious: $('a.previous', '#detail'),
            projectContainer: $('.block-content', '#detail'),
            projectPagination: $('a.next, a.previous', '#detail'),
            btnMore: $('.more'),
            experiences: $('#experiences')
        };

        // Init
        this.init();
    };

    $.Common.prototype = {
        init: function() {
            var self = this;
            self.bindEvents();
            self.menu();
            self.backToTop();
            self.updateTimeline();
        },
        bindEvents: function() {
            var self = this;
            self.elements.projectLink.click(function(event) {
                event.preventDefault();
                var content = $(this).next('.container');
                content.clone().appendTo(self.elements.projectContainer);
                self.toggleProject($(this));
            });
            self.elements.projectClose.click(function(event) {
                event.preventDefault();
                self.toggleProject($(this), true);
            });
            self.elements.projectPagination.on('click', {self: self}, self.changeProject);
            self.elements.btnMore.on('click', {self: self}, self.toggleCollapse);
            self.elements.document.on('keyup', {self: self}, self.keysNavigation);
        },
        toggleProject: function(object, close) {
            var self = this;
            if (self.elements.detail.is(':visible') || close !== true) {
                this.elements.detail.toggle(self.settings.effect, self.settings.options, self.settings.duration, function() {
                    if (close === true) {
                        self.elements.projectContainer.html('');
                    } else {
                        self.settings.currentProject = object.parents('figure').data('id');
                        self.updatePagination();
                    }
                });
            }
        },
        changeProject: function(event) {
            var self = event.data.self;
            if (self.elements.detail.is(':visible')) {
                var new_id  = ($(this).hasClass('next')) ? self.settings.currentProject+1 : self.settings.currentProject-1;
                if (new_id >= 1 && new_id <= self.settings.nb_project) {
                    self.updateProject(new_id);
                }
            }
        },
        updateProject: function(id) {
            this.elements.projectContainer.html('');
            var project = this.elements.projects.find("figure[data-id='"+id+"']");
            var content = project.find('.container');
            content.clone().appendTo(this.elements.projectContainer);
            this.settings.currentProject = id;
            this.updatePagination();
        },
        updatePagination: function() {
            this.elements.projectNext.attr('title', this.elements.projectNext.data('title'));
            this.elements.projectPrevious.attr('title', this.elements.projectPrevious.data('title'));
            this.elements.projectPagination.removeClass('disable');
            
            if (1 === this.settings.currentProject) {
                this.elements.projectPrevious.addClass('disable');
                this.elements.projectPrevious.removeAttr('title');
            }
            if (this.settings.nb_project === this.settings.currentProject) {
                this.elements.projectNext.addClass('disable');
                this.elements.projectNext.removeAttr('title');
            }
        },
        keysNavigation: function(event) {
            var self = event.data.self;
            if (event.keyCode == self.settings.keyEscape) {
                self.elements.projectClose.trigger('click');
            }
            if (event.keyCode == self.settings.keyLeft) {
                self.elements.projectPrevious.trigger('click');
            }
            if (event.keyCode == self.settings.keyRight) {
                self.elements.projectNext.trigger('click');
            }
        },
        menu: function() {
            var self = this;
            self.elements.menuItem.click(function(event) {
                event.preventDefault();
                var link = $(this).attr("href");
                self.elements.htmlBody.animate({
                    scrollTop: $(link).offset().top
                }, 'slow');
            });
        },
        backToTop: function() {
            var self = this;
            // Back to top
            self.elements.backTop.click(function(event) {
                event.preventDefault();
                self.elements.htmlBody.animate({scrollTop: 0}, self.settings.duration);
            });
            // Show button (scroll)
            self.elements.win.scroll(function() {
                if ($(this).scrollTop() >= self.settings.offset) {
                    self.elements.backTop.fadeIn(self.settings.duration);
                } else {
                    self.elements.backTop.fadeOut(self.settings.duration);
                }
            });
        },
        toggleCollapse: function(event) {
            var self = event.data.self;
            $(this).parents('li').toggleClass('collapsed expanded');
            self.updateTimeline();
        },
        updateTimeline: function() {
            var self = this;
            var height = self.elements.experiences.innerHeight()-parseInt(self.settings.heightLine);
            self.elements.experiences.find('.line').height(height);
        }
    };

    $(document).ready(function() {
        new $.Common();
    });
})(jQuery);