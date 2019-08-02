/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 1);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/imagefill.js":
/*!***********************************!*\
  !*** ./resources/js/imagefill.js ***!
  \***********************************/
/*! no static exports found */
/***/ (function(module, exports) {

/**
 * imagefill.js
 * Author & copyright (c) 2013: John Polacek
 * johnpolacek.com
 * https://twitter.com/johnpolacek
 *
 * Dual MIT & GPL license
 *
 * Project Page: http://johnpolacek.github.io/imagefill.js
 *
 * The jQuery plugin for making images fill their containers (and be centered)
 *
 * EXAMPLE
 * Given this html:
 * <div class="container"><img src="myawesomeimage" /></div>
 * $('.container').imagefill(); // image stretches to fill container
 *
 * REQUIRES:
 * imagesLoaded - https://github.com/desandro/imagesloaded
 *
 */
;

(function ($) {
  $.fn.imagefill = function (options) {
    var $container = this,
        imageAspect = 1 / 1,
        containersH = 0,
        containersW = 0,
        defaults = {
      runOnce: false,
      target: 'img',
      throttle: 200 // 5fps

    },
        settings = $.extend({}, defaults, options);
    var $img = $container.find(settings.target).addClass('loading').css({
      'position': 'absolute'
    }); // make sure container isn't position:static

    var containerPos = $container.css('position');
    $container.css({
      'overflow': 'hidden',
      'position': containerPos === 'static' ? 'relative' : containerPos
    }); // set containerH, containerW

    $container.each(function () {
      containersH += $(this).outerHeight();
      containersW += $(this).outerWidth();
    }); // wait for image to load, then fit it inside the container

    $container.imagesLoaded().done(function (img) {
      imageAspect = $img.width() / $img.height();
      $img.removeClass('loading');
      fitImages();

      if (!settings.runOnce) {
        checkSizeChange();
      }
    });

    function fitImages() {
      containersH = 0;
      containersW = 0;
      $container.each(function () {
        imageAspect = $(this).find(settings.target).width() / $(this).find(settings.target).height();
        var containerW = $(this).outerWidth(),
            containerH = $(this).outerHeight();
        containersH += $(this).outerHeight();
        containersW += $(this).outerWidth();
        var containerAspect = containerW / containerH;

        if (containerAspect < imageAspect) {
          // taller
          $(this).find(settings.target).css({
            width: 'auto',
            height: containerH,
            top: 0,
            left: -(containerH * imageAspect - containerW) / 2
          });
        } else {
          // wider
          $(this).find(settings.target).css({
            width: containerW,
            height: 'auto',
            top: -(containerW / imageAspect - containerH) / 2,
            left: 0
          });
        }
      });
    }

    function checkSizeChange() {
      var checkW = 0,
          checkH = 0;
      $container.each(function () {
        checkH += $(this).outerHeight();
        checkW += $(this).outerWidth();
      });

      if (containersH !== checkH || containersW !== checkW) {
        fitImages();
      }

      setTimeout(checkSizeChange, settings.throttle);
    }

    return this;
  };
})(jQuery);

/***/ }),

/***/ 1:
/*!*****************************************!*\
  !*** multi ./resources/js/imagefill.js ***!
  \*****************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\Code\test\testrepos\resources\js\imagefill.js */"./resources/js/imagefill.js");


/***/ })

/******/ });