(function ($) {
    $('.lef-value').circleProgress({

        /**
 03
      * This is the only required option. It should be from 0.0 to 1.0
 04
      * @type {number}
 05
      */
        value: 0.8,
        /**
        09
         * Size of the circle / canvas in pixels
        10
         * @type {number}
        11
         */

        size: 95.0,
        /**
        15
         * Initial angle for 0.0 value in radians
        16
         * @type {number}17
         */

        startAngle: -Math.PI,



        /**
        21
         * Width of the arc. By default it's auto-calculated as 1/14 of size, but you may set it explicitly in pixels
        22
         * @type {number|string}
        23
         */

        thickness: 'auto',
        color: ['#4EAF4E'],



        /**
        27
         * Fill of the arc. You may set it to:
        28
         *   - solid color:
        29
         *   - { color: '#3aeabb' }
        30
         *   - { color: 'rgba(255, 255, 255, .3)' }
        31
         *   - linear gradient (left to right):
        32
         *   - { gradient: ['#3aeabb', '#fdd250'], gradientAngle: Math.PI / 4 }
        33
         *   - { gradient: ['red', 'green', 'blue'], gradientDirection: [x0, y0, x1, y1] }
        34
         *   - image:
        35
         *   - { image: 'http://i.imgur.com/pT0i89v.png' }
        36
         *   - { image: imageObject }
        37
         *   - { color: 'lime', image: 'http://i.imgur.com/pT0i89v.png' } - color displayed until the image is loaded
        38
         */

        fill: {

            gradient: ['#3aeabb', '#fdd250']

        },
        /**
        44
         * Color of the "empty" arc. Only a color fill supported by now
        45
         * @type {string}
        46
         */

        emptyFill: 'rgba(0, 0, 0, .1)',



        /**
        50
         * <a href="https://www.jqueryscript.net/animation/">Animation</a> config (see jQuery animations: http://api.jquery.com/animate/)
        51
         */

        animation: {

            duration: 2000,

            easing: 'circleProgressEasing'
        },



        /**
        58
         * Default animation starts at 0.0 and ends at specified `value`. Let's call this direct animation.
        59
         * If you want to make reversed animation then you should set `animationStartValue` to 1.0.
        60
         * Also you may specify any other value from 0.0 to 1.0
        61
         * @type {number}
        62
         */

        animationStartValue: 0.0,



        /**
        66
         * Reverse animation and arc draw
        67
         * @type {boolean}
        68
         */

        reverse: true,



        /**
        72
         * Arc line cap ('butt' (default), 'round' and 'square')
        73
         * Read more: https://developer.mozilla.org/en-US/docs/Web/API/CanvasRenderingContext2D.lineCap
        74
         * @type {string}
        75
         */

        lineCap: 'butt',

    },
)})(jQuery);