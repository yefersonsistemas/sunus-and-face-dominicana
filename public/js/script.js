"use strict";
(function() {
    // Global variables
    var userAgent = navigator.userAgent.toLowerCase(),
        initialDate = new Date(),

        $document = $(document),
        $window = $(window),
        $html = $("html"),
        $body = $("body"),

        isDesktop = $html.hasClass("desktop"),
        isIE = userAgent.indexOf("msie") !== -1 ? parseInt(userAgent.split("msie")[1], 10) : userAgent.indexOf("trident") !== -1 ? 11 : userAgent.indexOf("edge") !== -1 ? 12 : false,
        isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent),
        windowReady = false,
        isNoviBuilder = false,

        plugins = {
            bootstrapTooltip: $('[data-toggle="tooltip"]'),
            bootstrapTabs: $('.tabs'),
            rdNavbar: $('.rd-navbar'),
            owl: $('.owl-carousel'),
            swiper: $('.swiper-slider'),
            progressLinear: $('.progress-linear'),
            progressCircle: $('.progress-circle'),
            counter: $('.counter'),
            countdown: $('.countdown'),
            isotope: $('.isotope-wrap'),
            stacktable: $('table[data-responsive="true"]'),
            customToggle: $('[data-custom-toggle]'),
            customWaypoints: $('[data-custom-scroll-to]'),
            calendar: $('.rd-calendar'),
            search: $('.rd-search'),
            searchResults: $('.rd-search-results'),
            fullCalendar: $('#calendar'),
            wow: $('.wow'),
            lightGallery: $('[data-lightgallery="group"]'),
            lightGalleryItem: $('[data-lightgallery="item"]'),
            lightDynamicGalleryItem: $('[data-lightgallery="dynamic"]'),
            copyrightYear: $('.copyright-year'),
            materialParallax: $('.parallax-container'),
            maps: $('.google-map-container'),
            preloader: $('.preloader'),
            rdMailForm: $('.rd-mailform'),
            rdInputLabel: $('.form-label'),
            regula: $('[data-constraints]'),
            captcha: $('.recaptcha'),
            campaignMonitor: $('.campaign-mailform'),
            mailchimp: $('.mailchimp-mailform'),
        };

    /**
     * @desc Check the element was been scrolled into the view
     * @param {object} elem - jQuery object
     * @return {boolean}
     */
    function isScrolledIntoView(elem) {
        if (isNoviBuilder) return true;
        return elem.offset().top + elem.outerHeight() >= $window.scrollTop() && elem.offset().top <= $window.scrollTop() + $window.height();
    }

    /**
     * @desc Calls a function when element has been scrolled into the view
     * @param {object} element - jQuery object
     * @param {function} func - init function
     */
    function lazyInit(element, func) {
        var scrollHandler = function() {
            if ((!element.hasClass('lazy-loaded') && (isScrolledIntoView(element)))) {
                func.call(element);
                element.addClass('lazy-loaded');
            }
        };

        scrollHandler();
        $window.on('scroll', scrollHandler);
    }

    // Initialize scripts that require a loaded window
    $window.on('load', function() {

        // Page loader & Page transition
        if (plugins.preloader.length && !isNoviBuilder) {
            pageTransition({
                target: document.querySelector('.page'),
                delay: 0,
                duration: 500,
                classIn: 'fadeIn',
                classOut: 'fadeOut',
                classActive: 'animated',
                conditions: function(event, link) {
                    return link && !/(\#|javascript:void\(0\)|callto:|tel:|mailto:|:\/\/)/.test(link) && !event.currentTarget.hasAttribute('data-lightgallery');
                },
                onTransitionStart: function(options) {
                    setTimeout(function() {
                        plugins.preloader.removeClass('loaded');
                    }, options.duration * .75);
                },
                onReady: function() {
                    plugins.preloader.addClass('loaded');
                    windowReady = true;
                }
            });
        }

        // Counter
        if (plugins.counter.length) {
            for (var i = 0; i < plugins.counter.length; i++) {
                var
                    node = plugins.counter[i],
                    counter = aCounter({
                        node: node,
                        duration: node.getAttribute('data-duration') || 1000
                    }),
                    scrollHandler = (function() {
                        if (Util.inViewport(this) && !this.classList.contains('animated-first')) {
                            this.counter.run();
                            this.classList.add('animated-first');
                        }
                    }).bind(node),
                    blurHandler = (function() {
                        this.counter.params.to = parseInt(this.textContent, 10);
                        this.counter.run();
                    }).bind(node);

                if (isNoviBuilder) {
                    node.counter.run();
                    node.addEventListener('blur', blurHandler);
                } else {
                    scrollHandler();
                    window.addEventListener('scroll', scrollHandler);
                }
            }
        }

        // Progress Bar
        if (plugins.progressLinear.length) {
            for (let i = 0; i < plugins.progressLinear.length; i++) {
                let
                    container = plugins.progressLinear[i],
                    counter = aCounter({
                        node: container.querySelector('.progress-value'),
                        duration: container.getAttribute('data-duration') || 1000,
                        onStart: function() {
                            this.custom.bar.style.width = this.params.to + '%';
                        }
                    });

                counter.custom = {
                    container: container,
                    bar: container.querySelector('.progress-bar-linear'),
                    onScroll: (function() {
                        if ((Util.inViewport(this.custom.container) && !this.custom.container.classList.contains('animated')) || isNoviBuilder) {
                            this.run();
                            this.custom.container.classList.add('animated');
                        }
                    }).bind(counter),
                    onBlur: (function() {
                        this.params.to = parseInt(this.params.node.textContent, 10);
                        this.run();
                    }).bind(counter)
                };

                if (isNoviBuilder) {
                    counter.run();
                    counter.params.node.addEventListener('blur', counter.custom.onBlur);
                } else {
                    counter.custom.onScroll();
                    document.addEventListener('scroll', counter.custom.onScroll);
                }
            }
        }

        // Progress Circle
        if (plugins.progressCircle.length) {
            for (let i = 0; i < plugins.progressCircle.length; i++) {
                let
                    container = plugins.progressCircle[i],
                    counter = aCounter({
                        node: container.querySelector('.progress-circle-counter'),
                        duration: 500,
                        onUpdate: function(value) {
                            this.custom.bar.render(value * 3.6);
                        }
                    });

                counter.params.onComplete = counter.params.onUpdate;

                counter.custom = {
                    container: container,
                    bar: aProgressCircle({ node: container.querySelector('.progress-circle-bar') }),
                    onScroll: (function() {
                        if (Util.inViewport(this.custom.container) && !this.custom.container.classList.contains('animated')) {
                            this.run();
                            this.custom.container.classList.add('animated');
                        }
                    }).bind(counter),
                    onBlur: (function() {
                        this.params.to = parseInt(this.params.node.textContent, 10);
                        this.run();
                    }).bind(counter)
                };

                if (isNoviBuilder) {
                    counter.run();
                    counter.params.node.addEventListener('blur', counter.custom.onBlur);
                } else {
                    counter.custom.onScroll();
                    window.addEventListener('scroll', counter.custom.onScroll);
                }
            }
        }

        // Isotope
        if (plugins.isotope.length) {
            for (var i = 0; i < plugins.isotope.length; i++) {
                var
                    wrap = plugins.isotope[i],
                    filterHandler = function(event) {
                        event.preventDefault();
                        for (var n = 0; n < this.isoGroup.filters.length; n++) this.isoGroup.filters[n].classList.remove('active');
                        this.classList.add('active');
                        this.isoGroup.isotope.arrange({ filter: this.getAttribute("data-isotope-filter") !== '*' ? '[data-filter*="' + this.getAttribute("data-isotope-filter") + '"]' : '*' });
                    },
                    resizeHandler = function() {
                        this.isoGroup.isotope.layout();
                    };

                wrap.isoGroup = {};
                wrap.isoGroup.filters = wrap.querySelectorAll('[data-isotope-filter]');
                wrap.isoGroup.node = wrap.querySelector('.isotope');
                wrap.isoGroup.layout = wrap.isoGroup.node.getAttribute('data-isotope-layout') ? wrap.isoGroup.node.getAttribute('data-isotope-layout') : 'masonry';
                wrap.isoGroup.isotope = new Isotope(wrap.isoGroup.node, {
                    itemSelector: '.isotope-item',
                    layoutMode: wrap.isoGroup.layout,
                    filter: '*',
                });

                for (var n = 0; n < wrap.isoGroup.filters.length; n++) {
                    var filter = wrap.isoGroup.filters[n];
                    filter.isoGroup = wrap.isoGroup;
                    filter.addEventListener('click', filterHandler);
                }

                window.addEventListener('resize', resizeHandler.bind(wrap));
            }
        }

        // Material Parallax
        if (plugins.materialParallax.length) {
            if (!isNoviBuilder && !isIE && !isMobile) {
                plugins.materialParallax.parallax();
            } else {
                for (var i = 0; i < plugins.materialParallax.length; i++) {
                    var $parallax = $(plugins.materialParallax[i]);

                    $parallax.addClass('parallax-disabled');
                    $parallax.css({ "background-image": 'url(' + $parallax.data("parallax-img") + ')' });
                }
            }
        }
    });

    // Initialize scripts that require a finished document
    $(function() {
        isNoviBuilder = window.xMode;

        /**
         * @desc Toggle swiper videos on active slides
         * @param {object} swiper - swiper slider
         */
        function toggleSwiperInnerVideos(swiper) {
            var prevSlide = $(swiper.slides[swiper.previousIndex]),
                nextSlide = $(swiper.slides[swiper.activeIndex]),
                videos,
                videoItems = prevSlide.find("video");

            for (var i = 0; i < videoItems.length; i++) {
                videoItems[i].pause();
            }

            videos = nextSlide.find("video");
            if (videos.length) {
                videos.get(0).play();
            }
        }

        /**
         * @desc Toggle swiper animations on active slides
         * @param {object} swiper - swiper slider
         */
        function toggleSwiperCaptionAnimation(swiper) {
            var prevSlide = $(swiper.container).find("[data-caption-animate]"),
                nextSlide = $(swiper.slides[swiper.activeIndex]).find("[data-caption-animate]"),
                delay,
                duration,
                nextSlideItem,
                prevSlideItem;

            for (var i = 0; i < prevSlide.length; i++) {
                prevSlideItem = $(prevSlide[i]);

                prevSlideItem.removeClass("animated")
                    .removeClass(prevSlideItem.attr("data-caption-animate"))
                    .addClass("not-animated");
            }


            var tempFunction = function(nextSlideItem, duration) {
                return function() {
                    nextSlideItem
                        .removeClass("not-animated")
                        .addClass(nextSlideItem.attr("data-caption-animate"))
                        .addClass("animated");
                    if (duration) {
                        nextSlideItem.css('animation-duration', duration + 'ms');
                    }
                };
            };

            for (var i = 0; i < nextSlide.length; i++) {
                nextSlideItem = $(nextSlide[i]);
                delay = nextSlideItem.attr("data-caption-delay");
                duration = nextSlideItem.attr('data-caption-duration');
                if (!isNoviBuilder) {
                    if (delay) {
                        setTimeout(tempFunction(nextSlideItem, duration), parseInt(delay, 10));
                    } else {
                        tempFunction(nextSlideItem, duration);
                    }

                } else {
                    nextSlideItem.removeClass("not-animated")
                }
            }
        }

        /**
         * @desc Initialize Bootstrap tooltip with required placement
         * @param {string} tooltipPlacement
         */
        function initBootstrapTooltip(tooltipPlacement) {
            plugins.bootstrapTooltip.tooltip('dispose');

            if (window.innerWidth < 576) {
                plugins.bootstrapTooltip.tooltip({ placement: 'bottom' });
            } else {
                plugins.bootstrapTooltip.tooltip({ placement: tooltipPlacement });
            }
        }

        /**
         * Live Search
         * @description  create live search results
         */
        function liveSearch(options) {
            $('#' + options.live).removeClass('cleared').html();
            options.current++;
            options.spin.addClass('loading');
            $.get(handler, {
                s: decodeURI(options.term),
                liveSearch: options.live,
                dataType: "html",
                liveCount: options.liveCount,
                filter: options.filter,
                template: options.template
            }, function(data) {
                options.processed++;
                var live = $('#' + options.live);
                if (options.processed == options.current && !live.hasClass('cleared')) {
                    live.find('> #search-results').removeClass('active');
                    live.html(data);
                    setTimeout(function() {
                        live.find('> #search-results').addClass('active');
                    }, 50);
                }
                options.spin.parents('.rd-search').find('.input-group-addon').removeClass('loading');
            })
        }

        /**
         * @desc Google map function for getting latitude and longitude
         */
        function getLatLngObject(str, marker, map, callback) {
            var coordinates = {};
            try {
                coordinates = JSON.parse(str);
                callback(new google.maps.LatLng(
                    coordinates.lat,
                    coordinates.lng
                ), marker, map)
            } catch (e) {
                map.geocoder.geocode({ 'address': str }, function(results, status) {
                    if (status === google.maps.GeocoderStatus.OK) {
                        var latitude = results[0].geometry.location.lat();
                        var longitude = results[0].geometry.location.lng();

                        callback(new google.maps.LatLng(
                            parseFloat(latitude),
                            parseFloat(longitude)
                        ), marker, map)
                    }
                })
            }
        }

        /**
         * @desc Initialize Google maps
         */
        function initMaps() {
            var key;

            for (var i = 0; i < plugins.maps.length; i++) {
                if (plugins.maps[i].hasAttribute("data-key")) {
                    key = plugins.maps[i].getAttribute("data-key");
                    break;
                }
            }

            $.getScript('//maps.google.com/maps/api/js?' + (key ? 'key=' + key + '&' : '') + 'sensor=false&libraries=geometry,places&v=quarterly', function() {
                var head = document.getElementsByTagName('head')[0],
                    insertBefore = head.insertBefore;

                head.insertBefore = function(newElement, referenceElement) {
                    if (newElement.href && newElement.href.indexOf('//fonts.googleapis.com/css?family=Roboto') !== -1 || newElement.innerHTML.indexOf('gm-style') !== -1) {
                        return;
                    }
                    insertBefore.call(head, newElement, referenceElement);
                };
                var geocoder = new google.maps.Geocoder;
                for (var i = 0; i < plugins.maps.length; i++) {
                    var zoom = parseInt(plugins.maps[i].getAttribute("data-zoom"), 10) || 11;
                    var styles = plugins.maps[i].hasAttribute('data-styles') ? JSON.parse(plugins.maps[i].getAttribute("data-styles")) : [];
                    var center = plugins.maps[i].getAttribute("data-center") || "New York";

                    // Initialize map
                    var map = new google.maps.Map(plugins.maps[i].querySelectorAll(".google-map")[0], {
                        zoom: zoom,
                        styles: styles,
                        scrollwheel: false,
                        center: {
                            lat: 0,
                            lng: 0
                        }
                    });

                    // Add map object to map node
                    plugins.maps[i].map = map;
                    plugins.maps[i].geocoder = geocoder;
                    plugins.maps[i].google = google;

                    // Get Center coordinates from attribute
                    getLatLngObject(center, null, plugins.maps[i], function(location, markerElement, mapElement) {
                        mapElement.map.setCenter(location);
                    });

                    // Add markers from google-map-markers array
                    var markerItems = plugins.maps[i].querySelectorAll(".google-map-markers li");

                    if (markerItems.length) {
                        var markers = [];
                        for (var j = 0; j < markerItems.length; j++) {
                            var markerElement = markerItems[j];
                            getLatLngObject(markerElement.getAttribute("data-location"), markerElement, plugins.maps[i], function(location, markerElement, mapElement) {
                                var icon = markerElement.getAttribute("data-icon") || mapElement.getAttribute("data-icon");
                                var activeIcon = markerElement.getAttribute("data-icon-active") || mapElement.getAttribute("data-icon-active");
                                var info = markerElement.getAttribute("data-description") || "";
                                var infoWindow = new google.maps.InfoWindow({
                                    content: info
                                });
                                markerElement.infoWindow = infoWindow;
                                var markerData = {
                                    position: location,
                                    map: mapElement.map
                                }
                                if (icon) {
                                    markerData.icon = icon;
                                }
                                var marker = new google.maps.Marker(markerData);
                                markerElement.gmarker = marker;
                                markers.push({
                                    markerElement: markerElement,
                                    infoWindow: infoWindow
                                });
                                marker.isActive = false;
                                // Handle infoWindow close click
                                google.maps.event.addListener(infoWindow, 'closeclick', (function(markerElement, mapElement) {
                                    var markerIcon = null;
                                    markerElement.gmarker.isActive = false;
                                    markerIcon = markerElement.getAttribute("data-icon") || mapElement.getAttribute("data-icon");
                                    markerElement.gmarker.setIcon(markerIcon);
                                }).bind(this, markerElement, mapElement));


                                // Set marker active on Click and open infoWindow
                                google.maps.event.addListener(marker, 'click', (function(markerElement, mapElement) {
                                    if (markerElement.infoWindow.getContent().length === 0) return;
                                    var gMarker, currentMarker = markerElement.gmarker,
                                        currentInfoWindow;
                                    for (var k = 0; k < markers.length; k++) {
                                        var markerIcon;
                                        if (markers[k].markerElement === markerElement) {
                                            currentInfoWindow = markers[k].infoWindow;
                                        }
                                        gMarker = markers[k].markerElement.gmarker;
                                        if (gMarker.isActive && markers[k].markerElement !== markerElement) {
                                            gMarker.isActive = false;
                                            markerIcon = markers[k].markerElement.getAttribute("data-icon") || mapElement.getAttribute("data-icon")
                                            gMarker.setIcon(markerIcon);
                                            markers[k].infoWindow.close();
                                        }
                                    }

                                    currentMarker.isActive = !currentMarker.isActive;
                                    if (currentMarker.isActive) {
                                        if (markerIcon = markerElement.getAttribute("data-icon-active") || mapElement.getAttribute("data-icon-active")) {
                                            currentMarker.setIcon(markerIcon);
                                        }

                                        currentInfoWindow.open(map, marker);
                                    } else {
                                        if (markerIcon = markerElement.getAttribute("data-icon") || mapElement.getAttribute("data-icon")) {
                                            currentMarker.setIcon(markerIcon);
                                        }
                                        currentInfoWindow.close();
                                    }
                                }).bind(this, markerElement, mapElement))
                            })
                        }
                    }
                }
            });
        }

        /**
         * @desc Initialize the gallery with set of images
         * @param {object} itemsToInit - jQuery object
         * @param {string} addClass - additional gallery class
         */
        function initLightGallery(itemsToInit, addClass) {
            if (!isNoviBuilder) {
                $(itemsToInit).lightGallery({
                    thumbnail: $(itemsToInit).attr("data-lg-thumbnail") !== "false",
                    selector: "[data-lightgallery='item']",
                    autoplay: $(itemsToInit).attr("data-lg-autoplay") === "true",
                    pause: parseInt($(itemsToInit).attr("data-lg-autoplay-delay")) || 5000,
                    addClass: addClass,
                    mode: $(itemsToInit).attr("data-lg-animation") || "lg-slide",
                    loop: $(itemsToInit).attr("data-lg-loop") !== "false"
                });
            }
        }

        /**
         * @desc Initialize the gallery with dynamic addition of images
         * @param {object} itemsToInit - jQuery object
         * @param {string} addClass - additional gallery class
         */
        function initDynamicLightGallery(itemsToInit, addClass) {
            if (!isNoviBuilder) {
                $(itemsToInit).on("click", function() {
                    $(itemsToInit).lightGallery({
                        thumbnail: $(itemsToInit).attr("data-lg-thumbnail") !== "false",
                        selector: "[data-lightgallery='item']",
                        autoplay: $(itemsToInit).attr("data-lg-autoplay") === "true",
                        pause: parseInt($(itemsToInit).attr("data-lg-autoplay-delay")) || 5000,
                        addClass: addClass,
                        mode: $(itemsToInit).attr("data-lg-animation") || "lg-slide",
                        loop: $(itemsToInit).attr("data-lg-loop") !== "false",
                        dynamic: true,
                        dynamicEl: JSON.parse($(itemsToInit).attr("data-lg-dynamic-elements")) || []
                    });
                });
            }
        }

        /**
         * @desc Initialize the gallery with one image
         * @param {object} itemToInit - jQuery object
         * @param {string} addClass - additional gallery class
         */
        function initLightGalleryItem(itemToInit, addClass) {
            if (!isNoviBuilder) {
                $(itemToInit).lightGallery({
                    selector: "this",
                    addClass: addClass,
                    counter: false,
                    youtubePlayerParams: {
                        modestbranding: 1,
                        showinfo: 0,
                        rel: 0,
                        controls: 0
                    },
                    vimeoPlayerParams: {
                        byline: 0,
                        portrait: 0
                    }
                });
            }
        }

        /**
         * @desc Initialize owl carousel plugin
         * @param {object} c - carousel jQuery object
         */
        function initOwlCarousel(c) {
            var aliaces = ["-", "-sm-", "-md-", "-lg-", "-xl-", "-xxl-"],
                values = [0, 576, 768, 992, 1200, 1600],
                responsive = {};

            for (var j = 0; j < values.length; j++) {
                responsive[values[j]] = {};
                for (var k = j; k >= -1; k--) {
                    if (!responsive[values[j]]["items"] && c.attr("data" + aliaces[k] + "items")) {
                        responsive[values[j]]["items"] = k < 0 ? 1 : parseInt(c.attr("data" + aliaces[k] + "items"), 10);
                    }
                    if (!responsive[values[j]]["stagePadding"] && responsive[values[j]]["stagePadding"] !== 0 && c.attr("data" + aliaces[k] + "stage-padding")) {
                        responsive[values[j]]["stagePadding"] = k < 0 ? 0 : parseInt(c.attr("data" + aliaces[k] + "stage-padding"), 10);
                    }
                    if (!responsive[values[j]]["margin"] && responsive[values[j]]["margin"] !== 0 && c.attr("data" + aliaces[k] + "margin")) {
                        responsive[values[j]]["margin"] = k < 0 ? 30 : parseInt(c.attr("data" + aliaces[k] + "margin"), 10);
                    }
                }
            }

            // Enable custom pagination
            if (c.attr('data-dots-custom')) {
                c.on("initialized.owl.carousel", function(event) {
                    var carousel = $(event.currentTarget),
                        customPag = $(carousel.attr("data-dots-custom")),
                        active = 0;

                    if (carousel.attr('data-active')) {
                        active = parseInt(carousel.attr('data-active'), 10);
                    }

                    carousel.trigger('to.owl.carousel', [active, 300, true]);
                    customPag.find("[data-owl-item='" + active + "']").addClass("active");

                    customPag.find("[data-owl-item]").on('click', function(e) {
                        e.preventDefault();
                        carousel.trigger('to.owl.carousel', [parseInt(this.getAttribute("data-owl-item"), 10), 300, true]);
                    });

                    carousel.on("translate.owl.carousel", function(event) {
                        customPag.find(".active").removeClass("active");
                        customPag.find("[data-owl-item='" + event.item.index + "']").addClass("active")
                    });
                });
            }

            c.on("initialized.owl.carousel", function() {
                initLightGalleryItem(c.find('[data-lightgallery="item"]'), 'lightGallery-in-carousel');
            });

            c.owlCarousel({
                autoplay: isNoviBuilder ? false : c.attr("data-autoplay") === "true",
                loop: isNoviBuilder ? false : c.attr("data-loop") !== "false",
                items: 1,
                center: c.attr("data-center") === "true",
                dotsContainer: c.attr("data-pagination-class") || false,
                navContainer: c.attr("data-navigation-class") || false,
                mouseDrag: isNoviBuilder ? false : c.attr("data-mouse-drag") !== "false",
                nav: c.attr("data-nav") === "true",
                dots: c.attr("data-dots") === "true",
                dotsEach: c.attr("data-dots-each") ? parseInt(c.attr("data-dots-each"), 10) : false,
                animateIn: c.attr('data-animation-in') ? c.attr('data-animation-in') : false,
                animateOut: c.attr('data-animation-out') ? c.attr('data-animation-out') : false,
                responsive: responsive,
                navText: c.attr("data-nav-text") ? $.parseJSON(c.attr("data-nav-text")) : [],
                navClass: c.attr("data-nav-class") ? $.parseJSON(c.attr("data-nav-class")) : ['owl-prev', 'owl-next']
            });
        }

        /**
         * @desc Attach form validation to elements
         * @param {object} elements - jQuery object
         */
        function attachFormValidator(elements) {
            // Custom validator - phone number
            regula.custom({
                name: 'PhoneNumber',
                defaultMessage: 'Formato de número de teléfono no válido',
                validator: function() {
                    if (this.value === '') return true;
                    else return /^(\+\d)?[0-9\-\(\) ]{5,}$/i.test(this.value);
                }
            });

            for (var i = 0; i < elements.length; i++) {
                var o = $(elements[i]),
                    v;
                o.addClass("form-control-has-validation").after("<div class='form-validation'></div>");
                v = o.parent().find(".form-validation");
                if (v.is(":last-child")) o.addClass("form-control-last-child");
            }

            elements.on('input change propertychange blur', function(e) {
                var $this = $(this),
                    results;

                if (e.type !== "blur")
                    if (!$this.parent().hasClass("has-error")) return;
                if ($this.parents('.rd-mailform').hasClass('success')) return;

                if ((results = $this.regula('validate')).length) {
                    for (i = 0; i < results.length; i++) {
                        $this.siblings(".form-validation").text(results[i].message).parent().addClass("has-error");
                    }
                } else {
                    $this.siblings(".form-validation").text("").parent().removeClass("has-error")
                }
            }).regula('bind');

            var regularConstraintsMessages = [{
                    type: regula.Constraint.Required,
                    newMessage: "**El campo de texto es obligatorio."
                },
                {
                    type: regula.Constraint.Email,
                    newMessage: "**El correo electrónico no es válido."
                },
                {
                    type: regula.Constraint.Numeric,
                    newMessage: "**Solo se requieren números"
                },
                {
                    type: regula.Constraint.Selected,
                    newMessage: "**Por favor, elija una opción."
                }
            ];


            for (var i = 0; i < regularConstraintsMessages.length; i++) {
                var regularConstraint = regularConstraintsMessages[i];

                regula.override({
                    constraintType: regularConstraint.type,
                    defaultMessage: regularConstraint.newMessage
                });
            }
        }

        /**
         * @desc Check if all elements pass validation
         * @param {object} elements - object of items for validation
         * @param {object} captcha - captcha object for validation
         * @return {boolean}
         */
        function isValidated(elements, captcha) {
            var results, errors = 0;

            if (elements.length) {
                for (var j = 0; j < elements.length; j++) {

                    var $input = $(elements[j]);
                    if ((results = $input.regula('validate')).length) {
                        for (k = 0; k < results.length; k++) {
                            errors++;
                            $input.siblings(".form-validation").text(results[k].message).parent().addClass("has-error");
                        }
                    } else {
                        $input.siblings(".form-validation").text("").parent().removeClass("has-error")
                    }
                }

                if (captcha) {
                    if (captcha.length) {
                        return validateReCaptcha(captcha) && errors === 0
                    }
                }

                return errors === 0;
            }
            return true;
        }

        /**
         * @desc Validate google reCaptcha
         * @param {object} captcha - captcha object for validation
         * @return {boolean}
         */
        function validateReCaptcha(captcha) {
            var captchaToken = captcha.find('.g-recaptcha-response').val();

            if (captchaToken.length === 0) {
                captcha
                    .siblings('.form-validation')
                    .html('Please, prove that you are not robot.')
                    .addClass('active');
                captcha
                    .closest('.form-wrap')
                    .addClass('has-error');

                captcha.on('propertychange', function() {
                    var $this = $(this),
                        captchaToken = $this.find('.g-recaptcha-response').val();

                    if (captchaToken.length > 0) {
                        $this
                            .closest('.form-wrap')
                            .removeClass('has-error');
                        $this
                            .siblings('.form-validation')
                            .removeClass('active')
                            .html('');
                        $this.off('propertychange');
                    }
                });

                return false;
            }

            return true;
        }

        /**
         * @desc Initialize Google reCaptcha
         */
        window.onloadCaptchaCallback = function() {
            for (var i = 0; i < plugins.captcha.length; i++) {
                var $capthcaItem = $(plugins.captcha[i]);

                grecaptcha.render(
                    $capthcaItem.attr('id'), {
                        sitekey: $capthcaItem.attr('data-sitekey'),
                        size: $capthcaItem.attr('data-size') ? $capthcaItem.attr('data-size') : 'normal',
                        theme: $capthcaItem.attr('data-theme') ? $capthcaItem.attr('data-theme') : 'light',
                        callback: function(e) {
                            $('.recaptcha').trigger('propertychange');
                        }
                    }
                );
                $capthcaItem.after("<span class='form-validation'></span>");
            }
        };


        // Google ReCaptcha
        if (plugins.captcha.length) {
            $.getScript("//www.google.com/recaptcha/api.js?onload=onloadCaptchaCallback&render=explicit&hl=en");
        }

        // RD Input Label
        if (plugins.rdInputLabel.length) {
            plugins.rdInputLabel.RDInputLabel();
        }

        // Regula
        if (plugins.regula.length) {
            attachFormValidator(plugins.regula);
        }

        // MailChimp Ajax subscription
        if (plugins.mailchimp.length) {
            for (i = 0; i < plugins.mailchimp.length; i++) {
                var $mailchimpItem = $(plugins.mailchimp[i]),
                    $email = $mailchimpItem.find('input[type="email"]');

                // Required by MailChimp
                $mailchimpItem.attr('novalidate', 'true');
                $email.attr('name', 'EMAIL');

                $mailchimpItem.on('submit', $.proxy(function($email, event) {
                    event.preventDefault();

                    var $this = this;

                    var data = {},
                        url = $this.attr('action').replace('/post?', '/post-json?').concat('&c=?'),
                        dataArray = $this.serializeArray(),
                        $output = $("#" + $this.attr("data-form-output"));

                    for (i = 0; i < dataArray.length; i++) {
                        data[dataArray[i].name] = dataArray[i].value;
                    }

                    $.ajax({
                        data: data,
                        url: url,
                        dataType: 'jsonp',
                        error: function(resp, text) {
                            $output.html('Server error: ' + text);

                            setTimeout(function() {
                                $output.removeClass("active");
                            }, 4000);
                        },
                        success: function(resp) {
                            $output.html(resp.msg).addClass('active');
                            $email[0].value = '';
                            var $label = $('[for="' + $email.attr('id') + '"]');
                            if ($label.length) $label.removeClass('focus not-empty');

                            setTimeout(function() {
                                $output.removeClass("active");
                            }, 6000);
                        },
                        beforeSend: function(data) {
                            var isNoviBuilder = window.xMode;

                            var isValidated = (function() {
                                var results, errors = 0;
                                var elements = $this.find('[data-constraints]');
                                var captcha = null;
                                if (elements.length) {
                                    for (var j = 0; j < elements.length; j++) {

                                        var $input = $(elements[j]);
                                        if ((results = $input.regula('validate')).length) {
                                            for (var k = 0; k < results.length; k++) {
                                                errors++;
                                                $input.siblings(".form-validation").text(results[k].message).parent().addClass("has-error");
                                            }
                                        } else {
                                            $input.siblings(".form-validation").text("").parent().removeClass("has-error")
                                        }
                                    }

                                    if (captcha) {
                                        if (captcha.length) {
                                            return validateReCaptcha(captcha) && errors === 0
                                        }
                                    }

                                    return errors === 0;
                                }
                                return true;
                            })();

                            // Stop request if builder or inputs are invalide
                            if (isNoviBuilder || !isValidated)
                                return false;

                            $output.html('Submitting...').addClass('active');
                        }
                    });

                    return false;
                }, $mailchimpItem, $email));
            }
        }

        // Campaign Monitor ajax subscription
        if (plugins.campaignMonitor.length) {
            for (i = 0; i < plugins.campaignMonitor.length; i++) {
                var $campaignItem = $(plugins.campaignMonitor[i]);

                $campaignItem.on('submit', $.proxy(function(e) {
                    var data = {},
                        url = this.attr('action'),
                        dataArray = this.serializeArray(),
                        $output = $("#" + plugins.campaignMonitor.attr("data-form-output")),
                        $this = $(this);

                    for (i = 0; i < dataArray.length; i++) {
                        data[dataArray[i].name] = dataArray[i].value;
                    }

                    $.ajax({
                        data: data,
                        url: url,
                        dataType: 'jsonp',
                        error: function(resp, text) {
                            $output.html('Server error: ' + text);

                            setTimeout(function() {
                                $output.removeClass("active");
                            }, 4000);
                        },
                        success: function(resp) {
                            $output.html(resp.Message).addClass('active');

                            setTimeout(function() {
                                $output.removeClass("active");
                            }, 6000);
                        },
                        beforeSend: function(data) {
                            // Stop request if builder or inputs are invalide
                            if (isNoviBuilder || !isValidated($this.find('[data-constraints]')))
                                return false;

                            $output.html('Submitting...').addClass('active');
                        }
                    });

                    // Clear inputs after submit
                    var inputs = $this[0].getElementsByTagName('input');
                    for (var i = 0; i < inputs.length; i++) {
                        inputs[i].value = '';
                        var label = document.querySelector('[for="' + inputs[i].getAttribute('id') + '"]');
                        if (label) label.classList.remove('focus', 'not-empty');
                    }

                    return false;
                }, $campaignItem));
            }
        }

        // RD Mailform
        if (plugins.rdMailForm.length) {
            var i, j, k,
                msg = {
                    'MF000': 'Successfully sent!',
                    'MF001': 'Recipients are not set!',
                    'MF002': 'Form will not work locally!',
                    'MF003': 'Please, define email field in your form!',
                    'MF004': 'Please, define type of your form!',
                    'MF254': 'Something went wrong with PHPMailer!',
                    'MF255': 'Aw, snap! Something went wrong.'
                };

            for (i = 0; i < plugins.rdMailForm.length; i++) {
                var $form = $(plugins.rdMailForm[i]),
                    formHasCaptcha = false;

                $form.attr('novalidate', 'novalidate').ajaxForm({
                    data: {
                        "form-type": $form.attr("data-form-type") || "contact",
                        "counter": i
                    },
                    beforeSubmit: function(arr, $form, options) {
                        if (isNoviBuilder)
                            return;

                        var form = $(plugins.rdMailForm[this.extraData.counter]),
                            inputs = form.find("[data-constraints]"),
                            output = $("#" + form.attr("data-form-output")),
                            captcha = form.find('.recaptcha'),
                            captchaFlag = true;

                        output.removeClass("active error success");

                        if (isValidated(inputs, captcha)) {

                            // veify reCaptcha
                            if (captcha.length) {
                                var captchaToken = captcha.find('.g-recaptcha-response').val(),
                                    captchaMsg = {
                                        'CPT001': 'Please, setup you "site key" and "secret key" of reCaptcha',
                                        'CPT002': 'Something wrong with google reCaptcha'
                                    };

                                formHasCaptcha = true;

                                $.ajax({
                                        method: "POST",
                                        url: "bat/reCaptcha.php",
                                        data: { 'g-recaptcha-response': captchaToken },
                                        async: false
                                    })
                                    .done(function(responceCode) {
                                        if (responceCode !== 'CPT000') {
                                            if (output.hasClass("snackbars")) {
                                                output.html('<p><span class="icon text-middle mdi mdi-check icon-xxs"></span><span>' + captchaMsg[responceCode] + '</span></p>')

                                                setTimeout(function() {
                                                    output.removeClass("active");
                                                }, 3500);

                                                captchaFlag = false;
                                            } else {
                                                output.html(captchaMsg[responceCode]);
                                            }

                                            output.addClass("active");
                                        }
                                    });
                            }

                            if (!captchaFlag) {
                                return false;
                            }

                            form.addClass('form-in-process');

                            if (output.hasClass("snackbars")) {
                                output.html('<p><span class="icon text-middle fa fa-circle-o-notch fa-spin icon-xxs"></span><span>Sending</span></p>');
                                output.addClass("active");
                            }
                        } else {
                            return false;
                        }
                    },
                    error: function(result) {
                        if (isNoviBuilder)
                            return;

                        var output = $("#" + $(plugins.rdMailForm[this.extraData.counter]).attr("data-form-output")),
                            form = $(plugins.rdMailForm[this.extraData.counter]);

                        output.text(msg[result]);
                        form.removeClass('form-in-process');

                        if (formHasCaptcha) {
                            grecaptcha.reset();
                        }
                    },
                    success: function(result) {
                        if (isNoviBuilder)
                            return;

                        var form = $(plugins.rdMailForm[this.extraData.counter]),
                            output = $("#" + form.attr("data-form-output")),
                            select = form.find('select');

                        form
                            .addClass('success')
                            .removeClass('form-in-process');

                        if (formHasCaptcha) {
                            grecaptcha.reset();
                        }

                        result = result.length === 5 ? result : 'MF255';
                        output.text(msg[result]);

                        if (result === "MF000") {
                            if (output.hasClass("snackbars")) {
                                output.html('<p><span class="icon text-middle mdi mdi-check icon-xxs"></span><span>' + msg[result] + '</span></p>');
                            } else {
                                output.addClass("active success");
                            }
                        } else {
                            if (output.hasClass("snackbars")) {
                                output.html(' <p class="snackbars-left"><span class="icon icon-xxs mdi mdi-alert-outline text-middle"></span><span>' + msg[result] + '</span></p>');
                            } else {
                                output.addClass("active error");
                            }
                        }

                        form.clearForm();

                        if (select.length) {
                            select.select2("val", "");
                        }

                        form.find('input, textarea').trigger('blur');

                        setTimeout(function() {
                            output.removeClass("active error success");
                            form.removeClass('success');
                        }, 3500);
                    }
                });
            }
        }

        // Adds some loosing functionality to IE browsers (IE Polyfills)
        if (isIE) {
            if (isIE === 12) $html.addClass("ie-edge");
            if (isIE === 11) $html.addClass("ie-11");
            if (isIE < 10) $html.addClass("lt-ie-10");
            if (isIE < 11) $html.addClass("ie-10");
        }

        // Swiper
        if (plugins.swiper.length) {
            for (var i = 0; i < plugins.swiper.length; i++) {
                var s = $(plugins.swiper[i]);
                var pag = s.find(".swiper-pagination"),
                    next = s.find(".swiper-button-next"),
                    prev = s.find(".swiper-button-prev"),
                    bar = s.find(".swiper-scrollbar"),
                    swiperSlide = s.find(".swiper-slide"),
                    autoplay = false;

                for (var j = 0; j < swiperSlide.length; j++) {
                    var $this = $(swiperSlide[j]),
                        url;

                    if (url = $this.attr("data-slide-bg")) {
                        $this.css({
                            "background-image": "url(" + url + ")",
                            "background-size": "cover"
                        })
                    }
                }

                swiperSlide.end()
                    .find("[data-caption-animate]")
                    .addClass("not-animated")
                    .end();

                s.swiper({
                    autoplay: !isNoviBuilder && $.isNumeric(s.attr('data-autoplay')) ? s.attr('data-autoplay') : false,
                    direction: s.attr('data-direction') ? s.attr('data-direction') : "horizontal",
                    effect: s.attr('data-slide-effect') ? s.attr('data-slide-effect') : "slide",
                    speed: s.attr('data-slide-speed') ? s.attr('data-slide-speed') : 600,
                    keyboardControl: s.attr('data-keyboard') === "true",
                    mousewheelControl: s.attr('data-mousewheel') === "true",
                    mousewheelReleaseOnEdges: s.attr('data-mousewheel-release') === "true",
                    nextButton: next.length ? next.get(0) : null,
                    prevButton: prev.length ? prev.get(0) : null,
                    pagination: pag.length ? pag.get(0) : null,
                    paginationClickable: pag.length ? pag.attr("data-clickable") !== "false" : false,
                    paginationBulletRender: pag.length ? pag.attr("data-index-bullet") === "true" ? function(swiper, index, className) {
                        return '<span class="' + className + '">' + (index + 1) + '</span>';
                    } : null : null,
                    scrollbar: bar.length ? bar.get(0) : null,
                    scrollbarDraggable: bar.length ? bar.attr("data-draggable") !== "false" : true,
                    scrollbarHide: bar.length ? bar.attr("data-draggable") === "false" : false,
                    loop: isNoviBuilder ? false : s.attr('data-loop') !== "false",
                    simulateTouch: s.attr('data-simulate-touch') && !isNoviBuilder ? s.attr('data-simulate-touch') === "true" : false,
                    onTransitionStart: function(swiper) {
                        toggleSwiperInnerVideos(swiper);
                    },
                    onTransitionEnd: function(swiper) {
                        toggleSwiperCaptionAnimation(swiper);
                    },
                    onInit: function(swiper) {
                        toggleSwiperInnerVideos(swiper);
                        toggleSwiperCaptionAnimation(swiper);
                        initLightGalleryItem(s.find('[data-lightgallery="item"]'), 'lightGallery-in-carousel');
                    }
                });
            }
        }

        // Copyright Year (Evaluates correct copyright year)
        if (plugins.copyrightYear.length) {
            plugins.copyrightYear.text(initialDate.getFullYear());
        }

        // Bootstrap tabs
        if (plugins.bootstrapTabs.length) {
            for (var i = 0; i < plugins.bootstrapTabs.length; i++) {
                var bootstrapTabsItem = $(plugins.bootstrapTabs[i]);

                //If have slick carousel inside tab - resize slick carousel on click
                if (bootstrapTabsItem.find('.slick-slider').length) {
                    bootstrapTabsItem.find('.tabs-custom-list > li > a').on('click', $.proxy(function() {
                        var $this = $(this);
                        var setTimeOutTime = isNoviBuilder ? 1500 : 300;

                        setTimeout(function() {
                            $this.find('.tab-content .tab-pane.active .slick-slider').slick('setPosition');
                        }, setTimeOutTime);
                    }, bootstrapTabsItem));
                }
            }
        }

        // Bootstrap Tooltips
        if (plugins.bootstrapTooltip.length) {
            var tooltipPlacement = plugins.bootstrapTooltip.attr('data-placement');
            initBootstrapTooltip(tooltipPlacement);

            $window.on('resize orientationchange', function() {
                initBootstrapTooltip(tooltipPlacement);
            })
        }

        // Google maps
        if (plugins.maps.length) {
            lazyInit(plugins.maps, initMaps);
        }

        // WOW
        if ($html.hasClass("wow-animation") && plugins.wow.length && !isNoviBuilder && isDesktop) {
            new WOW().init();
        }

        // Owl carousel
        if (plugins.owl.length) {
            for (var i = 0; i < plugins.owl.length; i++) {
                var c = $(plugins.owl[i]);
                plugins.owl[i].owl = c;

                initOwlCarousel(c);
            }
        }

        // RD Navbar
        if (plugins.rdNavbar.length) {
            var aliaces, i, j, len, value, values, responsiveNavbar;

            aliaces = ["-", "-sm-", "-md-", "-lg-", "-xl-", "-xxl-"];
            values = [0, 576, 768, 992, 1200, 1600];
            responsiveNavbar = {};

            for (i = j = 0, len = values.length; j < len; i = ++j) {
                value = values[i];
                if (!responsiveNavbar[values[i]]) {
                    responsiveNavbar[values[i]] = {};
                }
                if (plugins.rdNavbar.attr('data' + aliaces[i] + 'layout')) {
                    responsiveNavbar[values[i]].layout = plugins.rdNavbar.attr('data' + aliaces[i] + 'layout');
                }
                if (plugins.rdNavbar.attr('data' + aliaces[i] + 'device-layout')) {
                    responsiveNavbar[values[i]]['deviceLayout'] = plugins.rdNavbar.attr('data' + aliaces[i] + 'device-layout');
                }
                if (plugins.rdNavbar.attr('data' + aliaces[i] + 'hover-on')) {
                    responsiveNavbar[values[i]]['focusOnHover'] = plugins.rdNavbar.attr('data' + aliaces[i] + 'hover-on') === 'true';
                }
                if (plugins.rdNavbar.attr('data' + aliaces[i] + 'auto-height')) {
                    responsiveNavbar[values[i]]['autoHeight'] = plugins.rdNavbar.attr('data' + aliaces[i] + 'auto-height') === 'true';
                }

                if (isNoviBuilder) {
                    responsiveNavbar[values[i]]['stickUp'] = false;
                } else if (plugins.rdNavbar.attr('data' + aliaces[i] + 'stick-up')) {
                    responsiveNavbar[values[i]]['stickUp'] = plugins.rdNavbar.attr('data' + aliaces[i] + 'stick-up') === 'true';
                }

                if (plugins.rdNavbar.attr('data' + aliaces[i] + 'stick-up-offset')) {
                    responsiveNavbar[values[i]]['stickUpOffset'] = plugins.rdNavbar.attr('data' + aliaces[i] + 'stick-up-offset');
                }
            }


            plugins.rdNavbar.RDNavbar({
                anchorNav: !isNoviBuilder,
                stickUpClone: (plugins.rdNavbar.attr("data-stick-up-clone") && !isNoviBuilder) ? plugins.rdNavbar.attr("data-stick-up-clone") === 'true' : false,
                responsive: responsiveNavbar,
                callbacks: {
                    onStuck: function() {
                        var navbarSearch = this.$element.find('.rd-search input');

                        if (navbarSearch) {
                            navbarSearch.val('').trigger('propertychange');
                        }
                    },
                    onDropdownOver: function() {
                        return !isNoviBuilder;
                    },
                    onUnstuck: function() {
                        if (this.$clone === null)
                            return;

                        var navbarSearch = this.$clone.find('.rd-search input');

                        if (navbarSearch) {
                            navbarSearch.val('').trigger('propertychange');
                            navbarSearch.trigger('blur');
                        }

                    }
                }
            });


            if (plugins.rdNavbar.attr("data-body-class")) {
                document.body.className += ' ' + plugins.rdNavbar.attr("data-body-class");
            }
        }

        /**
         * Stacktable
         * @description Enables Stacktable plugin
         */
        if (plugins.stacktable.length) {
            var i;
            for (i = 0; i < plugins.stacktable.length; i++) {
                var stacktableItem = $(plugins.stacktable[i]);
                stacktableItem.stacktable();
            }
        }

        /**
         * RD Calendar
         * @description Enables RD Calendar plugin
         */
        if (plugins.calendar.length) {
            for (i = 0; i < plugins.calendar.length; i++) {
                var calendarItem = $(plugins.calendar[i]);

                calendarItem.rdCalendar({
                    days: calendarItem.attr("data-days") ? c.attr("data-days").split(/\s?,\s?/i) : ['Dom', 'Lun', 'Mar', 'Mie', 'Jue', 'Vie', 'Sab'],
                    month: calendarItem.attr("data-months") ? c.attr("data-months").split(/\s?,\s?/i) : ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Deciembre']
                });
            }
        }

        /**
         * RD Search
         * @description Enables search
         */
        if (plugins.search.length || plugins.searchResults) {
            var handler = "bat/rd-search.php";
            var defaultTemplate = '<h5 class="search_title"><a target="_top" href="#{href}" class="search_link">#{title}</a></h5>' +
                '<p>...#{token}...</p>' +
                '<p class="match"><em>Terms matched: #{count} - URL: #{href}</em></p>';
            var defaultFilter = '*.html';

            if (plugins.search.length) {

                for (i = 0; i < plugins.search.length; i++) {
                    var searchItem = $(plugins.search[i]),
                        options = {
                            element: searchItem,
                            filter: (searchItem.attr('data-search-filter')) ? searchItem.attr('data-search-filter') : defaultFilter,
                            template: (searchItem.attr('data-search-template')) ? searchItem.attr('data-search-template') : defaultTemplate,
                            live: (searchItem.attr('data-search-live')) ? searchItem.attr('data-search-live') : false,
                            liveCount: (searchItem.attr('data-search-live-count')) ? parseInt(searchItem.attr('data-search-live')) : 4,
                            current: 0,
                            processed: 0,
                            timer: {}
                        };

                    if ($('.rd-navbar-search-toggle').length) {
                        var toggle = $('.rd-navbar-search-toggle');
                        toggle.on('click', function() {
                            if (!($(this).hasClass('active'))) {
                                searchItem.find('input').val('').trigger('propertychange');
                            }
                        });
                    }

                    if (options.live) {
                        searchItem.find('input').on("keyup input propertychange", $.proxy(function() {
                            this.term = this.element.find('input').val().trim();
                            this.spin = this.element.find('.input-group-addon');
                            clearTimeout(this.timer);

                            if (this.term.length > 2) {
                                this.timer = setTimeout(liveSearch(this), 200);
                            } else if (this.term.length == 0) {
                                $('#' + this.live).addClass('cleared').html('');
                            }
                        }, options, this));
                    }

                    searchItem.submit($.proxy(function() {
                        $('<input />').attr('type', 'hidden')
                            .attr('name', "filter")
                            .attr('value', this.filter)
                            .appendTo(this.element);
                        return true;
                    }, options, this))
                }
            }

            if (plugins.searchResults.length) {
                var regExp = /\?.*s=([^&]+)\&filter=([^&]+)/g;
                var match = regExp.exec(location.search);

                if (match != null) {
                    $.get(handler, {
                        s: decodeURI(match[1]),
                        dataType: "html",
                        filter: match[2],
                        template: defaultTemplate,
                        live: ''
                    }, function(data) {
                        plugins.searchResults.html(data);
                    })
                }
            }
        }

        /**
         * UI To Top
         * @description Enables ToTop Button
         */
        if (isDesktop && !isNoviBuilder) {
            $().UItoTop({
                easingType: 'easeOutQuart',
                containerClass: 'ui-to-top icon icon-xs icon-circle icon-darker-filled mdi mdi-chevron-up'
            });
        }

        // Custom Toggles
        if (plugins.customToggle.length) {
            for (var i = 0; i < plugins.customToggle.length; i++) {
                var $this = $(plugins.customToggle[i]);

                $this.on('click', $.proxy(function(event) {
                    event.preventDefault();

                    var $ctx = $(this);
                    $($ctx.attr('data-custom-toggle')).add(this).toggleClass('active');
                }, $this));

                if ($this.attr("data-custom-toggle-hide-on-blur") === "true") {
                    $body.on("click", $this, function(e) {
                        if (e.target !== e.data[0] &&
                            $(e.data.attr('data-custom-toggle')).find($(e.target)).length &&
                            e.data.find($(e.target)).length === 0) {
                            $(e.data.attr('data-custom-toggle')).add(e.data[0]).removeClass('active');
                        }
                    })
                }

                if ($this.attr("data-custom-toggle-disable-on-blur") === "true") {
                    $body.on("click", $this, function(e) {
                        if (e.target !== e.data[0] && $(e.data.attr('data-custom-toggle')).find($(e.target)).length === 0 && e.data.find($(e.target)).length === 0) {
                            $(e.data.attr('data-custom-toggle')).add(e.data[0]).removeClass('active');
                        }
                    })
                }
            }
        }

        /**
         * Custom Waypoints
         */
        if (plugins.customWaypoints.length) {
            var i;
            $document.delegate("[data-custom-scroll-to]", "click", function(e) {
                e.preventDefault();
                $("body, html").stop().animate({
                    scrollTop: $("#" + $(this).attr('data-custom-scroll-to')).offset().top - 70
                }, 1000, function() {
                    $window.trigger("resize");
                });
            });
        }

        // lightGallery
        if (plugins.lightGallery.length) {
            for (var i = 0; i < plugins.lightGallery.length; i++) {
                initLightGallery(plugins.lightGallery[i]);
            }
        }

        // lightGallery item
        if (plugins.lightGalleryItem.length) {
            // Filter carousel items
            var notCarouselItems = [];

            for (var z = 0; z < plugins.lightGalleryItem.length; z++) {
                if (!$(plugins.lightGalleryItem[z]).parents('.owl-carousel').length &&
                    !$(plugins.lightGalleryItem[z]).parents('.swiper-slider').length &&
                    !$(plugins.lightGalleryItem[z]).parents('.slick-slider').length) {
                    notCarouselItems.push(plugins.lightGalleryItem[z]);
                }
            }

            plugins.lightGalleryItem = notCarouselItems;

            for (var i = 0; i < plugins.lightGalleryItem.length; i++) {
                initLightGalleryItem(plugins.lightGalleryItem[i]);
            }
        }

        // Dynamic lightGallery
        if (plugins.lightDynamicGalleryItem.length) {
            for (var i = 0; i < plugins.lightDynamicGalleryItem.length; i++) {
                initDynamicLightGallery(plugins.lightDynamicGalleryItem[i]);
            }
        }

        // Countdown
        if (plugins.countdown.length) {
            for (var i = 0; i < plugins.countdown.length; i++) {
                var
                    node = plugins.countdown[i],
                    countdown = aCountdown({
                        node: node,
                        from: node.getAttribute('data-from'),
                        to: node.getAttribute('data-to'),
                        count: node.getAttribute('data-count'),
                        tick: 100,
                    });
            }
        }

    });

    // section de los doctores
    $('#owl-carousel').owlCarousel({
        loop: true,
        margin: 0,
        nav: true,
        navText: [
            "<i class='fa fa-caret-left'></i>",
            "<i class='fa fa-caret-right'></i>"
        ],
        autoplay: true,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1
            },
            400: {
                items: 2
            },
            600: {
                items: 3
            },
            1000: {
                items: 6
            }
        }
    });

    var feed = new Instafeed({
        get: 'user',
        userId: '21309347957',
        clientId: 'b90c3e5ce0ce4201a7aa57d0c85f3676',
        accessToken: '21309347957.b90c3e5.76269460bdf748fb8a8ba0f4b0c655b2',
        template: '<div style="width:30%; display:inline-block;" class="instaimg"><a href="\{\{link\}\}" target="blank"><img width="100%" src="\{\{image\}\}" /></a></div>',
        limit: 9,
    });
    feed.run();

    var path = window.location.pathname.split("/").pop();

    if (path == '') {
        path = 'index.php'
    }

    var target = $('nav a[href="' + path + '"]');
    target.addClass('active');

    var showme = $('#speciality').on('change', function() {
        // $('option').on('click', function() {
        //     var id = $(this).attr("value");
        // });
        var atri = showme.val();
    });


    //Activar y llenar el select de las subcategorias dependiendo de la categoria seleccionada
    $.get('https://192.168.0.87/sinusandfacesystemapi/public/api/create/speciality',
        function(data, textStatus, xhr) {
            var speciality = (data.speciality);
            if (speciality.length > 0) {
                $('#speciality').addClass('active');
                $('#speciality').empty();
                for (var i = 0; i < speciality.length; i++) {
                    $('#speciality').append('<option value="' + speciality[i].id + '">' + speciality[i].name + '</option>');
                }
            } else {
                $('#speciality').attr('disabled', 'true');
                $('#speciality').empty();
            }
        });


    // $(document).ready(function() {
    var showChar = 550;
    var ellipsestext = "...";
    var moretext = '<strong>Leer Más...' + '<i class="fas fa-sort-down"></i></strong>';
    var lesstext = '<strong>...Leer Menos' + '<i class="fas fa-sort-up"></i></strong>';
    var content = $('.more').html();

    if (content.length > showChar) {
        var c = content.substr(0, showChar);
        var html = '<div class="abstract">' + c + ellipsestext + '</div>' + '<div class="morecontent">' + content + '</div>' + '<p><span class="morelink text-azuloscuro">' + moretext + '</span></p>';
        $('.more').html(html);
    }

    $('.morelink').click(function() {
        if ($(this).hasClass('less')) {
            $(this).removeClass('less');
            $(this).html(moretext);
            $('.abstract').removeClass('hidden');
        } else {
            $(this).addClass('less');
            $(this).html(lesstext);
            $('.abstract').addClass('hidden');
        }
        $(this).parent().prev().slideToggle('fast');
        $(this).prev().slideToggle('fast');
        return false;
        // });
    });

    // $(document).ready(function() {
    var showChar2 = 400;
    var ellipsestext2 = "...";
    var moretext2 = '<strong>Leer Más...' + '<i class="fas fa-sort-down"></i></strong>';
    var lesstext2 = '<strong>...Leer Menos' + '<i class="fas fa-sort-up"></i></strong>';
    var content2 = $('.emergencia').html();

    if (content2.length > showChar2) {
        var c2 = content2.substr(0, showChar2);
        var html2 = '<div class="abstract2">' + c2 + ellipsestext2 + '</div>' + '<div class="morecontent2">' + content2 + '</div>' + '<p><span class="morelink2 text-azuloscuro">' + moretext2 + '</span></p>';
        $('.emergencia').html(html2);
    }

    $('.morelink2').click(function() {
        if ($(this).hasClass('less2')) {
            $(this).removeClass('less2');
            $(this).html(moretext2);
            $('.abstract2').removeClass('hidden2');
        } else {
            $(this).addClass('less2');
            $(this).html(lesstext2);
            $('.abstract2').addClass('hidden2');
        }
        $(this).parent().prev().slideToggle('fast2');
        $(this).prev().slideToggle('fast2');
        return false;
        // });
    });

    $(window).scroll(function() {
        var windowWidth = $(window).width();


        if (windowWidth > 800) {
            var scroll = $(window).scrollTop();

            $('.parallaxperfil').css({
                transform: 'translate(0px, +' + scroll / 7.5 + '%)',
                top: '10px'
            });
        }

    });

    $(window).resize(function() {
        var windowWidth = $(window).width();
        if (windowWidth < 800) {
            $('.parallaxperfil').css({
                transform: 'translate(0px, 160%)'
            });
        }

    });

}());